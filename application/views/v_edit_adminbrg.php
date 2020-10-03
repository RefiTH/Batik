<div class="container">
    <div class="content-wrapper">
        <section class="content">
            <?php foreach ($barang as $brg) { ?>
                <form action="<?php echo base_url() . 'home/update'; ?>" method="post">

                    <div class="form-group">
                        <label>Nama Barang</label>
                        <input type="hidden" name="id_barang" class="form-control" value="<?php echo $brg->id_barang ?>">
                        <input type="text" name="nama_barang" class="form-control" value="<?php echo $brg->nama_barang ?>">
                    </div>
                    <div class="form-group">
                        <label>Harga Barang</label>
                        <input type="number" name="harga_barang" class="form-control" value="<?php echo $brg->harga_barang ?>">
                    </div>
                    <div class="form-group">
                        <label>Deskripsi Barang</label>
                        <input type="text" name="deskripsi_barang" class="form-control" value="<?php echo $brg->deskripsi_barang ?>">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlFile1">Input Image</label>
                        <input type="file" class="form-control-file" id="exampleFormControlFile1" name="gambar" value="<?php echo $brg->gambar ?>">
                    </div>
                    <button type="submit" id="btn_edit_brg" class="btn btn-primary">save</button>


                </form>
            <?php } ?>
        </section>
    </div>
</div>
</div>