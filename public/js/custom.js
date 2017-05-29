jQuery(document).ready(function($) {
    'use strict';
    var $emptyLink = $('a[href=#]');
    $emptyLink.on('click', function(e) {
        e.preventDefault();
    });
    $(window).load(function() {
        $('.body-wrapper').each(function() {
            var header_area = $('.header-wrapper');
            var main_area = header_area.children('.header');
            var logo = main_area.find('.navbar-header');
            var navigation = main_area.find('.navbar-collapse');
            var original = {
                nav_top: navigation.css('margin-top')
            };
            $(window).scroll(function() {
                if (main_area.hasClass('bb-fixed-header') && ($(this).scrollTop() === 0 || $(this).width() < 750)) {
                    main_area.removeClass('bb-fixed-header').appendTo(header_area);
                    navigation.animate({
                        'margin-top': original.nav_top
                    }, {
                        duration: 300,
                        queue: false,
                        complete: function() {
                            header_area.css('height', 'auto');
                        }
                    });
                } else if (!main_area.hasClass('bb-fixed-header') && $(this).width() > 750 && $(this).scrollTop() > header_area.offset().top + header_area.height() - parseInt($('html').css('margin-top'), 10)) {
                    header_area.css('height', header_area.height());
                    main_area.css({
                        'opacity': '0'
                    }).addClass('bb-fixed-header');
                    main_area.appendTo($('body')).animate({
                        'opacity': 1
                    });
                    navigation.css({
                        'margin-top': '0px'
                    });
                }
            });
        });
        $(window).trigger('resize');
        $(window).trigger('scroll');
    });
    $('.navbar a.dropdown-toggle').on('click', function(e) {
        var elmnt = $(this).parent().parent();
        if (!elmnt.hasClass('nav')) {
            var li = $(this).parent();
            var heightParent = parseInt(elmnt.css('height').replace('px', ''), 10) / 2;
            var widthParent = parseInt(elmnt.css('width').replace('px', ''), 10) - 10;
            if (!li.hasClass('open')) {
                li.addClass('open');
            } else {
                li.removeClass('open');
            }
            $(this).next().css('top', heightParent + 'px');
            $(this).next().css('left', widthParent + 'px');
            return false;
        }
    });
    $('.top-search a').on('click', function() {
        $('.top-search .dropdown-menu').toggleClass('display-block');
        $('.top-search a i').toggleClass('fa-close').toggleClass('fa-search');
    });
    $('.banner').carousel({
        interval: 5000
    });
    jQuery('.bannerV2 .fullscreenbanner').revolution({
        delay: 5000,
        startwidth: 1170,
        startheight: 650,
        fullWidth: 'on',
        fullScreen: 'on',
        hideCaptionAtLimit: '',
        dottedOverlay: 'none',
        navigationStyle: 'preview4',
        fullScreenOffsetContainer: '',
        hideTimerBar: 'on'
    });
    jQuery('.bannerV3 .fullscreenbanner').revolution({
        delay: 5000,
        startwidth: 1170,
        startheight: 660,
        fullWidth: 'on',
        fullScreen: 'off',
        hideCaptionAtLimit: '',
        dottedOverlay: 'none',
        navigationStyle: 'preview4',
        fullScreenOffsetContainer: '',
        hideTimerBar: 'on'
    });
    jQuery('#about_banner').flexslider({
        animation: 'slide',
        controlNav: true,
        animationSpeed: 600,
        slideshowSpeed: 5000,
        easing: 'swing',
        directionNav: true,
        prevText: '',
        nextText: '',
        pauseOnAction: false,
        touch: true,
        start: function() {
            jQuery('.flex-active-slide .about_caption').addClass('show');
        },
        before: function() {
            jQuery('.flex-active-slide .about_caption').removeClass('show');
        },
        after: function(slider) {
            jQuery('.flex-active-slide .about_caption').addClass('show');
        }
    });
    jQuery('#single_banner').flexslider({
        animation: 'slide',
        controlNav: true,
        animationSpeed: 600,
        slideshowSpeed: 5000,
        easing: 'swing',
        directionNav: false,
        prevText: '',
        nextText: '',
        pauseOnAction: false,
        touch: true
    });
    if (document.documentElement.clientWidth < 992) {
        jQuery('.carousal_section').flexslider({
            animation: 'slide',
            controlNav: true,
            animationSpeed: 600,
            slideshowSpeed: 5000,
            easing: 'swing',
            directionNav: false,
            prevText: '',
            nextText: '',
            pauseOnAction: false,
            touch: true,
            minItems: 1,
            maxItems: 1,
            move: 1,
            animationLoop: true,
            direction: 'horizontal',
            reverse: false
        });
    }
    jQuery('.carousal_section').flexslider({
        animation: 'slide',
        controlNav: true,
        animationSpeed: 600,
        slideshowSpeed: 5000,
        easing: 'swing',
        directionNav: false,
        prevText: '',
        nextText: '',
        pauseOnAction: false,
        touch: true,
        itemWidth: 475,
        minItems: 1,
        maxItems: 2,
        move: 1,
        animationLoop: true,
        direction: 'horizontal',
        reverse: false
    });
    (function() {
        var $window = $(window),
            flexslider = {
                vars: {}
            };

        function getGridSize() {
            return (window.innerWidth < 600) ? 2 : (window.innerWidth < 800) ? 3 : (window.innerWidth < 900) ? 4 : 5;
        }
        $window.load(function() {
            $('.flexslider').flexslider({
                animation: 'slide',
                animationLoop: false,
                itemWidth: 228,
                itemMargin: 0,
                prevText: '',
                nextText: '',
                minItems: getGridSize(),
                maxItems: getGridSize()
            });
        });
        $window.resize(function() {
            var gridSize = getGridSize();
            flexslider.vars.minItems = gridSize;
            flexslider.vars.maxItems = gridSize;
        });
    }());
    var owl = $('.owl-carousel.success-inner');
    owl.owlCarousel({
        loop: true,
        margin: 0,
        autoplay: true,
        autoplayTimeout: 4000,
        autoplayHoverPause: true,
        nav: false,
        moveSlides: 1,
        dots: true,
        smartSpeed: 1000,
        responsive: {
            320: {
                items: 1
            },
            768: {
                items: 1
            },
            992: {
                items: 1
            }
        }
    });
    var owl = $('.owl-carousel.banner-slider');
    owl.owlCarousel({
        loop: true,
        margin: 0,
        autoplay: true,
        autoplayTimeout: 2000,
        autoplayHoverPause: true,
        nav: false,
        moveSlides: 1,
        dots: false,
        smartSpeed: 1000,
        responsive: {
            320: {
                items: 1
            },
            768: {
                items: 1
            },
            992: {
                items: 1
            }
        }
    });
    var owl = $('.owl-carousel.bannerBottom-slider');
    owl.owlCarousel({
        loop: true,
        margin: 0,
        autoplay: false,
        nav: true,
        moveSlides: 1,
        dots: false,
        smartSpeed: 1000,
        responsive: {
            320: {
                items: 1
            },
            768: {
                items: 1
            },
            992: {
                items: 1
            }
        }
    });
    var owl = $('.owl-carousel.partnersLogoSlider');
    owl.owlCarousel({
        loop: true,
        margin: 28,
        autoplay: true,
        autoplayTimeout: 2000,
        autoplayHoverPause: true,
        nav: true,
        dots: false,
        smartSpeed: 500,
        responsive: {
            320: {
                slideBy: 1,
                items: 1
            },
            480: {
                slideBy: 1,
                items: 2
            },
            768: {
                slideBy: 1,
                items: 3
            },
            992: {
                slideBy: 1,
                items: 5
            }
        }
    });
    $('[data-toggle="tooltip"]').tooltip();
    $('#guiest_id1').selectbox();
    $('#guiest_id2').selectbox();
    $('#guiest_id3').selectbox();
    $('#guiest_id4').selectbox();
    $('#guiest_id5').selectbox();
    $('.option-select').selectbox();
    $('.popup-gallery').magnificPopup({
        delegate: 'a',
        type: 'image',
        tLoading: 'Loading image #%curr%...',
        mainClass: 'mfp-img-mobile',
        closeBtnInside: false,
        gallery: {
            enabled: true,
            navigateByImgClick: true,
            preload: [0, 1]
        },
        image: {
            tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',
            titleSrc: function(item) {
                return item.el.attr('title') + '';
            }
        }
    });
    var wow = new WOW();
    wow.init();
    jQuery(document).ready(function($) {
        $('span.timer').counterUp({
            delay: 5,
            time: 2000
        });
    });

    var formLogin = $("#formLogin");
    formLogin.submit(function(e) {
        e.preventDefault();
        var formData = formLogin.serialize();

        $.ajax({
            url: 'login',
            type: 'post',
            data: formData,
            success: function(data) {
                $('#loginModal').modal('hide');
                location.reload(true);
            },
            error: function(data) {
                console.log(data);
                var obj = $.parseJSON(data.responseText);

                if (obj.error) {
                    $('p#login-error').addClass('required').html(obj.error);
                }
            }
        });
    });
});
