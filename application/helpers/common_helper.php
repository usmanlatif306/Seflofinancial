<?php if (!defined('BASEPATH')) exit('No direct script access allowed');


if (!function_exists('user')) {
    function user()
    {
        $ci = &get_instance();
        $ci->load->model('Admin_model');
        return $ci->Admin_model->get_result_row('user', 'uid', $_SESSION['seflofinancial'], 'created');
    }
}

if (!function_exists('user_has_subscription')) {
    function user_has_subscription()
    {
        $user =  user();
        return ($user->stripe_subscription_id && $user->active_subscription) ? true : false;
    }
}

if (!function_exists('user_latest_unpaid_approved_application')) {
    function user_latest_unpaid_approved_application()
    {
        $user =  user();
        $ci = &get_instance();
        $ci->db->select('*');
        $ci->db->where(['user_id' => $user->uid, 'app_status' => 5, 'is_return' => false]);
        $ci->db->order_by('submission_date', 'desc');
        $query = $ci->db->get('applications');
        return $query->row();
    }
}

if (!function_exists('user_has_unpaid_approved_application')) {
    function user_has_unpaid_approved_application()
    {
        $application =  user_latest_unpaid_approved_application();
        return $application ? true : false;
    }
}

if (!function_exists('application_amount_paid')) {
    function application_amount_paid()
    {
        $application_id =  user_latest_unpaid_approved_application()->app_id;
        $return_loans = 0;
        $ci = &get_instance();
        $ci->db->select('*');
        $ci->db->where(['application_id' => $application_id]);
        $results = $ci->db->get('loan_returns')->result_array();
        foreach ($results as $result) {
            $return_loans += $result['amount'];
        }

        return $return_loans;
    }
}
