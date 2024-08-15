<?php

namespace App\Controllers;

use App\Controllers\BaseController;

use App\Models\QualTeamModel;
use App\Models\EventregModel;

class QualTeams extends BaseController
{
    public function index()
    {
        $QualTeamModel = new QualTeamModel();
        $EventregModel = new EventregModel();
        $registeredTeams = $EventregModel->findAll();
        $qualifiedTeams = $QualTeamModel->first();

        return view('admin/dashboard', ['registeredTeams' => $registeredTeams,'qualifiedTeams' => $qualifiedTeams]);
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

        $existingRecord = $QualTeamModel->first();

         $saveData =([
            'user_id' => 1,
            'qual_code' => implode(', ', $data['qual_code'] ?? []),
            'qual_web' => implode(', ', $data['qual_web'] ?? []),
            'qual_game' => implode(', ', $data['qual_game'] ?? []),
            'qual_mad' => implode(', ', $data['qual_mad'] ?? []),
            'qual_thunt' => implode(', ', $data['qual_thunt'] ?? []),
            'qual_photo' => implode(', ', $data['qual_photo'] ?? []),
            'qual_quiz' => implode(', ', $data['qual_quiz'] ?? []),
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

         if ($existingRecord) {
            $saveData['id'] = $existingRecord['id'];
        }
          $result = $QualTeamModel->save($saveData);
        if ($result) {
            return $this->response->setJSON(['success' => true, 'message' => 'Qualified teams saved successfully']);
        } else {
            return $this->response->setJSON(['success' => false, 'message' => 'Failed to save qualified teams']);
        }
    }

    public function getQualifiedTeams()
    {
        $QualTeamModel = new QualTeamModel();
        $qualifiedTeams = $QualTeamModel->first();

        if (!$qualifiedTeams) {
            return $this->response->setJSON([]);
        }

        return $this->response->setJSON($qualifiedTeams);
    }
}