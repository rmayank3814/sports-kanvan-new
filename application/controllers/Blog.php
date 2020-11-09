<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {

	public function __construct() {
        parent::__construct();
        
        $this->load->model('blog_model');
		$this->load->helper(array('form','url','html'));
		$this->load->library(array('form_validation','session'));
	}
	
    function index(){
		$this->load->view('templates/admin_header');
		$this->load->view('blog/blogs');
		$this->load->view('templates/admin_footer');
	}

	function blogs(){
		$this->load->view('templates/admin_header');
		if(isset($_POST['blog_button'])) {
			$config['upload_path'] = './main/images/blog';
			$config['allowed_types'] = 'gif|jpg|png|jpeg';
			$config['max_size'] = 2000;
			$config['max_width'] = 1500;
			$config['max_height'] = 1500;

			$this->load->library('upload', $config);
			if (!$this->upload->do_upload('photo')) {
				$error = array('error' => $this->upload->display_errors());
			} else {
				$_POST['photo'] = $this->upload->data('file_name');
				$this->blog_model->insert_blog();
			}
		}
		redirect('blog');
		$this->load->view('templates/admin_footer');
	}

	function update_blog_details(){
		$this->load->view('templates/admin_header');
		if(isset($_POST['update_blog_button'])) {
			$config['upload_path'] = './main/images/blog';
			$config['allowed_types'] = 'gif|jpg|png|jpeg';
			$config['max_size'] = 2000;
			$config['max_width'] = 1500;
			$config['max_height'] = 1500;

			$this->load->library('upload', $config);
			if (!$this->upload->do_upload('photo')) {
				$error = array('error' => $this->upload->display_errors());
			} else {
				$_POST['photo'] = $this->upload->data('file_name');
				$id = $this->input->post('id');
				$this->blog_model->update_blog($id);
			}
		}
		redirect('blog');
		$this->load->view('templates/admin_footer');
	}


}