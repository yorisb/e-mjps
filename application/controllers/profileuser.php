<?php
defined('BASEPATH') or exit('No direct script access allowed');

class profileuser extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {

        $data['title'] = 'My Profile';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('profileuser/index', $data);
            $this->load->view('templates/footer');
        } else {
            $upload_image = $_FILES['image'];

            if ($upload_image) {
                $config['allowed_types'] = 'png|jpg|gif';
                $config['max_size']      = 3096;
                $config['upload_path']   = './assets/img/profile/';

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('image')) {
                    $new_image = $this->upload->data('file_name');
                    $this->db->set('image', $new_image);
                } else {
                    $this->session->set_flashdata(
                        'message',
                        '<div class="alert alert-danger" role="alert">'
                            . $this->upload->display_errors() .
                            '</div>'
                    );
                    redirect('profileuser');
                }
            }
            $this->db->update('user');


            $this->session->set_flashdata(
                'message',
                '<div class="alert alert-success" role="alert">
            Profile telah berhasil diedit !
          </div>'
            );
            redirect('profileuser');
        }
    }
}
