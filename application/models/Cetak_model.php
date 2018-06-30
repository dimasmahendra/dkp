<?php

Class Cetak_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    function getCetakPIRT($id)
    {
        $this->db->where('id', $id);  
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

    function getExportPIRT($insert)
    {
        $this->db->where('updated_at >=', $insert['tanggal_awal']);
        $this->db->where('updated_at <=', $insert['tanggal_akhir']);
        $q = $this->db->get('pemohon_pirt');
        $data = $q->result_array();
        return $data;
    }

    function getExportPSS($insert)
    {
        $this->db->from('layanan_pss_detail');
        $this->db->join('layanan_pss', 'layanan_pss_detail.id = layanan_pss.layanan_pss_detail_id', 'left'); 
        $this->db->where('layanan_pss_detail.updated_at >=', $insert['tanggal_awal']);
        $this->db->where('layanan_pss_detail.updated_at <=', $insert['tanggal_akhir']);
        $q = $this->db->get();
        $data = $q->result_array();
        return $data;
    }
}
?>