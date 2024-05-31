<?php
defined('BASEPATH') or exit('No direct script access allowed');

class laporan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $data['title'] = 'Laporan';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['name'] = $this->db->get('nilai_pretest')->result_array();
        $data['keterangan'] = $this->db->get('nilai_quiz')->result_array();
        $data['nilai'] = $this->db->get('nilai_posttest')->result_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('laporan/index', $data);
        $this->load->view('templates/footer');
    }


    public function delete($nis)
    {
        $this->menuModel->hapusNilai($nis); // fungsi delete ke database
        $this->session->set_flashdata(
            'message',
            '<div class="alert alert-success" role="alert">
        Nilai telah dihapus !
      </div>'
        );
        redirect('laporan');
    }
}
