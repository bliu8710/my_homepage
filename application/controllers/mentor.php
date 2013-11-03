<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mentor extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->helper('url');
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
		$this->load->library('upload');

		$this->load->model('Mentor_model');
	}

	/*public function index() {
		$data['blogs'] = $this->Blog_model->get_blog_all();
		$this->load->view('blog', $data);
	}*/


	public function apply() {
		$this->load->view('apply_form');
	}

	public function apply_exec() {
		$this->form_validation->set_rules($this->get_form_rule_config());
		if ($this->form_validation->run() == FALSE) {
			// error
			echo validation_errors();
			//$this->load->view('apply_form');
		} else {
			$upload_photo_result = $this->upload_photo_file();

			if ($upload_photo_result['success'] == 1) {
				$upload_cv_result = $this->upload_cv_file();

				if ($upload_cv_result['success'] == 1) {
					$this->Mentor_model->insert_entry(array(
						'firstname'        => $_POST['firstname'],
						'lastname'         => $_POST['lastname'],
						'primary_email'    => $_POST['email'],
						'university_email' => $_POST['email2'],
						'phone'            => $_POST['phone'],
						'skype'            => $_POST['skype'],
						'linkedin'         => $_POST['linkedin'],
						'facebook'         => $_POST['facebook'],
						'hometown'         => $_POST['hometown'],
						'location'         => $_POST['location'],
						'degree'           => $_POST['degree'],
						'degree2'          => $_POST['degree2'],
						'degree3'          => $_POST['degree3'],
						'job'              => $_POST['job'],
						'activities'       => $_POST['activities'],
						'languages'        => $_POST['languages'],// 3 data will come
						'hearabout'        => $_POST['hearabout'],
						'friend'           => $_POST['friend'],
						'blog1'            => $_POST['blog1'],
						'blog2'            => $_POST['blog2'],
						'photofile'        => $upload_photo_result['upload_data']['file_name'],
						'cvfile'           => $upload_cv_result['upload_data']['file_name'],
					));

					$this->load->view('success');

				} else {
					echo $upload_cv_result['error'];
				}
			} else {
				echo $upload_photo_result['error'];
			}
		}
	}

	private function upload_photo_file() {
		$config['upload_path'] = './uploads/photo/';
		$config['allowed_types'] = 'gif|jpg|png|bmp';
		$config['max_size']  = '0';
		$config['max_width']  = '0';
		$config['max_height']  = '0';

		$this->upload->initialize($config);
 
		if ( ! $this->upload->do_upload("photofile")) {
			$ret = array(
				'success' => 0,
				'error' => $this->upload->display_errors()
			);
		} else {
			$ret = array(
				'success' => 1,
				'upload_data' => $this->upload->data(),
			);
		}
		return $ret;
	}

	private function upload_cv_file() {
		$config['upload_path'] = './uploads/cv/';
		$config['allowed_types'] = 'pdf';
		$config['max_size']  = '0';
		$config['max_width']  = '0';
		$config['max_height']  = '0';

		$this->upload->initialize($config);
 
		if ( ! $this->upload->do_upload("cvfile")) {
			$ret = array(
				'success' => 0,
				'error' => $this->upload->display_errors()
			);
		} else {
			$ret = array(
				'success' => 1,
				'upload_data' => $this->upload->data(),
			);
		}
		return $ret;
	}

	private function get_form_rule_config() {
		//return array();

		return array(
			array(
				'field'   => 'firstname', 
				'label'   => 'First Name', 
				'rules'   => 'required'
			),
			array(
				'field'   => 'lastname', 
				'label'   => 'Last Name', 
				'rules'   => 'required'
			),
			array(
				'field'   => 'email', 
				'label'   => 'Primary Email Address', 
				'rules'   => 'required|valid_email'//|is_unique[mentor.email]'
			),
			array(
				'field'   => 'email2', 
				'label'   => 'University Email Address', 
				'rules'   => 'required|valid_email'
			),
			array(
				'field'   => 'phone', 
				'label'   => 'Cell Number', 
				'rules'   => 'required'
			),
			array(
				'field'   => 'skype', 
				'label'   => 'Skype Name', 
				'rules'   => 'required'
			),
			array(
				'field'   => 'linkedin', 
				'label'   => 'LinkedIn Profile Link', 
				'rules'   => 'required'
			),
			array(
				'field'   => 'facebook', 
				'label'   => 'Facebook Page Link', 
				'rules'   => 'required'
			),
			/*array(
				'field'   => 'agree', 
				'label'   => 'The agreement to "Terms of Employment"', 
				'rules'   => 'required'
			),*/
			array(
				'field'   => 'hometown', 
				'label'   => 'Hometown / Nationality', 
				'rules'   => 'required'
			),
			array(
				'field'   => 'location', 
				'label'   => 'Current Location', 
				'rules'   => 'required'
			),
			array(
				'field'   => 'degree', 
				'label'   => 'Undergraduate Name,Subject / Degree and Year', 
				'rules'   => 'required'
			),
			array(
				'field'   => 'job', 
				'label'   => 'Work History, Previous Employer(s) and Position(s)', 
				'rules'   => 'required'
			),
			array(
				'field'   => 'languages[]', 
				'label'   => 'Languages that you are comfortable advising students in', 
				'rules'   => 'required'
			),
			/*array(
				'field'   => 'photofile', 
				'label'   => 'Headshot photo', 
				'rules'   => 'required'
			),
			array(
				'field'   => 'cvfile', 
				'label'   => 'Your resume / CV',
				'rules'   => 'required'
			),*/
			array(
				'field'   => 'blog1', 
				'label'   => 'Share one advice for an international student starting at your university', 
				'rules'   => 'required'
			),
			array(
				'field'   => 'blog2', 
				'label'   => 'Share one of your greatest insights on the university admissions process', 
				'rules'   => 'required'
			)
		);
	}
}

/* End of file mentor.php */
/* Location: ./application/controllers/mentor.php */