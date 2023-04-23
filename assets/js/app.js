$(document).ready(function () {
    $('[data-toggle="tooltip"]').tooltip({
        placement: "top",
        tripger: 'hover'
    });

    $("#home-slide").carousel({
        interval: 3000, 
        ride: "carousel",
    });


    $('.owl-carousel').owlCarousel({
        loop: true,
        margin: 10,
        nav: true,
        autoplay: true,
        autoplayTimeout: 2500,
        nav: true,
        dots: false,
        responsive: {
            0: {
                items: 1
            },

            500: {
                items: 2
            },
            700: {
                items: 3
            },
            1000: {
                items: 4
            }
        }
    });

    $(".navbar-responsive").click(function(){
        $("#responsive-menu").slideToggle();
    });

    $(".arrow-down").click(function(){
        $(".sub-responsive-menu").slideToggle();
        $(this).toggleClass("fas fa-chevron-down fas fa-chevron-up");
    });

    var upSlide = function(){
        $("#responsive-menu").slideUp();
        $(".sub-responsive-menu").slideUp();
    }

    $(window).resize(function(){
        upSlide();
    });

    $(window).scroll(function(){
        upSlide();
    });


}); 
$(document).ready(function() {
    $('.picture-item').click(function() {
        let src_picture = $(this).find('img').attr('src');
        $('.picture_show img').attr('src', src_picture);
        $('.picture-item').removeClass('active');
        $(this).addClass('active');
    });

    $('.move_prev').click(function() {
        if ($('.picture-list li:first-child').hasClass('active')) {
            $('.picture-list li:last-child').click();
        } else {
            $('.picture-item.active').prev().click();
        }
    });


    $('.move_next').click(function() {
        if ($('.picture-list li:last').hasClass('active')) {
            $('.picture-list li:first-child').click();
        } else {
            $('.picture-item.active').next().click();
        }
    });

    $('.picture-list li:first-child').click();

});