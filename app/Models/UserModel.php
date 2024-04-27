<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table            = 'users';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['name', 'college_name', 'team_name','phone_number', 'email', 'password', 'otp', 'user_type', 'active','otp_created_at', 'created_at', 'updated_at'];

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

    public function getUserById($userId)
    {
        return $this->where('id', $userId)->first();
    }
    public function updateUserPassword($userId, $newPassword)
    {
        // Update the user's password in the database
        $data = [
            'password' => $newPassword
        ];
        $this->set($data)->where('id', $userId)->update();

        // Check if the update was successful
        return $this->affectedRows() > 0;
    }
    public function deleteUser($userId)
    {
        // Delete user record from the database
        $this->where('id', $userId)->delete();

        // You may also need to delete associated data from other tables if necessary

        // Check if the user record was successfully deleted
        return $this->db->affectedRows() > 0;
    }
}

