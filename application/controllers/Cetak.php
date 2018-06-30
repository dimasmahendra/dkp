<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cetak extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->model('Cetak_model');
    }

    public function printPirt($id)
    {
        $cssUrl = base_url('asset_admin/css/cetak/cetakPIRT.css');
        $this->load->library('m_pdf');

        $data['hasil'] = $this->Cetak_model->getCetakPIRT($id);

        $html = $this->load->view('cetak/viewCetakPIRT.php',$data, true);
        $html2 = $this->load->view('cetak/viewCetakPIRT2.php',$data, true);
        $html3 = $this->load->view('cetak/viewCetakCaraProduksi.php',$data, true);
        $html4 = $this->load->view('cetak/viewCetakSuratPernyataan.php',$data, true);
        $html5 = $this->load->view('cetak/viewCetakSuratKeterangan.php',$data, true);
        $html6 = $this->load->view('cetak/viewFormulirPermohonan.php',$data, true);
        $pdfFilePath ="cetakPIRT-".time()."-download.pdf";

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

    public function exportPirt()
    {    
        $insert = array(
            'tanggal_awal'  => date("Y-m-d", strtotime($this->input->post('tanggal_awal'))),
            'tanggal_akhir'  => date("Y-m-d", strtotime($this->input->post('tanggal_akhir')))
        );
        $data = $this->Cetak_model->getExportPIRT($insert);
        // file name for download
        $fileName = "export_PIRT" . date('Ymd') . ".xls";        
        // headers for download
        header("Content-Disposition: attachment; filename=\"$fileName\"");
        header("Content-Type: application/vnd.ms-excel");
        
        $heading = false;
        if(!empty($data))
            foreach($data as $row) {
                if(!$heading) {
                // display field/column names as a first row
                    echo implode("\t", array_keys($row)) . "\n";
                    $heading = true;
                }
                echo implode("\t", array_values($row)) . "\n";
            }
        exit;
    }

    public function exportPss()
    {    
        $insert = array(
            'tanggal_awal'  => date("Y-m-d", strtotime($this->input->post('tanggal_awal'))),
            'tanggal_akhir'  => date("Y-m-d", strtotime($this->input->post('tanggal_akhir')))
        );
        $data = $this->Cetak_model->getExportPSS($insert);
        // file name for download
        $fileName = "export_PSS" . date('Ymd') . ".xls";        
        // headers for download
        header("Content-Disposition: attachment; filename=\"$fileName\"");
        header("Content-Type: application/vnd.ms-excel");
        
        $heading = false;
        if(!empty($data))
            foreach($data as $row) {
                if(!$heading) {
                // display field/column names as a first row
                    echo implode("\t", array_keys($row)) . "\n";
                    $heading = true;
                }
                echo implode("\t", array_values($row)) . "\n";
            }
        exit;
    }
}
?>