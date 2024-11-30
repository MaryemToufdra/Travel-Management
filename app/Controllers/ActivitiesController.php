<?php
namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\ActivityModel; 
use App\Models\CategoryModel;
class ActivitiesController extends BaseController {
    public function index()
    {
        $ActivityModel = new ActivityModel();
        $data['activities'] = $ActivityModel->getAllActivitiesWithCategory();
        return view('activities/activity', $data);
    }

function create(){
    $categoryModel = new CategoryModel();
    $categories = $categoryModel->findAll();
    return view('activities/create', ['categories' => $categories]);
}
    
    public function edit($id)
{
    $ActivityModel = new ActivityModel();
    $activity = $ActivityModel->find($id); 
    if (!$activity) {
        throw new \CodeIgniter\Exceptions\PageNotFoundException('Voyage non trouvé');
    }
    return view('activities/edit', ['activity' => $activity]);
}

    public function update($id)
{
    $activityModel = new \App\Models\ActivityModel();
    $activity = $activityModel->find($id);
    if (!$activity) {
        throw new \CodeIgniter\Exceptions\PageNotFoundException("Activity with ID $id not found");
    }

    // Validation des données
    $validationRules = [
        'name'        => 'required|min_length[3]',
        'description' => 'required|min_length[5]',
        'date'        => 'required|valid_date',
        'category_id' => 'required|integer'
    ];
$d=[];
    if ($this->validate($validationRules)) {
        $data = [
            'name'        => $this->request->getPost('name'),
            'description' => $this->request->getPost('description'),
            'date'        => $this->request->getPost('date'),
            'category_id' => $this->request->getPost('category_id') 
        ];
        $activityModel->update($id, $data);
   $d['success']='Activity updated successfully.';
}
return view('activities/create', $d);
}
public function delete($id)
{
    $activityModel = new \App\Models\ActivityModel();   
    $activity = $activityModel->find($id);
    if ($activity) {
                $activityModel->delete($id);
        session()->setFlashdata('success', 'The trip has been successfully deleted.');
    } else {
 session()->setFlashdata('error', 'An error occurred during the operation.');
    }
}


public function store()
{
    $name = $this->request->getPost('activityName');
    $description = $this->request->getPost('activityDescription');
    $date = $this->request->getPost('date');
    $categoryName = $this->request->getPost('categorySelect');
    $data = [];

    // Récupérer toutes les catégories
    $categoryModel = new CategoryModel();
    $categories = $categoryModel->findAll(); // Récupérer toutes les catégories une seule fois

    // Vérification du nom de l'activité
    if (empty(trim($name))) {
        $data['error'] = 'Le nom de l\'activité est requis.';
    }
    
    // Vérification de la catégorie
    if (!isset($data['error'])) {
        $category = $categoryModel->where('name', $categoryName)->first(); // Chercher la catégorie par son nom
        
        if ($category) {
            $categoryId = $category['id'];
        } else {
            $data['error'] = 'La catégorie spécifiée n\'existe pas.';
        }
    }

    // Si aucune erreur, insérer l'activité
    if (!isset($data['error'])) {
        $activityData = [
            'name' => $name,
            'description' => $description,
            'date' => $date,
            'category_id' => $categoryId,
        ];
        $activityModel = new ActivityModel();
        $activityModel->insert($activityData);
        session()->setFlashdata('success', 'L\'activité a été créée avec succès.');   
        return redirect()->to('/activity/create');
    }

    // Passer les catégories à la vue, qu'il y ait une erreur ou non
    return view('activities/create', array_merge($data, ['categories' => $categories]));
}

}