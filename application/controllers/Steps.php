<?php
defined('BASEPATH') or exit('No direct script access allowed');
error_reporting(0);
class Steps extends CI_Controller
{
	private $stripe = null;
	private $stripe_pk;
	private $stripe_sk;
	private $mode = 'test';
	private $balance = 0;
	private $one_time;
	private $subscription_1;
	private $subscription_2;
	private $subscription_3;

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Steps_model');
		$this->load->model('Admin_model');
		$this->appNo = $this->session->userdata('app_no');
		/*
        $this->userSession = $this->session->userdata;
        $userSession = $this->session->userdata('seflofinancial');
        if(empty($this->session->userdata('seflofinancial'))){
            redirect(base_url('steps/signin'));
        }
        */


		if ($this->mode == 'live') {
			$this->stripe_pk = 'pk_live_51MhbgvIdYwyIiCqnTvfeuINEzEGIrpiWvKNt70PgtAQzfqE4WpCHN57TrJ3xwNmZNuQed0YPsD3DhZw6c6yMGsQn004S5INRKD';
			$this->stripe_sk = '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';
			$this->one_time = "price_1NNHRHIdYwyIiCqnUe60zt0L";
			$this->subscription_1 = "price_1NNHRBIdYwyIiCqnKfyyCfPb";
			$this->subscription_2 = "price_1NNHR3IdYwyIiCqnu2ZCTEsW";
			$this->subscription_3 = "price_1NNHQxIdYwyIiCqn304JuDri";
		} else {
			$this->stripe_pk = 'pk_test_51MhbgvIdYwyIiCqnJNMcI3YVEjvb1XONoJYY5oteeMWTn15x5otKHupNSGMA0l4rFJdv0FwMMc92gJP9KJtPwqC800iGTdxunm';
			$this->stripe_sk = 'sk_test_51MhbgvIdYwyIiCqnNXRZYcuWGQjcqHcWBCh21yT3csfIkV4n0UM10sOcODfRLTltD7xNb1prXx37HkonHCv21vM100w931D5YL';
			$this->one_time = "price_1NMpFTIdYwyIiCqnwUkZ4K0M";
			$this->subscription_1 = "price_1NNDhVIdYwyIiCqnjhaMYt0p";
			$this->subscription_2 = "price_1NNDjKIdYwyIiCqnm8iAIg4Y";
			$this->subscription_3 = "price_1NNDkuIdYwyIiCqn4mPGp6Io";
		}
		require_once('application/libraries/vendor/autoload.php');
		$this->stripe = new \Stripe\StripeClient($this->stripe_sk);
		// $transfer =  $this->stripe->transfers->create([
		// 	'amount' => 100, // $1.00
		// 	"currency" => "usd",
		// 	"destination" => $user->stripe_connect_id,
		// ]);

		// $this->balance = $this->stripe->balance->retrieve([])->available[0]->amount / 100;
		// var_dump($this->balance);
		// die;

		$user = $this->Admin_model->get_result_row('user', 'uid', $_SESSION['seflofinancial'], 'created');
		// check user has completed onboarding process or not then fetch balance
		if (!$user->completed_stripe_onboarding || $user->completed_stripe_onboarding === "1") {
			$this->balance = $this->stripe->balance->retrieve(null, ['stripe_account' => $user->stripe_connect_id])->available[0]->amount / 100;
		} else {
			$this->balance = 0;
		}

		// delete user stripe connect id that has not completed onboarding process and have stripe connect id
		if ((!$user->completed_stripe_onboarding || $user->completed_stripe_onboarding === "0") && !is_null($user->stripe_connect_id)) {
			$this->stripe->accounts->delete($user->stripe_connect_id, []);
			$this->Admin_model->updateProfile([
				'stripe_connect_id' => null,
			]);
		}

		// check either user has stripe customer id or not
		if (is_null($user->stripe_customer_id)) {
			$customer = $this->stripe->customers->create([
				'description' => 'Creation of Stripe Customer Object by Seflo Financial',
				'email' => $user->email,
				'name' => $user->name,
			]);
			$this->Admin_model->updateProfile([
				'stripe_customer_id' => $customer->id,
			]);
		}

