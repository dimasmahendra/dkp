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
}
?>