<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class StudentController extends BaseController
{

    public function __construct()
    {
        if (session()->get('user_type') != "1") {
            echo 'Access denied';
            exit;
        }
    }
    public function index()
    {
        return view("app/student/dashboard");
    }
}
