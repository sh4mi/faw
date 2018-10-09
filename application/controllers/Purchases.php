<?php

class Purchases extends CI_Controller
{

	public function index()
	{
		$data=array();
		$data['title'] = "Purchases";
		$this->load->view('admin/Template/header');
		$this->load->view('admin/Template/sidebar');
		$this->load->view('admin/purchases/home',$data);
		$this->load->view('admin/Template/footer');
	}

	

	

	

}


?>