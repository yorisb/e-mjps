<?php
defined('BASEPATH') or exit('No direct script access allowed');

class input_mapel extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('email')) {
            redirect('auth');
        }
    }

    public function index()
    {
        $data['title'] = 'Input Mapel';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['keterangan'] = $this->db->get('user_fitur')->result_array();

        $this->form_validation->set_rules('fitur', 'fitur', 'required|trim');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('input_mapel/index', $data);
            $this->load->view('templates/footer');
        } else {


            $config['allowed_types'] = 'doc|docx|pdf';
            $config['max_size']      = 0;
            $config['upload_path']   = './upload';

            $this->load->library('upload', $config);

            if ($this->upload->do_upload('materi')) {
                $data = $this->upload->data('file_name');
            } else {
                $this->session->set_flashdata(
                    'message',
                    '<div class="alert alert-danger" role="alert">'
                        . $this->upload->display_errors() .
                        '</div>'
                );
                redirect('input_mapel');
            }


            $data = [
                'fitur' => htmlspecialchars($this->input->post('fitur', true)),
                'materi' => htmlspecialchars($this->input->post('materi', true)),
            ];


            $this->db->insert('user_fitur', $data);



            $this->session->set_flashdata(
                'message',
                '<div class="alert alert-success" role="alert">
            Profile telah berhasil diedit !
          </div>'
            );
            redirect('input_mapel');
        }
    }
    public function upload()
    {


        $upload = [
            'role_id' => htmlspecialchars($this->input->post('role_id', true)),
            'fitur' => htmlspecialchars($this->input->post('fitur', true)),
            'judul' => htmlspecialchars($this->input->post('judul', true)),
            'url' => htmlspecialchars($this->input->post('url', true)),
        ];

        $this->db->insert('user_fitur', $upload);
        $this->session->set_flashdata(
            'message',
            '<div class="alert alert-success" role="alert">
                Input mata pelajaran telah berhasil !
              </div>'
        );
        redirect('input_mapel');
    }



    public function pretest()
    {
        $data['title'] = 'Input Mapel';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['fitur'] = $this->db->get('user_sub_menu')->result_array();

        $this->form_validation->set_rules('role_id', 'role_id', 'required|trim');
        $this->form_validation->set_rules('fitur', 'fitur', 'required|trim');
        $this->form_validation->set_rules('url', 'url', 'required|trim');

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('input_mapel/pretest', $data);
        $this->load->view('templates/footer');
    }

    public function modul()
    {
        $data['title'] = 'Input Mapel';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['fitur'] = $this->db->get('user_sub_menu')->result_array();

        $this->form_validation->set_rules('role_id', 'role_id', 'required|trim');
        $this->form_validation->set_rules('fitur', 'fitur', 'required|trim');

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('input_mapel/modul', $data);
        $this->load->view('templates/footer');
    }

    public function learning()
    {
        $data['title'] = 'Input Mapel';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['fitur'] = $this->db->get('user_sub_menu')->result_array();

        $this->form_validation->set_rules('role_id', 'role_id', 'required|trim');
        $this->form_validation->set_rules('fitur', 'fitur', 'required|trim');

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('input_mapel/learning', $data);
        $this->load->view('templates/footer');
    }

    public function quiz()
    {
        $data['title'] = 'Input Mapel';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['fitur'] = $this->db->get('user_sub_menu')->result_array();

        $this->form_validation->set_rules('role_id', 'role_id', 'required|trim');
        $this->form_validation->set_rules('fitur', 'fitur', 'required|trim');

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('input_mapel/quiz', $data);
        $this->load->view('templates/footer');
    }

    public function posttest()
    {
        $data['title'] = 'Input Mapel';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['fitur'] = $this->db->get('user_sub_menu')->result_array();

        $this->form_validation->set_rules('role_id', 'role_id', 'required|trim');
        $this->form_validation->set_rules('fitur', 'fitur', 'required|trim');

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('input_mapel/posttest', $data);
        $this->load->view('templates/footer');
    }
}
