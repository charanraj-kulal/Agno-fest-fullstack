<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class AdminController extends BaseController
{   public function __construct()
    {
        if (session()->get('user_type') != "2") {
            echo 'Access denied';
            exit;
        }
    }


    public function index()
    {
      return view("app/admin/dashboard");
    }
}
