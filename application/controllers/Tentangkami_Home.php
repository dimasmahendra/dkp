<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tentangkami_Home extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->library('library_src');
        $this->load->model(array('Home_model', 'TentangKami_model'));
    }

    public function sekapursirih()
    {
    	$result['data'] = $this->Home_model->Header_source();
        $hasil['footer_src'] = $this->load->view('footer/footer_script', '', TRUE);        
        $result['login_modal'] = $this->load->view('modal/loginModal', '', TRUE);        
        $result['regist_modal'] = $this->load->view('modal/registModal', '', TRUE);
        $content = $this->TentangKami_model->getTentangKami();
        $this->load->view('viewHeader', $result); 
        $this->load->view('home/tentangkami/viewSekapurSirih', $content); 
        $this->load->view('viewFooter', $hasil); 
    }

    public function visimisi()
    {
        $result['data'] = $this->Home_model->Header_source();
        $hasil['footer_src'] = $this->load->view('footer/footer_script', '', TRUE);        
        $result['login_modal'] = $this->load->view('modal/loginModal', '', TRUE);        
        $result['regist_modal'] = $this->load->view('modal/registModal', '', TRUE);
        $content = $this->TentangKami_model->getTentangKami();
        $this->load->view('viewHeader', $result); 
        $this->load->view('home/tentangkami/viewVisiMisi', $content); 
        $this->load->view('viewFooter', $hasil); 
    }

    public function profiledkp()
    {
        $result['data'] = $this->Home_model->Header_source();
        $hasil['footer_src'] = $this->load->view('footer/footer_script', '', TRUE);        
        $result['login_modal'] = $this->load->view('modal/loginModal', '', TRUE);        
        $result['regist_modal'] = $this->load->view('modal/registModal', '', TRUE);
        $content = $this->TentangKami_model->getTentangKami();
        $this->load->view('viewHeader', $result); 
        $this->load->view('home/tentangkami/viewProfileDKP', $content); 
        $this->load->view('viewFooter', $hasil); 
    }

    public function tupoksidkp()
    {
        $result['data'] = $this->Home_model->Header_source();
        $hasil['footer_src'] = $this->load->view('footer/footer_script', '', TRUE);        
        $result['login_modal'] = $this->load->view('modal/loginModal', '', TRUE);        
        $result['regist_modal'] = $this->load->view('modal/registModal', '', TRUE);
        $content = $this->TentangKami_model->getTentangKami();
        $this->load->view('viewHeader', $result); 
        $this->load->view('home/tentangkami/viewTupoksiDKP', $content); 
        $this->load->view('viewFooter', $hasil); 
    }

    public function strukturorganisasi()
    {
        $result['data'] = $this->Home_model->Header_source();
        $hasil['footer_src'] = $this->load->view('footer/footer_script', '', TRUE);        
        $result['login_modal'] = $this->load->view('modal/loginModal', '', TRUE);        
        $result['regist_modal'] = $this->load->view('modal/registModal', '', TRUE);
        $content = $this->TentangKami_model->getTentangKami();
        $this->load->view('viewHeader', $result); 
        $this->load->view('home/tentangkami/viewStrukturOrganisasi', $content); 
        $this->load->view('viewFooter', $hasil); 
    }

    public function datapegawai()
    {
        $result['data'] = $this->Home_model->Header_source();
        $hasil['footer_src'] = $this->load->view('footer/footer_script', '', TRUE);        
        $result['login_modal'] = $this->load->view('modal/loginModal', '', TRUE);        
        $result['regist_modal'] = $this->load->view('modal/registModal', '', TRUE);
        $content = $this->TentangKami_model->getTentangKami();
        $this->load->view('viewHeader', $result); 
        $this->load->view('home/tentangkami/viewDataPegawai', $content); 
        $this->load->view('viewFooter', $hasil); 
    }
}
?>