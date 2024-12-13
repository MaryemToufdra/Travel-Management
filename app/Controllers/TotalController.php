<?php
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\TotalModel;
use App\Models\BookingModel;
class TotalController extends Controller
{
    public function index()
{
    $total = new TotalModel();
    $m = new BookingModel();
        $d['bookings'] = $m->getAllBookings(); 
        $donné = [
        'totalBookings'    => $total->getTotalBookings(),
        'totalUsers'       => $total->getTotalParticipant(),
        'totalActivities'  => $total->getTotalmessages(),
        'totalTrips'       => $total->getTotalTrips(),
    ];
        $p = array_merge($donné, $d);
        return view('/a', $p);
}

}
