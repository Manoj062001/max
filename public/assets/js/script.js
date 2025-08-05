$(document).ready(function () {
    $('.gal-images').magnificPopup({
        delegate: 'a',
        type: 'image',
        tLoading: 'Loading image #%curr%...',
        mainClass: 'mfp-img-mobile',
        gallery: {
            enabled: true,
            navigateByImgClick: true,
            preload: [0, 1] // Will preload 0 - before current, and 1 after the current image
        },
        image: {
            tError: '<a href="%url%">The image #%curr%</a> could not be loaded.'
        }
    });

    $('.owl-carousel-cat').owlCarousel({
        loop: true,
        nav: false,
        autoplay: true,
        autoplayTimeout: 2000,
        autoplayHoverPause: true,
        // navText: ['<i class="fas fa-chevron-circle-left fa-2x"></i>', '<i class="fas fa-chevron-circle-right fa-2x"></i>'],
        responsive: {
            0: {
                items: 2
            },
            900: {
                items: 3
            }
        }
    })

    $('.owl-carousel-pro').owlCarousel({
        loop: true,
        nav: true,
        // navText: ['<i class="fas fa-chevron-circle-left fa-lg"></i>', '<i class="fas fa-chevron-circle-right fa-lg"></i>'],
        responsive: {
            0: {
                items: 2
            },
            750: {
                items: 3
            },
            900: {
                items: 4
            },
            1100: {
                items: 5
            }
        }
    })
});