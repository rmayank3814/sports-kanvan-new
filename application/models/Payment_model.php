<?php
class Payment_model extends CI_Model {

    public function __construct() {
        $this->load->database();
    }

    function fetch_user_data($id){
        $this->db->select('*');
        $this->db->from('users');
        $this->db->where('id',$id);
        return $this->db->get();
    }

}