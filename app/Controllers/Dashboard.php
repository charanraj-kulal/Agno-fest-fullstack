<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\UserModel;
use App\Models\EventregModel;
use App\Models\AccomodationModel;

class Dashboard extends BaseController
{
    public function index()
    {
        $userModel = new UserModel();
        $eventregModel = new EventregModel(); // Instantiate EventregModel
        $accomodationModel = new AccomodationModel(); // Instantiate AccomodationModel
        
        $users = $userModel->findAll(); // Fetch all users from the database
        
       

        $data = [
            'users' => $users,
            
            'eventregModel' => $eventregModel,
            'accomodationModel' => $accomodationModel
        ];

        return view('app/admin/dashboard', $data); // Pass the data to the view
    }


        
  
    public function logout(){
        session()->destroy();
        return view('app/login/login2');
    }
}
