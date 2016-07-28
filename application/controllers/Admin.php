<?php
/**
* 
*/
class Admin extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation','', 'form');
		$this->load->model('admin_model', 'admin');
		$this->load->library('session');
	}
	/* Home page for Admin Panel. Shows Login Screen */
	function index() {
		$this->form->set_rules('username', 'Username', 'required|callback_password_check');
		$this->form->set_rules('pass', 'Password', 'required');
		if($this->form->run()) {
			redirect(base_url("admin/home"));
		}
		else {
			$data['title'] = "Login";
			$this->load->view('admin/adminlogin', $data);
		}
	}

	// password checking mechanism for user login
	function password_check($str) {
		$pass = $this->input->post('pass');
		if($this->admin->adminLogin($str, $pass) != 1) {
			$this->form->set_message('password_check', 'Username and Password does not match.');
			return FALSE;
		}
		else
			return TRUE;

	}

	// loads list of users and manpowers
	function home($type="") {
		$this->_session();
		if($type== "") {
			$data['username'] = $this->session->userdata('username');
			$data['users'] = $this->admin->getUsers();
			$data['title'] = "Userlist";
			$this->load->view('admin/head', $data);
			$this->load->view('admin/home');
		}
		elseif($type=="manpower") {
			$data['username'] = $this->session->userdata('username');
			$data['manpower'] = $this->admin->getManpowers();
			$data['title'] = "Manpower List";
			$this->load->view('admin/head', $data);
			$this->load->view('admin/manpower');
		}
	}

	// adds new manpower
	function addmanpower() {
		$this->_session();
		$this->form->set_rules('name', 'Manpower Name', 'required|min_length[4]');
		$this->form->set_rules('address', 'Address', 'required');
		$this->form->set_rules('phone', 'Phone Number', 'required');
		$this->form->set_rules('email', 'Email', 'required');
		$this->form->set_rules('website', 'Website', 'required');
		$this->form->set_rules('description', 'Description', 'required');
		$this->form->set_rules('thumb', 'Thumbnail', 'required');
		if($this->form->run()) {
			$this->admin->addManpower();
			$this->session->set_flashdata('message', 'Manpower Added Successfully');
			redirect(base_url("admin/home/manpower"));
		}
		else {
			$data['title'] = "Add Manpower";
			$this->load->view('admin/head', $data);
			$this->load->view('admin/addmanpower');
		}
	}

	// removes manpower
	function removemanpower($id) {
		$this->_session();
		if($id == NULL) {
			redirect(base_url('admin/home/manpower'));
		}
		else {
			if($this->admin->removeManpower($id) == 0) {
				$this->session->set_flashdata('message', 'This Manpower Doesn\'t Exists');
			}
			else {
				$this->session->set_flashdata('message', 'Manpower Deleted Successfully');
			}
			redirect(base_url('admin/home/manpower'));
		}
	}

	// logout
	function logout() {
		$this->session->sess_destroy();
		redirect(base_url('admin'));
	}

 // verify users
	function verify($id) {
		$this->_session();
		if($id == NULL) {
			redirect(base_url('admin/home'));
		}
		else {
			if($this->admin->verifyUser($id) == 0) {
				$this->session->set_flashdata('message', 'This Username Doesn\'t Exists or is Already Verified.');
			}
			else {
				$this->session->set_flashdata('message', 'User Verified Successfully.');
			}
			redirect(base_url('admin/home'));
		}
	}

	// checks if admin is logged in or not
	function _session() {
		if($this->session->userdata('admin') == '') {
			redirect(base_url('admin'));
		}
	}

}