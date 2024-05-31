<?php
defined('BASEPATH') or exit('No direct script access allowed');

class modul extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $data['title'] = 'E-Modul';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['fitur'] = $this->db->get('user_fitur')->result_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('modul/index', $data);
        $this->load->view('templates/footer');
    }
}
