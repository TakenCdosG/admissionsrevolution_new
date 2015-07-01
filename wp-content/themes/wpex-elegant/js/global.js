jQuery(function ($) {

    $(document).ready(function () {

        if ($("#post-78 #pmpro_level-5").length > 0) {
            $(".page-id-78 .page-header .page-header-title").hide();
        }

        if ($("#post-78 #pmpro_level-4").length > 0) {
            $(".page-id-78 .page-header .page-header-title").hide();
        }

        // Main menu superfish
        $('ul.sf-menu').superfish({
            delay: 200,
            animation: {opacity: 'show', height: 'show'},
            speed: 'fast',
            cssArrows: false,
            disableHI: true
        });

        // Mobile Menu

        if ($('#menu-toggler-link').length) {
            $('#menu-toggler-link').sidr({
                name: 'sidr-main',
                source: '#sidr-close, .page-sidebar-menu',
                side: 'right'
            });
        } else if ($('#navigation-toggle').length) {
            $('#navigation-toggle').sidr({
                name: 'sidr-main',
                source: '#sidr-close, .menu-main-menu-container',
                side: 'right'
            });
        }

        $(".sidr-class-toggle-sidr-close").click(function () {
            $.sidr('close', 'sidr-main');
            return false;
        });

        $("a.monthly_pricing").click(function () {
            $(this).addClass("pricing_active");
            $("a.yearly_pricing").removeClass("pricing_active");
            $("a.monthly_plans_link_starter").addClass("show");
            $("a.monthly_plans_link_premium").addClass("show");
            $("a.monthly_plans_link_starter").removeClass("hide");
            $("a.monthly_plans_link_premium").removeClass("hide");

            $("a.yearly_plans_link_starter").addClass("show");
            $("a.yearly_plans_link_premium").addClass("show");
            $("a.yearly_plans_link_starter").removeClass("hide");
            $("a.yearly_plans_link_premium").removeClass("hide");

            $("a.chinese_plans_link_starter").addClass("hide");
            $("a.chinese_plans_link_premium").addClass("hide");
            $("a.chinese_plans_link_starter").removeClass("show");
            $("a.chinese_plans_link_premium").removeClass("show");

            $(".symple-pricing-content-english").addClass("show");
            $(".symple-pricing-content-english").removeClass("hide");
            $(".symple-pricing-content-chinese").addClass("hide");
            $(".symple-pricing-content-chinese").removeClass("show");

            $(".symple-pricing-header.monthly_plans_link_starter_pricing_header").addClass("show");
            $(".symple-pricing-header.monthly_plans_link_premium_pricing_header").addClass("show");
            $(".symple-pricing-header.monthly_plans_link_starter_pricing_header").removeClass("hide");
            $(".symple-pricing-header.monthly_plans_link_premium_pricing_header").removeClass("hide");

            $(".symple-pricing-header.yearly_plans_link_premium_pricing_header").addClass("hide");
            $(".symple-pricing-header.yearly_plans_link_starter_pricing_header").addClass("hide");
            $(".symple-pricing-header.yearly_plans_link_premium_pricing_header").removeClass("show");
            $(".symple-pricing-header.yearly_plans_link_starter_pricing_header").removeClass("show");
        });

        $("a.yearly_pricing").click(function () {
            $(this).addClass("pricing_active");
            $("a.monthly_pricing").removeClass("pricing_active");
            $("a.monthly_plans_link_starter").addClass("hide");
            $("a.monthly_plans_link_premium").addClass("hide");
            $("a.monthly_plans_link_starter").removeClass("show");
            $("a.monthly_plans_link_premium").removeClass("show");

            $("a.yearly_plans_link_starter").addClass("hide");
            $("a.yearly_plans_link_premium").addClass("hide");
            $("a.yearly_plans_link_starter").removeClass("show");
            $("a.yearly_plans_link_premium").removeClass("show");

            $("a.chinese_plans_link_starter").addClass("show");
            $("a.chinese_plans_link_premium").addClass("show");
            $("a.chinese_plans_link_starter").removeClass("hide");
            $("a.chinese_plans_link_premium").removeClass("hide");

            $(".symple-pricing-content-english").addClass("hide");
            $(".symple-pricing-content-english").removeClass("show");
            $(".symple-pricing-content-chinese").addClass("show");
            $(".symple-pricing-content-chinese").removeClass("hide");

            $(".symple-pricing-header.monthly_plans_link_starter_pricing_header").addClass("hide");
            $(".symple-pricing-header.monthly_plans_link_premium_pricing_header").addClass("hide");
            $(".symple-pricing-header.monthly_plans_link_starter_pricing_header").removeClass("show");
            $(".symple-pricing-header.monthly_plans_link_premium_pricing_header").removeClass("show");

            $(".symple-pricing-header.yearly_plans_link_premium_pricing_header").addClass("show");
            $(".symple-pricing-header.yearly_plans_link_starter_pricing_header").addClass("show");
            $(".symple-pricing-header.yearly_plans_link_premium_pricing_header").removeClass("hide");
            $(".symple-pricing-header.yearly_plans_link_starter_pricing_header").removeClass("hide");
        });

        // Close the menu on window change
        $(window).resize(function () {
            $.sidr('close', 'sidr-main');
            fotoBG();
            resize();
        });


        //Prettyphoto - for desktops only
        if ($(window).width() > 767) {

            // PrettyPhoto Without gallery
            $(".wpex-lightbox").prettyPhoto({
                show_title: false,
                social_tools: false,
                slideshow: false,
                autoplay_slideshow: false,
                wmode: 'opaque'
            });

            //PrettyPhoto With Gallery
            $("a[rel^='wpexLightboxGallery']").prettyPhoto({
                show_title: false,
                social_tools: false,
                autoplay_slideshow: false,
                overlay_gallery: true,
                wmode: 'opaque'

            });

        }

        // Fixed Header
        //$("#header-wrap.fixed-header").sticky({topSpacing:0});
        $(".js-rotating").Morphext({
            // The [in] animation type. Refer to Animate.css for a list of available animations.
            animation: "bounceIn",
            // An array of phrases to rotate are created based on this separator. Change it if you wish to separate the phrases differently (e.g. So Simple | Very Doge | Much Wow | Such Cool).
            separator: ",",
            // The delay between the changing of each phrase in milliseconds.
            speed: 2000
        });

        $(".js-rotating-line").Morphext({
            // The [in] animation type. Refer to Animate.css for a list of available animations.
            animation: "bounceIn",
            // An array of phrases to rotate are created based on this separator. Change it if you wish to separate the phrases differently (e.g. So Simple | Very Doge | Much Wow | Such Cool).
            separator: "|",
            // The delay between the changing of each phrase in milliseconds.
            speed: 4000
        });
        $(".js-rotating-images").Morphext({
            // The [in] animation type. Refer to Animate.css for a list of available animations.
            animation: "fadein",
            // An array of phrases to rotate are created based on this separator. Change it if you wish to separate the phrases differently (e.g. So Simple | Very Doge | Much Wow | Such Cool).
            separator: ",",
            // The delay between the changing of each phrase in milliseconds.
            speed: 3000
        });
    }); // End doc ready

    $(window).load(function () {

        //-> Homepage FlexSlider
        $('#homepage-slider').flexslider({
            animation: 'slide',
            slideshow: true,
            smoothHeight: true,
            controlNav: false,
            directionNav: true,
            prevText: '<span class="fa fa-angle-left"></span>',
            nextText: '<span class="fa fa-angle-right"></span>',
            controlsContainer: ".flsexslider-container"
        });

        //-> Post FlexSlider
        $('div.post-slider').flexslider({
            animation: 'slide',
            slideshow: true,
            smoothHeight: true,
            controlNav: false,
            directionNav: true,
            prevText: '<span class="fa fa-angle-left"></span>',
            nextText: '<span class="fa fa-angle-right"></span>',
            controlsContainer: ".flexslider-container"
        });

        /* */
        var home_url = WPURLS.siteurl;
        //console.log("-> Home Url: " + home_url);
        var arrow = '<img src="' + home_url + '/wp-content/themes/wpex-elegant/assets/global/img/arrow-current.png" alt="" class="arrow-current" style="">';
        var arrow_line = '<div class="arrow_line" style="width: 5000px; margin: auto;position: absolute; /*left:63px;*/ left: 40%; top:36px; z-index: 99;"></div>';

        $('ul.menu_dashboard > li.current-menu-item').append(arrow);
        $('ul.menu_dashboard > li.current-menu-item').append(arrow_line);

        $('ul.menu_dashboard > li.current-page-ancestor').append(arrow);
        $('ul.menu_dashboard > li.current-page-ancestor').append(arrow_line);

        fotoBG();
        resize();

    }); // End on window load

});


function fotoBG() {

    var body_bg = jQuery("body.home #home-content").attr("background-image");

    if (jQuery(window).width() > 960) {

        //var height = jQuery("td.td-content-left .content-left").height()+50;
        //jQuery("td.td-content-left").height(height);
        //jQuery("td.td-content-right").height(height);
        //jQuery("td.td-content-right .content-right").height(height);

        jQuery("body.home .content-right img").css("display", "block");
        jQuery("body.home #home-content").css("background-image", "");
        jQuery("body.home #home-content #td-content-right").css("background-image", body_bg);

    } else {

        //jQuery("td.td-content-left").css("height", "auto");
        //jQuery("td.td-content-right").css("height", "auto");
        //jQuery("td.td-content-right .content-right").css("height", "auto");

        jQuery("body.home .content-right img").css("display", "none");
        jQuery("body.home #home-content").css("background-image", body_bg);

    }

}


function resize() {

    /*
     +===================================+
     | Home Top Video Wistia             |
     +===================================+
     */

}
