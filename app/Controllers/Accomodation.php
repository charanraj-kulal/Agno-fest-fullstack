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
        $User = new UserModel();

        // Get the user ID from the session
        $userId = $session->get('id');
        $teamId = $session->get('team_name');

        // Check if accommodation data already exists for the current user
        $existingAccom = $Accom->where('user_id', $userId)->first();

        // Prepare data to be inserted or updated
        $accomData = [
            'user_id' => $userId,
            'numofboys' => $this->request->getVar('numofboys'),
            'numofgirls' => $this->request->getVar('numofgirls'),
            'team_name' => $teamId,
            'updated_at' => date('Y-m-d H:i:s')
        ];

        if ($existingAccom) {
            // Update existing accommodation data
            $Accom->update($existingAccom['id'], $accomData);
            return $this->response->setJSON([
                'success' => true,
                'message' => 'Accommodation data updated successfully!'
            ]);
        } else {
            // Insert new accommodation data
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
    }

}
