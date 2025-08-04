<!-- Hero Carousel Section -->
<section class="hero-carousel-section mt-3">
    <div class="text-center">
        <!-- Desktop Carousel -->
        <div id="desktopcaro" class="owl-carousel d-none d-sm-block">
            <div class="item">
                <img class="d-block w-100" src="<?= base_url('assets/images/slider/slide-1.jpg') ?>" alt="Maxvita Premium Potato Chips">
            </div>
            <div class="item">
                <img class="d-block w-100" src="<?= base_url('assets/images/slider/slide-2.jpg') ?>" alt="Maxvita Baked Corn Snacks">
            </div>
            <div class="item">
                <img class="d-block w-100" src="<?= base_url('assets/images/slider/slide-3.jpg') ?>" alt="Maxvita Namkeen Snacks">
            </div>
            <div class="item">
                <img class="d-block w-100" src="<?= base_url('assets/images/slider/slide-4.jpg') ?>" alt="Maxvita Fryums Snacks">
            </div>
            <div class="item">
                <img class="d-block w-100" src="<?= base_url('assets/images/slider/slide-5.jpg') ?>" alt="Maxvita Rusks and Cookies">
            </div>
            <div class="item">
                <img class="d-block w-100" src="<?= base_url('assets/images/slider/slide-6.jpg') ?>" alt="Maxvita Premium Quality">
            </div>
            <div class="item">
                <img class="d-block w-100" src="<?= base_url('assets/images/slider/slide-7.jpg') ?>" alt="Maxvita Made in India">
            </div>
            <div class="item">
                <img class="d-block w-100" src="<?= base_url('assets/images/slider/slide-8.jpg') ?>" alt="Maxvita Fresh Ingredients">
            </div>
            <div class="item">
                <img class="d-block w-100" src="<?= base_url('assets/images/slider/slide-9.jpg') ?>" alt="Maxvita Family Pack">
            </div>
        </div>

        <!-- Mobile Carousel -->
        <div id="mobilecaro" class="owl-carousel d-block d-sm-none">
            <div class="item">
                <img class="d-block w-100" src="<?= base_url('assets/images/slider/mobile/hm-slider-mob1.jpg') ?>" alt="Maxvita Premium Potato Chips">
            </div>
            <div class="item">
                <img class="d-block w-100" src="<?= base_url('assets/images/slider/mobile/hm-slider-mob2.jpg') ?>" alt="Maxvita Baked Corn Snacks">
            </div>
            <div class="item">
                <img class="d-block w-100" src="<?= base_url('assets/images/slider/mobile/hm-slider-mob3.jpg') ?>" alt="Maxvita Namkeen Snacks">
            </div>
            <div class="item">
                <img class="d-block w-100" src="<?= base_url('assets/images/slider/mobile/hm-slider-mob4.jpg') ?>" alt="Maxvita Fryums Snacks">
            </div>
            <div class="item">
                <img class="d-block w-100" src="<?= base_url('assets/images/slider/mobile/hm-slider-mob5.jpg') ?>" alt="Maxvita Rusks and Cookies">
            </div>
            <div class="item">
                <img class="d-block w-100" src="<?= base_url('assets/images/slider/mobile/hm-slider-mob6.jpg') ?>" alt="Maxvita Premium Quality">
            </div>
            <div class="item">
                <img class="d-block w-100" src="<?= base_url('assets/images/slider/mobile/hm-slider-mob7.jpg') ?>" alt="Maxvita Made in India">
            </div>
            <div class="item">
                <img class="d-block w-100" src="<?= base_url('assets/images/slider/mobile/hm-slider-mob8.jpg') ?>" alt="Maxvita Fresh Ingredients">
            </div>
            <div class="item">
                <img class="d-block w-100" src="<?= base_url('assets/images/slider/mobile/hm-slider-mob9.jpg') ?>" alt="Maxvita Family Pack">
            </div>
        </div>
    </div>
</section>

