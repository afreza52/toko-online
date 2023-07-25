<div class="container-fluid">
    <h4>Invoice Pemesanan Produk</h4>
    <hr>
    <?php if (is_array($invoice) || is_object($invoice)): ?>
        <table class="table table-bordered table-hover table-striped">
            <tr>
                <th width="95">Id Invoice</th>
                <th>Nama Pemesanan</th>
                <th>Alamat Pengiriman</th>
                <th>Tanggal Pemesanan</th>
                <th>Batas Pembayaran</th>
                <th width="10">Aksi</th>
            </tr>
            <?php foreach ($invoice as $inv): ?>
                <tr>
                    <td>
                        <?= $inv->id ?>
                    </td>
                    <td>
                        <?= $inv->nama ?>
                    </td>
                    <td>
                        <?= $inv->alamat ?>
                    </td>
                    <td>
                        <?= $inv->tgl_pesan ?>
                    </td>
                    <td>
                        <?= $inv->batas_bayar ?>
                    </td>
                    <td><a href="<?= base_url('invoice/detail/') . $inv->id; ?>" class="btn btn-sm btn-primary">Detail</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>
    <?php else: ?>
        <table class="table table-bordered table-hover table-striped">
            <tr>
                <th>Id Invoice</th>
                <th>Nama Pemesanan</th>
                <th>Alamat Pengiriman</th>
                <th>Tanggal Pemesanan</th>
                <th>Batas Pembayaran</th>
                <th>Aksi</th>
            </tr>
        </table>
    <?php endif; ?>
</div>