<?php
class C_devlogs extends CI_Controller
{
    //contructor to call m_account model
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_devlogs');
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
        $newlog = array(
            'user_id' => $this->session->userdata('ndex'),
            'devicetype' => $browser['device_type'],
            'browser' => $browser['parent'],
            'platform' => $browser['platform'],
            'time' => date('M. d, Y, h:i A')
        );
        $this->m_devlogs->addnewlog($newlog);
        redirect(base_url()."c_accounts/");
    }

}