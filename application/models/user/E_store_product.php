<?php

class E_store_product extends CI_Model{

function _construct(){
parent::_contruct();
}

public function dropdown_data(){
$this->db->select();
$this->db->group_by('category');
$query = $this->db->get('product')->result_array();
//echo $this->db->last_query();exit;
return $query;
}


public function product_data($category){

		$q1=$this->db->get_where('product',array('category'=>$category))->result_array();
		return $q1;
}

public function getcategory_data(){

		$this->db->from('product_category');
		$q2= $this->db->get()->result_array();
		return $q2;
}

public function getsize_data(){

		$this->db->from('product_size');
		$q3= $this->db->get()->result_array();
		return $q3;
}

public function getcolor_data(){

		$this->db->from('product_color');
		$q4= $this->db->get()->result_array();
		return $q4;
}

public function product_details($id)
{
$q=$this->db->get_where('product',array('id'=>$id))->row_array();
return $q;
}

public function stock_details($id)
{
$q=$this->db->get_where('inventory',array('prod_id'=>$id))->row_array();
return $q;
}

public function filtered_products($minmax_array)
{


$q=$this->db->get_where('product',array('price >'=> $minmax_array[0],'price <'=> $minmax_array[1]))->result_array();
//echo $this->db->last_query();exit;
//print_r($q);exit;
return $q;
}
public function serachdata($userdata)
{
	$q = $this->db->get_where('product', array('Category'=> $userdata))->result_array();
	//print_r($q);exit();
	return $q;
 }
 public function search_data($name)
{
	
$q=$this->db->get_where('product',array('category'=> $name ))->result_array();
//print_r($q);exit;
return $q;

}


}