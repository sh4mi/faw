<?php

class Jobs extends CI_Controller
{

	public function index()
	{
		$data=array();
		$data['title'] = "Jobs";
		$this->load->view('admin/Template/header');
		$this->load->view('admin/Template/sidebar');
		$this->load->view('admin/jobs/home',$data);
		$this->load->view('admin/Template/footer');
	}


	public function dbJobs()
	{
		$data=array();
		$data['title'] = "Jobs DB";
		$this->load->view('admin/Template/header');
		$this->load->view('admin/Template/sidebar');
		$this->load->view('admin/jobs/jobs_db',$data);
		$this->load->view('admin/Template/footer');
	}

	

}


?>