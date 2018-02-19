<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Person_model extends CI_Model{
	var $table = 'tbl_person';

	public function __construct(){
		parent::__construct();
		$this->load->database();
	}

  public function user_authen($username,$userpass){
			$newuserpass=md5($userpass);
			$sql="select p_cardid from tbl_person where (p_loginname='".$username."') AND (p_password='".$newuserpass."') AND (p_status='1')";
			$query=$this->db->query($sql);
			if($query->num_rows()!=0)
				$found=TRUE;
			else
				$found=FALSE;
			return $found;
			
  }

}
