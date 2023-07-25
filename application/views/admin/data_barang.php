<div class="container-fluid">
    <h4><strong>
            <?= $title; ?>
        </strong></h4>
    <hr>
    <button class="btn btn-sm btn-primary mb-3" data-toggle="modal" data-target="#BarangleModal"><i
            class="fas fa-plus fa-sm"></i> Tambah Barang</button>

    <table class="table table-bordered table-sm">
        <thead class="text-center">
            <tr>
                <th>NO</th>
                <th>NAMA BARANG</th>
                <th>KATEGORI</th>
                <th>HARGA</th>
                <th>STOCK</th>
                <th width="120px">AKSI</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $no = 1;
            foreach ($barang as $brg):
                ?>
                <tr>
                    <td align="center">
                        <?= $no++; ?>
                    </td>
                    <td>
                        <?= $brg['nama_brg']; ?>
                    </td>
                    <td>
                        <?= $brg['kategori']; ?>
                    </td>
                    <td align=" right">Rp.
                        <?= number_format($brg['harga'], 0, ',', '.'); ?>
                    </td>
                    <td align="center">
                        <?= $brg['stock']; ?>
                    </td>
                    <td>
                        <a href="<?= base_url('admin/data_barang/detail/') . $brg['id_brg']; ?>"
                            class="btn btn-success btn-sm"><i class="fas fa-search-plus"></i></a>
                        <a href="<?= base_url('admin/data_barang/edit/') . $brg['id_brg']; ?>"
                            class="btn btn-primary btn-sm "><i class="fa fa-edit"></i></a>
                        <a href="<?= base_url('admin/data_barang/hapus/') . $brg['id_brg']; ?>"
                            class="btn btn-danger btn-sm "><i class="fa fa-trash"></i></a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<!-- Modal -->
<div class="modal fade" id="BarangleModal" tabindex="-1" role="dialog" aria-labelledby="BarangleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="BarangleModalLabel">FORM INPUT PRODUK</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <?= form_open_multipart('admin/data_barang/tambah_aksi'); ?>
                <!-- <form action="<?= base_url(); ?>" method="post" enctype="multipart/form-data"> -->

                <div class="form-group">
                    <label for="">Nama Barang</label>
                    <input type="text" name="nama_brg" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Keterangan</label>
                    <input type="text" name="keterangan" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Kategori</label>
                    <select name="kategori" class="form-control">
                        <option value="Elektronik">Elektronik</option>
                        <option value="Pakaian Pria">Pakaian Pria</option>
                        <option value="Pakaian Wanita">Pakaian Wanita</option>
                        <option value="Pakaian Anak-anak">Pakaian Anak-anak</option>
                        <option value="Peralatan Olahraga">Peralatan Olahraga</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="">Harga</label>
                    <input type="text" name="harga" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Stock</label>
                    <input type="text" name="stock" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Gambar Procuk</label>
                    <input type="file" name="gambar" class="form-control">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>

                </form>
            </div>

        </div>
    </div>
</div>