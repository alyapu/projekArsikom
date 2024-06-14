<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

    public function index()
    {
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email', [
            'valid_email' => 'Kolom Email harus berisi alamat email yang valid!',
            'required' => 'Kolom Email diperlukan!'
        ]);
        $this->form_validation->set_rules('password', 'Password', 'trim|required', [
            'required' => 'Kolom Password diperlukan!'
        ]);


        if ($this->form_validation->run() == false) {
            $this->load->view('templates/auth_header');
            $this->load->view('auth/login');
            $this->load->view('templates/auth_footer');
        } else {
            $email = $this->input->post('email');
            $password = $this->input->post('password');

            $admin = $this->db->get_where('admin', ['email' => $email])->row_array();

            if ($email == $admin['email'] && md5($password) == $admin['password']) {
                $data = [
                    'email' => $admin['email']
                ];

                $this->session->set_userdata($data);
                redirect('admin/manageposts');
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Your email or password is incorrect!</div>');
                redirect('auth');
            }
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('email');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Anda berhasil logout!</div>');
        redirect('auth');
    }
}
