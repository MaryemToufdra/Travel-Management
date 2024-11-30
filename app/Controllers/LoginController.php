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
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');
        $userModel = new UserModel();
        $user = $userModel->where('username', $username)->first();
        if ($user && password_verify($password, $user['password'])) {
            session()->set('user_id', $user['id']);
            session()->set('username', $user['username']);
            session()->set('profile_image', $user['profile_image']);
            return redirect()->to('/accueil');
        }
        return redirect()->to('/login')->with('error', 'Invalid username or password.');
    }
}

?>