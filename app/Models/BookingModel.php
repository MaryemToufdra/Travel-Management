<?php
namespace App\Models;

use CodeIgniter\Model;

class BookingModel extends Model
{
    protected $table = 'book_list';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'voyage_id', 'user_id', 'status', 'schedule'
    ];

    public function getAllBookings()
    {
        return $this->select('book_list.*, voyages.titre AS voyage, participant.username AS username')
            ->join('voyages', 'voyages.id = book_list.voyage_id') 
            ->join('participant', 'participant.id = book_list.user_id') 
            ->findAll();
    }
    public function getBookingsByUser($userId)
    {
        log_message('info', 'Récupération des réservations pour l\'utilisateur avec ID: ' . $userId);
        
        $bookings = $this->db->table('book_list')
            ->select('book_list.*, voyages.titre AS voyages')
            ->join('voyages', 'voyages.id = book_list.voyage_id', 'left')
            ->where('book_list.user_id', $userId)
            ->get()
            ->getResultArray();
    
        log_message('info', 'Réservations récupérées: ' . json_encode($bookings));
        
        return $bookings;
    }
    public function getBookingByUserAndVoyage($userId, $voyageId)
    {
        return $this->db->table($this->table)
                        ->where('user_id', $userId)
                        ->where('voyage_id', $voyageId)
                        ->get()
                        ->getRowArray(); // Retourne une ligne si une réservation existe
    }
    public function getUserBookings($userId)
{
    return $this->where('user_id', $userId)->findAll();
}
    public function addBooking($data)
    {
        return $this->insert($data); 
    }
    public function updateBookingStatus($id, $status)
    {
        return $this->update($id, ['status' => $status]);
    }
}
