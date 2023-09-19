<?php
error_reporting(0);

defined('BASEPATH') or exit('No direct script access allowed');
require_once APPPATH . 'libraries/dompdf/autoload.inc.php';

use Dompdf\Dompdf;

class Admin extends CI_Controller
{
	private $stripe = null;
	private $stripe_pk;
	private $stripe_sk;
	private $mode = 'test';
	public $balance = 0;

	function __construct()
	{
		parent::__construct();

		$this->load->model('Admin_model');
		$this->userSession = $this->session->userdata;
		$userSession = $this->session->userdata('seflofinancial');
		if (empty($this->session->userdata('seflofinancial'))) {
			redirect(base_url('login'));
		}

		if ($this->mode == 'live') {
			$this->stripe_pk = 'pk_live_51MhbgvIdYwyIiCqnTvfeuINEzEGIrpiWvKNt70PgtAQzfqE4WpCHN57TrJ3xwNmZNuQed0YPsD3DhZw6c6yMGsQn004S5INRKD';
			$this->stripe_sk = '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';
		} else {
			$this->stripe_pk = 'pk_test_51MhbgvIdYwyIiCqnJNMcI3YVEjvb1XONoJYY5oteeMWTn15x5otKHupNSGMA0l4rFJdv0FwMMc92gJP9KJtPwqC800iGTdxunm';
			$this->stripe_sk = 'sk_test_51MhbgvIdYwyIiCqnNXRZYcuWGQjcqHcWBCh21yT3csfIkV4n0UM10sOcODfRLTltD7xNb1prXx37HkonHCv21vM100w931D5YL';
		}
		require_once('application/libraries/vendor/autoload.php');
		$this->stripe = new \Stripe\StripeClient($this->stripe_sk);
		$this->balance = $this->stripe->balance->retrieve([])->available[0]->amount / 100;
	}


	public function login()
	{

		$this->load->view('admin/signin');
	}

	public function index()
	{
		if (!empty($this->uri->segment(3))) {
			$application_type = $this->uri->segment(3);
		} else {
			$application_type = null;
		}
		$data['topapplications'] = $this->Admin_model->get_all_applications(10, $application_type);
		$data['last7days'] = $this->Admin_model->get_all_appliction_lastdays(7);
		$data['last30days'] = $this->Admin_model->get_all_appliction_lastdays(30);
		$data['pending'] = $this->Admin_model->get_all_appliction_bystatus(1);
		$data['approved'] = $this->Admin_model->get_all_appliction_bystatus(5);
		$data['balance'] = $this->balance;

		$this->load->view('admin/index', $data);
	}

	public function application()
	{
		$data['topapplications'] = $this->Admin_model->get_all_applications(6);
		$data['applications'] = $this->Admin_model->get_all_applications();
		$data['balance'] = $this->balance;
		//echo '<pre>'; print_r($data); echo '</pre>';
		$this->load->view('admin/applications', $data);
	}

	public function viewApplication($id)
	{
		error_reporting(0);
		$data['answers'] = array();
		if ($id)
			$data['answers'] = $this->Admin_model->getAllAnswers($id);
		$data['balance'] = $this->balance;
		//echo '<pre>'; print_r($data); echo '</pre>';
		$this->load->view('admin/viewapplication', $data);
	}

	public function view_application($appid)
	{
		error_reporting(0);
		$data['data'] = $this->Admin_model->get_single_application($appid);

		$id = $data['data']['app_no'];
		if ($id) {
			$data['answers'] = $this->Admin_model->getAllAnswers($id);
			$data['docs'] = $this->Admin_model->get_result('app_doc_file', 'app_id', $id, 'created_on');
			$data['notes'] = $this->Admin_model->get_result('app_note', 'app_id', $id, 'created_on');
			$data['app_no'] = $id;
		}
		$data['balance'] = $this->balance;
		$data['stripe_key'] = $this->stripe_pk;

		$this->load->view('admin/singleapplication', $data);
	}


