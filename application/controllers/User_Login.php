<?php

use Dompdf\Dompdf;
use Dompdf\Options;
use PHPMailer\PHPMailer\PHPMailer;


class User_Login extends CI_Controller
{


	public function __construct()
	{
		parent::__construct();
		//$this->load->model('admin/Login_model');
	}
	public function index()
	{
		//print_r($this->session->userdata());exit;
		//$this->home_page();
		if ($this->session->has_userdata('user_id')) {
			$id = $this->session->userdata('user_id');
			$data['user_data'] = $this->db->where('user_id', $id)->get('users')->row_array();

			$data['request_data'] = $this->db->where('user_id', $id)->get('requests')->result_array();
			// $this->load->view('userpanel/user_dashboard',$data);
			// print_r($data['request_data']);exit;
			$this->load->view('userpanel/main_page', $data);
		} else {
			$this->load->view('userpanel/login');
		}
	}
	public function offers()
	{
		//print_r($this->session->userdata());exit;
		//$this->home_page();
		if ($this->session->has_userdata('user_id')) {
			$id = $this->session->userdata('user_id');
			$data['user_data'] = $this->db->where('user_id', $id)->get('users')->row_array();

			$data['request_data'] = $this->db->where('user_id', $id)->get('requests')->result_array();
			// $this->load->view('userpanel/user_dashboard',$data);
			// print_r($data['request_data']);exit;
			$this->load->view('userpanel/request_listing', $data);
		} else {
			$this->load->view('userpanel/login');
		}
	}

//request_listing
	public function dashboard($request_no = NULL)
	{
		//print_r($this->session->userdata());exit;
		//$this->home_page();
		if ($this->session->has_userdata('user_id')) {
			$id = $this->session->userdata('user_id');
			$data['user_data'] = $this->db->where('user_id', $id)->get('users')->row_array();
			$data['request_data'] = $this->db->where('request_no', $request_no)->get('requests')->row_array();
			// $this->load->view('userpanel/user_dashboard',$data);
			$this->load->view('userpanel/user_dashboard', $data);
		} else {
			$this->load->view('userpanel/login');
		}
	}

	public function user_panel_offers($request_no = NULL)
	{
		if ($this->session->has_userdata('user_id')) {
			$id = $this->session->userdata('user_id');
			$data['user_data'] = $this->db->where('user_id', $id)->get('users')->row_array();
			$data['request_data'] = $this->db->where('user_id', $id)->where('request_no', $request_no)->get('requests')->row_array();
			$this->load->view('userpanel/user_dashboard', $data);
		} else {
			$this->load->view('userpanel/login');
		}
	}
	public function contract_issued($request_no = NULL)
	{
		if ($this->session->has_userdata('user_id')) {
			$id = $this->session->userdata('user_id');
			$data['user_data'] = $this->db->where('user_id', $id)->get('users')->row_array();
			$data['request_data'] = $this->db->where('user_id', $id)->where('request_no', $request_no)->get('requests')->row_array();
			$this->load->view('userpanel/user_landing_page', $data);
			$cond  = ['user_id' => $id, 'request_no' => $request_no];
			$data_update = [
				'status' => 'waiting payement',
			];
			$this->db->where($cond);
			$this->db->update('requests', $data_update);
		} else {
			$this->load->view('userpanel/login');
		}
	}
	public function contracts($page = NULL)
	{
		if ($this->session->has_userdata('user_id')) {
			$id = $this->session->userdata('user_id');
			$data['user_data'] = $this->db->where('user_id', $id)->get('users')->row_array();

			$cond  = ['user_id' => $id, 'status' => 'Issued']; //Added by Awais Ahmad
			$data['request_data'] = $this->db->where($cond)->get('requests')->result_array();
			$data['page'] = $page;
			//print_r($data['request_data']);exit;
			$this->load->view('userpanel/contract_listing', $data);
		} else {
			$this->load->view('userpanel/login');
		}
	}
	public function purchased($request_no = NULL)
	{
		if ($this->session->has_userdata('user_id')) {
			$id = $this->session->userdata('user_id');
			$data['user_data'] = $this->db->where('user_id', $id)->get('users')->row_array();
			$data['request_data'] = $this->db->where('user_id', $id)->where('request_no', $request_no)->get('requests')->row_array();
			$data['admin_data'] = $this->db->where('id', 1)->get('admin_users')->row_array(); //Get Admin Email 
			

			$cond  = ['request_no' => $request_no];
			$dataParm = [
				'status' => 'Waiting Payment',
			];
			$this->db->where($cond);
			$this->db->update('requests', $dataParm);

			$email_to = $data['user_data']['email'];
			$from = $data['admin_data']['email'];
			$template = 'purchased_contract_email';
			/* email to user */
			$this->send_email($from, $email_to, $template, $data);

			$this->load->view('userpanel/user_landing_page', $data);
		} else {
			$this->load->view('userpanel/login');
		}
	}

