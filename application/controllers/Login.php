<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
<<<<<<< HEAD
	// public function __construct() {
		
	// 	parent::__construct();
	// 	$this->load->library(array('session'));
	// 	$this->load->helper(array('url'));
	// 	$this->load->model('user_model');
		
	// }
	public function __construct()
	{
		parent::__construct();
		$this->load->library(array('session'));
		$this->load->helper(array('url'));
		$this->load->model('Login');

	}
	
	public function index()
	{
		$data = new stdClass();
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->form_validation->set_rules('username', 'Username', 'required|alpha_numeric');
		$this->form_validation->set_rules('password', 'Password', 'required');
	if ($this->form_validation->run() == false) {
			
			// validation not ok, send validation errors to the view
			
			$this->load->view('login');
			
			
		} 
	else {

			$username = $this->input->post('username');
			$password = $this->input->post('password');
			if ($this->Login->login($username, $password)) {
				$this->load->view->('header');
				$this->load->view->('dashboard');
				$this->load->view->('footer');
				
				


		}
		
=======

	
	public function index()
	{
		$this->load->view('login');
>>>>>>> bbef8c300a8b01232ce6a40cf4d1036df1ca71aa
		
	}
	// public function index()
	// {
	// 	$this->load->view('templates/header');
	// 	$this->load->view('dashboard');
	// 	$this->load->view('templates/footer');
	// }
}
<<<<<<< HEAD
}
=======
>>>>>>> bbef8c300a8b01232ce6a40cf4d1036df1ca71aa
