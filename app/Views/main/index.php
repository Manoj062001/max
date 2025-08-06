<!-- Hero Carousel Section -->
<div class="text-center mt-3">
    <div id="desktopcaro" class="carousel slide  d-none d-sm-block" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="<?= base_url('assets/img/slider/feb2023-pc-1.jpg') ?>" alt="">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="<?= base_url('assets/img/slider/feb2023-pc-2.jpg') ?>" alt="">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="<?= base_url('assets/img/slider/chspp.jpg') ?>" alt="">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="<?= base_url('assets/img/slider/clslp.jpg') ?>" alt="">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="<?= base_url('assets/img/slider/ruskpc.jpg') ?>" alt="">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="<?= base_url('assets/img/slider/l0.jpg') ?>" alt="">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="<?= base_url('assets/img/slider/l4.jpg') ?>" alt="">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="<?= base_url('assets/img/slider/l2.jpg') ?>" alt="">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="<?= base_url('assets/img/slider/l1.jpg') ?>" alt="">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="<?= base_url('assets/img/slider/l3.jpg') ?>" alt="">
            </div>
        </div>
        <a class="carousel-control-prev" href="#desktopcaro" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#desktopcaro" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <div id="mobilecaro" class="carousel slide d-block d-sm-none" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="<?= base_url('assets/img/slider/feb2023-mob-1.jpg') ?>" alt="">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="<?= base_url('assets/img/slider/feb2023-mob-2.jpg') ?>" alt="">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="<?= base_url('assets/img/slider/chspm.jpg') ?>" alt="">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="<?= base_url('assets/img/slider/clslm.jpg') ?>" alt="">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="<?= base_url('assets/img/slider/ruskmob.jpg') ?>" alt="">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="<?= base_url('assets/img/slider/m0.jpg') ?>" alt="">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="<?= base_url('assets/img/slider/m4.jpg') ?>" alt="">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="<?= base_url('assets/img/slider/m2.jpg') ?>" alt="">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="<?= base_url('assets/img/slider/m1.jpg') ?>" alt="">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="<?= base_url('assets/img/slider/m3.jpg') ?>" alt="">
            </div>
        </div>
        <a class="carousel-control-prev" href="#mobilecaro" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#mobilecaro" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>

<!-- Categories Section -->
<div class="maincontainer mt-4">
   <div class="row rowheading wow bounceInUp" style="visibility: visible; animation-name: bounceInUp;">
      <div class="col-sm-12">
         <h2>Categories</h2>
      </div>
   </div>
   <div class="row">
      <div class="col-sm-12">
         <div class="owl-carousel owl-theme owl-carousel-cat">
            <div class="category potato item wow bounceInUp" data-wow-delay=".2s">
                  <div class="cat-img">
                     <img src="<?= base_url('assets/img/category/potato.png') ?>" width="100%" alt="Potato Chips">
                  </div>
                  <h3>Potato Chips</h3>
               <a href="<?= base_url('potato-chips') ?>" class="btn btn-primary btn-view">View All</a>
            </div>
            <div class="category corn item wow bounceInUp" data-wow-delay=".3s">
                  <div class="cat-img">
                     <img src="<?= base_url('assets/img/category/cheeseballs.png') ?>" width="100%" alt="Baked Corn Snacks">
                  </div>
                  <h3>Baked Corn Snacks</h3>
               <a href="<?= base_url('corn-snacks') ?>" class="btn btn-primary btn-view">View All</a>
            </div>
            <div class="category rusks item wow bounceInUp" data-wow-delay=".4s">
                  <div class="cat-img">
                     <img src="<?= base_url('assets/img/category/rusks.png') ?>" width="100%" alt="Rusks and Cookies">
                  </div>
                  <h3>Rusks and Cookies</h3>
               <a href="<?= base_url('rusks-and-cookies') ?>" class="btn btn-primary btn-view">View All</a>
            </div>
            <div class="category namkeen item wow bounceInUp" data-wow-delay=".4s">
                  <div class="cat-img">
                     <img src="<?= base_url('assets/img/category/namkeen.png') ?>" width="100%" alt="Namkeen Snacks">
                  </div>
                  <h3>Namkeen Snacks</h3>
               <a href="<?= base_url('namkeen-snacks') ?>" class="btn btn-primary btn-view">View All</a>
            </div>
            <div class="category fryums item wow bounceInUp" data-wow-delay=".2s">
                  <div class="cat-img">
                     <img src="<?= base_url('assets/img/category/fryums.png') ?>" width="100%" alt="Fryums Snacks">
                  </div>
                  <h3>Fryums Snacks</h3>
               <a href="<?= base_url('fryums-snacks') ?>" class="btn btn-primary btn-view">View All</a>
            </div>
         </div>
      </div>
   </div>
