<?php

class Mentor_model extends CI_Model{
	public function __construct() {
		parent::__construct();
		$this->load->database();
	}

	public function insert_entry($param) {
		//Step 1
		$this->firstname = $param['firstname'];
		$this->lastname = $param['lastname'];
		$this->primary_email = $param['primary_email'];
		$this->university_email = $param['university_email'];
		$this->phone = $param['phone'];
		$this->skype = $param['skype'];
		$this->linkedin = $param['linkedin'];
		$this->facebook = $param['facebook'];
		//Step 2
		$this->hometown = $param['hometown'];
		$this->location = $param['location'];
		$this->degree = $param['degree'];
		$this->degree2 = $param['degree2'];
		$this->degree3 = $param['degree3'];
		$this->job = $param['job'];
		$this->activities = $param['activities'];
		$this->languages = $param['languages'];
		//Step 3
		$this->photofile = $param['photofile'];
		$this->cvfile = $param['cvfile'];
		$this->hearabout = $param['hearabout'];
		$this->friend = $param['friend'];
		$this->blog1 = $param['blog1'];
		$this->blog2 = $param['blog2'];

		$this->db->insert('mentor', $this);
	}

	public function get_all() {
		$query = $this->db->get('mentor');
		return $query->result_array();

	}
}

?>