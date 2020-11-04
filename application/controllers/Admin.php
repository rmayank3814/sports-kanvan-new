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
   

   

}

?>