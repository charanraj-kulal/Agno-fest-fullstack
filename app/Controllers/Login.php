<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\UserModel;


class Login extends BaseController
{
    
    private $user;
    public $session;
   
    public function __construct()
    {
        $this->userModel = new UserModel();
        
    }
    public function index()
    {
        
        return view('app/login/login2');
    }

    
    public function authenticate()
    {
        $data = [];

        // if ($this->request->getMethod() == 'post') {

        //     $rules = [
        //         'email' => 'required|min_length[6]|max_length[50]|valid_email',
        //         'password' => 'required|min_length[8]|max_length[255]|validateUser[email,password]',
        //     ];

        //     $errors = [
        //         'password' => [
        //             'validateUser' => "Email or Password didn't match",
        //         ],
        //     ];

        
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');
        
        
        // Check if the user exists
        $user = $this->userModel->where('email', $email)->first();
        
        //storing session values
        $this->setUserSession($user);
        return redirect()->to(base_url('dashboard'));
        
        
    }
    private function setUserSession($user)
    {
        $data = [
            'id' => $user['id'],
            'name' => $user['name'],
            'phone_number' => $user['phone_number'],
            'email' => $user['email'],
            'isLoggedIn' => true,
            "user_type" => $user['user_type'],
        ];

        session()->set($data);
        $session = session();
        $session->setFlashdata('success', 'Login Successful!');

        return true;
    }
   
    }
