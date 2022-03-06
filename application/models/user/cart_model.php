<?php 

class cart_model extends CI_Model{

	function _construct(){
	parent::_contruct();
	}

	public function cart_data($id)
	{
	return $this->db->get_where('product', array('id' => $id))->row_array();

	}

	public function insert_order($data)
	{

	$this->db->insert('orders',$data);
	
	}

	public function insert_orderdetails($data1)
	{
	$this->db->insert('order_detail',$data1);
	}

	public function fetch_stock($prodid)
	{
		return $this->db->get_where('inventory', array('prod_id' => $prodid))->row_array();
	}
	
	public function update_inventory($remain_stock,$id)
	{

		$this->db->set('stock',$remain_stock);
		$this->db->where('prod_id',$id);
		$this->db->update('inventory');

	}

}