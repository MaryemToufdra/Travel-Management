<?php

namespace App\Models;

use CodeIgniter\Model;

class DestinationModel extends Model
{
    protected $table = 'destination'; 
    protected $primaryKey = 'id'; 
    protected $allowedFields = ['city', 'image_url']; 
}
