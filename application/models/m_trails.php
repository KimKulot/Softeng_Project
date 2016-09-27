<?php
class m_trails extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        $this->db = $this->load->database('default', TRUE);
    }

    function getAllTrails()
    {
        $query = $this->db->get('tblatrails');
        return $query->result();
    }

    function addnewtrail($data)
    {
        $this->db->insert('tblatrails', $data);
    }

    
}
