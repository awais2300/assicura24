
<?php 

class Profile_model extends CI_Model{

function _construct(){
parent::_contruct();
}

function get_data($session_id)
{
return $this->db->get_where('user', array('id' => $session_id))->row_array();
}


function search($postedData,$session_id)
{
return $this->db->get_where('user', array('id' => $session_id))->row_array();
}

function update($postedData,$session_id)
{
$this->db->where('id', $session_id);
$this->db->update('user', $postedData);
}

function match_email($postedData)
{
return $this->db->get_where('user', array('email' => $postedData['email']))->row_array();
}

}

