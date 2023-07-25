<div class="container-fluid">
    <h3><i class="fas-fa-edit"></i>EDIT DATA BARANG</h3>
    <hr>
    <div class="row">
        <div class="col-sm-6">

            <?php foreach ($barang as $brg): ?>
                <form action="<?= base_url('admin/data_barang/update'); ?>" method="post">
                    <div class="form-group row">
                        <input type="hidden" name="id" value="<?= $brg->id_brg; ?>">
                        <label for="" class="col-sm-3 col-form-label">Nama Barang</label>
                        <div class="col-sm-9">
                            <input type="text" name="nama_brg" class="form-control" value="<?= $brg->nama_brg; ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="" class="col-sm-3 col-form-label">Keterangan</label>
                        <div class="col-sm-9">
                            <input type="text" name="keterangan" value="<?= $brg->keterangan; ?>" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="" class="col-sm-3 col-form-label">Kategori</label>
                        <div class="col-sm-9">
                            <select type="text" name="kategori" value="<?= $brg->kategori; ?>" class="form-control">
                                <option value="<?= $brg->kategori; ?>">
                                    <?= $brg->kategori; ?>
                                </option>
                                <option value="Elektronik">Elektronik</option>
                                <option value="Pakaian Pria">Pakaian Pria</option>
                                <option value="Pakaian Wanita">Pakaian Wanita</option>
                                <option value="Pakaian Anak-anak">Pakaian Anak-anak</option>
                                <option value="Peralatan Olahraga">Peralatan Olahraga</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="" class="col-sm-3 col-form-label">Harga</label>
                        <div class="col-sm-9">
                            <input type="text" name="harga" value="<?= $brg->harga; ?>" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="" class="col-sm-3 col-form-label">Stock</label>
                        <div class="col-sm-9">
                            <input type="text" name="stock" value="<?= $brg->stock; ?>" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="" class="col-sm-3 col-form-label">Keterangan</label>
                        <div class="col-sm-9">
                            <input type="text" name="keterangan" value="<?= $brg->keterangan; ?>" class="form-control">
                        </div>
                    </div>
                    <div class="form-group float-right">
                        <button type="button" class="btn btn-primary">Batal</button>
                        <button type="submit" class="btn btn-danger">Edit</button>
                    </div>
                </form>
            <?php endforeach; ?>
        </div>
    </div>
</div>