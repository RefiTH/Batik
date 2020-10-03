<!-- <div class="container-fluid">
    <div class="card">
        <h5 class="card-header">Detail Produk</h5>
        <div class="card-body">
            <?php foreach ($barang as $brg) : ?>
                <div class="row">
                    <div class="col-md-4 card style=" width: 18rem;, max-height:100px;">
                        <img src="<?php echo base_url() . '/upload/' . $brg->gambar ?>" alt="">
                    </div>
                    <div class="col-md-8"></div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div> -->
<div class="slider-area ">
    <!-- Mobile Menu -->
    <div class="single-slider slider-height d-flex align-items-center " style="margin-bottom:50px;" data-background="<?php echo base_url('assets/assets/img/hero/category.jpg') ?>">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="hero-cap text-center">
                        <h2>Detail product</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--================Single Product Area =================-->
<div class="product_image_area">
    <div class="container">
        <?php foreach ($barang as $brg) : ?>
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="product_img_slide owl-carousel">
                        <div class="single_product_img" style="margin-top: 50px;">
                            <img src="<?php echo base_url() . '/upload/' . $brg->gambar ?>" alt="#" class="img-fluid">
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="single_product_text text-center" style="margin-bottom:150px;">
                        <h3 style="margin-top: 50px;"><?php echo $brg->nama_barang ?> </h3>
                        <h4 class="badge badge-pill badge-warning " style="margin-top: 10px;font-size:20px;">Rp <?php echo $brg->harga_barang ?></h4>
                        <p>
                            <?php echo $brg->deskripsi_barang ?>
                        </p>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>
<!--================End Single Product Area =================-->
<!-- subscribe part here -->
<!-- <section class="subscribe_part section_padding">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="subscribe_part_content">
                    <h2>Get promotions & updates!</h2>
                    <p>Seamlessly empower fully researched growth strategies and interoperable internal or “organic” sources credibly innovate granular internal .</p>
                    <div class="subscribe_form">
                        <input type="email" placeholder="Enter your mail">
                        <a href="#" class="btn_1">Subscribe</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> -->
<!-- subscribe part end -->