<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	public function index()
	{
		$this->load->view('index');
	}

	public function about()
	{
		$this->load->view('about');
	}
	
	public function how_it_work()
	{
		$this->load->view('how-it-work');
	}
	public function contact()
	{
		$this->load->view('contact');
	}
	
	
	public function send_email(){
	  
$to = CONTACT_EMAIL.','.$_POST['emailaddress'];
$subject = "Seflo Financial contact request";

$message = "
<html>

<body>
<p>User Information</p>
<table>
<tr>
<th>Name : </th>
<td>".$_POST['name']."</td>
</tr>

<tr>
<th>Email : </th>
<td>".$_POST['emailaddress']."</td>
</tr>

<tr>
<th>Phone</th>
<td>".$_POST['phonenumber']."</td>
</tr>

<tr>
<th>Message</th>
<td>".$_POST['message']."</td>
</tr>

</table>
</body>
</html>
";

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: <customercare@seflofinancial.com>' . "\r\n";

echo mail($to,$subject,$message,$headers);

	}
	
	public function line_of_credit()
	{
		$this->load->view('line-of-credit');
	}
	public function sba_loans()
	{
		$this->load->view('sba-loans');
	}
	public function short_term_loans()
	{
		$this->load->view('short-term-loans');
	}
	public function term_loans()
	{
		$this->load->view('term-loans');
	}
	public function cash_advance()
	{
		$this->load->view('cash-advance');
	}
	public function business_credit_cards()
	{
		$this->load->view('business-credit-cards');
	}
	public function equipment_financing()
	{
		$this->load->view('equipment-financing');
	}
	public function commercial_real_estate()
	{
		$this->load->view('commercial-real-estate');
	}
	public function accounts_receivable_financing()
	{
		$this->load->view('accounts-receivable-financing');
	}
	public function startup_loans()
	{
		$this->load->view('startup-loans');
	}
	public function acquisition_loan()
	{
		$this->load->view('acquisition-loan');
	}
	
		public function login()
	{
		$this->load->view('login');
	}
		public function register()
	{
		$this->load->view('signup');
	}



	public function auto_home_insurance()
	{
		$this->load->view('auto-home-insurance');
	}
	public function home_loan()
	{
		$this->load->view('home-loan');	
	}
	public function life_insurance()
	{
		$this->load->view('life-insurance');
	}
	public function travel_insurance()
	{
		$this->load->view('travel-insurance');
	}
	public function visitor_insurance()
	{
		$this->load->view('visitor-insurance');
	}
	public function super_visa_insurance()
	{
		$this->load->view('super-visa-insurance');
	}
	public function business_insurance()
	{
		$this->load->view('business-insurance');
	}
	public function commercial_insurance()
	{
		$this->load->view('commercial-insurance');
	}
	public function trucking_insurance()
	{
		$this->load->view('trucking-insurance');
	}
	public function resp()
	{
		$this->load->view('resp');
	}
	public function personal_loan($value='')
	{
		$this->load->view('personal_loan');
	}
	public function rrsp()
	{
		$this->load->view('rrsp');
	}
	public function segregated_funds()
	{
		$this->load->view('segregated-funds');
	}
	public function work_capt()
	{
		$this->load->view('work-capt');
	}
	public function lenders()
	{
		$this->load->view('lenders');
	}
	public function merchant_cash()
	{
		$this->load->view('merchant_cash');	
	}
	public function invoice_factoring()
	{
		$this->load->view('invoice_factoring');
	}
	public function commercial_veichle()
	{
		$this->load->view('commercial_vehicle');
	}
}
