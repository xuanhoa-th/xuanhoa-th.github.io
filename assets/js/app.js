(function ($) {
    "use strict";

    /*-------------------------------------
    Carousel Slider Initiation
    -------------------------------------*/
    $(".rc-carousel").each(function () {
        var carousel = $(this),
            loop = carousel.data("loop"),
            Canimate = carousel.data("animate"),
            items = carousel.data("items"),
            margin = carousel.data("margin"),
            stagePadding = carousel.data("stage-padding"),
            autoplay = carousel.data("autoplay"),
            autoplayTimeout = carousel.data("autoplay-timeout"),
            smartSpeed = carousel.data("smart-speed"),
            dots = carousel.data("dots"),
            nav = carousel.data("nav"),
            navSpeed = carousel.data("nav-speed"),
            rXsmall = carousel.data("r-x-small"),
            rXsmallNav = carousel.data("r-x-small-nav"),
            rXsmallDots = carousel.data("r-x-small-dots"),
            rXmedium = carousel.data("r-x-medium"),
            rXmediumNav = carousel.data("r-x-medium-nav"),
            rXmediumDots = carousel.data("r-x-medium-dots"),
            rSmall = carousel.data("r-small"),
            rSmallNav = carousel.data("r-small-nav"),
            rSmallDots = carousel.data("r-small-dots"),
            rMedium = carousel.data("r-medium"),
            rMediumNav = carousel.data("r-medium-nav"),
            rMediumDots = carousel.data("r-medium-dots"),
            rLarge = carousel.data("r-large"),
            rLargeNav = carousel.data("r-large-nav"),
            rLargeDots = carousel.data("r-large-dots"),
            rExtraLarge = carousel.data("r-extra-large"),
            rExtraLargeNav = carousel.data("r-extra-large-nav"),
            rExtraLargeDots = carousel.data("r-extra-large-dots"),
            center = carousel.data("center"),
            custom_nav = carousel.data("custom-nav") || "";
        carousel.addClass('owl-carousel');
        var owl = carousel.owlCarousel({
            loop: loop ? true : false,
            animateOut: Canimate,
            items: items ? items : 1,
            lazyLoad: true,
            rtl: true,
            margin: margin ? margin : 0,
            autoplay: autoplay ? true : false,
            autoplayTimeout: autoplayTimeout ? autoplayTimeout : 1000,
            smartSpeed: smartSpeed ? smartSpeed : 250,
            dots: dots ? true : false,
            nav: nav ? true : false,
            navText: [
                '<i class="fa fa-angle-left" aria-hidden="true"></i>',
                '<i class="fa fa-angle-right" aria-hidden="true"></i>'
            ],
            navSpeed: navSpeed ? true : false,
            center: center ? true : false,
            responsiveClass: true,
            responsive: {
                0: {
                    items: rXsmall ? rXsmall : 1,
                    nav: rXsmallNav ? true : false,
                    dots: rXsmallDots ? true : false
                },
                576: {
                    items: rXmedium ? rXmedium : 2,
                    nav: rXmediumNav ? true : false,
                    dots: rXmediumDots ? true : false
                },
                768: {
                    items: rSmall ? rSmall : 3,
                    nav: rSmallNav ? true : false,
                    dots: rSmallDots ? true : false
                },
                992: {
                    items: rMedium ? rMedium : 4,
                    nav: rMediumNav ? true : false,
                    dots: rMediumDots ? true : false
                },
                1200: {
                    items: rLarge ? rLarge : 5,
                    nav: rLargeNav ? true : false,
                    dots: rLargeDots ? true : false
                },
                1240: {
                    items: rExtraLarge ? rExtraLarge : 5,
                    nav: rExtraLargeNav ? true : false,
                    dots: rExtraLargeDots ? true : false
                }
            },
        });

        if (custom_nav) {
            var nav = $(custom_nav),
                nav_next = $(".rt-next", nav),
                nav_prev = $(".rt-prev", nav);

            nav_next.on("click", function (e) {
                e.preventDefault();
                owl.trigger('next.owl.carousel');
                return false;
            });

            nav_prev.on("click", function (e) {
                e.preventDefault();
                owl.trigger('prev.owl.carousel');
                return false;
            });
        }
    });

    /*-------------------------------------
    MeanMenu Activation Code
    --------------------------------------*/
    if ($.fn.meanmenu) {
        $('nav#dropdown').meanmenu({
            siteLogo: "<div class='mobile-menu-nav-back'><a class='logo-mobile' href='index.html'><img src='media/logo-mobile.png' alt='logo' class='img-fluid'/></a></div>"
        });
    }

    /*-------------------------------------
    One PageNav Activation Code
    --------------------------------------*/
    if ($.fn.onePageNav !== undefined) {
        $('#onepage_nav').onePageNav({
            currentClass: 'current',
            changeHash: true,
            scrollSpeed: 750,
            scrollThreshold: 0,
            filter: '',
            easing: 'swing',
            end: function () {
                $('.meanclose').trigger('click');
            }
        });
    }

    /*-------------------------------------
       Sidebar Toggle 
    -------------------------------------*/
    $('#btn-toggle').on('click',function () {
        $("body").toggleClass("close-sidebar");
    });

    /*-------------------------------------
       Youtube Video
    -------------------------------------*/
    if ($.fn.YTPlayer !== undefined) {
        $('.youtube-video').each(function () {
            var self = $(this),
                videoId = self.data("video-id");
            self.YTPlayer({
                mute: false,
                fitToBackground: true,
                videoId: videoId,
                playerVars: {
                    modestbranding: 0,
                    autoplay: 1,
                    controls: 0,
                    showinfo: 0,
                    branding: 0,
                    frameborder: 0,
                    loop: 1,
                    rel: 0,
                    autohide: 0,
                    start: 1,
                    height: 1,
                }
            });
        })
    }

    /*=========================================================================
    wow Settings
    =========================================================================*/
    var wow = new WOW({
        mobile: false,
        offset: 0
    });
    wow.init();

    /*---------------------------------------
    Background Parallax
    --------------------------------------- */
    if ($('.parallaxie').length) {
        $(".parallaxie").parallaxie({
            speed: 0.5,
            offset: 0,
        });
    }

    /*-------------------------------------
    After Load All Content Add a Class In Body
    -------------------------------------*/
    $(window).on('load', addNewClass);

    function addNewClass() {
        $('body').imagesLoaded().done(function (instance) {
            $('body').addClass('loaded');
        });
    }

    /*-------------------------------------
    Intersection Observer
    -------------------------------------*/
    if (!!window.IntersectionObserver) {
        let observer = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add("active-animation");
                    //entry.target.src = entry.target.dataset.src;
                    observer.unobserve(entry.target);
                }
            });
        }, {
            rootMargin: "0px 0px -150px 0px"
        });
        document.querySelectorAll('.has-animation').forEach(block => {
            observer.observe(block)
        });
    } else {
        document.querySelectorAll('.has-animation').forEach(block => {
            block.classList.remove('has-animation')
        });
    }

    /*-------------------------------------
    Contact Form initiating
    -------------------------------------*/
    var contactForm = $('#contact-form');
    if (contactForm.length) {
        contactForm.validator().on('submit', function (e) {
            var $this = $(this),
                $target = contactForm.find('.form-response');
            if (e.isDefaultPrevented()) {
                $target.html("<div class='alert alert-success'><p>Please select all required field.</p></div>");
            } else {
                $.ajax({
                    url: "php/mailer.php",
                    type: "POST",
                    data: contactForm.serialize(),
                    beforeSend: function () {
                        $target.html("<div class='alert alert-info'><p>Loading ...</p></div>");
                    },
                    success: function (text) {
                        if (text === "success") {
                            $this[0].reset();
                            $target.html("<div class='alert alert-success'><p>Message has been sent successfully.</p></div>");
                        } else {
                            $target.html("<div class='alert alert-success'><p>" + text + "</p></div>");
                        }
                    }
                });
                return false;
            }
        });
    }

    /*-------------------------------------
    Section background image
    -------------------------------------*/
    $("[data-bg-image]").each(function () {
        var img = $(this).data("bg-image");
        $(this).css({
            backgroundImage: "url(" + img + ")"
        });
    });

    /*---------------------------------------
    On Click Section Switch
    --------------------------------------- */
    $('[data-type="section-switch"]').on('click', function () {
        if (location.pathname.replace(/^\//, '') === this.pathname.replace(/^\//, '') && location.hostname === this.hostname) {
            var target = $(this.hash);
            if (target.length > 0) {

                target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                $('html,body').animate({
                    scrollTop: target.offset().top
                }, 1000);
                return false;
            }
        }
    });

    /*-------------------------------------
    On Scroll
    -------------------------------------*/
    $(window).on('scroll', function () {

        // Sticky Menu
        if ($('header').hasClass('sticky-header')) {
            var stickyPlaceHolder = $("#sticky-placeholder"),
                menu = $("#navbar-wrap"),
                menuH = menu.outerHeight(),
                topbarH = $('#topbar-wrap').outerHeight() || 0,
                targrtScroll = 0,
                header = $("header");
            if ($(window).scrollTop() > targrtScroll) {
                header.addClass('sticky');
            } else {
                header.removeClass('sticky');
            }
        }
    });

    /*-------------------------------------
     Gallery Popup
    -------------------------------------*/
    if ($('.zoom-gallery').length) {
        $('.zoom-gallery').each(function () {
            $(this).magnificPopup({
                delegate: 'a.popup-zoom',
                type: 'image',
                gallery: {
                    enabled: true
                }
            });
        });
    }

    /*--------------------------------------
    Isotope initialization
    --------------------------------------*/
    var $container = $(".isotope-wrap");
    if ($container.length > 0) {

        function createGalleryPopup(selector) {
            selector = selector || '';
            $('.featuredContainer').magnificPopup({
                delegate: selector + ' a.popup-zoom',
                type: 'image',
                gallery: {
                    enabled: true
                }
            });
        }

        var $isotope;
        var blogGallerIso = $(".featuredContainer", $container).imagesLoaded(function () {
            var selectero = $container.find('.isotope-classes-tab .nav-item:first-child').data('filter') || '*';

            $isotope = $(".featuredContainer", $container).isotope({
                filter: selectero,
                transitionDuration: "1s",
                hiddenStyle: {
                    opacity: 0,
                    transform: "scale(0.001)"
                },
                visibleStyle: {
                    transform: "scale(1)",
                    opacity: 1
                }
            });

            createGalleryPopup(selectero);
        });

        $container.find(".isotope-classes-tab").on("click", "a", function () {
            var $this = $(this);
            $this
                .parent(".isotope-classes-tab")
                .find("a")
                .removeClass("current");
            $this.addClass("current");
            var selector = $this.attr("data-filter");
            $isotope.isotope({
                filter: selector
            });
            createGalleryPopup(selector);
            return false;
        });
    }   

    /*-------------------------------------
    Counter
    -------------------------------------*/
    var counterContainer = $('.counter');
    if (counterContainer.length) {
        counterContainer.counterUp({
            delay: 50,
            time: 2000
        });
    }
   
})(jQuery);