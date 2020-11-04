<?php
class Admin_model extends CI_Model {

    public function __construct() {
        $this->load->database();
    }

   function admin_login_process($email, $password){
        $this->db->select("fname,email");
        $this->db->from('users');
        $this->db->where(array('email'=>$email,'password'=>$password,'role_id'=>'1','role'=>'admin'));
        $query = $this->db->get();

        return $query;
    }

}