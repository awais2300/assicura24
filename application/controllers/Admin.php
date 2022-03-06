<?php

use Dompdf\Dompdf;
use Dompdf\Options;
use PHPMailer\PHPMailer\PHPMailer;


class Admin extends CI_Controller
{

	public function index()
	{
		//print_r($this->session->userdata());exit;
		//$this->home_page();
		if ($this->session->has_userdata('admin_id')) {
			$id = $this->session->userdata('admin_id');
			$data['admin_data'] = $this->db->where('id', $id)->get('admin_users')->row_array();
			$this->load->view('admin/admin_dashboard', $data);
		} else {
			$this->load->view('admin/login');
		}
	}

	public function login_process()
	{

		if ($this->input->post()) {
			$postedData = $this->security->xss_clean($this->input->post());
			//To create encrypted password use
			$email = $postedData['email'];
			$password = $postedData['password'];
			// $p = password_hash($postedData['password'], PASSWORD_BCRYPT);
			$query = $this->db->where('email', $email)->where('password', $password)->get('admin_users')->row_array();
			//print_r($query['user_id']);exit;
			//echo $p; exit;
			if (!empty($query)) {
				$this->session->set_userdata('admin_id', $query['id']);
				$this->session->set_flashdata('success', 'Login successfully');
				redirect('Admin');
				//print_r($query); exit; 
			} else {
				$this->session->set_flashdata('failure', 'Login failed');
				redirect('Admin');
			}
		}
	}

	public function request_listing()
	{
		if ($this->session->has_userdata('admin_id')) {
			$data['request_data'] = $this->db->get('requests')->result_array();
			$this->load->view('admin/request_listing', $data);
		} else {
			$this->load->view('admin/login');
		}
	}

	public function request_detail($request_no = NULL)
	{
		$this->db->select('requests.*,users.*');
		$this->db->join('users', 'users.user_id=requests.user_id');
		$data['request_data'] = $this->db->where('request_no', $request_no)->get('requests')->row_array();
		$data['admin_data'] = $this->db->get('admin_users')->row_array();
		//print_r($data['admin_data']);exit;
		$this->load->view('admin/admin_request_form', $data);
	}

	public function suspend_contract($request_no = NULL)
	{
		if ($this->session->has_userdata('admin_id')) {
			//$id = $this->session->userdata('user_id');
			$cond  = ['request_no' => $request_no];
			$data = [
				'status' => 'inactive',
			];
			$this->db->where($cond);
			$this->db->update('requests', $data);
			$this->session->set_flashdata('success', 'Contract Suspended Successfully.');
			redirect('Admin/request_listing');
		} else {
			$this->load->view('admin/login');
		}
	}


	public function close_contract($request_no = NULL)
	{
		if ($this->session->has_userdata('admin_id')) {
			//$id = $this->session->userdata('user_id');
			$cond  = ['request_no' => $request_no];
			$data = [
				'status' => 'contract closed',
			];
			$this->db->where($cond);
			$this->db->update('requests', $data);
			$this->session->set_flashdata('success', 'Contract CLOSED Successfully.');
			redirect('Admin/request_listing');
		} else {
			$this->load->view('admin/login');
		}
	}

	public function replace_contract($request_no = NULL)
	{
		if ($this->session->has_userdata('admin_id')) {
			//$id = $this->session->userdata('user_id');
			$cond  = ['request_no' => $request_no];
			$data = [
				'status' => 'Contract replacement',
			];
			$this->db->where($cond);
			$this->db->update('requests', $data);
			$this->session->set_flashdata('success', 'Contract Replacement request generated Successfully.');
			redirect('Admin/request_listing');
		} else {
			$this->load->view('admin/login');
		}
	}

