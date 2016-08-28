<?php
class C_mainusers extends CI_Controller
{
    //contructor to call m_book model
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_users');
    }

    public function index()
    {
        $data['listOfAccounts'] = $this->m_users->getAllUser();
        $data['v'] = 'admin/users/index';
        $this->load->view('admin/contentpage', $data);
    }

    public function newuser()
    {
    	$data['listOfAccounts'] = $this->m_users->getAllUser();
        $data['v'] = 'admin/users/newuser';
        $this->load->view('admin/contentpage', $data);
    }

    public function adduser()
    {

    	 $newuser = array(
            'role' => $_POST['role'],
            'email' => $_POST['email'],
            'firstname' => $_POST['firstname'],
            'lastname' => $_POST['lastname'],
            'password' => $_POST['password']   
        );
        $this->m_users->adduser($newuser);
        redirect(base_url()."c_mainusers/");

    }

    public function edituser($ndex)
    {
        $data['thisuser'] = $this->m_users->getUserByNdex($ndex);
        $data['v'] = 'admin/users/edituser';
        $this->load->view('admin/contentpage', $data);
    }
    public function updateuser()
    {
        if($_POST['confirmpassword'] == $_POST['password'])
        {
        	$updateuser = array(
                'role' => $_POST['role'],
                'email' => $_POST['email'],
                'firstname' => $_POST['firstname'],
                'lastname' => $_POST['lastname'],
                'password' => $_POST['password']   
            );
          
            $this->m_users->updateuser($updateuser, $_POST['ndex']);
            redirect(base_url()."c_mainusers");
        }
        else
        {
            redirect(base_url()."c_mainusers/edituser/".$_POST['ndex']);
        }
      
    }
}