<?php
namespace App\Controllers;
 
class PaymentController extends BaseController{
  
    public function index($id = null)
{
    $voyageModel = new \App\Models\VoyageModel();
        
    if ($id === null) {
        throw new \CodeIgniter\Exceptions\PageNotFoundException('Voyage non trouvé');
    }

    $destinations = $voyageModel->find($id);

    if (!$destinations) {
        throw new \CodeIgniter\Exceptions\PageNotFoundException('Voyage non trouvé');
    }
    $montant = $destinations['budget'];
    $data = [
        'destinations' => $destinations,
        'montant' => $montant,
    ];

    return view('website/paiement', $data);
}


}