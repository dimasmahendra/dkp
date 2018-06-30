<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pss extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->library('library_src');
        $this->load->model(array('Home_model', 'Pss_model'));
    }

    public function daftarPSS()
    {
        $session_data = $this->session->userdata('logged_in');
        $data["admin_form_js"] = $this->library_src->admin_form_js();
        $result['pemohon'] = $this->Pss_model->getPss($session_data['id']);
        $result['tambah_pss'] = $this->load->view('admin/modal/tambahPSS', '', TRUE);
        $result['edit_pss'] = $this->load->view('admin/modal/editPSS', '', TRUE);
        $this->load->view('admin/viewHeaderAdmin', $session_data);
        $this->load->view('admin/pss/viewDaftarPSS', $result);  
        $this->load->view('admin/viewFooterAdmin.php', $data); 
    }

    public function inputFormpss()
    {
        $session_data = $this->session->userdata('logged_in');
        $retVal = (empty($this->input->post('namausahatext'))) ? $this->input->post('namausaha') : $this->input->post('namausahatext');
        $insert = array(
            'user_id'       => $session_data['id'],
            'namalengkap'   => $this->input->post('namalengkap'),
            'alamatlengkap' => $this->input->post('alamatlengkap'),
            'nomorhp'       => $this->input->post('nomorhp'),
            'namausaha'     => $retVal,
            'alamatusaha'   => $this->input->post('alamatusaha')
        );
        $result = $this->Pss_model->insertFormpss($insert);
        if ($result) {
            $this->session->set_flashdata('message', 'Pengisian Form Pedagang Siap Saji Berhasil berhasil');
            redirect('Pss/daftarPSS', 'refresh');
        }
        else {          
            $this->session->set_flashdata('error', 'Pengisian Permohonan Pedagang Siap Saji Gagal');
            redirect('Pss/daftarPSS', 'refresh');
        }
    }

    public function updateFormpss()
    {
        $retVal = (empty($this->input->post('namausahatext'))) ? $this->input->post('namausaha') : $this->input->post('namausahatext');
        $insert = array(
            'user_id'       => $this->input->post('user_id'),
            'namalengkap'   => $this->input->post('namalengkap'),
            'alamatlengkap' => $this->input->post('alamatlengkap'),
            'nomorhp'       => $this->input->post('nomorhp'),
            'namausaha'     => $retVal,
            'alamatusaha'   => $this->input->post('alamatusaha')
        );
        $result = $this->Pss_model->updateFormpss($insert, $this->input->post('id_pss'));
        if ($result) {
            $this->session->set_flashdata('message', 'Ubah Form Pedagang Siap Saji Berhasil berhasil');
            redirect('Pss/daftarPSS', 'refresh');
        }
        else {          
            $this->session->set_flashdata('error', 'Ubah Permohonan Pedagang Siap Saji Gagal');
            redirect('Pss/daftarPSS', 'refresh');
        }
    }
}
?>