jQuery(document).ready(function($) {
    $('.technologies-carousel').slick({
        infinite: true,
        slidesPerRow: 2,
        slidesToScroll: 1,
        rows: 2,
        arrows: false,
        dots: true,
        mobileFirst: true,
        responsive: [
            {
              breakpoint: 480,
              settings: {
                slidesPerRow: 4,
              }
            },
            {
                breakpoint: 1024,
                settings: {
                  slidesPerRow: 2,
                }
            },
            // You can unslick at a given breakpoint now by adding:
            // settings: "unslick"
            // instead of a settings object
        ]

    });
});