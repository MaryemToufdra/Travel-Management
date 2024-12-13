<?php
namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\ActivityModel; 
use App\Models\CategoryModel;
class ActivitiesController extends BaseController {
    public function index()
    {
        $a = new ActivityModel();
        $data['activities'] = $a->getAllActivitiesWithCategory();
        return view('activities/activity', $data);
    }

function create(){
    $categoryModel = new CategoryModel();
    $categories = $categoryModel->findAll();
    return view('activities/create', ['categories' => $categories]);
}
    
public function edit($id = null)
{
    if ($id === null) {
        return redirect()->to('/activities')->with('error', 'Aucune activité spécifiée.');
    }
    $ActivityModel = new ActivityModel();
    $activity = $ActivityModel->find($id);

    if (!$activity) {
        throw new \CodeIgniter\Exceptions\PageNotFoundException('Activité non trouvée');
    }

    return view('activities/edit', ['activity' => $activity]);
}



public function update($id)
{
    if (!$this->request->is('post')) {
        // Vérifiez si la requête est POST
        return redirect()->to('/activities')->with('error', 'Méthode HTTP incorrecte.');
    }

    $activityModel = new ActivityModel();
    $activity = $activityModel->find($id);

    if (!$activity) {
        throw new \CodeIgniter\Exceptions\PageNotFoundException("Activity with ID $id not found");
    }

    // Affichez les données reçues pour le débogage
  

    // Validation des données
    $validationRules = [
        'name'        => 'required|min_length[3]',
        'description' => 'required|min_length[5]',
        'date'        => 'required|valid_date',
        'category_id' => 'required|integer'
    ];

    if ($this->validate($validationRules)) {
        $data = [
            'name'        => $this->request->getPost('name'),
            'description' => $this->request->getPost('description'),
            'date'        => $this->request->getPost('date'),
            'category_id' => $this->request->getPost('category_id')
        ];

        $activityModel->update($id, $data);
        session()->setFlashdata('success', 'Activity updated successfully.');
        return redirect()->to('/activities/edit/' . $id);

    } else {
        session()->setFlashdata('error', 'Validation failed.');
        return redirect()->to('/activities/edit/' . $id)->withInput();
    }
}


public function delete($id)
{
    $activityModel = new \App\Models\ActivityModel();   
    $activity = $activityModel->find($id);
    if ($activity) {
        $activityModel->delete($id);
        return $this->response->setJSON(['success' => 'Activity deleted successfully.']);
    } else {
        return $this->response->setJSON(['error' => 'Activity not found.']);
    }
}


public function store()
{
    $name = trim($this->request->getPost('activityName'));
    $description = trim($this->request->getPost('activityDescription'));
    $date = $this->request->getPost('date');
    $categoryId = $this->request->getPost('category_id');
    $errors = [];
    if (empty($name)) {
        $errors['name'] = 'Le nom de l\'activité est requis.';
    }
    if (empty($description)) {
        $errors['description'] = 'La description est requise.';
    }
    if (empty($date)) {
        $errors['date'] = 'La date est requise.';
    }
    if (empty($categoryId)) {
        $errors['category_id'] = 'La catégorie est requise.';
    }
    if (!empty($errors)) {
        return view('activities/create', [
            'categories' => $this->getCategories(),
            'errors'     => $errors
        ]);
    }
    $activityData = [
        'name'        => $name,
        'description' => $description,
        'date'        => $date,
        'category_id' => $categoryId,
    ];
    $activityModel = new ActivityModel();
    if ($activityModel->insert($activityData)) {
        session()->setFlashdata('success', 'L\'activité a été créée avec succès.');
        return redirect()->to('/activity/create');
    } else {
        session()->setFlashdata('error', 'Une erreur s\'est produite lors de la création de l\'activité.');
        return redirect()->back()->withInput();
    }
}
private function getCategories()
{
    $categoryModel = new CategoryModel();
    return $categoryModel->findAll();
}

}