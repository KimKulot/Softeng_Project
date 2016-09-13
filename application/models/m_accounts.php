<?php
class m_accounts extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        $this->db = $this->load->database('default', TRUE);
    }

    //creates record in the database
    function addnewaccount($data)
    {
        $this->db->insert('tblaccounts', $data);
    }

    function getAllAccountAdmin($ndex)
    {
        $this->db->where('user_id', $ndex);
        $query = $this->db->get('tblaccounts');
        return $query->result();
    }

    function getSearch($search)
    {
        $this->db->like('url', $search);
        $query = $this->db->get('tblaccounts');
        return $query->result();
        // $this->db->where('url', $search);
        // $query = $this->db->get('tblaccounts');
        // var_dump($query->result()); die;
        // return $query->row_array();
    }   

    //reads record in the database
    function getAllAccounts()
    {
        $query = $this->db->get('tblaccounts');
        return $query->result();
    }


    //reads record by condition
    function getAccountByNdex($accountndex)
    {
        $this->db->where('ndex', $accountndex);
        $query = $this->db->get('tblaccounts');
        return $query->row_array();
    }

    //updates record in the database
    function updateaccount($data, $accountndex)
    {
        $this->db->where('ndex', $accountndex);
        $this->db->update('tblaccounts', $data);
    }

    //delete a record in your database
    function deleteaccount($accountndex)
    {
        $this->db->where('ndex', $accountndex);
        $this->db->delete('tblaccounts');
    }
    
}
