<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {

	public function __construct() {
        parent::__construct();

        $this->load->model('users_model');
		$this->load->helper(array('form','url','html'));
		$this->load->library(array('form_validation','session'));
    }
    public function index()
	{
		$this->load->view('templates/header');
		$this->load->view('pages/home');
		$this->load->view('templates/footer');
	}

	public function registration() {
		$this->load->view('templates/header');

        $this->form_validation->set_rules('name', 'Name','trim|required|min_length[2]|max_length[50]');
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|is_unique[users.email]');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[8]');
		$this->form_validation->set_rules('passconf', 'Password Confirmation', 'trim|required|matches[password]');
		
		if(isset($_POST['registration'])){
			if ($this->form_validation->run() === FALSE) { 
				redirect('pages/registration');
			}
			else {
				$this->users_model->users_data();
				redirect('pages/login');	
			}
		}
		$this->load->view('pages/registration');
		$this->load->view('templates/footer');
	}
	
	public function medical(){
		$sess_id = $this->session->userdata('id');
		$this->get_medical($sess_id);
		$this->load->view('templates/header');
		
		if(isset($_POST['medical'])){
			$this->users_model->medical_data($sess_id);
			redirect('pages/about');
		}
		$this->load->view('templates/footer');

	}
	
	public function dashboard() {
		$this->load->view('templates/header');
		$this->load->view('pages/dashboard');
		$this->load->view('templates/footer');	
	}
	
	function logout(){
		$this->session->sess_destroy();
		redirect(base_url());
	}
	   
	function login(){
		$this->load->view('templates/header');
		$email = $this->input->post('email');
		$password = md5($this->input->post('password'));

		$query = $this->users_model->login_process($email,$password);
		
		$this->form_validation->set_rules('email', 'Email', 'required|callback_validateUser[' . $query->num_rows() . ']');
		$this->form_validation->set_rules('password', 'Password', 'required');
		
		$this->form_validation->set_error_delimiters('<div class="error">', '</div>');
		$this->form_validation->set_message('required', 'Enter %s');
		
		if ($this->form_validation->run() == FALSE) {
			$this->load->view('pages/login');
		}else {
			$user = $query->row_array();
			if(!empty($user)) {
				$this->session->set_userdata($user);
				redirect('pages/dashboard');
			} else {
				redirect('pages/login');
			}
		}
		$this->load->view('templates/footer');	
	}
	
	public function validateUser($email,$recordCount){
		if ($recordCount != 0){
			return TRUE;
		}else{
			$this->form_validation->set_message('validateUser', 'Invalid %s or Password');
			return FALSE;
		}
	}
	   
	function privacy_policy(){
	$this->load->view('pages/privacy_policy');
	}

	function contact(){
		$this->load->view('templates/header');
		$this->load->view('pages/contact');
		$this->load->view('templates/footer');
	}

	function about(){
		$this->load->view('pages/about');
	}
    
    public function change_password() {

		$this->load->view('templates/header');

		$old_pass = md5($this->input->post('old_pass'));
		$new_pass = md5($this->input->post('new_pass'));
		$confirm_pass = md5($this->input->post('confirm_pass'));
		$session_id = $this->session->userdata('id');
		$this->form_validation->set_rules('old_pass', 'Old Password', 'required|callback_oldPassCheck');
    	$this->form_validation->set_rules('new_pass', 'New Password', 'required|min_length[8]');
		$this->form_validation->set_rules('confirm_pass', 'Confirm Password', 'required|matches[new_pass]');

		$this->form_validation->set_error_delimiters('<div class="error">', '</div>');
		$this->form_validation->set_message('required', 'Enter %s');


		if(isset($_POST['change_password'])){
			if($this->form_validation->run() == false){
				redirect('pages/change_password');
			}
			else{
				$this->users_model->change_pass($session_id,$new_pass);
				redirect('pages/contact');
			}
		}
		$this->load->view('pages/change_password');
		$this->load->view('templates/footer');
	}
	
	function oldPassCheck($old_pass){
		$session_id = $this->session->userdata('id');
		$this->db->where('id', $session_id);
		$query = $this->db->get('users');
		$row = $query->row_array();
		if($row['password'] == md5($old_pass)){
			return true;
		}
        return false;
	}
	
	function tfa() {
		$sess_id = $this->session->userdata('id');
		$this->get_tfa($sess_id);
		$this->load->view('templates/header');

		if(isset($_POST['tfa_button'])){
			$this->users_model->tfa_insert($sess_id);
			redirect('pages/about');
		}
		$this->load->view('pages/tfa');
		$this->load->view('templates/footer');
	}

	function ptc() {
		$sess_id = $this->session->userdata('id');
		$this->get_ptc($sess_id);
		$this->load->view('templates/header');

		if(isset($_POST['ptc_button'])){
			$this->users_model->ptc_insert($sess_id);
			redirect('pages/about');
		}
		$this->load->view('templates/footer');
	}

	function community() {
		$sess_id = $this->session->userdata('id');
		$this->get_community($sess_id);
		$this->load->view('templates/header');
		if(isset($_POST['community_button'])){
			$this->users_model->community_insert($sess_id);
			redirect('pages/about');
		}
		$this->load->view('templates/footer');	
	}

	function agreement() {
		$sess_id = $this->session->userdata('id');
		$this->get_agreement($sess_id);
		$this->load->view('templates/header');
		if(isset($_POST['agreement_button'])){
			$userdata = $this->users_model->agreement_insert($sess_id);
			redirect('pages/about');
		}
		$this->load->view('templates/footer');	
	}

	public function get_community($sess_id) {
			$userdata= $this->users_model->get_community_data($sess_id);
            $this->load->view('pages/community', $userdata);
		}

	public function get_agreement($sess_id) {
		$userdata = $this->users_model->get_agreement_data($sess_id);
		$this->load->view('pages/agreement', $userdata);
	}	
		
	public function get_ptc($sess_id) {
		$userdata = $this->users_model->get_ptc_data($sess_id);
		$this->load->view('pages/ptc', $userdata);
	}

	public function get_tfa($sess_id) {
		$userdata = $this->users_model->get_tfa_data($sess_id);
		$this->load->view('pages/tfa', $userdata);
	}

	public function get_medical($sess_id) {
		$userdata = $this->users_model->get_medical_data($sess_id);
		$this->load->view('pages/medical', $userdata);
	}
	
}