	//Function Added by Awais Ahmad
	public function suspend_contract($request_no = NULL)
	{
		if ($this->session->has_userdata('user_id')) {
			$id = $this->session->userdata('user_id');
			$data['user_data'] = $this->db->where('user_id', $id)->get('users')->row_array();
			$data['request_data'] = $this->db->where('user_id', $id)->where('request_no', $request_no)->get('requests')->row_array();
            $data['admin_data'] = $this->db->where('id', 1)->get('admin_users')->row_array(); //Get Admin Email 
            
			$email_to = $data['admin_data']['email'];
			$from = $data['admin_data']['email'];
			//$to = 'awais_rafaqat2300@yahoo.com';
			$template = 'suspend_contract_template';
			/* email to user */
			$this->send_email($from, $email_to, $template, $data);
			redirect('Home/Thankyou/' . 'yes');
		} else {
			$this->load->view('userpanel/login');
		}
	}


	public function close_contract($request_no = NULL)
	{
		if ($this->session->has_userdata('user_id')) {
			$id = $this->session->userdata('user_id');
			$data['user_data'] = $this->db->where('user_id', $id)->get('users')->row_array();
			$data['request_data'] = $this->db->where('user_id', $id)->where('request_no', $request_no)->get('requests')->row_array();
			$data['admin_data'] = $this->db->where('id', 1)->get('admin_users')->row_array(); //Get Admin Email 

			$email_to = $data['admin_data']['email'];
			$from = $data['admin_data']['email'];
			$template = 'close_contract_template';
			/* email to user */
			$this->send_email($from, $email_to, $template, $data);
			redirect('Home/Thankyou/' . 'yes');
		} else {
			$this->load->view('userpanel/login');
		}
	}

	public function replace_contract($request_no = NULL)
	{
		if ($this->session->has_userdata('user_id')) {
			$id = $this->session->userdata('user_id');
			$data['user_data'] = $this->db->where('user_id', $id)->get('users')->row_array();
			$data['request_data'] = $this->db->where('user_id', $id)->where('request_no', $request_no)->get('requests')->row_array();
            $data['admin_data'] = $this->db->where('id', 1)->get('admin_users')->row_array(); //Get Admin Email 

			$email_to = $data['admin_data']['email'];
			$from = $data['admin_data']['email'];			
			$template = 'replace_contract_template';
			/* email to user */
			$this->send_email($from, $email_to, $template, $data);
			redirect('Home/Thankyou/' . 'yes');
		} else {
			$this->load->view('userpanel/login');
		}
	}

	public function login_process()
	{

		if ($this->input->post()) {
			$postedData = $this->security->xss_clean($this->input->post());
			//To create encrypted password use
			$email = $postedData['email'];
			$phone = $postedData['phone'];
			// $p = password_hash($postedData['password'], PASSWORD_BCRYPT);
			$query = $this->db->where('email', $email)->where('phone', $phone)->get('users')->row_array();
			//print_r($query['user_id']);exit;
			//echo $p; exit;
			if (!empty($query)) {
				$this->session->set_userdata('user_id', $query['user_id']);
				$this->session->set_flashdata('success', 'Login successfully');
				redirect('User_Login');
				//print_r($query); exit; 
			} else {
				$this->session->set_flashdata('failure', 'Login failed');
				redirect('User_Login');
			}
		}
	}


	public function logout()

	{
		$this->session->sess_destroy();
		redirect('User_Login');
	}

	public function forgotpassword(){
		$email = $this->input->post('email');
		$res=$this->db->where('email',$email)->get('users')->row_array();
		$data['admin_data'] = $this->db->where('id', 1)->get('admin_users')->row_array(); //Get Admin Email 
		
		if(!empty($res)){
		           $data['user_id']=$res['user_id'];
				   $data['name']=$res['name'].' '.$res['surname'];
		           //$id=$data['front_user_id'];
				   
				   $from = $data['admin_data']['email'];
				   $to=$res['email'];
				   //$template='forgot_template';
				    $subject=' Reset Password - Assicura24';
		           $email=$this->send__email($to,$subject, $data['user_id'],$data['name']);
		           if($email==true){
		           	  echo 1;
			      }
		       }else{
            	  echo 0;
			   }
		
	}
	
	
	public function resetPassword($id = NULL)
	{
		$data['id'] = $id;
		$data['getpaassword_data'] = $this->db->where('user_id', $data['id'])->get('users')->row_array();
		$this->load->view('userpanel/updateForgot', $data);
	}

