<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Layananpublik extends MY_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->model(array('Layanan_model'));
    }

    public function pedagangsiapsaji()
    {
        $session_data = $this->session->userdata('logged_in');
        $data['report'] = $this->Layanan_model->getFormpss();
        $data['pengisian_pss'] = $this->load->view('modal/pengisianPssModal', '', TRUE);
        $this->load->view('admin/viewHeaderAdmin', $session_data);
        $this->load->view('admin/layananpublik/viewPedagangSiapSaji', $data);
        $this->load->view('admin/viewFooterAdmin.php');   
    }

    public function inputPenilaianPss()
    {
        $insert = array(
            'layanan_pss_detail_id'   => $this->input->post('layanan_pss_detail_id'),
            'parameter'               => $this->input->post('parameter_pengisian'),
            'hasil'                   => $this->input->post('hasil_pengisian')
        );
        $result = $this->Layanan_model->insertPenilaianpss($insert, $this->input->post('status_pengisian'));
        if ($result) {
            $this->session->set_flashdata('message', 'Perubahan Form Pedagang Siap Saji Berhasil');
            redirect('Layananpublik/pedagangsiapsaji', 'refresh');
        }
        else {          
            $this->session->set_flashdata('error', 'Perubahan Form Pedagang Siap Saji Gagal');
            redirect('Layananpublik/pedagangsiapsaji', 'refresh');
        }
    }
}
?>