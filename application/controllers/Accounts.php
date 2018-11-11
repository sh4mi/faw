<?php

class Accounts extends CI_Controller
{

	public function index()
	{
		$data=array();
		$data['title'] = "Jobs/Sales";
		$this->load->view('admin/Template/header');
		$this->load->view('admin/Template/sidebar');
		$this->load->view('admin/accounts/home',$data);
		$this->load->view('admin/Template/footer');
	}

	public function print_account()
	{
		$data=array();
		$data['title'] = "Jobs/Sales";
		$this->load->view('admin/accounts/print',$data);
		
	}
	
	public function gatepass()
	{
		$data=array();
		$data['title'] = "Jobs/Sales";
		$this->load->view('admin/accounts/pass',$data);
		
	}

	

}


?>