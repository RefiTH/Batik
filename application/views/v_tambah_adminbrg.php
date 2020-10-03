<div class="container">
    <div class="modal-body">
        <?php if (validation_errors()) : ?>
            <div class="alert alert-danger" role="alert">
                <?= validation_errors();  ?>
            </div>
        <?php endif; ?>
        <form action="" method="post">

            <div class="form-group">
                <label for="nama barang">Nama Barang</label>
                <input type="text" name="nama_barang" class="form-control" id="nama_barang" aria-describedby="nama_barang" placeholder="Enter Nama Barang..">
            </div>
            <div class="form-group">
                <label for="harga_barang">Harga Barang</label>
                <input type="text" name="harga_barang" class="form-control" id="exampleInputPassword1" placeholder="Enter Harga Barang..">
            </div>
            <div class="form-group">
                <label for="deskripsi barang">Deskripsi Barang</label>
                <textarea class="form-control" name="deskripsi_barang" id="exampleFormControlTextarea1" placeholder="Enter Deskripsi Barang.." rows="3"></textarea>
            </div>
            <div class="form-group">
                <label for="exampleFormControlFile1">Input Image</label>
                <input type="file" class="form-control-file" name="gambar" id="gambar" name="gambar">
            </div>
            <button type="submit" class="btn btn-primary">save</button>

        </form>
    </div>
</div>
</div>