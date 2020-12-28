<?php 
namespace App\Controllers;
use App\Models\FormModel;
use CodeIgniter\Controller;

class SendEmail extends Controller
{

    public function index() 
	{
        return view('form_email');
    }

    function sendemail() { 
        $to = $this->request->getVar('mailTo');
        $name = $this->request->getVar('name');
        $message = $this->request->getVar('message');
        
        $email = \Config\Services::email();

        $email->setTo($to);
        $email->setFrom('muhdannywaskito14@gmail.com', 'Tes Send Email With CI 4');
        
        $email->setSubject($name);
        $email->setMessage($message);

        if ($email->send()) 
		{
            session()->setFlashdata('pesan','success');
            return redirect()->to(base_url());
        } 
		else 
		{
            $data = $email->printDebugger(['headers']);
            print_r($data);
        }
    }

}