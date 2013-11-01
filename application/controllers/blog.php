<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Blog extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
		$this->load->model('Blog_model');
	}

	public function index() {
		$data['blogs'] = $this->Blog_model->get_blog_all();
		$this->load->view('blog', $data);
	}
	public function form()
	{
		$this->form_validation->set_rules('title', '标题', 'required');
		if ($this->form_validation->run() == FALSE) {
			// error
			$this->load->view('blog_form');
		} else {
			$this->Blog_model->insert_entry();
			$this->load->view('success');
		}
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */