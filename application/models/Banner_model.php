<?php
class Banner_model extends CI_Model {

    public function __construct() {
        $this->load->database();
    }

    function insert_banner(){
        $banner = array(
            'name' => $this->input->post('name'),
            'title' => $this->input->post('title'),
            'sub-title' => $this->input->post('sub-title'),
            'description' => $this->input->post('description')
        );
        return $this->db->insert('banner',$banner);
    }

    function fetch_banner_data(){
        $this->db->select("*");
        $this->db->from('banner');
        return $this->db->get();
    }

    function update_banner($id){
        $banner = array(
            'name' => $this->input->post('name'),
            'title' => $this->input->post('title'),
            'sub-title' => $this->input->post('sub-title'),
            'description' => $this->input->post('description')
        );
        $this->db->set($banner);
        $this->db->where('id', $id);
        return $this->db->update('banner',$banner);
    }

    function delete_banner($id){
        $this->db->where('id', $id);
        $this->db->delete('banner');
    }


}