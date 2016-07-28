<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_Model extends CI_Model {
	public function __construct() {
		parent::__construct();
		$this->load->database();
	}

	public function adminLogin($username, $password) {
		$this->db->where(array('username' => $username));
		$query = $this->db->get('admin');
		if($query->num_rows() !=0) {
		$row = $query->row();
		if(password_verify($password, $row->pass)) {
			$this->session->set_userdata(array(
				'logged' => 1,
				'admin' => $username
				));
			return 1;
		}
		}
		return 0;
	}

	public function getUsers() {
		$this->db->select('id, username, fname, lname, paddress, isverified');
		$query = $this->db->get('user');
		return $query->result_array();
	}

	public function getManpowers() {
		$this->db->select('id, name, address, email, website, phone, description, thumb, id as action');
		$query = $this->db->get('manpower');
		return $query->result_array();
	}

	public function addManpower() {
		$name = $this->input->post('name');
		$address = $this->input->post('address');
		$phone = $this->input->post('phone');
		$email = $this->input->post('email');
		$website = $this->input->post('website');
		$description = $this->input->post('description');
		$thumb = $this->input->post('thumb');
		$data = array(
				'name' => $name,
				'address' => $address,
				'phone' => $phone,
				'email' => $email,
				'website' => $website,
				'description' => $description,
				'thumb' => $thumb
			);
		$this->db->insert('manpower', $data);
	}

	function removeManpower($id) {
		$query = $this->db->get_where('manpower', array('id' => $id));
		if($query->num_rows() == 1) {
			$this->db->delete('manpower', array('id' => $id));
			return 1;
		}
		return 0;
	}

	function verifyUser($id) {
		$query = $this->db->get_where('user', array('id' => $id));
		if($query->num_rows() == 1) {
			$this->db->where('id', $id);
			$this->db->update('user', array('isverified' => 1));
			return 1;
		}
		return 0;
	}

}

/* End of file Admin_Model.php */
/* Location: ./application/models/Admin_Model.php */