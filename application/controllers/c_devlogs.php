<?php
class C_devlogs extends CI_Controller
{
    //contructor to call m_account model
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_devlogs');
        $this->load->model('m_trails');
    }

    public function index()
    {
        $data['listOfLogs'] = $this->m_devlogs->getAllLog();
        $data['v'] = 'admin/logs/index';
        $this->load->view('admin/contentpage', $data);
    }
    public function index_readmore()
    {
        $data['listOfLogs'] = $this->m_devlogs->getAllLog();
        $data['v'] = 'admin/logs/index_readmore';
        $this->load->view('admin/contentpage', $data);
    }

	public function addlogs()
    {
    	$browser = get_browser(null, true);
        $newauditlog = array(
            'email' => $this->session->userdata('email'),
            'eventdetail' => 'Login', 
        );
        $this->m_trails->addnewtrail($newauditlog);
        $newlog = array(
            'user_id' => $this->session->userdata('ndex'),
            'devicetype' => $browser['device_type'],
            'browser' => $browser['parent'],
            'platform' => $browser['platform'],
            'time' => date('M. d, Y, h:i A')
        );
        $this->m_devlogs->addnewlog($newlog);
        if($this->session->userdata('role') == 'admin'){
            redirect(base_url()."c_mainusers");
        }
       
        redirect(base_url()."c_accounts/");
    }

}