	public function update_request_process($request_no = NULL)
	{
		//echo "I am in function";
		if ($this->session->has_userdata('admin_id')) {
        
			if ($this->input->post()) {
				//print_r($this->input->post());exit;
				$postData = $this->security->xss_clean($this->input->post());
               // echo 
			   $user_id = $postData['user_id'];
				/* uploading of files */
				if ($_FILES['Upload_company_offer_PDF']['name'] == '') {
					$company_PDF = $postData['company_offer'];
				} else {
					$upload1 = $this->upload_it('Upload_company_offer_PDF', ADMIN_FILE_PATH);
					if ($upload1['msg'] == 'okay') {
						//$file=implode(',',$upload1);		
						$company_PDF = $upload1['upload_data']['file_name'];
					} else {
						$company_PDF = '';
					}
				}

				if ($_FILES['Upload_signed_contract_PDF']['name'] == '') {
					$sign_Contract_Upload = $postData['signed_contract'];
				} else {
					$upload2 = $this->upload_it('Upload_signed_contract_PDF', ADMIN_FILE_PATH);

					if ($upload2['msg'] == 'okay') {
						$sign_Contract_Upload = $upload2['upload_data']['file_name'];
					} else {
						$sign_Contract_Upload = '';
					}
				}

				if ($_FILES['contract_issued']['name'] == '') {
					$contract_issued = $postData['issued'];
				} else {
					$upload10 = $this->upload_it('contract_issued', ADMIN_FILE_PATH);
					if ($upload10['msg'] == 'okay') {
						//$file=implode(',',$upload1);		
						$contract_issued = $upload10['upload_data']['file_name'];
					} else {
						$contract_issued = '';
					}
				}

				if (count($_FILES['reg_cert']['name']) <= 1) {
					$reg_cert = $postData['reg'];
				} else {
					$upload4 = $this->upload_reg($_FILES['reg_cert']);
					//print_r($upload1);exit;
					if (count($upload4) >= 1) {
						$file = implode(',', $upload4);
						$reg_cert = $file;
					} else {
						$reg_cert = $upload4[0];
					}
				}

				if (count($_FILES['fiscal_code']['name']) <= 1) {
					$fiscal_code = $postData['fiscal'];
				} else {
					$upload5 = $this->upload_fiscal_code($_FILES['fiscal_code']);
					if (count($upload5) >= 1) {
						$file2 = implode(',', $upload5);
						$fiscal_code = $file2;
					} else {
						$fiscal_code = $upload5[0];
					}
				}


				if (count($_FILES['identification']['name']) <= 1) {
					$identification = $postData['idi'];
				} else {
					$upload6 = $this->upload_id($_FILES['identification']);
					if (count($upload6) >= 1) {
						$file3 = implode(',', $upload6);
						$identification = $file3;
					} else {
						$identification = $upload6[0];
					}
				}

                 /* get data to update User Table */
				 
				$name = $postData['name'];
				$liscence_year = $postData['liscence_year'];
				$martial_status = $postData['martial_status'];
				$d_o_b = $postData['d_o_b'];
				$address = $postData['address'];
				$email = $postData['email'];
				$phone = $postData['phone'];
				$occupation = $postData['occupation'];
				$fiscal_code = $fiscal_code;
				$identification = $identification;
				$type_of_customer = $postData['type_of_customer'];
				
				/* get data to update Request Table */
				
				$Plate_no = $postData['Plate_no'];
				$liscence_year = $postData['liscence_year'];
				$reg_cert = $reg_cert;
				$post_contract = $postData['post_contract'];
				$carBrand = $postData['car_brand'];
				$carModel = $postData['car_model'];
				//$ip = $postData['ip'];
				$price = $postData['price'];
				$other_gurantee=$postData['other_gurantee'];
				$road_assistance=$postData['road_assistance'];
				$comission = $postData['comission'];
				$total = $postData['total'];
				$InsCompChoosed = $postData['Insurance_company_choosed'];
				$companyPDF = $company_PDF;
				$LandPageLink = $postData['landing_page_link'];
				$operator = $postData['operator'];
				$signContractUpload = $sign_Contract_Upload;
				$contractNumber = $postData['Contract_Number'];
				$startingDate = $postData['starting_date'];
				$expiryDate = $postData['expiry_date'];
				$paymentSplit = $postData['payment_of_split'];
				$interimPayment = $postData['interim_payment'];
				$type_of_contract = $postData['type_of_contract'];
				$status = $postData['status'];
				$comments = trim($postData['Comments']);


				$update_array_user = array(
				
					'occupation'=> $occupation,
					'type_of_customer'  => $type_of_customer,
					'liscence_year'  => $liscence_year,
					'fiscal_code'  => $fiscal_code,
					'identification'  => $identification,
					'martial_status'=> $martial_status,
				    'd_o_b'=> $d_o_b,
					'address'=>$address,
					'email'=>$email,
					'phone'=>$phone
				
				);
			
				$update_array_request = array(
					'Plate_no' => $Plate_no,
					'reg_cert'  => $reg_cert,
					'post_contract' => $post_contract,
					'car_brand' => $carBrand,
					'car_model' => $carModel,
					//'ip' => $ip,
					'price' => $price,
					'other_gurantee'=>$other_gurantee,
					'road_assistance'=>$road_assistance,
					'commission' => $comission,
					'total' => $total,
					'Insurance_company_choosed' => $InsCompChoosed,
					'Upload_company_offer_PDF' => $companyPDF,
					'contract_issued'=>$contract_issued,
					'landing_page_link' => $LandPageLink,
					'operator' => $operator,
					'Upload_signed_contract_PDF'  => $signContractUpload,
					'Contract_Number' => $contractNumber,
					'starting_date' => $startingDate,
					'expiry_date' => $expiryDate,
					'payment_of_split' => $paymentSplit,
					'interim_payment' => $interimPayment,
					'type_of_contract' => $type_of_contract,
					'status' => $status,
					'Comments' => $comments
				);

//echo '<pre>'; print_r($update_array_request);
//echo '<pre>'; print_r($update_array_user);exit;

            /** Update request */
			$cond  = ['request_no' => $request_no];
			$this->db->where($cond);
			$query1= $this->db->update('requests', $update_array_request);
			
			/** Update user */
			$cond  = ['user_id' => $user_id ];
			$this->db->where($cond);
			$query2 = $this->db->update('users', $update_array_user);
			
			if(!empty($query1)){
				if(!empty($query2)){
			$this->session->set_flashdata('success', 'Request Data Updated Successfully.');
			redirect('Admin/request_listing');
				}
			}
		} else {
			$this->load->view('admin/login');
		}
	}
	}
	public function logout()

