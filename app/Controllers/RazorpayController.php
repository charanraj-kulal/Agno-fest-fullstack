<?php

namespace App\Controllers;
require_once(APPPATH."Libraries/razorpay/Razorpay.php");
use Razorpay\Api\Api;
use CodeIgniter\Controller;


class RazorpayController extends BaseController
{
    public function initiate()
    {
      
        try
        {
        // curl_setopt($ch, CURLOPT_CAINFO, '/path/to/downloaded/cacert.pem');
        $session = session();
        if (!$session->get('isLoggedIn')) {
            return $this->response->setStatusCode(403)->setJSON([
                'success' => false,
                'message' => 'Login first to make payment!'
            ]);
        }
            $api = new Api(getenv('RAZORPAY_KEY_ID'), getenv('RAZORPAY_KEY_SECRET'));
            

            $orderData = [
                'receipt'         => 'rcptid_' . time(),
                'amount'          => 160000, // Amount in paise (1600 INR)
                'currency'        => 'INR'
            ];

            $razorpayOrder = $api->order->create($orderData);

            $data = [
                'key'               => getenv('RAZORPAY_KEY_ID'),
                'amount'            => $orderData['amount'],
                'name'              => 'Agnisia',
                'description'       => 'Event Registration Fee',
                'prefill'           => [
                    'name'              => $session->get('name'),
                    'email'             => $session->get('email'),
                    'contact'           => $session->get('phone_number'),
                ],
                'notes'             => [
                    'address'           => 'Agnes'
                ],
                'theme'             => [
                    'color'             => '#F37254'
                ],
                'order_id'          => $razorpayOrder['id'],
            ];

            return $this->response->setJSON($data);
        } catch (\Exception $e) {
            log_message('error', 'Razorpay initiation error: ' . $e->getMessage());
            return $this->response->setStatusCode(500)->setJSON([
                'success' => false,
                'message' => 'An error occurred while initiating the payment.'
            ]);
        }
    }
     

    public function verify()
    {
        $input = $this->request->getPost();
        $api = new Api(getenv('RAZORPAY_KEY_ID'), getenv('RAZORPAY_KEY_SECRET'));

        try {
            $attributes = [
                'razorpay_order_id' => $input['razorpay_order_id'],
                'razorpay_payment_id' => $input['razorpay_payment_id'],
                'razorpay_signature' => $input['razorpay_signature']
            ];

            $api->utility->verifyPaymentSignature($attributes);

            // Payment successful, update your database here
            // You can call your event registration method here

            return $this->response->setJSON([
                'success' => true,
                'message' => 'Payment successful!'
            ]);
        } catch (\Exception $e) {
            return $this->response->setJSON([
                'success' => false,
                'message' => 'Payment failed: ' . $e->getMessage()
            ]);
        }
    }
}