<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->library('library_src');
        $this->load->model(array('Home_model', 'User_model'));
    }

    public function index()
    {
    	$result['data'] = $this->Home_model->Header_source();
        $result['footer_src'] = $this->load->view('footer/footer_script', '', TRUE);
        $this->load->view('viewHeader', $result);  
        $this->load->view('login/viewRegister');  
        $this->load->view('viewFooter');
    }

    public function createUser()
    {
        $post = array(
            'nama_depan'    => $this->input->post('namadepan_regist'),
            'nama_belakang' => $this->input->post('namabelakang_regist'),
            'alamat'        => $this->input->post('alamat_regist'),
            'tanggal_lahir' => date("Y-m-d", strtotime($this->input->post('tanggal_lahir'))),
            'jenis_kelamin' => $this->input->post('jenis_kelamin'),
            'email'         => $this->input->post('email_regist'),
            'password'      => password_hash($this->input->post('password_regist'), PASSWORD_DEFAULT),
            'level'         => "User"
        );
        $result = $this->User_model->insertUser($post);
        if ($result) {
            $this->session->set_userdata('logged_in',$result);
            redirect('Admin/index');
        }
        else {          
            $this->session->set_flashdata('error', 'Registrasi Gagal');
            redirect('Home/index', 'refresh');
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('logged_in');
        $this->session->set_flashdata('message', 'Sampai Jumpa');              
        redirect('Home','refresh');
    }

    public function login()
    {
        $post = array(
            'email'     => $this->input->post('emailLogin'),
            'password'  => $this->input->post('passwordLogin')
        );
        $result = $this->User_model->checklogin($post);
        if ($result) {
            $this->session->set_userdata('logged_in',$result);
            redirect('Admin/index');
        }
        else {          
            $this->session->set_flashdata('error', 'Login Gagal');
            redirect('Home/index', 'refresh');
        }
    }
}
?>