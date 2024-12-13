<?php
namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\UserModel;

class ProfileController extends BaseController
{
    public function update()
{
    if (!session()->get('user_id')) {
        return redirect()->to('/login');
    }
    $nom = $this->request->getPost('username');
    $mp = $this->request->getPost('password');
    $image = $this->request->getFile('profile_image');
    $utilisateur = new UserModel();
    $user = $utilisateur->find(session()->get('user_id'));
    if ($nom) {
        $user['username'] = $nom;
    }
    if ($mp) {
        $user['password'] = password_hash($mp, PASSWORD_DEFAULT);
    }
    if ($image && $image->isValid()) {
        $up = FCPATH . 'public/uploads/';
        if (!is_dir($up)) {
            mkdir($up, 0777, true);
        }
        $a = $image->getRandomName();
        $image->move($up, $a);
        $user['profile_image'] = $a;
    }
    $utilisateur->save($user);
    session()->set('username', $user['username']);
    session()->set('profile_image', $user['profile_image']); 
    $this->session->setFlashdata('success', 'Profile updated successfully!');
    return redirect()->to('/accueil');
}

}