<?php

class Sales extends CI_Controller
{

	public function index()
	{
		$this->load->database();
		$data=array();

		$this->db->select('*');
        $query = $this->db->get('cars');
        $data['cars']= $query->result_array();

        $this->db->select('car_inventory.id as bid,car_inventory.booked,car_inventory.engine_no,car_inventory.chases_no,car_inventory.color_id,car_inventory.amount,cars.car_name,car_colors.color');
        $this->db->from('car_inventory');
		$this->db->join('cars', 'cars.id = car_inventory.car_id');
		$this->db->join('car_colors','car_colors.id=car_inventory.color_id');
		$this->db->where('car_inventory.booked', '0');
		$this->db->where('car_inventory.is_deleted','0');
		$query = $this->db->get();
        $data['car_inventory']= $query->result_array();


		$this->db->select('booking.id as bid,booking.engine_no,booking.chases_no,booking.booking_no,customers.id as cid,booking.color_id,booking.amount,booking.booking_no,booking.booking_date,cars.car_name,customers.phone,customers.cnic,customers.name,car_colors.color');
		$this->db->from('booking');
		$this->db->join('customers', 'customers.id=booking.customer_id');
		$this->db->join('cars', 'cars.id = booking.cars_id');
		$this->db->join('car_colors','car_colors.id=booking.color_id');
		$this->db->where('booking.status','0');
		$this->db->where('booking.is_deleted','0');
		$query = $this->db->get();
        $data['bookings']= $query->result_array();

		$data['title'] = "Sales";
		$this->load->view('admin/Template/header');
		$this->load->view('admin/Template/sidebar');
		$this->load->view('admin/sales/home',$data);
		$this->load->view('admin/Template/footer');
	}

	public function sold()
	{
		$data=array();
		$this->load->database();

		$this->db->select('sold.id,booking.id as bid,booking.engine_no,booking.chases_no,booking.booking_no,booking.delivered,booking.delivered_to,customers.id as cid,booking.color_id,booking.amount,booking.booking_no,booking.booking_date,cars.car_name,customers.phone,customers.cnic,customers.name,car_colors.color');
		$this->db->from('sold');
		$this->db->join('booking', 'booking.id = sold.booking_id');
		$this->db->join('customers', 'booking.customer_id = customers.id');
		$this->db->join('cars', 'cars.id = booking.cars_id');
		$this->db->join('car_colors','car_colors.id=booking.color_id');
		$this->db->where('sold.is_deleted','0');
		$query = $this->db->get();
        $data['bookings']= $query->result_array();


		$data['title'] = "Sales";
		$this->load->view('admin/Template/header');
		$this->load->view('admin/Template/sidebar');
		$this->load->view('admin/sales/sold',$data);
		$this->load->view('admin/Template/footer');
	}
	
	public function add_booking($bid)
	{
		

		$data = array(
				
				
				
				//'amount' => $this->input->post('amount'),
				//'color_id'=>$this->input->post('color'),
				'engine_no'=> $this->input->post('engine_number'),
				'chases_no' => $this->input->post('chases_number'),
				
				
			);

		$this->db->where('id', $bid);
		$this->db->update('booking', $data); 

		redirect('sales/');
	}


public function add_new()
	{
		
		$data = array(
				
				
				'car_id'=> $this->input->post('cars'),
				'amount' => $this->input->post('amount'),
				'color_id'=>$this->input->post('colors'),
				'chases_no'=>$this->input->post('chases_number'),
				'engine_no'=>$this->input->post('engine_number')
				
			);

		$this->db->insert('car_inventory',$data);

		redirect('sales/');
	}

	public function get_customer($cid)
	{
		$this->load->database();
		$this->db->select('*');
		$this->db->from('customers');
		$this->db->where('id',$cid);
		$query = $this->db->get();
		$data['table']= $query->result_array();
		echo json_encode($data);
	}

	public function booking_to_sale($bid)
	{

		$data = array(
				
				'booking_id'=> $bid
				
				
			);

		$this->db->insert('sold',$data);

		$data = array(
				
				'status'=> '1' //1 for sold
				
				
			);

		$this->db->where('id', $bid);
		$this->db->update('booking', $data); 
		
		redirect('sales/sold/');
	}

	public function inventory_to_booking()
	{
		//get customer info 
		//save into customer and get car info from car inventory then add to  booking.

		$data = array(
				
				'name'=> $this->input->post('name'),
				'cnic'=> $this->input->post('cnic'),
				'phone' => $this->input->post('mob'),
				
			);

		$this->db->insert('customers',$data);
		$cid = $this->db->insert_id();


		//get inventory id 
		$inventory_id = $this->input->post('cid');
		$this->load->database();
		$this->db->select('*');
		$this->db->from('car_inventory');
		$this->db->where('id',$inventory_id);
		$query = $this->db->get();
		$result= $query->row();
		$cars_id = $result->car_id;
		$amount = $result->amount;
		$color_id = $result->color_id;
		$engine_no = $result->engine_no;
		$chases_no = $result->chases_no;


		$data = array(
				
				'customer_id'=> $cid,
				'cars_id'=> $cars_id,
				'amount' => $amount,
				'color_id'=>$color_id,
				'engine_no'=>$engine_no,
				'chases_no'=>$chases_no
				
			);

		$this->db->insert('booking',$data);

		//booked from car inventory now
		$this->db->where('id', $inventory_id);
		$this->db->update('car_inventory', ['booked'=>'1']);

		redirect('sales/');
		
	}


	public function car_deliver_to($cid,$bid)
	{

		//echo "working";

		$data = array(

				'delivered_to'=> $cid,
				'delivered'=>'1'
				
			);

		$this->db->where('id', $bid);
		$this->db->update('booking', $data); 
		
		redirect('sales/sold/');
	}
	
	public function car_deliver_new($bid)
	{
		$data = array(
				
				'name'=> $this->input->post('name'),
				'cnic'=> $this->input->post('cnic'),
				'phone' => $this->input->post('phone')
				
			);

		$this->db->insert('customers',$data);
		$cid = $this->db->insert_id();

		$data = array(
				
				'delivered_to'=> $cid,
				'delivered'=>'1'
			);

		$this->db->where('id', $bid);
		$this->db->update('booking', $data);
		redirect('sales/sold/');
	}



	public function delete_inventory($bid)
	{
		$data = array(
				
				'is_deleted'=> '1'
				
			);

		

		
		$this->db->where('id', $bid);
		$this->db->update('car_inventory', $data); 

		redirect('sales/');
	}


	public function revert_sold($bid,$id)
	{
		$data = array(
				
				'is_deleted'=> '1'
				
			);

		

		
		$this->db->where('id', $id);
		$this->db->update('sold', $data); 


		$data = array(
				
				'status'=> '0'
				
			);

		

		
		$this->db->where('id', $bid);
		$this->db->update('booking', $data); 

		redirect('sales/sold');
	}



}





?>