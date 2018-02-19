<?php
defined('BASEPATH') OR exit('No direct script access allowed');

  class Website extends CI_Controller{
    public function __construct(){
      parent::__construct();
    }

    public function index(){
      $this->load->view('form_view');
    }

    public function submission(){
      $FormRules =  array(
          array(
            'field' => 'website',
            'label' => 'website address',
            'rules' => 'required|min_length[5]|max_length[30]'
           )
       );
      $this->form_validation->set_rules($FormRules);
      if($this->form_validation->run()==TRUE){
        echo '<div class="success"> Your website is submission</div>';
      }else{
          echo '<div class="error">'.validation_errors().'</div>';
      }
      $this->load->view('form_view');
    }
  }
 ?>
