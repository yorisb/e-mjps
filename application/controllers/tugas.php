<?php
defined('BASEPATH') or exit('No direct script access allowed');

class tugas extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $data['title'] = 'Pengumpulan Tugas';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('tugas/index', $data);
        $this->load->view('templates/footer');
    }


    public function pretest()
    {
        $data['title'] = 'Pengumpulan Tugas : Pre-test';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['nama'] = $this->db->get('tugas_pretest')->result_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('tugas/pretest', $data);
        $this->load->view('templates/footer');
    }

    public function quiz()
    {
        $data['title'] = 'Pengumpulan Tugas : Quiz';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['nama'] = $this->db->get('tugas_quiz')->result_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('tugas/quiz', $data);
        $this->load->view('templates/footer');
    }

    public function posttest()
    {
        $data['title'] = 'Pengumpulan Tugas : Post-test';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['nama'] = $this->db->get('tugas_posttest')->result_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('tugas/posttest', $data);
        $this->load->view('templates/footer');
    }
}
