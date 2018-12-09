(function ($) {
    "use strict";

    /*==========  Responsive Navigation  ==========*/
    $('.main-nav').children().clone().appendTo('.responsive-nav');
    $('.responsive-menu-open').on('click', function (event) {
        event.preventDefault();
        $('body').addClass('no-scroll');
        $('.responsive-menu').addClass('open');
        return false;
    });
    $('.responsive-menu-close').on('click', function (event) {
        event.preventDefault();
        $('body').removeClass('no-scroll');
        $('.responsive-menu').removeClass('open');
        return false;
    });
    $('.responsive-nav li').each(function (index) {
        if ($(this).find('ul').length) {
            var text = $(this).find('> a').text();
            var id = text.replace(/\s+/g, '-').toLowerCase();
            id = id.replace('&', '');
            $(this).find('> a').attr('href', '#collapse-' + id);
            $(this).find('> a').attr('data-toggle', 'collapse');
            $(this).find('> a').append('<i class="fa fa-angle-down"></i>');
            $(this).find('> ul').attr('id', 'collapse-' + id);
            $(this).find('> ul').addClass('collapse');
        }
    });
    $('.responsive-nav a').on('click', function () {
        if ($(this).parent().hasClass('collapse-active')) {
            $(this).parent().removeClass('collapse-active');
        } else {
            $(this).parent().addClass('collapse-active');
        }
    });

    /*==========  Login / Signup  ==========*/
    $('.login-open').on('click', function (event) {
        event.preventDefault();
        $('.login-wrapper').addClass('open');
        $('.signup-wrapper').removeClass('open');
    });
    $(document).on('click', function (event) {
        if (!$(event.target).closest('.login').length && !$(event.target).closest('.login-open').length) {
            $('.login-wrapper').removeClass('open');
        }
    });
    $('.signup-open').on('click', function (event) {
        event.preventDefault();
        $('.signup-wrapper').addClass('open');
        $('.login-wrapper').removeClass('open');
    });
    $(document).on('click', function (event) {
        if (!$(event.target).closest('.signup').length && !$(event.target).closest('.signup-open').length) {
            $('.signup-wrapper').removeClass('open');
        }
    });

    /*==========  Accordion  ==========*/
    $('.panel-heading a').on('click', function () {
        if ($(this).parents('.panel-heading').hasClass('active')) {
            $('.panel-heading').removeClass('active');
        } else {
            $('.panel-heading').removeClass('active');
            $(this).parents('.panel-heading').addClass('active');
        }
    });

    /*==========  Highlights Slider  ==========*/
    $('.highlight-slider').owlCarousel({
        loop: true,
        nav: true,
        dots: false,
        navText: ['<i class="pe-7s-angle-left"></i>', '<i class="pe-7s-angle-right"></i>'],
        items: 6,
        responsive: {
            0: {
                items: 2
            },
            480: {
                items: 6
            },
            769: {
                items: 6
            }
        }
    });

    /*==========  Directory Slider  ==========*/
    $('.directory-slider').owlCarousel({
        loop: false,
        nav: true,
        dots: false,
        navText: ['<i class="pe-7s-angle-left"></i>', '<i class="pe-7s-angle-right"></i>'],
        items: 4,
        center: true,
        startPosition: 1,
        responsive: {
            0: {
                items: 1,
                startPosition: 0
            },
            480: {
                items: 2,
                startPosition: 0
            },
            769: {
                items: 4
            }
        }
    });

    /*==========  Directory Single Slider  ==========*/
    $('.directory-single-slider').owlCarousel({
        loop: true,
        nav: true,
        dots: false,
        navText: ['<i class="pe-7s-angle-left"></i>', '<i class="pe-7s-angle-right"></i>'],
        items: 4,
        autoWidth: true,
        navContainer: '#customNav',
        responsive: {
            0: {
                items: 1,
                autoWidth: false,
                autoHeight: true
            },
            480: {
                items: 2
            },
            769: {
                items: 4
            }
        }
    });

    /*==========  Blog Gallery  ==========*/
    $('.blog-gallery').owlCarousel({
        loop: true,
        nav: true,
        dots: false,
        navText: ['<i class="pe-7s-angle-left"></i>', '<i class="pe-7s-angle-right"></i>'],
        items: 1
    });

    /* COUNTDOWN */
    $("#countdown").countdown({
        date: "1 Jan 2018 00:00:00", // Put your date here
        format: "on"
    });

    /*==========  Disable Custom Dropdown on Mobile devices  ==========*/

    if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {
        // the browser window is less than 768px
        $('.selectpicker').selectpicker('destroy');
    }

    $(document).on('click', function (event) {
        if (!$(event.target).closest('.marker-wrapper').length) {
            $('.marker-wrapper').removeClass('open');
        }
    });

    $(".blog-grid .col-sm-6").hide();
    $(".blog-grid .col-sm-6").slice(0, 9).show();
    $("#blog-load-more").on('click', function (e) {
        e.preventDefault();
        $(".blog-grid .col-sm-6:hidden").slice(0, 3).slideDown();
        if ($(".blog-grid .col-sm-6:hidden").length == 0) {
            $("#blog-load-more").fadeOut('slow');
        }
    });
    $(".products .col-sm-6").hide();
    $(".products .col-sm-6").slice(0, 8).show();
    $("#products-load-more").on('click', function (e) {
        e.preventDefault();
        $(".products .col-sm-6:hidden").slice(0, 2).slideDown();
        if ($(".products .col-sm-6:hidden").length == 0) {
            $("#products-load-more").fadeOut('slow');
        }
    });

    $('.selectpicker').on('loaded.bs.select', function (e) {
        $(".bootstrap-select ul").niceScroll({
            cursorcolor: '#646e7b',
            cursorborder: 'none',
            cursorborderradius: '0px',
            cursorwidth: '2px',
            autohidemode: false
        });
    });

    $(".fullscreen-section>.right>.inner").niceScroll({
        cursorcolor: '#646e7b',
        cursorborder: 'none',
        cursorborderradius: '0px',
        cursorwidth: '6px',
        autohidemode: false,
        mousescrollstep: 60
    });

})(jQuery);