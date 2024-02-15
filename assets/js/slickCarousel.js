// Carousel desktop
$(document).ready(function(){
    $('.slick-carousel').slick({
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 1,
    });
});

// Carousel mobile
$(document).ready(function(){
    $('.slick-mobile').slick({
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        // dots: true
    });
});
