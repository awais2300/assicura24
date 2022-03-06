<?php 

class product_model extends CI_Model{

function _construct(){
parent::_contruct();
}

public function insert_data($Dataposted)
{

$this->db->insert('product',$Dataposted);
}

public function search()
{
 $this->db->select('product.id as prodid, product.name as prodname,product.category as prodcategory,product.color as prodcolor,product.size as prodsize, product.price as prodprice, product.sale_price as prodsale_price, inventory.stock as prodstock, product.product_description as prod_description');
$this->db->join('inventory', 'product.id = inventory.prod_id' );
	//$this->db->join('product_color', 'product.color = product_color.id' );
	//$this->db->join('product_size', 'productsize = product_size.id' );
	$query = $this->db->get('product');
	return $query->result();	

}


function getcategory_name()
	    {
			$this->db->from('product_category');
			$q= $this->db->get()->result_array();
			print_r($q);exit;
			return $q;
		}
	function getcolor_name()
	    {
			$this->db->from('product_color');
			$q1= $this->db->get()->result_array();
			//print_r($q);exit;
			return $q1;
		}
	function getsize_name()
	    {
			$this->db->from('product_size');
			$q1= $this->db->get()->result_array();
			//print_r($q);exit;
			return $q1;
		}

function deletebyid($id)
{
 $this->db->where('id',$id); 
 $this->db->delete('product');

}

public function modaldata($id)
{
 return $this->db->get_where('product', array('id' => $id))->row_array();
}

public function update($Dataposted,$insert_id)
{
$this->db->where('id', $insert_id);
$this->db->update('product', $Dataposted);
}

public function insert_inventory($data){

$this->db->insert('inventory',$data);

}

}