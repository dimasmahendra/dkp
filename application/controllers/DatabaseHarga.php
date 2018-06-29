<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DatabaseHarga extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->library('library_src');
        $this->load->model('Home_model');
    }

    public function index()
    {
        $result['data'] = $this->Home_model->Header_source();        
        $this->load->view('viewHeader', $result);  
        $this->load->view('harga/viewHarga');  
        $this->load->view('viewFooter');
    }
}
?>