<!-- Categories Section -->
<div class="maincontainer mt-4">
    <div class="row rowheading wow bounceInUp" style="visibility: visible; animation-name: bounceInUp;">
        <div class="col-sm-12">
            <h2>Categories</h2>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <div class="owl-carousel owl-theme owl-carousel-cat owl-loaded owl-drag">
                <div class="category potato item wow bounceInUp" data-wow-delay=".2s" style="visibility: visible; animation-delay: 0.2s; animation-name: bounceInUp;">
                    <a href="#">
                        <div class="cat-img">
                            <img src="<?= base_url('assets/images/category/potato.png') ?>" width="100%">
                        </div>
                        <h3>Potato Chips</h3>
                    </a>
                    <a href="potato-chips" class="btn btn-primary btn-view">View All</a>
                </div>
                <div class="category corn item wow bounceInUp" data-wow-delay=".3s" style="visibility: visible; animation-delay: 0.3s; animation-name: bounceInUp;">
                    <a href="#">
                        <div class="cat-img">
                            <img src="<?= base_url('assets/images/category/cheeseballs.png') ?>" width="100%">
                        </div>
                        <h3>Baked Corn Snacks</h3>
                    </a>
                    <a href="corn-snacks" class="btn btn-primary btn-view">View All</a>
                </div>
                <div class="category rusks item wow bounceInUp" data-wow-delay=".4s" style="visibility: visible; animation-delay: 0.4s; animation-name: bounceInUp;">
                    <a href="#">
                        <div class="cat-img">
                            <img src="<?= base_url('assets/images/category/rusks.png') ?>" width="100%">
                        </div>
                        <h3>Rusks and Cookies</h3>
                    </a>
                    <a href="rusks-and-cookies" class="btn btn-primary btn-view">View All</a>
                </div>
                <div class="category namkeen item wow bounceInUp" data-wow-delay=".4s" style="visibility: visible; animation-delay: 0.4s; animation-name: bounceInUp;">
                    <a href="#">
                        <div class="cat-img">
                            <img src="<?= base_url('assets/images/category/namkeen.png') ?>" width="100%">
                        </div>
                        <h3>Namkeen Snacks</h3>
                    </a>
                    <a href="namkeen-snacks" class="btn btn-primary btn-view">View All</a>
                </div>
                <div class="category fryums item wow bounceInUp" data-wow-delay=".2s" style="visibility: visible; animation-delay: 0.2s; animation-name: bounceInUp;">
                    <a href="#">
                        <div class="cat-img">
                            <img src="<?= base_url('assets/images/category/fryums.png') ?>" width="100%">
                        </div>
                        <h3>Fryums Snacks</h3>
                    </a>
                    <a href="fryums-snacks" class="btn btn-primary btn-view">View All</a>
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
    <div class="text-center popularrow owl-carousel owl-theme owl-carousel-pro wow bounceInUp owl-loaded owl-drag" style="visibility: visible; animation-name: bounceInUp;">
        <?php if (!empty($popular_products)): ?>
            <?php foreach ($popular_products as $index => $product): ?>
                <div class="item popularproduct">
                    <?php if ($product['new'] == 1): ?>
                        <img class="newbadge" src="<?= base_url('assets/images/icons/new.png') ?>">
                    <?php endif; ?>
                    <img class="ppimg" src="<?= base_url('assets/images/products/' . $product['image']) ?>" width="100%" alt="<?= esc($product['name']) ?>">
                    <h5><?= esc($product['name']) ?></h5>
                    <a href="item?id=<?= $product['id'] ?>" class="btn btn-primary btn-popularview btn-view">Details</a>
                </div>
            <?php endforeach; ?>
        <?php else: ?>
            <!-- Fallback content if no popular products found -->
            <div class="item popularproduct">
                <img class="ppimg" src="<?= base_url('assets/images/products/default-product.jpg') ?>" width="100%" alt="Default Product">
                <h5>No Popular Products Available</h5>
                <a href="#" class="btn btn-primary btn-popularview btn-view">Details</a>
            </div>
        <?php endif; ?>
    </div>
</div>

