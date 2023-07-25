<?php

class Kategori extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $role_id = $this->session->userdata('role_id');
        if ($role_id !== '1' && $role_id !== '2') {
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        Silahkan Login Terlebih dahulu!
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>');
            redirect('auth/login');
        }
    }
    public function elektronik()
    {
        $data['title'] = 'Elektronik';
        $data['elektronik'] = $this->m_kategori->data_elektronik()->result_array();
        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar');
        $this->load->view('elektronik', $data);
        $this->load->view('template/footer');
    }
    public function pakaian_pria()
    {
        $data['title'] = 'Pakaian Pria';
        $data['pakaian_pria'] = $this->m_kategori->data_pakaian_pria()->result_array();
        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar');
        $this->load->view('pakaian_pria', $data);
        $this->load->view('template/footer');
    }
    public function pakaian_wanita()
    {
        $data['title'] = 'Pakaian Wanita';
        $data['pakaian_wanita'] = $this->m_kategori->data_pakaian_wanita()->result_array();
        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar');
        $this->load->view('pakaian_wanita', $data);
        $this->load->view('template/footer');
    }
    public function pakaian_anak_anak()
    {
        $data['title'] = 'Pakaian Anak-anak';
        $data['pakaian_anak_anak'] = $this->m_kategori->data_pakaian_anak_anak()->result_array();
        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar');
        $this->load->view('pakaian_anak_anak', $data);
        $this->load->view('template/footer');
    }
    public function peralatan_olahraga()
    {
        $data['title'] = 'Peralatan Olahraga';
        $data['peralatan_olahraga'] = $this->m_kategori->data_peralatan_olahraga()->result_array();
        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar');
        $this->load->view('peralatan_olahraga', $data);
        $this->load->view('template/footer');
    }
}