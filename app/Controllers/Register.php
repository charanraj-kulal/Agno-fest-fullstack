<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\API\ResponseTrait;
use App\Models\UserModel;
use CodeIgniter\HTTP\ResponseInterface;

class Register extends BaseController
{
    use ResponseTrait;
    private $user;
    public $session;

    public function __construct()
    {
        $session = \Config\Services::session();
        $this->user = new UserModel();
        
    }

    public function success()
    {

        return view('app/landingpage/landing-page');
    }

    // Read all users
    public function index()
    {
       
        return view('app/register/register');
        // header('Access-Control-Allow-Origin: *');
        // header('Content-Type: application/json');
        // $users = $this->user->findAll();
        // $data = [];
        // foreach ($users as $user) {
        //     $data[] = array(
        //         "id" => $user['id'],
        //         "name" => $user['name'],
        //         "college_name" => $user['college_name'],
        //         "phone_number" => $user['phone_number'],
        //         "email" => $user['email'],
        //         "user_type" => $user['user_type'],
        //         "created_at" => $user['created_at'],
        //         "updated_at" => $user['updated_at']
        //     );
        // }
        // $result = array(
        //     "recordsTotal" => count($data),
        //     "data" => $data
        // );

        // return $this->respond($result);
    }

    // Read a specific user
    public function show($id = null)
    {
        $user = $this->user->find($id);

        if ($user) {
            return $this->respond($user);
        }

        return $this->failNotFound('Sorry! User not found');
    }

    // Create a new user
    public function create()
    {
        // $validation = $this->validate([
        //     // 'name' => 'required|max_length[255]',
        //     // 'college_name' => 'required|max_length[255]',
        //     // 'phone_number' => 'required|max_length[20]|numeric',
        //     // 'email' => 'required|valid_email',
        //     // 'password' => 'required',
        //     // 'user_type' => 'required',
        //     'name' => 'required',
        //     'college_name' => 'required',
        //     'phone_number' => 'required',
        //     'email' => 'required',
        //     'password' => 'required',
        //     'user_type' => 'required',
        //     // Add other validation rules as needed
        // ]);

        // if (!$validation) {
        //     return redirect()->back()->withInput()->with('validation', $this->validator);
        
        // }
         
        $this->session->set($user = [
            'name' => $this->request->getVar('name'),
            'college_name' => $this->request->getVar('college_name'),
            'phone_number' => $this->request->getVar('phone_number'),
            'email' => $this->request->getVar('email'),
            'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT),
            'user_type' => 1,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        

        $userId = $this->user->insert($user);

        if ($userId) {
            $user['id'] = $userId;
            return redirect()->to('login'); 
        }

        return redirect()->back()->with('error', 'Sorry! User not created');
    }
    // public function read()
    // {
    //     $users = $this->userModel->findAll();

    //     return view('register/user_list', ['users' => $users]);
    // }

    // Update user details
    public function update($id = null)
    {
        $user = $this->user->find($id);

        if (!$user) {
            return redirect()->to('/register')->with('error', 'User not found');
        }

        $validation = $this->validate([
            'name' => 'required|max_length[255]',
            'college_name' => 'required|max_length[255]',
            'phone_number' => 'required|max_length[20]|numeric',
            'email' => 'required|valid_email|is_unique[users.email, id, ' . $id . ']',
            'password' => 'required',
            'user_type' => 'required',
            // Add other validation rules as needed
        ]);

        if (!$validation) {
            return redirect()->back()->withInput()->with('validation', $this->validator);
        }

        $userUpdate = [
            'name' => $this->request->getVar('name'),
            'college_name' => $this->request->getVar('college_name'),
            'phone_number' => $this->request->getVar('phone_number'),
            'email' => $this->request->getVar('email'),
            'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT),
            'user_type' => $this->request->getVar('user_type'),
            'updated_at' => date('Y-m-d H:i:s')
        ];
        $newPassword = $this->request->getVar('password');
        if ($newPassword) {
            $updatedData['password'] = password_hash($newPassword, PASSWORD_BCRYPT);
        }

        $this->user->update($id, $userUpdate);

        return redirect()->to('/register')->with('success', 'User updated successfully');


    }
}
