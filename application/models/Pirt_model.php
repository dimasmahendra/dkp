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

    function editPermohonan($insert, $id)
    {
        $this->db->where('id', $id);
        $update = $this->db->update('pemohon_pirt', $insert);
        if ($update == '1') 
        {
            return TRUE;
        } 
        else 
        {
            return FALSE;
        }
    }

    function getLastInput($id)
    {
        $this->db->where('id_user', $id);
        $this->db->order_by('updated_at', 'desc');
        $this->db->limit('1');
        $q = $this->db->get('pemohon_pirt');
        $data = $q->result_array();
        if (empty($data)) {
            $table = $this->db->list_fields('pemohon_pirt');
            $data = array();
            foreach ($table as $key => $value) {
                $data[$value] = "";
            }
            return $data;
        }
        else {
            return $data[0];
        }
    }

    function ubahVerifikasi($insert, $id)
    {
        $this->db->where('id', $id);
        $update = $this->db->update('pemohon_pirt', $insert);
        if ($update == '1') 
        {
            return TRUE;
        } 
        else 
        {
            return FALSE;
        }
    }   

    function getPemohonAll()
    {
        $q = $this->db->get('pemohon_pirt');
        $data = $q->result_array();
        return $data;
    }

    function ubahStatus($insert, $id)
    {
        $this->db->where('id', $id);
        $update = $this->db->update('pemohon_pirt', $insert);
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