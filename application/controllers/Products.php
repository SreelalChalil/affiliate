<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Products extends CI_Controller {
    
    public function index()
	{
		$this->load->view('templates/header');
        $this->load->view('products/add-product');
		$this->load->view('templates/footer');
    }
}
   