<?php

namespace App\Models;

use CodeIgniter\Model;

class EventregModel extends Model
{
    protected $table            = 'event_registration';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields = [
        'user_id',
        'team_name',
        'coding_mem_1',
        'coding_mem_contact_1',
        'coding_mem_2',
        'coding_mem_contact_2',
        'quiz_mem_1',
        'quiz_mem_contact_1',
        'quiz_mem_2',
        'quiz_mem_contact_2',
        'web_mem_1',
        'web_mem_contact_1',
        'web_mem_2',
        'web_mem_contact_2',
        'game_mem_1',
        'game_mem_contact_1',
        'game_mem_2',
        'game_mem_contact_2',
        'game_mem_3',
        'game_mem_contact_3',
        'game_mem_4',
        'game_mem_contact_4',
        'itmanager_mem_1',
        'itmanager_mem_contact_1',
        'mad_mem_1',
        'mad_mem_contact_1',
        'mad_mem_2',
        'mad_mem_contact_2',
        'mad_mem_3',
        'mad_mem_contact_3',
        'mad_mem_4',
        'mad_mem_contact_4',
        'mad_mem_5',
        'mad_mem_contact_5',
        'mad_mem_6',
        'mad_mem_contact_6',
        'photo_mem_1',
        'photo_mem_contact_1',
        'photo_mem_2',
        'photo_mem_contact_2',
        'thunt_mem_1',
        'thunt_mem_contact_1',
        'thunt_mem_2',
        'thunt_mem_contact_2',
        'isenrolled',
        'ispaid',
        'ticket_number',
        'created_at',
        'updated_at'
    ];


   
    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [
        
        // 'coding_mem_1' => 'required|string|max_length[255]',
        // 'coding_mem_contact_1' => 'required|string|max_length[255]',
        // 'coding_mem_2' => 'required|string|max_length[255]',
        // 'coding_mem_contact_2' => 'required|string|max_length[255]',
        // 'quiz_mem_1' => 'required|string|max_length[255]',
        // 'quiz_mem_contact_1' => 'required|string|max_length[255]',
        // 'quiz_mem_2' => 'required|string|max_length[255]',
        // 'quiz_mem_contact_2' => 'required|string|max_length[255]',
        // 'web_mem_1' => 'required|string|max_length[255]',
        // 'web_mem_contact_1' => 'required|string|max_length[255]',
        // 'web_mem_2' => 'required|string|max_length[255]',
        // 'web_mem_contact_2' => 'required|string|max_length[255]',
        // 'game_mem_1' => 'required|string|max_length[255]',
        // 'game_mem_contact_1' => 'required|string|max_length[255]',
        // 'game_mem_2' => 'required|string|max_length[255]',
        // 'game_mem_contact_2' => 'required|string|max_length[255]',
        // 'game_mem_3' => 'required|string|max_length[255]',
        // 'game_mem_contact_3' => 'required|string|max_length[255]',
        // 'game_mem_4' => 'required|string|max_length[255]',
        // 'game_mem_contact_4' => 'required|string|max_length[255]',
        // 'itmanager_mem_1' => 'required|string|max_length[255]',
        // 'itmanager_mem_contact_1' => 'required|string|max_length[255]',
        // 'photo_mem_1' => 'required|string|max_length[255]',
        // 'photo_mem_contact_1' => 'required|string|max_length[255]',
        // 'video_mem_1' => 'required|string|max_length[255]',
        // 'video_mem_contact_1' => 'required|string|max_length[255]',
        // 'video_mem_2' => 'required|string|max_length[255]',
        // 'video_mem_contact_2' => 'required|string|max_length[255]',
        // 'thunt_mem_1' => 'required|string|max_length[255]',
        // 'thunt_mem_contact_1' => 'required|string|max_length[255]',
        // 'thunt_mem_2' => 'required|string|max_length[255]',
        // 'thunt_mem_contact_2' => 'required|string|max_length[255]',
    ];
    protected $validationMessages = [
   
    // 'coding_mem_1' => [
    //     'required' => 'The coding member 1 is required.',
    //     'string' => 'The coding member 1 must be a string.',
    //     'max_length' => 'The coding member 1 must not exceed 255 characters.',
    // ],
    // 'coding_mem_contact_1' => [
    //     'required' => 'The coding member 1 contact is required.',
    //     'string' => 'The coding member 1 contact must be a string.',
    //     'max_length' => 'The coding member 1 contact must not exceed 255 characters.',
    // ],
    // 'coding_mem_2' => [
    //     'required' => 'The coding member 2 is required.',
    //     'string' => 'The coding member 2 must be a string.',
    //     'max_length' => 'The coding member 2 must not exceed 255 characters.',
    // ],
    // 'coding_mem_contact_2' => [
    //     'required' => 'The coding member 2 contact is required.',
    //     'string' => 'The coding member 2 contact must be a string.',
    //     'max_length' => 'The coding member 2 contact must not exceed 255 characters.',
    // ],
    // 'quiz_mem_1' => [
    //     'required' => 'The quiz member 1 is required.',
    //     'string' => 'The quiz member 1 must be a string.',
    //     'max_length' => 'The quiz member 1 must not exceed 255 characters.',
    // ],
    // 'quiz_mem_contact_1' => [
    //     'required' => 'The quiz member 1 contact is required.',
    //     'string' => 'The quiz member 1 contact must be a string.',
    //     'max_length' => 'The quiz member 1 contact must not exceed 255 characters.',
    // ],
    // 'quiz_mem_2' => [
    //     'required' => 'The quiz member 2 is required.',
    //     'string' => 'The quiz member 2 must be a string.',
    //     'max_length' => 'The quiz member 2 must not exceed 255 characters.',
    // ],
    // 'quiz_mem_contact_2' => [
    //     'required' => 'The quiz member 2 contact is required.',
    //     'string' => 'The quiz member 2 contact must be a string.',
    //     'max_length' => 'The quiz member 2 contact must not exceed 255 characters.',
    // ],
    // 'web_mem_1' => [
    //     'required' => 'The web member 1 is required.',
    //     'string' => 'The web member 1 must be a string.',
    //     'max_length' => 'The web member 1 must not exceed 255 characters.',
    // ],
    // 'web_mem_contact_1' => [
    //     'required' => 'The web member 1 contact is required.',
    //     'string' => 'The web member 1 contact must be a string.',
    //     'max_length' => 'The web member 1 contact must not exceed 255 characters.',
    // ],
    // 'web_mem_2' => [
    //     'required' => 'The web member 2 is required.',
    //     'string' => 'The web member 2 must be a string.',
    //     'max_length' => 'The web member 2 must not exceed 255 characters.',
    // ],
    // 'web_mem_contact_2' => [
    //     'required' => 'The web member 2 contact is required.',
    //     'string' => 'The web member 2 contact must be a string.',
    //     'max_length' => 'The web member 2 contact must not exceed 255 characters.',
    // ],
    // 'game_mem_1' => [
    //     'required' => 'The game member 1 is required.',
    //     'string' => 'The game member 1 must be a string.',
    //     'max_length' => 'The game member 1 must not exceed 255 characters.',
    // ],
    // 'game_mem_contact_1' => [
    //     'required' => 'The game member 1 contact is required.',
    //     'string' => 'The game member 1 contact must be a string.',
    //     'max_length' => 'The game member 1 contact must not exceed 255 characters.',
    // ],
    // 'game_mem_2' => [
    //     'required' => 'The game member 2 is required.',
    //     'string' => 'The game member 2 must be a string.',
    //     'max_length' => 'The game member 2 must not exceed 255 characters.',
    // ],
    // 'game_mem_contact_2' => [
    //     'required' => 'The game member 2 contact is required.',
    //     'string' => 'The game member 2 contact must be a string.',
    //     'max_length' => 'The game member 2 contact must not exceed 255 characters.',
    // ],
    // 'game_mem_3' => [
    //     'required' => 'The game member 3 is required.',
    //     'string' => 'The game member 3 must be a string.',
    //     'max_length' => 'The game member 3 must not exceed 255 characters.',
    // ],
    // 'game_mem_contact_3' => [
    //     'required' => 'The game member 3 contact is required.',
    //     'string' => 'The game member 3 contact must be a string.',
    //     'max_length' => 'The game member 3 contact must not exceed 255 characters.',
    // ],
    // 'game_mem_contact_3' => [
    //     'required' => 'The game member 3 contact is required.',
    //     'string' => 'The game member 3 contact must be a string.',
    //     'max_length' => 'The game member 3 contact must not exceed 255 characters.',
    // ],
    // 'game_mem_4' => [
    //     'required' => 'The game member 4 is required.',
    //     'string' => 'The game member 4 must be a string.',
    //     'max_length' => 'The game member 4 must not exceed 255 characters.',
    // ],
    // 'game_mem_contact_4' => [
    //     'required' => 'The game member 4 contact is required.',
    //     'string' => 'The game member 4 contact must be a string.',
    //     'max_length' => 'The game member 4 contact must not exceed 255 characters.',
    // ],
    // 'itmanager_mem_1' => [
    //     'required' => 'The IT manager member 1 is required.',
    //     'string' => 'The IT manager member 1 must be a string.',
    //     'max_length' => 'The IT manager member 1 must not exceed 255 characters.',
    // ],
    // 'itmanager_mem_contact_1' => [
    //     'required' => 'The IT manager member 1 contact is required.',
    //     'string' => 'The IT manager member 1 contact must be a string.',
    //     'max_length' => 'The IT manager member 1 contact must not exceed 255 characters.',
    // ],
    // 'photo_mem_1' => [
    //     'required' => 'The photo member 1 is required.',
    //     'string' => 'The photo member 1 must be a string.',
    //     'max_length' => 'The photo member 1 must not exceed 255 characters.',
    // ],
    // 'photo_mem_contact_1' => [
    //     'required' => 'The photo member 1 contact is required.',
    //     'string' => 'The photo member 1 contact must be a string.',
    //     'max_length' => 'The photo member 1 contact must not exceed 255 characters.',
    // ],
    // 'video_mem_1' => [
    //     'required' => 'The video member 1 is required.',
    //     'string' => 'The video member 1 must be a string.',
    //     'max_length' => 'The video member 1 must not exceed 255 characters.',
    // ],
    // 'video_mem_contact_1' => [
    //     'required' => 'The video member 1 contact is required.',
    //     'string' => 'The video member 1 contact must be a string.',
    //     'max_length' => 'The video member 1 contact must not exceed 255 characters.',
    // ],
    // 'video_mem_2' => [
    //     'required' => 'The video member 2 is required.',
    //     'string' => 'The video member 2 must be a string.',
    //     'max_length' => 'The video member 2 must not exceed 255 characters.',
    // ],
    // 'video_mem_contact_2' => [
    //     'required' => 'The video member 2 contact is required.',
    //     'string' => 'The video member 2 contact must be a string.',
    //     'max_length' => 'The video member 2 contact must not exceed 255 characters.',
    // ],
    // 'thunt_mem_1' => [
    //     'required' => 'The treasure hunt member 1 is required.',
    //     'string' => 'The treasure hunt member 1 must be a string.',
    //     'max_length' => 'The treasure hunt member 1 must not exceed 255 characters.',
    // ],
    // 'thunt_mem_contact_1' => [
    //     'required' => 'The treasure hunt member 1 contact is required.',
    //     'string' => 'The treasure hunt member 1 contact must be a string.',
    //     'max_length' => 'The treasure hunt member 1 contact must not exceed 255 characters.',
    // ],
    // 'thunt_mem_2' => [
    //     'required' => 'The treasure hunt member 2 is required.',
    //     'string' => 'The treasure hunt member 2 must be a string.',
    //     'max_length' => 'The treasure hunt member 2 must not exceed 255 characters.',
    // ],
    // 'thunt_mem_contact_2' => [
    //     'required' => 'The treasure hunt member 2 contact is required.',
    //     'string' => 'The treasure hunt member 2 contact must be a string.',
    //     'max_length' => 'The treasure hunt member 2 contact must not exceed 255 characters.',
    // ],
];

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
