<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ppid extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->library('library_src');
        $this->load->model('Home_model');
    }

    public function index()
    {
        $result['data'] = $this->Home_model->Header_source();
        $hasil['footer_src'] = $this->load->view('footer/footer_script', '', TRUE);
        $result['login_modal'] = $this->load->view('modal/loginModal', '', TRUE);        
        $result['regist_modal'] = $this->load->view('modal/registModal', '', TRUE);
        $this->load->view('viewHeader', $result); 
        $this->load->view('home/PPID/viewPermohonanInformasi'); 
        $this->load->view('viewFooter', $hasil);  
    }

    public function dasarHukumPerwal()
    {
        $result['data'] = $this->Home_model->Header_source();
        $hasil['footer_src'] = $this->load->view('footer/footer_script', '', TRUE);
        $result['login_modal'] = $this->load->view('modal/loginModal', '', TRUE);        
        $result['regist_modal'] = $this->load->view('modal/registModal', '', TRUE);
        $this->load->view('viewHeader', $result); 
        $this->load->view('home/PPID/viewDasarHukumPerwal'); 
        $this->load->view('viewFooter', $hasil); 
    }

    public function skdip()
    {
        $result['data'] = $this->Home_model->Header_source();
        $hasil['footer_src'] = $this->load->view('footer/footer_script', '', TRUE);
        $result['login_modal'] = $this->load->view('modal/loginModal', '', TRUE);        
        $result['regist_modal'] = $this->load->view('modal/registModal', '', TRUE);
        $this->load->view('viewHeader', $result); 
        $this->load->view('home/PPID/viewSKDIP'); 
        $this->load->view('viewFooter', $hasil); 
    }

    public function informasiberkala()
    {
        $result['data'] = $this->Home_model->Header_source();
        $hasil['footer_src'] = $this->load->view('footer/footer_script', '', TRUE);
        $result['login_modal'] = $this->load->view('modal/loginModal', '', TRUE);        
        $result['regist_modal'] = $this->load->view('modal/registModal', '', TRUE);
        $this->load->view('viewHeader', $result); 
        $this->load->view('home/PPID/viewInformasiBerkala'); 
        $this->load->view('viewFooter', $hasil); 
    }

    public function informasisetiapsaat()
    {
        $result['data'] = $this->Home_model->Header_source();
        $hasil['footer_src'] = $this->load->view('footer/footer_script', '', TRUE);
        $result['login_modal'] = $this->load->view('modal/loginModal', '', TRUE);        
        $result['regist_modal'] = $this->load->view('modal/registModal', '', TRUE);
        $this->load->view('viewHeader', $result); 
        $this->load->view('home/PPID/viewInformasiSetiapSaat'); 
        $this->load->view('viewFooter', $hasil); 
    }

    public function informasisertamerta()
    {
        $result['data'] = $this->Home_model->Header_source();
        $hasil['footer_src'] = $this->load->view('footer/footer_script', '', TRUE);
        $result['login_modal'] = $this->load->view('modal/loginModal', '', TRUE);        
        $result['regist_modal'] = $this->load->view('modal/registModal', '', TRUE);
        $this->load->view('viewHeader', $result); 
        $this->load->view('home/PPID/viewInformasiSertaMerta'); 
        $this->load->view('viewFooter', $hasil); 
    }

    public function skpidpembantu()
    {
        $result['data'] = $this->Home_model->Header_source();
        $hasil['footer_src'] = $this->load->view('footer/footer_script', '', TRUE);
        $result['login_modal'] = $this->load->view('modal/loginModal', '', TRUE);        
        $result['regist_modal'] = $this->load->view('modal/registModal', '', TRUE);
        $this->load->view('viewHeader', $result); 
        $this->load->view('home/PPID/viewSKPIDPembantu'); 
        $this->load->view('viewFooter', $hasil); 
    }

    public function strukturppidpembantu()
    {
        $result['data'] = $this->Home_model->Header_source();
        $hasil['footer_src'] = $this->load->view('footer/footer_script', '', TRUE);
        $result['login_modal'] = $this->load->view('modal/loginModal', '', TRUE);        
        $result['regist_modal'] = $this->load->view('modal/registModal', '', TRUE);
        $this->load->view('viewHeader', $result); 
        $this->load->view('home/PPID/viewStrukturPPIDPembantu'); 
        $this->load->view('viewFooter', $hasil); 
    }

    public function soppermohonaninformasi()
    {
        $result['data'] = $this->Home_model->Header_source();
        $hasil['footer_src'] = $this->load->view('footer/footer_script', '', TRUE);
        $result['login_modal'] = $this->load->view('modal/loginModal', '', TRUE);        
        $result['regist_modal'] = $this->load->view('modal/registModal', '', TRUE);
        $this->load->view('viewHeader', $result); 
        $this->load->view('home/PPID/viewSOPPermohonanInformasi'); 
        $this->load->view('viewFooter', $hasil); 
    }

    public function soppenanganankeberatan()
    {
        $result['data'] = $this->Home_model->Header_source();
        $hasil['footer_src'] = $this->load->view('footer/footer_script', '', TRUE);
        $result['login_modal'] = $this->load->view('modal/loginModal', '', TRUE);        
        $result['regist_modal'] = $this->load->view('modal/registModal', '', TRUE);
        $this->load->view('viewHeader', $result); 
        $this->load->view('home/PPID/viewSOPPenangananKeberatan'); 
        $this->load->view('viewFooter', $hasil); 
    }
}
?>