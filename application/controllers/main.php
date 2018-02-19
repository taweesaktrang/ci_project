<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	public function index(){
		$this->load->view('login_view');
	}

	public function admin(){
		if(!empty($_SESSION['session_id']))
			$this->load->view('admin_view');
		else {
			$data = array(
        'title' => 'Session Error Page',
        'redirect_url' => base_url().'main',
        'error_msg' => 'Session หมดเวลาหรือการเข้าสู่ระบบไม่ถูกต้อง <br>กรุณารอสักครู่...ระบบจะ Redirect เพื่อให้เข้าสู่ระบบอีกครั้ง'
			);
			$this->load->view('error_page_view',$data);
		}
	}

	public function init_session($username){
		$hour=0;
		$min =0;
		$logtime=date("U",mktime( date("H")+$hour, date("i")+$min ));
		$session_id=uniqid(session_id());
		$session_data = array('username' => $username,
													'sestime' => $logtime,
													'session_id' => $session_id
												);
		$this->session->set_userdata($session_data);
		redirect(base_url().'main/admin');
	}

	public function do_login(){
		$username=$this->input->post('username');
		$userpass=$this->input->post('userpass');
		if(($username=='admin') AND ($userpass=='123456')) {
				echo "pass";
		}else{
			  echo "fail";
		}
	}

	public function do_logoff(){
		$this->session->sess_destroy();
		redirect(base_url().'main');
	}

}
