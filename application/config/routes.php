<?php
defined('BASEPATH') or exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'Steps';

// stripe conenct routes
$route['steps/stripe/redirect'] = 'Stripe/redirectToStripe';
$route['steps/stripe/connect/(:any)'] = 'Stripe/saveStripeAccount/$1';
$route['steps/stripe/pay_loan'] = 'Stripe/payLoan';
$route['steps/stripe/pay_loan/success'] = 'Stripe/payLoanSuccess';
$route['steps/stripe/pay_loan/cancel'] = 'Stripe/payLoanCancel';
$route['steps/stripe/pay_off_loan'] = 'Stripe/payOffLoan';


$route['^(about|how_it_work|contact|credit_cards|line_of_credit|sba_loans|short_term_loans|term_loans|cash_advance|business_credit_cards|equipment_financing|accounts_receivable_financing|startup_loans|acquisition_loan|register|personal_loan|work_capt|merchant_cash|invoice_factoring|commercial_veichle|lenders|equipment-financing)(/:any)?$'] = "Welcome/$0"; //login
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
