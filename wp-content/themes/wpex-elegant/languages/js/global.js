jQuery(function ($) {

    $(document).ready(function () {

        // Main menu superfish
        $('ul.sf-menu').superfish({
            delay: 200,
            animation: {opacity: 'show', height: 'show'},
            speed: 'fast',
            cssArrows: false,
            disableHI: true
        });

        // Mobile Menu
        $('#navigation-toggle').sidr({
            name: 'sidr-main',
            source: '#sidr-close, #site-navigation, #mobile-search',
            side: 'left'
        });
        $(".sidr-class-toggle-sidr-close").click(function () {
            $.sidr('close', 'sidr-main');
            return false;
        });

        // Close the menu on window change
        $(window).resize(function () {
            $.sidr('close', 'sidr-main');
            fotoBG();
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

    }); // End doc ready

    $(window).load(function () {
        // Homepage FlexSlider
        $('#homepage-slider').flexslider({
            animation: 'slide',
            slideshow: true,
            smoothHeight: true,
            controlNav: false,
            directionNav: true,
            prevText: '<span class="fa fa-angle-left"></span>',
            nextText: '<span class="fa fa-angle-right"></span>',
            controlsContainer: ".flexslider-container"
        });
        // Post FlexSlider
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
        fotoBG();
    }); // End on window load

});


function fotoBG() {

    var max_height = jQuery("body.home .row .col-md-4.left-column").height();
    jQuery("body.home .row .col-md-8.right-column").height(max_height);


    if (jQuery(window).width() > 960) {
        jQuery("body.home .right-column img").css("display", "block");
        jQuery("body.home").css("background-image", "");
    } else {
        jQuery("body.home .right-column img").css("display", "none");
        var body_bg = jQuery("body.home").attr("background-image");
        jQuery("body.home").css("background-image", body_bg);
    }
    
    var height = jQuery(window).height() ;
    if(height > max_height){
        jQuery("body.home .row .col-md-4.left-column").height(height);
    }else{
         jQuery("body.home .row .col-md-4.left-column").css("height", "100%");
    }

    /**** Height *****/
    /*var height = jQuery("body.home .content-left").height();
     var img_height = jQuery("body.home .right-column img").height();
     if (img_height < height) {
     jQuery("body.home .right-column img").css("display", "none");
     } else {
     jQuery("body.home .right-column img").css("display", "block");
     }*/
    /**** End Height *****/
}