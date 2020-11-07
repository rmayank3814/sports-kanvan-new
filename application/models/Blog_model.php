<?php
class Blog_model extends CI_Model {

    public function __construct() {
        $this->load->database();
    }

    function insert_blog(){
        $data = array(
            'photo' => $this->input->post('photo'),
            'title' => $this->input->post('title'),
            'author' => $this->input->post('author'),
            'content' => $this->input->post('content'),
        );
        return $this->db->insert('blog',$data);
    }
    
    

}