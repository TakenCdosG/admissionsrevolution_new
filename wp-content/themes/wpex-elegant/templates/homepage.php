<?php
/**
 * Template Name: Home
 *
 * @package WordPress
 * @subpackage Elegant WPExplorer Theme
 * @since Elegant 1.0
 */
get_header();
$url = home_url();
?>
<div id="primary" class="content-area clr">
    <!--<div id="content" class="site-content" role="main">

        <?php $background_video = get_field('background_video'); ?>
        <?php $overlay_video = get_field('overlay_video'); ?>

        <?php $background_video_id = "wistia_" . $background_video; ?>
        <?php $overlay_video_id = "wistia_" . $overlay_video; ?>

        <div class="hello">
            <div id="video_container">
                <div id="text">
                    <h1>The truth about how to get</h1>
                    <h1>into your dream college.</h1>
                    <div id="actions">
                        <div id="playbutton">
                            <a href="http://fast.wistia.net/embed/iframe/<?php echo $overlay_video; ?>?autoPlay=true&endVideoBehavior=loop&controlsVisibleOnLoad=false&fullscreenButton=false&playbar=false&smallPlayButton=false&volumeControl=false&playButton=false&playerColor=F36F36&popover=true&version=v1&videoHeight=360&videoWidth=640" class="wistia-popover[height=100%,playerColor=F36F36,width=100%]"><div class="rectangle"> </div></a>
                            <div class="triangle"></div>
                        </div>
                    </div>
                    <a class="free-trial" href="<?php echo $url; ?>/membership-account/membership-checkout/?level=15">FREE TRIAL</a>
                </div>
                <div id="cover_all"></div>
                <div id="main-image"></div>
                <div id="<?php echo $background_video_id; ?>" class="wistia_embed backgroundVideo" style="width:920px;height:518px;"></div>
                <div id="<?php echo $overlay_video_id; ?>" class="wistia_embed overlayVideo" style="width:1920px;height:1080px;"></div>
                <div id="ex"><img src="<?php echo get_template_directory_uri(); ?>/images/ex.svg" width="23" height="23" /></div>
            </div>
        </div>

    </div> -->

    <!-- #content -->

    <div class="home_first_box">
        <?php $content_left_second_box = get_field('content_left_home_first_box'); ?>
        <?php $right_image_second_box = get_field('right_image_home_first_box'); ?>
        <table>
            <tbody>
            <tr>
                <td class="td-content-left">
                    <div class="content-left">
                        <article class="homepage-wrap clr">
                            <?php echo $content_left_second_box; ?>
                        </article><!-- #Content-wrap -->
                    </div>
                </td>
                <td class="td-content-right" style="background-image:url(<?php echo $right_image_second_box; ?>); background-repeat: no-repeat; background-position: left top; ">
                    <div class="content-right">
                    </div>
                </td>
            </tr>
            </tbody>
        </table>
        <div class="arrow_line" style="margin: auto;position: absolute; width: 100%; z-index: 99;background-image: url(<?php echo get_template_directory_uri(); ?>/images/arro_line_get_informed.png); height: 20px;"></div>
    </div>

    <div class="home_second_box" >
        <?php $title_home_second_box = get_field('title_home_second_box'); ?>
        <?php $image_left_home_second_box = get_field('image_left_home_second_box'); ?>
        <?php $content_right_home_second_box = get_field('content_right_home_second_box'); ?>
        <div class='container'>
                <div class="col-md-12">
                   <h1><?php echo $title_home_second_box; ?></h1>
                </div>
                <div class="col-md-8">
                    <iframe class="youtube aligncenter" width="100%" height="370" src="https://www.youtube.com/embed/BcncWmjoKyQ" frameborder="0" allowfullscreen></iframe>
