    <!-- slider image -->
    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img style="max-height: 600px;" src="<?php echo base_url('assets/img/depan2.jpg') ?>" class="d-block w-100 " alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Welcome to Official of Dewi Sekartaji Batik</h5>
                    <p>This site allows you to visit our gallery from everywhere. Utilizing this site, you are able to get information about us easier. </p>
                </div>
            </div>
            <div class="carousel-item">
                <img style="max-height: 600px;" src="<?php echo base_url('assets/img/depan5.jpg') ?>" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Welcome to Official of Dewi Sekartaji Batik</h5>
                    <p>This site allows you to visit our gallery from everywhere. Utilizing this site, you are able to get information about us easier. </p>
                </div>
            </div>
            <div class="carousel-item">
                <img style="max-height: 600px;" src="<?php echo base_url('assets/img/depan3.jpg') ?>" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Welcome to Official of Dewi Sekartaji Batik</h5>
                    <p>This site allows you to visit our gallery from everywhere. Utilizing this site, you are able to get information about us easier. </p>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <!-- end slider image -->
    <!-- awal card  -->
    <div class="container">
        <h3 class="display-4">Collection</h3>
    </div>
    <div class="container">
        <div class="row">
            <?php foreach ($barang as $brg) : ?>
                <div class="col-md-3 mb-2">
                    <div class="card" style="width: 15rem;">
                        <img src="<?php echo base_url() . '/upload/' . $brg->gambar  ?>" class="card-img-top" alt="batik">
                        <div class="card-body bg-light">
                            <h5 class="card-title"><?php echo $brg->nama_barang ?></h5>
                            <p class="badge badge-pill badge-warning" style="text-align: center;margin-left:59px;">Rp. <?php echo $brg->harga_barang ?></p>
                            <!-- <div style="text-align:center;margin-bottom:15px;">
                                <i class="fas fa-star text-success"></i>
                                <i class="fas fa-star text-success"></i>
                                <i class="fas fa-star text-success"></i>
                                <i class="fas fa-star-half-alt text-success"></i>
                                <i class="far fa-star text-success"></i>
                            </div> -->
                            <?php echo anchor('home/detail_barang/' . $brg->id_barang, '<div class="btn btn-sm btn-primary" style="margin-left:60px;">See More</div>') ?>
                            <!-- <div class="bottom-cardss">
                                <button type="button" class="btn btn-primary" data-target="#produk1" data-toggle="modal">See More</button>
                            </div> -->
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>



        </div>

    </div>
    <!-- akhir card -->

    <!-- pagination awal -->
    <!-- <nav aria-label="Page navigation example">
        <ul class="pagination justify-content-center">
            <li class="page-item">
                <a class="page-link" href="#" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                </a>
            </li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item">
                <a class="page-link" href="#" aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                </a>
            </li>
        </ul>
    </nav> -->
    <!-- pagination akhir -->
    <!-- jumbotron -->
    <section class="jumbotron-bg">
        <div class="jumbotron jumbotron-fluid warna-bg">
            <h3 class="display-4">News</h3>
            <div class="container">
                <div class="row">
                    <?php foreach ($berita as $brt) : ?>
                        <div class="col-md-4 mb-2 ">
                            <div class="card">
                                <img src="<?php echo base_url() . '/upload/' . $brt->gambar_berita ?>" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title"><?php echo $brt->nama_berita ?></h5>
                                    <p class="card-text"><?php echo $brt->deskripsi_berita ?></p>
                                    <p class="card-text"><small class="text-muted"><?php echo $brt->tanggal_berita ?></small></p>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </section>
    <!-- akhir jumbotron -->