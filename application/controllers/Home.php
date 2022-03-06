<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Home extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		
	}

	public function index()
	{
		if ($this->session->has_userdata('user_id')) {
			$this->load->view('userpanel/front_page_reg');
		} else {
			$this->load->view('front_app/front_page');
		}
	}

	/*************************/
	//Front form page work
	/************************/

	public function additional_info()
	{
		//if(!$this->session->userdata('admin_id')){redirect('home/login');}
		if ($this->input->post()) {
			$postData = $this->security->xss_clean($this->input->post());


			$ip = $this->input->ip_address(); //getting ip of system
			//print_r($postData);exit;
			$car_type = $postData['car_type'];
			$plate_no = $postData['plate_no'];
			
			if ($this->session->has_userdata('user_id')) {
				$user_id = $this->session->userdata('user_id');
			} else {
				$user_id = 0;
			}
			//$upload1 = $this->upload_files_category($_FILES["cat_img"]);
			if ($car_type == 'car') {
				$type = 'car insurance';
			}
			if ($car_type == 'bus') {
				$type = 'bus insurance';
			}
			if ($car_type == 'truck') {
				$type = 'truck insurance';
			}
			if ($car_type == 'bike') {
				$type = 'bike insurance';
			}
			$insert_array = array(
				'car_type' => $car_type,
				'plate_no' => $plate_no,
				'ip' => $ip,
				'type_of_contract' => $type,
				'user_id' => $user_id,
				'date_request' => date('Y-m-d H:i:s'),
			);
			// print_r($insert_array);exit;
			$insert = $this->db->insert('requests', $insert_array);
			$data['last_id'] = $this->db->insert_id();
			//echo $data['last_id'];exit;
			//print_r($insert);exit;

			if (!empty($insert)) {
				if ($this->session->has_userdata('user_id')) {
					redirect('new_offer/' . $data['last_id']);
				} else {
					redirect('Home/additional/' . $data['last_id']);
				}
			} else {
				$this->session->set_flashdata('failure', 'Something went wrong, try again.');
				redirect('Home');
			}
		} else {
			$this->session->set_flashdata('failure', 'Something went wrong, Try again.');
			redirect('Home/add_category');
		}
	}

	public function additional_info_reg()
	{
		//if(!$this->session->userdata('admin_id')){redirect('home/login');}
		if ($this->input->post()) {
			$postData = $this->security->xss_clean($this->input->post());
			$ip = $this->input->ip_address(); //getting ip of system
			//print_r($postData);exit;
			$car_type = $postData['car_type'];
			$plate_no = $postData['plate_no'];
			$reg_cert = $postData['reg_cert'];
			$postal_contract = $postData['post_contract'];
			if ($this->session->has_userdata('user_id')) {
				$user_id = $this->session->userdata('user_id');
			} else {
				$user_id = 0;
			}
			$upload1 = $this->upload_reg($_FILES['reg_cert']);
			//print_r($upload1);exit;
			if (count($upload1) > 1) {
				$file = implode(',', $upload1);
				$reg_cert = $file;
			} else {
				$reg_cert = $upload1[0];
			}
			//$upload1 = $this->upload_files_category($_FILES["cat_img"]);
			if ($car_type == 'car') {
				$type = 'car insurance';
			}
			if ($car_type == 'bus') {
				$type = 'bus insurance';
			}
			if ($car_type == 'truck') {
				$type = 'truck insurance';
			}
			if ($car_type == 'bike') {
				$type = 'bike insurance';
			}
			$insert_array = array(
				'car_type' => $car_type,
				'plate_no' => $plate_no,
				'reg_cert' => $reg_cert,
				'ip' => $ip,
				'type_of_contract' => $type,
				'user_id' => $user_id,
				'post_contract' => $postal_contract,
				'date_request' => date('Y-m-d H:i:s'),
			);
			//print_r($insert_array);exit;
			$insert = $this->db->insert('requests', $insert_array);
			$data['last_request_id'] = $this->db->insert_id();
			//echo $data['last_id'];exit;
			//print_r($insert);exit;

			if (!empty($insert)) {
				$this->session->set_flashdata('success', 'Your request has been recieved, we will get back to you soon.');
				redirect('new_offer/' . $data['last_request_id']);
			} else {
				$this->session->set_flashdata('failure', 'Something went wrong, try again.');
				redirect('User_Login');
			}
		} else {
			$this->session->set_flashdata('failure', 'Something went wrong, Try again.');
			redirect('Home/add_category');
		}
	}

	public function additional($last_id = NULL)
	{
		$data['last_id'] = $last_id;
		$this->load->view('front_app/additiona_info', $data);
	}

	public function plate_exists()
	{
		$Plate_no = $_POST['Plate_no'];
		//echo $username;exit;
		$exist = $this->db->where('Plate_no', $Plate_no)->get('requests')->row_array();
		if ($exist) {
			echo 1;
		} else {
			echo 0;
		}
	}
	/*************************/

	//Front form page work

	/************************/



	/*************************/

	//Additional info form page work

	/************************/
	public function get_year()
	{
		$years = $_POST['d_o_b'];
		//echo $years;exit;
		$y = explode('-', $years);
		$data['year'] = $y[0] + 18;
		// print_r($data['year']);exit;
		$view_array = array();
		$view_array['year'] =  $this->load->view('front_app/ajax_option', $data, TRUE);
		//print_r($view_array['year']);
		echo json_encode($view_array);
	}
	public function email_exists()
	{
		$email = $_POST['email'];
		//echo $email;exit;
		$exist = $this->db->where('email', $email)->get('users')->row_array();
		if ($exist) {
			echo 1;
		} else {
			echo 0;
		}
	}


	public function plate_no_exists()
	{
		$plate_no = $_POST['plate_no'];
		//echo $email;exit;
		$exist = $this->db->where('plate_no', $plate_no)->get('requests')->row_array();
		if ($exist) {
			echo 1;
		} else {
			echo 0;
		}
	}

	public function phone_exists()
	{
		$phone = $_POST['phone'];
		//echo $username;exit;
		$exist = $this->db->where('phone', $phone)->get('users')->row_array();
		if ($exist) {
			echo 1;
		} else {
			echo 0;
		}
	}

	public function additional_info_process()
	{
		//if(!$this->session->userdata('admin_id')){redirect('home/login');}
		if ($this->input->post()) {
			$postData = $this->security->xss_clean($this->input->post());
			//print_r($postData);exit;
			$name = $postData['name'];
			$surname = $postData['surname'];
			$type_of_customer = $postData['type_of_customer'];
			$occupation = $postData['occupation'];
			$martial_status = $postData['martial_status'];
			$d_o_b = $postData['d_o_b'];
			$business_name = $postData['business_name'];
			$address = $postData['address'];
			$city = $postData['city'];
			$email = $postData['email'];
			$phone = $postData['phone'];
			$zipcode = $postData['zipcode'];
			$liscence_year = $postData['liscence_year'];


			$insert_array = array(
				'name' => $name,
				'surname' => $surname,
				'type_of_customer' => $type_of_customer,
				'occupation' => $occupation,
				'martial_status' => $martial_status,
				'd_o_b' => $d_o_b,
				'business_name' => $business_name,
				'address' => $address,
				'city' => $city,
				'zipcode' => $zipcode,
				'email' => $email,
				'phone' => $phone,
				'liscence_year' => $liscence_year,
				'date_added' => date('Y-m-d H:i:s'),
			);
			//print_r($insert_array);exit;
			$insert = $this->db->insert('users', $insert_array);
			$data['last_user_id'] = $this->db->insert_id();

			$this->db->where('request_no', $postData['last_id'])->update('requests', array('user_id' => $data['last_user_id']));
			//echo $data['last_id'];exit;
			//print_r($insert);exit;
			if (!empty($insert)) {
				redirect('Home/identification/' . $data['last_user_id']);
			} else {
				$this->session->set_flashdata('failure', 'Something went wrong, try again.');
				redirect('Home/additional');
			}
		} else {
			$this->session->set_flashdata('failure', 'Something went wrong, Try again.');
			redirect('Home/additional');
		}
	}

	/*************************/

	//Additional info form page work

	/************************/



	/*************************/

	//Identification form page work

	/************************/
	public function identification($last_user_id = NULL)
	{
		$data['last_user_id'] = $last_user_id;
		$this->load->view('front_app/identification_page', $data);
	}
	public function identification_process()
	{
		//if(!$this->session->userdata('admin_id')){redirect('home/login');}
		if ($this->input->post()) {
			$postData = $this->security->xss_clean($this->input->post());
			//print_r($postData);
			//print_r($_FILES);
			//exit;

			$post_contract = $postData['post_contract'];
			$last_user_id = $postData['last_user_id'];

			$upload1 = $this->upload_reg($_FILES['reg_cert']);
			//print_r($upload1);exit;
			if (count($upload1) > 1) {
				$file = implode(',', $upload1);
				$reg_cert = $file;
			} else {
				$reg_cert = $upload1[0];
			}
			//print_r($file);exit;




			$upload2 = $this->upload_fiscal_code($_FILES['fiscal_code']);
			if (count($upload2) > 1) {
				$file2 = implode(',', $upload2);
				$fiscal_code = $file2;
			} else {
				$fiscal_code = $upload2[0];
			}


			$upload3 = $this->upload_id($_FILES['identification']);
			if (count($upload3) > 1) {
				$file3 = implode(',', $upload3);
				$identification = $file3;
			} else {
				$identification = $upload3[0];
			}

			$insert_array = array(

				'fiscal_code' => $fiscal_code,
				'identification' => $identification,
				//'post_contract' => $post_contract,
				'date_added' => date('Y-m-d H:i:s'),
			);
			//print_r($insert_array);exit;

			$insert = $this->db->where('user_id', $last_user_id)->update('users', $insert_array);
			$update = $this->db->where('user_id', $last_user_id)->update('requests', array('reg_cert' => $reg_cert, 'post_contract' => $post_contract));
			//echo $data['last_id'];exit;
			//print_r($insert);exit;
			if (!empty($insert) && !empty($update)) {
				/* Sending Email */
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

				$data['user_data'] = $this->db->where('user_id', $last_user_id)->get('users')->row_array();
				$data['request_data'] = $this->db->where('user_id', $last_user_id)->get('requests')->row_array();
				$data['admin_data'] = $this->db->where('id', 1)->get('admin_users')->row_array(); //Get Admin Email
				$email =  $data['user_data']['email'];//User email
				$email_admin = $data['admin_data']['email']; //Admin Email 
				$message = $this->load->view('front_app/thankyou_template', $data, TRUE);
				$this->load->library('email');
				$this->email->initialize($config);
				$this->email->from($email_admin, 'Admin'); // change it to yours
				$this->email->to($email); // change it to yours
				$this->email->subject('Welcome to Assicura24');
				$this->email->message($message);
				if ($this->email->send()) {
					echo 'sent';
				} else {
					echo 'not sent';
					show_error($this->email->print_debugger());
				}
				/* email to admin */
				$message1 = $this->load->view('front_app/admin_email_template', $data, TRUE);
				$this->load->library('email');
				$this->email->initialize($config);
				$this->email->from($email_admin, 'Admin'); // change it to yours
				$this->email->to($email_admin); // change it to yours
				$this->email->subject('Welcome to Assicura24');
				$this->email->message($message1);
				if ($this->email->send()) {
				    echo "sent";
					redirect('Home/Thankyou');
				} else {
				    echo 'not sent';
					show_error($this->email->print_debugger());
					redirect('Home/Thankyou');
				}
			} else {
				$this->session->set_flashdata('failure', 'Something went wrong, try again.');
				//redirect('Home/identification/' . $data['last_user_id']);
			}
		} else {
			$this->session->set_flashdata('failure', 'Something went wrong, Try again.');
			//redirect('Home/identification/' . $data['last_user_id']);
		}
	}

	public function Thankyou($data = NULL)
	{

		if ($data != '') {
			$option = 'yes';
		} else {
			$option = 'no';
		}
		//echo $option;
		$page['option'] = $option;
		//echo $page['option'];exit;
		$this->load->view('front_app/thankyou', $page);
	}
	public function upload_reg($fieldname)
	{
		//$data = NULL;
		//echo $fieldname;exit;
		$filesCount = count($_FILES['reg_cert']['name']);
		//print_r($_FILES['reg_cert']['name']);exit;
		for ($i = 0; $i < $filesCount; $i++) {
			$_FILES['file']['name']     = $_FILES['reg_cert']['name'][$i];
			$_FILES['file']['type']     = $_FILES['reg_cert']['type'][$i];
			$_FILES['file']['tmp_name'] = $_FILES['reg_cert']['tmp_name'][$i];
			$_FILES['file']['error']     = $_FILES['reg_cert']['error'][$i];
			$_FILES['file']['size']     = $_FILES['reg_cert']['size'][$i];

			$config['upload_path'] = 'uploads/user_files';
			$config['allowed_types']        = 'gif|jpg|png|doc|xls|pdf|xlsx|docx';


			$this->load->library('upload', $config);
			$this->upload->initialize($config);
			//$data['upload_data'] = '';
			if (!$this->upload->do_upload('file')) {
				$data = array('msg' => $this->upload->display_errors());
				//echo "here";exit;
			} else {
				//echo $filesCount;exit;
				$data = array('msg' => "success");
				$data['upload_data'] = $this->upload->data();
				$count[$i] = $data['upload_data']['file_name'];
			}
		} //end of for
		//print_r($count);exit();
		return $count;
	}

	public function upload_fiscal_code($fieldname)
	{
		//$data = NULL;
		//echo $fieldname;exit;
		$filesCount = count($_FILES['fiscal_code']['name']);
		//print_r($_FILES['reg_cert']['name']);exit;
		for ($i = 0; $i < $filesCount; $i++) {
			$_FILES['file']['name']     = $_FILES['fiscal_code']['name'][$i];
			$_FILES['file']['type']     = $_FILES['fiscal_code']['type'][$i];
			$_FILES['file']['tmp_name'] = $_FILES['fiscal_code']['tmp_name'][$i];
			$_FILES['file']['error']     = $_FILES['fiscal_code']['error'][$i];
			$_FILES['file']['size']     = $_FILES['fiscal_code']['size'][$i];

			$config['upload_path'] = 'uploads/user_files';
			$config['allowed_types']        = 'gif|jpg|png|doc|xls|pdf|xlsx|docx';


			$this->load->library('upload', $config);
			$this->upload->initialize($config);
			//$data['upload_data'] = '';
			if (!$this->upload->do_upload('file')) {
				$data = array('msg' => $this->upload->display_errors());
				//echo "here";exit;
			} else {
				//echo $filesCount;exit;
				$data = array('msg' => "success");
				$data['upload_data'] = $this->upload->data();
				$count[$i] = $data['upload_data']['file_name'];
			}
		} //end of for
		//print_r($count);exit();
		return $count;
	}

	public function upload_id($fieldname)
	{
		$filesCount = count($_FILES['identification']['name']);

		for ($i = 0; $i < $filesCount; $i++) {
			$_FILES['file']['name']     = $_FILES['identification']['name'][$i];
			$_FILES['file']['type']     = $_FILES['identification']['type'][$i];
			$_FILES['file']['tmp_name'] = $_FILES['identification']['tmp_name'][$i];
			$_FILES['file']['error']     = $_FILES['identification']['error'][$i];
			$_FILES['file']['size']     = $_FILES['identification']['size'][$i];

			$config['upload_path'] = 'uploads/user_files';
			$config['allowed_types'] = 'gif|jpg|png|doc|xls|pdf|xlsx|docx';


			$this->load->library('upload', $config);
			$this->upload->initialize($config);

			if (!$this->upload->do_upload('file')) {
				$data = array('msg' => $this->upload->display_errors());
			} else {

				$data = array('msg' => "success");
				$data['upload_data'] = $this->upload->data();
				$count[$i] = $data['upload_data']['file_name'];
			}
		} //end of for

		return $count;
	}
}