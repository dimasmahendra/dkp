<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cetak extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->model('Cetak_model');
    }

    public function index()
    {
    	
    }

    public function printPirt()
    {
        $cssUrl = base_url('asset_admin/css/cetak/cetakPIRT.css');
        $this->load->library('m_pdf');

        $session_data = $this->session->userdata('logged_in');
        $data['hasil'] = $this->Cetak_model->getCetakPIRT($session_data['id']);

        $html = $this->load->view('cetak/viewCetakPIRT.php',$data, true);
        $html2 = $this->load->view('cetak/viewCetakPIRT2.php',$data, true);
        $html3 = $this->load->view('cetak/viewCetakCaraProduksi.php',$data, true);
        $html4 = $this->load->view('cetak/viewCetakSuratPernyataan.php',$data, true);
        $html5 = $this->load->view('cetak/viewCetakSuratKeterangan.php',$data, true);
        $html6 = $this->load->view('cetak/viewFormulirPermohonan.php',$data, true);
        $pdfFilePath ="mypdfName-".time()."-download.pdf";

        $pdf = $this->m_pdf->load();
        $stylesheet = file_get_contents($cssUrl);
  
        $pdf->AddPage();
        $pdf->WriteHTML($stylesheet,1);
        $pdf->WriteHTML($html,2);

        $pdf->AddPage();
        $pdf->WriteHTML($stylesheet,1);
        $pdf->WriteHTML($html2,2);

        $pdf->AddPage();
        $pdf->WriteHTML($stylesheet,1);
        $pdf->WriteHTML($html3,2);

        $pdf->AddPage();
        $pdf->WriteHTML($stylesheet,1);
        $pdf->WriteHTML($html4,2);

        $pdf->AddPage();
        $pdf->WriteHTML($stylesheet,1);
        $pdf->WriteHTML($html5,2);

        $pdf->AddPage();
        $pdf->WriteHTML($stylesheet,1);
        $pdf->WriteHTML($html6,2);

        $pdf->Output($pdfFilePath, "D");
    }
}
?>