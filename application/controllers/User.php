<?php
error_reporting(0);
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	function __construct()
    {
        parent::__construct();
       
        $this->load->model('User_model');
        $this->userSession = $this->session->userdata;
        $userSession = $this->session->userdata('seflofinancial');
       /* if(empty($this->session->userdata('seflofinancial'))){
            redirect(base_url('User'));
        }*/
    }


	public function login()
	{
		$this->load->view('user/signin');
	}

	public function index(){
		//$data['counts']=$this->Admin_model->totalcounts();
		//echo '<pre>'; print_r($data);echo '</pre>';
		//$this->load->view('admin/index',$data);
		$this->load->view('user/index');
	
	}

	public function logout(){
		$this->load->helper('cookie');
		$this->session->sess_destroy();
		delete_cookie('seflofinancial');
		redirect(base_url().'User/login');	
		exit;
	}

	public function edit_profile(){
		/*$data['detail']=$this->Admin_model->get_admin();
		$this->load->view('admin/edit_profile',$data);*/
	}

	public function forget_password(){
		//$this->load->view('admin/forget_password');
	}

	public function update_profile($id){
	/*	if(!empty($_FILES['img']['name'])){
			$config['upload_path'] = 'uploads/admin';
			$config['allowed_types'] = 'jpg|jpeg|png|gif|mp4';
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
		}
		$data=array(
			'username'=>$this->input->post('username'),
			'profile_pic'=>$picture
			
		);
		
		$this->db->where('id',$id);
		$this->db->update('admin',$data);
		  $this->session->set_flashdata('success', 'Updated successfully');
		  redirect(base_url().'Admin/edit_profile');*/


	}
	
		public function change_pass(){
		//$this->load->view('admin/change_password');
	}
		public function change_password(){
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
}
