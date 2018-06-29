<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends MY_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->model('Admin_model');
    }

    public function index()
    {
        $session_data = $this->session->userdata('logged_in');
        $result['status_permohonan'] = $this->Admin_model->getStatusPermohonan($session_data['id']);
        $this->load->view('admin/viewHeaderAdmin', $session_data);
        $this->load->view('admin/dashboard/viewDashboard', $result);
        $this->load->view('admin/viewFooterAdmin.php');   
    }

    public function gantiPassword()
    {
        $session_data = $this->session->userdata('logged_in');
        $result = $this->Admin_model->updatePassword($session_data['id'] ,password_hash($this->input->post('password'), PASSWORD_BCRYPT));
        if ($result) {
            $this->session->set_flashdata('success', 'Ganti Password Berhasil');
            redirect('Admin/index');
        }
        else {            
            $this->session->set_flashdata('message', 'Ganti Password Bermaslah');
            redirect('Admin/index', 'refresh');
        }    
    }
}
?>