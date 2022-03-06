
<?php 

class Login_model extends CI_Model{

function _construct(){

	parent::_contruct();
}

function search($postedData)
{
return $this->db->get_where('user', array('email' => $postedData['email']))->row_array();

}


}

?>