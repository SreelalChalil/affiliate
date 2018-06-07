<?php
defined('BASEPATH') or exit('no direct script access allowed');
/**
 * 
 */
class Login extends CI_model
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	public function login($username,$password)
	{
		$this->db->select('admin_password','admin_id');
		$this->db->from('admin');
		$this->db->where('admin_name',$username);

		$hash=$this->db->get()->row('admin_password');
		if($this->password_verify($password,$hash))
		{
			return $this->db->get()->row('admin_id');
		}



	}
}