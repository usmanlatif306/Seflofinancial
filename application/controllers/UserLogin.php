<?php
error_reporting(0);
defined('BASEPATH') OR exit('No direct script access allowed');

class UserLogin extends CI_Controller {
    public $userSession = "";
    public function __construct(){
        parent::__construct();
        $this->userSession = $this->session->userdata;
        $userSession = $this->session->userdata('seflofinancial');
        /*if(!empty($this->session->userdata('seflofinancial'))){
            redirect(base_url('User'));
        } */     
    }

    /* Process Admin Login Request if Request Comes else load login view */
    public function index(){
       // echo '<pre>'; print_r($_POST); echo '</pre>';die;
        $user_data = $this->input->post();
        if(isset($user_data) && !empty($user_data)){

            /* Set Validation Rules */
            $this->form_validation->set_rules('email', 'Enter Email', 'required',array('required'=>'Enter Email'));
            $this->form_validation->set_rules('password', 'Enter Password', 'required',array('required'=>'Enter Password'));
            /* Set Error Messages */
            $this->form_validation->set_error_delimiters('<div class="validate_error">', '</div>');        
            /* Validating Inputs */
            if ($this->form_validation->run() == FALSE){
                $this->load->view('steps/login');
            }else{

                $auth = "SELECT uid,email,password,name,lname,mobile FROM user WHERE email = ?"; 
               // echo $this->db->last_query();
                $auth_details = $this->db->query($auth, array($user_data['email']))->row();
                if(isset($auth_details)){   
                    if($user_data['password'] == $auth_details->password){
                        $array = array(
                            'seflofinancial' => $auth_details->uid,
                            'email'=>$_POST['email'],
                            'username' => $auth_details->name,
                            'userlastname' => $auth_details->lname,
                            'usermobile' => $auth_details->mobile,
                        ); 
                        $this->session->set_userdata($array);
                        redirect(base_url('steps/dashboard'));                       
                    }
                    else{
                        
                        $this->session->set_flashdata('error', 'Incorrect Password');
                        $this->load->view('steps/login');             
                    }
                }
                else{
                    $this->session->set_flashdata('error', 'Email Does Not Exists');
                    $this->load->view('steps/login');       
                }         
            }    
        }
        else{
            $this->load->view('steps/login'); 
        }
    }    
}