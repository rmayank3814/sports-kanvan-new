<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Services extends CI_Controller {

	public function __construct() {
        parent::__construct();
        
        //$this->load->model('banner_model');
		$this->load->helper(array('form','url','html'));
		$this->load->library(array('form_validation','session'));
    }

    function index(){
        $this->load->view('templates/header');
		$this->load->view('services');
		$this->load->view('templates/footer');
    }

    function yoga(){
        $this->load->view('templates/header');
		$this->load->view('services/yoga');
		$this->load->view('templates/footer');
    }

}