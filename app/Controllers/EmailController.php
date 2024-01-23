<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class EmailController extends BaseController
{
    /**
     * function to load email view
     * @param NA
     * @return NA
     */
    public function index()
    {
        return view('app/email/email');
    }

    /**
     * Function to send email
     * @param NA
     * @return $msg to view
     */
    public function sendMail() { 
        $inputs = $this->validate([
            'email' => 'required|valid_email',
            'subject' => 'required|min_length[5]',
            'message' => 'required|min_length[10]'
        ]);

        if (!$inputs) {
            return view('app/email/email', [
                'validation' => $this->validator
            ]);
        }

        $to = $this->request->getVar('email');
        $subject = $this->request->getVar('subject');
        $message = $this->request->getVar('message');
        
        $email = \Config\Services::email();
 
        $email->setTo($to);
        //$email->setFrom('admin@programmingfields.com', 'Contact Email');
        $email->setSubject($subject);
        $email->setMessage($message);
 
        if ($email->send()) {
            $response = 'Email successfully sent';
        } 
        else 
        {
            $data = $email->printDebugger(['headers']);
            $response ='Email send failed';
        }
        return redirect()->to( base_url('email') )->with('message', $response);
    }
}
