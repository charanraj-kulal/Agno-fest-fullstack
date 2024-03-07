<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\UserModel;

class Dashboard extends BaseController
{
    public function index()
    {
        // $user = new UserModel();
        // $data['users'] = $user->findAll();


        if($_SESSION['user_type']=="2"){
            return redirect()->to(base_url('admin'));
        }
        elseif($_SESSION['user_type'] == "1"){

            return redirect()->to(base_url('admin'));
        }
    }
    public function logout(){
        session()->destroy();
        return view('app/login/login2');
    }
}
