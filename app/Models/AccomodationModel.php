<?php

namespace App\Models;

use CodeIgniter\Model;

class AccomodationModel extends Model
{
    protected $table            = 'accomodation';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['user_id', 'numofboys', 'numofgirls', 'team_name','emg_contact','req_food','agree_tandm', 'created_at', 'updated_at'];

    protected bool $allowEmptyInserts = false;

    protected $belongsTo = [
        'user' => [
            'model' => 'UserModel', 
            'foreign_key' => 'user_id',
        ],
    ];
    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];
}
