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
       
        
    }


    public function index()
    {
        $user = new UserModel();
        $data['users'] = $user->findAll();
      return view("app/admin/dashboard",$data);
    }
    

    

   

    

}
