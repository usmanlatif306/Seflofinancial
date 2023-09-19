<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Steps_model extends CI_Model
{

  public function __construct()
  {
    parent::__construct();
  }

  //get single question by id
  public function get_single_question($qid, $table)
  {
    $this->db->select('question');
    $this->db->from($table);
    $this->db->where('question_id', $qid);
    $this->db->order_by("question_id", "asc");
    $query = $this->db->get();
    if ($query->num_rows() > 0) {
      $row = $query->row()->question;
      return $row;
    }
  }


  //get questions by id
  function get_questions($qvalue)
  {
    $this->db->select('*');
    $this->db->from('questions');
    $this->db->where('question_value', $qvalue);
    $this->db->order_by("question_id", "asc");
    $query = $this->db->get();
    if ($query->num_rows() > 0) {
      $row = $query->result_array();
      return $row;
    }
  }

  public function get_clquestions($qvalue)
  {
    $this->db->select('*');
    $this->db->from('cl_questions');
    $this->db->where('question_value', $qvalue);
    $this->db->order_by("question_id", "asc");
    $query = $this->db->get();
    if ($query->num_rows() > 0) {
      $row = $query->result_array();
      return $row;
    }
  }

  public function get_homeloanquestions($qvalue)
  {
    $this->db->select('*');
    $this->db->from('homeloan_questions');
    $this->db->where('question_value', $qvalue);
    $this->db->order_by("question_id", "asc");
    $query = $this->db->get();
    return ($query->num_rows() > 0) ? $query->result_array() : NULL;
  }

  public function get_plquestions($qvalue)
  {
    $this->db->select('*');
    $this->db->from('pl_questions');
    $this->db->where('question_value', $qvalue);
    $this->db->order_by("question_id", "asc");
    $query = $this->db->get();
    return ($query->num_rows() > 0) ? $query->result_array() : NULL;
  }

  public function get_insurancequestions($qvalue)
  {
    $this->db->select('*');
    $this->db->from('insurance_questions');
    $this->db->where('question_value', $qvalue);
    $this->db->order_by("question_id", "asc");
    $query = $this->db->get();
    return ($query->num_rows() > 0) ? $query->result_array() : NULL;
  }

  //get all questions
  function get_all_questions()
  {
    $this->db->select('*');
    $this->db->order_by("question_id", "asc");
    $query = $this->db->get('questions');
    if ($query->num_rows() > 0) {
      $row = $query->result_array();
      return $row;
    }
  }

  public function getSavedAnswer($questionValue = null)
  {
    $app_no = $this->session->userdata('app_no');

    if (isset($app_no)) :
      $where = array('que.question_value' => $questionValue, 'ans.app_id' => $app_no);
      $this->db->select('ans.answer_id,ans.question_id,ans.answer');
      $this->db->from('answers as ans');
      $this->db->join('questions as que', 'que.question_id = ans.question_id', 'left');
      $this->db->where($where);
      $query = $this->db->get();
      $result = array();
      if ($query->num_rows() > 0) :
        foreach ($query->result_array() as $value) :
          $result[$value['question_id']] = $value;
        endforeach;
        return $result;
      else : NULL;
      endif;
    //return ($query->num_rows() >0)?$query->result_array():NULL;
    else : return NULL;
    endif;
  }

  public function getClSavedAnswer($questionValue = null)
  {
    $app_no = $this->session->userdata('app_no');

    if (isset($app_no)) :
      $where = array('que.question_value' => $questionValue, 'ans.app_id' => $app_no);
      $this->db->select('ans.answer_id,ans.question_id,ans.answer');
      $this->db->from('cl_answers as ans');
      $this->db->join('cl_questions as que', 'que.question_id = ans.question_id', 'left');
      $this->db->where($where);
      $query = $this->db->get();
      $result = array();
      if ($query->num_rows() > 0) :
        foreach ($query->result_array() as $value) :
          $result[$value['question_id']] = $value;
        endforeach;
        return $result;
      else : NULL;
      endif;
    //return ($query->num_rows() >0)?$query->result_array():NULL;
    else : return NULL;
    endif;
  }

  public function getHLSavedAnswer($questionValue = null)
  {
    $app_no = $this->session->userdata('app_no');

    if (isset($app_no)) :
      $where = array('que.question_value' => $questionValue, 'ans.app_id' => $app_no);
      $this->db->select('ans.answer_id,ans.question_id,ans.answer');
      $this->db->from('homeloan_answers as ans');
      $this->db->join('homeloan_questions as que', 'que.question_id = ans.question_id', 'left');
      $this->db->where($where);
      $query = $this->db->get();
      $result = array();
      if ($query->num_rows() > 0) :
        foreach ($query->result_array() as $value) :
          $result[$value['question_id']] = $value;
        endforeach;
        return $result;
      else : NULL;
      endif;
    else : return NULL;
    endif;
  }

  public function getSavedQuesId($questionValue, $app_no)
  {
    $where = array('que.question_value' => $questionValue, 'ans.app_id' => $app_no);
    $this->db->select('ans.question_id');
    $this->db->from('answers as ans');
    $this->db->join('questions as que', 'que.question_id = ans.question_id', 'left');
    $this->db->where($where);
    $query = $this->db->get();
    $result = array();
    if ($query->num_rows() > 0) :
      foreach ($query->result_array() as $value)
        array_push($result, $value['question_id']);
      return $result;
    else : NULL;
    endif;
  }


  public function getSavedQuesId_commercial($questionValue, $app_no)
  {
    $where = array('que.question_value' => $questionValue, 'ans.app_id' => $app_no);
    $this->db->select('ans.question_id');
    $this->db->from('cl_answers as ans');
    $this->db->join('cl_questions as que', 'que.question_id = ans.question_id', 'left');
    $this->db->where($where);
    $query = $this->db->get();
    $result = array();
    if ($query->num_rows() > 0) :
      foreach ($query->result_array() as $value)
        array_push($result, $value['question_id']);
      return $result;
    else : NULL;
    endif;
  }

  public function getSavedQuesId_insurance($questionValue, $app_no)
  {
    $where = array('que.question_value' => $questionValue, 'ans.app_id' => $app_no);
    $this->db->select('ans.question_id');
    $this->db->from('insurance_answers as ans');
    $this->db->join('insurance_questions as que', 'que.question_id = ans.question_id', 'left');
    $this->db->where($where);
    $query = $this->db->get();
    $result = array();
    if ($query->num_rows() > 0) :
      foreach ($query->result_array() as $value)
        array_push($result, $value['question_id']);
      return $result;
    else : NULL;
    endif;
  }

  public function getSavedQuesId_personal($questionValue, $app_no)
  {

    $where = array('que.question_value' => $questionValue, 'ans.app_id' => $app_no);
    $this->db->select('ans.question_id');
    $this->db->from('pl_answers as ans');
    $this->db->join('pl_questions as que', 'que.question_id = ans.question_id', 'left');
    $this->db->where($where);
    $query = $this->db->get();
    $result = array();
    if ($query->num_rows() > 0) :
      foreach ($query->result_array() as $value)
        array_push($result, $value['question_id']);
      return $result;
    else : NULL;
    endif;
  }

  public function getSavedQuesId_homeloan()
  {
    $where = array('que.question_value' => $questionValue, 'ans.app_id' => $app_no);
    $this->db->select('ans.question_id');
    $this->db->from('homeloan_answers as ans');
    $this->db->join('homeloan_questions as que', 'que.question_id = ans.question_id', 'left');
    $this->db->where($where);
    $query = $this->db->get();
    $result = array();
    if ($query->num_rows() > 0) :
      foreach ($query->result_array() as $value)
        array_push($result, $value['question_id']);
      return $result;
    else : NULL;
    endif;
  }

  //add step1 business form
  function addstep1()
  {
    parse_str($_POST['form'], $searcharray);
    //echo '<pre>'; print_r($searcharray); echo '</pre>'; die;

    if ($searcharray) {
      $savedQuesId = '';
      $appno = $this->session->userdata('business_app_no');
      if (!empty($appno)) :
        $savedQuesId = $this->getSavedQuesId(1, $appno);
      else :
        $appno = $this->getappno();
        $uid = $this->session->userdata('seflofinancial') ? $this->session->userdata('seflofinancial') : 1;
        $this->db->insert('applications', array('user_id' => $uid, 'app_no' => $appno, 'app_type' => 1, 'app_status' => 1));
        $new_data = array('business_app_no' => $appno, 'user_id' => $uid);
        $this->session->set_userdata($new_data);
      endif;



      foreach ($searcharray as $key => $value) {

        if ($key != 'next') {
          if (!empty($savedQuesId)) {
            $con = array('question_id' => $key, 'app_id' => $appno);
            $this->db->where($con)->update('answers', array('answer' => $value));
          } else {
            if (empty($_SESSION['email'])) {
              $row = $this->db->select('uid')->where('email', $searcharray['7'])->limit(1)->get('user')->row();
              $id = $row->uid;
              if (empty($row)) {
                $data = array(
                  'name' => $searcharray['3'],
                  'lname' => $searcharray['4'],
                  'mobile' => $searcharray['8'],
                  'email' =>  $searcharray['7'],
                  'password' => '123456',
                  'address' =>  $searcharray['10'],
                  'city' =>  $searcharray['11'],
                  'state' =>  $searcharray['12'],
                  'zipcode' =>  $searcharray['13'],
                );
                $this->db->insert('user', $data);
                $id = $this->db->insert_id();
                $this->send_email_user_signup($id);
              }

              $array = array(
                'seflofinancial' => $id,
                'email' => $searcharray['7'],
                'username' => $searcharray['3'],
                'userlastname' => $searcharray['4'],
                'usermobile' => $searcharray['8'],
              );
              $this->session->set_userdata($array);

              $app_no = $this->session->userdata('business_app_no');
              $con = array('app_no' => $app_no);
              $this->db->where($con)->update('applications', array('user_id' => $id));
            }
            $this->db->insert('answers', array('question_id' => $key, 'answer' => $value, 'app_id' => $appno));
          }
        }
      }

      //FILES
      /*  if(!empty($target_file)){
      //  $this->db->insert('answers',array('question_id'=>34,'answer'=>$target_file,'app_id'=>$appno));
         $data=array(
                'file_path'=> $target_file,
                'app_id'=>$appno,
                  'status'=>3,
                  'created_on'=>time()
                );
        $result = $this->Admin_model->insert_data('app_doc_file',$data);
    } */

      return ($this->db->affected_rows() != 1) ? true : true;
    } else {
      return false;
    }
  }

  public function addClHome()
  {
    if ($this->input->post()) {
      $savedQuesId = '';
      $appno = $this->session->userdata('commercial_app_no');
      if (isset($appno)) :
        $savedQuesId = $this->getSavedQuesId_commercial(1, $appno);
      else :
        $appno = $this->getappno();
        $this->db->insert('applications', array('user_id' => 1, 'app_no' => $appno, 'app_type' => 4, 'app_status' => 0));
        $new_data = array('commercial_app_no' => $appno, 'user_id' => 1);
        $this->session->set_userdata($new_data);
      endif;

      foreach ($this->input->post() as $key => $value) {
        if ($key == 4) {
          if ($value == 'other_show')
            $value = '';
        }
        //multiple values to string
        if ($key == '9[]') {
          $key = 9;
          $value = implode(',', $value);
        }
        if ($key == '10[]') {
          $key = 10;
          $value = implode(',', $value);
        }
        //replacing question id 
        if ($key == 'step8') {
          $key = 12;
        }
        //replacing question id  and value
        if ($key == 'step8-a') {
          $key = 13;
          if ($value == 'step_me')
            $value = 'Just me';
          else
            $value = 'I and my client';
        }
        if (!empty($savedQuesId)) {

          $con = array('question_id' => $key, 'app_id' => $appno);
          $this->db->where($con)->update('cl_answers', array('answer' => $value));
        } else {
          $this->db->insert('cl_answers', array('question_id' => $key, 'answer' => $value, 'app_id' => $appno));
        }
      }


      return true;
    } else {
      return false;
    }
  }

  //add step2 business form

  function addstep2()
  {

    $row = $this->db->select('uid')->where('email', $_POST['22'])->limit(1)->get('user')->row();
    $id = $row->uid;
    if (empty($row)) {
      $data = array(
        'name' => $_POST['20'],
        'lname' => $_POST['21'],
        'mobile' => $_POST['23'],
        'email' =>  $_POST['22'],
        'password' => $_POST['24']
      );
      $this->db->insert('user', $data);
      $id = $this->db->insert_id();
      $this->send_email_user_signup($id);
    }

    $array = array(
      'seflofinancial' => $id,
      'email' => $_POST['22'],
    );
    $this->session->set_userdata($array);

    $app_no = $this->session->userdata('business_app_no');
    $con = array('app_no' => $app_no);
    $this->db->where($con)->update('applications', array('user_id' => $id));

    if ($this->input->post() && isset($app_no)) {
      $savedQuesId = $this->getSavedQuesId(2, $app_no);

      foreach ($this->input->post() as $key => $value) {
        if (!empty($savedQuesId)) {
          $con = array('question_id' => $key, 'app_id' => $app_no);
          $this->db->where($con)->update('answers', array('answer' => $value));
        } else {
          $this->db->insert('answers', array('question_id' => $key, 'answer' => $value, 'app_id' => $app_no));
        }
      }
      return ($this->db->affected_rows() != 1) ? true : true;
    } else {
      return false;
    }
  }

  public function addClOwner()
  {

    $row = $this->db->select('uid')->where('email', $_POST['22'])->limit(1)->get('user')->row();
    $id = $row->uid;
    if (empty($row)) {
      $data = array(
        'name' => $_POST['20'],
        'lname' => $_POST['21'],
        'mobile' => $_POST['23'],
        'email' =>  $_POST['22'],
        'password' => $_POST['24']
      );
      $this->db->insert('user', $data);
      $id = $this->db->insert_id();
      $this->send_email_user_signup($id);
    }

    $array = array(
      'seflofinancial' => $id,
      'email' => $_POST['22'],
    );
    $this->session->set_userdata($array);


    $app_no = $this->session->userdata('commercial_app_no');

    $con = array('app_no' => $app_no);
    $this->db->where($con)->update('applications', array('user_id' => $id));

    if ($this->input->post() && isset($app_no)) {
      $savedQuesId = $this->getSavedQuesId_commercial(2, $app_no);

      foreach ($this->input->post() as $key => $value) {
        if (!empty($savedQuesId)) {
          $con = array('question_id' => $key, 'app_id' => $app_no);
          $this->db->where($con)->update('cl_answers', array('answer' => $value));
        } else {
          $this->db->insert('cl_answers', array('question_id' => $key, 'answer' => $value, 'app_id' => $app_no));
        }
      }
      return ($this->db->affected_rows() != 1) ? true : true;
    } else {
      return false;
    }
  }

  //add step3 business form

  function addstep3()
  {
    $app_no = $this->session->userdata('business_app_no');
    if ($this->input->post() && isset($app_no)) {
      $savedQuesId = $this->getSavedQuesId(3, $app_no);

      foreach ($this->input->post() as $key => $value) {
        if ($key == '27[]') {
          $key = 27;
          $value = implode(',', $value);
        } else if ($key == '36' || $key == '37') {
          $value = str_replace("_", " ", $value);
        } else {
          if (is_array($value))
            $value = implode(" ", $value);
        }
        /*if($key=='28[]'){
              $key = 28;
              $value = implode(',', $value); 
          }  */
        if (!empty($savedQuesId)) {
          $con = array('question_id' => $key, 'app_id' => $app_no);
          $this->db->where($con)->update('answers', array('answer' => $value));
        } else {
          $this->db->insert('answers', array('question_id' => $key, 'answer' => $value, 'app_id' => $app_no));
        }
      }
      return ($this->db->affected_rows() != 1) ? true : true;
    } else {
      return false;
    }
  }

  public function addClBusiness()
  {
    $app_no = $this->session->userdata('commercial_app_no');
    if ($this->input->post() && isset($app_no)) {
      $savedQuesId = $this->getSavedQuesId_commercial(3, $app_no);
      foreach ($this->input->post() as $key => $value) {
        if ($key == '27[]') {
          $key = 27;
          $value = implode(',', $value);
        } else if ($key == '36' || $key == '37') {
          $value = str_replace("_", " ", $value);
        } else {
          if (is_array($value))
            $value = implode(" ", $value);
        }
        /*if($key=='28[]'){
              $key = 28;
              $value = implode(',', $value); 
          }  */
        if (!empty($savedQuesId)) {
          $con = array('question_id' => $key, 'app_id' => $app_no);
          $this->db->where($con)->update('cl_answers', array('answer' => $value));
        } else {
          $this->db->insert('cl_answers', array('question_id' => $key, 'answer' => $value, 'app_id' => $app_no));
        }
      }
      return true;
    } else {
      return false;
    }
  }

  //add step4 business form

  function addstep4()
  {
    $app_no = $this->session->userdata('business_app_no');
    $gallery_array = array();
    $images = array();
    $count = 0;
    $value = '';
    if (!empty($_FILES) && isset($app_no)) {
      $savedQuesId = $this->getSavedQuesId(4, $app_no);
      $all_files = array();
      $files = $_FILES;
      // upload multiple files
      foreach ($_FILES as $key => $value) {
        $images = array();
        if (!empty($_FILES[$key]['name'])) {
          $count = count($_FILES[$key]['name']);
          for ($i = 0; $i < $count; $i++) {
            $_FILES[$key]['name'] = $files[$key]['name'][$i];
            $_FILES[$key]['type'] = $files[$key]['type'][$i];
            $_FILES[$key]['tmp_name'] = $files[$key]['tmp_name'][$i];
            $_FILES[$key]['error'] = $files[$key]['error'][$i];
            $_FILES[$key]['size'] = $files[$key]['size'][$i];

            $config['file_name'] = $_FILES[$key]['name'];
            $config['upload_path'] = './assets/steps/uploads/';
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
            } else {
              $data['error'] = $this->upload->display_errors();
              // print_r($data);
            }
          }
          $value = implode(',', $images);
        }

        //saving filenames in db
        if (!empty($savedQuesId)) {
          $con = array('question_id' => $key, 'app_id' => $app_no);
          $this->db->where($con)->update('answers', array('answer' => $value));
        } else {
          $this->db->insert('answers', array('question_id' => $key, 'answer' => $value, 'app_id' => $app_no));
        }
      }
      //saving other post fields in db
      foreach ($this->input->post() as $key1 => $value1) {
        if (!empty($savedQuesId)) {
          $con = array('question_id' => $key, 'app_id' => $app_no);
          $this->db->where($con)->update('answers', array('answer' => $value));
        } else {
          $this->db->insert('answers', array('question_id' => $key1, 'answer' => $value1, 'app_id' => $app_no));
        }
      }
      return true;
    } else {
      return false;
    }
  }

  function addClDocument()
  {
    $app_no = $this->session->userdata('commercial_app_no');
    $gallery_array = array();
    $images = array();
    $count = 0;
    $value = '';
    if (!empty($_FILES) && isset($app_no)) {
      $savedQuesId = $this->getSavedQuesId_commercial(4, $app_no);
      $all_files = array();
      $files = $_FILES;
      // upload multiple files
      foreach ($_FILES as $key => $value) {
        $images = array();
        if (!empty($_FILES[$key]['name'])) {
          $count = count($_FILES[$key]['name']);
          for ($i = 0; $i < $count; $i++) {
            $_FILES[$key]['name'] = $files[$key]['name'][$i];
            $_FILES[$key]['type'] = $files[$key]['type'][$i];
            $_FILES[$key]['tmp_name'] = $files[$key]['tmp_name'][$i];
            $_FILES[$key]['error'] = $files[$key]['error'][$i];
            $_FILES[$key]['size'] = $files[$key]['size'][$i];

            $config['file_name'] = $_FILES[$key]['name'];
            $config['upload_path'] = './assets/steps/uploads/';
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
            } else {
              $data['error'] = $this->upload->display_errors();
              // print_r($data);
            }
          }
          $value = implode(',', $images);
        }

        //saving filenames in db

        if (!empty($savedQuesId)) {
          $con = array('question_id' => $key, 'app_id' => $app_no);
          $this->db->where($con)->update('cl_answers', array('answer' => $value));
        } else {
          $this->db->insert('cl_answers', array('question_id' => $key, 'answer' => $value, 'app_id' => $app_no));
        }
      }
      //saving other post fields in db
      foreach ($this->input->post() as $key1 => $value1) {
        if (!empty($savedQuesId)) {
          $con = array('question_id' => $key, 'app_id' => $app_no);
          $this->db->where($con)->update('cl_answers', array('answer' => $value));
        } else {
          $this->db->insert('cl_answers', array('question_id' => $key1, 'answer' => $value1, 'app_id' => $app_no));
        }
      }
      return true;
    } else {
      return false;
    }
  }

  //get allanswers corresponding to all questions to display in submission form
  function get_all_answers()
  {
    $app_no = $this->session->userdata('app_no');
    $this->db->select('*');
    $this->db->order_by("answer_id", "asc");
    $this->db->where('app_id', $app_no);
    $this->db->order_by('answer_id', 'asc');
    //$this->db->order_by('question_id','asc');
    //user_id
    $query = $this->db->get('answers');
    if ($query->num_rows() > 0) {
      $row = $query->result_array();
      //echo '<pre>';
      //print_r($row); die;
      foreach ($row as $key => $value) {
        $output = array(
          'question' => $this->get_single_question($value['question_id'], 'questions'),
          'answer' => $value['answer']
        );
        $result[$value['question_id']] = $output;
      }
      //echo '<pre>'; print_r($result); echo '</pre>';
      return $result;
    }
  }

  public function get_all_clanswers()
  {
    $app_no = $this->session->userdata('app_no');
    $this->db->select('*');
    $this->db->order_by("answer_id", "asc");
    $this->db->where('app_id', $app_no);
    $this->db->order_by('answer_id', 'asc');
    $query = $this->db->get('cl_answers');

    if ($query->num_rows() > 0) {
      $row = $query->result_array();
      foreach ($row as $key => $value) {
        $output = array(
          'question' => $this->get_single_question($value['question_id'], 'cl_questions'),
          'answer' => $value['answer']
        );
        $result[$value['question_id']] = $output;
      }
      return $result;
    }
  }

  public function fetchValue($table, $field, $con)
  {
    $data = $this->db
      ->select($field)
      ->from($table)
      ->where($con)
      ->get();
    $result = $data->row();
    return ($data->num_rows() > 0) ? $result->$field : FALSE;
  }

  function getappno()
  {
    $q = $this->db->order_by('app_id', 'DESC')->get('applications')->row();
    if (!empty($q->app_no)) {
      //echo ($q->app_no+1);
      return ($q->app_no + 1);
    } else {
      //echo 1000;
      return 1000;
    }
  }

  /*function getappno_by_appid($appid)
{
  $q = $this->db->where('app_id',$appid)->get('applications')->row();
  if(!empty($q->app_no)){
    //echo ($q->app_no+1);
    return ($q->app_no+1);
  }else{
    //echo 1000;
    return 1000;
  }
}*/

  //add insurance form

  public function add_insurance()
  {
    if ($this->input->post()) {

      $row = $this->db->select('uid')->where('email', $_POST['4'])->limit(1)->get('user')->row();
      $id = $row->uid;
      if (empty($row)) {
        $data = array(
          'name' => $_POST['1'],
          'lname' => $_POST['2'],
          'mobile' => $_POST['5'],
          'email' =>  $_POST['4'],
          'password' => $_POST['6']
        );
        $this->db->insert('user', $data);
        $id = $this->db->insert_id();
        $this->send_email_user_signup($id);
      }

      $array = array(
        'seflofinancial' => $id,
        'email' => $_POST['4'],
      );
      $this->session->set_userdata($array);






      $savedQuesId = '';
      $appno = $this->session->userdata('insurance_app_no');
      if (isset($appno)) :
        $savedQuesId = $this->getSavedQuesId_insurance(1, $appno);

      else :
        $appno = $this->getappno();
        $this->db->insert('applications', array('user_id' => $id, 'app_no' => $appno, 'app_type' => 2, 'app_status' => 1));
        $new_data = array('app_no' => $appno, 'user_id' => 1);
        $this->session->set_userdata($new_data);
      endif;

      foreach ($this->input->post() as $key => $value) {
        if (is_array($value))
          $value = implode(" ", $value);

        if (!empty($savedQuesId)) {
          $con = array('question_id' => $key, 'app_id' => $appno);
          $this->db->where($con)->update('insurance_answers', array('answer' => $value));
        } else {
          $this->db->insert('insurance_answers', array('question_id' => $key, 'answer' => $value, 'app_id' => $appno));
        }
      }
      $this->send_email_user_application_status_update($appno);
      return true;
    } else {
      return false;
    }
  }

  //add_user
  function add_user()
  {
    //echo '<pre>'; print_r($data); echo '</pre>';

    $showerror = false;
    $data = array();
    foreach ($this->input->post() as $key => $value) {
      $data[$key] = $value;
      /*if($key!='business_name' && $value==''){
     $showerror=true;
    }else{
     $showerror=false;
    }*/
    }
    if ($showerror != true) {
      $q = $this->db->where('email', $data['email'])->get('user');
      if ($q->num_rows() <= 0) {
        $this->db->insert('user', $data);
        return ($this->db->affected_rows() != 1) ? false : true;
      } else {
        return 'email';
      }
    } else {
      return 'fill';
    }
  }

  function get_all_categories()
  {
    $this->db->select('*');
    $query = $this->db->get('industry_categories');
    if ($query->num_rows() > 0) {
      $row = $query->result_array();
      return $row;
    }
  }

  function get_subcategories_for_cat($cat_id)
  {
    $this->db->select('*');
    $this->db->where('cat_id', $cat_id);
    $query = $this->db->get('industry_subcategories');
    if ($query->num_rows() > 0) {
      $row = $query->result_array();
      return $row;
    }
  }

  public function update_app_id($app_id)
  {

    $data = array(
      'app_status' => 1,

    );

    $this->db->where('app_no', $app_id);
    $this->db->update('applications', $data);
  }


  public function update_app_id_status($app_id, $status)
  {

    $data = array(
      'app_status' => $status,

    );

    $this->db->where('app_no', $app_id);
    $this->db->update('applications', $data);
  }

  public function approve_app_id_status($app_id, $approve_amount, $interest, $tenure, $conditions)
  {
    $interest = $approve_amount * $tenure * ($interest / 100);
    $final_amount = $approve_amount + $interest;
    $data = array(
      'approve_amount' => $approve_amount,
      'interest' => $interest,
      'tenure' => $tenure,
      'conditions' => $conditions,
      'final_amount' => $final_amount,
    );

    $this->db->where('app_no', $app_id);
    $this->db->update('applications', $data);
  }


  public function update_pending_doclist($app_id, $pending_doclist)
  {
    $data = array(
      'pending_doclist' => $pending_doclist
    );

    $this->db->where('app_no', $app_id);
    $this->db->update('applications', $data);
  }

  //add step1 business form
  public function addHomeLoan()
  {
    if ($this->input->post()) {

      $row = $this->db->select('uid')->where('email', $_POST['21'])->limit(1)->get('user')->row();
      $id = $row->uid;

      if (empty($id)) {
        $data = array(
          'name' => $_POST['13'],
          'lname' => $_POST['14'],
          'mobile' => $_POST['19'],
          'email' =>  $_POST['21'],
          'password' => $_POST['22']
        );
        $this->db->insert('user', $data);
        $id = $this->db->insert_id();
        $this->send_email_user_signup($id);
      }

      $array = array(
        'seflofinancial' => $id,
        'email' => $_POST['22'],
      );
      $this->session->set_userdata($array);


      $savedQuesId = '';
      $appno = $this->session->userdata('home_app_no');
      if (isset($appno)) :
        $savedQuesId = $this->getSavedQuesId_homeloan(1, $appno);
      //$savedQuesId = '';
      else :
        $appno = $this->getappno();
        $this->db->insert('applications', array('user_id' => $id, 'app_no' => $appno, 'app_type' => 3, 'app_status' => 1));
        $new_data = array('app_no' => $appno, 'user_id' => 1);
        $this->session->set_userdata($new_data);
      endif;

      foreach ($this->input->post() as $key => $value) {
        if (is_array($value))
          $value = implode(" ", $value);

        if (!empty($savedQuesId)) {
          $con = array('question_id' => $key, 'app_id' => $appno);
          $this->db->where($con)->update('homeloan_answers', array('answer' => $value));
        } else {
          $this->db->insert('homeloan_answers', array('question_id' => $key, 'answer' => $value, 'app_id' => $appno));
        }
      }
      $this->send_email_user_application_status_update($appno);
      return true;
    } else {
      return false;
    }
  }

  public function addPersonal()
  {
    if ($this->input->post()) {


      $row = $this->db->select('uid')->where('email', $_POST['14'])->limit(1)->get('user')->row();
      $id = $row->uid;
      if (empty($id)) {
        $data = array(
          'name' => $_POST['6'],
          'lname' => $_POST['7'],
          'mobile' => $_POST['12'],
          'email' =>  $_POST['14'],
          'password' => $_POST['15']
        );
        $this->db->insert('user', $data);
        $id = $this->db->insert_id();
        $this->send_email_user_signup($id);
      }

      $array = array(
        'seflofinancial' => $id,
        'email' => $_POST['14'],
      );
      $this->session->set_userdata($array);


      $savedQuesId = '';
      $appno = $this->session->userdata('personal_app_no');
      if (isset($appno)) :
        $savedQuesId = $this->getSavedQuesId_personal(1, $appno);

      else :
        $appno = $this->getappno();
        $this->db->insert('applications', array('user_id' => $id, 'app_no' => $appno, 'app_type' => 5, 'app_status' => 1));
        $new_data = array('app_no' => $appno, 'user_id' => 1);
        $this->session->set_userdata($new_data);
      endif;

      foreach ($this->input->post() as $key => $value) {
        if (is_array($value))
          $value = implode(" ", $value);

        if (!empty($savedQuesId)) {
          $con = array('question_id' => $key, 'app_id' => $appno);
          $this->db->where($con)->update('pl_answers', array('answer' => $value));
        } else {
          $this->db->insert('pl_answers', array('question_id' => $key, 'answer' => $value, 'app_id' => $appno));
        }
      }
      $this->send_email_user_application_status_update($appno);
      return true;
    } else {
      return false;
    }
  }


  function get_saved_answer($table)
  {

    $app_no = $this->session->userdata('app_no');
    $this->db->select('*');
    $this->db->where('app_id', $app_no);
    $this->db->order_by('answer_id', 'asc');
    $query = $this->db->get($table);

    if ($query->num_rows() > 0) {
      $row = $query->result_array();
      foreach ($row as $key => $value) {
        $output = array(
          'answer' => $value['answer']
        );
        $result[$value['question_id']] = $output;
      }
      return $result;
    }
  }

  function get_result_row($table, $col, $val, $ord_col)
  {
    $this->db->select('*');
    $this->db->where($col, $val);
    $this->db->order_by($ord_col, 'desc');
    $query = $this->db->get($table);
    return $query->row();
  }


  function send_email_user_signup($id)
  { {

      $user = $this->get_result_row('user', 'uid', $id, 'created');
      $to = $user->email;

      $subject = "Seflo Financial Loan Application";

      $message = "Hi " . $user->name . ' ' . $user->lname . ",<br/><br/>123456 is a system generated password. Kindly change your password for security purposes. Please, enter a valid password that has at least 8 characters, one number or one wild character. Thank you for applying for a loan. Your application is under review and we will contact you as soon as possible.<br/><br/>";

      $message = $message . "<p> Sincerely, <br/><br/>";
      $message = $message . " Customer Care <br/>";
      $message = $message . " Email: customercare@Seflofinancial.com </p>";


      // Always set content-type when sending HTML email
      $headers = "MIME-Version: 1.0" . "\r\n";
      $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

      // More headers
      $headers .= 'From: <customercare@seflofinancial.com>' . "\r\n";

      $result = mail($to, $subject, $message, $headers);
    } {


      $to = "customercare@seflofinancial.com";

      $subject = "New Loan Application";

      $message = "Hi," . "<br/><br/> We have a new loan application. Please, review and process it as soon as possible. Thank you <br/><br/>";

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
    $app_detail = $this->get_result_row('applications', 'app_no', $app_id, 'submission_date');

    $app_id = $app_detail->app_id;

    $app_detail = $this->get_result_row('applications', 'app_id', $app_id, 'submission_date');
    $user = $this->get_result_row('user', 'uid', $app_detail->user_id, 'created');
    $to = $user->email;

    $app_type = "";
    if ($app_detail->app_type == 1) {
      $app_type = "Business Loan Application";
    } else if ($app_detail->app_type == 2) {
      $app_type = "Insurance Loan Application";
    } else if ($app_detail->app_type == 3) {
      $app_type = "Home Loan Application";
    } else if ($app_detail->app_type == 4) {
      $app_type = "Commercial Loan Application";
    } else if ($app_detail->app_type == 5) {
      $app_type = "Personal Loan Application";
    }



    $app_status = "";
    if ($app_detail->app_status == 0) {
      $app_status = "Under Review";
    } else if ($app_detail->app_status == 1) {
      $app_status = "Document Pending";
    } else if ($app_detail->app_status == 2) {
      $app_status = "Document Recieved";
    } else if ($app_detail->app_status == 3) {
      $app_status = "File Submitted";
    } else if ($app_detail->app_status == 4) {
      $app_status = "Not submitted";
    } else if ($app_detail->app_status == 5) {
      $app_status = "Approved";
    } else if ($app_detail->app_status == 6) {
      $app_status = "Rejected";
    }



    $subject = "Loan Application Status Update";

    $message = "Hi, " . "<br/><br/> We have updated your loan application. Please, sign in to your account at anytime to know more about the status of your loan application. Thank you <br/><br/>";

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

  function get_user()
  {
    $row = $this->db->where('uid', $this->session->userdata('seflofinancial'))->limit(1)->get('user')->row();
    if (!empty($row)) {
      return $row;
    } else {
      return false;
    }
  }

  function saveprofile()
  {
    $id = $_SESSION['seflofinancial'];
    if ($id) {
      $auth_details = $this->Admin_model->get_result_row('user', 'uid', $id, 'created');
      if ($auth_details) {
        $array = array(
          'seflofinancial' => $auth_details->uid,
          'email' => $_POST['email'],
          'username' => $auth_details->name,
          'userlastname' => $auth_details->lname,
          'usermobile' => $auth_details->mobile,
        );
        $this->session->set_userdata($array);
      }
    }
    $data = array();
    foreach ($this->input->post() as $key => $value) {
      $data[$key] = $value;
    }
    if ($this->input->post()) {
      $this->db->where('uid', $id);
      $this->db->update('user', $data);
      return true;
    } else {
      return false;
    }
  }

  function savepwd()
  {

    $id = $_SESSION['seflofinancial'];

    $data = array();
    foreach ($this->input->post() as $key => $value) {
      $data[$key] = $value;
    }
    if ($this->input->post()) {
      $this->db->where('uid', $id);
      $this->db->update('user', $data);
      return true;
    } else {
      return false;
    }
  }
}
