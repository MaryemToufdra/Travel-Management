<?php
 namespace App\Controllers;
 use App\Models\VoyageModel;
 class ActionsController extends BaseController
 {
     
     public function home()
     {
        $m = new VoyageModel();
        $d['destinations'] = $m->findAll();
         return view('website/index',$d); 
     }
     public function about()
     {
    
         return view('website/about'); 
     }
     public function contact()
     {
    
         return view('website/contact'); 
     }
     public function booking()
     {
    
         return view('website/booking'); 
     }
     public function trips()
     {
    
         return view('website/trips'); 
     }
     public function service()
     {
    
         return view('website/service'); 
     }
     public function book()
     {
        $vm = new VoyageModel();
       $donné['voyages'] = $vm->getAllTrips();    
         return view('website/book',$donné); 
     }
    }