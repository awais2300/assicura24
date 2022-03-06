<?php
class Dashboard extends CI_Controller {

public function __construct(){
    parent::__construct();
   		$this->load->model('admin/customer_model');
  }
	public function index() {
		//$this->home_page();
		if($this->session->has_userdata('id')) {
			$this->load->view('admin/dashboard');
		}else{
			redirect('admin/login');
		}
	}
}
