<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kontak extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->library('library_src');
        $this->load->model(array('Layanan_model', 'Home_model'));
    }

    public function index()
    {
    	$result['data'] = $this->Home_model->Header_source();
        $result['login_modal'] = $this->load->view('modal/loginModal', '', TRUE);
        $hasil['footer_src'] = $this->load->view('footer/footer_script', '', TRUE);
        $data['report'] = $this->Layanan_model->getKontak();
        $this->load->view('viewHeader', $result);
        $this->load->view('kontak/viewKontakPIRT', $data);  
        $this->load->view('viewFooter', $hasil);
    }

    public function reportpss()
    {
        $result['data'] = $this->Home_model->Header_source();
        $result['login_modal'] = $this->load->view('modal/loginModal', '', TRUE);
        $hasil['footer_src'] = $this->load->view('footer/footer_script', '', TRUE);
        $data['report_modal'] = $this->load->view('modal/reportPssModal', '', TRUE);
        $data['report'] = $this->Layanan_model->getFormpss();
        $this->load->view('viewHeader', $result);
        $this->load->view('layanan/pedagangsiapsaji/viewReportPss', $data);  
        $this->load->view('viewFooter', $hasil);
    }
}
?>