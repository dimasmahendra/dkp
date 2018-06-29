<?php

Class Home_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        $this->load->library('library_src');
    }

    function Header_source()
    {
        $data["header_css"] = $this->library_src->header_css();
        $data["footer_js"] = $this->library_src->footer_js();
        return $data;
    }
}
?>