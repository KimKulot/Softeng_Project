<?php 

class C_signups extends CI_Controller
{
	public function __construct()
    {
        parent::__construct();
        $this->load->model('m_users');
    }
	public function newuser()
    {
    	$data['listOfAccounts'] = $this->m_users->getAllUser();
        $data['v'] = 'admin/users/newuser';
        $this->load->view('admin/sign_up', $data);
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
        redirect(base_url()."c_logins/");

    }

}