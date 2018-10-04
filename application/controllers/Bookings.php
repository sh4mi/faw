<?php

class Bookings extends CI_Controller
{

	public function index()
	{
		$data=array();
		$data['title'] = "Inventory";
		$this->load->view('admin/Template/header');
		$this->load->view('admin/Template/sidebar');
		$this->load->view('admin/booking/home',$data);
		$this->load->view('admin/Template/footer');
	}

	

	

}


?>