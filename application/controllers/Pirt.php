<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pirt extends MY_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->library('library_src');
        $this->load->helper('menu');
        $this->load->model('Pirt_model');
    }

    public function index()
    {
        $session_data = $this->session->userdata('logged_in');
        $data["admin_form_js"] = $this->library_src->admin_form_js();
        $result['pemohon'] = $this->Pirt_model->getPemohon($session_data['id']);
        $result['edit_pemohon'] = $this->load->view('admin/modal/editPemohon', '', TRUE);
        $this->load->view('admin/viewHeaderAdmin', $session_data);
        $this->load->view('admin/pirt/viewDaftarPirt', $result);
        $this->load->view('admin/viewFooterAdmin.php', $data);   
    }

    public function inputPIRT()
    {
        $session_data = $this->session->userdata('logged_in');
        $data["admin_form_js"] = $this->library_src->admin_form_js();

        $result['user_id'] = $session_data['id'];
        $result['kode_kemasan'] = $this->Pirt_model->getKodeKemasan();
        $result['kode_pangan'] = $this->Pirt_model->getKodePangan();
        $this->load->view('admin/viewHeaderAdmin', $session_data);
        $this->load->view('admin/pirt/viewPirt', $result);
        $this->load->view('admin/viewFooterAdmin.php', $data);   
    }

    public function insertPermohonan()
    {
        $insert = array(
            'id_user'           => $this->input->post('user_id'),
            'namalengkap'       => $this->input->post('namalengkap'),
            'alamat'            => $this->input->post('alamat'),
            'telepon_rumah'     => $this->input->post('telepon_rumah'),
            'telepon_hp'        => $this->input->post('telepon_hp'),
            'namaperusahaan'    => $this->input->post('namaperusahaan'),
            'alamatperusahaan'  => $this->input->post('alamatperusahaan'),
            'kodepos'           => $this->input->post('kodepos'),
            'telepon_kantor'    => $this->input->post('telepon_kantor'),
            'kode_pangan'       => $this->input->post('kode_pangan'),
            'kode_kemasan'      => $this->input->post('kode_kemasan'),
            'merk'              => $this->input->post('merk'),
            'namadagang'        => $this->input->post('namadagang'),
            'beratbersih'       => $this->input->post('beratbersih'),
            'prosesproduksi'    => $this->input->post('prosesproduksi'),
            'masasimpan'        => $this->input->post('masasimpan'),
            'kodeproduksi'      => $this->input->post('kodeproduksi'),
            'cara_produksi'     => $this->input->post('cara_produksi'),
            'alat_produksi'     => $this->input->post('alat_produksi'),
            'bulanberdiri'      => $this->input->post('bulanberdiri'),
            'tahunberdiri'      => $this->input->post('tahunberdiri'),
            'komposisi'         => $this->input->post('komposisi')
        );
        $result = $this->Pirt_model->insertPemohon($insert);
        if ($result) {
            $this->session->set_flashdata('message', 'Pengisian Permohonan PIRT berhasil');
            redirect('Admin/index', 'refresh');
        }
        else {          
            $this->session->set_flashdata('error', 'Pengisian Permohonan PIRT Gagal');
            redirect('Admin/index', 'refresh');
        }
    }
}
?>