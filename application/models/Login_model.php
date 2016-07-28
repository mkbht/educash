<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function login($username, $password) {
		$this->db->where(array('username' => $username));
		$query = $this->db->get('user');
		if($query->num_rows() !=0) {
		$row = $query->row();
		if(password_verify($password, $row->password)) {
			$this->session->set_userdata(array(
				'logged' => 1,
				'username' => $username
				));
			return 1;
		}
		}
		return 0;
	}

	public function userExists($username) {
		$query = $this->db->get_where('user', array('username' => $username));
		if($query->num_rows() == 0)
			return 0;
		else
			return 1;
	}

	public function signup() {
		$data = array(
				'username' => $this->input->post('username'),
				'password' => password_hash($this->input->post('pass'), PASSWORD_DEFAULT),
				'fname' => $this->input->post('fname'),	
				'lname' => $this->input->post('lname'),
				'paddress' => $this->input->post('address')
			);
		$this->db->insert('user', $data);
		$this->session->set_userdata(array(
				'logged' => 1,
				'username' => $username
				));
	}

}

/* End of file Login_model.php */
/* Location: ./application/models/Login_model.php */