<?php

class Invoices extends CI_Controller
{

	public function index()
	{
		$data=array();
		$data['title'] = "Invoices";
		$this->load->view('admin/Template/header');
		$this->load->view('admin/Template/sidebar');
		$this->load->view('admin/invoices/home',$data);
		$this->load->view('admin/Template/footer');
	}

	

}


?>