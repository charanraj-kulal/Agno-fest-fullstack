<?php

namespace App\Controllers;

use App\Models\UserModel;
use CodeIgniter\API\ResponseTrait;
use CodeIgniter\RESTful\ResourceController;
use \Firebase\JWT\JWT;
use \Firebase\JWT\KEY;

class User extends ResourceController
{
    use ResponseTrait;
    public $session;
    private $users;


     public function __construct()
    {
        $this->session = \Config\Services::session();
        $this->users = new UserModel();
        
    }
     public function register()
    {
       
        return view('app/register/register');
    }
    public function create()
    {
        
       
         $is_email = $this->users->where('email', $this->request->getVar('email'))->first();
        if ($is_email) {
            return $this->respondCreated([
                'status' => 0,
                'message' => 'Email already exist'
            ]);
        } else {
            
            $user=['name' => $this->request->getVar('name'),
            'college_name' => $this->request->getVar('college_name'),
            'team_name' => "giga",
            'phone_number' => $this->request->getVar('phone_number'),
            'email' => $this->request->getVar('email'),
            'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT),
            'user_type' => 1,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
            ];
           $userId = $this->users->insert($user);
            if ($userId) {
                // If user created successfully
                // Redirect to login page and return a success message
                return redirect()->to('jwtlogin')->with('success', 'User created successfully');
            } else {
                // If user creation failed
                // Return a failure message
                return $this->respondCreated([
                    'status' => 0,
                    'message' => 'User not created successfully',
                ]);
            }
        }
        return $this->respond(['users' => $users->findAll()], 200);
    }
    public function login_view(){
        return view('app/login/login2');
        $data = [];
    }
    public function login()
    {
        $user = new UserModel();
        $email = $this->request->getVar('email');
        $password = $this->request->getVar('password');
        $is_email =  $user->where('email', $email)->first();
        print_r($is_email);
        if ($is_email) {
        
            //  $hashed_password = $this->users->;
            // $hashed_entered_password = password_hash($password, PASSWORD_DEFAULT);
            // echo($hashed_entered_password);
            $verify_password = password_verify($password, $is_email['password']);
            // $verify_password = password_verify($entered_password, $hashed_password);
            
            if ($verify_password) {
                $key = "hilalahmadkhanformpakistan";
                $payload = [
                    "iss" => "localhost",
                    "aud" => "localhost",
                    // we can also use exprire time in seconds
                    "data" => [

                        'user_id' => $is_email['id'],
                        'name' => $is_email['name'],
                        'email' => $is_email['email']
                    ]
                     
                ];
                $jwt = JWT::encode($payload, $key, 'HS256');
                $this->setUserSession($is_email);
                return redirect()->to('dashboard')->with('success', 'Login successfully');

                // return $this->respondCreated([
                //     'status' => 1,
                //     'jwt' => $jwt,
                //     'message' => 'User Login Successfully',
                // ]);
                    
            } else {
                return $this->respondCreated([
                    
                    'status' => 0,
                    'message' => 'Invalid Email and Password',
                ]);
            }
        } else {
            return $this->respondCreated([
                'status' => 0,
                'message' => 'Email is not found',
            ]);
        }
    }
    private function setUserSession($user)
    {
        $users = [
            'id' => $user['id'],
            'name' => $user['name'],
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
