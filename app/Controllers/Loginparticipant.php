<?php

namespace App\Controllers;

use App\Models\ParticipantModel;
use CodeIgniter\Controller;

class Loginparticipant extends BaseController
{
    public function login()
    {
        return view("website/login");
    }

    public function register()
    {
        return view("website/signup");
    }

    public function index()
    {
        helper(['form', 'url']);
               $v= \Config\Services::validation();
        $participant = new ParticipantModel();
     
        if ($this->request->getMethod() == 'POST') {
         $v->setRules([
            'username' => [
                'rules' => 'required|min_length[3]',
                'errors' => [
                    'required' => 'Le nom d’utilisateur est obligatoire.',
                    'min_length' => 'Le nom d’utilisateur doit contenir au moins 3 caractères.',
                ],
            ],
            'email' => [
                'rules' => 'required|valid_email|is_unique[participant.email]|regex_match[/^[a-zA-Z0-9._%+-]+@gmail\.com$/]',
                'errors' => [
                    'required' => 'L’email est obligatoire.',
                    'valid_email' => 'Veuillez entrer un email valide.',
                    'is_unique' => 'Cet email est déjà enregistré.',
                    'regex_match' => 'L’email doit être une adresse Gmail valide.',
                ],
            ],
            'password' => [
                'rules' => 'required|min_length[6]',
                'errors' => [
                    'required' => 'Le mot de passe est obligatoire.',
                    'min_length' => 'Le mot de passe doit contenir au moins 6 caractères.',
                ],
            ],
            'confirm-password' => [
                'rules' => 'required|matches[password]',
                'errors' => [
                    'required' => 'La confirmation du mot de passe est obligatoire.',
                    'matches' => 'Les mots de passe ne correspondent pas.',
                ],
            ],
        ]);
      
            if (!$v->withRequest($this->request)->run()) {
                               return view('website/signup', [
                    'validation' => $v
                ]);
            }
            $data = [
                'username' => $this->request->getPost('username'),
                'email' => $this->request->getPost('email'),
                'password' => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT), 
            ];
            $participant->save($data);
            session()->setFlashdata('success', 'Account created successfully!');
            return redirect()->to('/signup');
        }
     
     
        return view('/signup', [
            'validation' =>$v
        ]);
    }
    public function seconnecter()
    {
      
        helper(['form', 'url']);
    
       $v= \Config\Services::validation();
        $participant = new ParticipantModel();
    
        if ($this->request->getMethod() === 'POST') {
            $v->setRules([
                'email' => [
                    'rules' => 'required|valid_email',
                    'errors' => [
                        'required' => 'L’email est obligatoire.',
                        'valid_email' => 'Veuillez entrer un email valide.',
                    ],
                ],
                'password' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Le mot de passe est obligatoire.',
                    ],
                ],
            ]);
    
            if (!$v->withRequest($this->request)->run()) {
               // Journal des erreurs pour vérifier
               log_message('error', json_encode($v->getErrors()));
               session()->setFlashdata('error', 'Veuillez corriger les erreurs dans le formulaire.');
               return view('website/login', [
                   'validation' => $v
               ]);
           }
        
            $email = $this->request->getPost('email');
            $motpass = $this->request->getPost('password');
    
            $user = $participant->where('email', $email)->first();

                log_message('info', 'Utilisateur trouvé : ' . json_encode($user));

            if ($user && password_verify($motpass, $user['password'])) {
                session()->set([
                    'isLoggedIn' => true,
                    'userId' => $user['id'],
                    'username' => $user['username'],
                    'email' => $user['email'],
                ]);
                log_message('info', 'ID utilisateur après connexion: ' . $user['id']);
                session()->setFlashdata('success', 'Connexion réussie. Bienvenue ' . $user['username'] . ' !');
                return redirect()->to('/home');
            } else {
               
                session()->setFlashdata('error', 'Identifiants incorrects. Veuillez réessayer.');
                return redirect()->to('/loginP');
            }
        }
    
        return view('website/login');
    }

    public function updateProfile()
    {
        if (!session()->get('isLoggedIn')) {
            return redirect()->to('/loginP');
        }
    
        $participant = new ParticipantModel();
       $v= \Config\Services::validation();
        $userId = session()->get('userId');
        $user = $participant->find($userId);
            if ($this->request->getMethod() === 'POST') {
            $v->setRules([
                'username' => 'required|min_length[3]',
                'email' => [
                    'rules' => 'required|valid_email|is_unique[participant.email,id,{id}]',
                    'errors' => [
                        'is_unique' => 'Cet email est déjà utilisé par un autre utilisateur.'
                    ]
                ],
            ]);
                        $motpass = $this->request->getPost('password');
            if (!empty($motpass)) {
                $v->setRules([
                    'password' => 'min_length[6]',
                    'confirm-password' => 'matches[password]',
                ]);
            }
                $v->setRule('email', 'email', 'required|valid_email|is_unique[participant.email,id,' . $userId . ']');
                        if (!$v->withRequest($this->request)->run()) {
                return view('website/updateprofil', [
                    'validation' => $v,
                    'user' => $user,  
                ]);
            }
    
            $data = [
                'username' => $this->request->getPost('username'),
                'email' => $this->request->getPost('email'),
            ];
    
            if (!empty($motpass)) {
                $data['password'] = password_hash($motpass, PASSWORD_DEFAULT);
            }
    
            $participant->update($userId, $data);
            session()->setFlashdata('success', 'Votre profil a été mis à jour avec succès!');
            return redirect()->to('/update-profile');
        }
    
        return view('website/updateprofil', [
            'validation' => $v,
            'user' => $user,
        ]);
    }
    
}
