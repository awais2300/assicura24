<?php 

class order_model extends CI_Model{

function _construct(){
parent::_contruct();
}
public function display_orders()
{
    $this->db->select();
	$q=$this->db->get('orders')->result_array();
	//echo "<pre>";print_r($q);exit;
	return $q;
}

public function product_join()
{

	$this->db->select('product.name as prodname, order_detail.order_id as orderdetailid, orders.order_id as orderid');
	$this->db->join('order_detail', 'product.id = order_detail.product_id' );
	$this->db->join('orders', 'orders.order_id = order_detail.order_id' );
	$query = $this->db->get('product');
	//print_r($query->result_array());exit;
	return $query->result_array();	
}

public function order_details($id)
{
$this->db->select('product.name as prodname,product.sale_price as prodprice,inventory.stock as prodstock,order_detail.color as prodcolor,order_detail.size as prodsize,order_detail.quantity as prodqty ,order_detail.order_id as orderdetailid, orders.order_id as orderid,shipping_detail.customer_name as custname, shipping_detail.customer_phone as custphone,  shipping_detail.country as country,  shipping_detail.shipping_address as shippingadress');

	$this->db->join('order_detail', 'product.id = order_detail.product_id' );
	$this->db->join('orders', 'orders.order_id = order_detail.order_id' );
	$this->db->join('shipping_detail', 'orders.customer_id = shipping_detail.cust_id' );
	$this->db->join('inventory', 'product.id = inventory.prod_id' );
	$query = $this->db->get_where('product',array('orders.order_id' => $id));
	//echo $this->db->last_query();exit();
	//print_r($query->result_array());exit;
	return $query->result_array();	

}
		public function approveorder($id)
		{

		$this->db->set('approve_status', 'approved');
		$this->db->where('order_id', $id);
		$this->db->update('orders');

		}

		public function rejectorder($id)
		{

		$this->db->set('approve_status', 'rejected');
		$this->db->where('order_id', $id);
		$this->db->update('orders');

		}

}