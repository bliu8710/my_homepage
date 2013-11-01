<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Hello extends CI_Controller {
	public function __construct() {
		parent::__construct();
	}

	public function index()
	{
		//echo 'hello world';
		$this->load->view('hello_view');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */