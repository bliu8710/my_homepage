<?php

class Blog_model extends CI_Model{
	public function __construct() {
		parent::__construct();
		$this->load->database();
	}

	public function insert_entry() {
		$this->title = $_POST['title'];
		$this->description = $_POST['description'];
		$this->db->insert('blog_data', $this);
	}

	public function get_blog_all() {
		$query = $this->db->get('blog_data');
		return $query->result_array();

	}
}

?>