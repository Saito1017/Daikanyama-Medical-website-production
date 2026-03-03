!(function($) {
    "use strict";

    let vh = window.innerHeight * 0.01;
    let vw = window.innerWidth * 0.01;
    console.log(window.innerWidth);
    document.documentElement.style.setProperty('--vh', `${vh}px`);
    document.documentElement.style.setProperty('--vw', `${vw}px`);

    // Back to top button
    $(window).scroll(function() {
        if ($(this).scrollTop() > 150) {
            $('.back-to-top').fadeIn('slow');
        } else {
            $('.back-to-top').fadeOut('slow');
        }
    });

    $('.back-to-top').click(function() {
        $('html, body').animate({
            scrollTop: 0
        }, 1000);
        return false;
    });

    // Toggle .header-scrolled
    $(window).scroll(function() {
        if ($(this).scrollTop() > 100) {
            $('#header').addClass('header-scrolled');
            $('#mobile-header').addClass('header-scrolled');
        } else {
            $('#header').removeClass('header-scrolled');
            $('#mobile-header').removeClass('header-scrolled');
        }
    });

    if ($(window).scrollTop() > 100) {
        $('#header').addClass('header-scrolled');
        $('#mobile-header').addClass('header-scrolled');
    }


    // Smooth scroll for the navigation menu and links with .scrollto classes
    var scrolltoOffset = $('#header').outerHeight();
    if (window.matchMedia("(max-width: 768px)").matches) {
        var scrolltoOffset = $('#mobile-header').outerHeight();
    }

    $(document).on('click', 'a.link, .scrollto, a.menu-link, a.link-btn', function(e) {

        if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
            var target = $(this.hash);
            if (target.length) {
                e.preventDefault();

                var scrollto = target.offset().top - scrolltoOffset;

                if ($(this).attr("href") == '#header') {
                    scrollto = 0;
                }

                if ($(this).hasClass('menu-link')) {
                    $('.nav-menu .menu-link, .mobile-nav-menu .menu-link').removeClass('active');
                    $(this).addClass('active');
                }

                $('html, body').animate({
                    scrollTop: scrollto
                }, 1000);

                if ($(this).parents('.nav-menu, .mobile-nav-menu').length) {
                    $('.nav-menu .active, .mobile-nav-menu .active').removeClass('active');
                    $(this).closest('li').addClass('active');
                }

                if ($('body').hasClass('mobile-nav-active')) {
                    $('body').removeClass('mobile-nav-active');
                    $('.mobile-nav-toggle').toggleClass('toggle-active');
                    $('.mobile-nav-overly').fadeOut();
                }

                return false;
            }
        }
    });

    // Activate smooth scroll on page load with hash links in the url
    $(document).ready(function() {
        if (window.location.hash) {
            var initial_nav = window.location.hash;
            if ($(initial_nav).length) {
                var scrollto = $(initial_nav).offset().top - scrolltoOffset;
                $('html, body').animate({
                    scrollTop: scrollto
                }, 1000);
            }
        }
    });

    // Mobile Navigation
    $('body').prepend('<button type="button" class="mobile-nav-toggle"><span class="toggle-icon"><span></span><span></span><span></span></span></button>');
    $('body').append('<div class="mobile-nav-overly"></div>');

    $(document).on('click', '.mobile-nav-toggle', function(e) {
        $('body').toggleClass('mobile-nav-active');
        $('.mobile-nav-toggle').toggleClass('toggle-active');
        $('.mobile-nav-overly').toggle();
    });

    $(document).on('click', '.mobile-nav-menu .drop-down > a', function(e) {
        e.preventDefault();
        $(this).next().slideToggle(300);
        $(this).parent().toggleClass('active');
    });

    $(document).click(function(e) {
        var container = $("#mobile-nav, .mobile-nav-toggle");
        if (!container.is(e.target) && container.has(e.target).length === 0) {
            if ($('body').hasClass('mobile-nav-active')) {
                $('body').removeClass('mobile-nav-active');
                $('.mobile-nav-toggle').toggleClass('toggle-active');
                $('.mobile-nav-overly').fadeOut();
            }
        }
    });

    // Initialize venobox
    $(document).ready(function() {
        $('.venobox').venobox();
    });

    //video play
    $(document).on('click', '.intro_video_div', function(e) {
        if ($(this).find('.video').get(0).paused) {
            $(this).find('.video').trigger("play");
            $(this).toggleClass("active");
        } else {
            $(this).find('.video').trigger("pause");
            $(this).removeClass("active");
        }
    });

    // accordion jquery
    $(document).on('click', '.accordion-item .item-head', function(e) {
        var content = $(this).next();
        $(this).parent().toggleClass('expanded');
        content.slideToggle(400);
    });

    // show / hide jquery
    $(document).on('click', '.list-viewer .more-link', function(e) {
        var list = $(this).closest('.list-viewer').find('.method-list');
        var items = list.find('li:gt(1)');
        var isExpanded = list.hasClass('expanded');

        if (isExpanded) {
            // Hide items 3+
            items.slideUp(400);
            list.removeClass('expanded');
            $(this).text('すべて表示する');
        } else {
            // Show items 3+
            items.slideDown(400);
            list.addClass('expanded');
            $(this).text('一部のみ表示する');
        }
    });

    // faq-item jquery
    $(document).on('click', '.faq-item .question', function(e) {
        var answer = $(this).next();
        $(this).toggleClass('expanded');
        answer.slideToggle(400);
    });
    // faq-item jquery
    $(document).on('click', '.course-item .lead', function(e) {
        var answer = $(this).next();
        $(this).toggleClass('expanded');
        answer.slideToggle(400);
    });

    if ($('.scroller').length) {
        new ScrollHint('.scroller', {
            suggestiveShadow: true,
            remainingTime: 5000,
            i18n: {
                scrollable: 'スクロールできます',
            },
        });
    }

})(jQuery);