	{
		$this->session->sess_destroy();
		redirect('Admin');
	}
	public function upload_it($fieldname = NULL, $path = NULL)
	{
		$data = NULL;
		//print_r($fieldname);exit;
		//Configure
		//set the path where the files uploaded will be copied. NOTE if using linux, set the folder to permission 777
		//$config = array ();
		$config['upload_path'] = 'uploads/admin_files';
		// set the filter image types
		$config['allowed_types'] = 'gif|jpg|png|doc|xls|pdf|xlsx|docx';
		$config['max_size']	= '50000';
		//load the upload library
		$this->load->library('upload', $config);
		$this->load->library('image_lib');
		$this->upload->initialize($config);
		$this->upload->set_allowed_types('*');
		$data['upload_data'] = '';

		//if not successful, set the error message
		if (!$this->upload->do_upload($fieldname)) {
			$data = array('msg' => $this->upload->display_errors());
		} else { //else, set the success message
			$data = array('msg' => "okay");
			$data['upload_data'] = $this->upload->data();
		}


		return $data;
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
		//$data = NULL;
		//echo $fieldname;exit;
		$filesCount = count($_FILES['identification']['name']);
		//print_r($_FILES['reg_cert']['name']);exit;
		for ($i = 0; $i < $filesCount; $i++) {
			$_FILES['file']['name']     = $_FILES['identification']['name'][$i];
			$_FILES['file']['type']     = $_FILES['identification']['type'][$i];
			$_FILES['file']['tmp_name'] = $_FILES['identification']['tmp_name'][$i];
			$_FILES['file']['error']     = $_FILES['identification']['error'][$i];
			$_FILES['file']['size']     = $_FILES['identification']['size'][$i];

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



	public function request_listing_search()
	{

		if ($this->session->has_userdata('admin_id')) {
			$data['request_data'] = $this->db->where('request_no', 0)->get('requests')->result_array();
			$this->load->view('admin/request_listing_search', $data);
		} else {
			$this->load->view('admin/login');
		}
	}

	public function search_requests()
	{
		$reqNo = $_POST['request_no'];
		$plate_no = $_POST['plate_no'];
		$status = $_POST['status'];

		$cond  = [
			'request_no' => $reqNo,
			'plate_no' => $plate_no,
			'status' => $status
		];
		$this->db->select('*');
		$this->db->where('request_no ', $reqNo);
		$this->db->or_where('plate_no', $plate_no);
		$this->db->or_where('status', $status);
		$data['request_data'] = $this->db->get('requests')->result_array();
		// print_r(count($data['request_data']));exit;
		echo json_encode($data['request_data']);
	}


	public function Issued_Contracts_report()
	{
		if ($this->session->has_userdata('admin_id')) {
			
			$this->db->select('count(1) Total_Contracts, MONTHNAME(date_request) Month, YEAR(date_request) Year');
			$this->db->where('status ', 'Issued');
			$this->db->group_by('MONTHNAME(date_request), YEAR(date_request)');
			// SELECT count(1) , monthname(date_request) M, YEAR(date_request) from requests where status = 'Issued' group by month(date_request), year(date_request)
			$data['report_data'] = $this->db->get('requests')->result_array();
			$this->load->view('admin/Issued_Contracts_report', $data);
		} else {
			$this->load->view('admin/login');
		}
		//$query = $this->db->query("SELECT count(1), monthname(date_request) M, YEAR(date_request) from requests where status = 'Issued' group by month(date_request), year(date_request)");
		//return $query->result_array();
	}


}