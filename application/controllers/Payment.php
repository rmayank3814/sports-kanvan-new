<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Payment extends CI_Controller {

	public function __construct() {
        parent::__construct();
        
        // $this->load->model('payment_model');
		$this->load->helper(array('form','url','html'));
		$this->load->library(array('form_validation','session'));
	}
	
    function index(){
        $this->cashfree();
    }

    function cashfree(){
        $this->load->view('templates/header');
        $this->load->view('payment/cashfree');
        $this->load->view('templates/footer');
    }

}