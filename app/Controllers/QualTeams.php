<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\QualTeamModel;
use App\Models\EventregModel;

class QualTeams extends BaseController
{
    public function index()
    {
        $EventregModel = new EventregModel();
        $registeredTeams = $EventregModel->findAll();

        return view('admin/dashboard', ['registeredTeams' => $registeredTeams]);
    }

    public function getRegisteredTeams()
    {
        $EventregModel = new EventregModel();
        $registeredTeams = $EventregModel->findAll();

        return $this->response->setJSON($registeredTeams);
    }

    public function saveQualifiedTeams()
    {
        $QualTeamModel = new QualTeamModel();
        $data = $this->request->getJSON(true);

        $result = $QualTeamModel->save([
            'user_id' => $this->request->getVar('user_id'),
            'qual_code' => json_encode($data['qual_code'] ?? []),
            'qual_web' => json_encode($data['qual_web'] ?? []),
            'qual_game' => json_encode($data['qual_game'] ?? []),
            'qual_thunt' => json_encode($data['qual_thunt'] ?? []),
            'qual_photo' => json_encode($data['qual_photo'] ?? []),
            'qual_quiz' => json_encode($data['qual_quiz'] ?? []),
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        if ($result) {
            return $this->response->setJSON(['success' => true, 'message' => 'Qualified teams saved successfully']);
        } else {
            return $this->response->setJSON(['success' => false, 'message' => 'Failed to save qualified teams']);
        }
    }
}