<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class LandingPage extends BaseController
{
    public function index()
    {
        return view('app/global/header')
        // . view('app/global/sidebar')
        . view('app/landingpage/landing-page')
        . view('app/global/footer');
    }
    public function aboutus()
    {
        return view('app/global/header')
        // . view('app/global/sidebar')
        . view('app/common/aboutus')
        . view('app/global/footer');
    }
}
