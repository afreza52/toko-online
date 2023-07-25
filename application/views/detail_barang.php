<div class="container-fluid">
    <div class="card">
        <h5 class="card-header">Detail Produk</h5>
        <div class="card-body">
            <?php foreach ($barang as $brg): ?>
                <div class="row">
                    <div class="col-md-4">
                        <img src="<?= base_url('/uploads/') . $brg->gambar; ?>" class="w-100">
                    </div>
                    <div class="col-md-8">
                        <table class="table">
                            <tr>
                                <td>Nama Produk</td>
                                <td><strong>
                                        <?= $brg->nama_brg; ?>
                                    </strong></td>
                            </tr>
                            <tr>
                                <td>Kategori</td>
                                <td><strong>
                                        <?= $brg->kategori; ?>
                                    </strong></td>
                            </tr>
                            <tr>
                                <td>Stock</td>
                                <td><strong>
                                        <?= $brg->stock; ?>
                                    </strong></td>
                            </tr>
                            <tr>
                                <td>Harga</td>
                                <td>
                                    <div class="btn btn-sm btn-success"><strong>
                                            Rp.
                                            <?= number_format($brg->harga, 0, ',', '.'); ?>
                                        </strong></div>
                                </td>
                            </tr>
                        </table>
                        <a href="<?= base_url('dashboard/keranjang/') . $brg->id_brg; ?>"
                            class="btn btn-sm btn-primary">Tambah ke Keranjang</a>
                        <a href="<?= base_url('dashboard'); ?>" class="btn btn-sm btn-danger">Kembali</a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>