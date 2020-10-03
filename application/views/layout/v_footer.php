  <!-- sweet alert -->

  <?php if ($this->session->flashdata('flash')) : ?>
      <div class="row mt-3">
          <div class="col-md-12">
              <div class="alert alert-success alert-dismissible fade show text-center" role="alert">
                  massage
                  <strong>sent</strong><?= $this->session->flashdata('flash');
                                        ?>
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                  </button>
              </div>
          </div>
      </div>
  <?php endif; ?>

  <!-- akhir sweet alert -->
  <!-- awal footer -->
  <footer>
      <div class="footer-content" style="width: 100%;height:400px;background: blue;">
          <div class="content-about" style="width: 30%;height:400px;">
              <h2 style="font-family: sans-serif; color:orange; text-align: center; font-size: 30px;line-height: 100px;">Dewi Sekartaji Batik</h2>
              <p style="font-style: times new roman; color: white; text-align:center;font-size:14px;">Dewi Sekartaji Batik is one of home industry which is established on April 2019 and located in Wonosari Village, Gondangwetan Subdistrict, Pasuruan, East Java. The name of “Dewi Sekartaji” is taken from the name of owner family. This home industry made batik as commercial commodity which still uphold traditional values. We preserve batik by popularizing it in the community to be accepted by all community.
                  Dewi Sekartaji Batik present for fashion lovers who want to look attractive in traditional pieces. Dewi Sekartaji Batik aim to preserve tradition and bring the nation’s culture to modern era.
              </p>
          </div>
          <div class="content-media" style="margin-left: 600px; margin-top: -365px;">
              <h2 style="font-family: sans-serif; color:orange; font-size: 30px;margin-left:50px;">Connect me</h2>
              <div class="container">
                  <ul>
                      <!-- <i class="fab fa-facebook-square"><a href="https://www.facebook.com"> : batik.ind</a></i></br>
                      <i class="fab fa-twitter-square"><a href="https://twitter.com/login"> : @batik</a></i></br> -->
                      <i class="fab fa-instagram-square"><a href="https://www.instagram.com"> : @Diahgardenia</a></i>
                  </ul>
              </div>

          </div>
          <div class="content-pesan" style="margin-left: 1000px; margin-top: -100px;">
              <h2 style="font-family: sans-serif; color:orange; font-size: 30px;text-align: center;">Contact me</h2>
              <div class="container">
                  <form method="POST" action="<?php echo base_url() . 'home/send_massage' ?>">
                      <div class="col-sm-12">
                          <div class="form-group">
                              <textarea class="form-control" name="massage" id="massage" rows="3" placeholder="Enter your massage.."></textarea>
                          </div>
                      </div>
                      <div class="col-sm-12">
                          <div class="form-group">
                              <input class="form-control valid" name="nama_user" id="nama_user" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" placeholder="Enter your name">
                          </div>
                      </div>
                      <div class="col-sm-12">
                          <div class="form-group">
                              <input class="form-control valid" name="email_user" id="email_user" type="email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" placeholder="Email">
                          </div>
                      </div>

                      <button type="submit" class="btn btn-primary" style="margin-left: 380px;">Send</button>
              </div>
              </form>
          </div>
      </div>
      </div>
      <div class="footer-bottoms" style="text-align: center;color: #adadad; background: black; width:100%;height:20px;">
          &copy Copyright 2020| Design by Refi Tri Hidayatullah
      </div>
  </footer>
  <!-- akhir footer -->


  <!-- Optional JavaScript -->

  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="<?php echo base_url('assets/js/jquery-3.5.1.slim.min.js') ?>"></script>
  <script src="<?php echo base_url('assets/js/popper.min.js') ?>"></script>
  <script src="<?php echo base_url('assets/js/bootstrap.min.js') ?>"></script>
  <script src="<?php echo base_url('assets/assets/js/jquery-3.2.1.min.js') ?>"></script>
  <script src="<?php echo base_url('assets/assets/js/fancybox.min.js') ?>"></script>

  <script>
      $('.carousel').carousel({
          interval: 3000
      })
  </script>
  <!-- add -->

  <!-- Jquery, Popper, Bootstrap -->
  <script src="<?php echo base_url('assets/assets/js/vendor/jquery-1.12.4.min.js') ?>"></script>
  <!-- Jquery Mobile Menu -->
  <script src="<?php echo base_url('assets/assets/js/jquery.slicknav.min.js') ?>"></script>

  <!-- Jquery Slick , Owl-Carousel Plugins -->
  <script src="<?php echo base_url('assets/assets/js/owl.carousel.min.js') ?>"></script>
  <script src="<?php echo base_url('assets/assets/js/slick.min.js') ?>"></script>

  <!-- One Page, Animated-HeadLin -->
  <script src="<?php echo base_url('assets/assets/js/wow.min.js') ?>"></script>
  <script src="<?php echo base_url('assets/assets/js/animated.headline.js') ?>"></script>

  <!-- Scrollup, nice-select, sticky -->
  <script src="<?php echo base_url('assets/assets/js/jquery.scrollUp.min.js') ?>"></script>
  <script src="<?php echo base_url('assets/assets/js/jquery.nice-select.min.js') ?>"></script>
  <script src="<?php echo base_url('assets/assets/js/jquery.sticky.js') ?>"></script>
  <script src="<?php echo base_url('assets/assets/js/jquery.magnific-popup.js') ?>"></script>

  <!-- contact js -->
  <script src="<?php echo base_url('assets/assets/js/contact.js') ?>"></script>
  <script src="<?php echo base_url('assets/assets/js/jquery.form.js') ?>"></script>
  <script src="<?php echo base_url('assets/assets/js/jquery.validate.min.js') ?>"></script>
  <script src="<?php echo base_url('assets/assets/js/mail-script.js') ?>"></script>
  <script src="<?php echo base_url('assets/assets/js/jquery.ajaxchimp.min.js') ?>"></script>

  <!-- Jquery Plugins, main Jquery -->
  <script src="<?php echo base_url('assets/assets/js/plugins.js') ?>"></script>
  <script src="<?php echo base_url('assets/assets/js/main.js') ?>"></script>


  <!-- end -->

  </body>

  </html>