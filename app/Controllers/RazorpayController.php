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
            

           // Original amount in paise (e.g., 150000 paise = 1500 INR)
            $originalAmount = 150000;

            // Calculate the platform fee (2%)
            $platformFee = $originalAmount * 0.02;

            // Calculate the total amount including the platform fee
            $totalAmount = $originalAmount + $platformFee;

            // Create the Razorpay order with the total amount
            $orderData = [
                'receipt'         => 'rcptid_' . time(),
                // 'amount'          => $totalAmount, // Total amount with platform fee
                'amount'          => 1, // Total amount with platform fee
                'currency'        => 'INR'
            ];

            $razorpayOrder = $api->order->create($orderData);

            // Prepare data for the Razorpay modal
            $data = [
                'key'               => getenv('RAZORPAY_KEY_ID'),
                'amount'            => $orderData['amount'], // Total amount with platform fee
                'name'              => 'aavirbhav',
                'image'             => 'https://ik.imagekit.io/charanraj/UI/razorpay%20aavirbhav%20logo.png',
                'description'       => 'Event Registration Fee (Platform Fee: ' . round($platformFee / 100, 2) . ' INR)', // Show platform fee in INR
                'prefill'           => [
                    'name'              => $session->get('name'),
                    'email'             => $session->get('email'),
                    'contact'           => $session->get('phone_number'),
                ],
                'notes'             => [
                    'address'           => 'Agnes'
                ],
                'theme'             => [
                    'color'             => '#E81400'
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