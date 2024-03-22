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
        $session = session();
        $users = new UserModel();
        $is_email = $users->where('email', $this->request->getVar('email'))->first();
        
        if ($is_email) {
            return $this->response->setJSON([
                'success' => false,
                'message' => 'Email already exists'
            ]);
        } else {
            $otp = mt_rand(100000, 999999);
            $otpCreatedAt = time();
            $teamNames = ['Atom', 'Server savers', 'Backup', 'Iteration', 'Code red', 'Focus', 'Typers', 'Synergy', 'Logs', 'Believers', 'Team Byte', 'Makers', 'BugSquashers', 'Mind Benders'];
            shuffle($teamNames);

            $uniqueTeamNames = [];
            foreach ($teamNames as $teamName) {
                $isTeamNameExists = $users->where('team_name', $teamName)->first();

                if (!$isTeamNameExists) {
                    $uniqueTeamNames[] = $teamName;
                    break;
                }
            }
            
            $user = [
                'name' => $this->request->getVar('name'),
                'college_name' => $this->request->getVar('college_name'),
                'team_name' => isset($uniqueTeamNames[0]) ? $uniqueTeamNames[0] : 'Default_Team_Name',
                'phone_number' => $this->request->getVar('phone_number'),
                'email' => $this->request->getVar('email'),
                'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT),
                'user_type' => 1,
                'otp' => $otp,
                'otp_created_at' => date('Y-m-d H:i:s', $otpCreatedAt),
                'active' => 0,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ];

            $regemail = $user['email'];
            $session->set('regemail', $user['email']);
            
            $userId = $users->save($user);
            
            if ($userId) {
                //mail integration 
                    $email = \Config\Services::email();
                    $email->setFrom('c191542709@gmail.com', 'Agnisia');
                    $email->setTo($regemail);
                    $email->setSubject('Registration succesfull for AGNISIA-2K24');
                    $viewData['user'] = $user; // Pass data to the view
                    $message = view('app/email/verify_email', $viewData);
                    $email->setMessage($message);
                    $email->send();
                // Send email
                // Redirect to verify-email page
                return $this->response->setJSON([
                    'success' => true,
                    'message' => 'User created successfully. Please check your email for OTP verification.'
                ]);
            } else {
                return $this->response->setJSON([
                    'success' => false,
                    'message' => 'User not created successfully'
                ]);
            }
        }
    }
    public function regenerateOTP()
{
    $session = session();
    $regemail = $session->get('regemail');

    // Check if the regemail session variable exists and is not empty
    if (!empty($regemail)) {
        $otp = mt_rand(100000, 999999);
        $otpCreatedAt = time();

        // Update the user's OTP and OTP creation time
        $userModel = new UserModel();
        $user = $userModel->where('email', $regemail)->first();
        if ($user) {
            $userModel->update($user['id'], [
                'otp' => $otp,
                'otp_created_at' => date('Y-m-d H:i:s', $otpCreatedAt)
            ]);
            $email = \Config\Services::email();
                $email->setFrom('c191542709@gmail.com', 'Agnisia');
                $email->setTo($regemail);
                $email->setSubject('Registration succesfull for AGNISIA-2K24');
                $viewData['user'] = $user; // Pass data to the view
                $message = view('app/email/verify_email', $viewData);
                $email->setMessage($message);
                $email->send();
            return $this->response->setJSON([
                'success' => true,
                'message' => 'OTP regenerated successfully.'
            ]);
        } else {
            return $this->response->setJSON([
                'success' => false,
                'message' => 'User not found.'
            ]);
        }
    } else {
        return $this->response->setJSON([
            'success' => false,
            'message' => 'Session variable regemail not found.'
        ]);
    }
}



    //email verification function
    public function verify_email_view(){
        return view('app/register/email_verify');

    }
    public function verifyOTP()
    {
        $session = session();

        // Access the regemail session variable
        $regemail = $session->get('regemail');

        // Check if the regemail session variable exists and is not empty

        $otp = $this->request->getVar('otp');

        $user = (new UserModel())->where('email', $regemail)->first();

        if ($user) {
            if ($user['otp'] === $otp) {
                $otpCreatedAt = strtotime($user['otp_created_at']);
                $currentTime = time();
                $timeDifference = $currentTime - $otpCreatedAt;
                $otpValidityPeriod = 10 * 60; // 10 minutes in seconds

                if ($timeDifference <= $otpValidityPeriod) {
                    $userModel = new UserModel();
                    $userModel->update($user['id'], ['active' => 1]);
                
                    return $this->response->setJSON([
                        'success' => true,
                        'message' => 'OTP verified successfully. You can now login.'
                    ]);
                } else {
                    return $this->response->setJSON([
                        'success' => false,
                        'message' => 'OTP has expired. Please generate a new OTP.'
                    ]);
                }
            } else {
                return $this->response->setJSON([
                    'success' => false,
                    'message' => 'Invalid OTP. Please try again.'
                ]);
            }
        } else {
            // Handle case where user not found with the email (unlikely scenario)
            return $this->response->setJSON([
                'success' => false,
                'message' => 'User not found'
            ]);
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
            if($user['active']==1){
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
                    
                    // Set user session
                    $this->setUserSession($user);

                    // Successful login
                    return $this->response->setJSON([
                        'success' => true,
                        'message' => 'Logged In Successfully!!'
                    ]);
                } else {
                    // Incorrect password
                    return $this->response->setJSON([
                        'success' => false,
                        'message' => 'Invalid Email and Password!!'
                    ]);
                }
            }
            else{
                // Account not activated
                return $this->response->setJSON([
                        'success' => false,
                        'message' => 'Activate your account first, try aganin!!'
                    ]);
            }

        } else {
            // User not found
            return $this->response->setJSON([
                'success' => false,
                'message' => 'The email provided is not exist!!'
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
        // $session->setFlashdata('success', 'Login Successful!');

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
