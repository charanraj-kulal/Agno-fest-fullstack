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
            return $this->respondCreated([
                'status' => 0,
                'message' => 'Email already exist'
            ]);
        } else {
            $otp = mt_rand(100000, 999999);
            $otpCreatedAt = time();
            $teamNames = ['Atom', 'Server savers', 'Backup', 'Iteration', 'Code red', 'Focus', 'Typers', 'Synergy', 'Logs', 'Believers', 'Team Byte', 'Makers', 'BugSquashers', 'Mind Benders']; // Define your list of team names
            shuffle($teamNames); // Shuffle the array to randomize team names

            $uniqueTeamNames = [];
            foreach ($teamNames as $teamName) {
            // Check if the team name is already used
            $isTeamNameExists = $users->where('team_name', $teamName)->first();

            // If the team name is not used, assign it to the user
            if (!$isTeamNameExists) {
                $uniqueTeamNames[] = $teamName;
                break;
            }
        }
            
            $user=['name' => $this->request->getVar('name'),
            'college_name' => $this->request->getVar('college_name'),
            'team_name' => isset($uniqueTeamNames[0]) ? $uniqueTeamNames[0] : 'Default_Team_Name',
            'phone_number' => $this->request->getVar('phone_number'),
            'email' => $this->request->getVar('email'),
            'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT),
            'user_type' => 1,
            'otp' => $otp,
            'otp_created_at' => date('Y-m-d H:i:s', $otpCreatedAt), // Save the OTP creation time
            'active' => 0,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
            ];
            $regemail=$user['email'];
            $session->setFlashdata('regemail', $regemail);
            print_r($session->getFlashdata('regemail'));
           
           $userId = $users->save($user);
            if ($userId) {
                //mail integration 
                $email = \Config\Services::email();

                
                $email->setFrom('c191542709@gmail.com', 'Agnisia');
                $email->setTo($regemail);
                $email->setSubject('Registration succesfull for AGNISIA-2K24');
                $viewData['user'] = $user; // Pass data to the view
                $message = view('app/email/welcomemail', $viewData);
                $email->setMessage($message);
                $email->send();
                // If user created successfully
                // Redirect to login page and return a success message
                // Set flash data
                
                return redirect()->to('verify-email')->with('success', 'User created successfully. Please check your email for OTP verification.');
            } else {
                // If user creation failed
                // Return a failure message
                return $this->respondCreated([
                    'status' => 0,
                    'message' => 'User not created successfully',
                ]);
            }
        }
        // return $this->respond(['users' => $users->findAll()], 200);
    }

    //email verification function
    public function verify_email_view(){
        return view('app/register/email_verify');

    }
    public function verifyOTP()
    {
        $session = session();
        // Retrieve regemail from session
        $regemail = $session->getFlashdata('regemail');
        // if (!$regemail) {
        //     // If regemail not found in session, handle accordingly
        //     return redirect()->back()->withInput()->with('error', 'Regemail not found in session.');
        // }
        
        
        $otp = $this->request->getVar('otp');
        print_r($otp);

        // Retrieve user with matching email
        $user = (new UserModel())->where('email', $regemail)->first();
        print_r($user);

        if ($user && $user['otp'] === $otp) {
            // Check if OTP is still valid (within 10 minutes)
            $otpCreatedAt = strtotime($user['otp_created_at']);
            $currentTime = time();
            $timeDifference = $currentTime - $otpCreatedAt;
            $otpValidityPeriod = 10 * 60; // 10 minutes in seconds

            if ($timeDifference <= $otpValidityPeriod) {
                // Mark user as active
                $user->active = 1;
                $user->save();

                // Redirect to login page
                return redirect()->to('login')->with('success', 'OTP verified successfully. You can now login.');
            } else {
                // If OTP has expired
                // return redirect()->back()->withInput()->with('error', 'OTP has expired. Please generate a new OTP.');
                return $this->respondCreated([
                    'status' => 0,
                    'message' => 'expired',
                ]);
            }
        } else {
            // If OTP verification failed
            // return redirect()->back()->withInput()->with('error', 'Invalid OTP. Please try again.');
            return $this->respondCreated([
                    'status' => 0,
                    'message' => 'Invalid',
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
