<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller {

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
        $this->load->view('about/viewSekapurSirih');  
        $this->load->view('viewFooter');
    }

    public function aboutVisiMisi()
    {
        $result['data'] = $this->Home_model->Header_source();        
        $this->load->view('viewHeader', $result);  
        $this->load->view('about/viewVisiMisi');  
        $this->load->view('viewFooter');
    }

    public function aboutProfileDKP()
    {
        $result['data'] = $this->Home_model->Header_source();        
        $this->load->view('viewHeader', $result);  
        $this->load->view('about/viewProfileDKP');  
        $this->load->view('viewFooter');
    }

    public function aboutTupoksiDKP()
    {
        $result['data'] = $this->Home_model->Header_source();        
        $this->load->view('viewHeader', $result);  
        $this->load->view('about/viewTupoksiDKP');  
        $this->load->view('viewFooter');
    }

    public function aboutStrukturOrganisasi()
    {
        $result['data'] = $this->Home_model->Header_source();        
        $this->load->view('viewHeader', $result);  
        $this->load->view('about/viewStrukturOrganisasi');  
        $this->load->view('viewFooter');
    }

    public function aboutDataPegawai()
    {
        $result['data'] = $this->Home_model->Header_source();        
        $this->load->view('viewHeader', $result);  
        $this->load->view('about/viewDataPegawai');  
        $this->load->view('viewFooter');
    }
}
?>