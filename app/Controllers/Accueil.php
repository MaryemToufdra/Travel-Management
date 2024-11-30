<?php
//defined('BASEPATH') OR exit('No direct script access allowed');
namespace App\Controllers;
use CodeIgniter\Controller;
class Accueil extends BaseController {

    public function index()
    {
       return view('accueil');
    }
    public function login()
    {
        
       return view('login');
    }
}
?>