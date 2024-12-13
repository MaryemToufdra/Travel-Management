<?php
namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\VoyageModel;
use App\Models\TotalModel;
use App\Models\BookingModel;

class Accueil extends BaseController {

    public function index()
    {
      
     $total = new TotalModel();
      $m = new BookingModel();
          $d['bookings'] = $m->getAllBookings(); 
      
      $donné = [
          'totalBookings'    =>$total->getTotalBookings(),
          'totalUsers'       =>$total->getTotalParticipant(),
          'totalActivities'  =>$total->getTotalmessages(),
          'totalTrips'       =>$total->getTotalTrips(),
      ];
      $v = array_merge($donné, $d);
     return view('/accueil', $v);
      
    }
    public function login()
    {
        
       return view('login');
    }
    public function a(){
      $t = new VoyageModel();
      $total = $t->countAll();
      return view('/a', ['totalTrips' => $total]);
    }
    
    
}
?>