<!--                    <img src="--><?php //echo $image_left_home_second_box; ?><!--" alt="" class="img-responsive">-->
                    <span class="text-under-video">Want to see Sara in action?<br/>
                        Check out her video The Top 5 Admissions Trends for 2015 & 2016</span>
                </div>
                <div class="col-md-4">
                    <?php echo $content_right_home_second_box; ?>
                </div>
        </div>
    </div>

    <div class="home_third_box" >
        <?php $title_home_third_box = get_field('title_home_third_box'); ?>
        <?php $video_home_third_box = get_field('video_home_third_box'); ?>
        <?php $content_home_third_box = get_field('content_home_third_box'); ?>
        <div class='container'>
            <div class="col-md-12">
                <h1><?php echo $title_home_third_box; ?></h1>
            </div>
            <div class="col-md-4">
                <?php echo $content_home_third_box; ?>
            </div>
            <div class="col-md-8">
                <iframe src="//fast.wistia.net/embed/iframe/<?php print $overlay_video; ?>"
                        allowtransparency="true" frameborder="0" scrolling="no"
                        class="wistia_embed" name="wistia_embed" allowfullscreen
                        mozallowfullscreen webkitallowfullscreen oallowfullscreen
                        msallowfullscreen width="100%" height="370"></iframe>

            </div>
        </div>
    </div>

    <div class="first-box">
        <div class='container'>

            <div class="arrow_line_left" style="left: -120px; margin: auto;position: absolute; width: 120px; top: -8px; z-index: 99;background-image: url(<?php echo get_template_directory_uri(); ?>/images/arro_line_get_informed_left.png); height: 310px;"></div>
            <div class="arrow_line_right" style="right: -125px; margin: auto;position: absolute; width: 139px; top: -8px; z-index: 99;background-image: url(<?php echo get_template_directory_uri(); ?>/images/arro_line_get_informed_right.png); height: 309px;"></div>
            <div class="arrow_line" style="margin: auto;position: absolute; width: 100%; top: -8px; z-index: 99;background-image: url(<?php echo get_template_directory_uri(); ?>/images/arro_line_get_informed.png); height: 20px;"></div>

            <!-- First box Title -->
            <?php $first_box_title = get_field('first_box_title'); ?>
            <div class="box-title">
                <h1><?php echo $first_box_title; ?></h1>
            </div>
            <div class="content-box">
                <div class="content-box">
                    <?php $left_box_icon = get_field('left_box_icon'); ?>
                    <?php $left_box_title = get_field('left_box_title'); ?>
                    <?php $left_box_content = get_field('left_box_content'); ?>
                    <?php $left_box_link = get_field('left_box_link'); ?>
                    <div class="left-box">
                        <a href="<?php echo $left_box_link; ?>" title="<?php echo $left_box_title; ?>">
                            <img src="<?php echo $left_box_icon; ?>" alt="<?php echo $left_box_title; ?>">
                        </a>
                        <h2><?php echo $left_box_title; ?> </h2>
                        <div class='summary'>
                            <?php echo $left_box_content; ?>
                        </div>
                        <a href="<?php echo $left_box_link; ?>" title="<?php echo $left_box_title; ?>">LEARN MORE ></a>
                    </div><!-- Left box -->
                    <?php $middle_box_icon = get_field('middle_box_icon'); ?>
                    <?php $middle_box_title = get_field('middle_box_title'); ?>
                    <?php $middle_box_content = get_field('middle_box_content'); ?>
                    <?php $middle_box_link = get_field('middle_box_link'); ?>
                    <div class="middle-box">
                        <a href="<?php echo $middle_box_link; ?>" title="<?php echo $middle_box_title; ?>">
                            <img src="<?php echo $middle_box_icon; ?>" alt="<?php echo $middle_box_title; ?>">
                        </a>
                        <h2><?php echo $middle_box_title; ?> </h2>
                        <div class='summary'>
                            <?php echo $middle_box_content; ?>
                        </div>
                        <a href="<?php echo $middle_box_link; ?>" title="<?php echo $middle_box_title; ?>">LEARN MORE ></a>
                    </div><!-- Middle  box -->
                    <?php $right_box_icon = get_field('right_box_icon'); ?>
                    <?php $right_box_title = get_field('right_box_title'); ?>
                    <?php $right_box_content = get_field('right_box_content'); ?>
                    <?php $right_box_link = get_field('right_box_link'); ?>
                    <div class="right-box">
                        <a href="<?php echo $right_box_link; ?>" title="<?php echo $right_box_link; ?>">
                            <img src="<?php echo $right_box_icon; ?>" alt="<?php echo $right_box_title; ?>">
                        </a>
                        <h2><?php echo $right_box_title; ?> </h2>
                        <div class='summary'>
                            <?php echo $right_box_content; ?>
                        </div>
                        <a href="<?php echo $right_box_link; ?>" title="<?php echo $right_box_link; ?>">LEARN MORE ></a>
                    </div><!-- Middle  box -->
                </div>
            </div>
        </div>
    </div>
    <div class="second-box">
        <?php $content_left_second_box = get_field('content_left_second_box'); ?>
        <?php $right_image_second_box = get_field('right_image_second_box'); ?>
        <?php $bottom_text_second_box = get_field('bottom_text_second_box'); ?>
        <?php $bottom_text_link_second_box = get_field('bottom_text_link_second_box'); ?>
        <table>
            <tbody>
                <tr>
                    <td class="td-content-left">
                        <div class="content-left">
                            <article class="homepage-wrap clr aligncenter">
                                <?php echo $content_left_second_box; ?>
                            </article><!-- #Content-wrap -->
                            <div class='bottom_link'>
                                <a href="<?php echo $bottom_text_link_second_box; ?>" title="<?php echo $bottom_text_second_box; ?>"><?php echo $bottom_text_second_box; ?></a>
                            </div>
                        </div>
                    </td>
                    <td class="td-content-right" style="background-image:url(<?php echo $right_image_second_box; ?>); background-repeat: no-repeat; background-position: right top; background-size: cover;">
                        <div class="content-right">
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
        <div class="arrow_line" style="margin: auto;position: absolute; width: 100%; z-index: 99;background-image: url(<?php echo get_template_directory_uri(); ?>/images/arro_line_get_informed.png); height: 20px;"></div>
    </div>
    <div class="third-box">
        <?php $content_left_third_box = get_field('content_left_third_box'); ?>
        <?php $content_right_third_box = get_field('content_right_third_box'); ?>
        <div class='container'>
            <table>
                <tbody>
                    <tr>
                        <td class="td-content-left">
                            <div class="left-box-content">
                                <?php echo $content_left_third_box; ?>
                            </div>
                        </td>
                        <td class="td-content-right">
                            <div class="right-box-content">
                                <?php echo $content_right_third_box; ?>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="arrow_line_right" style="right: -125px; margin: auto; position: absolute; width: 667px; top: 17%; z-index: 99; background-image: url('<?php echo $url; ?>/wp-content/themes/wpex-elegant/images/testimonial_line.png'); height: 387px;"></div>
        </div>
    </div>

    <div class="fourth-box">

        <?php $title_fourth_box = get_field('title_fourth_box'); ?>

        <?php $left_video_thumbnail = get_field('left_video_thumbnail'); ?>
        <?php $left_video_title = get_field('left_video_title'); ?>
        <?php $fourth_left_video = get_field('left_video'); ?>
        <?php $fourth_left_video_white_papers = get_field('left_video_white_papers'); ?>


        <?php $middle_video_thumbnail = get_field('middle_video_thumbnail'); ?>
        <?php $middle_video_title = get_field('middle_video_title'); ?>
        <?php $fourth_middle_video = get_field('middle_video'); ?>
        <?php $fourth_middle_video_white_papers = get_field('middle_video_white_papers'); ?>

        <?php $right_video_thumbnail = get_field('right_video_thumbnail'); ?>
        <?php $right_video_title = get_field('right_video_title'); ?>
        <?php $fourth_right_video = get_field('right_video'); ?>
        <?php $fourth_right_video_white_papers = get_field('right_video_white_papers'); ?>

        <div class='container'>
            <div class="row top-category">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="easy-pie-chart">
                        <span class="title">
                            <?php echo $title_fourth_box; ?>
                        </span>
                    </div>
                </div>
            </div>

            <div class="clearfix"></div>

            <div class="page-bar" style="height: 9px; width: 80%; text-align: center; margin: auto auto 75px auto;padding-top: 7px; background: #fff;">
                <div class="line" style="width: 100%; color: #1977ba; border-top: 2px dotted #1977ba; margin: auto;"></div>

                <div class="line-left" style=" padding: 0px 0px 0px 7px; background-color: #ffffff; height: 45px;width: 11px; margin-top: -2px;  float: left;">
                    <div class="line" style="color: #1977ba;  border-left: 2px dotted #1977ba;   margin: auto; height: 100%; position: relative; display: block;">
                        <div class="arrow-down" style=" width: 0px;   height: 0px;   border-left: 20px solid transparent;   border-right: 20px solid transparent;  border-top: 20px solid #FFF; bottom: -18px;position: absolute; left: -21px;">
                        </div>
                    </div>
                </div>
                <div class="middle-container-left" style="display: block; position: relative; width: 67%; float: left; margin: auto; text-align: center;">
                    <div class="line-middle" style="padding: 0px 0px 0px 7px;   background-color: #ffffff; height: 45px; width: 10px; margin-top: -2px; margin:-2px 29% auto auto; text-align: center;">
                        <div class="line" style="color: #1977ba; border-left: 2px dotted #1977ba;  margin: auto; height: 100%; position: relative; display: block;">
                            <div class="arrow-down" style="width: 0px;   height: 0px;   border-left: 20px solid transparent; border-right: 20px solid transparent; border-top: 20px solid #FFF; bottom: -18px; position: absolute; left: -21px;">
                            </div>
                        </div>
                    </div>
                </div> 
                <div class="line-right" style="padding: 0px 0px 0px 7px;   background-color: #ffffff; height: 45px; width: 10px; margin-top: -2px; float: right; ">
                    <div class="line" style="color: #1977ba; border-left: 2px dotted #1977ba; margin: auto; height: 100%; position: relative; display: block;">
                        <div class="arrow-down" style="width: 0px;   height: 0px;   border-left: 20px solid transparent;   border-right: 20px solid transparent; border-top: 20px solid #FFF; bottom: -18px; position: absolute; left: -21px;">
                        </div>   
                    </div>
                </div>
            </div>

            <div class="clearfix"></div>

            <div class="row init-row">

                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="dashboard-stat getting-into-gear dashboard-stat-light blue-soft" href="javascript:void(0)">
                        <a href="http://fast.wistia.net/embed/iframe/<?php echo $fourth_left_video; ?>?autoPlay=true&endVideoBehavior=loop&controlsVisibleOnLoad=true&playButton=false&popover=true&version=v1&videoHeight=360&videoWidth=640" class="wistia-popover[height=360,width=640]">
                            <div class="visual">
                                <div class="overlay"></div>
                                <img class="play_left_video_thumbnail img-responsive" src="<?php echo $left_video_thumbnail; ?>" alt="">
                            </div>
                            <div class="details">
                                <div class="number">
                                    <?php echo $left_video_title; ?>
                                </div>
                                <?php if (!empty($fourth_left_video_white_papers)): ?>
                                    <a href="<?php echo $fourth_left_video_white_papers; ?>" class="guides_free_videos" target="_blank">Download Free Guide ></a>
                                <?php endif; ?>

                            </div>
                        </a>
                    </div>
                </div>  

                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="dashboard-stat getting-into-gear dashboard-stat-light blue-soft" href="javascript:void(0)">
                        <a href="http://fast.wistia.net/embed/iframe/<?php echo $fourth_middle_video; ?>?autoPlay=true&endVideoBehavior=loop&controlsVisibleOnLoad=true&playButton=false&popover=true&version=v1&videoHeight=360&videoWidth=640" class="wistia-popover[height=360,width=640]">
                            <div class="visual">
                                <div class="overlay"></div>
                                <img src="<?php echo $middle_video_thumbnail; ?>" alt="" class="img-responsive">
                            </div>
                            <div class="details">
                                <div class="number">
                                    <?php echo $middle_video_title; ?>   
                                </div>
                                <?php if (!empty($fourth_middle_video_white_papers)): ?>
                                    <a href="<?php echo $fourth_middle_video_white_papers; ?>" class="guides_free_videos" target="_blank">Download Free Guide ></a>
                                <?php endif; ?>

                            </div>
                        </a>
                    </div>
                </div>                

                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="dashboard-stat getting-into-gear dashboard-stat-light blue-soft" href="javascript:void(0)">
                        <a href="http://fast.wistia.net/embed/iframe/<?php echo $fourth_right_video; ?>?autoPlay=true&endVideoBehavior=loop&controlsVisibleOnLoad=true&playButton=false&popover=true&version=v1&videoHeight=360&videoWidth=640" class="wistia-popover[height=360,width=640]">
                            <div class="visual">
                                <div class="overlay"></div>
                                <img src="<?php echo $right_video_thumbnail; ?>" alt="" class="img-responsive">
                            </div>
                            <div class="details">
                                <div class="number">
                                    <?php echo $right_video_title; ?>
                                </div>  
                                <?php if (!empty($fourth_right_video_white_papers)): ?>
                                    <a href="<?php echo $fourth_right_video_white_papers; ?>" class="guides_free_videos" target="_blank">Download Free Guide ></a>
                                <?php endif; ?>
                            </div>
                        </a>
                    </div>
                </div> 

            </div>
            <div class="clearfix">
            </div>
        </div>
    </div>
    <!-- #futuredin -->
    <?php include('featured_in.php') ?>
    <!-- #end futuredin -->
    <div class="fifth-box">
        <div class="arrow_line" style="margin: auto;position: absolute; width: 100%; z-index: 99;background-image: url(<?php echo get_template_directory_uri(); ?>/images/arro_line_get_informed.png); height: 20px;"></div>
        <?php $title_fifth_box = get_field('title_fifth_box'); ?>
        <?php $bottom_text_fifth_box = get_field('bottom_text_fifth_box'); ?>
        <?php $bottom_link_fifth_box = get_field('bottom_link_fifth_box'); ?>
        <div class='container'>
            <table>
                <tbody>
                    <tr>
                        <td class="td-content">
                            <div class="box-content">
                                <h1><?php echo $title_fifth_box; ?></h1>
                                <a href="<?php echo $bottom_link_fifth_box; ?>" title="<?php echo $bottom_text_fifth_box; ?>"><?php echo $bottom_text_fifth_box; ?></a>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

    </div>
    <div class="arrow_line" style="margin: auto;position: absolute; width: 100%; z-index: 99;background-image: url(<?php echo get_template_directory_uri(); ?>/images/arro_line_get_informed.png); height: 20px;"></div>
