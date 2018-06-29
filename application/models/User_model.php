<?php

Class User_model extends CI_Model
{
    function insertUser($post)
    {
        $this->db->insert('user', $post);             
        if ($this->db->affected_rows() > 0) {
            $this->db->where('email', $post['email']);          
            $q = $this->db->get('user');
            $data = $q->result_array();

            $user = $data[0];
            $menuparent = array(
                'iduser'     => $data[0]['level'],
                'parentmenu' => 0
            );
            $this->db->where($menuparent);
            $q = $this->db->get('menu');
            $getmenu = $q->result_array();

            foreach ($getmenu as $key => $value) {
                $this->db->where('parentmenu', $value['idmenu']);
                $this->db->order_by("urut", "asc");
                $q = $this->db->get('menu');
                $getmenu = $q->result_array();
                $list['menuchild'] = $getmenu;
                $result[] = array_merge($value, $list);
            }    
            $user['menu'] = $result;
            return $user;
        } else {
            return false;
        }
    }  

    function checklogin($post)
    {
        $this->load->helper('menu_helper');
        $this->db->where('email', $post['email']);          
        $q = $this->db->get('user');
        $data = $q->result_array();
        if (!empty($data)) {
            if (password_verify($post['password'], $data[0]['password'])) {
                $user = $data[0];
                $menuparent = array(
                    'iduser'     => $data[0]['level'],
                    'parentmenu' => 0
                );
                $this->db->where($menuparent);
                $q = $this->db->get('menu');
                $getmenu = $q->result_array();

                foreach ($getmenu as $key => $value) {
                    $this->db->where('parentmenu', $value['idmenu']);
                    $this->db->order_by("urut", "asc");
                    $q = $this->db->get('menu');
                    $getmenu = $q->result_array();
                    $list['menuchild'] = $getmenu;
                    $result[] = array_merge($value, $list);
                }    
                $user['menu'] = $result;
                return $user;
            } else {
                return FALSE;
            }            
        }
        else {
            return FALSE;
        }
    }    
}
?>