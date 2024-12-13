<?php
namespace App\Controllers;
use App\Models\BookingModel;
class Book extends BaseController
{
    protected $bookingModel;

    public function __construct()
    {
        $this->bookingModel = new BookingModel();
    }
public function index($id = null)
{
   $v = new \App\Models\VoyageModel();
        if ($id === null) {
        throw new \CodeIgniter\Exceptions\PageNotFoundException('Voyage non trouvé');
    }
    $lieu =$v->find($id);
    if (!$lieu) {
        throw new \CodeIgniter\Exceptions\PageNotFoundException('Voyage non trouvé');
    }
    return view('website/book', ['destinations' => $lieu]);
}
public function book($lieuid)
    {
        if (!session()->get('user_id')) {
            return redirect()->to('login');
        }
        if (!$lieuid) {
            echo "Destination ID is missing!";
            return;
        }
        $b = new BookingModel();
        $participantid = session()->get('user_id'); 
        $donné = [
            'user_id' => $participantid,
            'destination_id' => $lieuid,
            'booking_date' => date('Y-m-d H:i:s'),
            'status' => 'Pending' 
        ];
        $b->addBooking($donné);
        session()->setFlashdata('booking_success', 'Your booking has been confirmed!');
        return redirect()->to('/booking');
    }
    public function booking()
    {
       
        if (!session()->get('user_id')) {
            return redirect()->to('login');
        }
        $bk = new BookingModel();
               $participantid = session()->get('user_id');
        $b = $bk->where('user_id',$participantid)->findAll();
        return view('website/booking', ['bookings' => $b]);
    }
    public function createBooking($voyageId)
    {
        $participantid = session()->get('userId'); 
        
        if (!$participantid) {
            return redirect()->to('/loginP')->with('error', 'You need to log in first.');
        }
            $y = $this->bookingModel->getBookingByUserAndVoyage($participantid, $voyageId);
        
        if ($y) {
            session()->setFlashdata('error', 'You have already booked this trip.');
            return redirect()->to('/home');
        }
                $i = [
            'voyage_id' => $voyageId,
            'user_id' => $participantid,
            'status' => 'pending',
            'schedule' => date('Y-m-d H:i:s'), 
        ];
    
        if ($this->bookingModel->addBooking($i)) {
            session()->setFlashdata('success', 'Your booking has been confirmed!');
            return redirect()->to('/home');
        } else {
            session()->setFlashdata('error', 'Failed to create booking.');
            return redirect()->to('/home');
        }
    }
    
    public function showBookings()
    {
        $idp = session()->get('userId');
                if (!$idp) {
            return redirect()->to('/loginP')->with('error', 'You need to log in first.');
        }
       $bm = new BookingModel();
       $b =$bm->getBookingsByUser($idp);
                return view('website/booking', ['bookings' => $b]);

    }
    public function delete($id)
    {
        
       $bm = new BookingModel();
        $b =$bm->find($id);
    
        if ($b) {
           $bm->delete($id);
            return $this->response->setJSON(['success' => 'Booking deleted successfully.']);
        } else {
            return $this->response->setJSON(['error' => 'Booking not found.']);
        }
    }
    
}
