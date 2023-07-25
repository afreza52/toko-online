<?php

class Dashboard extends CI_Controller
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

    public function keranjang($id)
    {
        $barang = $this->m_barang->find($id);

        $data = [
            'id' => $barang->id_brg,
            'qty' => 1,
            'price' => $barang->harga,
            'name' => $barang->nama_brg
        ];

        $this->cart->insert($data);
        redirect('welcome');
    }

    public function detail_keranjang()
    {
        $data['title'] = 'Detail Keranjang';

        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar');
        $this->load->view('Keranjang');
        $this->load->view('template/footer');
    }

    public function hapus_keranjang()
    {
        $this->cart->destroy();
        redirect('welcome');
    }

    public function pembayaran()
    {
        $data['title'] = 'Detail Keranjang';

        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar');
        $this->load->view('pembayaran');
        $this->load->view('template/footer');
    }
    public function proses_pesanan()
    {
        $data['title'] = 'Proses Pesanan';
        $is_processed = $this->m_invoice->index();
        if ($is_processed) {
            $this->cart->destroy();
            $this->load->view('template/header', $data);
            $this->load->view('template/sidebar');
            $this->load->view('proses_pesanan');
            $this->load->view('template/footer');
        } else {
            echo "Maaf, Pesanan Anda Gagal diproses!";
        }
    }
    public function detail($id_brg)
    {
        $data['title'] = 'Detail Barang';
        $data['barang'] = $this->m_barang->detail_brg($id_brg);
        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar');
        $this->load->view('detail_barang', $data);
        $this->load->view('template/footer');
    }
}