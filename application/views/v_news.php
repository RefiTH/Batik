<!-- <div class="container">
    <h3 class="display-4">News</h3>
</div> -->
<div class="slider-area ">
    <!-- Mobile Menu -->
    <div class="single-slider slider-height d-flex align-items-center " data-background="<?php echo base_url('assets/assets/img/hero/category.jpg') ?>">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="hero-cap text-center">
                        <h2>News</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <?php foreach ($berita as $brt) : ?>
            <div class="col-md-12" style="margin-left: 100px;">
                <div class="card mb-5" style="max-width: 1000px;">
                    <div class="row no-gutters">
                        <div class="col-md-4 mt-2">
                            <img src="<?php echo base_url() . '/upload/' . $brt->gambar_berita ?>" class="card-img" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $brt->nama_berita ?></h5>
                                <p class="card-text"><?php echo $brt->deskripsi_berita ?></p>
                                <p class="card-text"><small class="text-muted"><?php echo $brt->tanggal_berita ?></small></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>