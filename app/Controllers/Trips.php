<?php

namespace App\Controllers;

use App\Models\VoyageModel;

class Trips extends BaseController
{
    
    public function index()
    {
        log_message('debug', 'Le contrôleur Trips a été chargé');
        $voyageModel = new VoyageModel();
        $data['voyages'] = $voyageModel->getAllTrips(); 
        return view('trips/list', $data); 
    }
    public function create()
    {
                return view('trips/create');
    }
    public function delete($id)
    {
        $voyageModel = new VoyageModel();
        $voyage = $voyageModel->find($id);
        $donne = []; 
        if ($voyage) {
            $voyageModel->delete($id);
            $donne['success'] = 'trip deleted successfully.';
        } else {
            $donne['error'] = 'trips not found .'; 
        }
        return view('trips/list', $donne);
    }
    
    
    public function store()
    {
        // Récupérer les données du formulaire
        $titre = $this->request->getPost('titre');
        $description = $this->request->getPost('description');
        $date_depart = $this->request->getPost('date_depart');
        $date_retour = $this->request->getPost('date_retour');
        $lieu = $this->request->getPost('lieu');
        $images = $this->request->getFile('images');
    
        $data = [];
    
        // Validation des dates
        if (strtotime($date_depart) >= strtotime($date_retour)) {
            $data['error'] = 'La date de départ doit être antérieure à la date de retour.';
        }
    
        // Autres validations et insertion en base de données si aucune erreur
        if (empty($titre)) {
            $data['error'] = 'title  is necessary.';
        }
    
        if (!isset($data['error'])) {
            // Si aucune erreur, on insère dans la base
            $voyageModel = new VoyageModel();
            $voyageModel->insert([
                'titre' => $titre,
                'description' => $description,
                'date_depart' => $date_depart,
                'date_retour' => $date_retour,
                'lieu_voyage' => $lieu,
                'images' => $images ? $images->getName() : null,
            ]);
            
            $data['success'] = 'trip created successfully';
        }
    
        return view('/trips/create', $data);
    }
    
    
    public function edit($id)
{
    $voyageModel = new VoyageModel();
    $voyage = $voyageModel->find($id); // Récupérer les données du voyage par ID

    // Vérifier si le voyage existe
    if (!$voyage) {
        throw new \CodeIgniter\Exceptions\PageNotFoundException('Voyage non trouvé');
    }

    // Charger la vue avec les données du voyage
    return view('trips/edit', ['voyage' => $voyage]);
}

public function update($id)
{
    $voyageModel = new VoyageModel();
    $date_depart = $this->request->getPost('date_depart');
    $date_retour = $this->request->getPost('date_retour');
    $d=[];
    if (strtotime($date_depart) >= strtotime($date_retour)) {
        $d['error']='La date de départ doit être antérieure à la date de retour.';
    }
    $data = [
        'titre' => $this->request->getPost('titre'),
        'description' => $this->request->getPost('description'),
        'date_depart' => $date_depart,
        'date_retour' => $date_retour,
        'lieu_voyage' => $this->request->getPost('lieu'),
    ];
   
    if (!isset($d['error'])) {
    $image = $this->request->getFile('images');
    if ($image && $image->isValid() && !$image->hasMoved()) {
        $uploadPath = 'uploads/';
        $newName = $image->getRandomName(); 
        $image->move(FCPATH . $uploadPath, $newName);
        $data['images'] = $newName;
    }

    $voyageModel->update($id, $data);
   $d['success']='Voyage mis à jour avec succès';
}
        return view('/trips/create', $d);
}

}
