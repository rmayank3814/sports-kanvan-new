<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Payment extends CI_Controller {

	public function __construct() {
        parent::__construct();
        
        $this->load->model('payment_model');
		$this->load->helper(array('form','url','html'));
		$this->load->library(array('form_validation','session'));
	}
	
    function index(){
        // $cid = $_GET['id'];
        // echo $cid;die;
        $this->load->view('templates/header');
        $query = $this->payment_model->fetch_user_data($id);
        $user_data = $query->result_array();
        $this->load->view('payment/verify_details',$user_data[0]);
        $this->load->view('templates/footer');
    }

    // function verify_details(){
    //     $cid = $_GET['id'];
    //     echo $cid;die;
    //     $this->load->view('templates/header');
    //     $query = $this->payment_model->fetch_user_data($id);
    //     $user_data = $query->result_array();
    //     $this->load->view('payment/verify_details',$user_data[0]);
    //     $this->load->view('templates/footer');
    // }

}