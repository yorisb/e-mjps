<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pdfview extends CI_Controller
{
    public function index()
    {
        // panggil library yang kita buat sebelumnya yang bernama pdfgenerator
        $this->load->library('pdfgenerator');

        // title dari pdf
        $this->data['nilai_pretest'] = 'Laporan Nilai';

        // filename dari pdf ketika didownload
        $file_pdf = 'Laporan Nilai';
        // setting paper
        $paper = 'A4';
        //orientasi paper potrait / landscape
        $orientation = "portrait";

        $html = $this->load->view('laporan_pdf', $this->data, true);

        // run dompdf
        $this->pdfgenerator->generate($html, $file_pdf, $paper, $orientation);
    }
}
