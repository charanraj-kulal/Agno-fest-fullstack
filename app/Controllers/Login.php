<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\UserModel;


class Login extends BaseController
{
    
    
    public $session;
   
    public function __construct()
    {
        
        
    }
    public function index()
    {
        
        return view('app/login/login2');
        $data = [];
        
        // foreach ($users as $user) {
        //     $data[] = array(
        //         "id" => $user['id'],
        //         "name" => $user['name'],
        //         "college_name" => $user['college_name'],
        //         "phone_number" => $user['phone_number'],
        //         "email" => $user['email'],
        //         "user_type" => $user['user_type'],
                
        //     );
        // }
    }

    
    public function authenticate()
{
    $session = session();
    $users = new UserModel();
    $email = $this->request->getVar('email');
    $password = $this->request->getVar('password');
    
    // Check if the user exists
    $user = $users->where('email', $email)->first();
    
    if ($user ){
        echo($password);
        echo($user['password']);
        if(!password_verify($password, $user['password'])) {
            
            
            // Password is correct, set user session
            $this->setUserSession($user);
            return redirect()->to(base_url('dashboard'));
            
        } else {
            // Incorrect email or password
            echo("Invalid");
            // return redirect()->back()->withInput()->with('error', 'Invalid email or password.');
        }
    }
}

    private function setUserSession($user)
    {
        $users = [
            'id' => $user['id'],
            'name' => $user['name'],
            'phone_number' => $user['phone_number'],
            'email' => $user['email'],
            'isLoggedIn' => TRUE,
            "user_type" => $user['user_type'],
        ];

        session()->set($users);
        $session = session();
        $session->setFlashdata('success', 'Login Successful!');

        return true;
    }
   
    }
