<div class="container">
    <div class="content-wrapper">
        <section class="content">
            <?php foreach ($berita as $brt) { ?>
                <form action="<?php echo base_url() . 'home/update_brt'; ?>" method="post">

                    <div class="form-group">
                        <label>Nama Berita</label>
                        <input type="hidden" name="id_berita" class="form-control" value="<?php echo $brt->id_berita ?>">
                        <input type="text" name="nama_berita" class="form-control" value="<?php echo $brt->nama_berita ?>">
                    </div>
                    <div class="form-group">
                        <label>Deskripsi</label>
                        <input type="text" name="deskripsi_berita" class="form-control" value="<?php echo $brt->deskripsi_berita ?>">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlFile1">Input Image</label>
                        <input type="file" class="form-control-file" id="exampleFormControlFile1" value="<?php echo $brt->gambar_berita ?>" name="gambar_berita">
                    </div>
                    <button type="submit" class="btn btn-primary">save</button>


                </form>
            <?php } ?>
        </section>
    </div>
</div>
</div>