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
    public function register()
    {
        // $session = session();

        // Check if the user is logged in
        // if (session()->get('isLoggedIn')) {
        //     // Get the user ID from the session
        //     $userId = $session->get('id');

        //     // Now you can use this user ID to create data in your table, assuming your table has a foreign key column named 'user_id'
        //     $User = new UserModel();
            $Event = new EventregModel();
            $eventdata = [

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
            'video_mem_2' => $this->request->getVar('video-mem1'),
            'video_mem_contact_2' => $this->request->getVar('video-mem2-con2'),
            'quiz_mem_1' => $this->request->getVar('quiz-mem1'),
            'quiz_mem_contact_1' => $this->request->getVar('quiz-mem1-con1'),
            'quiz_mem_2' => $this->request->getVar('quiz-mem1'),
            'quiz_mem_contact_2' => $this->request->getVar('quiz-mem2-con2'),
            'web_mem_1' => $this->request->getVar('web-mem1'),
            'web_mem_contact_1' => $this->request->getVar('web-mem1-con1'),
            'web_mem_2' => $this->request->getVar('web-mem1'),
            'web_mem_contact_2' => $this->request->getVar('web-mem2-con2'),
            'thunt_mem_1' => $this->request->getVar('hunt-mem1'),
            'thunt_mem_contact_1' => $this->request->getVar('hunt-mem1-con1'),
            'thunt_mem_2' => $this->request->getVar('hunt-mem1'),
            'thunt_mem_contact_2' => $this->request->getVar('hunt-mem2-con2'),
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ];
        $eventId=$Event->save($eventdata);
        if ($eventId) {
             return $this->respondCreated([
                    'status' => 1,
                    'message' => 'User  created successfully',
                ]);
            } else {
                // If user creation failed
                // Return a failure message
                // return redirect()->back()->with('error', 'Sorry! User not created');
                
            }

        //     // Assuming you have a method in your model to insert data with the user ID
        //     $insertedId = $this->insertWithUserId($Event,$userId, $eventdata);
        //     if ($insertedId) {
        //         // If user created successfully
        //         // Redirect to login page and return a success message
        //         return redirect()->to('dashboard')->with('success', 'Event saved successfully');
        //     }

        //     // Handle success or failure
        // } else {
        //     // User is not logged in, handle accordingly
        // }
        
    }
    // protected function insertWithUserId(EventregModel $Event, $userId, $eventdata)
    // {
    //     // Append user ID to your data array
    //     $eventdata['user_id'] = $userId;

    //     // Insert data into the database using the model
    //     if ($Event->insert($eventdata)) {
    //     return true; // Successful insertion
    //     } else {
    //         print("hello");
    //         return false;
    //     }
    // }
}
