<?php

class Users extends CI_Controller
{

	public function register()
	{
		$data['title']='Login';
		
		$this->form_validation->set_rules('fname','FirstName','required');
		$this->form_validation->set_rules('lname','LastName','required');
		$this->form_validation->set_rules('gender','Gender','required');
		$this->form_validation->set_rules('username','Username','required|callback_check_username_exists');
		$this->form_validation->set_rules('email','Email','required|callback_check_email_exists');
		$this->form_validation->set_rules('password','Password','required');
		$this->form_validation->set_rules('password2','Confirm Password','matches[password] ');
		if($this->form_validation->run() === FALSE)
		{
			//$this->load->view('templates/header');
			$this->load->view('users/register',$data);
			//$this->load->view('templates/footer');
	
		}

		else
		{
			$enc_password = md5($this->input->post('password')); 
			$this->load->model('Users_model');
			$this->Users_model->register($enc_password);

			$this->session->set_flashdata('user_register','You are registered please login');
			redirect('user/login');
		}

	}

	public function login()
	{	

		if($this->session->userdata('logged_in'))
		{
			redirect('user/my');
		}
		$data['title']='Login';
		

		$this->form_validation->set_rules('username','Username','required');
		$this->form_validation->set_rules('password','Password','required');
		
		if($this->form_validation->run() === FALSE)
		{
			//$this->load->view('templates/header');
			$this->load->view('users/login',$data);
			//$this->load->view('templates/footer');
	
		}

		else
		{
			$username = $this->input->post('username');
			$password = md5($this->input->post('password')); 
			$this->load->model('Users_model');
			$user_id = $this->Users_model->login($username,$password);

			if($user_id)
			{	
				$user_data = array(
					'user_id' => $user_id,
					'username' => $username,
					'logged_in' => true
				);

				$this->session->set_userdata($user_data);
				$this->session->set_flashdata('user_login','You are logged in');
				
			}
			else
			{
				$this->session->set_flashdata('login_failed','Incorrect username or password');
				redirect('user/login');
			}
			
			redirect('users/my');
		}

	}
		public function logout()
	{
		$this->session->unset_userdata('logged_in');
		$this->session->unset_userdata('username');
		$this->session->unset_userdata('user_id');

		$this->session->set_flashdata('user_logout','You are now logged out');
		redirect('user/login');
	}


	

	public function check_username_exists($username)
	{
		$this->form_validation->set_message('check_username_exists','username already exists');
		$this->load->model('Users_model');
		if($this->Users_model->check_user_exists($username))
		{
			return true;
		}
		else
		{
			return false;
		}
		
	}

	public function check_email_exists($email)
	{
		$this->form_validation->set_message('check_email_exists','Email already exists');
		$this->load->model('Users_model');
		if($this->Users_model->check_email_exists($email))
		{
			return true;
		}
		else
		{
			return false;
		}
		
	}

	public function my()
	{	
		if(!$this->session->userdata('logged_in'))
		{
			redirect('users/login');
		}
		$this->load->view('admin/Template/header');
		$this->load->view('admin/Template/sidebar');
		$this->load->view('admin/Template/home');
		$this->load->view('admin/Template/footer');

	}

	public function index()
	{	
		$data=array();
		$data['title'] = "Users";
		$this->load->view('admin/Template/header');
		$this->load->view('admin/Template/sidebar');
		$this->load->view('admin/users/home');
		$this->load->view('admin/Template/footer');

	}

	public function create()
	{	
		$data=array();
		$data['title'] = "Create User";
		$this->load->view('admin/Template/header');
		$this->load->view('admin/Template/sidebar');
		$this->load->view('admin/users/index');
		$this->load->view('admin/Template/footer');

	}

	

}


?>