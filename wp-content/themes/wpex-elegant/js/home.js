jQuery(function ($) {
    $(document).ready(function () {

        // Close the menu on window change
        $(window).resize(function () {

        });

        //Prettyphoto - for desktops only
        if ($(window).width() > 767) {

            // PrettyPhoto Without gallery


            //PrettyPhoto With Gallery

        }

        //-> Wistia player
        resize();

    }); // End doc ready
    $(window).load(function () {
        // Homepage FlexSlider

    }); // End on window load
});


function resize() {

    /*
     +===================================+
     | Home Top Video Wistia             |
     +===================================+
     */
    var wistiaEmbed = document.getElementById("wistia_embed").wistiaApi;
    var options = {
        ratio: 16 / 9, // usually either 4/3 or 16/9 -- tweak as needed
        width: $(window).width(),
        height: 557
    };

    //-> When screen aspect ratio differs from video, video must center and underlay one dimension
    if (options.width / options.ratio < options.height) {
        // if new video height < window height (gap underneath)
        pWidth = Math.ceil(options.height * options.ratio); // get new player width
        wistiaEmbed.height(options.height);
        wistiaEmbed.width(pWidth);
        jQuery("#wistia_embed").css({left: (options.width - pWidth) / 2, top: 0});//-> // player width is greater, offset left; reset top
    } else {
        // new video width < window width (gap to right)
        pHeight = Math.ceil(options.width / options.ratio); // get new player height
        wistiaEmbed.height(options.width);
        wistiaEmbed.width(pHeight);
        jQuery("#wistia_embed").css({left: 0, top: (height - pHeight) / 2}); //-> player height is greater, offset top; reset left
    }
}
