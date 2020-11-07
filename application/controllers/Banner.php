<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Banner extends CI_Controller {

	public function __construct() {
        parent::__construct();
        
        $this->load->model('banner_model');
		$this->load->helper(array('form','url','html'));
		$this->load->library(array('form_validation','session'));
    }

    function index(){
        $this->load->view('templates/admin_header');
        $que = $this->banner_model->fetch_banner_data();
        $banner_data = $que->result_array();
        $data['banner_data'] = $banner_data;
        $this->load->view('banner/add_banner', $data);
        $this->load->view('templates/admin_footer');
    }

    function add_banner(){
        $this->load->view('templates/admin_header');

        if(isset($_POST['add_banner_button'])){
            $config['upload_path'] = './main/images/banners';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['max_size'] = 2000;
            $config['max_width'] = 1500;
            $config['max_height'] = 1500;
            
            $this->load->library('upload', $config);
            
            if (!$this->upload->do_upload('name')) {
                $error = array('error' => $this->upload->display_errors());
            } else {
                $_POST['name'] = $this->upload->data('file_name');
                $this->banner_model->insert_banner();
            }
        }
        redirect('banner');
        $this->load->view('templates/admin_footer');
    }

    function update_banner(){
        $this->load->view('templates/admin_header');
        
        if(isset($_POST['update_banner_button'])){
            
            $config['upload_path'] = './main/images/banners';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['max_size'] = 2000;
            $config['max_width'] = 1500;
            $config['max_height'] = 1500;
            
            $this->load->library('upload', $config);
            
            if (!$this->upload->do_upload('name')) {
                $error = array('error' => $this->upload->display_errors());
            } else {
                $_POST['name'] = $this->upload->data('file_name');
                $id = $this->input->post('id');
                $this->banner_model->update_banner($id);
            }
        }
        redirect('banner');
        $this->load->view('templates/admin_footer');
    }

    function delete_banner($id){
        $this->load->view('templates/admin_header');
        $this->banner_model->delete_banner($id);
        redirect('banner');
        $this->load->view('templates/admin_footer');
    }

    

}