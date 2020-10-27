<?php
class Users_model extends CI_Model {

    public function __construct() {
        $this->load->database();
    }

    public function users_data() {       
        $data = array(
            'name' => $this->input->post('name'),
            'date' => $this->input->post('date'),
            'mobile' => $this->input->post('mobile'),
            'email' => $this->input->post('email'),
            'age' => $this->input->post('age'),
            'dob' => $this->input->post('dob'),
            'emergency' => $this->input->post('emergency'),
            'address' => $this->input->post('address'),
            'relationship' => $this->input->post('relationship'),
            'gender' => $this->input->post('gender'),
            'password' => md5($this->input->post('password'))
        );  
        return $this->db->insert('users', $data);
    }

    public function medical_data($sess_id){
        $data = array(
            'sess_id' => $sess_id,
            'doctor_care' => $this->input->post('option1'),
            'physical_examination' => $this->input->post('physical_examination'),
            'stress_test'=> $this->input->post('option2'),
            'result'=> $this->input->post('option3'),
            'medication'=> $this->input->post('option4'),
            'hospitalized'=> $this->input->post('option5'),
            'smoke'=> $this->input->post('option6'),
            'pregnant'=> $this->input->post('option7'),
            'drink_alcohal'=> $this->input->post('option8'),
            'stress_level'=> $this->input->post('option9'),
            'moderately'=> $this->input->post('option10'),
            'high_bp'=> $this->input->post('option11'),
            'cholesterol'=> $this->input->post('option12'),
            'diabetes'=> $this->input->post('option13'),
            'siblings'=> $this->input->post('option14'),
            'heart_attack'=> $this->input->post('option15'),
            'stroke'=> $this->input->post('option16'),
            'heart_disease'=> $this->input->post('option17'),
            'rheumatic'=> $this->input->post('option18'),
            'murmur'=> $this->input->post('option19'),
            'chest_pain'=> $this->input->post('option20'),
            'palpitation'=> $this->input->post('option21'),
            'lightheadedness'=> $this->input->post('option22'),
            'breath'=> $this->input->post('option23'),
            'cramping'=> $this->input->post('option24'),
            'emphysema'=> $this->input->post('option25'),
            'metabolic'=> $this->input->post('option26'),
            'epilepsy'=> $this->input->post('option27'),
            'astma'=> $this->input->post('option28'),
            'back_pain'=> $this->input->post('option29'),
            'joint_pain'=> $this->input->post('option30'),
            'muscle_pain'=> $this->input->post('option31'),
            'sign'=> $this->input->post('sign'),
            'date'=> $this->input->post('medical_date')
        );
        $this->db->select("*");
        $this->db->from('medical');
        $this->db->where('sess_id', $sess_id);
        $query = $this->db->get();

	    if($query->num_rows() == 0){
            return $this->db->insert('medical', $data);
        }    
        else {
            $this->db->set($data);
            $this->db->where('sess_id', $sess_id);
            return $this->db->update('medical');
        }
    }

    function login_process($email , $password) {
        $this->db->select("id , email , name");
        $this->db->from('users');
        $this->db->where(array('email'=>$email,'password'=> $password));
        $query = $this->db->get();

        return $query;
    }

	function change_pass($session_id,$new_pass){
       
        $this->db->set('password', $new_pass);
        $this->db->where('id', $session_id);
        $update_pass = $this->db->update('users');
        return $update_pass;
       
    }

