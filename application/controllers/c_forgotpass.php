<?php  

class C_forgotpass extends CI_controller
{
	
	public function __construct()
	{
		parent::__construct();
        $this->load->model('m_users');
        $this->load->library('postmark');
	}

	public function index()
	{
		$data['v'] = 'forgotpass/emailuser';
		$this->load->view('admin/forgotpass/emailuser', $data);
	}

    public function choose()
    {
        $this->load->view('admin/forgotpass/choose');
    }

    public function checksecurity()
    {
        $boolEmail = $this->m_users->existemail($_POST['email']);
        //$boolEmail = true;
        $ndex = $this->session->userdata('ndex');

        //2. If Login is ok means go to booklist page else go back to login and say pagxure..
        if($boolEmail)
        {
            //this is where we will send an email to admin..
            $resetlink = (base_url()."c_forgotpass/editpass/" . $ndex); 
            $this->sendEmail($_POST['email'], $resetlink);
            //redirect(base_url()."c_forgotpass/confirm/");
            $this->load->view('admin/forgotpass/confirm');

        }
        else
        {
            redirect(base_url()."c_forgotpass/");
        }
    }

    // public function security_question()
    // {
    //     $this->load->view('admin/forgotpass/security');
    // }

	public function email_check()
	{
		
        $boolEmail = $this->m_users->existemail($_POST['email']);
        //$boolEmail = true;
      	$ndex = $this->session->userdata('ndex');

        //2. If Login is ok means go to booklist page else go back to login and say pagxure..
        if($boolEmail)
        {
            //this is where we will send an email to admin..
            $resetlink = (base_url()."c_forgotpass/editpass/" . $ndex); 
            $this->sendEmail($_POST['email'], $resetlink);
        	//redirect(base_url()."c_forgotpass/confirm/");
            $this->load->view('admin/forgotpass/confirm');

        }
        else
        {
            redirect(base_url()."c_forgotpass/");
        }
	}

	public function sendEmail($emailaddress, $resetlink)
    {
        $this->postmark->from('benedict.deasis@jmc.edu.ph', 'JMC Library System');

        $this->postmark->to($emailaddress, 'To Name');

        $this->postmark->cc('cc@example.com', 'Cc Name');
        $this->postmark->bcc('bcc@example.com', 'BCC Name');
        $this->postmark->reply_to('us@us.com', 'Reply To');

        // optional
        $this->postmark->tag('Some Tag');

        $this->postmark->subject('Soft Eng');
        $this->postmark->message_plain($_POST['email'] . ' Just logged in to the system');
        $this->postmark->message_html('<html><strong>(' . 'Reset Link ' . $resetlink . '</strong></html>');

        // add attachments (optional)
        // send the email
        $this->postmark->send();
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
          
                'password' => $this->encrypt->encode($_POST['password'])   
            );
          
            $this->m_users->updateuser($updateuser, $_POST['ndex']);
            $newauditlog = array(
                'email' => $this->session->userdata('email'),
                'eventdetail' => 'Reset/edit Password', 
            );
        $this->m_trails->addnewtrail($newauditlog);
            redirect(base_url()."c_logins");
        }
        else
        {
            redirect(base_url()."c_mainusers/edituser/".$_POST['ndex']);
        }
    } 
}

