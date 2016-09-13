<?php 
/**
* 
*/
class m_devlogs extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
        $this->db = $this->load->database('default', TRUE);
	}

	function addnewlog($data)
    {
        $this->db->insert('tbllogs', $data);
    }

    function getAllLog()
    {
        $this->db->from('tbllogs');
        $this->db->order_by("ndex", "desc");
        $query = $this->db->get();
        return $query->result();
    }

}