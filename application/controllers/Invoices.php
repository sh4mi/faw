<?php

class Invoices extends CI_Controller
{

	public function index()
	{
		$data=array();
		$this->load->database();

		$this->db->select('sold.booking_id,booking.id as bid,booking.engine_no,booking.chases_no,booking.booking_no,booking.invoice_no,booking.delivered,booking.delivered_to,customers.id as cid,booking.color_id,booking.amount,booking.booking_no,booking.booking_date,cars.car_name,customers.phone,customers.cnic,customers.name,car_colors.color');
		$this->db->from('sold');
		$this->db->join('booking', 'booking.id = sold.booking_id');
		$this->db->join('customers', 'booking.customer_id = customers.id');
		$this->db->join('cars', 'cars.id = booking.cars_id');
		$this->db->join('car_colors','car_colors.id=booking.color_id');
		//$this->db->join('invoices', 'invoices.booking_id = booking.id');
		$query = $this->db->get();
        $data['bookings']= $query->result_array();



		$data['title'] = "Invoices";
		$this->load->view('admin/Template/header');
		$this->load->view('admin/Template/sidebar');
		$this->load->view('admin/invoices/home',$data);
		$this->load->view('admin/Template/footer');
	}


	public function add_invoice($bid)
	{

		$data = array(
				
				'booking_id'=> $bid,
				'invoice_no'=> $this->input->post('invoice_number')
				
				
			);

		$this->db->insert('invoices',$data);

		 $data = array(
				
				'invoice_no'=>  $this->input->post('invoice_number')//1 for sold
				
				
			);

		 $this->db->where('id', $bid);
		 $this->db->update('booking', $data); 
		
		redirect('invoices/');
	}

	

}





?>