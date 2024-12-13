<?php
namespace App\Controllers;
class Paiement extends BaseController
{

function pay($id=null){
  $voyageModel = new \App\Models\VoyageModel();
  if ($id === null) {
  throw new \CodeIgniter\Exceptions\PageNotFoundException('Voyage non trouvé');
}
$destinations = $voyageModel->find($id);
if (!$destinations) {
  throw new \CodeIgniter\Exceptions\PageNotFoundException('Voyage non trouvé');
}
return view('website/paiement', ['destinations' => $destinations]);
}


}