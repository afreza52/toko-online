<?php

class Auth extends CI_Controller
{
    public function login()
    {
        $data['title'] = 'Login';
        $this->form_validation->set_rules('username', 'Username', 'required', [
            'required' => 'Username wajib diisi!'
        ]);
        $this->form_validation->set_rules('password', 'Password', 'required', [
            'required' => 'Password wajib diisi!'
        ]);

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('template/header', $data);
            $this->load->view('form_login');
            $this->load->view('template/footer');
        } else {
            $auth = $this->m_auth->cek_login();
            if ($auth == FALSE) {
                $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                Username atau Password Anda Salah!
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>');
                redirect('auth/login');
            } else {
                $this->session->set_userdata('username', $auth->username);
                $this->session->set_userdata('role_id', $auth->role_id);
                switch ($auth->role_id) {
                    case 1:
                        redirect('admin/dashboard_admin');
                        break;
                    case 2:
                        redirect('welcome');
                        break;
                    default:
                        break;
                }
            }
        }
    }
    public function registrasi()
    {
        $data['title'] = 'Registrasi';
        $this->form_validation->set_rules('nama', 'Nama', 'required', ['required' => 'Nama Wajib diisi!']);
        $this->form_validation->set_rules('username', 'Username', 'required', ['required' => 'Username Wajib diisi!']);
        $this->form_validation->set_rules('password1', 'Password', 'required|matches[password2]', ['required' => 'Password Wajib diisi!', 'matches' => 'Password Tidak Cocok']);
        $this->form_validation->set_rules('password2', 'Password', 'required|matches[password1]');
        if ($this->form_validation->run() == false) {
            $this->load->view('template/header', $data);
            $this->load->view('form_registrasi');
            $this->load->view('template/footer');
        } else {
            $data = [
                'nama' => $this->input->post('nama'),
                'username' => $this->input->post('username'),
                'password' => $this->input->post('password1'),
                'role_id' => 2,
            ];
            $this->db->insert('user', $data);
            redirect('auth/login');
        }
    }
    public function logout()
    {
        $this->session->sess_destroy();
        redirect('auth/login');
    }
}