	public function create_pdf($appid)
	{
		// Instantiate and use the dompdf class 
		$dompdf = new Dompdf();
		error_reporting(0);

		$data['data'] = $this->Admin_model->get_single_application($appid);
		$id = $data['data']['app_no'];

		$data['answers'] = $this->Admin_model->getAllAnswers($id);
		$data['docs'] = $this->Admin_model->get_result('app_doc_file', 'app_id', $id, 'created_on');
		$data['notes'] = $this->Admin_model->get_result('app_note', 'app_id', $id, 'created_on');

		if ($data['data']['purpose'] == "personal") {

			$data['answers'] = $this->Admin_model->getAllAnswers($id);
			$data['docs'] = $this->Admin_model->get_result('app_doc_file', 'app_id', $id, 'created_on');
			$data['notes'] = $this->Admin_model->get_result('app_note', 'app_id', $id, 'created_on');
		}

		if ($data['data']['purpose'] == "personal") {

			$data['answers'] = $this->Admin_model->getAllAnswers_var('homeloan_answers', $id, 'homeloan_questions');
			$data['docs'] = $this->Admin_model->get_result('app_doc_file', 'app_id', $id, 'created_on');
			$data['notes'] = $this->Admin_model->get_result('app_note', 'app_id', $id, 'created_on');
		}

		if ($data['data']['purpose'] == "personal") {

			$data['answers'] = $this->Admin_model->getAllAnswers_var('insurance_answers', $id, 'insurance_questions');
			$data['docs'] = $this->Admin_model->get_result('app_doc_file', 'app_id', $id, 'created_on');
			$data['notes'] = $this->Admin_model->get_result('app_note', 'app_id', $id, 'created_on');
		}

		if ($data['data']['purpose'] == "Personal") {

			$data['answers'] = $this->Admin_model->getAllAnswers_var('pl_answers', $id, 'pl_questions');
			$data['docs'] = $this->Admin_model->get_result('app_doc_file', 'app_id', $id, 'created_on');
			$data['notes'] = $this->Admin_model->get_result('app_note', 'app_id', $id, 'created_on');
		}

		if ($data['data']['purpose'] == "personal") {

			$data['answers'] = $this->Admin_model->getAllAnswers_var('cl_answers', $id, 'cl_questions');
			$data['docs'] = $this->Admin_model->get_result('app_doc_file', 'app_id', $id, 'created_on');
			$data['notes'] = $this->Admin_model->get_result('app_note', 'app_id', $id, 'created_on');
		}


		$data['userdetail'] = $this->Admin_model->get_result_row('user', 'uid', $_SESSION['seflofinancial'], 'created');
		$data['app_no'] = $id;
		$html = $this->load->view('userpanel/singleapplication_pdf', $data, true);

		// Load HTML content 
		$dompdf->loadHtml($html);

		// (Optional) Setup the paper size and orientation 
		$dompdf->setPaper('A4', 'landscape');

		// Render the HTML as PDF 
		$dompdf->render();

		// Output the generated PDF to Browser 
		$dompdf->stream();
	}


	public function profilesetting()
	{
		$data['details'] = $this->Admin_model->get_admin()[0];
		$data['balance'] = $this->balance;
		//echo '<pre>'; print_r($data); echo '</pre>';
		$this->load->view('admin/settings', $data);
	}

	public function logout()
	{
		$this->load->helper('cookie');
		$this->session->sess_destroy();
		delete_cookie('seflofinancial');
		redirect(base_url() . 'admin/login');
		exit;
	}

	/*	public function status() {
		print_r($_POST); die;
	}*/

	/*public function edit_profile(){
		$data['detail']=$this->Admin_model->get_admin();
		$this->load->view('admin/edit_profile',$data);
	}*/

	public function forget_password()
	{
		//$this->load->view('admin/forget_password');
	}

	public function update_profile($id)
	{
		/*if(!empty($_FILES['img']['name'])){
			$config['upload_path'] = 'assets/admin/images';
			$config['allowed_types'] = 'jpg|jpeg|png|gif';
			$config['file_name'] = $_FILES['img']['name'];
			$config['encrypt_name'] = TRUE;
			//Load upload library and initialize configuration
			$this->load->library('upload',$config);
			$this->upload->initialize($config);
			if($this->upload->do_upload('img')){
				$uploadData = $this->upload->data();
				$picture = $uploadData['file_name'];
			}else{
				$picture = '';
				$error = array('error' => $this->upload->display_errors());
				print_r($error);
			}
		}else{
			$picture=$this->input->post('image');
		}*/
		$result = $this->Admin_model->saveprofile();
		if ($result != false) {
			$this->session->set_flashdata('success', 'Updated successfully');
		} else {
			$this->session->set_flashdata('error', 'Unable to Update details!');
		}
		redirect(base_url() . 'Admin/profilesetting');
	}
	public function spuller()
	{
		include('../../../sfcon/base.php');
		//sfcon/base.php
		///home/pdp59sflniw7/public_html/admin/application/controllers/Admin.php
		// 
	}


	public function do_upload_doc()
	{

		$target_dir = UPLOAD_PATH;
		$file = time() . basename($_FILES["files"]["name"]);
		$target_file = $target_dir . $file;

		$res = move_uploaded_file($_FILES["files"]["tmp_name"], $target_file);
		if ($res) {
			$data = array(
				'file_path' => $file,
				'app_id' => $_POST['app_id'],
				'status' => $_POST['status'],
				'created_on' => time()
			);
			$result = $this->Admin_model->insert_data('app_doc_file', $data);
			if ($result != false) {
				$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Document inserted successfully.</div>');
			} else {
				$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Unable to insert document!</div>');
			}
			redirect(base_url() . 'Admin/application');
		}
	}


