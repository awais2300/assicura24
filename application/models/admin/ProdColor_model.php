<?php 

class ProdColor_model extends CI_Model{

function _construct(){
parent::_contruct();
}

public function search()
{

$query = $this->db->get('product_color');
return $query->result();

}


public function deletebyid($id)
{
  $this->db->where('id',$id); 
  $this->db->delete('product_color');
}

public function update($Dataposted,$id)
{

$this->db->WHERE('id', $id);

$this->db->UPDATE('product_color',$Dataposted);


}

public function modaldata($id)
{
 return $this->db->get_where('product_color', array('id' => $id))->row_array();

}

public function insert_data($Dataposted)

{

$this->db->insert('product_color',$Dataposted);

}

}