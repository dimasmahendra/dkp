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

    public function formpss()
    {
        $result['data'] = $this->Home_model->Header_source();
        $result['login_modal'] = $this->load->view('modal/loginModal', '', TRUE);
        $hasil['footer_src'] = $this->load->view('footer/footer_script', '', TRUE);
        $this->load->view('viewHeader', $result);
        $this->load->view('layanan/pedagangsiapsaji/viewFormPss');  
        $this->load->view('viewFooter', $hasil);
    }

    public function inputFormpss()
    {
        $retVal = (empty($this->input->post('namausahatext'))) ? $this->input->post('namausaha') : $this->input->post('namausahatext');
        $insert = array(
            'namalengkap'   => $this->input->post('namalengkap'),
            'alamatlengkap' => $this->input->post('alamatlengkap'),
            'nomorhp'       => $this->input->post('nomorhp'),
            'namausaha'     => $retVal,
            'alamatusaha'   => $this->input->post('alamatusaha')
        );
        $result = $this->Layanan_model->insertFormpss($insert);
        if ($result) {
            $this->session->set_flashdata('message', 'Pengisian Form Pedagang Siap Saji Berhasil berhasil');
            redirect('Home/index', 'refresh');
        }
        else {          
            $this->session->set_flashdata('error', 'Pengisian Permohonan PIRT Gagal');
            redirect('Home/index', 'refresh');
        }
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