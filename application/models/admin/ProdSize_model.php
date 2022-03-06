<?php 

class ProdSize_model extends CI_Model{

function _construct(){
parent::_contruct();
}

public function search()
{

$query = $this->db->get('product_size');
return $query->result();

}



public function deletebyid($id)
{
  $this->db->where('id',$id); 
  $this->db->delete('product_size');
}

public function update($Dataposted,$id)
{

$this->db->WHERE('id', $id);

$this->db->UPDATE('product_size',$Dataposted);


}

public function modaldata($id)
{
 return $this->db->get_where('product_size', array('id' => $id))->row_array();

}

public function insert_data($Dataposted)

{

$this->db->insert('product_size',$Dataposted);

}

}