<?php 
/**
* 
*/
class Stripe extends CI_Controller
{
	public function __construct()
    {
        parent::__construct();
        $this->load->model('m_users');
        $this->load->library('postmark');
    }


    
}