<?php
namespace App\Controllers;

use App\Models\AccountModel;

class WebsiteController extends BaseController
{
    public function index()
    {
        
        return view('Website/index'); 
    }
}