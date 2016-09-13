<?php

class m_secures extends CI_Model
{
	
    function __construct()
	{
		parent::__construct();
        $this->db = $this->load->database('default', TRUE);
	}


	function getAllSecures()
	{
		$query = $this->db->get('tblsecures');
		return $query->result();
	}

    function getAllSecuresAdmin($ndex)
    {
        $this->db->where('user_id', $ndex);
        $query = $this->db->get('tblsecures');
        return $query->result();
    }

	function addnewsecure($data)
    {
		$this->db->insert('tblsecures', $data);
    }

    function getSecureByNdex($ndex)
    {
        $this->db->where('ndex', $ndex);
        $query = $this->db->get('tblsecures');
        return $query->row_array();
    }

    function updatesecure($data, $ndex)
    {
        $this->db->where('ndex', $ndex);
        $this->db->update('tblsecures', $data);
    }

    function deletesecure($ndex)
    {
        $this->db->where('ndex', $ndex);
        $this->db->delete('tblsecures');
    }

}