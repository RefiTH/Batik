 <!-- slider Area Start-->
 <div class="slider-area ">
     <!-- Mobile Menu -->
     <div class="single-slider slider-height d-flex align-items-center " data-background="<?php echo base_url('assets/assets/img/hero/category.jpg') ?>">
         <div class="container">
             <div class="row">
                 <div class="col-xl-12">
                     <div class="hero-cap text-center">
                         <h2>Contact Us</h2>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </div>
 <?php foreach ($lokasi as $lks) : ?>
     <!-- slider Area End-->
     <div class="container">
         <div class="row">
             <div class="col-xl-12">
                 <div class="hero-cap text-center" style="margin-top:100px;margin-bottom:100px;">
                     <h2>Our profile</h2>
                     <p><?php echo $lks->profile  ?>
                     </p>
                 </div>
             </div>
         </div>
     </div>

     <!-- ================ maps start ================= -->
     <h3>Location</h3>
     <div class="embed-responsive embed-responsive-21by9">
         <iframe src="<?= $lks->map ?>" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
     </div>


     </div>
     <!-- sweet alert -->
     <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>
     <?php if ($this->session->flashdata('flash')) : ?>
         <!-- <div class="row mt-3">
                 <div class="col-md-6">
                     <div class="alert alert-success alert-dismissible fade show" role="alert">
                         massage
                         <strong>sent</strong><?= $this->session->flashdata('flash');
                                                ?>
                         <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                             <span aria-hidden="true">&times;</span>
                         </button>
                     </div>
                 </div>
             </div> -->
     <?php endif; ?>
     <!-- akhir sweet alert -->
     <div class="container" style="margin-left: 150px;">
         <div class="row">
             <div class="col-12">
                 <h2 class="contact-title text-center mt-5 mb-5">Contact Us</h2>
             </div>
             <div class="col-lg-8">
                 <form class="form-contact contact_form" action="<?php echo base_url() . 'home/send_massage' ?>" method="post">
                     <div class="row">
                         <div class="col-12">
                             <div class="form-group">
                                 <textarea class="form-control w-10" name="massage" id="massage" cols="30" rows="9" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Message'" placeholder=" Enter Message"></textarea>
                             </div>
                         </div>
                         <div class="col-sm-6">
                             <div class="form-group">
                                 <input class="form-control valid" name="nama_user" id="nama_user" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" placeholder="Enter your name">
                             </div>
                         </div>
                         <div class="col-sm-6">
                             <div class="form-group">
                                 <input class="form-control valid" name="email_user" id="email_user" type="email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" placeholder="Email">
                             </div>
                         </div>
                         <!-- <div class="col-12">
                             <div class="form-group">
                                 <input class="form-control" name="subject" id="subject" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Subject'" placeholder="Enter Subject">
                             </div>
                         </div> -->
                     </div>
                     <div class="form-group mt-3">
                         <button type="submit" class="btn btn-success">Send</button>
                     </div>
                 </form>
             </div>
             <div class="col-lg-3 offset-lg-1">
                 <div class="media contact-info">
                     <span class="contact-info__icon"><i class="ti-home"></i></span>
                     <div class="media-body">
                         <h3><?= $lks->desa ?>, <?= $lks->kecamatan ?></h3>
                         <p class="text-center"><?= $lks->kabupaten ?></p>
                     </div>
                 </div>
                 <div class="media contact-info">
                     <span class="contact-info__icon"><i class="ti-tablet"></i></span>
                     <div class="media-body">
                         <h3><?= $lks->no_hp; ?></h3>
                         <p class="text-center">Mon to Fri 9am to 6pm</p>
                     </div>
                 </div>
                 <div class="media contact-info">
                     <span class="contact-info__icon"><i class="ti-email"></i></span>
                     <div class="media-body">
                         <h3><?= $lks->instagram ?></h3>
                         <p class="text-center">Don't forget Follow me , thank you!!</p>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 <?php endforeach; ?>
 </div>
 </section>
 <!-- ================ contact section end ================= -->