<?php

class Cars extends CI_Controller
{

	public function index()
	{
		$data=array();
		$data['title'] = "Cars";
		$this->load->view('admin/Template/header');
		$this->load->view('admin/Template/sidebar');
		$this->load->view('admin/cars/home',$data);
		$this->load->view('admin/Template/footer');
	}

	

	

}


?>