		// var_dump(user_has_subscription());
		// die;
	}

	public function index()
	{
		$request = $this->input->post();
		if (isset($request) && !empty($request)) {
			if (empty($_SESSION['email'])) {
				$row = $this->db->select('uid')->where(array('email' => $_POST['7']))->limit(1)->get('user')->row();
			} else {
				$row = $this->db->select('uid')->where(array('email' => $_POST['7'], 'uid!=' => $_SESSION['seflofinancial']))->limit(1)->get('user')->row();
			}

			$id = $row->uid;
			if (!empty($row)) {
				$this->session->set_flashdata('error', 'Email already exists');
			} else {
				$insert_id = $this->Steps_model->addstep1();
				if ($insert_id) {

					$this->session->set_flashdata('success', 'Submitted successfully');
				} else {
					$this->session->set_flashdata('error', 'Unable to submit');
				}
			}
			redirect('steps', 'refresh');
		} else {
			$data['is_bank_verified'] = false;
			if ($_SESSION['seflofinancial']) {
				$user = $this->Admin_model->get_result_row('user', 'uid', $_SESSION['seflofinancial'], 'created');
				if ($user->bank_name && $user->last4 && $user->routing_number) {
					$data['is_bank_verified'] = true;
				}
			}

			$data['questions'] = $this->Steps_model->get_questions(1);
			$_SESSION['app_no'] = $_SESSION['business_app_no'];
			$data['answers'] = $this->Steps_model->getSavedAnswer(1);
			$data['docs'] = $this->Admin_model->get_result('app_doc_file', 'app_id', $_SESSION['business_app_no'], 'created_on');
			$this->load->view('steps/steps', $data);
		}
	}

	public function clHome()
	{
		$data['questions'] = $this->Steps_model->get_clquestions(1);
		//print_r($data['questions']); die;	
		$_SESSION['app_no'] = $_SESSION['commercial_app_no'];
		$data['answers'] = $this->Steps_model->getClSavedAnswer(1);
		//print_r($data['answers']); die;
		$this->load->view('steps/clhome', $data);
	}

	public function owner()
	{
		if (isset($this->appNo)) :
			$checkStep1 = $this->Steps_model->getSavedAnswer(1, $this->appNo);
			if (!empty($checkStep1)) :
				$data['questions'] = $this->Steps_model->get_questions(2);
				$data['answers'] = $this->Steps_model->getSavedAnswer(2);
				if (empty($data['answers'])) {
					$id = $this->session->userdata('seflofinancial');
					$user = $this->db->select('name,lname,email,mobile,password,password as confirm_pass')->where('uid', $id)->limit(1)->get('user')->row();

					$usArray = array();
					$i = 20;
					foreach ($user as $value) {
						$usArray[$i] = array('question_id' => $i, 'answer' => $value);
						$i++;
					}
					$data['answers'] = $usArray;
				}

				$this->load->view('steps/own', $data);
			else : redirect('/steps');
			endif;
		else :
			redirect('/steps');
		endif;
	}

	public function clOwner()
	{
		if (isset($this->appNo)) :
			$checkStep1 = $this->Steps_model->getClSavedAnswer(1, $this->appNo);
			if (!empty($checkStep1)) :
				$data['questions'] = $this->Steps_model->get_clquestions(2);
				$data['answers'] = $this->Steps_model->getClSavedAnswer(2);
				$this->load->view('steps/clowner', $data);
			else : redirect('/steps/clHome');
			endif;
		else :
			redirect('/steps/clHome');
		endif;
	}

	public function business()
	{
		if (isset($this->appNo)) :
			$checkStep2 = $this->Steps_model->getSavedAnswer(2, $this->appNo);
			if (!empty($checkStep2)) :
				$data['questions'] = $this->Steps_model->get_questions(3);
				$data['answers'] = $this->Steps_model->getSavedAnswer(3);
				$data['all_categories'] = $this->Steps_model->get_all_categories();
				$this->load->view('steps/bus', $data);
			else : redirect('/steps/owner');
			endif;
		else :
			redirect('/steps/owner');
		endif;
	}

	public function clBusiness()
	{
		if (isset($this->appNo)) :
			$checkStep2 = $this->Steps_model->getClSavedAnswer(2, $this->appNo);
			if (!empty($checkStep2)) :
				$data['questions'] = $this->Steps_model->get_clquestions(3);
				$data['answers'] = $this->Steps_model->getClSavedAnswer(3);
				$data['all_categories'] = $this->Steps_model->get_all_categories();
				$this->load->view('steps/clbusiness', $data);
			else : redirect('/steps/clOwner');
			endif;
		else :
			redirect('/steps/clOwner');
		endif;
	}

	public function document()
	{
		if (isset($this->appNo)) :
			$checkStep3 = $this->Steps_model->getSavedAnswer(3, $this->appNo);
			if (!empty($checkStep3)) :
				$data['questions'] = $this->Steps_model->get_questions(4);
				$data['answers'] = $this->Steps_model->getSavedAnswer(4);
				$this->load->view('steps/document', $data);
			else : redirect('/steps/business');
			endif;
		else :
			redirect('/steps/business');
		endif;
	}

	public function clDocument()
	{
		if (isset($this->appNo)) :
			$checkStep3 = $this->Steps_model->getClSavedAnswer(3, $this->appNo);
			if (!empty($checkStep3)) :
				$data['questions'] = $this->Steps_model->get_clquestions(4);
				$data['answers'] = $this->Steps_model->getClSavedAnswer(4);
				$this->load->view('steps/cldocument', $data);
			else : redirect('/steps/clBusiness');
			endif;
		else :
			redirect('/steps/clBusiness');
		endif;
	}

	public function document1()
	{
		$data['questions'] = $this->Steps_model->get_questions(4);
		$this->load->view('steps/doc1', $data);
	}

	public function submission()
	{
		if (isset($this->appNo)) :
			$checkStep3 = $this->Steps_model->getSavedAnswer(4, $this->appNo);
			if (!empty($checkStep3)) :
				$data['appid'] = $this->appNo;
				$data['answers'] = $this->Steps_model->get_all_answers();
				$this->load->view('steps/sub', $data);
			else : redirect('/steps/document');
			endif;
		else :
			redirect('/steps/document');
		endif;
	}

	public function clSubmission()
	{
		if (isset($this->appNo)) :
			$checkStep3 = $this->Steps_model->getClSavedAnswer(4, $this->appNo);
			if (!empty($checkStep3)) :
				$data['appid'] = $this->appNo;
				$data['answers'] = $this->Steps_model->get_all_clanswers();
				$this->load->view('steps/clsubmission', $data);
			else : redirect('/steps/clDocument');
			endif;
		else :
			redirect('/steps/clDocument');
		endif;
	}

	public function signup()
	{
		$this->load->view('steps/signup');
	}

	public function create_user()
	{
		$data = $this->Steps_model->add_user();
		if (strcmp($data, 'email') == 0) {
			$out = array('status' => 'error', 'message' => 'Email already registered with us!');
		} else if (strcmp($data, 'fill') == 0) {
			$out = array('status' => 'error', 'message' => 'Fill all the required fields!');
		} else if ($data == true) {
			$insert_id = $this->db->insert_id();
			$this->send_email_user_signup($insert_id);

			$auth_details = $this->Admin_model->get_result_row('user', 'uid', $insert_id, 'created');
			if ($auth_details) {
				// creating stripe customer
				$customer = $this->stripe->customers->create([
					'description' => 'Creation of Stripe Customer Object by Seflo Financial',
					'email' => $auth_details->email,
					'name' => $auth_details->name,
				]);
				$this->Admin_model->updateProfile([
					'stripe_customer_id' => $customer->id,
				]);

				$array = array(
					'seflofinancial' => $auth_details->uid,
					'email' => $_POST['email'],
					'username' => $auth_details->name,
					'userlastname' => $auth_details->lname,
					'usermobile' => $auth_details->mobile,
				);
				$this->session->set_userdata($array);
			}

			$out = array('status' => 'success', 'message' => 'Thanks for registering with us!');
		} else {
			$out = array('status' => 'error', 'message' => 'Something went wrong!');
		}
		echo json_encode($out);
	}

	public function signin()
	{
		$this->load->view('steps/login');
	}

	public function dashboard()
	{
		$data['applications'] = $this->Admin_model->get_all_userapplications();
		$data['applications_status'] = $this->Admin_model->get_all_userapplications_status();
		$data['userdetail'] = $this->Admin_model->get_result_row('user', 'uid', $_SESSION['seflofinancial'], 'created');
		if (is_null($data['userdetail'])) {
			redirect('steps/signin', 'refresh');
		}
		$data['balance'] = $this->balance;
		$data['one_time'] = $this->one_time;
		$data['subscription_1'] = $this->subscription_1;
		$data['subscription_2'] = $this->subscription_2;
		$data['subscription_3'] = $this->subscription_3;

		$this->load->view('userpanel/index', $data);
	}

	public function forgot()
	{
		$this->load->view('steps/forgot');
	}
	public function get_questions($a)
	{
		$data['questions'] = $this->Steps_model->get_questions($a);
		echo '<pre>';
		print_r($data);
		echo '</pre>';
		//$this->load->view('steps/forgot');
	}


	public function insurance()
	{
		$data['questions'] = $this->Steps_model->get_insurancequestions(1);

		$_SESSION['app_no'] = $_SESSION['insurance_app_no'];
		$data['answer'] = $this->Steps_model->get_saved_answer('insurance_answers');


		$this->load->view('steps/insurance', $data);
	}


	public function getappno()
	{
		$data = $this->Steps_model->getappno();
		echo '<pre>';
		print_r($data);
		echo '</pre>';
	}

	// business form addition 
	public function addstep1()
	{
		$target_file = '';
		$app_no = '';
		//echo '<pre>'; print_r($_POST); print_r($_FILES); echo '</pre>'; die;
		$this->form_validation->set_rules('password', 'Enter Password', 'required', array('required' => 'Enter Password'));
		$this->form_validation->set_error_delimiters('<div class="validate_error">', '</div>');
		if (!empty($_FILES)) {
			/*$target_dir = UPLOAD_PATH;
	    $file=time().basename($_FILES['image_form']["name"]);
       $target_file = $target_dir.$file;
       
        $res=move_uploaded_file($_FILES["image_form"]["tmp_name"], $target_file); */

			// upload multiple files
			foreach ($_FILES as $key => $value) {
				$flag = false;
				$images = array();
				$count = 0;
				$value = '';
				$config = array();
				$all_files = array();
				$files = $_FILES;
				if (!empty($_FILES[$key]['name'])) {
					$count = count($_FILES[$key]['name']);
					for ($i = 0; $i < $count; $i++) {
						$_FILES[$key]['name'] = $files[$key]['name'][$i];
						$_FILES[$key]['type'] = $files[$key]['type'][$i];
						$_FILES[$key]['tmp_name'] = $files[$key]['tmp_name'][$i];
						$_FILES[$key]['error'] = $files[$key]['error'][$i];
						$_FILES[$key]['size'] = $files[$key]['size'][$i];

						$config['file_name'] = $_FILES[$key]['name'];
						$config['upload_path'] = UPLOAD_PATH;
						$config['allowed_types'] = '*';
						$config['max_size'] = '20000';
						$config['remove_spaces'] = true;
						// $config['encrypt_name'] = TRUE;
						$config['max_width'] = '';
						$config['max_height'] = '';
						$this->load->library('upload', $config);
						$this->upload->initialize($config);
						if ($this->upload->do_upload($key)) {
							//$data=array('upload_data' => $this->upload->data());
							$fileName = $_FILES[$key]['name'];
							$images[] = $fileName;
							$flag = true;
							if ($flag != false) {

								if (!empty($this->session->userdata('business_app_no'))) {
									$app_no = $this->session->userdata('business_app_no');
								} else {
									$app_no = $this->Steps_model->getappno();
								}
								$data = array(
									'file_path' => $fileName,
									'app_id' => $app_no,
									'status' => 1,
									'created_on' => time()
								);
								$result = $this->Admin_model->insert_data('app_doc_file', $data);
							}
						} else {
							$data['error'] = $this->upload->display_errors();
							$flag = false;
							$out = array('status' => 'error', 'message' => 'Something went wrong!');
						}
					}
				} //if 

			} //foreach

		} //!empty $_FILES 

		$data = $this->Steps_model->addstep1();
		if ($data != false) {
			$out = array('status' => 'success', 'message' => 'Data Saved successfully');
		} else {
			$out = array('status' => 'error', 'message' => 'Something went wrong!');
		}
		echo json_encode($out);
	}

	// business form addition addClOwner
	public function addClHome()
	{
		//echo json_encode($_POST); exit();
		$data = $this->Steps_model->addClHome();
		if ($data != false) {
			$out = array('status' => 'success', 'message' => '');
		} else {
			$out = array('status' => 'error', 'message' => 'Something went wrong!');
		}
		echo json_encode($out);
	}

	public function addstep2()
	{
		$data = $this->Steps_model->addstep2();
		if ($data != false) {
			$out = array('status' => 'success', 'message' => '');
		} else {
			$out = array('status' => 'error', 'message' => 'Something went wrong!');
		}
		echo json_encode($out);
		//echo '<pre>'; print_r($_POST); echo '</pre>';
	}

	public function addClOwner()
	{
		$data = $this->Steps_model->addClOwner();
		if ($data != false) {
			$out = array('status' => 'success', 'message' => '');
		} else {
			$out = array('status' => 'error', 'message' => 'Something went wrong!');
		}
		echo json_encode($out);
		//echo '<pre>'; print_r($_POST); echo '</pre>';
	}

	public function addstep3()
	{
		$data = $this->Steps_model->addstep3();
		//echo '<pre>'; print_r($_POST); ECHO '</pre>';die;
		if ($data != false) {
			$out = array('status' => 'success', 'message' => '');
		} else {
			$out = array('status' => 'error', 'message' => 'Something went wrong!');
		}
		echo json_encode($out);
	}

	public function addClBusiness()
	{
		$data = $this->Steps_model->addClBusiness();
		//echo '<pre>'; print_r($_POST); ECHO '</pre>';die;
		if ($data != false) {
			$out = array('status' => 'success', 'message' => '');
		} else {
			$out = array('status' => 'error', 'message' => 'Something went wrong!');
		}
		echo json_encode($out);
	}

	public function addstep4()
	{
		//$this->submission();
		$data = $this->Steps_model->addstep4();
		if (!empty($_FILES)) {
			//$this->load->view('steps/submission');
			//$this->submission();
			redirect('/steps/submission');
		}
	}

	public function addClDocument()
	{
		//$this->submission();
		$data = $this->Steps_model->addClDocument();
		if (!empty($_FILES)) {
			//$this->load->view('steps/submission');
			//$this->submission();
			redirect('/steps/clSubmission');
		}
	}

	//add insurance form
	public function add_insurance()
	{

		$data = $this->Steps_model->add_insurance();
		//print_r($data);
		if ($data != false) {
			$out = array('status' => 'success', 'message' => '');
		} else {
			$out = array('status' => 'error', 'message' => 'Something went wrong!');
		}
		unset($_SESSION['insurance_app_no']);
		echo json_encode($out);
	}

	public function personal()
	{

		$data['questions'] = $this->Steps_model->get_plquestions(1);
		$_SESSION['app_no'] = $_SESSION['personal_app_no'];

		$data['answer'] = $this->Steps_model->get_saved_answer('pl_answers');
		//echo '<pre>'; print_r($data); die;
		$this->load->view('steps/personal', $data);
	}

	public function add_personal()
	{

		$data = $this->Steps_model->addPersonal();
		if ($data != false) {
			$out = array('status' => 'success', 'message' => '');
		} else {
			$out = array('status' => 'error', 'message' => 'Something went wrong!');
		}
		unset($_SESSION['personal_app_no']);
		echo json_encode($out);
	}

	public function homeloan()
	{

		$data['questions'] = $this->Steps_model->get_homeloanquestions(1);
		$_SESSION['app_no'] = $_SESSION['home_app_no'];


		$data['answer'] = $this->Steps_model->get_saved_answer('homeloan_answers');
		$this->load->view('steps/homeloan', $data);
	}

	public function add_homeloan()
	{


		$data = $this->Steps_model->addHomeLoan();

		if ($data != false) {
			$out = array('status' => 'success', 'message' => '');
		} else {
			$out = array('status' => 'error', 'message' => 'Something went wrong!');
		}
		unset($_SESSION['home_app_no']);
		echo json_encode($out);
	}

	public function terms()
	{
		$this->load->view('terms');
	}

	public function get_subcategories_for_cat($cat_id)
	{
		$data['all_subcategories'] = $this->Steps_model->get_subcategories_for_cat($cat_id);
		echo json_encode($data);
		//echo '<pre>'; print_r($data); echo '</pre>';
		//	$this->load->view('steps/steps',$data);
	}


	public function update_app_id($app_id)
	{
		unset($_SESSION['business_app_no']);
		$this->Steps_model->update_app_id($app_id);

		$app_detail = $this->Admin_model->get_result_row('applications', 'app_no', $app_id, 'submission_date');
		$this->send_email_user_application_status_update($app_detail->app_id);
	}


	public function update_app_id2($app_id)
	{
		unset($_SESSION['commercial_app_no']);
		$this->Steps_model->update_app_id($app_id);

		$app_detail = $this->Admin_model->get_result_row('applications', 'app_no', $app_id, 'submission_date');
		$this->send_email_user_application_status_update($app_detail->app_id);
	}

	public function update_app_id_status($app_id, $status)
	{
		// $data = [
		// 	'stripeToken' => $this->input->post('stripeToken'),
		// 	'app_id' => $app_id,
		// 	'status' => $status,
		// 	'result' => $status === '5',
		// 	'has_token' => $this->input->post('stripeToken'),
		// 	'has_name' => $this->input->post('name'),
		// 	'amount_type' => gettype($this->input->post('amount')),
		// 	'total' => $this->input->post('amount') * 100,
		// ];

		if ($status === '5' && $this->input->post('stripeToken')) {
			try {
				$caharge = $this->stripe->charges->create([
					'amount' => $this->input->post('amount') * 100,
					'currency' => 'usd',
					'source' => $this->input->post('stripeToken'),
					'description' => 'Loan Payment',
				]);

				$this->Steps_model->update_app_id_status($app_id, $status);
				$app_detail = $this->Admin_model->get_result_row('applications', 'app_no', $app_id, 'submission_date');
				$this->send_email_user_application_status_update($app_detail->app_id);

				echo json_encode([
					'status' => true,
					'charge_id' => $caharge->id
				]);
				die;
			} catch (Exception $ex) {
				echo json_encode([
					'status' => false,
					'message' => $ex->getMessage()
				]);
				die;
			}
		}
		$this->Steps_model->update_app_id_status($app_id, $status);
		$app_detail = $this->Admin_model->get_result_row('applications', 'app_no', $app_id, 'submission_date');
		$this->send_email_user_application_status_update($app_detail->app_id);
		echo json_encode([
			'status' => true,
		]);
	}

	public function approve_app_id_status()
	{
		$app_id = $this->input->post('app_id');
		$approve_amount = $this->input->post('approve_amount');
		$interest = $this->input->post('interest');
		$tenure = $this->input->post('tenure');
		$conditions = $this->input->post('conditions');
		$charge_id = $this->input->post('charge_id');

		// sending amount to user through stripe
		$app_detail = $this->Admin_model->get_result_row('applications', 'app_no', $app_id, 'submission_date');
		$user = $this->Admin_model->get_result_row('user', 'uid', $app_detail->user_id, 'created');
		// transfering funds to users
		if ($charge_id) {
			$transfer =  $this->stripe->transfers->create([
				'amount' => $approve_amount * 100,
				"currency" => "usd",
				"destination" => $user->stripe_connect_id,
				'source_transaction' => $charge_id,
			]);
		} else {
			$transfer =  $this->stripe->transfers->create([
				'amount' => $approve_amount * 100,
				"currency" => "usd",
				"destination" => $user->stripe_connect_id,
			]);
		}

		// $this->stripe->payouts->create(
		// 	[
		// 		'amount' => $approve_amount * 100,
		// 		'currency' => 'usd',
		// 	],
		// 	['stripe_account' => $user->stripe_connect_id]
		// );

		// updating user status in db
		$this->Steps_model->approve_app_id_status($app_id, $approve_amount, $interest, $tenure, $conditions);
	}

	public function update_pending_doclist()
	{
		$app_id = $this->input->post('app_id');
		$pending_doclist = $this->input->post('pending_doclist');
		$this->Steps_model->update_pending_doclist($app_id, $pending_doclist);
	}


	public function logout()
	{
		session_destroy();
		redirect('/steps/signin');
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
		}

		$data['userdetail'] = $this->Admin_model->get_result_row('user', 'uid', $_SESSION['seflofinancial'], 'created');
		$data['app_no'] = $id;
		$this->load->view('userpanel/singleapplication', $data);
	}


	function edit_application($appid)
	{
		$data['data'] = $this->Admin_model->get_single_application($appid);
		$id = $data['data']['app_no'];

		if ($id) {
			$array = array(
				'business_app_no' => $id,
				'edit' => 1,
			);
			$this->session->set_userdata($array);
			redirect(base_url() . 'steps');
		}

		if ($data['data']['purpose'] == "Mortgage") {

			$array = array(
				'home_app_no' => $id,
				'edit' => 1,
			);
			$this->session->set_userdata($array);
			redirect(base_url() . 'steps/homeloan');
		}

		if ($data['data']['purpose'] == "Insurance") {

			$array = array(
				'insurance_app_no' => $id,
				'edit' => 1,
			);
			$this->session->set_userdata($array);
			redirect(base_url() . 'steps/insurance');
		}

		if ($data['data']['purpose'] == "Personal") {

			$array = array(
				'personal_app_no' => $id,
				'edit' => 1,
			);
			$this->session->set_userdata($array);
			redirect(base_url() . 'steps/personal');
		}


		if ($data['data']['purpose'] == "Commercial") {

			$array = array(
				'commercial_app_no' => $id,
				'edit' => 1,
			);
			$this->session->set_userdata($array);
			redirect(base_url() . 'steps/clHome');
		}
	}


	function send_email_user_signup($id)
	{ {

			$user = $this->Admin_model->get_result_row('user', 'uid', $id, 'created');
			$to = $user->email;
			$subject = "Seflo Financial Account Sign Up";

			$message = "Hi " . $user->name . ' ' . $user->lname . ",<br/><br/> Thank you for signing up. If you would like to have more information, please sign in to your account at anytime with your email. Thank you <br/>";

			$message = $message . "<p> Sincerely, <br/><br/>";
			$message = $message . " Customer Care <br/>";
			$message = $message . " Email: customercare@seflofinancial.com </p>";

			// Always set content-type when sending HTML email
			$headers = "MIME-Version: 1.0" . "\r\n";
			$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

			// More headers
			$headers .= 'From: <customercare@seflofinancial.com>' . "\r\n";

			$result = mail($to, $subject, $message, $headers);
		} {

			$to = "customercare@seflofinancial.com";

			$subject = "New User Sign UP";

			$message = "Hi," . "<br/><br/>We have a new Sign Up user. Please, send email in 24 hours to make sure the new user apply for a loan, review and process it as soon as possible. Thank you <br/><br/>";

			$message = $message . "<p> Sincerely, <br/><br/>";
			$message = $message . " Customer Care <br/>";
			$message = $message . " Email: customercare@Seflofinancial.com </p>";


			// Always set content-type when sending HTML email
			$headers = "MIME-Version: 1.0" . "\r\n";
			$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

			// More headers
			$headers .= 'From: <customercare@seflofinancial.com>' . "\r\n";

			$result = mail($to, $subject, $message, $headers);
		}
	}



	function send_email_user_application_status_update($app_id)
	{

		$app_detail = $this->Admin_model->get_result_row('applications', 'app_id', $app_id, 'submission_date');
		$user = $this->Admin_model->get_result_row('user', 'uid', $app_detail->user_id, 'created');
		$to = $user->email;

		$app_type = "";
		if ($app_detail->app_type == 1) {
			$app_type = "Personal Loan Application";
		} else if ($app_detail->app_type == 2) {
			$app_type = "Personal Loan Application";
		} else if ($app_detail->app_type == 3) {
			$app_type = "Personal Loan Application";
		} else if ($app_detail->app_type == 4) {
			$app_type = "Personal Loan Application";
		} else if ($app_detail->app_type == 5) {
			$app_type = "Personal Loan Application";
		}



		$app_status = "";
		if ($app_detail->app_status == 0) {
			$app_status = "Not Submitted";
		} else if ($app_detail->app_status == 1) {
			$app_status = "Pending";
		} else if ($app_detail->app_status == 2) {
			$app_status = "Document Recieved";
		} else if ($app_detail->app_status == 3) {
			$app_status = "File Submitted";
		} else if ($app_detail->app_status == 4) {
			$app_status = "Under Review";
		} else if ($app_detail->app_status == 5) {
			$app_status = "Accepted";
		} else if ($app_detail->app_status == 6) {
			$app_status = "Rejected";
		}



		$subject = "Seflo Financial Application Status Update";

		$message = "Hi, " . "<br/><br/> We have updated your loan application. Please, sign in to your account at anytime to know more about the status of your loan application. Thank you <br/><br/>";

		$message = $message . "<p> Sincerely, <br/><br/>";
		$message = $message . " Customer Care <br/>";
		$message = $message . " Email: customercare@seflofinancial.com </p>";


		// Always set content-type when sending HTML email
		$headers = "MIME-Version: 1.0" . "\r\n";
		$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

		// More headers
		$headers .= 'From: <customercare@seflofinancial.com>' . "\r\n";

		$result = mail($to, $subject, $message, $headers);
	}


	public function do_upload_doc()
	{
		$uri_appid = $_POST['app_oid'];

		// upload multiple files
		foreach ($_FILES as $key => $value) {
			$flag = false;
			$images = array();
			$count = 0;
			$value = '';
			$config = array();
			$all_files = array();
			$files = $_FILES;
			if (!empty($_FILES[$key]['name'])) {
				$count = count($_FILES[$key]['name']);
				for ($i = 0; $i < $count; $i++) {
					$_FILES[$key]['name'] = $files[$key]['name'][$i];
					$_FILES[$key]['type'] = $files[$key]['type'][$i];
					$_FILES[$key]['tmp_name'] = $files[$key]['tmp_name'][$i];
					$_FILES[$key]['error'] = $files[$key]['error'][$i];
					$_FILES[$key]['size'] = $files[$key]['size'][$i];

					$config['file_name'] = $_FILES[$key]['name'];
					$config['upload_path'] = UPLOAD_PATH;
					$config['allowed_types'] = '*';
					$config['max_size'] = '20000';
					$config['remove_spaces'] = true;
					// $config['encrypt_name'] = TRUE;
					$config['max_width'] = '';
					$config['max_height'] = '';
					$this->load->library('upload', $config);
					$this->upload->initialize($config);
					if ($this->upload->do_upload($key)) {
						//$data=array('upload_data' => $this->upload->data());
						$fileName = $_FILES[$key]['name'];
						$images[] = $fileName;
						$flag = true;
						if ($flag != false) {
							$data = array(
								'file_path' => $fileName,
								'app_id' => $_POST['app_id'],
								'status' => $_POST['status'],
								'created_on' => time()
							);
							$result = $this->Admin_model->insert_data('app_doc_file', $data);
						}
					} else {
						$data['error'] = $this->upload->display_errors();
						$flag = false;
					}
				}
				// $value = implode(',', $images);

				if ($flag != false) {
					//Status changed from pending to Document Received
					$changed_status = $this->update_app_id_status($_POST['app_id'], 2);
					$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Document(s) inserted successfully.</div>');
				} else {
					$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Unable to insert document!</div>');
				}
			}



			if (!empty($uri_appid)) {
				redirect('steps/view_application/' . $uri_appid, 'refresh');
			} else {
				redirect('steps/dashboard', 'refresh');
			}
		}





		/* SIngle file upload
	    $target_dir = UPLOAD_PATH;
	    $file=time().basename($_FILES["files"]["name"]);
       $target_file = $target_dir.$file;
       
        $res=move_uploaded_file($_FILES["files"]["tmp_name"], $target_file);
        if($res){
            $data=array(
                'file_path'=> $file,
                'app_id'=>$_POST['app_id'],
                  'status'=>$_POST['status'],
                  'created_on'=>time()
                );
        $result = $this->Admin_model->insert_data('app_doc_file',$data);
            	if($result!=false){
            		//Status changed from pending to Document Received
            	$changed_status = $this->update_app_id_status($_POST['app_id'],2);
		        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Document inserted successfully.</div>');
		     }else{
			    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Unable to insert document!</div>');

		}
		if(!empty($uri_appid)){
		    redirect('steps/view_application/'.$uri_appid,'refresh');
		}else{
			redirect('steps/dashboard','refresh');
            
        }
		} */
	}
	public function stripesuccess()
	{

		require_once('application/libraries/vendor/autoload.php');
		$stripe = new \Stripe\StripeClient($this->stripe_sk);
	}
	public function stripefailure()
	{
	}
	public function verification()
	{
		if (!$_SESSION['seflofinancial']) {
			redirect('/steps/signin', 'refresh');
		}
		$redirect = $_GET['redirect'];
		// $customer_id = '123';
		// var_dump();
		// die;
		try {
			require_once('application/libraries/vendor/autoload.php');
			$stripe = new \Stripe\StripeClient($this->stripe_sk);
			$user = $this->Admin_model->get_result_row('user', 'uid', $_SESSION['seflofinancial'], 'created');

			if ($user->stripe_customer_id) {
				$customer_id = $user->stripe_customer_id;
			} else {
				$customer = $stripe->customers->create([
					'description' => 'Creation of Stripe Customer Object by Seflo Financial',
				]);
				$customer_id = $customer->id;
			}

			$session = $stripe->checkout->sessions->create(
				[
					'mode' => 'setup',
					'payment_method_types' => ['us_bank_account'],
					'payment_method_options' => [
						'us_bank_account' => [
							'financial_connections' => ['permissions' => ['payment_method']],
						],
					],
					'customer' => $customer_id,
					// 'success_url' => 'https://www.seflofinancial.com/admin/steps/profilesetting?status=success&cid=' . $customer_id . '&session_id={CHECKOUT_SESSION_ID}',
					// 'cancel_url' => 'https://www.seflofinancial.com/admin/steps/profilesetting?status=failure',
					'success_url' => base_url('/steps/profilesetting?status=success&cid=' . $customer_id . '&session_id={CHECKOUT_SESSION_ID}&redirect=' . $redirect),
					'cancel_url' => base_url('/steps/profilesetting?status=failure'),
				]
			);
		} catch (Exception $e) {
			print_r($e);
		}
		$data['session_id'] = $session->id;
		$data['stripe_pk'] = $this->stripe_pk;
		$this->load->view('userpanel/verification', $data);
	}

	public function profilesetting()
	{
		//echo '<pre>'; print_r($data); echo '</pre>';

		//$customer_id.'&session_id
		if (isset($_GET['cid']) and $_GET['cid'] != '' and isset($_GET['session_id']) and $_GET['session_id'] != '') {
			require_once('application/libraries/vendor/autoload.php');
			$stripe = new \Stripe\StripeClient($this->stripe_sk);
			$customer = $stripe->customers->retrieve($_GET['cid'], []);

			$session = $stripe->checkout->sessions->retrieve(
				$_GET['session_id'],
				[]
			);

			$setup_intent = $stripe->setupIntents->retrieve(
				$session->setup_intent,
				[]
			);
			$payment_method  = $stripe->paymentMethods->retrieve($setup_intent->payment_method, []);

			//$fca_id = $payment_method?->us_bank_account?->financial_connections_account;
			//echo '<pre>'; print_r($payment_method); echo '</pre>';
			//echo '<pre>'; print_r($data['userdetail']); echo '</pre>';
			$bank_details = array('bank_name' => $payment_method->us_bank_account->bank_name, 'last4' => $payment_method->us_bank_account->last4, 'routing_number' => $payment_method->us_bank_account->routing_number);
			$this->Admin_model->savebank($bank_details);
			if ($_GET['redirect']) {
				redirect('/steps', 'refresh');
			}
		}
		$data['userdetail'] = $this->Admin_model->get_result_row('user', 'uid', $_SESSION['seflofinancial'], 'created');
		$data['details'] = $this->Steps_model->get_user();


		//echo '<pre>'; print_r($data); echo '</pre>';exit;


		$this->load->view('userpanel/Profile', $data);
	}


	public function update_profile()
	{
		$data = $this->Steps_model->saveprofile();
		if ($data != false) {
			$out = array('status' => 'success', 'message' => 'Updated successfully');
		} else {
			$out = array('status' => 'error', 'message' => 'Something went wrong!');
		}
		echo json_encode($out);
	}

	public function forgot_pwd()
	{
		$email = $_POST['email'];
		//echo  "email".$email; die;
		if (!empty($email)) {
			$data = $this->send_email_user_forgot($email);
			if ($data != false) {
				$out = array('status' => 'success', 'message' => 'Success');
			} else {
				$out = array('status' => 'error', 'message' => 'Email is not registered with us!');
			}
		} else {
			$out = array('status' => 'error', 'message' => 'Email is required!');
		}
		echo json_encode($out);
	}

	function send_email_user_forgot($email)
	{

		$user = $this->Admin_model->get_result_row('user', 'email', $email, 'created');
		if ($user) {
			$to = $email;

			$subject = "Seflo Financial Reset Password";

			$message = "Kindly click on the link below to reset the password. Thank you <br/><br/>" . "https://www.seflofinancial.com/admin/steps/reset/" . $user->uid;

			$message = $message . "<p> <br/><br/> Sincerely, <br/><br/>";
			$message = $message . " Customer Care <br/>";
			$message = $message . " Email: customercare@seflofinancial.com </p>";

			// Always set content-type when sending HTML email
			$headers = "MIME-Version: 1.0" . "\r\n";
			$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

			// More headers
			$headers .= 'From: <customercare@seflofinancial.com>' . "\r\n";

			$result = mail($to, $subject, $message, $headers);
			return true;
		} else {
			return false;
		}
	}

	public function reset($uid)
	{
		if (!empty($uid)) {
			$auth_details = $this->Admin_model->get_result_row('user', 'uid', $uid, 'created');
			if ($auth_details) {
				$array = array(
					'seflofinancial' => $auth_details->uid,
					'email' => $auth_details->email,
					'username' => $auth_details->name,
					'userlastname' => $auth_details->lname,
					'usermobile' => $auth_details->mobile,
				);
				$this->session->set_userdata($array);
				// echo '<pre>'; print_r($_SESSION['seflofinancial']);
			}
		}

		$this->load->view('steps/reset', $data);
	}

	public function reset_pwd()
	{

		$data = $this->Steps_model->savepwd();
		if ($data != false) {
			$out = array('status' => 'success', 'message' => 'Updated successfully');
		} else {
			$out = array('status' => 'error', 'message' => 'Something went wrong!');
		}
		echo json_encode($out);
	}
}
