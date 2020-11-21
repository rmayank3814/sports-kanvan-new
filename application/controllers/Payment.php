<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Payment extends CI_Controller {

	public function __construct() {
        parent::__construct();
        
        $this->load->model('payment_model');
		$this->load->helper(array('form','url','html'));
		$this->load->library(array('form_validation','session'));
	}
	
    function index($orderId){
        $this->load->view('templates/header');
        $query = $this->payment_model->fetch_user_data($orderId);
        $data['user_data'] = $query->result_array();
        $this->load->view('payment/verify_details',$data);
        $this->load->view('templates/footer');
    }

    function return(){
        $this->load->view('templates/header');
        $secretKey = "1b2d5925293f713f0458ff9329d9745b0f4d9300"; 
        $orderId = $_POST["orderId"];
        $orderAmount = $_POST["orderAmount"];
        $referenceId = $_POST["referenceId"];
        $txStatus = $_POST["txStatus"];
        $paymentMode = $_POST["paymentMode"];
        $txMsg = $_POST["txMsg"];
        $txTime = $_POST["txTime"];
        $signature = $_POST["signature"];
        $data = $orderId.$orderAmount.$referenceId.$txStatus.$paymentMode.$txMsg.$txTime;
        $hash_hmac = hash_hmac('sha256', $data, $secretKey, true) ;
        $computedSignature = base64_encode($hash_hmac);
       
        $this->payment_model->insert_payment_data($orderId);

        if (($signature == $computedSignature) && ($txStatus == 'SUCCESS')) {
            $this->session->set_flashdata('success', 'Success...');
        }else{
            $this->session->set_flashdata('failure', 'Something Went Wrong!!!');
        }
        $this->load->view('payment/return');
        $this->load->view('templates/footer');
    }

}