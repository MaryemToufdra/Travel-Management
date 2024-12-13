<?php
namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\UserModel;

class LoginController extends BaseController
{
    public function index()
    {
        return view('login'); 
    }
    public function authenticate()
    {
        $validation = \Config\Services::validation();
        $validation->setRules([
            'username' => 'required',
            'password' => 'required'
        ]);

        if (!$validation->withRequest($this->request)->run()) {
            return redirect()->back()->with('errors', $validation->getErrors());
        }
        $nom = $this->request->getPost('username');
        $motpass = $this->request->getPost('password');
        $m = new UserModel();
        $user = $m->where('username', $nom)->first();
        if ($user && password_verify($motpass, $user['password'])) {
            session()->set('user_id', $user['id']);
            session()->set('username', $user['username']);
            session()->set('profile_image', $user['profile_image']);
            session()->setFlashdata('success', 'Login successful!');
        
            return redirect()->to('/accueil');
        }
        session()->setFlashdata('error', 'Invalid username or password.');
    return redirect()->to('/login');
    }
}

?>