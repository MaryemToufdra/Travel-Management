<?php
namespace App\Controllers;
use App\Models\ContactModel;
class ContactController extends BaseController
{

    public function submit()
    {
        $name = $this->request->getPost('name');
        $email = $this->request->getPost('email');
        $subject = $this->request->getPost('subject');
        $message = $this->request->getPost('message');
            if (!$name || !$email || !$subject || !$message) {
            return redirect()->back()->with('error', 'All fields are required.');
        }
            $cm = new ContactModel();
        $data = [
            'username' => $name,
            'email' => $email,
            'subject' => $subject,
            'message' => $message
        ];
            if ($cm->save($data)) {
             session()->setFlashdata('success', 'Your message has been sent successfully.');

            return redirect()->to('/contact');
        } else {
            return redirect()->back()->with('error', 'Failed to send your message.');
        }
    }
    public function afficher(){
        $cm= new ContactModel();
        $c = $cm->findAll(); 
        return view('contact/list', ['contacts' => $c]);
    }
    public function delete($id)
    {
        $model = new ContactModel();
        $c = $model->find($id);

        if ($c) {
            $model->delete($id); 
            return $this->response->setJSON(['success' => 'Message deleted successfully.']);
        } else {
            return $this->response->setJSON(['error' => 'Message not found.']);
        }
    }
}