<?php
class Login extends CI_Controller {


public function __construct(){
    parent::__construct();
     $this->load->model('admin/Login_model');
  }
      public function index()
      {
      //$this->home_page();
          if($this->session->has_userdata('id')) 
          {
                $this->load->view('admin/dashboard');
          }
          else{
           $this->load->view('admin/login');
              }
      }

      public function login_process()
      {
            
      		if($this->input->post())
           {
            $postedData = $this->security->xss_clean($this->input->post());
                  //To create encrypted password use
                $password = $postedData['password'];
                $query = $this->Login_model->search($postedData); 
          // $p = password_hash($postedData['password'], PASSWORD_BCRYPT);
            //echo $p; exit;
                 if(!empty($query)) 
                 {
                     if (password_verify($password,$query['password'] ))
                         {
                                $this->session->set_userdata($query);
                                $this->session->set_flashdata('success','Login successfully');
                                redirect('admin/dashboard');
                                //print_r($query); exit; 
                        }
                     else
                        {
                       $this->session->set_flashdata('failure','Login failed');
                       redirect('admin/login');
                        }
                }
                else
                {
                $this->session->set_flashdata('failure','Login failed');
                redirect('admin/login');
                }
      	    }
      }


      public function logout()

      {
            $this->session->sess_destroy();
            redirect('admin/login');

      }

}