<?php
class m_codes extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        $this->db = $this->load->database('default', TRUE);
    }

    //creates record in the database
    function addcode($data)
    {
        $this->db->insert('tblcodes', $data);
    }

    function existcode($code)
    {
        $this->db->where('code', $code);

        $query = $this->db->get('tblusers');

        $qresult = $query->first_row('array');
        //count if query->result() array has content in it.
        if(count($qresult) > 0)
        {
            $codeArray = array(
                "ndex" => $qresult['ndex'],
                "code" => $qresult['code']
            );

            $this->session->set_userdata($codeArray);
            $this->session->set_flashdata('Code Exist', 'Valid code');
            return true;
        }
        else
        {
            $this->session->set_flashdata('emailError', 'Invalid Email Address');
            return false;
        }
    }
    
}
