<?php

class Delivery extends CI_Controller
{

	public function index()
	{
		$data=array();
		$data['title'] = "Delivery";
		$this->load->view('admin/Template/header');
		$this->load->view('admin/Template/sidebar');
		$this->load->view('admin/delivery/home',$data);
		$this->load->view('admin/Template/footer');
	}

	

	

}


?>