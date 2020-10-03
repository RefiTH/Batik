 <!-- awal card 
 <div class="container">
     <h3 class="display-4">Collection</h3>
 </div> -->
 <div class="slider-area ">
     <!-- Mobile Menu -->
     <div class="single-slider slider-height d-flex align-items-center " style="margin-bottom:50px;" data-background="<?php echo base_url('assets/assets/img/hero/category.jpg') ?>">
         <div class="container">
             <div class="row">
                 <div class="col-xl-12">
                     <div class="hero-cap text-center">
                         <h2>Collection</h2>
                     </div>
                 </div>
             </div>
         </div>
     </div>
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
                         <div style="text-align:center;margin-bottom:15px;">
                             <i class="fas fa-star text-success"></i>
                             <i class="fas fa-star text-success"></i>
                             <i class="fas fa-star text-success"></i>
                             <i class="fas fa-star-half-alt text-success"></i>
                             <i class="far fa-star text-success"></i>
                         </div>
                         <?php echo anchor('home/detail_barang/' . $brg->id_barang, '<div class="btn btn-sm btn-primary " style="margin-left:60px;">See More</div>') ?>
                         <!-- <div class="bottom-cardss">
                             <button type="button" class="btn btn-primary">See More</button>
                         </div> -->
                     </div>
                 </div>
             </div>
         <?php endforeach; ?>


     </div>
 </div>
 <!-- akhir card -->