	public function pendingdocument()
	{
		$this->load->view('admin/pending');
	}

	public function completeddocument()
	{
		$this->load->view('admin/completed');
	}
	public function profile_admin()
	{
		$this->load->view('admin/admin_profile');
	}
	public function profile_user_view()
	{
		$this->load->view('admin/user_profile');
	}
	public function profile_application_edit()
	{
		$this->load->view('admin/application_edit_user');
	}

	public function note()
	{

		$data = array(
			'note' => $_POST['message'],
			'app_id' => $_POST['app_id'],
			'status' => $_POST['status'],
			'created_on' => time(),
			'created_by' => $_SESSION['fname'],
		);
		$result = $this->Admin_model->insert_data('app_note', $data);
		if ($result != false) {
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Note added successfully.</div>');
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Unable to add note!</div>');
		}
		redirect(base_url() . 'Admin/application');
	}


	public function change_pass()
	{
		//$this->load->view('admin/change_password');
	}
	public function change_password()
	{
		/*$password_request = $this->input->post();
		if(isset($password_request) && !empty($password_request)){
			$this->form_validation->set_rules('old_password', 'Enter Old Password', 'required',array('required'=>'Enter Old Password'));
			$this->form_validation->set_rules('password', 'Enter New Password', 'required',array('required'=>'Enter New Password'));
			$this->form_validation->set_rules('confirm_password', 'Enter Confirm Password', 'required|matches[password]',array('required'=>'Enter Confirm Password'));
			$this->form_validation->set_message('matches', 'Confirm Password Not Matched With New Password');			
			$this->form_validation->set_error_delimiters('<div class="validate_error">', '</div>');        
			if ($this->form_validation->run() == FALSE){
				$this->session->set_flashdata('error', 'Confirm Password Not Matched With New Password');
				$this->load->view('admin/change_password');
			}else{
				$auth = "SELECT id,password FROM admin WHERE id = ?"; 
				$auth_details = $this->db->query($auth, array($this->session->userdata('o2o')))->row();
				if(password_verify($password_request['old_password'], $auth_details->password)){
					$data = "UPDATE admin SET password = ? WHERE id = ?";
					$update_status = $this->db->query($data, array(password_hash($password_request['password'], PASSWORD_DEFAULT),$this->session->userdata('o2o')));	
					if($update_status>0){
						$this->session->set_flashdata('success', 'Password Changed Successfully');	
					}else{
						$this->session->set_flashdata('error', 'Unable to Change Password');	
					}
				}	
				else{
					$this->session->set_flashdata('error', 'Enter Correct Old Password');	
				}
				redirect(base_url().'Admin/change_pass');			       
			}    
		}
		else{
			$this->load->view('admin/change_password');	
		}*/
	}


	public function mail_send()
	{

		$to = $_POST['to'];
		$subject = $_POST['subject'];

		$message = $_POST['messagebody'];

		// Always set content-type when sending HTML email
		$headers = "MIME-Version: 1.0" . "\r\n";
		$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

		// More headers
		$headers .= 'From: <customercare@seflofinancial.com>' . "\r\n";

		$result = mail($to, $subject, $message, $headers);
		if ($result != false) {
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Email send successfully.</div>');
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Unable to send email.!</div>');
		}
		redirect(base_url() . 'Admin/application');
	}



	public function delete($app_id)
	{
		$data['details'] = $this->Admin_model->delete($app_id);

		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Application deleted successfully.</div>');

		redirect('/admin/application');
	}


	public function reports()
	{
		if (!empty($this->uri->segment(3))) {
			$application_type = $this->uri->segment(3);
		} else {
			$application_type = null;
		}
		$data['allapplications'] = $this->Admin_model->get_total_applications();
		// echo '<pre>'; print_r($data); echo '</pre>';
		// $data['last30days']=$this->Admin_model->get_all_appliction_lastdays(30);
		$data['pending'] = $this->Admin_model->get_all_appliction_bystatus(1);
		$data['approved'] = $this->Admin_model->get_all_appliction_bystatus(5);
		$data['rejected'] = $this->Admin_model->get_all_appliction_bystatus(6);

		$data['total_amt'] = $this->Admin_model->get_total_amt_req();
		$data['total_amt_accepted'] = $this->Admin_model->get_total_amt_req_status(5);
		$data['total_amt_rejected'] = $this->Admin_model->get_total_amt_req_status(6);
		$data['balance'] = $this->balance;


		$this->load->view('admin/reports', $data);
	}
}
