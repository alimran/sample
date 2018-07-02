<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usermodel extends CI_Model {
	

	public function verify($usr)
	{
		$table = $this->db->get_where('users', $usr);
		return $table->row();
	}
}
