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

    function insert_event(){
        $eventdata = array(
            'event' => $this->input->post('event'),
            'date' => $this->input->post('event_date'),
            'time' => $this->input->post('event_time')
        );
        $this->db->select("*");
        $this->db->from('event');
        $this->db->where('id', 1);
        $query = $this->db->get();

	    if($query->num_rows() == 0){
            return $this->db->insert('event', $eventdata);
        }    
        else {
            $this->db->set($eventdata);
            $this->db->where('id', 1);
            return $this->db->update('event');
        }
    }

    function fetch_event_details(){
        $this->db->select("*");
        $this->db->from('event');
        $this->db->where('id', 1);
        $query = $this->db->get();
        return $query->row_array();
    }

}