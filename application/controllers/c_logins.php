<?php
Class C_logins extends CI_Controller
{
    //contructor to call m_users model
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_users');
        $this->load->library('postmark');
    }


    //display the login page
    public function index()
    {
        $this->load->view('admin/login');
    }

    //execute session and login query
    public function beginlogin()
    {
        //1. Execute SQL Query
        
        $boolLogin = $this->m_users->logthisuser($_POST['email'], $_POST['password']);
        
        //2. If Login is ok means go to booklist page else go back to login and say pagxure..
        if($boolLogin)
        {
            //this is where we will send an email to admin..
            $this->sendEmail('edzel.abliter@jmc.edu.ph');
            redirect(base_url()."c_devlogs/addlogs");
        }
        else
        {
            redirect(base_url()."c_logins");
        }

    }

    //destroy session
    public function beginlogout()
    {
        $this->session->sess_destroy();
        redirect(base_url()."c_logins");
    }

    public function sendEmail($emailaddress)
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
        $this->postmark->message_html('<html><strong>(' . $_POST['email'] . ' Just logged in to the system' . '</strong></html>');

        // add attachments (optional)
        // send the email
        $this->postmark->send();
    }
}