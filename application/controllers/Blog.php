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
		if(isset($_POST['blog_button'])){
			$this->blog_model->insert_blog();
		}
		$this->load->view('blog/blogs');
		$this->load->view('templates/admin_footer');
	}

}