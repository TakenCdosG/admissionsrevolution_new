<?php
/**
 * Template Name: About
 *
 * @package WordPress
 * @subpackage Elegant WPExplorer Theme
 * @since Elegant 1.0
 */
wp_enqueue_script('wistia-api-popover', 'http://fast.wistia.net/static/popover-v1.js', array(), false);
wp_enqueue_script('wpex-home', WPEX_JS_DIR_URI . '/home.js', array('jquery', 'wistia-api'), '1.7.5', true);
get_header();
?>

<div id="primary" class="content-area clr">
    <!-- #first-box content -->
    <div class="first-box">
        <?php $background_image_about = get_field('background_image_about'); ?>
        <?php $left_text_about = get_field('left_text_about'); ?>
        <table>
            <tbody>
                <tr>
                    <td class="features_background_top" style="background-image:url(<?php echo $background_image_about; ?>); background-repeat: no-repeat; background-position: right top; background-size: cover;">
                        <div class="content-feature-top">
                            <?php echo $left_text_about; ?>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
        <div class="arrow_line" style="margin: auto;position: absolute; width: 100%; z-index: 99;background-image: url(<?php echo get_template_directory_uri(); ?>/images/arro_line_get_informed.png); height: 20px;"></div>
    </div>
    <!-- #End first-box content -->
    <div class="clearfix"></div>
    <!-- #second-box content -->
    <div class="second-box">
        <?php $text_about = get_field('text_about'); ?>
        <?php $link_text_second_box_about = get_field('link_text_second_box_about'); ?>
        <?php $link_url_second_box_about = get_field('link_url_second_box_about'); ?>
        <div class='container'>
            <div class="row">
                <div class="col-md-12">
                    <?php echo $text_about; ?>
                    <p><a class="free-trial" href="<?php echo $link_url_second_box_about; ?>"><?php echo $link_text_second_box_about; ?></a></p>
                </div>
            </div>
        </div>
    </div>
    <!-- #End second-box content -->
    <div class="clearfix"></div>
    <!-- #third-box content -->
    <div class="third-box">
        <?php $content_left_third_box_about = get_field('content_left_third_box_about'); ?>
        <?php $content_middle_third_box_about = get_field('content_middle_third_box_about'); ?>
        <?php $content_right_third_box_about = get_field('content_right_third_box_about'); ?>

        <?php $link_text_third_box_about = get_field('link_text_third_box_about'); ?>
        <?php $link_url_third_box_about = get_field('link_url_third_box_about'); ?>

        <div class='container'>
            <div class="row init-row">
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12" style="border-right: 1px solid #a17c36;">
                    <div class="container-article">
                        <?php echo $content_left_third_box_about; ?>
                    </div>
                </div>  
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="container-article">
                        <?php echo $content_middle_third_box_about; ?>
                    </div>
                </div>         
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12" style="border-left: 1px solid #a17c36;">
                    <div class="container-article">
                        <?php echo $content_right_third_box_about; ?>
                    </div>
                </div> 
            </div>  
        </div>
        <div class="container-free-now-link">
            <a class="free-now-link" href="<?php echo $link_url_third_box_about; ?>"><?php echo $link_text_third_box_about; ?></a>
        </div>  
    </div>
    <!-- #End third-box content -->
    <div class="clearfix"></div>

    <!-- #fourth-box content -->
    <div class="fourth-box">
        <div class="arrow_line" style="margin: auto;position: absolute; width: 100%; z-index: 99;background-image: url(<?php echo get_template_directory_uri(); ?>/images/arro_line_get_informed.png); height: 20px;"></div>
        <?php $background_video = get_field('background_video_fourth_box_about'); ?>
        <?php $overlay_video = get_field('overlay_video_fourth_box_about'); ?>

        <?php $background_video_id = "wistia_" . $background_video; ?>
        <?php $overlay_video_id = "wistia_" . $overlay_video; ?>
        <div class="hello">
            <div id="video_container">
                <div id="text">
                    <a href="http://fast.wistia.net/embed/iframe/<?php echo $overlay_video; ?>?autoPlay=true&controlsVisibleOnLoad=false&playButton=false&playerColor=F36F36&popover=true&version=v1&videoHeight=360&videoWidth=640" class="wistia-popover[height=100%,playerColor=F36F36,width=100%]">
                        <div id="actions">
                            <div id="playbutton">
                                <div class="rectangle"></div>
                                <div class="triangle"></div>
                            </div>
                        </div>
                    </a>
                </div>
                <div id="cover_all"></div>
                <div id="main-image"></div>
                <div id="<?php echo $background_video_id; ?>" class="wistia_embed backgroundVideo" style="width:920px;height:518px;"></div>
                <div id="<?php echo $overlay_video_id; ?>" class="wistia_embed overlayVideo" style="width:1920px;height:1080px;"></div>
                <div id="ex"><img src="<?php echo get_template_directory_uri(); ?>/images/ex.svg" width="23" height="23" /></div>
            </div>
        </div>
        <div class="arrow_line" style="margin: auto;position: absolute; width: 100%; z-index: 99;background-image: url(<?php echo get_template_directory_uri(); ?>/images/arro_line_get_informed.png); height: 20px;"></div>
    </div>
    <!-- #End fourth-box content -->
    <div class="clearfix"></div>

    <!-- Begin About Video  -->
    <script type="text/javascript">

        var fullScreenVideo = fullScreenVideo || {};
        fullScreenVideo = {
            name: 'fullScreenVideo',
            /**
             * CHANGE THESE VARIABLES TO YOUR VIDEOS
             * overlayVideo: The video in the overlay
             * overlayVideoDiv: The jQuery selector of the div containing the overlay video
             * backgroundvideo: The video in the backgorund
             * backgroundideoDiv: The jQuery selector of the div containing the background video
             */

            overlayVideo: '<?php echo $overlay_video; ?>',
            overlayVideoDiv: '#<?php echo $overlay_video_id; ?>',
            backgroundvideo: '<?php echo $background_video; ?>',
            backgroundideoDiv: '#<?php echo $background_video_id; ?>',
            /**
             * This will call Wistia and embed the two videos
             * @param None
             */
            embedVideo: function ()
            {
                var wistiaEmbedVideoOptions = {volume: 0};
                var overlayEmbedVideoOptions = {};

                // Add the crop fill plugin to the videoOptions
                Wistia.obj.merge(wistiaEmbedVideoOptions, {
                    plugin: {
                        cropFill: {
                            //src: "//fast.wistia.com/labs/crop-fill/plugin.js"
                            src: "http://fast.wistia.com/labs/crop-fill/plugin.js"
                        }
                    }
                });

                // Video in the background
                wistiaEmbed = Wistia.embed(fullScreenVideo.backgroundvideo, wistiaEmbedVideoOptions);
                wistiaEmbed.time(34);
                wistiaEmbed.volume(0);
                wistiaEmbed.pause();
                // Video to be shown in the overlay
                //overlayEmbed = Wistia.embed(fullScreenVideo.overlayVideo, overlayEmbedVideoOptions);

                /**
                 * We load the thumbnail in the background while we wait
                 * for the video to load and play. Once loaded, we pause, reset to 
                 * frame zero, show the video then play it.
                 */
                wistiaEmbed.bind("play", function () {
                    wistiaEmbed.pause();
                    wistiaEmbed.time(34);
                    wistiaEmbed.volume(0);
                    jQuery(fullScreenVideo.backgroundideoDiv).css('visibility', 'visible');
                    wistiaEmbed.play();
                    return this.unbind;
                });
            },
            /**
             * Plays the video set as overlayEmbed
             * @param None
             */
            playVideo: function ()
            {
           
            },
            /**
             * Hide the overlay video and pause it. Also reshow 
             * the text on the page.
             * @param None
             */
            exitVideo: function ()
            {
                jQuery(fullScreenVideo.overlayVideoDiv).css("left", -3000).css("visibility", "hidden");
                jQuery("#ex").css("right", -3000);
                jQuery("#text").css({opacity: 1});
                overlayEmbed.pause();
                overlayEmbed._keyBindingsActive = false;
            },
            /**
             * Fix the size of the images and text on page
             * @param None
             */
            fixTextPosition: function ()
            {
                var width = jQuery(window).width();
                var height = jQuery(window).height() - jQuery("#header-wrap").height();
                textWidth = jQuery("#text").width();
                textHeight = jQuery("#text").height();
                jQuery("#video_container").css("width", width).css("height", height);
                jQuery("#main-image").css("width", width).css("height", height);
                jQuery("#text").css("left", (width / 2) - (textWidth / 2)).css("top", (height / 2) - (textHeight / 2));
            }

        }

        /**
         * When the doc is ready, fix the video and images sizes
         * then display the text on the page.
         */
        jQuery(document).ready(function () {
            fullScreenVideo.fixTextPosition();
            jQuery("#text").delay(200).animate({opacity: 1}, 650);
        });

        // If the widow is resized, resize the videos
        jQuery(window).resize(fullScreenVideo.fixTextPosition);

        // When the play button is clicked, call the play function
        //jQuery(".rectangle").click(fullScreenVideo.playVideo);

        // When the "X" is clicked, exit the video
        jQuery("#ex").click(fullScreenVideo.exitVideo);

        // Start loading the video
        fullScreenVideo.embedVideo();
    </script>
    <!-- End About Video  -->

    <!-- #fifth-box content -->
    <div class="fifth-box">
        <div class='container'>
            <?php $left_image_about_fifth_box = get_field('left_image_about_fifth_box'); ?>
            <?php $right_text_about_fifth_box = get_field('right_text_about_fifth_box'); ?>
            <table>
                <tbody>
                    <tr>
                        <td class="" style="width: 30%; height: 100%; vertical-align: middle; text-align: center; position: relative;"><img class="alignnone size-full wp-image-181" src="<?php echo $left_image_about_fifth_box; ?>" alt="testimonial-img-export" width="179" height="179"></td>
                        <td class="" style="width: 70%; height: 100%; vertical-align: middle; text-align: center; position: relative;">
                            <p style="color: #fff; font-size: 20px; text-align: left; margin: -7px 0px 0px 34px; line-height: 26px;"><?php echo $right_text_about_fifth_box; ?></p>
                            <div class="arrow_line_right" style="right: -125px; margin: auto; position: absolute; width: 667px; top: -89px; z-index: 99; background-image: url('<?php echo get_template_directory_uri(); ?>/images/testimonial_line.png'); height: 387px;"></div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="arrow_line" style="margin: auto;position: absolute; width: 100%; z-index: 99;background-image: url(<?php echo get_template_directory_uri(); ?>/images/arro_line_get_informed.png); height: 20px;"></div>
    </div>
    <!-- #End fifth-box content -->
    <div class="clearfix"></div>
    <!-- #futuredin -->
    <?php include('featured_in.php') ?>
    <!-- #end futuredin -->
    <!-- #Sixth-box content -->
    <div class="sixth-box">
        <?php $text_about_sixth_box = get_field('text_about_sixth_box'); ?>
        <?php $link_text_about_sixth_box = get_field('link_text_about_sixth_box'); ?>
        <?php $link_url_about_sixth_box = get_field('link_url_about_sixth_box'); ?>
        <div class='container'>
            <table>
                <tbody>
                    <tr>
                        <td class="td-content">
                            <div class="box-content">
                                <p><?php echo $text_about_sixth_box; ?></p>
                                <a href="<?php echo $link_url_about_sixth_box; ?>" title="<?php echo $link_text_about_sixth_box; ?>"><?php echo $link_text_about_sixth_box; ?></a>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <!-- #End sixth-box content -->
</div><!-- #primary -->

<?php get_footer(); ?>