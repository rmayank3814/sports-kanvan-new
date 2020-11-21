<?php
class Payment_model extends CI_Model {

    public function __construct() {
        $this->load->database();
    }

    function fetch_user_data($orderId){
        $this->db->select('*');
			$this->db->from('payment as p');
			$this->db->join('users as u', 'u.id = p.user_id', 'left');
			$this->db->where('orderId',$orderId);
			return $this->db->get();
    }

    function insert_payment_data($orderId){
        $data = array(
            'orderStatus' => $_POST["txStatus"]
        );
        $this->db->set($data);
        $this->db->where('orderId', $orderId);
        return $this->db->update('payment');
    }

}