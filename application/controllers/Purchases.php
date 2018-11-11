<?php

class Purchases extends CI_Controller
{

	public function index()
	{
		$data=array();
		$this->db->select('*');
        $query = $this->db->get('purchases');
        $data['purchases']= $query->result_array();

		$data['title'] = "Purchases";
		$this->load->view('admin/Template/header');
		$this->load->view('admin/Template/sidebar');
		$this->load->view('admin/purchases/home',$data);
		$this->load->view('admin/Template/footer');
	}

	public function add_purchase()
	{	
		$data = array(
				
				'name'=> $this->input->post('name'),
				'amount'=> $this->input->post('price'),
				'quantity' => $this->input->post('quantity'),
				'total' => $this->input->post('total'),
				'bill_no' => $this->input->post('bill_no'),
			);

		$this->db->insert('purchases',$data);
		// $cid = $this->db->insert_id();

		// $data = array(
				
		// 		'customer_id'=> $cid,
		// 		'cars_id'=> $this->input->post('cars'),
		// 		'amount' => $this->input->post('amount'),
		// 		'color_id'=>$this->input->post('colors')
				
		// 	);

		// $this->db->insert('booking',$data);

		redirect('purchases/');
	}

	public function update($bid,$cid)
	{
		$data = array(
				
				'name'=> $this->input->post('name'),
				'amount'=> $this->input->post('price'),
				'quantity' => $this->input->post('quantity'),
				'total' => $this->input->post('total'),
				'bill_no' => $this->input->post('bill_no'),
			);

		$this->db->where('id', $cid);
		$this->db->update('customers', $data); 
		//$cid = $this->db->insert_id();

		

		redirect('purchases/');
	}

	public function search($id)
	{
		$this->load->database();
		$this->db->select('*');
		$this->db->from('purchases');
		$this->db->where('id',$id);
		$query = $this->db->get();
		$data['table']= $query->result_array();
		echo json_encode($data);	
	}

	

	

	

}


?>