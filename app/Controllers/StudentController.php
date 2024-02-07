<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class StudentController extends BaseController
{

    public function __construct()
    {
        if (session()->get('user_type') != "1") {
            echo view('app/common/access_denied');
            // return view("app/common/access_denied");
            
            exit;
        }
    }
    public function index()
    {
        return view("app/student/dashboard");
    }
}
