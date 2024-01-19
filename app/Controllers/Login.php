<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Login extends BaseController
{

        public function index()
        {
            // Load the login view
            return view('app/login/login2');
            
           

        }
    
        public function create()
        {
            // Load necessary helpers
            helper(['form']);
    
            // Get input data from the form
            $data = [
                'name'          => $this->request->getPost('name'),
                'college_name'  => $this->request->getPost('college_name'),
                'phone_number'  => $this->request->getPost('phone_number'),
                'email'         => $this->request->getPost('email'),
                'password'      => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT),
                'user_type'     => $this->request->getPost('user_type'),
                'created_at'    => date('Y-m-d H:i:s'),
                'updated_at'    => date('Y-m-d H:i:s'),
            ];
    
            // Simple validation
            $validationRules = [
                'name'          => 'required|min_length[3]|max_length[50]',
                'college_name'  => 'required|min_length[3]|max_length[50]',
                'phone_number'  => 'required|numeric|exact_length[10]',
                'email'         => 'required|valid_email',
                'password'      => 'required|min_length[8]',
                'user_type'     => 'required|in_list[admin,user]',
            ];
    
            if (!$this->validate($validationRules)) {
                // If validation fails, return to the login view with validation errors
                return view('login/login', ['validation' => $this->validator]);
            }
    
            // Insert data into the database
            $model = new \App\Models\LoginModel(); // Replace with your actual model name
            $model->insert($data);
    
            // Redirect to the login page or wherever you want
            return redirect()->to('/login');
        }
    
        public function read()
        {
            // Load the model
            $model = new \App\Models\LoginModel(); // Replace with your actual model name
    
            // Fetch all records from the database
            $data['users'] = $model->findAll();
    
            // Pass the data to the view
            return view('login/read', $data);
        }
    }

