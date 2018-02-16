<?php
class Member_model extends CI_Model {

  public function get_member(){
		$query = $this->db->query('SELECT * FROM tbl_member ORDER BY member_id ASC');
    return $query->result();
  }

  public function add_member(){
		$member_id=$this->input->post('member_id');
		$member_name=$this->input->post('member_name');
		$member_dep=$this->input->post('member_dep');
		$salary=$this->input->post('salary');

		$sql = "INSERT INTO tbl_member(member_id,member_name,member_dep,salary)  VALUES ('".$member_id."', '".$member_name."','".$member_dep."','".$salary."')";
		$this->db->query($sql);
		return;
  }
}

?>
