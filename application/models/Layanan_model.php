<?php

Class Layanan_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    function insertFormpss($insert)
    {
        $this->db->insert('layanan_pss_detail', $insert);             
        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    function getFormpss()
    {        
        $this->db->select('*, layanan_pss_detail.id');
        $this->db->from('layanan_pss_detail');
        $this->db->join('layanan_pss', 'layanan_pss_detail.id = layanan_pss.layanan_pss_detail_id', 'left'); 
        $query = $this->db->get();
        $result  = $query->result_array();
        return $result;    
    }

    function insertPenilaianpss($insert, $status)
    {
        $this->db->where('layanan_pss_detail_id', $insert['layanan_pss_detail_id']);
        $q = $this->db->get('layanan_pss');
        $data = $q->row();
        if (empty($data)) {
            $this->db->insert('layanan_pss', $insert);             
            if ($this->db->affected_rows() > 0) {
                $this->db->where('id', $insert['layanan_pss_detail_id']);
                $update = $this->db->update('layanan_pss_detail', array('status' => $status));
                if ($update == '1') 
                {
                    return TRUE;
                } 
                else 
                {
                    return FALSE;
                }
            } else {
                return false;
            }
        }
        else {
            $this->db->where('id', $data->id);
            $update = $this->db->update('layanan_pss', $insert);
            if ($update == '1') 
            {
                $this->db->where('id', $insert['layanan_pss_detail_id']);
                $update = $this->db->update('layanan_pss_detail', array('status' => $status));
                if ($update == '1') 
                {
                    return TRUE;
                } 
                else 
                {
                    return FALSE;
                }
            } 
            else 
            {
                return FALSE;
            }
        }
    }  

    function getKontak()
    {        
        $this->db->select('*');
        $this->db->from('pemohon_pirt');
        $this->db->where('status', 'Sudah Terverifikasi');
        $this->db->where('no_pirt is NOT NULL', NULL, FALSE);
        $query = $this->db->get();
        $result  = $query->result_array();
        return $result;    
    }
}
?>