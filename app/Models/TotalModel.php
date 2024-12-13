<?php

namespace App\Models;

use CodeIgniter\Model;

class TotalModel extends Model
{
    protected $DBGroup          = 'default'; // Database group
    protected $table            = '';        // Not used here, as we're using raw queries
    protected $primaryKey       = '';        // Not needed for raw queries

    // Method to get the total bookings
    public function getTotalBookings()
    {
        return $this->db->table('book_list')->countAllResults();
    }

    // Method to get the total users
    public function getTotalParticipant()
    {
        return $this->db->table('participant')->countAllResults();
    }

    // Method to get the total activities
    public function getTotalmessages()
    {
        return $this->db->table('contact')->countAllResults();
    }

    // Method to get the total trips
    public function getTotalTrips()
    {
        return $this->db->table('voyages')->countAllResults();
    }
    
}
