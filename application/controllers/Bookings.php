<?php

class Bookings extends CI_Controller
{

	public function index()
	{	
		$this->load->database();
		$data=array();

		$this->db->select('*');
        $query = $this->db->get('cars');
        $data['cars']= $query->result_array();

        
		$this->db->select('booking.id as bid,booking.engine_no,booking.chases_no,booking.booking_no,customers.id as cid,booking.color_id,booking.amount,booking.booking_no,booking.booking_date,cars.car_name,customers.phone,customers.cnic,customers.name,car_colors.color,booking.status');
		$this->db->from('booking');
		$this->db->join('customers', 'customers.id=booking.customer_id');
		$this->db->join('cars', 'cars.id = booking.cars_id');
		$this->db->join('car_colors','car_colors.id=booking.color_id');
		$this->db->where('booking.status','0');
		$this->db->where('booking.is_deleted','0');
		$this->db->order_by("booking.id", "desc");
		$query = $this->db->get();
        $data['bookings']= $query->result_array();
 
		$data['title'] = "Bookings";
		$this->load->view('admin/Template/header');
		$this->load->view('admin/Template/sidebar');
		$this->load->view('admin/booking/home',$data);
		$this->load->view('admin/Template/footer');
	}


	public function add()
	{
		//submit form


		$data = array(
				
				'name'=> $this->input->post('name'),
				'cnic'=> $this->input->post('cnic'),
				'phone' => $this->input->post('mob'),
				
			);

		$this->db->insert('customers',$data);
		$cid = $this->db->insert_id();

		$data = array(
				
				'customer_id'=> $cid,
				'cars_id'=> $this->input->post('cars'),
				'amount' => $this->input->post('amount'),
				'color_id'=>$this->input->post('colors')
				
			);

		$this->db->insert('booking',$data);

		redirect('bookings/');
	}

	public function update($bid,$cid)
	{
		$data = array(
				
				'name'=> $this->input->post('name'),
				'cnic'=> $this->input->post('cnic'),
				'phone' => $this->input->post('mob'),

				
			);

		$this->db->where('id', $cid);
		$this->db->update('customers', $data); 
		//$cid = $this->db->insert_id();

		$data = array(
				
				
				'cars_id'=> $this->input->post('cars'),
				'amount' => $this->input->post('amount'),
				'color_id'=>$this->input->post('color'),
				//'engine_no'=> $this->input->post('engine_number'),
				//'chases_no' => $this->input->post('chases_number'),
				'booking_no'=>$this->input->post('booking_number'),
				'booking_date' => $this->input->post('date')
				
			);

		$this->db->where('id', $bid);
		$this->db->update('booking', $data); 

		redirect('bookings/');
	}


	public function delete($bid)
	{
		$data = array(
				
				'is_deleted'=> '1'
				
			);

		

		
		$this->db->where('id', $bid);
		$this->db->update('booking', $data); 

		redirect('bookings/');
	}

	public function search($id)
	{

		$this->load->database();
		$this->db->select('booking.id as bid,booking.engine_no,booking.chases_no,booking.booking_no,customers.id as cid,booking.amount,booking.booking_no,booking.booking_date,cars.car_name,cars.id as car_id,customers.phone,customers.cnic,customers.name,car_colors.color');
		$this->db->from('customers');
		$this->db->join('booking', 'booking.customer_id = customers.id');
		$this->db->join('cars', 'cars.id = booking.cars_id');
		$this->db->join('car_colors','car_colors.id=booking.color_id');
		$this->db->where('booking.id', $id);
		$query = $this->db->get();

        $data['table']= $query->result_array();
		echo json_encode($data);
	}

	public function search_by_name($text)
	{	
		
		$this->load->database();
		$this->db->select('booking.id as bid,booking.engine_no,booking.chases_no,booking.booking_no,customers.id as cid,booking.amount,booking.booking_no,booking.booking_date,cars.car_name,cars.id as car_id,customers.phone,customers.cnic,customers.name,car_colors.color');
		$this->db->from('customers');
		$this->db->join('booking', 'booking.customer_id = customers.id');
		$this->db->join('cars', 'cars.id = booking.cars_id');
		$this->db->join('car_colors','car_colors.id=booking.color_id');
		//$this->db->where('booking.id', $id);
		$this->db->like('customers.name', $text);
		$this->db->or_like('booking.id', $text);
		$query = $this->db->get();

        $data['table']= $query->result_array();
		echo json_encode($data);
	}



	public function get_color($id)
	{
		$this->load->database();
		$this->db->select('*');
		$this->db->from('car_colors');
		$this->db->where('car_id',$id);
		$query = $this->db->get();
		$data['table']= $query->result_array();
		echo json_encode($data);
	}
	

	

}


?>