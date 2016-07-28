<?php
/**
* 
*/
class Main_model extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
	}
	public function getData($id) {
		$query = $this->db->get_where("manpower",array("id" => $id));
		return $query->result_array();
	}

	public function getComment($id) {
		$query = $this->db->get_where("rating",array("manpower" => $id));
		$this->db->order_by('id', 'DESC');
		return $query->result_array();
	}

	public function getHome() {
		$query = $this->db->get_where("manpower");
		return $query->result_array();
	}

	public function getRate($id) {
		$query = $this->db->get_where("rating",array("manpower" => $id));
		$v = $query->num_rows();

		$query1 = $this->db->get("rating");
		$v1 = $query1->num_rows();

		$this->db->select_sum('rating');
		$ra1 = $this->db->get("rating");
		$r1 = $ra1->result_array();

		$this->db->select_sum('rating');
		$ra = $this->db->get_where("rating",array("manpower" => $id));
		$r = $ra->result_array();
		$m = 50;

		$c = $r1[0]['rating'] / $v1;
		//return ($v/($v + $m)) * $r[0]['rating'] + ($m/($v + $m)) * $c;
		return ($v * ($r[0]['rating']/$v) + $m * $c)/($v + $m);
	}
	public function getTop() {

	}
}
