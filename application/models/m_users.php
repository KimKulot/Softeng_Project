<?php
class m_users extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        $this->db = $this->load->database('default', TRUE);
    }
    function adduser($data)
    {
		$this->db->insert('tblusers', $data);
    }
    function updateuser($data)
    {

    }
     function getUserByNdex($userndex)
    {
        $this->db->where('ndex', $userndex);
        $query = $this->db->get('tblusers');
        return $query->row_array();
    }
      //reads record in the database
    function getAllUser()
    {
        $query = $this->db->get('tblusers');
        return $query->result();
    }

    function updateaccount($data, $userndex)
    {
        $this->db->where('ndex', $userndex);
        $this->db->update('tblusers', $data);
    }

    function existemail($email)
    {
        $this->db->where('email', $email);

        $query = $this->db->get('tblusers');

        $qresult = $query->first_row('array');
        //count if query->result() array has content in it.
        if(count($qresult) > 0)
        {
            $emailArray = array(
                "id" => $qresult['id'],
                "email" => $qresult['email'],
                "firstname" => $qresult['firstname'],
                "lastname" => $qresult['lastname'],
                "role" => $qresult['role']
            );
             $this->session->set_userdata($emailArray);
            $this->session->set_flashdata('Email Exist', 'Valid Email');
            return true;
        }
        else
        {
            $this->session->set_flashdata('emailError', 'Invalid Email Address');
            return false;
        }
    }

    //this will be executed by Login Controller..
    function logthisuser($email, $password)
    {
        $this->db->where('email', $email);
        $this->db->where('password', $password );

        $query = $this->db->get('tblusers');

        $qresult = $query->first_row('array');
        //count if query->result() array has content in it.
        if(count($qresult) > 0)
        {
            //this is where we put the session data..
            $loginArray = array(
                "email" => $qresult['email'],
                "firstname" => $qresult['firstname'],
                "lastname" => $qresult['lastname'],
                "role" => $qresult['role']
            );

            $this->session->set_userdata($loginArray);

            return true;
        }
        else
        {
            $this->session->set_flashdata('loginError', 'Invalid Login Credentials');
            return false;
        }

    }
}