<div class="videocontainer mt-4">
    <video width="100%" controls="" poster="<?= base_url('assets/images/poster.jpg') ?>">
        <source src="<?= base_url('assets/maxvita.mp4') ?>" type="video/mp4">
        Your browser does not support the video tag.
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
                    <a href="<?= base_url('assets/images/gallery/1.jpg') ?>" class="gallery-item">
                        <img src="<?= base_url('assets/images/gallery/1.jpg') ?>" width="100%" alt="Maxvita Gallery Image 1">
                        <div class="overlay">
                            <div class="icon" title="View Image">
                                <i class="fas fa-eye" aria-hidden="true"></i>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-4 px-0 imgdiv wow bounceInUp" data-wow-delay=".3s" style="visibility: visible; animation-delay: 0.3s; animation-name: bounceInUp;">
                    <a href="<?= base_url('assets/images/gallery/2.jpg') ?>" class="gallery-item">
                        <img src="<?= base_url('assets/images/gallery/2.jpg') ?>" width="100%" alt="Maxvita Gallery Image 2">
                        <div class="overlay">
                            <div class="icon" title="View Image">
                                <i class="fas fa-eye" aria-hidden="true"></i>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-4 px-0 imgdiv wow bounceInUp" data-wow-delay=".3s" style="visibility: visible; animation-delay: 0.3s; animation-name: bounceInUp;">
                    <a href="<?= base_url('assets/images/gallery/3.jpg') ?>" class="gallery-item">
                        <img src="<?= base_url('assets/images/gallery/3.jpg') ?>" width="100%" alt="Maxvita Gallery Image 3">
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
                    <a href="<?= base_url('assets/images/gallery/6.jpg') ?>" class="gallery-item">
                        <img src="<?= base_url('assets/images/gallery/6.jpg') ?>" width="100%" alt="Maxvita Gallery Image 6">
                        <div class="overlay">
                            <div class="icon" title="View Image">
                                <i class="fas fa-eye" aria-hidden="true"></i>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-4 px-0 imgdiv wow bounceInUp" data-wow-delay=".3s" style="visibility: visible; animation-delay: 0.3s; animation-name: bounceInUp;">
                    <a href="<?= base_url('assets/images/gallery/5.jpg') ?>" class="gallery-item">
                        <img src="<?= base_url('assets/images/gallery/5.jpg') ?>" width="100%" alt="Maxvita Gallery Image 5">
                        <div class="overlay">
                            <div class="icon" title="View Image">
                                <i class="fas fa-eye" aria-hidden="true"></i>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-4 px-0 imgdiv wow bounceInUp" data-wow-delay=".3s" style="visibility: visible; animation-delay: 0.3s; animation-name: bounceInUp;">
                    <a href="<?= base_url('assets/images/gallery/4.jpg') ?>" class="gallery-item">
                        <img src="<?= base_url('assets/images/gallery/4.jpg') ?>" width="100%" alt="Maxvita Gallery Image 4">
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


