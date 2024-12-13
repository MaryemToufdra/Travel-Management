<?php
namespace App\Controllers;

use App\Models\BookingModel;

class BookingController extends BaseController
{
    public function index()
    {
        $m = new BookingModel();
        $donné['bookings'] = $m->getAllBookings(); 
        return view('book/list', $donné); 
    }
    public function delete($id)
    {
        $m = new BookingModel();
        $b = $m->find($id);
        if ($b) {
            $m->delete($id); 
            return $this->response->setJSON(['success' => 'Booking deleted successfully.']);
        } else {
            return $this->response->setJSON(['error' => 'Booking not found.']);
        }
    }
    public function updateStatus()
    {
        $m = new BookingModel();
        $id = $this->request->getPost('id');
        $s = $this->request->getPost('status');
        
        $modifier = $m->updateBookingStatus($id, $s);

        if ($modifier) {
            return $this->response->setJSON(['status' => 'success']);
        } else {
            return $this->response->setJSON(['status' => 'error']);
        }
    }
}
