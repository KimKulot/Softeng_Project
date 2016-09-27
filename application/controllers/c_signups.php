<?php 

class C_signups extends CI_Controller
{
	public function __construct()
    {
        parent::__construct();
        $this->load->model('m_users');
        $this->load->model('m_trails');
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
            'password' => $this->encrypt->encode($_POST['password'])   
        );
        $this->m_users->adduser($newuser);
        $newauditlog = array(
            'email' => $_POST['email'],
            'eventdetail' => 'New User Sign Up', 
        );
        $this->m_trails->addnewtrail($newauditlog);
        redirect(base_url()."c_logins/");

    }

}