<script>
$(document).ready(function(){
    var carouselOptions={
        loop:true,margin:0,nav:true,dots:false,autoplay:true,autoplayTimeout:5000,autoplayHoverPause:true,
        responsive:{0:{items:1},600:{items:1},1000:{items:1}},
        navText:['<span class="nav-btn">&lt;</span>','<span class="nav-btn">&gt;</span>'],
        smartSpeed:600,dragEndSpeed:600,touchDrag:true,mouseDrag:true,pullDrag:true,freeDrag:false
    };
    $('#desktopcaro').length&&$('#desktopcaro').owlCarousel(carouselOptions);
    $('#mobilecaro').length&&$('#mobilecaro').owlCarousel(carouselOptions);
    
    // Categories carousel
    $('.owl-carousel-cat').owlCarousel({
        loop: true,
        margin: 0,
        nav: false,
        dots: true,
        autoplay: true,
        autoplayTimeout: 4000,
        autoplayHoverPause: true,
        responsive: {
            0: { items: 1 },
            600: { items: 2 },
            1000: { items: 3 }
        },
        touchDrag: true,
        mouseDrag: true,
        pullDrag: true,
        freeDrag: false
    });
    
    // Most Popular carousel
    $('.owl-carousel-pro').owlCarousel({
        loop: true,
        margin: 20,
        nav: true,
        dots: true,
        autoplay: true,
        autoplayTimeout: 5000,
        autoplayHoverPause: true,
        responsive: {
            0: { items: 1 },
            600: { items: 2 },
            1000: { items: 4 }
        },
        touchDrag: true,
        mouseDrag: true,
        pullDrag: true,
        freeDrag: false
    });
    
    // Gallery Lightbox functionality
    var currentImageIndex = 0;
    var galleryImages = [];
    
    // Collect all gallery images
    $('.gallery-item').each(function() {
        galleryImages.push({
            src: $(this).attr('href'),
            alt: $(this).find('img').attr('alt')
        });
    });
    
    $('.gallery-item').on('click', function(e) {
        e.preventDefault();
        currentImageIndex = $(this).closest('.imgdiv').index();
        showLightbox(currentImageIndex);
    });
    
    function showLightbox(index) {
        if (index < 0 || index >= galleryImages.length) return;
        
        var currentImage = galleryImages[index];
        
        // Create lightbox overlay
        var lightbox = $('<div class="lightbox-overlay"></div>');
        var lightboxContent = $('<div class="lightbox-content"></div>');
        var lightboxImg = $('<img src="' + currentImage.src + '" alt="' + currentImage.alt + '">');
        var closeBtn = $('<span class="lightbox-close" title="Close">&times;</span>');
        
        // Create navigation
        var lightboxNav = $('<div class="lightbox-nav"></div>');
        var prevBtn = $('<button class="lightbox-prev" title="Previous">&lt;</button>');
        var nextBtn = $('<button class="lightbox-next" title="Next">&gt;</button>');
        
        // Create counter
        var counter = $('<div class="lightbox-counter">' + (index + 1) + ' / ' + galleryImages.length + '</div>');
        
        // Disable navigation buttons if needed
        if (index === 0) prevBtn.prop('disabled', true);
        if (index === galleryImages.length - 1) nextBtn.prop('disabled', true);
        
        lightboxNav.append(prevBtn).append(nextBtn);
        lightboxContent.append(closeBtn).append(lightboxImg).append(counter);
        lightbox.append(lightboxContent).append(lightboxNav);
        $('body').append(lightbox);
        
        // Prevent body scroll when lightbox is open
        $('body').css('overflow', 'hidden');
        
        // Show lightbox with fade effect
        lightbox.fadeIn(300);
        
        // Navigation functionality
        prevBtn.on('click', function(e) {
            e.stopPropagation();
            if (currentImageIndex > 0) {
                currentImageIndex--;
                updateLightbox();
            }
        });
        
        nextBtn.on('click', function(e) {
            e.stopPropagation();
            if (currentImageIndex < galleryImages.length - 1) {
                currentImageIndex++;
                updateLightbox();
            }
        });
        
        // Close lightbox on overlay click (but not on content click)
        lightbox.on('click', function(e) {
            if ($(e.target).hasClass('lightbox-overlay')) {
                closeLightbox();
            }
        });
        
        // Close lightbox on close button click
        closeBtn.on('click', function(e) {
            e.stopPropagation();
            closeLightbox();
        });
        
        // Keyboard navigation
        $(document).on('keydown.lightbox', function(e) {
            switch(e.keyCode) {
                case 27: // ESC key
                    closeLightbox();
                    break;
                case 37: // Left arrow
                    if (currentImageIndex > 0) {
                        currentImageIndex--;
                        updateLightbox();
                    }
                    break;
                case 39: // Right arrow
                    if (currentImageIndex < galleryImages.length - 1) {
                        currentImageIndex++;
                        updateLightbox();
                    }
                    break;
            }
        });
        
        // Function to update lightbox content
        function updateLightbox() {
            var newImage = galleryImages[currentImageIndex];
            lightboxImg.attr('src', newImage.src).attr('alt', newImage.alt);
            counter.text((currentImageIndex + 1) + ' / ' + galleryImages.length);
            
            // Update navigation buttons
            prevBtn.prop('disabled', currentImageIndex === 0);
            nextBtn.prop('disabled', currentImageIndex === galleryImages.length - 1);
            
            // Reset image animation
            lightboxImg.removeClass('loaded');
            lightboxImg.on('load', function() {
                lightboxImg.addClass('loaded');
            });
        }
        
        // Function to close lightbox
        function closeLightbox() {
            lightbox.fadeOut(300, function() {
                $(this).remove();
                $('body').css('overflow', '');
                $(document).off('keydown.lightbox');
            });
        }
        
        // Add loading animation
        lightboxImg.on('load', function() {
            lightboxImg.addClass('loaded');
        });
    }
});
</script>