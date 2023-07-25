<?php

class Data_barang extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('role_id') != '1') {
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            Silahkan Login Terlebih dahulu!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>');
            redirect('auth/login');
        }
    }
    public function index()
    {
        $data['title'] = 'Data Barang';
        $data['barang'] = $this->m_barang->tampil_data();
        $this->load->view('template_admin/header', $data);
        $this->load->view('template_admin/sidebar');
        $this->load->view('admin/data_barang', $data);
        $this->load->view('template_admin/footer');
    }

    public function tambah_aksi()
    {
        $nama_brg = $this->input->post('nama_brg');
        $keterangan = $this->input->post('keterangan');
        $kategori = $this->input->post('kategori');
        $harga = $this->input->post('harga');
        $stock = $this->input->post('stock');
        $gambar = $_FILES['gambar']['name'];

        if ($gambar != '') {
            $config['upload_path'] = './uploads';
            $config['allowed_types'] = 'jpg|jpeg|png|gif';

            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('gambar')) {
                echo "Gamabar gagal diUpload!";
            } else {
                $gambar = $this->upload->data('file_name');
            }
        }


        $data = array(
            'nama_brg' => $nama_brg,
            'keterangan' => $keterangan,
            'kategori' => $kategori,
            'harga' => $harga,
            'stock' => $stock,
            'gambar' => $gambar
        );
        $this->m_barang->tambah_barang($data, 'barang');
        redirect('admin/data_barang');
    }

    public function edit($id)
    {
        $where = array('id_brg' => $id);
        $data['barang'] = $this->m_barang->edit_barang($where, 'barang')->result();
        $data['title'] = 'Data Barang';

        $this->load->view('template_admin/header', $data);
        $this->load->view('template_admin/sidebar');
        $this->load->view('admin/edit_barang', $data);
        $this->load->view('template_admin/footer');
    }

    public function update()
    {
        $id = $this->input->post('id');
        $nama_brg = $this->input->post('nama_brg');
        $keterangan = $this->input->post('keterangan');
        $kategori = $this->input->post('kategori');
        $harga = $this->input->post('harga');
        $stock = $this->input->post('stock');

        $data = [

            'nama_brg' => $nama_brg,
            'keterangan' => $keterangan,
            'kategori' => $kategori,
            'harga' => $harga,
            'stock' => $stock
        ];

        $where = [
            'id_brg' => $id
        ];

        $this->m_barang->update_barang($where, $data, 'barang');
        redirect('admin/data_barang');
    }

    public function hapus($id)
    {
        $where = ['id_brg' => $id];
        $this->m_barang->hapus_barang($where, 'barang');
        redirect('admin/data_barang');
    }
    public function detail($id_brg)
    {
        $data['title'] = 'Detail Produk';
        $data['barang'] = $this->m_barang->detail_brg($id_brg);
        $this->load->view('template_admin/header', $data);
        $this->load->view('template_admin/sidebar');
        $this->load->view('admin/detail_barang', $data);
        $this->load->view('template_admin/footer');
    }
}