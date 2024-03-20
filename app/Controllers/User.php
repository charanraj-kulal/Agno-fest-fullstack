<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;
use CodeIgniter\API\ResponseTrait;
use CodeIgniter\RESTful\ResourceController;
use \Firebase\JWT\JWT;
use \Firebase\JWT\KEY;

class User extends BaseController
{
    use ResponseTrait;
    
    // private $users;


     public function __construct()
    {
        // $this->session = \Config\Services::session();
        // $this->users = new UserModel();
        // $this->data['users'] = $this->usersModel->getAllUsers();
        
    }
     public function register()
    {
       
        return view('app/register/register');
    }
   public function create()
{
    $users = new UserModel();
    
    // Generate a verification token and set expiration time
    $verificationToken = bin2hex(random_bytes(32));
    $tokenExpiration = time() + (10 * 60); // Token expires after 10 minutes
    
    $user = [
        'name' => $this->request->getVar('name'),
        'college_name' => $this->request->getVar('college_name'),
        'team_name' => 'Default_Team_Name', // You can set the team name here or use a similar approach as before
        'phone_number' => $this->request->getVar('phone_number'),
        'email' => $this->request->getVar('email'),
        'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT),
        'user_type' => 1,
        'verification_token' => $verificationToken, // Store the verification token
        'token_expires_at' => date('Y-m-d H:i:s', $tokenExpiration), // Set token expiration time
        'active' => 0, // User is not active until verified
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
    ];

    $userId = $users->save($user);
    
    if ($userId) {
        // Send verification email
        $emailSent = $this->sendVerificationEmail($user['email'], $verificationToken);
        
        if ($emailSent) {
            // Redirect to verify-email page
            return redirect()->to('verify-email')->with('success', 'User created successfully. Please check your email for verification.');
        } else {
            // Handle email sending failure
            return redirect()->to('register')->with('error', 'Failed to send verification email.');
        }
    } else {
        return redirect()->to('register')->with('error', 'User not created successfully.');
    }
}

private function sendVerificationEmail($email, $verificationToken)
{
    // Send email with a verification link containing the verification token
    // You can use the email library or any other email service provider for sending emails
    // Here's a basic example using CodeIgniter's email library
    $email = \Config\Services::email();
    $email->setFrom('c191542709@gmail.com', 'Agnisia');
    $email->setTo($email);
    $email->setSubject('Email Verification for AGNISIA-2K24');
    
    // Construct the verification link
    $verificationLink = base_url('verify-email') . '?token=' . $verificationToken;
    
    // Create the email message
    $message = "Please click the following link to verify your email: $verificationLink";
    $email->setMessage($message);
    
    // Send the email and return true or false based on success
    try {
        return $email->send();
    } catch (\Exception $e) {
        // Log the error or handle it as per your application's requirements
        return false;
    }
}




    public function login_view(){
        return view('app/login/login2');
        $data = [];
    }
    
   public function login()
{
    $userModel = new UserModel();
    
    try {
        $email = $this->request->getVar('email');
        $password = $this->request->getVar('password');
       
        // Retrieve user using model's retrieval method
        $user = $userModel->where('email', $email)->first(); 
        
        if ($user) {
            // Verify password using password_verify
            if (password_verify($password, $user['password'])) {
                // Generate JWT token
                
                $key=getenv('JWT_SECRET_KEY');
                $issuedAtTime = time();
                $tokenTimeToLive=getenv('JWT_TIME_TO_LIVE');
                // $tokenTimeToLive = getenv('JWT_TIME_TO_LIVE');
                $tokenExpiration = $issuedAtTime + $tokenTimeToLive;
               
                $payload = [
                    "iss" => "localhost",
                    "aud" => "localhost",
                    'exp' => $tokenExpiration,
                    "data" => [
                        'user_id' => $user['id'],
                        'name' => $user['name'],
                        'email' => $user['email']
                    ]
                ];
                $jwt = JWT::encode($payload, $key, 'HS256');
        //          return $this->respondCreated([
        //  'status' => 1,
        //            'jwt' => $jwt,
        //         'message' => 'User Login Successfully',
        // ]);
                // Set user session
                $this->setUserSession($user);

                // Successful login
                return redirect()->to('dashboard')->with('success', 'Login successfully');
            } else {
                // Incorrect password
                return $this->respondCreated([
                    'status' => 0,
                    'message' => 'Invalid Email and Password',
                ]);
            }
        } else {
            // User not found
            return $this->respondCreated([
                'status' => 0,
                'message' => 'Email is not found',
            ]);
        }
    } catch (\Exception $e) {
        // Handle potential errors gracefully
        return $this->respondCreated([
            'status' => 0,
            'message' => 'An error occurred during login.',
        ]);
    }
}


    private function setUserSession($user)
    {
        $users = [
            'id' => $user['id'],
            'name' => $user['name'],
            'college_name' => $user['college_name'],
            'team_name' => $user['team_name'],
            'phone_number' => $user['phone_number'],
            'email' => $user['email'],
            'isLoggedIn' => true,
            "user_type" => $user['user_type'],
        ];

        session()->set($users);
        $session = session();
        $session->setFlashdata('success', 'Login Successful!');

        return true;
    }
    public function readUser()
    {
        $request = service('request');
        $key = "hilalahmadkhanformpakistan";
        $headers = $request->getHeader('authorization');
        $jwt = $headers->getValue();
        $userData = JWT::decode($jwt, new KEY($key, 'HS256'));
        $users = $userData->data;
        return $this->respond([
            'status' => 1,
            'users' => $users
        ]);
    }

}
