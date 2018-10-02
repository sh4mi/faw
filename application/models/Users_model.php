<?php

 class Users_model extends CI_Model
 {

 	public function __construct()
 	{

 		$this->load->database();
 	}

 	public function get_user($id)
 	{
 		$query = $this->db->get_where('users',array('id' => $id));
		return $query->row_array();
 	}

 	public function register($password)
 	{

 		$data = array(
				
				'firstname'=> $this->input->post('fname'),
				'lastname'=> $this->input->post('lname'),
				'username' => $this->input->post('username'),
				'gender' => $this->input->post('gender'),
				'email' => $this->input->post('email'),
				'password' => $password,
				
			);

		return $this->db->insert('users',$data);

 	}

 	public function login($username, $password)
 	{
 		$this->db->where('username', $username);
 		$this->db->where('password', $password);
 		$result = $this->db->get('users');
 		if($result->num_rows() == 1)
 		{
 			return $result->row(0)->id;
 		}
 		else
 		{
 			return false;
 		}
 	}

 	public function check_user_exists($username)
 	{

 		$query = $this->db->get_where('users',array('username' => $username));
 		if(empty($query->row_array()))
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

 		$query = $this->db->get_where('users',array('email' => $email));
 		if(empty($query->row_array()))
 		{
 			return true;
 		}
 		else
 		{
 			return false;
 		}

 	}

 }


?>