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

    public function getAllUserData()
    {
        $userModel = new UserModel();
    $users = $userModel->findAll(); // Fetch all users from the database

    // Convert users data to array
    $userData = [];
    foreach ($users as $user) {
        $userData[] = [
            'name' => esc($user['name']),
            'college_name' => esc($user['college_name']),
            'email' => esc($user['email']),
            'team_name' => esc($user['team_name']),
            'phone_number' => esc($user['phone_number']),
            'user_type' => $user['user_type'],
            'isenrolled' => $this->isEnrolled($user['id']),
            'accommodation_needed' => $this->isAccommodationNeeded($user['id'])
        ];
    }

    return $this->response->setJSON($userData); // Return users data as JSON
}

// Function to check if user is enrolled
protected function isEnrolled($userId)
{
    $eventregModel = new EventregModel();
    $eventRegData = $eventregModel->where('user_id', $userId)->first();
    return $eventRegData && $eventRegData['isenrolled'] == 1;
}

// Function to check if user needs accommodation
protected function isAccommodationNeeded($userId)
{
    $accomodationModel = new AccomodationModel();
    $accomodationData = $accomodationModel->where('user_id', $userId)->first();
    return $accomodationData ? true : false;
}
        
  
    public function logout(){
        session()->destroy();
        return view('app/login/login2');
    }
}
