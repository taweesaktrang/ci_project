<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form', 'url')); // โหลดเฮลเปอร์ form และ url ของ ci มาใช้งาน
		$this->load->library('form_validation'); // โหลดไลบรารี่ form_validation ของ ci มาใช้งาน
		
		$this->load->model('model_register');
		
	}
	public function index()
	{
		$this->load->view('register_view'); // เข้ามาครั้งแรกให้โหลด register_view มาแสดง
	}
	public function validate()
	{
		$this->form_validation->set_rules('first_name', 'Username', 'required');
		$this->form_validation->set_rules('last_name', 'Password', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required');

		if ($this->form_validation->run() == FALSE)
		{
				$this->load->view('register_view');
		}else{
			$first_name = $this->input->post('first_name');
			$last_name = $this->input->post('last_name');
			$email = $this->input->post('email');
			
			$data = array(
				'first_name'     => $first_name,
				'last_name'     => $last_name,
				'email'     => $email
			);
			//$this->model_register->add($data);
			//echo "register successfully";
		}
	}
}
