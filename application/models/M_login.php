<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_Login extends CI_Model{
	function cek ($username, $password){
		$this->db->where('user_nama', $username);
		$this->db->where('user_pass', $password);
		return $this->db->get('user');	
	}
}
?>