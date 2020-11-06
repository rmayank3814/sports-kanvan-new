<?php
class Admin_model extends CI_Model {

    public function __construct() {
        $this->load->database();
    }

   function admin_login_process($email, $password){
        $this->db->select("fname,email,role_id");
        $this->db->from('users');
        $this->db->where(array('email'=>$email,'password'=>$password,'role_id'=>'1'));
        return $this->db->get();

    }

    function change_password($session_id,$new_pass){
        $this->db->set('password', $new_pass);
        $this->db->where('role_id', $session_id);
        return $this->db->update('users');
    }


}