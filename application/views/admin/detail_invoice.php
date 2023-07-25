<div class="container-fluid">
    <h4>Detail Pesanan <div class="btn btn-sm btn-success">No. Invoice:
            <?= $invoice->id; ?>
        </div>
    </h4>
    <hr>
    <table class="table table-bordered table-hover table-striped">
        <tr>
            <th>ID BARANG</th>
            <th>NAMA PRODUK</th>
            <th>JUMLAH PESANAN</th>
            <th>HARGA SATUAN</th>
            <th>SUB-TOTAL</th>
        </tr>
        <?php
        $total = 0;
        foreach ($pesanan as $p):
            $subtotal = $p->jumlah * $p->harga;
            $total += $subtotal; ?>
            <tr>
                <td>
                    <?= $p->id_brg ?>
                </td>
                <td>
                    <?= $p->nama_brg ?>
                </td>
                <td>
                    <?= $p->jumlah ?>
                </td>
                <td>
                    Rp.
                    <?= number_format($p->harga, 0, ',', '.') ?>
                </td>
                <td>
                    Rp.
                    <?= number_format($subtotal, 0, ',', '.') ?>
                </td>
            </tr>
        <?php endforeach; ?>
        <tr>
            <td colspan="4">Grand Total</td>
            <td>
                Rp.
                <?= number_format($total, 0, ',', '.'); ?>
            </td>
        </tr>
    </table>
    <a href="<?= base_url('invoice'); ?>" class="btn btn-sm btn-primary">Kembali</a>
</div>