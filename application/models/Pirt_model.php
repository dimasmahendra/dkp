<?php

Class Pirt_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    function getKodeKemasan()
    {
        $q = $this->db->get('kode_kemasan');
        $data = $q->result_array();
        return $data;
    }
    function getKodePangan()
    {
        $q = $this->db->get('kode_pangan');
        $data = $q->result_array();

        foreach ($data as $key => $value) {
            $this->db->where('kode_pangan_id', $value['id']);
            $q = $this->db->get('kode_pangan_detail');
            $data = $q->result_array();
            $detail['detail'] = $data;
            $result[] = array_merge($value, $detail);
        }
        return $result;
    }
    function insertPemohon($insert)
    {
        $this->db->insert('pemohon_pirt', $insert);             
        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }  

    function getPemohon($id)
    {
        $this->db->where('id_user', $id);
        $q = $this->db->get('pemohon_pirt');
        $data = $q->result_array();
        return $data;
    }
}
?>