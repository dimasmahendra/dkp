<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kontak extends CI_Controller {

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
        $this->load->view('kontak/viewKontakKami');  
        $this->load->view('viewFooter');
    }

    public function kontakProdukSegar()
    {
        $result['data'] = $this->Home_model->Header_source();        
        $this->load->view('viewHeader', $result);  
        $this->load->view('kontak/viewKontakProdukSegar');  
        $this->load->view('viewFooter');
    }

    public function kontakProdukAntara()
    {
        $result['data'] = $this->Home_model->Header_source();        
        $this->load->view('viewHeader', $result);  
        $this->load->view('kontak/viewKontakProdukAntara');  
        $this->load->view('viewFooter');
    }

    public function kontakProdukOlahan()
    {
        $result['data'] = $this->Home_model->Header_source();        
        $this->load->view('viewHeader', $result);  
        $this->load->view('kontak/viewKontakProdukOlahan');  
        $this->load->view('viewFooter');
    }
}
?>