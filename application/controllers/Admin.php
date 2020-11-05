<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct() {
        parent::__construct();
        
        $this->load->model('admin_model');
		$this->load->helper(array('form','url','html'));
		$this->load->library(array('form_validation','session'));
	}
	
    function index(){
        $email = $this->input->post('email');
		$password = md5($this->input->post('password'));
        $query = $this->admin_model->admin_login_process($email,$password);
        
        $this->form_validation->set_rules('email', 'Email', 'required|callback_validateUser[' . $query->num_rows() . ']');
        $this->form_validation->set_rules('password', 'Password', 'required');

        $this->form_validation->set_error_delimiters('<div class="error">', '</div>');
        $this->form_validation->set_message('required', 'Enter %s');
        
        if(isset($_POST['admin_login']) && $this->form_validation->run()){
            $user = $query->row_array();
			if(!empty($user)) {
                $this->session->set_userdata($user);
				redirect('admin/dashboard');
            }
        }
        $this->load->view('admin/login');
    }

    function validateUser($email,$recordCount){
		if ($recordCount != 0){
			return TRUE;
		}else{
			$this->form_validation->set_message('validateUser', 'Invalid %s or Password');
			return FALSE;
		}
    }
    
    function dashboard(){
        $this->load->view('templates/admin_header');
        $this->load->view('admin/dashboard');
        $this->load->view('templates/admin_footer');
    }

    function logout(){
        $this->session->sess_destroy();
		redirect('admin');
    }

    function banner_management(){
        $this->load->view('templates/admin_header');

        $this->form_validation->set_rules('name', 'File ','required');

        if(isset($_POST['banner_button']) && $this->form_validation->run()){
            $config['upload_path'] = './main/images/banners';
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size'] = 2000;
            $config['max_width'] = 1500;
            $config['max_height'] = 1500;

            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('name')) {
                $error = array('error' => $this->upload->display_errors());
            } else {
                $_POST['name'] = $this->upload->data('file_name');
                $this->admin_model->upload_banner();
            }
        }
        $this->load->view('admin/banner_management');
        $this->load->view('templates/admin_footer');
    }

    function change_admin_password() {

		$this->load->view('templates/admin_header');
		$this->form_validation->set_rules('old_pass', 'Old Password', 'required|callback_oldPassCheck');
    	$this->form_validation->set_rules('new_pass', 'New Password', 'required|min_length[8]|regex_match[/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[^a-zA-Z0-9])(?!.*\s).{8,15}$/]');
		$this->form_validation->set_rules('confirm_pass', 'Confirm Password', 'required|matches[new_pass]');

		if(isset($_POST['admin_change_password']) && $this->form_validation->run()){
            $session_id = $this->session->userdata('role_id');
            if($session_id == '1'){
                $new_pass = md5($this->input->post('new_pass'));
                $this->admin_model->change_password($session_id,$new_pass);
                redirect('admin/dashboard');
            }
		}
		$this->load->view('admin/change_password');
		$this->load->view('templates/admin_footer');
	}
	
	function oldPassCheck($old_pass) {
		$session_id = $this->session->userdata('role_id');
		$this->db->where('role_id', $session_id);
		$query = $this->db->get('users');
		$row = $query->row_array();
		if($row['password'] == md5($old_pass)){
			return true;
		}
	}
   

   

}

?>