</div>

<!-- Most Popular Section -->
<div class="popularcontainer mt-4">
    <div class="row rowheading wow bounceInUp" style="visibility: visible; animation-name: bounceInUp;">
        <div class="col-sm-12">
            <h2>Most Popular</h2>
        </div>
    </div>
    <div class="text-center popularrow owl-carousel owl-theme owl-carousel-pro  wow bounceInUp">
        <?php foreach ($products as $product) :  ?>
            <div class="item popularproduct">
                <img class="newbadge" src="<?= base_url('assets/img/icons/new.png') ?>">
                <img class="" src="<?= base_url('assets/img/product/' . esc($product['image'])) ?>" width="100%" alt="">
                <h5><?= esc($product['name']) ?></h5>
                <a href="<?= base_url('product/' . esc($product['slug'])) ?>" class="btn btn-primary btn-popularview">Details</a>
            </div>
        <?php endforeach ?>
    </div>
</div>

<div class="videocontainer mt-4">
    <video width="100%" controls="" poster="<?= base_url('assets/img/video/poster.jpg') ?>">
        <source src="<?= base_url('assets/video/maxvita.mp4') ?>" type="video/mp4">
    </video>
</div>

<!-- Gallery Section -->
<div class="gallerycontainer mt-4">
    <div class="row rowheading wow bounceInUp" style="visibility: visible; animation-name: bounceInUp;">
        <div class="col-sm-12">
            <h2>Gallery</h2>
        </div>
    </div>
    <div class="row gal-images">
        <div class="col-sm-12">
            <div class="row">
                <div class="col-sm-4 px-0 imgdiv wow bounceInUp" data-wow-delay=".2s" style="visibility: visible; animation-delay: 0.2s; animation-name: bounceInUp;">
                    <a href="<?= base_url('assets/img/gallery/1.jpg') ?>" class="gallery-item">
                        <img src="<?= base_url('assets/img/gallery/1.jpg') ?>" width="100%" alt="Maxvita Gallery Image 1">
                        <div class="overlay">
                            <div class="icon" title="View Image">
                                <i class="fas fa-eye" aria-hidden="true"></i>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-4 px-0 imgdiv wow bounceInUp" data-wow-delay=".3s" style="visibility: visible; animation-delay: 0.3s; animation-name: bounceInUp;">
                    <a href="<?= base_url('assets/img/gallery/2.jpg') ?>" class="gallery-item">
                        <img src="<?= base_url('assets/img/gallery/2.jpg') ?>" width="100%" alt="Maxvita Gallery Image 2">
                        <div class="overlay">
                            <div class="icon" title="View Image">
                                <i class="fas fa-eye" aria-hidden="true"></i>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-4 px-0 imgdiv wow bounceInUp" data-wow-delay=".3s" style="visibility: visible; animation-delay: 0.3s; animation-name: bounceInUp;">
                    <a href="<?= base_url('assets/img/gallery/3.jpg') ?>" class="gallery-item">
                        <img src="<?= base_url('assets/img/gallery/3.jpg') ?>" width="100%" alt="Maxvita Gallery Image 3">
                        <div class="overlay">
                            <div class="icon" title="View Image">
                                <i class="fas fa-eye" aria-hidden="true"></i>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4 px-0 imgdiv wow bounceInUp" data-wow-delay=".2s" style="visibility: visible; animation-delay: 0.2s; animation-name: bounceInUp;">
                    <a href="<?= base_url('assets/img/gallery/6.jpg') ?>" class="gallery-item">
                        <img src="<?= base_url('assets/img/gallery/6.jpg') ?>" width="100%" alt="Maxvita Gallery Image 6">
                        <div class="overlay">
                            <div class="icon" title="View Image">
                                <i class="fas fa-eye" aria-hidden="true"></i>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-4 px-0 imgdiv wow bounceInUp" data-wow-delay=".3s" style="visibility: visible; animation-delay: 0.3s; animation-name: bounceInUp;">
                    <a href="<?= base_url('assets/img/gallery/5.jpg') ?>" class="gallery-item">
                        <img src="<?= base_url('assets/img/gallery/5.jpg') ?>" width="100%" alt="Maxvita Gallery Image 5">
                        <div class="overlay">
                            <div class="icon" title="View Image">
                                <i class="fas fa-eye" aria-hidden="true"></i>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-4 px-0 imgdiv wow bounceInUp" data-wow-delay=".3s" style="visibility: visible; animation-delay: 0.3s; animation-name: bounceInUp;">
                    <a href="<?= base_url('assets/img/gallery/4.jpg') ?>" class="gallery-item">
                        <img src="<?= base_url('assets/img/gallery/4.jpg') ?>" width="100%" alt="Maxvita Gallery Image 4">
                        <div class="overlay">
                            <div class="icon" title="View Image">
                                <i class="fas fa-eye" aria-hidden="true"></i>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Contact Section -->
