<?php

class customer_model extends CI_Model{

function _construct(){
parent::_contruct();
}

		public function show_customers(){
		$query = $this->db->get('shipping_detail')->result_array();
		return $query;
		}

		public function show_customerdetail($id){
		$query = $this->db->get_where('shipping_detail',array('cust_id' => $id))->row_array();
		//echo $this->db->last_query();exit;
		//print_r($query);exit;
		return $query;
		}

		public function update_customerdetail($id,$data){
		$this->db->where('cust_id', $id);
		$this->db->update('shipping_detail', $data);
		//print_r($query);exit;
		return $query;
		}

		public function customer_orders($id){
		$query = $this->db->get_where('orders',array('customer_id' => $id))->result_array();
		return $query;
		}
}