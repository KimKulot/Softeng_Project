<?php
class C_accounts extends CI_Controller
{
    //contructor to call m_account model
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_accounts');
    }

    public function index()
    {
        $data['listOfAccounts'] = $this->m_accounts->getAllAccounts();
        $data['v'] = 'admin/accounts/index';
        $this->load->view('admin/contentpage', $data);
    }

    public function newaccount()
    {
        $data['v'] = 'admin/accounts/newaccount';
        $this->load->view('admin/contentpage', $data);
    }

    public function addaccount()
    {
        $newaccount = array(
            'label' => $_POST['label'],
            'email' => $_POST['email'],
            'password' => $_POST['password']
        );
        $this->m_accounts->addnewaccount($newaccount);
        redirect(base_url()."c_accounts/");
    }

    public function editaccount($accountno)
    {
        $data['thisaccount'] = $this->m_accounts->getAccountByNdex($accountno);
        $data['v'] = 'admin/accounts/editaccount';
        $this->load->view('admin/contentpage', $data);
    }

    public function updateaccount()
    {
        if($_POST['confirmpassword'] == $_POST['password'])
        {
            $updateaccount = array(
                'label' => $_POST['label'],
                'email' => $_POST['email'],
                'password' => $_POST['password'],

            );
            $this->m_accounts->updateaccount($updateaccount, $_POST['ndex']);
            redirect(base_url()."c_accounts/");
        }
        else
        {
            redirect(base_url()."c_accounts/editaccount/".$_POST['ndex']);
        }
       
    }

    //this should be executed if your user is really sure to delete.
    public function deleteaccount($accountndex)
    {
        $this->m_accounts->deleteaccount($accountndex);
        redirect(base_url()."c_accounts/");
    }

}