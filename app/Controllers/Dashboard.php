<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\UserModel;
use App\Models\EventregModel;
use App\Models\AccomodationModel;

class Dashboard extends BaseController
{
    public function __construct()
    {
        $this->session = \Config\Services::session(); // Load session service
    }
    
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
 $response = [
        'users' => $userData,
    ];

    // Return the response as JSON
    return $this->response->setJSON($response);
}
//function for all accommodation reports
public function getAllAccommodationData()
{
    $accommodationModel = new AccomodationModel();
    $accommodations = $accommodationModel->findAll(); // Fetch all accommodation data

    // Convert accommodation data to array
    $accommodationData = [];
    foreach ($accommodations as $accommodation) {
        $accommodationData[] = [
            'numofboys' => esc($accommodation['numofboys']),
            'numofgirls' => esc($accommodation['numofgirls']),
            'team_name' => esc($accommodation['team_name']),
            
            // Add other fields here
        ];
    }

    $response = [
        'accommodations' => $accommodationData,
    ];

    // Return the response as JSON
    return $this->response->setJSON($response);
}


//function for all event reports
public function getAllEventRegistrationData()
{
    $eventregModel = new EventregModel();
    $eventRegistrations = $eventregModel->findAll(); // Fetch all event registrations

    // Convert event registration data to array
    $eventRegData = [];
    foreach ($eventRegistrations as $event) {
        $eventRegData[] = [
          
            'team_name' => esc($event['team_name']),
            'coding_mem_1' => esc($event['coding_mem_1']),
            'coding_mem_contact_1' => esc($event['coding_mem_contact_1']),
            'coding_mem_2' => esc($event['coding_mem_2']),
            'coding_mem_contact_2' => esc($event['coding_mem_contact_2']),
            'quiz_mem_1' => esc($event['quiz_mem_1']),
            'quiz_mem_contact_1' => esc($event['quiz_mem_contact_1']),
            'quiz_mem_2' => esc($event['quiz_mem_2']),
            'quiz_mem_contact_2' => esc($event['quiz_mem_contact_2']),
            'web_mem_1' => esc($event['web_mem_1']),
            'web_mem_contact_1' => esc($event['web_mem_contact_1']),
            'web_mem_2' => esc($event['web_mem_2']),
            'web_mem_contact_2' => esc($event['web_mem_contact_2']),
            'game_mem_1' => esc($event['game_mem_1']),
            'game_mem_contact_1' => esc($event['game_mem_contact_1']),
            'game_mem_2' => esc($event['game_mem_2']),
            'game_mem_contact_2' => esc($event['game_mem_contact_2']),
            'game_mem_3' => esc($event['game_mem_3']),
            'game_mem_contact_3' => esc($event['game_mem_contact_3']),
            'game_mem_4' => esc($event['game_mem_4']),
            'game_mem_contact_4' => esc($event['game_mem_contact_4']),
            'itmanager_mem_1' => esc($event['itmanager_mem_1']),
            'itmanager_mem_contact_1' => esc($event['itmanager_mem_contact_1']),
            'photo_mem_1' => esc($event['photo_mem_1']),
            'photo_mem_contact_1' => esc($event['photo_mem_contact_1']),
            'video_mem_1' => esc($event['video_mem_1']),
            'video_mem_contact_1' => esc($event['video_mem_contact_1']),
            'video_mem_2' => esc($event['video_mem_2']),
            'video_mem_contact_2' => esc($event['video_mem_contact_2']),
            'thunt_mem_1' => esc($event['thunt_mem_1']),
            'thunt_mem_contact_1' => esc($event['thunt_mem_contact_1']),
            'thunt_mem_2' => esc($event['thunt_mem_2']),
            'thunt_mem_contact_2' => esc($event['thunt_mem_contact_2']),
            // Add other fields here
        ];
    }

    $response = [
        'events' => $eventRegData,
    ];

    // Return the response as JSON
    return $this->response->setJSON($response);
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

// change password 
public function changePassword()
{
    $userModel = new UserModel();
    // Get current user ID or any identifier
    $userId =$this->session->get('id');
    
    // Get current password, new password, and confirm password from the request
    $currentPassword = $this->request->getPost('currentPassword');
    $newPassword = $this->request->getPost('newPassword');
    $confirmPassword = $this->request->getPost('confirmPassword');

    // Check if the current password, new password, and confirm password are provided
    if (!$currentPassword || !$newPassword || !$confirmPassword) {
        return $this->response->setJSON([
            'success' => false,
            'message' => 'Please fill in all fields.'
        ]);
    }

    // Check if the new password matches the confirm password
    if ($newPassword !== $confirmPassword) {
        return $this->response->setJSON([
            'success' => false,
            'message' => 'New password and confirm password do not match.'
        ]);
    }

    // Check if the current password matches the one stored in the database
    $currentUser = $userModel->getUserById($userId); // Assuming you have a method to fetch user by ID
    if (!password_verify($currentPassword, $currentUser['password'])) {
        // Current password is incorrect
        return $this->response->setJSON([
            'success' => false,
            'message' => 'Current password is incorrect.'
        ]);
    }

    // Update the user's password with the new password
    $hashedPassword = password_hash($newPassword, PASSWORD_DEFAULT);
    $updateResult = $userModel->updateUserPassword($userId, $hashedPassword); // Assuming you have a method to update user password
    if ($updateResult) {
        // Password updated successfully
        return $this->response->setJSON([
            'success' => true,
            'message' => 'Password changed successfully.'
        ]);
    } else {
        // Failed to update password
        return $this->response->setJSON([
            'success' => false,
            'message' => 'Failed to change password. Please try again later.'
        ]);
    }
}

public function closeAccount()
{
    $userModel = new UserModel();
    // Get current user ID
    $userId =$this->session->get('id');

    // Perform action to delete user account and associated data
    $deleteResult =$userModel->deleteUser($userId);

    if ($deleteResult) {
        // Account deleted successfully
        return $this->response->setJSON([
            'success' => true,
            'message' => 'Your account has been deleted successfully.'
        ]);
    } else {
        // Failed to delete account
        return $this->response->setJSON([
            'success' => false,
            'message' => 'Failed to delete account. Please try again later.'
        ]);
    }
}

        
  
    public function logout(){
        session()->destroy();
        return view('app/login/login2');
    }
}
