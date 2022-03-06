<?php 

class checkout_model extends CI_Model{

function _construct(){
parent::_contruct();
}

		public function insertshippingdetails($data)
		{
			$this->db->insert('shipping_detail',$data);
		}
		public function updateshippingdetails($mail,$data)
		{
			$this->db->where('customer_email',$mail);
			$this->db->update('shipping_detail',$data);
		}
		public function	check_email($mail)
		{
			$q = $this->db->get_where('shipping_detail',array('customer_email' => $mail))->row_array();
			return $q;
		}
		public function insert_custid($custid,$orderid)
		{	
			$this->db->set('customer_id',$custid );
			$this->db->where('order_id',$orderid);
			$this->db->update('orders');
		}
		public function update_inventory($remain_stock,$id)
		{
			$this->db->set('quantity',$remain_stock);
			$this->db->where('product_id',$id);
			$this->db->update('inventory');
		}
		public function update_prodstock($remain_stock,$id)
		{
			$this->db->set('stock',$remain_stock);
			$this->db->where('id',$id);
			$this->db->update('product');
		}

}