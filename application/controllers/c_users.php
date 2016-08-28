<?php
class C_users extends CI_Controller
{
    //contructor to call m_book model
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_accounts');
    }

    public function index()
    {
        $data['v'] = 'users/index';
        $this->load->view('contentpage', $data);
    }

    public function newuser()
    {
        $data['v'] = 'users/adduser';
        $this->load->view('contentpage', $data);
    }

    //
    public function saveuser()
    {

    }
}

