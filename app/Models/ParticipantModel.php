<?php

namespace App\Models;

use CodeIgniter\Model;

class ParticipantModel extends Model
{
    protected $table      = 'participant'; 
    protected $primaryKey = 'id';          

    protected $allowedFields = ['username', 'email', 'password']; 
    protected $useTimestamps = true; 
    protected $validationRules    = [
        'username'    => 'required|min_length[3]|max_length[255]',
        'email'       => 'required|valid_email|is_unique[participant.email]',
        'password'    => 'required|min_length[6]',
    ];
    protected $validationMessages = [];
    public function getAllAccounts() {
        return $this->findAll();  
    }
}
