<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Layanan extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->library('library_src');
        $this->load->model(array('Home_model', 'Layanan_model'));
    }

    public function alurPermohonanPIRT()
    {
        $result['data'] = $this->Home_model->Header_source();
        $result['login_modal'] = $this->load->view('modal/loginModal', '', TRUE);
        $hasil['footer_src'] = $this->load->view('footer/footer_script', '', TRUE); 
        $this->load->view('viewHeader', $result);
        $this->load->view('layanan/viewAlurPermohonanPIRT');  
        $this->load->view('viewFooter', $hasil);
    }

    public function syaratPermohonanPIRT()
    {
        $result['data'] = $this->Home_model->Header_source();
        $result['login_modal'] = $this->load->view('modal/loginModal', '', TRUE);
        $hasil['footer_src'] = $this->load->view('footer/footer_script', '', TRUE); 
        $modal['lampiranDua'] = $this->load->view('modal/lampiranDuaModal', '', TRUE);
        $modal['lampiranTiga'] = $this->load->view('modal/lampiranTigaModal', '', TRUE);
        $this->load->view('viewHeader', $result);
        $this->load->view('layanan/viewSyaratPermohonanPIRT', $modal);  
        $this->load->view('viewFooter', $hasil);
    }
}
?>