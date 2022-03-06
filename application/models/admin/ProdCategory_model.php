<?php 

class ProdCategory_model extends CI_Model{

function _construct(){
parent::_contruct();
}

public function search()
{

$query = $this->db->get('product_category');
return $query->result();

}


public function deletebyid($id)
{
  $this->db->where('id',$id); 
  $this->db->delete('product_category');
}

public function modaldata($id)
{
 return $this->db->get_where('product_category', array('id' => $id))->row_array();

}


public function update($Dataposted,$id)
{

$this->db->WHERE('id', $id);
$this->db->UPDATE('product_category',$Dataposted);


}

public function insert_data($Dataposted)

{

$this->db->insert('product_category',$Dataposted);

}

}