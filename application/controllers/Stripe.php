<?php
error_reporting(0);

defined('BASEPATH') or exit('No direct script access allowed');

class Stripe extends CI_Controller
{
    public $user = "";
    public $stripe = null;
    private $stripe_pk;
    private $stripe_sk;
    private $mode = 'test';
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('string');
        $this->load->helper('url');
        $this->load->model('Admin_model');
        $this->user = $this->Admin_model->get_result_row('user', 'uid', $_SESSION['seflofinancial'], 'created');
        if ($this->mode == 'live') {
            $this->stripe_pk = 'pk_live_51MhbgvIdYwyIiCqnTvfeuINEzEGIrpiWvKNt70PgtAQzfqE4WpCHN57TrJ3xwNmZNuQed0YPsD3DhZw6c6yMGsQn004S5INRKD';
            $this->stripe_sk = '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';
        } else {
            $this->stripe_pk = 'pk_test_51MhbgvIdYwyIiCqnJNMcI3YVEjvb1XONoJYY5oteeMWTn15x5otKHupNSGMA0l4rFJdv0FwMMc92gJP9KJtPwqC800iGTdxunm';
            $this->stripe_sk = 'sk_test_51MhbgvIdYwyIiCqnNXRZYcuWGQjcqHcWBCh21yT3csfIkV4n0UM10sOcODfRLTltD7xNb1prXx37HkonHCv21vM100w931D5YL';
        }

