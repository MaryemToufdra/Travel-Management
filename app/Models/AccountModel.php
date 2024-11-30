<?php

namespace App\Models;

use CodeIgniter\Model;

class AccountModel extends Model
{
    protected $table = 'account';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'username', 'email', 'password','last_login', 'status', 
        'created_at','updated_at',
    ];
    public function getAllAccounts() {
        return $this->findAll();  // Cette méthode récupère tous les voyages de la table 'voyages'
    }
    
}
