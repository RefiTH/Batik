<div class="single-slider slider-height d-flex align-items-center " style="margin-bottom:50px;" data-background="<?php echo base_url('assets/assets/img/hero/category.jpg') ?>">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="hero-cap text-center">
                    <h2>Gallery</h2>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<div class="container" style="margin-top:5px;margin-bottom:50px;margin-left:230px;">
    <div class="row">
        <?php foreach ($barang as $brg) : ?>
            <div class="col-md-3 mb-2" style="margin-left: 30px;margin-top:2px;">
                <p class="imglist img" style="width: 15rem;">
                    <a href="<?php echo base_url() . '/upload/' . $brg->gambar ?>" data-fancybox="images" data-caption="<?php echo $brg->nama_barang ?>">
                        <img style=" width: 300px;height: 200px; border-radius: 10px;box-shadow: 0px 0px 10px rgba(125, 193, 206, 0.7;
    margin-bottom: 10px; margin-left: 30px;" src="<?php echo base_url() . '/upload/' . $brg->gambar ?>" alt="batik 1">
                    </a>
                </p>
            </div>
        <?php endforeach; ?>
    </div>
</div>