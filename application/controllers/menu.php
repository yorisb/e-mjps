<?php
defined('BASEPATH') or exit('No direct script access allowed');

class menu extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('menuModel');
    }

    public function index()
    {
        $data['title'] = 'Data Siswa';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['name'] = $this->db->get('user')->result_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('menu/index', $data);
        $this->load->view('templates/footer');
    }

    public function delete($id)
    {
        $this->menuModel->hapusData($id); // fungsi delete ke database
        $this->session->set_flashdata(
            'message',
            '<div class="alert alert-success" role="alert">
        Siswa telah dihapus !
      </div>'
        );
        redirect('menu');
    }
}
