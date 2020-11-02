<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {

	public function __construct() {
        parent::__construct();

        $this->load->model('users_model');
		$this->load->helper(array('form','url','html'));
		$this->load->library(array('form_validation','session'));
	}
	
    function index(){
		$this->load->view('templates/header');
		$this->load->view('pages/home');
		$this->load->view('templates/footer');
	}
	

	function registration() {
		$this->load->view('templates/header');
		$this->form_validation->set_rules('fname', 'First name','required|min_length[2]|max_length[50]|regex_match[/^[A-Za-z]+$/]');
		$this->form_validation->set_rules('lname', 'Last name','required|min_length[2]|max_length[50]|regex_match[/^[A-Za-z]+$/]');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email|regex_match[/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/]|is_unique[users.email]');
		$this->form_validation->set_rules('password', 'Password', 'required|regex_match[/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[^a-zA-Z0-9])(?!.*\s).{8,15}$/]|min_length[8]');
		$this->form_validation->set_rules('passconf', 'Confirm Password', 'required|matches[password]');
		$this->form_validation->set_rules('mobile', 'Mobile number','required|min_length[10]|max_length[12]|regex_match[/^[0]?[6789]\d{9}$/]');
		$this->form_validation->set_rules('gender', 'Gender','required');
		$this->form_validation->set_rules('dob', 'Birth Date','required');
		$this->form_validation->set_rules('emergency', 'Emergency contact','required|min_length[10]|max_length[12]|regex_match[/^[0]?[6789]\d{9}$/]');
		$this->form_validation->set_rules('shift', 'Shift','required');
		$this->form_validation->set_rules('address1', 'Address','required');

		$this->form_validation->set_error_delimiters('<div class="error">', '</div>');
		$this->form_validation->set_message('required', 'Enter %s');

		if(isset($_POST['registration']) && $this->form_validation->run()) { 
			$this->users_model->users_data();
			redirect('pages/login');
		}
		$this->load->view('pages/registration');
		$this->load->view('templates/footer');
	}
	
	function medical(){
		$sess_id = $this->session->userdata('id');
		$this->load->view('templates/header');
		$this->form_validation->set_rules('option1', 'Field-1','required');
		$this->form_validation->set_rules('physical_examination', 'Field-2','required');
		$this->form_validation->set_rules('option2', 'Field-3','required');
		$this->form_validation->set_rules('option4', 'Field-4','required');
		$this->form_validation->set_rules('option5', 'Field-5','required');
		$this->form_validation->set_rules('option6', 'Field-6','required');
		$this->form_validation->set_rules('option7', 'Field-7','required');
		$this->form_validation->set_rules('option8', 'Field-8','required');
		$this->form_validation->set_rules('option9', 'Field-9','required');
		$this->form_validation->set_rules('option10', 'Field-10','required');
		$this->form_validation->set_rules('option11', 'Field-11','required');
		$this->form_validation->set_rules('option12', 'Field-12','required');
		$this->form_validation->set_rules('option13', 'Field-13','required');
		$this->form_validation->set_rules('option14', 'Field-14','required');
		$this->form_validation->set_rules('option15', 'Field-15','required');
		$this->form_validation->set_rules('option16', 'Field-16','required');
		$this->form_validation->set_rules('option17', 'Field-17','required');
		$this->form_validation->set_rules('option18', 'Field-18','required');
		$this->form_validation->set_rules('option19', 'Field-19','required');
		$this->form_validation->set_rules('option20', 'Field-20','required');
		$this->form_validation->set_rules('option21', 'Field-21','required');
		$this->form_validation->set_rules('option22', 'Field-22','required');
		$this->form_validation->set_rules('option23', 'Field-23','required');
		$this->form_validation->set_rules('option24', 'Field-24','required');
		$this->form_validation->set_rules('option25', 'Field-25','required');
		$this->form_validation->set_rules('option26', 'Field-26','required');
		$this->form_validation->set_rules('option27', 'Field-27','required');
		$this->form_validation->set_rules('option28', 'Field-28','required');
		$this->form_validation->set_rules('option29', 'Field-29','required');
		$this->form_validation->set_rules('option30', 'Field-30','required');
		$this->form_validation->set_rules('option31', 'Field-31','required');
		$this->form_validation->set_rules('sign', 'Sign name','required|min_length[2]|max_length[50]|regex_match[/^[A-Za-z]+$/]');

		$this->form_validation->set_error_delimiters('<div class="error">', '</div>');
		$this->form_validation->set_message('required', 'Enter %s');
		
		if(isset($_POST['medical']) && $this->form_validation->run()){
			$this->users_model->medical_data($sess_id);
			redirect('pages/tfa');
		}
		$this->load->view('pages/medical');
		$this->load->view('templates/footer');
	}
	
	function logout(){
		$this->session->sess_destroy();
		redirect();
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
		
		if(isset($_POST['login']) && $this->form_validation->run()){
			$user = $query->row_array();
			if(!empty($user)) {
				$this->session->set_userdata($user);
				redirect('pages/medical');
			} 	
		}
		$this->load->view('pages/login');
		$this->load->view('templates/footer');
    }
	
	function validateUser($email,$recordCount){
		if ($recordCount != 0){
			return TRUE;
		}else{
			$this->form_validation->set_message('validateUser', 'Invalid %s or Password');
			return FALSE;
		}
	}
	   
	function privacy_policy(){
		$this->load->view('templates/header');
		$this->load->view('pages/privacy_policy');
		$this->load->view('templates/footer');
	}
	function blog(){
		$this->load->view('templates/header');
		$this->load->view('pages/blog');
		$this->load->view('templates/footer');
	}
	function testimonial(){
		$this->load->view('templates/header');
		$this->load->view('pages/testimonial');
		$this->load->view('templates/footer');
	}
	function faq(){
		$this->load->view('templates/header');
		$this->load->view('pages/faq');
		$this->load->view('templates/footer');
	}

	function contact(){
		$this->load->view('templates/header');
		$this->load->view('pages/contact');
		$this->load->view('templates/footer');
	}

	function about(){
		$this->load->view('templates/header');
		$this->load->view('pages/about');
		$this->load->view('templates/footer');
	}
    
    function change_password() {

		$this->load->view('templates/header');
		$this->form_validation->set_rules('old_pass', 'Old Password', 'required|callback_oldPassCheck');
    	$this->form_validation->set_rules('new_pass', 'New Password', 'required|min_length[8]|regex_match[/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[^a-zA-Z0-9])(?!.*\s).{8,15}$/]');
		$this->form_validation->set_rules('confirm_pass', 'Confirm Password', 'required|matches[new_pass]');

		$this->form_validation->set_error_delimiters('<div class="error">', '</div>');
		$this->form_validation->set_message('required', 'Enter %s');


		if(isset($_POST['change_password']) && $this->form_validation->run()){
			$session_id = $this->session->userdata('id');
			$new_pass = md5($this->input->post('new_pass'));
			$this->users_model->change_pass($session_id,$new_pass);
			redirect();
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
	}
	
	function tfa() {
		$sess_id = $this->session->userdata('id');
		
		$this->load->view('templates/header');
		$this->form_validation->set_rules('height', 'Field-1','required');
		$this->form_validation->set_rules('weight', 'Field-2','required');
		$this->form_validation->set_rules('race', 'Field-3','required');
		$this->form_validation->set_rules('fat', 'Field-4','required');
		$this->form_validation->set_rules('biceps', 'Field-5','required');
		$this->form_validation->set_rules('upper', 'Field-6','required');
		$this->form_validation->set_rules('mid', 'Field-7','required');
		$this->form_validation->set_rules('buttocks', 'Field-8','required');
		$this->form_validation->set_rules('hips', 'Field-9','required');
		$this->form_validation->set_rules('waist', 'Field-10','required');
		$this->form_validation->set_rules('chest', 'Field-11','required');
		$this->form_validation->set_rules('calves', 'Field-12','required');
		$this->form_validation->set_rules('handed', 'Field-13','required');
		$this->form_validation->set_rules('posture', 'Field-14','required');
		$this->form_validation->set_rules('body', 'Field-15','required');
		$this->form_validation->set_rules('parent', 'Field-16','required');
		$this->form_validation->set_rules('loss', 'Field-17','required');
		$this->form_validation->set_rules('problem', 'Field-18','required');
		$this->form_validation->set_rules('rockport', 'Field-19','required');
		$this->form_validation->set_rules('step', 'Field-20','required');
		$this->form_validation->set_rules('resting', 'Field-17','required');
		$this->form_validation->set_rules('cardio', 'Field-18','required');
		$this->form_validation->set_rules('strength', 'Field-19','required');
		$this->form_validation->set_rules('flexibility', 'Field-20','required');
		$this->form_validation->set_rules('devoted', 'Field-17','required');
		$this->form_validation->set_rules('current', 'Field-18','required');
		$this->form_validation->set_rules('energy', 'Field-19','required');

		$this->form_validation->set_error_delimiters('<div class="error">', '</div>');
		$this->form_validation->set_message('required', 'Enter %s');

		if(isset($_POST['tfa_button']) && $this->form_validation->run()){
			$this->users_model->tfa_insert($sess_id);
			redirect('pages/ptc');
		}
		$this->load->view('pages/tfa');
		$this->load->view('templates/footer');
	}

	function ptc() {
		$sess_id = $this->session->userdata('id');
		$this->load->view('templates/header');

		$this->form_validation->set_rules('investment', 'Total Investment','required');
		$this->form_validation->set_rules('method', 'Method of Payment','required');
		$this->form_validation->set_rules('print', 'Print Name','required|min_length[2]|max_length[50]|regex_match[/^[A-Za-z]+$/]');
		$this->form_validation->set_rules('sign', 'Sign Name','required|min_length[2]|max_length[50]|regex_match[/^[A-Za-z]+$/]');
		
		$this->form_validation->set_error_delimiters('<div class="error">', '</div>');
		$this->form_validation->set_message('required', 'Enter %s');

		if(isset($_POST['ptc_button']) && $this->form_validation->run()){
			$this->users_model->ptc_insert($sess_id);
			redirect('pages/community');
		}
		$this->load->view('pages/ptc');
		$this->load->view('templates/footer');
	}

	function community() {
		$sess_id = $this->session->userdata('id');
		$this->load->view('templates/header');
		$this->form_validation->set_rules('name', 'Name','required|regex_match[/^[a-zA-Z]+(?:\s[a-zA-Z]+)+$/]');
		$this->form_validation->set_rules('full_name1', 'Plus-One Full Name','required|regex_match[/^[a-zA-Z]+(?:\s[a-zA-Z]+)+$/]');
		$this->form_validation->set_rules('contact1', 'Plus-One Contact Number','required|regex_match[/^[0]?[6789]\d{9}$/]');
		$this->form_validation->set_rules('relationship1', 'Plus-One Relationship','required');
		//$this->form_validation->set_rules('email1', 'Plus-One Email','regex_match[/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[^a-zA-Z0-9])(?!.*\s).{8,15}$/]');
		$this->form_validation->set_rules('full_name2', 'Plus-One Full Name','required|regex_match[/^[a-zA-Z]+(?:\s[a-zA-Z]+)+$/]');
		$this->form_validation->set_rules('contact2', 'Plus-One Contact Number','required|regex_match[/^[0]?[6789]\d{9}$/]');
		$this->form_validation->set_rules('relationship2', 'Plus-One Relationship','required');
		//$this->form_validation->set_rules('email2', 'Plus-One Email','regex_match[/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[^a-zA-Z0-9])(?!.*\s).{8,15}$/]');

		$this->form_validation->set_error_delimiters('<div class="error">', '</div>');
		$this->form_validation->set_message('required', 'Enter %s');

		if(isset($_POST['community_button']) && $this->form_validation->run()){
			$this->users_model->community_insert($sess_id);
			redirect('pages/agreement');
		}
		$this->load->view('pages/community');
		$this->load->view('templates/footer');	
	}

	function agreement() {
		$sess_id = $this->session->userdata('id');
		$this->load->view('templates/header');
		$this->form_validation->set_rules('name', 'Full Name','required|min_length[2]|max_length[50]|regex_match[/^[a-zA-Z]+(?:\s[a-zA-Z]+)+$/]');
		$this->form_validation->set_rules('print', 'Print Name','required|min_length[2]|max_length[50]|regex_match[/^[A-Za-z]+$/]');
		$this->form_validation->set_rules('sign', 'Sign Name','required|min_length[2]|max_length[50]|regex_match[/^[A-Za-z]+$/]');

		$this->form_validation->set_error_delimiters('<div class="error">', '</div>');
		$this->form_validation->set_message('required', 'Enter %s');

		if(isset($_POST['agreement_button']) && $this->form_validation->run()){
			$this->users_model->agreement_insert($sess_id);
			redirect(base_url());
		}
		$this->load->view('pages/agreement');
		$this->load->view('templates/footer');	
	}

	function profile(){
		$this->load->view('templates/header');
		$sess_id = $this->session->userdata('id');
		$data = $this->fetch_user_profile_details($sess_id);
		
		if(isset($_POST['update_profile'])){
			$this->form_validation->set_rules('fname', 'First name','required|min_length[2]|max_length[50]|regex_match[/^[A-Za-z]+$/]');
			$this->form_validation->set_rules('lname', 'Last name','required|min_length[2]|max_length[50]|regex_match[/^[A-Za-z]+$/]');
			$this->form_validation->set_rules('email', 'Email', 'required|valid_email|regex_match[/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/]');
			$this->form_validation->set_rules('mobile', 'Mobile number','required|min_length[10]|max_length[12]|regex_match[/^[0]?[6789]\d{9}$/]');
			$this->form_validation->set_rules('gender', 'Gender','required');
			$this->form_validation->set_rules('dob', 'Birth Date','required');
			$this->form_validation->set_rules('emergency', 'Emergency contact','required|min_length[10]|max_length[12]|regex_match[/^[0]?[6789]\d{9}$/]');
			$this->form_validation->set_rules('shift', 'Shift','required');
			$this->form_validation->set_rules('address1', 'Address','required');

			if($this->form_validation->run()){
				$config['upload_path'] = './main/images/';
				$config['allowed_types'] = 'gif|jpg|png';
				$config['max_size'] = 2000;
				$config['max_width'] = 1500;
				$config['max_height'] = 1500;

				$this->load->library('upload', $config);

				if (!$this->upload->do_upload('profile_image')) {
					$error = array('error' => $this->upload->display_errors());
				} else {
					$_POST['profile_image'] = $this->upload->data('file_name');
					$this->users_model->profile_update($sess_id);
				}
		    }
	    }

		if(isset($_POST['medical_update'])){
            $this->form_validation->set_rules('option1', 'Field-1','required');
			$this->form_validation->set_rules('physical_examination', 'Field-2','required');
			$this->form_validation->set_rules('option2', 'Field-3','required');
			$this->form_validation->set_rules('option4', 'Field-4','required');
			$this->form_validation->set_rules('option5', 'Field-5','required');
			$this->form_validation->set_rules('option6', 'Field-6','required');
			$this->form_validation->set_rules('option7', 'Field-7','required');
			$this->form_validation->set_rules('option8', 'Field-8','required');
			$this->form_validation->set_rules('option9', 'Field-9','required');
			$this->form_validation->set_rules('option10', 'Field-10','required');
			$this->form_validation->set_rules('option11', 'Field-11','required');
			$this->form_validation->set_rules('option12', 'Field-12','required');
			$this->form_validation->set_rules('option13', 'Field-13','required');
			$this->form_validation->set_rules('option14', 'Field-14','required');
			$this->form_validation->set_rules('option15', 'Field-15','required');
			$this->form_validation->set_rules('option16', 'Field-16','required');
			$this->form_validation->set_rules('option17', 'Field-17','required');
			$this->form_validation->set_rules('option18', 'Field-18','required');
			$this->form_validation->set_rules('option19', 'Field-19','required');
			$this->form_validation->set_rules('option20', 'Field-20','required');
			$this->form_validation->set_rules('option21', 'Field-21','required');
			$this->form_validation->set_rules('option22', 'Field-22','required');
			$this->form_validation->set_rules('option23', 'Field-23','required');
			$this->form_validation->set_rules('option24', 'Field-24','required');
			$this->form_validation->set_rules('option25', 'Field-25','required');
			$this->form_validation->set_rules('option26', 'Field-26','required');
			$this->form_validation->set_rules('option27', 'Field-27','required');
			$this->form_validation->set_rules('option28', 'Field-28','required');
			$this->form_validation->set_rules('option29', 'Field-29','required');
			$this->form_validation->set_rules('option30', 'Field-30','required');
			$this->form_validation->set_rules('option31', 'Field-31','required');
			$this->form_validation->set_rules('sign', 'Sign name','required|min_length[2]|max_length[50]|regex_match[/^[A-Za-z]+$/]');

			if($this->form_validation->run()){
				$this->users_model->medical_data($sess_id);
			}
		}

		if(isset($_POST['tfa_update'])){
			$this->form_validation->set_rules('height', 'Field-1','required');
			$this->form_validation->set_rules('weight', 'Field-2','required');
			$this->form_validation->set_rules('race', 'Field-3','required');
			$this->form_validation->set_rules('fat', 'Field-4','required');
			$this->form_validation->set_rules('biceps', 'Field-5','required');
			$this->form_validation->set_rules('upper', 'Field-6','required');
			$this->form_validation->set_rules('mid', 'Field-7','required');
			$this->form_validation->set_rules('buttocks', 'Field-8','required');
			$this->form_validation->set_rules('hips', 'Field-9','required');
			$this->form_validation->set_rules('waist', 'Field-10','required');
			$this->form_validation->set_rules('chest', 'Field-11','required');
			$this->form_validation->set_rules('calves', 'Field-12','required');
			$this->form_validation->set_rules('handed', 'Field-13','required');
			$this->form_validation->set_rules('posture', 'Field-14','required');
			$this->form_validation->set_rules('body', 'Field-15','required');
			$this->form_validation->set_rules('parent', 'Field-16','required');
			$this->form_validation->set_rules('loss', 'Field-17','required');
			$this->form_validation->set_rules('problem', 'Field-18','required');
			$this->form_validation->set_rules('rockport', 'Field-19','required');
			$this->form_validation->set_rules('step', 'Field-20','required');
			$this->form_validation->set_rules('resting', 'Field-17','required');
			$this->form_validation->set_rules('cardio', 'Field-18','required');
			$this->form_validation->set_rules('strength', 'Field-19','required');
			$this->form_validation->set_rules('flexibility', 'Field-20','required');
			$this->form_validation->set_rules('devoted', 'Field-17','required');
			$this->form_validation->set_rules('current', 'Field-18','required');
			$this->form_validation->set_rules('energy', 'Field-19','required');

			if($this->form_validation->run()){
				$this->users_model->tfa_insert($sess_id);
			}
		}

		if(isset($_POST['ptc_update'])){
			$this->form_validation->set_rules('investment', 'Total Investment','required');
			$this->form_validation->set_rules('method', 'Method of Payment','required');
			$this->form_validation->set_rules('print', 'Print Name','required|min_length[2]|max_length[50]|regex_match[/^[A-Za-z]+$/]');
			$this->form_validation->set_rules('sign', 'Sign Name','required|min_length[2]|max_length[50]|regex_match[/^[A-Za-z]+$/]');

			if($this->form_validation->run()){
				$this->users_model->ptc_insert($sess_id);
			}
		}

		if(isset($_POST['community_update'])){
			$this->form_validation->set_rules('name', 'Name','required|regex_match[/^[a-zA-Z]+(?:\s[a-zA-Z]+)+$/]');
			$this->form_validation->set_rules('full_name1', 'Plus-One Full Name','required|regex_match[/^[a-zA-Z]+(?:\s[a-zA-Z]+)+$/]');
			$this->form_validation->set_rules('contact1', 'Plus-One Contact Number','required|regex_match[/^[0]?[6789]\d{9}$/]');
			$this->form_validation->set_rules('relationship1', 'Plus-One Relationship','required');
			$this->form_validation->set_rules('full_name2', 'Plus-One Full Name','required|regex_match[/^[a-zA-Z]+(?:\s[a-zA-Z]+)+$/]');
			$this->form_validation->set_rules('contact2', 'Plus-One Contact Number','required|regex_match[/^[0]?[6789]\d{9}$/]');
			$this->form_validation->set_rules('relationship2', 'Plus-One Relationship','required');

			if($this->form_validation->run()){
				$this->users_model->community_insert($sess_id);
			}
		}

		if(isset($_POST['agreement_update'])){
			$this->form_validation->set_rules('name', 'Full Name','required|min_length[2]|max_length[50]|regex_match[/^[a-zA-Z]+(?:\s[a-zA-Z]+)+$/]');
			$this->form_validation->set_rules('print', 'Print Name','required|min_length[2]|max_length[50]|regex_match[/^[A-Za-z]+$/]');
			$this->form_validation->set_rules('sign', 'Sign Name','required|min_length[2]|max_length[50]|regex_match[/^[A-Za-z]+$/]');
 
			if($this->form_validation->run()){
				$this->users_model->agreement_insert($sess_id);
			}
		}
		
		$this->load->view('pages/profile', $data);
		$this->load->view('templates/footer');
	}

	function fetch_user_profile_details($sess_id) {
		if($sess_id !== '') {
			$this->db->select('*');
			$this->db->from('users, medical,tfa,ptc,community,agreement');
			$this->db->where('medical.sess_id = users.id');
			$this->db->where('tfa.sess_id = users.id');
			$this->db->where('ptc.sess_id = users.id');
			$this->db->where('community.sess_id = users.id');
			$this->db->where('agreement.sess_id = users.id');
			$query = $this->db->get();
			return $query->row_array();
		}
	}
}