	public function updatepassword()
	{

		$id = $this->input->post('id');
		$phonenew = $this->input->post('phone');
		$res = $this->db->select('*')->where('user_id', $id)->get('users')->row_array();
		print_r($res);
		if (!empty($res)) {
			$update = array('phone' => $phonenew);
			$resi = $this->db->where('user_id', $id)->update('users', $update);
			//echo $resi;exit;
			if ($resi) {
				//echo 'in if';exit;
				$this->session->set_flashdata('success', 'Phone successfully updated, Login Now');
				redirect('User_Login');
			}
		} else {
			//echo "3234";exit;
			$this->session->set_flashdata('failure', 'Something went wrong! try again');
			redirect('User_Login');
		}
	}

	public function profile()
	{
		if ($this->session->has_userdata('user_id')) {
			$id = $this->session->userdata('user_id');
			$data['user_data'] = $this->db->where('user_id', $id)->get('users')->row_array();
			$data['request_data'] = $this->db->where('user_id', $id)->get('requests')->result_array();
			$this->load->view('userpanel/user_profile', $data);
		} else {
			$this->load->view('userpanel/login');
		}
	}

	public function profile_edit_process($id = NULL)
	{
		if (!$this->session->userdata('user_id')) {
			redirect('User_Login');
		}
		if ($this->input->post()) {
			$postData = $this->security->xss_clean($this->input->post());
			//print_r($postData);exit;
			$name = $postData['name'];
			$surname = $postData['surname'];
			//$type_of_customer= $postData['type_of_customer'];
			//$occupation = $postData['occupation'];
			$martial_status = $postData['martial_status'];
			$d_o_b = $postData['d_o_b'];
			//$business_name= $postData['business_name'];
			$address = $postData['address'];
			$city = $postData['city'];
			$email = $postData['email'];
			$phone = $postData['phone'];
			$zipcode = $postData['zipcode'];
			//$liscence_year=$postData['liscence_year'];


			$insert_array = array(
				'name' => $name,
				'surname' => $surname,
				//'type_of_customer'=>$type_of_customer,
				//'occupation' => $occupation,
				'martial_status' => $martial_status,
				'd_o_b' => $d_o_b,
				//'business_name'=>$business_name,
				'address' => $address,
				'city' => $city,
				'zipcode' => $zipcode,
				'email' => $email,
				'phone' => $phone,
				//'liscence_year' => $liscence_year,
				'date_added' => date('Y-m-d H:i:s'),
			);
			//print_r($insert_array);exit;
			$this->db->where('user_id', $id);
			$insert = $this->db->update('users', $insert_array);
			$this->session->set_flashdata('success', 'Profile successfully updated.');
			redirect('User_Login');
		} else {
			$this->session->set_flashdata('failure', 'Something went wrong, Try again.');
			redirect('User_Login/profile');
		}
	}

	public function user_details()
	{
		if ($this->session->has_userdata('user_id')) {
			$id = $this->session->userdata('user_id');
			$data['user_data'] = $this->db->where('user_id', $id)->get('users')->row_array();
			$data['request_data'] = $this->db->where('user_id', $id)->get('requests')->row_array();
			$this->load->view('userpanel/user_view_offer', $data);
		} else {
			$this->load->view('userpanel/login');
		}
	}

	/*******************************************/
	/*******************************************/
	/******* DOWNLOAD ********************/
	public function download_List()
	{
		if ($this->session->has_userdata('user_id')) {
			$id = $this->session->userdata('user_id');
			$data['user_data'] = $this->db->where('user_id', $id)->get('users')->row_array();
			$data['request_data'] = $this->db->where('user_id', $id)->get('requests')->result_array();
			$this->load->view('userpanel/download_listing', $data);
		} else {
			$this->load->view('userpanel/login');
		}
	}

	public function download($request_no = NULL)
	{
		if ($this->session->has_userdata('user_id')) {
			require_once $_SERVER['DOCUMENT_ROOT'] . '/application/third_party/dompdf/vendor/autoload.php';
			//spl_autoload_register('DOMPDF_autoload');
			$options = new Options();
			$options->set('isRemoteEnabled', TRUE);
			$options->set('enable_html5_parser', TRUE);
			$options->set('tempDir', $_SERVER['DOCUMENT_ROOT'] . '/pdf-export/tmp');
			$dompdf = new Dompdf($options);
			$dompdf->set_base_path($_SERVER['DOCUMENT_ROOT'] . '');

			$id = $this->session->userdata('user_id');
			$graph['user_data'] = $this->db->where('user_id', $id)->get('users')->row_array();
			$graph['request_data'] = $this->db->where('request_no', $request_no)->get('requests')->row_array();

			$html = $this->load->view('userpanel/demo', $graph, TRUE);
			/**/
			$dompdf->loadHtml($html);

			// (Optional) Setup the paper size and orientation
			$dompdf->setPaper('A4', 'landscape');

			// Render the HTML as PDF
			$dompdf->render();

			$output = $dompdf->output();
			$doc_name = 'contract.pdf';
			file_put_contents($doc_name, $output);
			redirect($doc_name);
			exit;
		} else {
			$this->load->view('userpanel/login');
		}
	}

