<?php
class C_audit_trails extends CI_Controller
{
    //contructor to call m_account model
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_trails');
    }

    public function index()
    {
        $data['listOfTrails'] = $this->m_trails->getAllTrails();
        $data['v'] = 'admin/trails/index';
        $this->load->view('admin/contentpage', $data);
    }

    public function search()
    {
        if(isset($_POST['search']))
        {
            $search = $_POST['search'];
            $data['listOfAccounts'] = $this->m_accounts->getSearch($search);
            $data['v'] = 'admin/accounts/index';
            $this->load->view('admin/contentpage', $data);
            // $search = '%'. $_POST['search'] . '%';
            // $data['listOfAccounts'] = $this->m_accounts->getSearch($search);
            // $data['v'] = 'admin/accounts/index';
            // $this->load->view('admin/contentpage', $data);
        }
    }

 
    //this should be executed if your user is really sure to delete.
    public function deleteaccount($accountndex)
    {
        $this->m_accounts->deleteaccount($accountndex);
        $newauditlog = array(
            'email' => $this->session->userdata('email'),
            'eventdetail' => 'Delete Account', 
        );
        $this->m_trails->addnewtrail($newauditlog);
        redirect(base_url()."c_accounts/");
    }

}