<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Admin_model extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Steps_model');
    }

    function get_admin()
    {
        $this->db->select('*');
        $this->db->from('admin');
        $this->db->where('id', $this->session->userdata('seflofinancial'));
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            $row = $query->result_array();
            return $row;
        }
    }

    function saveprofile()
    {
        $id = $_SESSION['seflofinancial'];
        $data = array();
        foreach ($this->input->post() as $key => $value) {
            $data[$key] = $value;
        }
        if ($this->input->post()) {
            $this->db->where('id', $id);
            $this->db->update('admin', $data);
            return true;
        } else {
            return false;
        }
    }
    function savebank($data)
    {
        $id = $_SESSION['seflofinancial'];
        $this->db->where('uid', $id);
        $this->db->update('user', $data);
        return true;
    }

    function updateProfile($data)
    {
        $id = $_SESSION['seflofinancial'];
        $this->db->where('uid', $id);
        $this->db->update('user', $data);
        return true;
    }

    function totalcounts()
    {
        /*$result['categories']=$this->total_categories();
        $result['subcategories']=$this->total_subcategories();
        $result['subcategories2']=$this->total_subcategories2();
        $result['subcategories3']=$this->total_subcategories3();
        $result['subcategories4']=$this->total_subcategories4();
        $result['products']=$this->total_products();
        $result['vendors']=$this->total_vendors();
        $result['users']=$this->total_users();
        $result['size']=$this->total_size();
        $result['trending_vendor']=$this->total_trending_vendor();
        $result['trending_products']=$this->total_trending_products();
        $result['locations']=$this->total_locations();
        $result['vendor_types']=$this->total_vendor_types();
        $result['expertise']=$this->total_expertise();
        $result['price_range']=$this->total_price_range();
        return $result;*/
    }

    function total_users()
    {
        $q = $this->db->select('count(uid) as totalusers')->where('status', 1)->get('user');
        if ($q->num_rows() > 0) {
            return $q->row()->totalusers;
        } else {
            return 0;
        }
    }

    function get_all_appliction_lastdays($days)
    {
        $d =  date('Y-m-d H:i:s', strtotime('-' . $days . ' days', time()));

        $data = array();
        $this->db->from('applications')->order_by('app_id', 'desc');

        $this->db->where('submission_date >=', $d);
        $this->db->where('submission_date >', 0);
        $query = $this->db->get();

        return $query->num_rows();
    }

    function get_all_appliction_bystatus($status)
    {

        $data = array();
        $this->db->from('applications')->order_by('app_id', 'desc');

        $this->db->where('app_status', $status);
        $query = $this->db->get();

        return $query->num_rows();
    }

    function get_all_application_6months($status)
    {
        //  $d=  date('Y-m-d H:i:s', strtotime('-'.$days.' days', time()));

        $data = array();
        $this->db->from('applications')->order_by('app_id', 'desc');

        $this->db->where('submission_date(now(), interval 6 month)');
        $this->db->where('app_status', $status);
        $query = $this->db->get();

        return $query->num_rows();
    }

    function get_total_applications()
    {

        $data = array();
        $this->db->from('applications')->order_by('app_id', 'desc');

        $query = $this->db->get();

        return $query->num_rows();
    }



    function get_all_applications($top6 = null, $application_type = null)
    {
        $data = array();
        $this->db->from('applications')->order_by('app_id', 'desc');
        if (!empty($application_type)) {
            if ($application_type == 1) {
                $this->db->where('app_status', 0);
                $this->db->or_where('app_status', 1);
            } else if ($application_type == 2) {
                $this->db->where('app_status', 2);
                $this->db->or_where('app_status', 4);
            } else if ($application_type == 3) {
                $this->db->where('app_status', 3);
            } else if ($application_type == 4) {
                $this->db->where('app_status', 5);
            }
        }/*else{
            $this->db->where('app_status>',0);
            }*/

        if (isset($top6))
            $this->db->limit($top6);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            $row = $query->result();

            foreach ($row as $key => $value) {
                $data[] = array(
                    'app_id' => $value->app_id,
                    'userdetails' => $this->get_username($value->user_id),
                    'app_status' => $this->get_app_status($value->app_status),
                    'submission_date' => $this->format_the_date($value->submission_date),
                    'purpose' => $this->get_app_type($value->app_type),
                    'app_no' => $value->app_no,
                    'amount_needed' => $this->get_amount_needed($value->app_no, $value->app_type)
                );
            }
            return $data;
        }
    }


    function get_all_userapplications($user_id = null)
    {
        $data = array();
        $this->db->from('applications')->order_by('app_id', 'desc');
        $this->db->where('user_id', $_SESSION['seflofinancial']);
        if (isset($top6))
            $this->db->limit($top6);
        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            $row = $query->result();

            foreach ($row as $key => $value) {
                $data[] = array(
                    'app_id' => $value->app_id,
                    'userdetails' => $this->get_username($value->user_id),
                    'app_status' => $value->app_status,
                    'submission_date' => $this->format_the_date($value->submission_date),
                    'purpose' => $this->get_app_type($value->app_type),
                    'app_no' => $value->app_no,
                    'amount_needed' => $this->get_amount_needed($value->app_no, $value->app_type)
                );
            }
            return $data;
        }
    }

    function get_all_userapplications_status($user_id = null)
    {

        $data = array();
        $this->db->from('applications')->order_by('app_id', 'desc');
        $this->db->where('user_id', $_SESSION['seflofinancial']);
        if (isset($top6))
            $this->db->limit($top6);
        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            $row = $query->result();

            foreach ($row as $key => $value) {
                $data[] = array(
                    'app_id' => $value->app_id,
                    'userdetails' => $this->get_username($value->user_id),
                    'app_status' => $this->get_app_status($value->app_status),
                    'submission_date' => $this->format_the_date($value->submission_date),
                    'purpose' => $this->get_app_type($value->app_type),
                    'app_no' => $value->app_no,
                    'amount_needed' => $this->get_amount_needed($value->app_no, $value->app_type)
                );
            }
            return $data;
        }
    }


    public function getAllAnswers($app_no)
    {
        $this->db->select('*');
        $this->db->order_by("answer_id", "asc");
        $this->db->where('app_id', $app_no);
        $this->db->order_by('answer_id', 'asc');
        $query = $this->db->get('answers');

        if ($query->num_rows() > 0) {
            $row = $query->result_array();
            foreach ($row as $key => $value) {
                $output = array(
                    'question' => $this->get_single_question($value['question_id']),
                    'answer' => $value['answer']
                );
                $result[$value['question_id']] = $output;
            }
            return $result;
        }
    }


    public function getAllAnswers_var($table, $app_no, $qtable)
    {
        $this->db->select('*');
        $this->db->order_by("answer_id", "asc");
        $this->db->where('app_id', $app_no);
        $this->db->order_by('answer_id', 'asc');
        $query = $this->db->get($table);

        if ($query->num_rows() > 0) {
            $row = $query->result_array();
            foreach ($row as $key => $value) {
                $output = array(
                    'question' => $this->get_single_question_var($qtable, $value['question_id']),
                    'answer' => $value['answer']
                );
                $result[$value['question_id']] = $output;
            }
            return $result;
        }
    }


    public function get_single_question_var($table, $qid)
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





    public function get_single_question($qid)
    {
        $this->db->select('question');
        $this->db->from('questions');
        $this->db->where('question_id', $qid);
        $this->db->order_by("question_id", "asc");
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            $row = $query->row()->question;
            return $row;
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

    function format_the_date($date)
    {
        return date('F j, Y H:i:s a', strtotime($date));
    }
    function get_username($user_id)
    {
        $q = $this->db->where('uid', $user_id)->get('user');
        if ($q->num_rows() > 0) {
            return $q->row();
        } else {
            return 0;
        }
    }

    function get_app_status($status)
    {
        $all_status = array('Under Review', 'Document Pending', 'Document Recieved', 'File Submitted', 'Approved', 'Rejected');
        return $all_status[$status - 1];
    }

    function get_app_type($type)
    {
        $all_types = array('Personal', 'emergency');
        return $all_types[$type];
    }

    function get_amount_needed($appno, $type)
    {

        //Personal loan
        if ($type == 1) {
            $q =  $this->db->select('a.answer as money_needed')
                ->from('questions q')
                ->join('answers a', 'q.question_id=a.question_id')
                ->where(array('q.question_id' => 1, 'a.app_id' => $appno))
                ->get();
            if ($q->num_rows() > 0) {
                return $q->row()->money_needed;
            } else {
                return 0;
            }
        } else  if ($type == 3) {
            $q =  $this->db->select('a.answer as money_needed')
                ->from('homeloan_questions q')
                ->join('homeloan_answers a', 'q.question_id=a.question_id')
                ->where(array('q.question_id' => 7, 'a.app_id' => $appno))
                ->get();
            if ($q->num_rows() > 0) {
                return $q->row()->money_needed;
            } else {
                return 0;
            }
        } else  if ($type == 4) {
            $q =  $this->db->select('a.answer as money_needed')
                ->from('cl_questions q')
                ->join('cl_answers a', 'q.question_id=a.question_id')
                ->where(array('q.question_id' => 1, 'a.app_id' => $appno))
                ->get();
            if ($q->num_rows() > 0) {
                return $q->row()->money_needed;
            } else {
                return 0;
            }
        } else  if ($type == 5) {
            $q =  $this->db->select('a.answer as money_needed')
                ->from('pl_questions q')
                ->join('pl_answers a', 'q.question_id=a.question_id')
                ->where(array('q.question_id' => 1, 'a.app_id' => $appno))
                ->get();
            if ($q->num_rows() > 0) {
                return $q->row()->money_needed;
            } else {
                return 0;
            }
        } else {
            return 0;
        }
    }

    function get_single_application($appid)
    {
        $data = array();
        $this->db->where('app_id', $appid);
        $query = $this->db->get('applications');
        if ($query->num_rows() > 0) {
            $row = $query->row();

            //Personal loan
            // if($row->app_type==1){
            $data =  array(
                'app_no' => $row->app_no,
                'app_id' => $row->app_id,
                'userdetails' => $this->get_username($row->user_id),
                'app_status' => $this->get_app_status($row->app_status),
                'submission_date' => $this->format_the_date($row->submission_date),
                'purpose' => $this->get_app_type($row->app_type),
                'amount_needed' => $this->get_amount_needed($row->app_no, $row->app_type),
                'approve_amount' => $row->approve_amount,
                'interest' => $row->interest,
                'tenure' => $row->tenure,
                'conditions' => $row->conditions,
                'final_amount' => $row->conditions,
                'pending_doclist' => $row->pending_doclist
                //'answers'=>$this->get_answers($row->app_no)
            );


            return $data;
            // }
        }
    }




    function get_answers($appid)
    {
        $this->db->select('*');
        $this->db->order_by("answer_id", "asc");
        $this->db->where('app_id', $appid);
        $this->db->order_by('answer_id', 'asc');
        //$this->db->order_by('question_id','asc');
        //user_id
        $query = $this->db->get('answers');
        if ($query->num_rows() > 0) {
            $row = $query->result_array();
            foreach ($row as $key => $value) {
                // $output = array('question'=>$this->Steps_model->get_single_question($value['question_id']),
                //                 'answer'=>$value['answer']
                //                );
                $output = array(
                    'question' => $this->get_single_question($value['question_id']),
                    'answer' => $value['answer']
                );
                $result[] = $output;
            }
            //echo '<pre>'; print_r($result); echo '</pre>';
            return $result;
        }
    }


    function insert_data($table, $data)
    {
        return $this->db->insert($table, $data);
    }


    function get_result($table, $col, $val, $ord_col)
    {
        $this->db->select('*');
        $this->db->where($col, $val);
        $this->db->order_by($ord_col, 'desc');
        $query = $this->db->get($table);
        return $query->result();
    }


    function get_result_row($table, $col, $val, $ord_col)
    {
        $this->db->select('*');
        $this->db->where($col, $val);
        $this->db->order_by($ord_col, 'desc');
        $query = $this->db->get($table);
        return $query->row();
    }




    function delete($app_id)
    {

        $this->db->where('app_no', $app_id);
        $this->db->delete('applications');


        $this->db->where('app_id', $app_id);
        $this->db->delete('answers');


        /* $this->db->where('app_id', $app_id);
        $this->db->delete('cl_answers');
        
        $this->db->where('app_id', $app_id);
        $this->db->delete('homeloan_answers');
        
        $this->db->where('app_id', $app_id);
        $this->db->delete('insurance_answers'); */
    }


    function get_total_amt_req($days = 30)
    {
        $d =  date('Y-m-d H:i:s', strtotime('-' . $days . ' days', time()));

        $this->db->select('sum(answer) as total_amt');
        $this->db->from('answers ans');
        $this->db->join('applications ap', 'ans.app_id=ap.app_no');
        $this->db->where('submission_date >=', $d);
        $this->db->where('submission_date >', 0);
        $this->db->where('ans.question_id', 1);
        // $this->db->order_by("answer_id", "asc");

        $query = $this->db->get();
        // echo $this->db->last_query(); die;

        if ($query->num_rows() > 0) {
            $row = $query->row()->total_amt;

            return $row;
        } else return 0;
    }

    function get_total_amt_req_status($status, $days = 30)
    {
        $d =  date('Y-m-d H:i:s', strtotime('-' . $days . ' days', time()));
        $this->db->select('sum(answer) as total_amt');
        $this->db->from('answers ans');
        $this->db->join('applications ap', 'ans.app_id=ap.app_no');
        $this->db->where(array('ap.app_status' => $status, 'ans.question_id' => 1));
        $this->db->where('submission_date >=', $d);
        $this->db->where('submission_date >', 0);
        $query = $this->db->get();
        // echo $this->db->last_query(); die;
        if ($query->num_rows() > 0) {
            $row = $query->row()->total_amt;
            return $row;
        } else return 0;
    }
}
