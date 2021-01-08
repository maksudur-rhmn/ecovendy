$(function () {

    "use strict";

    // Menufix

    var navoff = $(".main_menu").offset().top;

    $(window).scroll(function () {
        var scrolling = $(this).scrollTop();

        if (scrolling > navoff) {
            $(".main_menu").addClass("menu_fix");
        } else {
            $(".main_menu").removeClass("menu_fix");
        }
    });

    // Smooth Scroll

    $('a[href*="#"]')
        .not('[href="#"]')
        .not('[href="#0"]')
        .click(function (event) {
            if (
                location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') &&
                location.hostname == this.hostname
            ) {
                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                if (target.length) {
                    event.preventDefault();
                    $('html, body').animate({
                        scrollTop: target.offset().top
                    }, 1000, function () {
                        var $target = $(target);
                        $target.focus();
                        if ($target.is(":focus")) {
                            return false;
                        } else {
                            $target.attr('tabindex', '-1');
                            $target.focus();
                        };
                    });
                }
            }
        });


    // Clients slider

    $('.clients_slider').slick({
        dots: false,
        arrows: false,
        autoplay: true,
        infinite: true,
        nav: false,
        speed: 1000,
        autoplaySpeed: 800,
        slidesToShow: 5,
        slidesToScroll: 1,
        responsive: [
            {
                breakpoint: 992,
                settings: {
                    slidesToShow: 3,
                }
    },
            {
                breakpoint: 576,
                settings: {
                    slidesToShow: 2,
                }
    }

  ]
    });



    // scroll top 

    $(".scroll_top").on('click', function () {
        $("html,body").animate({
            scrollTop: 0,
        }, 800);
    });
    $(window).on('scroll', function () {
        var scrolling = $(this).scrollTop();

        if (scrolling > 200) {
            $(".scroll_top").fadeIn();
        } else {
            $(".scroll_top").fadeOut();
        }
    });

    // Closes responsive menu when a scroll link is clicked

    $('.nav-link').on('click', function () {
        $('.navbar-collapse').collapse('hide');
    });

     // counter

    $('.count').counterUp({
        delay: 30,
        time: 3000,
    });
    
    // Wow js

    new WOW().init();

    //mixit up
    var mixer = mixitup('.gallery');


    //Fact Counter + Text Count

    if ($('.count-box').length) {

        $('.count-box').appear(function () {
            var $t = $(this),

                n = $t.find(".count-text").attr("data-stop"),

                r = parseInt($t.find(".count-text").attr("data-speed"), 10);

            if (!$t.hasClass("counted")) {
                $t.addClass("counted");
                $({
                    countNum: $t.find(".count-text").text()
                }).animate({
                    countNum: n
                }, {
                    duration: r,
                    easing: "linear",
                    step: function () {
                        $t.find(".count-text").text(Math.floor(this.countNum));
                    },
                    complete: function () {
                        $t.find(".count-text").text(this.countNum);
                    }
                });
            }

        }, {
            accY: 0
        });

    }

});