</div><!-- #primary -->

<!-- Begin Home Video Top -->
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
            var wistiaEmbedVideoOptions = {volume: 0, endVideoBehavior: 'loop', time: 300000, autoPlay: true};
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
            wistiaEmbed.time(300000);
            wistiaEmbed.volume(0);
            //wistiaEmbed.pause();
            var windowWidth = jQuery(window).width() > 768;
            if (windowWidth) {
                jQuery(".hello #main-image").delay(2500).animate({opacity: 0}, 500);
            }
            jQuery(".wistia_embed.backgroundVideo").delay(2500).animate({opacity: 1}, 600, function () {
                // Animation complete.
                if (windowWidth) {
                    jQuery(".hello #main-image").css('opacity', '0');
                }
            });
            //jQuery("#wistia_jjsa4x1083").css({opacity: 1});
            // Video to be shown in the overlay
            // overlayEmbed = Wistia.embed(fullScreenVideo.overlayVideo, overlayEmbedVideoOptions);

            /**
             * We load the thumbnail in the background while we wait
             * for the video to load and play. Once loaded, we pause, reset to 
             * frame zero, show the video then play it.
             */

            wistiaEmbed.bind("play", function () {
                wistiaEmbed.time(6000);
                wistiaEmbed.volume(0);
                wistiaEmbed.pause();
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
            jQuery(fullScreenVideo.overlayVideoDiv).css("left", 0).css("visibility", "visible");
            overlayEmbed.plugin.cropFill.resize();
            jQuery("#text").css({opacity: 0});
            jQuery("#ex").css("right", 24);
            overlayEmbed.volume(1);
            overlayEmbed.play();
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
<!-- End Home Video Top -->
<?php get_footer(); ?>