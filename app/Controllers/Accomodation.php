<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\UserModel;
use App\Models\AccomodationModel;

class Accomodation extends BaseController
{
    public function index()
    {
        //
    }
    public function accomodate()
    {
        $session = session();
        $Accom = new AccomodationModel();
        $User=new UserModel();
    
        // Check if the user is enrolled for events
        // if ($session->get('isEnrolled')) {
            // Get the user ID from the session
            $userId = $session->get('id');
            $teamId = $session->get('team_id');
            
            // Prepare data to be inserted
            $accomData = [
                'user_id' => $userId,
                'numofboys' => $this->request->getVar('numofboys'),
                'numofgirls' => $this->request->getVar('numofgirls'),
                'team_name' => $teamId,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ];

            // Insert data into the table
            $inserted = $Accom->insert($accomData);

            if ($inserted) {
                // Data insertion successful
                return $this->response->setJSON([
                        'success' => true,
                        'message' => 'Data for accomodation succesfully added!!'
                    ]);
            } else {
                // Data insertion failed
                return $this->response->setJSON([
                        'success' => false,
                        'message' => 'Failed to add Data for accomodation!!'
                    ]);
            }
        // } else {
        //     // User is not logged in
        //     return $this->response->setJSON([
        //         'status' => 'error',
        //         'message' => 'Please enroll first to get accomodation.'
        //     ]);
        // }
    
    }
}
