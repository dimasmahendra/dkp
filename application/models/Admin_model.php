<?php

Class Admin_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    function getStatusPermohonan($user_id)
    {
        $this->db->where('id_user', $user_id);  
        $q = $this->db->get('pemohon_pirt');
        $data = $q->row();
        return $data;
    }

    function updatePassword($id, $password)
    {
        $this->db->where('id', $id);
        $update = $this->db->update('user', array('password' => $password));
        if ($update == '1') 
        {
            return TRUE;
        } 
        else 
        {
            return FALSE;
        }
    }
}
?>