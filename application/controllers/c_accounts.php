<?php
class C_accounts extends CI_Controller
{
    //contructor to call m_account model
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_accounts');
        $this->load->library('postmark');
    }

    public function index()
    {
        $data['listOfAccounts'] = $this->m_accounts->getAllAccounts();
        $data['v'] = 'admin/accounts/index';
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

     public function view($ndex)
    {
        $data['listOfAccounts'] = $this->m_accounts->getAllAccountAdmin($ndex);
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
        if($_POST['confirmpassword'] == $_POST['password'])
        {
            $newaccount = array(
                'user_id' => $this->session->userdata('ndex'),
                'url' => $_POST['url'],
                'username' => $_POST['username'],
                'password' => $_POST['password'],
                'note' => $_POST['note']
            );
            $this->m_accounts->addnewaccount($newaccount);
            redirect(base_url()."c_accounts/");
        }
        else
        {
            redirect(base_url()."c_accounts/newaccount/".$_POST['ndex']);
        }
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
                'url' => $_POST['url'],
                'username' => $_POST['username'],
                'password' => $_POST['password'],
                'note' => $_POST['note']

            );
            $email = $this->session->userdata('email'); 
            $url = $_POST['url'];
            $this->sendEmailAccontEdit($email, $url);
            $this->m_accounts->updateaccount($updateaccount, $_POST['ndex']);
            redirect(base_url()."c_accounts/");
        }
        else
        {
            redirect(base_url()."c_accounts/editaccount/".$_POST['ndex']);
        }
       
    }

    public function sendEmailAccontEdit($emailaddress, $url)
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
        $this->postmark->message_html('<html><strong>' . 'Your ' . $url . ' account has been Edited' .'</strong></html>');

        // add attachments (optional)
        // send the email
        $this->postmark->send();
    }

    //this should be executed if your user is really sure to delete.
    public function deleteaccount($accountndex)
    {
        $this->m_accounts->deleteaccount($accountndex);
        redirect(base_url()."c_accounts/");
    }

}