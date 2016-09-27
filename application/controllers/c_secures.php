<?php 

class C_secures extends CI_Controller
{
	
	public function __construct()
	{
		parent::__construct();
        $this->load->model('m_secures');
        $this->load->model('m_trails');
	}

    public function view($ndex)
    {
        $data['listOfSecures'] = $this->m_secures->getAllSecuresAdmin($ndex);
        $data['v'] = 'admin/secures/index';
        $this->load->view('admin/contentpage', $data);
    }
    
	public function index()
    {
        $data['listOfSecures'] = $this->m_secures->getAllSecures();
        $data['v'] = 'admin/secures/index';
        $this->load->view('admin/contentpage', $data);
    }

    public function newsecure()
    {
        $data['v'] = 'admin/secures/newsecure';
        $this->load->view('admin/contentpage', $data);
    }

    public function addsecure()
    {
        $newsecure = array(
            'user_id' => $this->session->userdata('ndex'),
            'name' => $_POST['name'],
            'folder' => $_POST['folder'],
            'note_type' => $_POST['note_type'],
            'note' => $_POST['note']
        );
        $this->m_secures->addnewsecure($newsecure);
        $newauditlog = array(
            'email' => $this->session->userdata('email'),
            'eventdetail' => 'Add secure note', 
        );
        $this->m_trails->addnewtrail($newauditlog);
        redirect(base_url()."c_secures/");

    }
    
     public function editsecure($ndex)
    {
        $data['thissecure'] = $this->m_secures->getSecureByNdex($ndex);
        $data['v'] = 'admin/secures/editsecure';
        $this->load->view('admin/contentpage', $data);
    }

    public function updatesecure()
    {
        
	    $updatesecure = array(
            'name' => $_POST['name'],
            'folder' => $_POST['folder'],
            'note_type' => $_POST['note_type'],
            'note' => $_POST['note']

	    );
	    $this->m_secures->updatesecure($updatesecure, $_POST['ndex']);
	    redirect(base_url()."c_secures/");
    }

    public function deletesecure($ndex)
    {
        $this->m_secures->deletesecure($ndex);
        redirect(base_url()."c_secures/");
    }

  
} 