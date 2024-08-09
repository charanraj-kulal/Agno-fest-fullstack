<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\API\ResponseTrait;
use App\Models\UserModel;
use App\Models\EventregModel;


class EventRegister extends BaseController
{
    use ResponseTrait;
    public function index()
    {
        
    }
    public function __construct()
    {
        $this->session = \Config\Services::session(); // Load session service
    }
    
    public function register()
    {
        $session = session();
        $Event = new EventregModel();
        $UserModel = new UserModel();
        $validation = \Config\Services::validation();

        // Check if the user is logged in
        if ($session->get('isLoggedIn')) {
            // Get the user ID from the session
            $userId = $session->get('id');
            $userData = $UserModel->find($userId);

            // Get the team name from the user data
            $teamName = $userData['team_name'];


             // Ensure team name is not empty
            if (empty($teamName)) {
                return $this->response->setJSON([
                    'success' => false,
                    'message' => 'Team name is empty!'
                ]);
            }

            $existingData = $Event->where('user_id', $userId)->first();
            // Data already exists, update the existing entry
            $eventdata = [
                'user_id' => $userId,
                'team_name' => $teamName,
                'coding_mem_1' => $this->request->getVar('coding-mem1'),
                'coding_mem_contact_1' => $this->request->getVar('coding-mem1-con1'),
                'coding_mem_2' => $this->request->getVar('coding-mem2'),
                'coding_mem_contact_2' => $this->request->getVar('coding-mem2-con2'),
                'game_mem_1' => $this->request->getVar('gaming-mem1'),
                'game_mem_contact_1' => $this->request->getVar('gaming-mem1-con1'),
                'game_mem_2' => $this->request->getVar('gaming-mem2'),
                'game_mem_contact_2' => $this->request->getVar('gaming-mem2-con2'),
                'game_mem_3' => $this->request->getVar('gaming-mem3'),
                'game_mem_contact_3' => $this->request->getVar('gaming-mem3-con3'),
                'game_mem_4' => $this->request->getVar('gaming-mem4'),
                'game_mem_contact_4' => $this->request->getVar('gaming-mem4-con4'),
                'itmanager_mem_1' => $this->request->getVar('it-mem1'),
                'itmanager_mem_contact_1' => $this->request->getVar('it-mem1-con1'),
                'photo_mem_1' => $this->request->getVar('photo-mem1'),
                'photo_mem_contact_1' => $this->request->getVar('photo-mem1-con1'),
                'video_mem_1' => $this->request->getVar('video-mem1'),
                'video_mem_contact_1' => $this->request->getVar('video-mem1-con1'),
                'video_mem_2' => $this->request->getVar('video-mem2'),
                'video_mem_contact_2' => $this->request->getVar('video-mem2-con2'),
                'quiz_mem_1' => $this->request->getVar('quiz-mem1'),
                'quiz_mem_contact_1' => $this->request->getVar('quiz-mem1-con1'),
                'quiz_mem_2' => $this->request->getVar('quiz-mem2'),
                'quiz_mem_contact_2' => $this->request->getVar('quiz-mem2-con2'),
                'web_mem_1' => $this->request->getVar('web-mem1'),
                'web_mem_contact_1' => $this->request->getVar('web-mem1-con1'),
                'web_mem_2' => $this->request->getVar('web-mem2'),
                'web_mem_contact_2' => $this->request->getVar('web-mem2-con2'),
                'thunt_mem_1' => $this->request->getVar('hunt-mem1'),
                'thunt_mem_contact_1' => $this->request->getVar('hunt-mem1-con1'),
                'thunt_mem_2' => $this->request->getVar('hunt-mem2'),
                'thunt_mem_contact_2' => $this->request->getVar('hunt-mem2-con2'),
                'isenrolled' => 1,
                'updated_at' => date('Y-m-d H:i:s')
            ];

            if ($existingData) { 
                // Save the updated entry
                
                $updated = $Event->update($existingData['id'], $eventdata);

                if ($updated) {
                    // Data update successful
                    return $this->response->setJSON([
                        'success' => true,
                        'message' => 'Data updated successfully!!'
                    ]);
                } else {
                    // Data update failed
                    return $this->response->setJSON([
                        'success' => false,
                        'message' => 'Failed to update data!!'
                    ]);
                }
            }else{
                $eventdata['created_at'] = date('Y-m-d H:i:s');
                // Insert data into the database
                $inserted = $Event->insert($eventdata);

                if ($inserted) {
                    // Data insertion successful
                
                    return $this->response->setJSON([
                        'success' => true,
                        'message' => 'Data added successfully!!'
                    ]);
                    $eventsessdata = [
                        // 'team_name' => $teamName, // Assuming team_name is team_id
                        'isEnrolled' => true,
                    ];
                    $session = session();
                    session()->set($eventsessdata);

                } else {
                    // Data insertion failed
                    return $this->response->setJSON([
                        'success' => false,
                        'message' => 'Failed to add data!!'
                    ]);
                }
            }

        } else {
            // User is not logged in
            return $this->response->setJSON([
                'success' => false,
                'message' => 'Login first to enroll for event!!'
            ]);
        }
    }
    public function fetchEnrollData()
    {
        // Load the required model
        $eventModel = new EventregModel();
        $session = session();
        // Fetch data from the database
        $data = $eventModel->where('user_id', $this->session->get('id'))->first();

        if ($data) {
            // If data is found, send it as JSON response
            return $this->response->setJSON([
                'success' => true,
                'data' => $data
            ]);
        } else {
            // If no data found, send error response
            return $this->response->setJSON([
                'success' => false,
                'message' => 'No data found'
            ]);
        }
    }

}
