<?php

Class TentangKami_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    function getTentangKami()
    {
        $q = $this->db->get('tentang_kami');
        $data = $q->row();
        return $data;
    }

    function insertTentangKami($admin_id, $insert)
    {
        $this->db->where('admin_id', $admin_id);
        $q = $this->db->get('tentang_kami');
        $data = $q->row();
        if (empty($data)) {
            $insert = array_merge($insert, array('admin_id' => $admin_id));
            $this->db->insert('tentang_kami', $insert);             
            if ($this->db->affected_rows() > 0) {
                return true;
            } else {
                return false;
            }
        }
        else {
            $this->db->where('admin_id', $admin_id);
            $update = $this->db->update('tentang_kami', $insert);
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
}
?>