<?php

namespace App\Models;

use CodeIgniter\Model;

class VoyageModel extends Model
{
    protected $table = 'voyages';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'titre', 'description', 'date_depart', 'date_retour', 
        'lieu_voyage', 'images'
    ];
    public function getAllTrips() {
        return $this->findAll();  // Cette méthode récupère tous les voyages de la table 'voyages'
    }
    
}
