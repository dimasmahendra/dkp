<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TentangKami extends MY_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->library('library_src');
        $this->load->model('TentangKami_model');
    }

    public function sekapursirih()
    {
        $session_data = $this->session->userdata('logged_in');
        $result = $this->TentangKami_model->getTentangKami();
        $this->load->view('admin/viewHeaderAdmin', $session_data);
        $this->load->view('admin/tentangkami/viewSekapurSirih', $result);  
        $this->load->view('admin/viewFooterAdmin.php'); 
    }
    public function simpansekapursirih()
    {
        $session_data = $this->session->userdata('logged_in');
        $insert = array(
            'sekapursirih' => $this->input->post('sekapur_sirih')
        );
        $result = $this->TentangKami_model->insertTentangKami($session_data['id'], $insert);
        if ($result) {
            $this->session->set_flashdata('message', 'Input berhasil');
            redirect('TentangKami/sekapursirih', 'refresh');
        }
        else {          
            $this->session->set_flashdata('error', 'Input Gagal');
            redirect('TentangKami/sekapursirih', 'refresh');
        }
    }
    public function visimisi()
    {
        $session_data = $this->session->userdata('logged_in');
        $result = $this->TentangKami_model->getTentangKami();
        $this->load->view('admin/viewHeaderAdmin', $session_data);
        $this->load->view('admin/tentangkami/viewVisiMisi', $result);  
        $this->load->view('admin/viewFooterAdmin.php'); 
    }
    public function simpanvisimisi()
    {
        $session_data = $this->session->userdata('logged_in');
        $insert = array(
            'visi' => $this->input->post('visi'),
            'misi' => $this->input->post('misi')
        );
        $result = $this->TentangKami_model->insertTentangKami($session_data['id'], $insert);
        if ($result) {
            $this->session->set_flashdata('message', 'Input berhasil');
            redirect('TentangKami/visimisi', 'refresh');
        }
        else {          
            $this->session->set_flashdata('error', 'Input Gagal');
            redirect('TentangKami/visimisi', 'refresh');
        }
    }
}
?>