<?php

namespace App\Controllers;

use App\Models\AccountModel;

class AccountController extends BaseController
{
    
    public function index()
    {
        $accountModel = new AccountModel();
        $data['account'] = $accountModel->getAllAccounts(); 
        return view('/account/list', $data); 
    }
  
    public function delete($id)
    {
        $accountModel = new AccountModel();
        $account = $accountModel->find($id);
        $donne = []; 
        if ($account) {
            $accountModel->delete($id);
            $donne['success'] = 'trip deleted successfully.';
        } else {
            $donne['error'] = 'trips not found .'; 
        }
        return view('account/', $donne);
    }
}