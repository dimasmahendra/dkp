<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Setting extends MY_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->model('Admin_model');
    }

    public function index()
    {
        $session_data = $this->session->userdata('logged_in');
        $this->load->view('admin/viewHeaderAdmin', $session_data);
        $this->load->view('admin/setting/viewSetting');
        $this->load->view('admin/viewFooterAdmin.php');   
    }

    public function gantiPassword()
    {
        $session_data = $this->session->userdata('logged_in');
        $result = $this->Admin_model->updatePassword($session_data['id'] ,password_hash($this->input->post('password_pengguna'), PASSWORD_BCRYPT));
        if ($result) {
            $this->session->set_flashdata('message', 'Ganti Password Berhasil');
            redirect('Setting/index');
        }
        else {            
            $this->session->set_flashdata('error', 'Ganti Password Bermaslah');
            redirect('Setting/index', 'refresh');
        }    
    }
}
?>