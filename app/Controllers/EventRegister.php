<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class EventRegister extends BaseController
{
    public function index()
    {
        return view("app/global/admin_dashboard");
    }
}
