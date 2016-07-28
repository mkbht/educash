<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pub extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	function __construct() {
		parent::__construct();
		$this->load->database();
		$this->load->model("Main_model","main");
		$this->load->library('session');
		$this->load->helper('html');
	}

	public function index()
	{
		$data['title'] = "Manpower Review";
		$data['data'] = $this->main->getHome();
		if(null !== $this->session->username)
			$data['logged'] = 1;
		else
			$data['logged'] = 0;
		$this->load->view('index',$data);
	}
	public function insert_review($id = FALSE) {
		$this->session->set_userdata("username","ramu");
		$text = $this->input->post('review');
		$rate = $this->input->post('rate');
		if(!isset($this->session->username))
			redirect("pub/login");
		$user = $this->session->username;
		$review = array("rating" => $rate, "user" => $user, "manpower" => $id, "text" => $text);
		if($this->db->insert("rating",$review))
			echo "प्रतिकिर्या को लागि धन्यवाद!";
	}

	
	protected function getRate($id) {
		return round($this->main->getRate($id),2);;
	}

	public function manpower($id = FALSE) {
		
		$data['power'] = $this->main->getData($id);
		$data['coment'] = $this->main->getComment($id);
		$data['total_rate'] = $this->db->get_where("rating",array("manpower" => $id))->num_rows();
		$data['rate'] = $this->getRate($id);
		$data['title'] = $data['power'][0]['name'];
		if(null !== $this->session->username)
			$data['logged'] = 1;
		else
			$data['logged'] = 0;
		$this->load->view("manpower",$data);
	}
}