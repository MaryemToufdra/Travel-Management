<?php

namespace App\Controllers;

use App\Models\VoyageModel;

class Trips extends BaseController
{
    
    public function index()
    {
        log_message('debug', 'Le contrôleur Trips a été chargé');
        $t = new VoyageModel();
        $d['voyages'] = $t->getAllTrips(); 
        return view('trips/list', $d); 
    }
    public function create()
    {
     return view('trips/create');
    }
    public function delete($id)
    {
        $trip = new VoyageModel();
        $voyage = $trip->find($id);
    
        if ($voyage) {
            $trip->delete($id);
            return $this->response->setJSON(['success' => 'Trip deleted successfully.']);
        } else {
            return $this->response->setJSON(['error' => 'Trip not found.']);
        }
    }
    public function store()
    {
        $t = $this->request->getPost('titre');
        $description = $this->request->getPost('description');
        $budget = $this->request->getPost('budget');
        $nbpersonnes = $this->request->getPost('nbr_max_personnes');
        $datedepart = $this->request->getPost('date_depart');
        $dateretour = $this->request->getPost('date_retour');
        $lieu = $this->request->getPost('lieu');
        $images = $this->request->getFile('images');
        $donné = [];
            if (strtotime($datedepart) >= strtotime($dateretour)) {
            $donné['error'] = 'La date de départ doit être antérieure à la date de retour.';
        }
            if (empty($t)) {
            $donné['error'] = 'title  is necessary.';
        }
    if ($images && $images->isValid() && !$images->hasMoved()) {
        $imageName = $images->getName(); 
        $images->move(ROOTPATH . 'public/uploads', $imageName);
    } else {
        $imageName = null; 
    }
        if (!isset($donné['error'])) {
            $voyageModel = new VoyageModel();
            $voyageModel->insert([
                'titre' => $t,
                'description' => $description,
                'budget' => $budget,
                'nbr_max_personnes' => $nbpersonnes,
                'date_depart' => $datedepart,
                'date_retour' => $dateretour,
                'lieu_voyage' => $lieu,
                'images' =>   $imageName,
            ]);
            
            $donné['success'] = 'trip created successfully';
        }
    
        return view('/trips/create', $donné);
    }
    public function edit($id)
{
    $v = new VoyageModel();
    $voyage = $v->find($id); 
    if (!$voyage) {
        throw new \CodeIgniter\Exceptions\PageNotFoundException('Voyage non trouvé');
    }
    return view('trips/edit', ['voyage' => $voyage]);
}

public function update($id)
{
    $v = new VoyageModel();
    $datedepart = $this->request->getPost('date_depart');
    $dateretour = $this->request->getPost('date_retour');
    $d=[];
    if (strtotime($datedepart) >= strtotime($dateretour)) {
        $d['error']='La date de départ doit être antérieure à la date de retour.';
    }
    $donné = [
        'titre' => $this->request->getPost('titre'),
        'description' => $this->request->getPost('description'),
        'budget'=> $this->request->getPost('budget'),
        'nbr_max_personnes'=> $this->request->getPost('nbr_max_personnes'),
        'date_depart' => $datedepart,
        'date_retour' => $dateretour,
        'lieu_voyage' => $this->request->getPost('lieu'),
    ];
   
    if (!isset($d['error'])) {
    $image = $this->request->getFile('images');
    if ($image && $image->isValid() && !$image->hasMoved()) {
        $o = 'uploads/';
        $n = $image->getRandomName(); 
        $image->move(FCPATH . $o, $n);
        $donné['images'] = $n;
    }

    $v->update($id, $donné);
   $d['success']='Voyage mis à jour avec succès';
}
        return view('/trips/create', $d);
}

}
