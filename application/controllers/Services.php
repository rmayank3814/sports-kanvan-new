<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Services extends CI_Controller {

    public function __construct() {
      parent::__construct();
      
      $this->load->helper(array('form','url','html'));
      $this->load->library(array('form_validation','session'));
    }

    function index(){
      $this->load->view('templates/header');
      $this->load->view('services');
      $this->load->view('templates/footer');
    }

    function yoga(){
      $this->load->view('templates/header');
      $this->load->view('services/yoga');
      $this->load->view('templates/footer');
    }

    function fitness(){
      $this->load->view('templates/header');
      $this->load->view('services/fitness');
      $this->load->view('templates/footer');
    }

    function cycling(){
      $this->load->view('templates/header');
      $this->load->view('services/cycling');
      $this->load->view('templates/footer');
    }

    function running(){
      $this->load->view('templates/header');
      $this->load->view('services/running');
      $this->load->view('templates/footer');
    }

    function recreation(){
      $this->load->view('templates/header');
      $this->load->view('services/recreation');
      $this->load->view('templates/footer');
    }

    function health(){
      $this->load->view('templates/header');
      $this->load->view('services/health');
      $this->load->view('templates/footer');
    }

    function games(){
      $this->load->view('templates/header');
      $this->load->view('services/games');
      $this->load->view('templates/footer');
    }

    function adventure(){
      $this->load->view('templates/header');
      $this->load->view('services/adventure');
      $this->load->view('templates/footer');
    }

}