<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{		
		parent::__construct();
		$this->load->library('form_validation','', 'form');
		$this->load->model('Login_model', 'login');
		$this->load->library('session');
	}

	// login page
	function index() {
		$this->form->set_rules('username', 'Username', 'required|callback_password_check');
		$this->form->set_rules('pass', 'Password', 'required');
		if($this->form->run()) {
			redirect(base_url("pub"));
		}
		else {
			$this->load->view('login');
		}
	}

	// password matching function
	function password_check($str) {
		$pass = $this->input->post('pass');
		if($this->login->login($str, $pass) != 1) {
			$this->form->set_message('password_check', 'Username and Password does not match.');
			return FALSE;
		}
		else
			return TRUE;

	}

	// signup
	public function signup() {
		$this->form->set_rules('username', 'Username', 'required|alpha_dash|min_length[6]|callback_username_exists');
		$this->form->set_rules('pass', 'Password', 'required|min_length[6]');
		$this->form->set_rules('fname', 'First Name', 'required');
		$this->form->set_rules('lname', 'Last Name', 'required');
		$this->form->set_rules('address', 'Address', 'required');
		if($this->form->run()) {
			$this->login->signup();
			redirect(base_url('pub'));
		}
		else
			$this->load->view('signup');
	}

	// check if username already exists
	public function username_exists($username) {
		if($this->login->userExists($username) != 1)
			return TRUE;
		else {
			$this->form->set_message('username_exists', 'Username already exists.');
			return FALSE;
		}
	}

}

/* End of file Login.php */
/* Location: ./application/controllers/Login.php */