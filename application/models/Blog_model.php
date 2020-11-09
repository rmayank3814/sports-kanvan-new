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
            'content' => $this->input->post('content')
        );
        $this->db->select("*");
        $this->db->from('blog');
        $query = $this->db->get();
        if($query->row_array() == 0){
            return $this->db->insert('blog',$data);
        }
    }
    
    function update_blog($id) {
        $data = array(
            'photo' => $this->input->post('photo'),
            'title' => $this->input->post('title'),
            'author' => $this->input->post('author'),
            'content' => $this->input->post('content')
        );
        $this->db->set($data);
        $this->db->where('id', $id);
        return $this->db->update('blog',$data);
    }

    function delete_blog($id){
        $this->db->where('id', $id);
        return $this->db->delete('blog');
    }

    function fetch_blog(){
        $this->db->select("*");
        $this->db->from('blog');
        return $this->db->get();
    }
    


}