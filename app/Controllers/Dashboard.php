<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Dashboard extends BaseController
{
    public function index()
    {
        if($_SESSION['user_type']=="2"){
            return redirect()->to(base_url('admin'));
        }
        elseif($_SESSION['user_type'] == "1"){

            return redirect()->to(base_url('student'));
        }
    }
    public function logout(){
        session()->destroy();
        return view('app/login/login2');
    }
}
