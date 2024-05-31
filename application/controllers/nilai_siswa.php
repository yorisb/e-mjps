<?php
defined('BASEPATH') or exit('No direct script access allowed');

class nilai_siswa extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['name'] = $this->db->get('user')->result_array();

        $this->form_validation->set_rules('name', 'name', 'required|trim');
        $this->form_validation->set_rules('keterangan', 'keterangan', 'required|trim');
        $this->form_validation->set_rules('nilai', 'nilai', 'required|trim');

        if ($this->form_validation->run() == false) {
            $data['title'] = 'Input Nilai';
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('nilai_siswa/index',);
            $this->load->view('templates/footer');
        } else {
            $data = [
                'name' => htmlspecialchars($this->input->post('name', true)),
                'keterangan' => htmlspecialchars($this->input->post('keterangan', true)),
                'nilai' => htmlspecialchars($this->input->post('nilai', true)),
            ];

            $this->db->insert('user_nilai', $data);
            $this->session->set_flashdata(
                'message',
                '<div class="alert alert-success" role="alert">
            Input Nilai telah berhasil
          </div>'
            );
            redirect('nilai_siswa');
        }
    }

    public function pretest()
    {
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['name'] = $this->db->get('user')->result_array();
        $data['keterangan'] = $this->db->get('nilai_pretest')->result_array();

        $this->form_validation->set_rules('nis', 'nis', 'required|trim');
        $this->form_validation->set_rules('name', 'name', 'required|trim');
        $this->form_validation->set_rules('gg', 'gg', 'required|trim');
        $this->form_validation->set_rules('keterangan', 'keterangan', 'required|trim');
        $this->form_validation->set_rules('nilai', 'nilai', 'required|trim');

        if ($this->form_validation->run() == false) {
            $data['title'] = 'Input Nilai';
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('nilai_siswa/pretest',);
            $this->load->view('templates/footer');
        } else {
            $data = [
                'nis' => htmlspecialchars($this->input->post('nis', true)),
                'name' => htmlspecialchars($this->input->post('name', true)),
                'gg' => htmlspecialchars($this->input->post('gg', true)),
                'keterangan' => htmlspecialchars($this->input->post('keterangan', true)),
                'nilai' => htmlspecialchars($this->input->post('nilai', true)),
            ];

            $this->db->insert('nilai_pretest', $data);
            $this->session->set_flashdata(
                'message',
                '<div class="alert alert-success" role="alert">
            Input Nilai telah berhasil
          </div>'
            );
            redirect('nilai_siswa/pretest');
        }
    }

    public function quiz()
    {
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['name'] = $this->db->get('user')->result_array();
        $data['keterangan'] = $this->db->get('nilai_quiz')->result_array();

        $this->form_validation->set_rules('nis', 'nis', 'required|trim');
        $this->form_validation->set_rules('name', 'name', 'required|trim');
        $this->form_validation->set_rules('gg', 'gg', 'required|trim');
        $this->form_validation->set_rules('keterangan', 'keterangan', 'required|trim');
        $this->form_validation->set_rules('nilai', 'nilai', 'required|trim');

        if ($this->form_validation->run() == false) {
            $data['title'] = 'Input Nilai';
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('nilai_siswa/quiz',);
            $this->load->view('templates/footer');
        } else {
            $data = [
                'nis' => htmlspecialchars($this->input->post('nis', true)),
                'name' => htmlspecialchars($this->input->post('name', true)),
                'gg' => htmlspecialchars($this->input->post('gg', true)),
                'keterangan' => htmlspecialchars($this->input->post('keterangan', true)),
                'nilai' => htmlspecialchars($this->input->post('nilai', true)),
            ];

            $this->db->insert('nilai_quiz', $data);
            $this->session->set_flashdata(
                'message',
                '<div class="alert alert-success" role="alert">
            Input Nilai telah berhasil
          </div>'
            );
            redirect('nilai_siswa/quiz');
        }
    }

    public function posttest()
    {
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['name'] = $this->db->get('user')->result_array();
        $data['keterangan'] = $this->db->get('nilai_posttest')->result_array();
        $data['nis'] = $this->db->get('user')->result_array();

        $this->form_validation->set_rules('nis', 'nis', 'required|trim');
        $this->form_validation->set_rules('name', 'name', 'required|trim');
        $this->form_validation->set_rules('gg', 'gg', 'required|trim');
        $this->form_validation->set_rules('keterangan', 'keterangan', 'required|trim');
        $this->form_validation->set_rules('nilai', 'nilai', 'required|trim');

        if ($this->form_validation->run() == false) {
            $data['title'] = 'Input Nilai';
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('nilai_siswa/posttest',);
            $this->load->view('templates/footer');
        } else {
            $data = [
                'nis' => htmlspecialchars($this->input->post('nis', true)),
                'name' => htmlspecialchars($this->input->post('name', true)),
                'gg' => htmlspecialchars($this->input->post('gg', true)),
                'keterangan' => htmlspecialchars($this->input->post('keterangan', true)),
                'nilai' => htmlspecialchars($this->input->post('nilai', true)),
            ];

            $this->db->insert('nilai_posttest', $data);
            $this->session->set_flashdata(
                'message',
                '<div class="alert alert-success" role="alert">
            Input Nilai telah berhasil
          </div>'
            );
            redirect('nilai_siswa/posttest');
        }
    }

    public function delete($id)
    {
        $this->menuModel->hapusNilai($id); // fungsi delete ke database
        $this->session->set_flashdata(
            'message',
            '<div class="alert alert-success" role="alert">
        Nilai telah dihapus !
      </div>'
        );
        redirect('nilai_siswa');
    }
}
