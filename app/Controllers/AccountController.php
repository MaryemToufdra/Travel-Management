<?php

namespace App\Controllers;

use App\Models\ParticipantModel;

class AccountController extends BaseController
{
    
    public function index()
    {
        $a = new ParticipantModel();
        $donné['account'] = $a->getAllAccounts(); 
        return view('/account/list', $donné); 
    }
    public function delete($id)
    {
        $a = new ParticipantModel();
        $account = $a->find($id);
    
        if ($account) {
            $a->delete($id);
            return $this->response->setJSON(['success' => 'Account deleted successfully.']);
        } else {
            return $this->response->setJSON(['error' => 'Account not found.']);
        }
    }
    
    
    
}