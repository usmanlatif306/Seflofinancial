<?php
error_reporting(0);

defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
    public $userSession = "";
    public function __construct(){
        parent::__construct();
        $this->userSession = $this->session->userdata;
        $userSession = $this->session->userdata('seflofinancial');
        /*if(!empty($this->session->userdata('seflofinancial'))){
            redirect(base_url('Admin'));
        } */     
    }

    /* Process Admin Login Request if Request Comes else load login view */
    public function index(){
        $user_data = $this->input->post();
        if(isset($user_data) && !empty($user_data)){

            /* Set Validation Rules */
            $this->form_validation->set_rules('username', 'Enter UserName', 'required',array('required'=>'Enter UserName'));
            $this->form_validation->set_rules('password', 'Enter Password', 'required',array('required'=>'Enter Password'));
            /* Set Error Messages */
            $this->form_validation->set_error_delimiters('<div class="validate_error">', '</div>');        
            /* Validating Inputs */
            if ($this->form_validation->run() == FALSE){
                $this->load->view('admin/signin');
            }else{

                $auth = "SELECT id,username,password,firstname FROM admin WHERE username = ?"; 
                $auth_details = $this->db->query($auth, array($user_data['username']))->row();
                if(isset($auth_details)){   
                   // if(password_verify($user_data['password'], $auth_details->password)){
                    if($user_data['password']==$auth_details->password){
                        $array = array(
                            'seflofinancial' => $auth_details->id,
                            'fname'=>$auth_details->firstname
                        ); 
                        $this->session->set_userdata($array);
                        redirect(base_url('Admin'));                       
                    }
                    else{
                        
                        $this->session->set_flashdata('error', 'Incorrect Password');
                        $this->load->view('admin/signin');             
                    }
                }
                else{
                    $this->session->set_flashdata('error', 'UserName Does Not Exists');
                    $this->load->view('admin/signin');       
                }         
            }    
        }
        else{
            $this->load->view('admin/signin'); 
        }
    }    
}