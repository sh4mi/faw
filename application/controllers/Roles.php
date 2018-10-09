<?php

class Roles extends CI_Controller
{

	public function index()
	{
		$data=array();
		$data['title'] = "Roles";
		$this->load->view('admin/Template/header');
		$this->load->view('admin/Template/sidebar');
		$this->load->view('admin/roles/home',$data);
		$this->load->view('admin/Template/footer');
	}


	public function permissions()
	{
		$data=array();
		$data['title'] = "Roles Permission";
		$this->load->view('admin/Template/header');
		$this->load->view('admin/Template/sidebar');
		$this->load->view('admin/roles/permissions',$data);
		$this->load->view('admin/Template/footer');
	}
	

	

}


?>