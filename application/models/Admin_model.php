<?php
class Admin_model extends CI_Model {

    public function __construct() {
        $this->load->database();
    }

   function admin_login_process($email, $password){
        $this->db->select("fname,email,role_id");
        $this->db->from('users');
        $this->db->where(array('email'=>$email,'password'=>$password,'role_id'=>'1'));
        $query = $this->db->get();

        return $query;
    }

    function change_password($session_id,$new_pass){
        //echo $session_id;die;
        $this->db->set('password', $new_pass);
        $this->db->where('role_id', $session_id);
        $update_pass = $this->db->update('users');
        //echo $update_pass;die;
    }

    function upload_banner(){
        $banner = array(
            'name' => $this->input->post('name'),
            'title' => $this->input->post('title'),
            'sub-title' => $this->input->post('sub-title'),
            'description' => $this->input->post('description')
        );
        $this->db->insert('banner',$banner);
    }

}