	public function send_email($from = NULL, $to = NULL, $template = NULL, $data = NULL)
	{
		// echo 'sdasd';exit;
		$config = array(
			'useragent' => 'CodeIgniter',
			'protocol' => 'smtp',
		    'smtp_host' => 'ssl://smtps.aruba.it',//'ssl://smtp.googlemail.com',
			'smtp_port' => 465,
			'smtp_user' => 'support@assicura24.it',
			'smtp_pass' => 'a147258369',
			'mailtype' => 'html',
			'newline' => "\r\n",
			'charset' => 'iso-8879-1',
			'wordwrap' => TRUE
		);

		if ($template == 'purchased_contract_email') {
			$subject = $data['user_data']['name'] . ' ' . $data['user_data']['surname'] . '-' . $data['request_data']['Plate_no'] . '-' . $data['request_data']['price'];
			$message = $this->load->view('userpanel/purchased_contract_template', $data, TRUE);
		} else if ($template == 'suspend_contract_template') {
			$subject = 'Request by ' . $data['user_data']['name'] . ' ' . $data['user_data']['surname'] . '-' . $data['request_data']['Plate_no'] . '-Contract Suspension';
			$message = $this->load->view('userpanel/suspend_contract_template', $data, TRUE);
		} else if ($template == 'replace_contract_template') {
			$subject = 'Request by ' . $data['user_data']['name'] . ' ' . $data['user_data']['surname'] . '-' . $data['request_data']['Plate_no'] . '-Contract Replacement';
			$message = $this->load->view('userpanel/replace_contract_template', $data, TRUE);
		} else if ($template == 'close_contract_template') {
			$subject = 'Request by ' . $data['user_data']['name'] . ' ' . $data['user_data']['surname'] . '-' . $data['request_data']['Plate_no'] . '-Contract Close';
			$message = $this->load->view('userpanel/close_contract_template', $data, TRUE);
		}
		$this->load->library('email');
		$this->email->initialize($config);
		$this->email->from($from, 'Admin'); // change it to yours
		$this->email->to($to); // change it to yours
		$this->email->subject($subject);
		$this->email->message($message);
		if ($this->email->send()) {
			//echo 'sent';
		} else {
			//echo 'not sent';
		}
	}
	
	public function abc()
	{
		$id = $this->session->userdata('user_id');
		$data['user_data'] = $this->db->where('user_id', $id)->get('users')->row_array();
		$data['request_data'] = $this->db->where('user_id', $id)->get('requests')->row_array();
		$subject = 'Request by' . $data['user_data']['name'] . ' ' . $data['user_data']['surname'] . '-' . $data['request_data']['Plate_no'] . '-Contract Suspension';
		//echo $subject;exit;
		$this->load->view('userpanel/forgot_template', $data);
	}

	public function send__email($email = NULL, $subject = NULL, $id = NULL, $name = NULL)
	{
		$config = array(
			'useragent' => 'CodeIgniter',
			'protocol' => 'smtp',
			'smtp_host' => 'ssl://smtps.aruba.it',//'ssl://smtp.googlemail.com',
			'smtp_port' => 465,
			'smtp_user' => 'support@assicura24.it',
			'smtp_pass' => 'a147258369',
			'mailtype' => 'html',
			'newline' => "\r\n",
			'charset' => 'iso-8879-1',
			'wordwrap' => TRUE
		);
		$data['id'] = $id;
		$data['admin_data'] = $this->db->where('id', 1)->get('admin_users')->row_array(); //Get Admin Email 
		$email_admin = 	$data['admin_data']['email'];
		$data['name'] = $name;
		$message = $this->load->view('userpanel/forgot_template', $data, TRUE);
		
		$this->load->library('email');
		$this->load->initialize($config);
		//$this->email->set_header('MIME-Version', '1.0; charset=utf-8');
		//$headers  ='"MIME-Version: 1.0' . PHP_EOL;
        //$headers = 'Content-Type: text/html; charset=ISO-8859-1' . PHP_EOL;
        $this->email->set_header('Content-type', 'text/html');
		$this->email->from($email_admin, 'Admin'); // change it to yours
		$this->email->to($email); // change it to yours
		$this->email->subject($subject);
		$this->email->message($message);
		if ($this->email->send()) {
			return true;
		} else {
			//show_error($this->email->print_debugger());
			return false;
		}
	}
}