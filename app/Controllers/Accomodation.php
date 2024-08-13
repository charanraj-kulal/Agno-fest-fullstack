<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\UserModel;
use App\Models\EventregModel;
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
    $Event = new EventregModel();
    $Accom = new AccomodationModel();
    $User = new UserModel();

    $userId = $session->get('id');
    $teamId = $session->get('team_name');

    $eventEnrollData = $Event->where('user_id', $userId)->first();

    if($eventEnrollData && $eventEnrollData['isenrolled'] == 1){
        $existingAccom = $Accom->where('user_id', $userId)->first();

        $accomData = [
            'user_id' => $userId,
            'numofboys' => $this->request->getVar('numofboys'),
            'numofgirls' => $this->request->getVar('numofgirls'),
            'team_name' => $teamId,
            'emg_contact' => $this->request->getVar('emg_contact'),
            'req_food' => $this->request->getVar('req_food'),
            'agree_tandm' => $this->request->getVar('agree_tandm'),
            'updated_at' => date('Y-m-d H:i:s')
        ];

        if ($existingAccom) {
            $Accom->update($existingAccom['id'], $accomData);
            return $this->response->setJSON([
                'success' => true,
                'message' => 'Accommodation data updated successfully!'
            ]);
        } else {
            $accomData['created_at'] = date('Y-m-d H:i:s');
            $inserted = $Accom->insert($accomData);

            if ($inserted) {
                return $this->response->setJSON([
                    'success' => true,
                    'message' => 'Accommodation data added successfully!'
                ]);
            } else {
                return $this->response->setJSON([
                    'success' => false,
                    'message' => 'Failed to add accommodation data!'
                ]);
            }
        }
    } else {
        return $this->response->setJSON([
                'success' => false,
                'message' => 'Enroll first to avail accommodation!'
        ]);
    }
}
  public function fetchAccomData()
    {
        // Load the required model
        $Accom = new AccomodationModel();
        $session = session();
        // Fetch data from the database
        $data = $Accom->where('user_id', $session->get('id'))->first();

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
