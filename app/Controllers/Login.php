<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\UserModel;


class Login extends BaseController
{
    
    private $user;

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
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');

        // Validate email and password
        // $validation = $this->validate([
        //     'email' => 'required|valid_email',
        //     'password' => 'required'
        // ]);

        // if (!$validation) {
        //     return redirect()->to('app/login/login2')->withInput()->with('validation', $this->validator);
        // }

        // Check if the user exists
        $user = $this->userModel->where('email', $email)->first();

        if ($user && password_verify($password, $user['password'])) {
            // Login successful
            // You can set session variables or perform other actions as needed

            return redirect()->to('/landingpage/landing-page'); // Redirect to the dashboard or any other page
        } else {
            // Login failed
            return redirect()->to('/')->withInput()->with('error', 'Invalid email or password');
        }
    }
    }
