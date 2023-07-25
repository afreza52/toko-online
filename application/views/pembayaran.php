<div class="container-fluid">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <div class="btn btn-sm btn-warning">
                <?php
                $grand_total = 0;
                if ($keranjang = $this->cart->contents()) {
                    foreach ($keranjang as $item) {
                        $grand_total = $grand_total + $item['subtotal'];
                    }
                    echo "<h4>Total Belanja Anda : Rp." . number_format($grand_total, 0, ',', '.');

                    ?>
                </div>
                <h3 class="mt-4"> Input Alamat Pengiriman dan Pembayaran</h3>
                <hr>
                <form action="<?= base_url('dashboard/proses_pesanan') ?>" method="post">
                    <div class="form-group">
                        <label for="">Nama Lengkap</label>
                        <input type="text" name="nama" placeholder="Nama lengkap" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Alamat Lengkap</label>
                        <input type="text" name="alamat" placeholder="Alamat Lengkap Anda" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">No. Telpon</label>
                        <input type="text" name="no_telp" placeholder="Nomor Telpon Anda" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Jasa pengiriman</label>
                        <select name="" id="" class="form-control">
                            <option value=""></option>
                            <option value="">JNE</option>
                            <option value="">TIKI</option>
                            <option value="">POS Indonesia</option>
                            <option value="">GOJEK</option>
                            <option value="">GRAB</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Pilih BANK</label>
                        <select name="" id="" class="form-control">
                            <option value=""></option>
                            <option value="">BCA - xxxxxxxxxx</option>
                            <option value="">BNI - XXXXXXXXXX</option>
                            <option value="">BRI - XXXXXXXXXX</option>
                            <option value="">MANDIRI - XXXXXXXXXXXX</option>
                            <option value="">GRAB</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-sm btn-primary mb-3">pesan</button>
                </form>
                <?php
                } else {
                    echo "<h4>Keranjang anda masih kosong";
                }
                ; ?>

        </div>
        <div class="col-md-2"></div>
    </div>
</div>