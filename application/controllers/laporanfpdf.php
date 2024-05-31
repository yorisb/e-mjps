<?php
defined('BASEPATH') or exit('No direct script access allowed');
class laporanfpdf extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->library('Pdf'); // MEMANGGIL LIBRARY YANG KITA BUAT TADI
    }
    function index()
    {
        error_reporting(0); // AGAR ERROR MASALAH VERSI PHP TIDAK MUNCUL
        $pdf = new FPDF('L', 'mm', 'Letter');
        $pdf->AddPage();
        $pdf->SetFont('Arial', 'B', 20);
        $pdf->Cell(0, 7, 'SMK MJPS 1 TASIKMALAYA', 0, 1, 'C');
        $pdf->SetFont('Arial', 'B', 14);
        $pdf->Cell(10, 7, '', 0, 1);
        $pdf->Cell(0, 7, 'Nilai Siswa', 0, 1, 'C');
        $pdf->Cell(10, 7, '', 0, 1);
        $pdf->SetFont('Arial', 'B', 10);
        $pdf->Cell(10, 6, 'No', 1, 0, 'C');
        $pdf->Cell(40, 6, 'NIS', 1, 0, 'C');
        $pdf->Cell(60, 6, 'Pre-test/Quiz/Post-test', 1, 0, 'C');
        $pdf->Cell(60, 6, 'Nama', 1, 0, 'C');
        $pdf->Cell(40, 6, 'Ganjil/Genap', 1, 0, 'C');
        $pdf->Cell(40, 6, 'Nilai', 1, 1, 'C');
        $pdf->SetFont('Arial', '', 10);
        $data = $this->db->get('nilai_pretest')->result();
        $no = 0;
        foreach ($data as $m) {
            $no++;
            $pdf->Cell(10, 6, $no, 1, 0, 'C');
            $pdf->Cell(40, 6, $m->nis, 1, 0);
            $pdf->Cell(60, 6, $m->keterangan, 1, 0);
            $pdf->Cell(60, 6, $m->name, 1, 0);
            $pdf->Cell(40, 6, $m->gg, 1, 0);
            $pdf->Cell(40, 6, $m->nilai, 1, 1);
        }

        $pdf->Cell(10, 7, '', 0, 1);
        $pdf->SetFont('Arial', '', 10);
        $pdf->Cell(430, 7, 'Mengetahui,', 0, 1, 'C');
        $pdf->Cell(430, 7, 'Kepala Sekolah', 0, 1, 'C');
        $pdf->Cell(10, 7, '', 0, 1);
        $pdf->Cell(10, 7, '', 0, 1);
        $pdf->Cell(10, 7, '', 0, 1);
        $pdf->SetFont('Arial', 'U', 10);
        $pdf->Cell(430, 7, 'Drs. Siradjudin, M.M', 0, 1, 'C');
        $pdf->SetFont('Arial', '', 10);
        $pdf->Cell(400, 7, 'NIS:', 0, 1, 'C');

        $pdf->Output();
    }

    function quiz()
    {
        error_reporting(0); // AGAR ERROR MASALAH VERSI PHP TIDAK MUNCUL
        $pdf = new FPDF('L', 'mm', 'Letter');
        $pdf->AddPage();
        $pdf->SetFont('Arial', 'B', 20);
        $pdf->Cell(0, 7, 'SMK MJPS 1 TASIKMALAYA', 0, 1, 'C');
        $pdf->SetFont('Arial', 'B', 14);
        $pdf->Cell(10, 7, '', 0, 1);
        $pdf->Cell(0, 7, 'Nilai Siswa', 0, 1, 'C');
        $pdf->Cell(10, 7, '', 0, 1);
        $pdf->SetFont('Arial', 'B', 10);
        $pdf->Cell(10, 6, 'No', 1, 0, 'C');
        $pdf->Cell(40, 6, 'NIS', 1, 0, 'C');
        $pdf->Cell(60, 6, 'Pre-test/Quiz/Post-test', 1, 0, 'C');
        $pdf->Cell(60, 6, 'Nama', 1, 0, 'C');
        $pdf->Cell(40, 6, 'Ganjil/Genap', 1, 0, 'C');
        $pdf->Cell(40, 6, 'Nilai', 1, 1, 'C');
        $pdf->SetFont('Arial', '', 10);
        $data = $this->db->get('nilai_quiz')->result();
        $no = 0;
        foreach ($data as $m) {
            $no++;
            $pdf->Cell(10, 6, $no, 1, 0, 'C');
            $pdf->Cell(40, 6, $m->nis, 1, 0);
            $pdf->Cell(60, 6, $m->keterangan, 1, 0);
            $pdf->Cell(60, 6, $m->name, 1, 0);
            $pdf->Cell(40, 6, $m->gg, 1, 0);
            $pdf->Cell(40, 6, $m->nilai, 1, 1);
        }

        $pdf->Cell(10, 7, '', 0, 1);
        $pdf->SetFont('Arial', '', 10);
        $pdf->Cell(430, 7, 'Mengetahui,', 0, 1, 'C');
        $pdf->Cell(430, 7, 'Kepala Sekolah', 0, 1, 'C');
        $pdf->Cell(10, 7, '', 0, 1);
        $pdf->Cell(10, 7, '', 0, 1);
        $pdf->Cell(10, 7, '', 0, 1);
        $pdf->SetFont('Arial', 'U', 10);
        $pdf->Cell(430, 7, 'Drs. Siradjudin, M.M', 0, 1, 'C');
        $pdf->SetFont('Arial', '', 10);
        $pdf->Cell(400, 7, 'NIS:', 0, 1, 'C');

        $pdf->Output();
    }

    function posttest()
    {
        error_reporting(0); // AGAR ERROR MASALAH VERSI PHP TIDAK MUNCUL
        $pdf = new FPDF('L', 'mm', 'Letter');
        $pdf->AddPage();
        $pdf->SetFont('Arial', 'B', 20);
        $pdf->Cell(0, 7, 'SMK MJPS 1 TASIKMALAYA', 0, 1, 'C');
        $pdf->SetFont('Arial', 'B', 14);
        $pdf->Cell(10, 7, '', 0, 1);
        $pdf->Cell(0, 7, 'Nilai Siswa', 0, 1, 'C');
        $pdf->Cell(10, 7, '', 0, 1);
        $pdf->SetFont('Arial', 'B', 10);
        $pdf->Cell(10, 6, 'No', 1, 0, 'C');
        $pdf->Cell(40, 6, 'NIS', 1, 0, 'C');
        $pdf->Cell(60, 6, 'Pre-test/Quiz/Post-test', 1, 0, 'C');
        $pdf->Cell(60, 6, 'Nama', 1, 0, 'C');
        $pdf->Cell(40, 6, 'Ganjil/Genap', 1, 0, 'C');
        $pdf->Cell(40, 6, 'Nilai', 1, 1, 'C');
        $pdf->SetFont('Arial', '', 10);
        $data = $this->db->get('nilai_posttest')->result();
        $no = 0;
        foreach ($data as $m) {
            $no++;
            $pdf->Cell(10, 6, $no, 1, 0, 'C');
            $pdf->Cell(40, 6, $m->nis, 1, 0);
            $pdf->Cell(60, 6, $m->keterangan, 1, 0);
            $pdf->Cell(60, 6, $m->name, 1, 0);
            $pdf->Cell(40, 6, $m->gg, 1, 0);
            $pdf->Cell(40, 6, $m->nilai, 1, 1);
        }

        $pdf->Cell(10, 7, '', 0, 1);
        $pdf->SetFont('Arial', '', 10);
        $pdf->Cell(430, 7, 'Mengetahui,', 0, 1, 'C');
        $pdf->Cell(430, 7, 'Kepala Sekolah', 0, 1, 'C');
        $pdf->Cell(10, 7, '', 0, 1);
        $pdf->Cell(10, 7, '', 0, 1);
        $pdf->Cell(10, 7, '', 0, 1);
        $pdf->SetFont('Arial', 'U', 10);
        $pdf->Cell(430, 7, 'Drs. Siradjudin, M.M', 0, 1, 'C');
        $pdf->SetFont('Arial', '', 10);
        $pdf->Cell(400, 7, 'NIS:', 0, 1, 'C');

        $pdf->Output();
    }
}
