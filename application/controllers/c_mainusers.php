<?php
class C_mainusers extends CI_Controller
{
    //contructor to call m_book model
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_users');
        $this->load->model('m_secures');
        $this->load->model('m_codes');
        $this->load->library('postmark');
        $this->load->model('m_trails');
        $this->load->library('encrypt');
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
    
    public function sentkeycode()
    {
        if($_POST['password'] == $_POST['confirmpassword'])
        {
            $length = 4;
            $rand = substr(str_shuffle(str_repeat($x='0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ', ceil($length/strlen($x)) )),1,$length);
            // $newcode = array(
            //     'code' => $rand
            // );

             $newuser = array(
                'role' => 'user',
                'email' => $_POST['email'],
                'firstname' => $_POST['firstname'],
                'lastname' => $_POST['lastname'],
                'password' => $this->encrypt->encode($_POST['password']),
                'toggle' =>  'deactivate',
                'code' => $rand
            );
                $this->m_users->adduser($newuser);
                $codelink = "http://localhost/box_pandora/c_mainusers/set_code";
                $this->sendEmail($_POST['email'], $rand , $codelink);
                //$this->m_codes->addcode($newcode);
                $this->load->view('admin/codes/code_confirm');
        }
        else
        {
            redirect(base_url ()."c_signups/newuser/");
        }
      
    }

    public function set_code()
    {
         $this->load->view('admin/codes/index');
    }
    public function code_check()
    {
        $boolEmail = $this->m_codes->existcode($_POST['code']);

        //2. If Login is ok means go to booklist page else go back to login and say pagxure..
        
        if($boolEmail)
        {   
            $updateuser = array(
                'toggle' => 'activate' 
            );
            $ndex = $this->session->userdata('ndex');
            $this->m_users->updateuser($updateuser, $ndex);

            $this->load->view('admin/codes/account_activated');
        }
        else
        {
           $this->load->view('admin/codes/index');
        }
    }

    public function adduser()
    {
       
        if($this->session->set_userdata('confirmpassword') == $this->session->set_userdata('password'))
        {

        	$newuser = array(
                'role' => $this->session->set_userdata('role'),
                'email' => $this->session->set_userdata('email'),
                'firstname' => $this->session->set_userdata('firstname'),
                'lastname' => $this->session->set_userdata('lastname'),
                'password' => $this->session->set_userdata('password')
            );
            $this->m_users->adduser($newuser);
            $newauditlog = array(
                'email' => $this->session->userdata('email'),
                'eventdetail' => 'new user', 
            );
            redirect(base_url()."c_mainusers/");
        }
        else
        {
            redirect(base_url ()."c_mainusers/newuser/".$_POST['ndex']);
        }

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
                'password' => $this->encrypt->encode($_POST['password']) 
            );
            $this->m_users->updateuser($updateuser, $_POST['ndex']);
            redirect(base_url()."c_mainusers");
        }
        else
        {
            redirect(base_url()."c_mainusers/edituser/".$_POST['ndex']);
        }
      
    }
   
    public function sendEmail($emailaddress, $code, $link)
    {
        $this->postmark->from('benedict.deasis@jmc.edu.ph', 'JMC Library System');

        $this->postmark->to($emailaddress, 'To Name');

        $this->postmark->cc('cc@example.com', 'Cc Name');
        $this->postmark->bcc('bcc@example.com', 'BCC Name');
        $this->postmark->reply_to('us@us.com', 'Reply To');

        // optional
        $this->postmark->tag('Some Tag');

        $this->postmark->subject('Soft Eng');
        $this->postmark->message_plain(' Just logged in to the system');
        $this->postmark->message_html('<html><strong>' . 'Key code: ' . $code . ' Key link: ' . $link .'</strong></html>');

        // add attachments (optional)
        // send the email
        $this->postmark->send();
    }
}