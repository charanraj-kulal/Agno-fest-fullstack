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
    

    

   

    

}