<div class="contactcontainer mt-4">
    <div class="row rowheading wow bounceInUp" style="visibility: visible; animation-name: bounceInUp;">
        <div class="col-sm-12">
            <h2>Address</h2>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 contact-address">
            <div class="row">
                <div class="col-2 text-right">
                    <img src="<?= base_url('assets/img/icons/004-location.png') ?>" width="30" alt="Location">
                </div>
                <div class="col-10">
                    <h5>MAXVITA foods india Pvt Ltd </h5>
                    <p>Plot No 48, Behind NIEIT Engineering college</p>
                    <p>Hebbal 2nd Phase Industrial Area,</p>
                    <p>Anaganahalli, Mandya-571606</p>
                    <p>Karnataka, India</p>
                </div>
            </div>
            <div class="row" style="margin-top: 10px;">
                <div class="col-2 text-right">
                    <img src="<?= base_url('assets/img/icons/001-phone.png') ?>" width="30" alt="phone">
                </div>
                <div class="col-10">
                    <p><a href="tel:0821 - 2975098">0821 - 2975098</a> | <a href="tel:+91 805 032 0101">+91 805 032 0101</a></p>
                </div>
            </div>

            <div class="row" style="margin-top: 10px;">
                <div class="col-2 text-right">
                    <img src="<?= base_url('assets/img/icons/003-gmail.png') ?>" width="30" alt="gmail">
                </div>
                <div class="col-10">
                    <p><a href="mailto:info@maxvitafoods.com">info@maxvitafoods.com</a></p>
                </div>
            </div>
            <div class="row" style="margin-top: 10px;">
                <div class="col-2 text-right">

                </div>
                <div class="col-10">
                    <div class="soicons">
                        <a href="https://www.facebook.com/MaxvitaFoodsofficial/" target="_new"> <i class="fab fa-facebook-square fa-2x" aria-hidden="true"></i> </a>
                        <a href="https://www.instagram.com/maxvita_foods/" target="_new"> <i class="fab fa-instagram fa-2x" aria-hidden="true"></i> </a>
                    </div>
                </div>
            </div>


        </div>
        <div class="col-md-5 contact-form">
            <form id="contact-form" method="post" action="<?= base_url('forms/contact') ?>">
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" name="name" id="name" required="">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" name="email" id="email" required="">
                    </div>
                </div>
                <div class="form-group">
                    <label for="address">Address</label>
                    <input type="text" class="form-control" name="address" id="address" required="">
                </div>
                <div class="form-group">
                    <label for="message">Message</label>
                    <textarea class="form-control" rows="2" name="message" id="message" required=""></textarea>
                </div>
                <div class="text-center">
                    <div class="alertmsg"></div>
                    <button type="submit" class="btn btn-primary" id="home-contact">Submit</button>
                </div>
            </form>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15588.5608279532!2d76.5888553!3d12.3735392!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x20ad325a7ce1c8b0!2sMaxvita%20Foods!5e0!3m2!1sen!2sin!4v1675921002266!5m2!1sen!2sin" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen=""></iframe>
        </div>
    </div>
</div>