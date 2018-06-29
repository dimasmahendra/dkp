<?php

Class Cetak_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    function getCetakPIRT($user_id)
    {
        $this->db->where('id_user', $user_id);  
        $q = $this->db->get('pemohon_pirt');
        $data = $q->result_array();

        foreach ($data as $key => $value) {
            $this->db->where('id', $value['kode_pangan']);  
            $q = $this->db->get('kode_pangan_detail');
            $hasil = $q->result_array();
            $value['pangan'] = $hasil;

            $this->db->where('id', $value['kode_kemasan']);  
            $q = $this->db->get('kode_kemasan');
            $hasil = $q->result_array();
            $value['kemasan'] = $hasil;
        }        
        $data = $value;
        return $data;
    }
}
?>