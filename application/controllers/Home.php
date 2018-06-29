<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->library('library_src');
        $this->load->model('Home_model');
    }

    public function index()
    {
    	$result['data'] = $this->Home_model->Header_source();
        $hasil['footer_src'] = $this->load->view('footer/footer_script', '', TRUE);        
        $result['login_modal'] = $this->load->view('modal/loginModal', '', TRUE);        
        $result['regist_modal'] = $this->load->view('modal/registModal', '', TRUE);
        $this->load->view('viewHeader', $result); 
        $this->load->view('home/viewHome'); 
        $this->load->view('viewFooter', $hasil); 
    }
}
?>