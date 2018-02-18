<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_register extends CI_Model {
	
	public function add($data)
	{
		$this->db->insert('apps_member', $data);
		return $this->db->insert_id();
	}
}