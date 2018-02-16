<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Member extends CI_Controller {
	public function __construct(){
 		parent::__construct();
 		$this->load->helper('url');
 	}

	public function index(){
		$this->load->model('member_model');
		$data['query'] = $this->member_model->get_member();

		$this->load->view('member_list_view',$data);
	}

	public function add(){
		$this->load->view('member_add_view');
	}


	public function add_process(){
		$this->load->model('member_model');
		$this->member_model->add_member();

		$data['query'] = $this->member_model->get_member();
		$this->load->view('member_list_view',$data);

	}
}
