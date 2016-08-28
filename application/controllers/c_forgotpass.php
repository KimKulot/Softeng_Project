<?php  

class C_forgotpass extends CI_controller
{
	
	public function __construct()
	{
		parent::__construct();
        $this->load->model('m_users');
	}

	public function index()
	{
		$data['v'] = 'forgotpass/emailuser';
		$this->load->view('admin/forgotpass/emailuser', $data);
	}
	public function email_check()
	{
		
        $boolEmail = $this->m_users->existemail($_POST['email']);
      	$ndex = $this->session->userdata('id');
        //2. If Login is ok means go to booklist page else go back to login and say pagxure..
        if($boolEmail)
        {
            //this is where we will send an email to admin..
            //$this->sendEmail('sheeramaepenaranda525@gmail.com');
            
        	redirect(base_url()."c_forgotpass/editpass/" . $ndex);
        }
        else
        {
            redirect(base_url()."c_forgotpass/");
        }
	}

	public function editpass($ndex)
    {
        $data['thisuser'] = $this->m_users->getUserByNdex($ndex);
        $this->load->view('admin/forgotpass/resetuserpass', $data);
    }
	
	public function resetpass()
    {
        if($_POST['confirmpassword'] == $_POST['password'])
        {
        	$updateuser = array(
                'password' => $_POST['password']   
            );
          
            $this->m_users->updateuser($updateuser, $_POST['ndex']);
            redirect(base_url()."c_logins");
        }
        else
        {
            redirect(base_url()."c_mainusers/edituser/".$_POST['ndex']);
        }
      
    } 
}