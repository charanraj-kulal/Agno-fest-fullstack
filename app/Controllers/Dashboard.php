<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Dashboard extends BaseController
{
    public function index()
    {
        return view('app/global/admin_dashboard');
    }
    public function logout(){
        session()->destroy();
        return view('app/login/login2');
    }
}
