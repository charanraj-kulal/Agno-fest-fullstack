<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\UserModel;

class AdminController extends BaseController
{   
    private $user;
    
    public function __construct()
    {
            $this->user = new UserModel();
       
        if (session()->get('user_type') != "2") {
            echo view('app/common/access_denied');
            exit;
        }
    }


    public function index()
    {
        $user = new UserModel();
        $data['users'] = $user->findAll();
      return view("app/admin/dashboard",$data);
    }
    // public function update($id = null)
    // {
    //     $user = $this->user->find($id);
    //     $getInput = $this->request->getBody();
    //     parse_str($getInput, $data);
    //     $site = [
    //         'id'                    => $id,
    //         // 'company_id'            => 1,
    //         'name'             => $user['name'],
    //         'college_name'     => $user['owner_name'],
    //         'email'            => $user['email'],

            
    //     ];

    // }

    public function update($id = null)
    {
        if ($this->request->getMethod() === 'post') {
            
            $userId = $this->request->getPost('user_id');

            
            $userRole = $this->request->getPost('user_role');

           
            $userModel = new UserModel();
            $userModel->update($userId, ['user_type' => $userRole]);

            // Redirect back to the page where the form was submitted
            return redirect()->back()->with('success', 'User role updated successfully.');
        } else {
            // If it's not a POST request, redirect back to the page where the form was submitted
            return redirect()->back()->with('error', 'Invalid request method.');
        }
    }

    public function delete($id = null)
    {
        
        $user = $this->user->find($id);

        if ($user) {
            $response = $this->user->delete($id);

            return redirect()->to(base_url('dashboard'));
            return $this->fail('Sorry! Not deleted');
        }

        
    }

    

}