        if (is_null(user())) {
            redirect('steps/signin', 'refresh');
        }
        require_once('application/libraries/vendor/autoload.php');
        $this->stripe = new \Stripe\StripeClient($this->stripe_sk);
    }

    /* redirect to stripe for onboarding */
    public function redirectToStripe()
    {
        // check the user has connect id or not
        if (is_null($this->user->stripe_connect_id)) {
            $account = $this->stripe->accounts->create([
                // 'country' => 'US',
                'type' => 'express',
                'email' => $this->user->email
            ]);

            $this->Admin_model->updateProfile([
                'stripe_connect_id' => $account->id,
            ]);

            $onboardLink = $this->stripe->accountLinks->create([
                'account' => $account->id,
                'refresh_url' => base_url('steps/stripe/connect'),
                'return_url' => base_url('steps/stripe/connect/' . $account->id),
                'type' => 'account_onboarding',
            ]);

            return redirect($onboardLink->url);
        }

        $loginLink = $this->stripe->accounts->createLoginLink($this->user->stripe_connect_id);
        return redirect($loginLink->url);
    }

    public function saveStripeAccount($account_id)
    {
        try {
            $stripe_account = $this->stripe->accounts->retrieve(
                $account_id,
                []
            );
            // check if user has completed onboarding or not
            if ($stripe_account->charges_enabled && $stripe_account->details_submitted) {
                $this->db->where('stripe_connect_id', $account_id);
                $this->db->update('user', [
                    'completed_stripe_onboarding' => true
                ]);
                $this->session->set_flashdata('success', 'Successfully connected with stripe');

                redirect('steps/dashboard', 'refresh');
            }
        } catch (Exception $e) {
            $this->session->set_flashdata('error', 'Error while connecting with stripe');
            redirect('steps/dashboard', 'refresh');
        }
    }

    public function payLoan()
    {
        // sub_1NNcUAIdYwyIiCqnFhrzXtby
        // si_O9wMzgjzQ2wnvF
        $user = $this->Admin_model->get_result_row('user', 'uid', $_SESSION['seflofinancial'], 'created');

        $mode = $this->input->post('pay_type') === 'one' ? 'payment' : $this->input->post('pay_type');
        $session = $this->stripe->checkout->sessions->create([
            'success_url' => base_url('steps/stripe/pay_loan/success?session_id={CHECKOUT_SESSION_ID}'),
            'cancel_url' => base_url('steps/stripe/pay_loan/cancel'),
            'line_items' => [
                [
                    'price' => $this->input->post('price_id'),
                    'quantity' => 1,
                ],
            ],
            'mode' => $mode,
            'customer' => $user->stripe_customer_id,
        ]);

        return redirect($session->url);
    }

    public function payLoanSuccess()
    {
        try {
            $session = $this->stripe->checkout->sessions->retrieve($_GET['session_id']);
            $user = $this->Admin_model->get_result_row('user', 'stripe_customer_id', $session->customer, 'created');

            // check weather this seassion is processed or not
            $latest_entry = $this->Admin_model->get_result_row('loan_returns', 'checkout_session_id', $session->id, 'created_at');

            if (is_null($latest_entry)) {
                $latest_application = user_latest_unpaid_approved_application();

                // check the session mode
                if ($session->mode === 'subscription') {
                    $subscription = $this->stripe->subscriptions->retrieve(
                        $session->subscription,
                        []
                    );

                    $data = array(
                        'user_id' => $user->uid,
                        'application_id' => $latest_application->app_id,
                        'amount' => $session->amount_total / 100,
                        'invoice' => $subscription->latest_invoice,
                        'checkout_session_id' => $session->id,
                        'created_at' => date('Y-m-d h:i:s'),
                    );
                    $this->db->insert('loan_returns', $data);

                    $product = $this->stripe->products->retrieve(
                        $subscription->plan->product,
                        []
                    );

                    $this->db->where('stripe_customer_id', $session->customer);
                    $this->db->update('user', [
                        'stripe_subscription_id' => $session->subscription,
                        'active_subscription' => true
                    ]);
                    $type = 'success';
                    $message = 'Successfully subscribe to ' . $product->name;
                } else {
                    $amount_paid = $session->amount_total / 100;
                    $data = array(
                        'user_id' => $user->uid,
                        'application_id' => $latest_application->app_id,
                        'amount' => $amount_paid,
                        'invoice' => null,
                        'checkout_session_id' => $session->id,
                        'created_at' => date('Y-m-d h:i:s'),
                    );
                    $this->db->insert('loan_returns', $data);

                    // check weather user has paid fully then make application as return
                    $app_total = $latest_application->final_amount;
                    $is_paid_fully = application_amount_paid() >= $app_total ? true : false;

                    if ($is_paid_fully) {
                        $this->db->where('app_id', $latest_application->app_id);
                        $this->db->update('applications', [
                            'is_return' => true,
                        ]);
                        $message = 'You have successfully paid your loan';
                    } else {
                        $message = 'You have successfully paid $' . $amount_paid;
                    }

                    // check weather user has active subscription
                    if (!is_null($user->stripe_subscription_id) && $is_paid_fully) {
                        // cancel the user subscription
                        $this->stripe->subscriptions->cancel(
                            $user->stripe_subscription_id,
                            []
                        );
                        // update user subscription to null
                        $this->db->where('stripe_customer_id', $session->customer);
                        $this->db->update('user', [
                            'stripe_subscription_id' => null,
                            'active_subscription' => false
                        ]);
                    }

                    $type = 'success';
                }
            } else {
                $type = 'error';
                $message = 'Invalid Session!';
            }
        } catch (Stripe\Exception\InvalidRequestException $ex) {
            $type = 'error';
            $message = 'Invalid Session!';
        }

        $this->session->set_flashdata($type, $message);
        redirect('steps/dashboard', 'refresh');
    }

    public function payLoanCancel()
    {
        $this->session->set_flashdata('error', 'You cancel checkout session!');
        redirect('steps/dashboard', 'refresh');
    }

    public function payOffLoan()
    {
        $application_return_price = user_latest_unpaid_approved_application()->final_amount;
        $remaining_amount = $application_return_price - application_amount_paid();
        $user = user();

        if ($remaining_amount > 0) {
            $session = $this->stripe->checkout->sessions->create([
                'success_url' => base_url('steps/stripe/pay_loan/success?session_id={CHECKOUT_SESSION_ID}'),
                'cancel_url' => base_url('steps/stripe/pay_loan/cancel'),
                'line_items' => [
                    [
                        'price_data' => [
                            'currency' => "usd",
                            'unit_amount' => $remaining_amount * 100,
                            'product_data' => [
                                'name' => "Pay Off Loan",
                            ],
                        ],
                        'quantity' => 1,
                    ],
                ],
                'mode' => 'payment',
                'customer' => $user->stripe_customer_id,
            ]);
            return redirect($session->url);
        }

        $this->session->set_flashdata('error', 'You have not any amount of loan to return');
        redirect('steps/dashboard', 'refresh');
    }
}
