<?php

class Sales extends CI_Controller
{

	public function index()
	{
		$data=array();
		$data['title'] = "Sales";
		$this->load->view('admin/Template/header');
		$this->load->view('admin/Template/sidebar');
		$this->load->view('admin/sales/home',$data);
		$this->load->view('admin/Template/footer');
	}

	

	

}


?>