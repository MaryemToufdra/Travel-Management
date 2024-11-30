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
    $username = $this->request->getPost('username');
    $password = $this->request->getPost('password');
    $profileImage = $this->request->getFile('profile_image');
    $userModel = new UserModel();
    $user = $userModel->find(session()->get('user_id'));
    if ($username) {
        $user['username'] = $username;
    }
    if ($password) {
        $user['password'] = password_hash($password, PASSWORD_DEFAULT);
    }
    if ($profileImage && $profileImage->isValid()) {
        $uploadPath = FCPATH . 'public/uploads/';
        if (!is_dir($uploadPath)) {
            mkdir($uploadPath, 0777, true);
        }
        $newName = $profileImage->getRandomName();
        $profileImage->move($uploadPath, $newName);
        $user['profile_image'] = $newName;
    }
    $userModel->save($user);
    session()->set('username', $user['username']);
    session()->set('profile_image', $user['profile_image']); 
    $this->session->setFlashdata('success', 'Profile updated successfully!');
    return redirect()->to('/accueil');
}

}