    function tfa_insert($sess_id){
    
        $data = array(
            'sess_id' => $sess_id,
            'height' => $this->input->post('height'),
            'weight' => $this->input->post('weight'),
            'race' => $this->input->post('race'),
            'fat' => $this->input->post('fat'),
            'biceps' => $this->input->post('biceps'),
            'upper' => $this->input->post('upper'),
            'mid' => $this->input->post('mid'),
            'buttocks' => $this->input->post('buttocks'),
            'hips' => $this->input->post('hips'),
            'waist' => $this->input->post('waist'),
            'chest' => $this->input->post('chest'),
            'calves' => $this->input->post('calves'),
            'handed' => $this->input->post('handed'),
            'posture' => $this->input->post('posture'),
            'body' => $this->input->post('body'),
            'parent' => $this->input->post('parent'),
            'loss' => $this->input->post('loss'),
            'problem' => $this->input->post('problem'),
            'rockport' => $this->input->post('rockport'),
            'step' => $this->input->post('step'),
            'resting' => $this->input->post('resting'),
            'cardio' => $this->input->post('cardio'),
            'strength' => $this->input->post('strength'),
            'flexibility' => $this->input->post('flexibility'),
            'devoted' => $this->input->post('devoted'),
            'current' => $this->input->post('current'),
            'energy' => $this->input->post('energy')
        );  
        $this->db->select("*");
        $this->db->from('tfa');
        $this->db->where('sess_id', $sess_id);
        $query = $this->db->get();

	    if($query->num_rows() == 0){
            return $this->db->insert('tfa', $data);
        }    
        else {
            $this->db->set($data);
            $this->db->where('sess_id', $sess_id);
            return $this->db->update('tfa');
        }
    }

    function ptc_insert($sess_id){
    
        $data = array(
            'sess_id' => $sess_id,
            'investment' => $this->input->post('investment'),
            'method' => $this->input->post('method'),
            'print' => $this->input->post('print'),
            'sign' => $this->input->post('sign'),
            'date' => $this->input->post('date')
        );
        $this->db->select("*");
        $this->db->from('ptc');
        $this->db->where('sess_id', $sess_id);
        $query = $this->db->get();

	    if($query->num_rows() == 0){
            return $this->db->insert('ptc', $data);
        }    
        else {
            $this->db->set($data);
            $this->db->where('sess_id', $sess_id);
            return $this->db->update('ptc');
        }
    }

    function agreement_insert($sess_id){
        $data = array(
            'sess_id' => $sess_id,
            'print' => $this->input->post('print'),
            'sign' => $this->input->post('sign'),
            'name' => $this->input->post('name'),
            'date' => $this->input->post('date')
        );
        $this->db->select("*");
        $this->db->from('agreement');
        $this->db->where('sess_id', $sess_id);
        $query = $this->db->get();

	    if($query->num_rows() == 0){
            return $this->db->insert('agreement', $data);
        }    
        else {
            $this->db->set($data);
            $this->db->where('sess_id', $sess_id);
            return $this->db->update('agreement');
        }
    }

    function community_insert($sess_id){
        $data = array(
            'sess_id' => $sess_id,
            'name' => $this->input->post('name'),
            'full_name1' => $this->input->post('full_name1'),
            'contact1' => $this->input->post('contact1'),
            'relationship1' => $this->input->post('relationship1'),
            'email1' => $this->input->post('email1'),
            'full_name2' => $this->input->post('full_name2'),
            'contact2' => $this->input->post('contact2'),
            'relationship2' => $this->input->post('relationship2'),
            'email2' => $this->input->post('email2')
        );
        $this->db->select("*");
        $this->db->from('community');
        $this->db->where('sess_id', $sess_id);
        $query = $this->db->get();

	    if($query->num_rows() == 0){
            return $this->db->insert('community', $data);
        }    
        else {
            $this->db->set($data);
            $this->db->where('sess_id', $sess_id);
            return $this->db->update('community');
        }

    }

    public function get_ptc_data($sess_id){
        $sql = "SELECT * FROM ptc where sess_id = $sess_id";
        $query = $this->db->query( $sql );
        return $query->row_array();
    }
    
    public function get_agreement_data($sess_id){
        $sql = "SELECT * FROM agreement where sess_id = $sess_id";
        $query = $this->db->query( $sql );
        return $query->row_array();
    } 

    public function get_community_data($sess_id){
        $sql = "SELECT * FROM community where sess_id = $sess_id";
        $query = $this->db->query( $sql );
        return $query->row_array();
    } 

    public function get_tfa_data($sess_id){
        $sql = "SELECT * FROM tfa where sess_id = $sess_id";
        $query = $this->db->query( $sql );
        return $query->row_array();
    } 

    public function get_medical_data($sess_id){
        $sql = "SELECT * FROM medical where sess_id = $sess_id";
        $query = $this->db->query( $sql );
        return $query->row_array();
    } 

}