<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/*
 * Function For print all Videos
 */

//-> [allvideos foo="foo-value"]
function allvideos_func($atts) {
    global $wpdb, $pmpro_msg, $pmpro_msgt, $pmpro_levels, $current_user, $levels;
    $type = 'video';
    $max_count = 0;
    /*
      +===================================+
      | BEGIN 'Acceptance'                |
      +===================================+
     */
    $acceptance = array();
    $empty_acceptance = true;
    $args = array(
        'post_type' => array($type),
        'post_status' => 'publish',
        'caller_get_posts' => 1,
        'tax_query' => array(
            array(
                'taxonomy' => 'categories',
                'field' => 'slug',
                'terms' => 'acceptance',
            ),
        ),
    );

    $acceptance_query = null;
    $acceptance_query = new WP_Query($args);

    if ($acceptance_query->have_posts()) {
        while ($acceptance_query->have_posts()) {
            $acceptance_query->the_post();
            $thumbnail = "";
            $video_thumbnail_url = get_field('video_thumbnail', $post_id = $post->ID);
            if (!empty($video_thumbnail_url)) {
                $thumbnail = '<img src="' . $video_thumbnail_url . '" alt="" class="img-responsive">';
            }


            $col = '<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">'
                    . '<a class="dashboard-stat acceptance dashboard-stat-light blue-soft" href="' . get_the_permalink($post_id = $post->ID) . '">'
                    . '<div class="visual">'
                    . '<div class="overlay"></div>'
                    . $thumbnail
                    . '</div>'
                    . '<div class="details">'
                    . '<div class="number">'
                    . the_title($before = '', $after = '', $echo = false)
                    . '</div>'
                    . '</div>'
                    . '<span class="caption-helper">'
                    . '<ul class="post-meta clr">'
                    . '<li class="meta-date">'
                    . 'Posted on <span class="meta-date-text">' . get_the_date() . '</span>'
                    . '</li>'
                    . '</ul><!-- .post-meta -->'
                    . '</span>'
                    . '</a>'
                    . '</div>';
            $hasaccess = pmpro_has_membership_access($post_id = $post->ID, $user_id = $current_user->ID, $return_membership_levels = false);
            if ($hasaccess) {
                $acceptance[] = $col;
            }
        }
    }
    $tmp = count($acceptance);
    if ($tmp > $max_count) {
        $max_count = $tmp;
    }
    wp_reset_query();
    /*
      +===================================+
      | BEGIN 'Navigating Turns'          |
      +===================================+
     */
    $navigating_turns = array();
    $args = array(
        'post_type' => array($type),
        'post_status' => 'publish',
        'caller_get_posts' => 1,
        'tax_query' => array(
            array(
                'taxonomy' => 'categories',
                'field' => 'slug',
                'terms' => 'navigating-turns',
            ),
        ),
    );

    $navigating_turns_query = null;
    $navigating_turns_query = new WP_Query($args);

    if ($navigating_turns_query->have_posts()) {
        while ($navigating_turns_query->have_posts()) {
            $navigating_turns_query->the_post();
            $thumbnail = "";
            $video_thumbnail_url = get_field('video_thumbnail', $post_id = $post->ID);
            if (!empty($video_thumbnail_url)) {
                $thumbnail = '<img src="' . $video_thumbnail_url . '" alt="" class="img-responsive">';
            }

            $col = '<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">'
                    . '<a class="dashboard-stat navigating-turns dashboard-stat-light blue-soft" href="' . get_the_permalink($post_id = $post->ID) . '">'
                    . '<div class="visual">'
                    . '<div class="overlay"></div>'
                    . $thumbnail
                    . '</div>'
                    . '<div class="details">'
                    . '<div class="number">'
                    . the_title($before = '', $after = '', $echo = false)
                    . '</div>'
                    . '</div>'
                    . '<span class="caption-helper">'
                    . '<ul class="post-meta clr">'
                    . '<li class="meta-date">'
                    . 'Posted on <span class="meta-date-text">' . get_the_date() . '</span>'
                    . '</li>'
                    . '</ul><!-- .post-meta -->'
                    . '</span>'
                    . '</a>'
                    . '</div>';
            $hasaccess = pmpro_has_membership_access($post_id = $post->ID, $user_id = $current_user->ID, $return_membership_levels = false);
            if ($hasaccess) {
                $navigating_turns[] = $col;
            }
        }
    }
    $tmp = count($navigating_turns);
    if ($tmp > $max_count) {
        $max_count = $tmp;
    }
    wp_reset_query();
    /*
      +===================================+
      | BEGIN 'Heading for the Finish'    |
      +===================================+
     */
    $heading_finish = array();
    $args = array(
        'post_type' => array($type),
        'post_status' => 'publish',
        'caller_get_posts' => 1,
        'tax_query' => array(
            array(
                'taxonomy' => 'categories',
                'field' => 'slug',
                'terms' => 'heading-for-the-finish',
            ),
        ),
    );

    $heading_finish_query = null;
    $heading_finish_query = new WP_Query($args);

    if ($heading_finish_query->have_posts()) {
        while ($heading_finish_query->have_posts()) {
            $heading_finish_query->the_post();
            $thumbnail = "";
            $video_thumbnail_url = get_field('video_thumbnail', $post_id = $post->ID);
            if (!empty($video_thumbnail_url)) {
                $thumbnail = '<img src="' . $video_thumbnail_url . '" alt="" class="img-responsive">';
            }

            $col = '<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">'
                    . '<a class="dashboard-stat heading-for-the-finish dashboard-stat-light blue-soft" href="' . get_the_permalink($post_id = $post->ID) . '">'
                    . '<div class="visual">'
                    . '<div class="overlay"></div>'
                    . $thumbnail
                    . '</div>'
                    . '<div class="details">'
                    . '<div class="number">'
                    . the_title($before = '', $after = '', $echo = false)
                    . '</div>'
                    . '</div>'
                    . '<span class="caption-helper">'
                    . '<ul class="post-meta clr">'
                    . '<li class="meta-date">'
                    . 'Posted on <span class="meta-date-text">' . get_the_date() . '</span>'
                    . '</li>'
                    . '</ul><!-- .post-meta -->'
                    . '</span>'
                    . '</a>'
                    . '</div>';
            $hasaccess = pmpro_has_membership_access($post_id = $post->ID, $user_id = $current_user->ID, $return_membership_levels = false);
            if ($hasaccess) {
                $heading_finish[] = $col;
            }
        }
    }
    $tmp = count($heading_finish);
    if ($tmp > $max_count) {
        $max_count = $tmp;
    }
    wp_reset_query();
    /*
      +===================================+
      | BEGIN 'Getting Into Gear'         |
      +===================================+
     */
    $getting_into_gear = array();
    $args = array(
        'post_type' => array($type),
        'post_status' => 'publish',
        'caller_get_posts' => 1,
        'tax_query' => array(
            array(
                'taxonomy' => 'categories',
                'field' => 'slug',
                'terms' => 'getting-into-gear',
            ),
        ),
    );

    $getting_into_gear_query = null;
    $getting_into_gear_query = new WP_Query($args);

    if ($getting_into_gear_query->have_posts()) {
        while ($getting_into_gear_query->have_posts()) {

            $getting_into_gear_query->the_post();
            $thumbnail = "";
            $video_thumbnail_url = get_field('video_thumbnail', $post_id = $post->ID);
            if (!empty($video_thumbnail_url)) {
                $thumbnail = '<img src="' . $video_thumbnail_url . '" alt="" class="img-responsive">';
            }

            $col = '<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">'
                    . '<a class="dashboard-stat getting-into-gear dashboard-stat-light blue-soft" href="' . get_the_permalink($post_id = $post->ID) . '">'
                    . '<div class="visual">'
                    . '<div class="overlay"></div>'
                    . $thumbnail
                    . '</div>'
                    . '<div class="details">'
                    . '<div class="number">'
                    . the_title($before = '', $after = '', $echo = false)
                    . '</div>'
                    . '</div>'
                    . '<span class="caption-helper">'
                    . '<ul class="post-meta clr">'
                    . '<li class="meta-date">'
                    . 'Posted on <span class="meta-date-text">' . get_the_date() . '</span>'
                    . '</li>'
                    . '</ul><!-- .post-meta -->'
                    . '</span>'
                    . '</a>'
                    . '</div>';
            $hasaccess = pmpro_has_membership_access($post_id = $post->ID, $user_id = $current_user->ID, $return_membership_levels = false);
            if ($hasaccess) {
                $getting_into_gear[] = $col;
            }
        }
    }
    $tmp = count($getting_into_gear);
    if ($tmp > $max_count) {
        $max_count = $tmp;
    }
    wp_reset_query(); // Restore global post data stomped by the_post().
    ?>
    <!-- BEGIN VIDEOS MENU-->
    <div class="row top-category">
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="easy-pie-chart">
                <div class="number transactions" data-percent="55">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/global/img/getting_into_gear_color.png" alt="" class=""/>
                </div>
                <a class="title" href="#">
                    Getting Into Gear
                </a>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="easy-pie-chart">
                <div class="number visits" data-percent="85">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/global/img/navigating_turns_color.png" alt="" class=""/>
                </div>
                <a class="title" href="#">
                    Navigating Turns 
                </a>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="easy-pie-chart">
                <div class="number bounce" data-percent="46">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/global/img/heading_for_finish_color.png" alt="" class=""/>
                </div>
                <a class="title" href="#">
                    Heading for the Finish
                </a>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="easy-pie-chart">
                <div class="number bounce" data-percent="46">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/global/img/acceptance-color.png" alt="" class=""/>
                </div>
                <a class="title" href="#">
                    Acceptance
                </a>
            </div>
        </div>
    </div>
    <div class="clearfix">
    </div>
    <div class="page-bar" style="height: 16px; width: 80%; text-align: center; margin: auto auto 75px auto;padding-top: 7px;">
        <div class="line" style="width: 100%; color: #1977ba; border-top: 2px dotted #1977ba; margin: auto;"></div>

        <div class="line-left" style=" padding: 0px 0px 0px 7px; background-color: #ffffff; height: 45px;width: 16px; margin-top: -2px;  float: left;">
            <div class="line" style="color: #1977ba;  border-left: 2px dotted #1977ba;   margin: auto; height: 100%; position: relative; display: block;">
                <div class="arrow-down" style=" width: 0px;   height: 0px;   border-left: 20px solid transparent;   border-right: 20px solid transparent;  border-top: 20px solid #FFF; bottom: -18px;position: absolute; left: -21px;">
                </div>
            </div>
        </div>

        <div class="middle-container-left" style="display: block; position: relative; width: 47%; float: left; margin: auto; text-align: center;">
            <div class="line-middle" style="padding: 0px 0px 0px 7px;   background-color: #ffffff; height: 45px; width: 16px; margin-top: -2px; margin:-2px 29% auto auto; text-align: center;">
                <div class="line" style="color: #1977ba; border-left: 2px dotted #1977ba;  margin: auto; height: 100%; position: relative; display: block;">
                    <div class="arrow-down" style="width: 0px;   height: 0px;   border-left: 20px solid transparent; border-right: 20px solid transparent; border-top: 20px solid #FFF; bottom: -18px; position: absolute; left: -21px;">
                    </div>
                </div>
            </div>
        </div>          
        <div class="middle-container-right" style="display: block; position: relative; width: 48%; float: left; margin: auto; text-align: center;">
            <div class="line-middle-right" style="padding: 0px 0px 0px 7px; background-color: #ffffff; height: 45px; width: 16px; margin-top: -2px; margin: -2px auto auto 35%; text-align: center;">
                <div class="line" style="color: #1977ba; border-left: 2px dotted #1977ba; margin: auto;  height: 100%; position: relative; display: block;">
                    <div class="arrow-down" style="width: 0px; height: 0px;  border-left: 20px solid transparent; border-right: 20px solid transparent; border-top: 20px solid #FFF; bottom: -18px; position: absolute; left: -21px; ">
                    </div>
                </div>
            </div>
        </div>
        <div class="line-right" style="padding: 0px 0px 0px 7px;   background-color: #ffffff; height: 45px; width: 16px; margin-top: -2px; float: right; ">
            <div class="line" style="color: #1977ba; border-left: 2px dotted #1977ba; margin: auto; height: 100%; position: relative; display: block;">
                <div class="arrow-down" style="width: 0px;   height: 0px;   border-left: 20px solid transparent;   border-right: 20px solid transparent; border-top: 20px solid #FFF; bottom: -18px; position: absolute; left: -21px;">
                </div>   
            </div>
        </div>
    </div>
    <div class="clearfix">
    </div>
    <!-- END VIDEOS MENU-->
    <!-- BEGIN VIDEO LIST-->
    <?php for ($i = 0; $i <= $max_count; $i++) : ?>
        <div class="row <?php if ($i == 0): ?> init-row <?php else: ?>normal-row <?php endif; ?>">
            <?php
            if (isset($getting_into_gear[$i])) {
                echo $getting_into_gear[$i];
            } else {
                echo '<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12"></div>';
            }
            ?>

            <?php
            if (isset($navigating_turns[$i])) {
                echo $navigating_turns[$i];
            } else {
                echo '<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12"></div>';
            }
            ?>

            <?php
            if (isset($heading_finish[$i])) {
                echo $heading_finish[$i];
            } else {
                echo '<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12"></div>';
            }
            ?>

            <?php
            if (isset($acceptance[$i])) {
                echo $acceptance[$i];
            } else {
                echo '<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12"></div>';
            }
            ?>
        </div>
        <div class="clearfix">
        </div>
    <?php endfor; ?>
    <!-- END VIDEOS LIST-->
    <?php
}

add_shortcode('allvideos', 'allvideos_func');

//-> [getting-into-gear-videos foo="foo-value"]


function getting_into_gear_videos_func($atts) {
    global $wpdb, $pmpro_msg, $pmpro_msgt, $pmpro_levels, $current_user, $levels;
    $type = 'video';
    $max_count = 0;

    /*
      +===================================+
      | BEGIN 'Getting Into Gear'         |
      +===================================+
     */
    $getting_into_gear = array();
    $args = array(
        'post_type' => array($type),
        'post_status' => 'publish',
        'caller_get_posts' => 1,
        'tax_query' => array(
            array(
                'taxonomy' => 'categories',
                'field' => 'slug',
                'terms' => 'getting-into-gear',
            ),
        ),
    );

    $getting_into_gear_query = null;
    $getting_into_gear_query = new WP_Query($args);

    if ($getting_into_gear_query->have_posts()) {
        while ($getting_into_gear_query->have_posts()) {

            $getting_into_gear_query->the_post();
            $thumbnail = "";
            $video_thumbnail_url = get_field('video_thumbnail', $post_id = $post->ID);
            if (!empty($video_thumbnail_url)) {
                $thumbnail = '<img src="' . $video_thumbnail_url . '" alt="" class="img-responsive">';
            }

            $col = '<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">'
                    . '<a class="dashboard-stat getting-into-gear dashboard-stat-light blue-soft" href="' . get_the_permalink($post_id = $post->ID) . '">'
                    . '<div class="visual">'
                    . '<div class="overlay"></div>'
                    . $thumbnail
                    . '</div>'
                    . '<div class="details">'
                    . '<div class="number">'
                    . the_title($before = '', $after = '', $echo = false)
                    . '</div>'
                    . '</div>'
                    . '<span class="caption-helper">'
                    . '<ul class="post-meta clr">'
                    . '<li class="meta-date">'
                    . 'Posted on <span class="meta-date-text">' . get_the_date() . '</span>'
                    . '</li>'
                    . '</ul><!-- .post-meta -->'
                    . '</span>'
                    . '</a>'
                    . '</div>';
            $hasaccess = pmpro_has_membership_access($post_id = $post->ID, $user_id = $current_user->ID, $return_membership_levels = false);
            if ($hasaccess) {
                $getting_into_gear[] = $col;
            }
        }
    }
    $tmp = count($getting_into_gear);
    if ($tmp > $max_count) {
        $max_count = $tmp;
    }
    wp_reset_query(); // Restore global post data stomped by the_post().
    ?>
    <!-- BEGIN VIDEOS MENU-->
    <div class="row top-category">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="easy-pie-chart">
                <div class="number transactions" data-percent="55">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/global/img/getting_into_gear_color.png" alt="" class=""/>
                </div>
                <a class="title" href="#">
                    Getting Into Gear
                </a>
            </div>
        </div>
    </div>
    <div class="clearfix">
    </div>
    <div class="page-bar" style="height: 16px; width: 80%; text-align: center; margin: auto auto 75px auto;padding-top: 7px;">
        <div class="line" style="width: 100%; color: #1977ba; border-top: 2px dotted #1977ba; margin: auto;"></div>

        <div class="line-left" style=" padding: 0px 0px 0px 7px; background-color: #ffffff; height: 45px;width: 16px; margin-top: -2px;  float: left;">
            <div class="line" style="color: #1977ba;  border-left: 2px dotted #1977ba;   margin: auto; height: 100%; position: relative; display: block;">
                <div class="arrow-down" style=" width: 0px;   height: 0px;   border-left: 20px solid transparent;   border-right: 20px solid transparent;  border-top: 20px solid #FFF; bottom: -18px;position: absolute; left: -21px;">
                </div>
            </div>
        </div>

        <div class="middle-container-left" style="display: block; position: relative; width: 47%; float: left; margin: auto; text-align: center;">
            <div class="line-middle" style="padding: 0px 0px 0px 7px;   background-color: #ffffff; height: 45px; width: 16px; margin-top: -2px; margin:-2px 29% auto auto; text-align: center;">
                <div class="line" style="color: #1977ba; border-left: 2px dotted #1977ba;  margin: auto; height: 100%; position: relative; display: block;">
                    <div class="arrow-down" style="width: 0px;   height: 0px;   border-left: 20px solid transparent; border-right: 20px solid transparent; border-top: 20px solid #FFF; bottom: -18px; position: absolute; left: -21px;">
                    </div>
                </div>
            </div>
        </div>          
        <div class="middle-container-right" style="display: block; position: relative; width: 48%; float: left; margin: auto; text-align: center;">
            <div class="line-middle-right" style="padding: 0px 0px 0px 7px; background-color: #ffffff; height: 45px; width: 16px; margin-top: -2px; margin: -2px auto auto 35%; text-align: center;">
                <div class="line" style="color: #1977ba; border-left: 2px dotted #1977ba; margin: auto;  height: 100%; position: relative; display: block;">
                    <div class="arrow-down" style="width: 0px; height: 0px;  border-left: 20px solid transparent; border-right: 20px solid transparent; border-top: 20px solid #FFF; bottom: -18px; position: absolute; left: -21px; ">
                    </div>
                </div>
            </div>
        </div>
        <div class="line-right" style="padding: 0px 0px 0px 7px;   background-color: #ffffff; height: 45px; width: 16px; margin-top: -2px; float: right; ">
            <div class="line" style="color: #1977ba; border-left: 2px dotted #1977ba; margin: auto; height: 100%; position: relative; display: block;">
                <div class="arrow-down" style="width: 0px;   height: 0px;   border-left: 20px solid transparent;   border-right: 20px solid transparent; border-top: 20px solid #FFF; bottom: -18px; position: absolute; left: -21px;">
                </div>   
            </div>
        </div>
    </div>
    <div class="clearfix">
    </div>
    <!-- END VIDEOS MENU-->
    <!-- BEGIN VIDEO LIST--> 
    <div class="row init-row">
        <?php for ($i = 0; $i <= $max_count; $i++) : ?>
            <?php
            if (isset($getting_into_gear[$i])) {
                echo $getting_into_gear[$i];
            } else {
                echo '<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12"></div>';
            }
            ?>
        <?php endfor; ?> 
    </div>
    <div class="clearfix">
    </div>
    <!-- END VIDEOS LIST-->
    <?php
}

add_shortcode('getting-into-gear-videos', 'getting_into_gear_videos_func');

//-> [navigating-turns-videos]

function navigating_turns_videos_func($atts) {
    global $wpdb, $pmpro_msg, $pmpro_msgt, $pmpro_levels, $current_user, $levels;
    $type = 'video';
    $max_count = 0;

    /*
      +===================================+
      | BEGIN 'Navigating Turns'          |
      +===================================+
     */
    $navigating_turns = array();
    $args = array(
        'post_type' => array($type),
        'post_status' => 'publish',
        'caller_get_posts' => 1,
        'tax_query' => array(
            array(
                'taxonomy' => 'categories',
                'field' => 'slug',
                'terms' => 'navigating-turns',
            ),
        ),
    );

    $navigating_turns_query = null;
    $navigating_turns_query = new WP_Query($args);

    if ($navigating_turns_query->have_posts()) {
        while ($navigating_turns_query->have_posts()) {
            $navigating_turns_query->the_post();
            $thumbnail = "";
            $video_thumbnail_url = get_field('video_thumbnail', $post_id = $post->ID);
            if (!empty($video_thumbnail_url)) {
                $thumbnail = '<img src="' . $video_thumbnail_url . '" alt="" class="img-responsive">';
            }

            $col = '<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">'
                    . '<a class="dashboard-stat navigating-turns dashboard-stat-light blue-soft" href="' . get_the_permalink($post_id = $post->ID) . '">'
                    . '<div class="visual">'
                    . '<div class="overlay"></div>'
                    . $thumbnail
                    . '</div>'
                    . '<div class="details">'
                    . '<div class="number">'
                    . the_title($before = '', $after = '', $echo = false)
                    . '</div>'
                    . '</div>'
                    . '<span class="caption-helper">'
                    . '<ul class="post-meta clr">'
                    . '<li class="meta-date">'
                    . 'Posted on <span class="meta-date-text">' . get_the_date() . '</span>'
                    . '</li>'
                    . '</ul><!-- .post-meta -->'
                    . '</span>'
                    . '</a>'
                    . '</div>';
            $hasaccess = pmpro_has_membership_access($post_id = $post->ID, $user_id = $current_user->ID, $return_membership_levels = false);
            if ($hasaccess) {
                $navigating_turns[] = $col;
            }
        }
    }
    $tmp = count($navigating_turns);
    if ($tmp > $max_count) {
        $max_count = $tmp;
    }
    wp_reset_query();
    ?>

    <!-- BEGIN VIDEOS MENU-->

    <div class="row top-category">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="easy-pie-chart">
                <div class="number visits" data-percent="85">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/global/img/navigating_turns_color.png" alt="" class=""/>
                </div>
                <a class="title" href="#">
                    Navigating Turns 
                </a>
            </div>
        </div>
    </div>

    <div class="clearfix">
    </div>
    <div class="page-bar" style="height: 16px; width: 80%; text-align: center; margin: auto auto 75px auto;padding-top: 7px;">
        <div class="line" style="width: 100%; color: #1977ba; border-top: 2px dotted #1977ba; margin: auto;"></div>

        <div class="line-left" style=" padding: 0px 0px 0px 7px; background-color: #ffffff; height: 45px;width: 16px; margin-top: -2px;  float: left;">
            <div class="line" style="color: #1977ba;  border-left: 2px dotted #1977ba;   margin: auto; height: 100%; position: relative; display: block;">
                <div class="arrow-down" style=" width: 0px;   height: 0px;   border-left: 20px solid transparent;   border-right: 20px solid transparent;  border-top: 20px solid #FFF; bottom: -18px;position: absolute; left: -21px;">
                </div>
            </div>
        </div>

        <div class="middle-container-left" style="display: block; position: relative; width: 47%; float: left; margin: auto; text-align: center;">
            <div class="line-middle" style="padding: 0px 0px 0px 7px;   background-color: #ffffff; height: 45px; width: 16px; margin-top: -2px; margin:-2px 29% auto auto; text-align: center;">
                <div class="line" style="color: #1977ba; border-left: 2px dotted #1977ba;  margin: auto; height: 100%; position: relative; display: block;">
                    <div class="arrow-down" style="width: 0px;   height: 0px;   border-left: 20px solid transparent; border-right: 20px solid transparent; border-top: 20px solid #FFF; bottom: -18px; position: absolute; left: -21px;">
                    </div>
                </div>
            </div>
        </div>          
        <div class="middle-container-right" style="display: block; position: relative; width: 48%; float: left; margin: auto; text-align: center;">
            <div class="line-middle-right" style="padding: 0px 0px 0px 7px; background-color: #ffffff; height: 45px; width: 16px; margin-top: -2px; margin: -2px auto auto 35%; text-align: center;">
                <div class="line" style="color: #1977ba; border-left: 2px dotted #1977ba; margin: auto;  height: 100%; position: relative; display: block;">
                    <div class="arrow-down" style="width: 0px; height: 0px;  border-left: 20px solid transparent; border-right: 20px solid transparent; border-top: 20px solid #FFF; bottom: -18px; position: absolute; left: -21px; ">
                    </div>
                </div>
            </div>
        </div>
        <div class="line-right" style="padding: 0px 0px 0px 7px;   background-color: #ffffff; height: 45px; width: 16px; margin-top: -2px; float: right; ">
            <div class="line" style="color: #1977ba; border-left: 2px dotted #1977ba; margin: auto; height: 100%; position: relative; display: block;">
                <div class="arrow-down" style="width: 0px;   height: 0px;   border-left: 20px solid transparent;   border-right: 20px solid transparent; border-top: 20px solid #FFF; bottom: -18px; position: absolute; left: -21px;">
                </div>   
            </div>
        </div>
    </div>
    <div class="clearfix">
    </div>
    <!-- END VIDEOS MENU-->
    <!-- BEGIN VIDEO LIST-->
    <div class="row init-row">
        <?php for ($i = 0; $i <= $max_count; $i++) : ?>

            <?php
            if (isset($navigating_turns[$i])) {
                echo $navigating_turns[$i];
            } else {
                echo '<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12"></div>';
            }
            ?>

        <?php endfor; ?>
    </div>
    <div class="clearfix">
    </div>
    <!-- END VIDEOS LIST-->
    <?php
}

add_shortcode('navigating-turns-videos', 'navigating_turns_videos_func');

//-> [heading-for-the-finish-videos]

function heading_for_the_finish_videos_func($atts) {
    global $wpdb, $pmpro_msg, $pmpro_msgt, $pmpro_levels, $current_user, $levels;
    $type = 'video';
    $max_count = 0;


    /*
      +===================================+
      | BEGIN 'Heading for the Finish'    |
      +===================================+
     */
    $heading_finish = array();
    $args = array(
        'post_type' => array($type),
        'post_status' => 'publish',
        'caller_get_posts' => 1,
        'tax_query' => array(
            array(
                'taxonomy' => 'categories',
                'field' => 'slug',
                'terms' => 'heading-for-the-finish',
            ),
        ),
    );

    $heading_finish_query = null;
    $heading_finish_query = new WP_Query($args);

    if ($heading_finish_query->have_posts()) {
        while ($heading_finish_query->have_posts()) {
            $heading_finish_query->the_post();
            $thumbnail = "";
            $video_thumbnail_url = get_field('video_thumbnail', $post_id = $post->ID);
            if (!empty($video_thumbnail_url)) {
                $thumbnail = '<img src="' . $video_thumbnail_url . '" alt="" class="img-responsive">';
            }

            $col = '<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">'
                    . '<a class="dashboard-stat heading-for-the-finish dashboard-stat-light blue-soft" href="' . get_the_permalink($post_id = $post->ID) . '">'
                    . '<div class="visual">'
                    . '<div class="overlay"></div>'
                    . $thumbnail
                    . '</div>'
                    . '<div class="details">'
                    . '<div class="number">'
                    . the_title($before = '', $after = '', $echo = false)
                    . '</div>'
                    . '</div>'
                    . '<span class="caption-helper">'
                    . '<ul class="post-meta clr">'
                    . '<li class="meta-date">'
                    . 'Posted on <span class="meta-date-text">' . get_the_date() . '</span>'
                    . '</li>'
                    . '</ul><!-- .post-meta -->'
                    . '</span>'
                    . '</a>'
                    . '</div>';
            $hasaccess = pmpro_has_membership_access($post_id = $post->ID, $user_id = $current_user->ID, $return_membership_levels = false);
            if ($hasaccess) {
                $heading_finish[] = $col;
            }
        }
    }
    $tmp = count($heading_finish);
    if ($tmp > $max_count) {
        $max_count = $tmp;
    }
    wp_reset_query();
    ?>
    <!-- BEGIN VIDEOS MENU-->
    <div class="row top-category">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="easy-pie-chart">
                <div class="number bounce" data-percent="46">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/global/img/heading_for_finish_color.png" alt="" class=""/>
                </div>
                <a class="title" href="#">
                    Heading for the Finish
                </a>
            </div>
        </div>
    </div>
    <div class="clearfix">
    </div>
    <div class="page-bar" style="height: 16px; width: 80%; text-align: center; margin: auto auto 75px auto;padding-top: 7px;">
        <div class="line" style="width: 100%; color: #1977ba; border-top: 2px dotted #1977ba; margin: auto;"></div>

        <div class="line-left" style=" padding: 0px 0px 0px 7px; background-color: #ffffff; height: 45px;width: 16px; margin-top: -2px;  float: left;">
            <div class="line" style="color: #1977ba;  border-left: 2px dotted #1977ba;   margin: auto; height: 100%; position: relative; display: block;">
                <div class="arrow-down" style=" width: 0px;   height: 0px;   border-left: 20px solid transparent;   border-right: 20px solid transparent;  border-top: 20px solid #FFF; bottom: -18px;position: absolute; left: -21px;">
                </div>
            </div>
        </div>

        <div class="middle-container-left" style="display: block; position: relative; width: 47%; float: left; margin: auto; text-align: center;">
            <div class="line-middle" style="padding: 0px 0px 0px 7px;   background-color: #ffffff; height: 45px; width: 16px; margin-top: -2px; margin:-2px 29% auto auto; text-align: center;">
                <div class="line" style="color: #1977ba; border-left: 2px dotted #1977ba;  margin: auto; height: 100%; position: relative; display: block;">
                    <div class="arrow-down" style="width: 0px;   height: 0px;   border-left: 20px solid transparent; border-right: 20px solid transparent; border-top: 20px solid #FFF; bottom: -18px; position: absolute; left: -21px;">
                    </div>
                </div>
            </div>
        </div>          
        <div class="middle-container-right" style="display: block; position: relative; width: 48%; float: left; margin: auto; text-align: center;">
            <div class="line-middle-right" style="padding: 0px 0px 0px 7px; background-color: #ffffff; height: 45px; width: 16px; margin-top: -2px; margin: -2px auto auto 35%; text-align: center;">
                <div class="line" style="color: #1977ba; border-left: 2px dotted #1977ba; margin: auto;  height: 100%; position: relative; display: block;">
                    <div class="arrow-down" style="width: 0px; height: 0px;  border-left: 20px solid transparent; border-right: 20px solid transparent; border-top: 20px solid #FFF; bottom: -18px; position: absolute; left: -21px; ">
                    </div>
                </div>
            </div>
        </div>
        <div class="line-right" style="padding: 0px 0px 0px 7px;   background-color: #ffffff; height: 45px; width: 16px; margin-top: -2px; float: right; ">
            <div class="line" style="color: #1977ba; border-left: 2px dotted #1977ba; margin: auto; height: 100%; position: relative; display: block;">
                <div class="arrow-down" style="width: 0px;   height: 0px;   border-left: 20px solid transparent;   border-right: 20px solid transparent; border-top: 20px solid #FFF; bottom: -18px; position: absolute; left: -21px;">
                </div>   
            </div>
        </div>
    </div>
    <div class="clearfix">
    </div>
    <!-- END VIDEOS MENU-->
    <!-- BEGIN VIDEO LIST-->
    <div class="row init-row">
        <?php for ($i = 0; $i <= $max_count; $i++) : ?>

            <?php
            if (isset($heading_finish[$i])) {
                echo $heading_finish[$i];
            } else {
                echo '<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12"></div>';
            }
            ?>

        <?php endfor; ?>
    </div>
    <div class="clearfix">
    </div>
    <!-- END VIDEOS LIST-->
    <?php
}

add_shortcode('heading-for-the-finish-videos', 'heading_for_the_finish_videos_func');

//-> [acceptance-videos]
function acceptance_videos_func($atts) {

    global $wpdb, $pmpro_msg, $pmpro_msgt, $pmpro_levels, $current_user, $levels;
    $type = 'video';
    $max_count = 0;

    /*
      +===================================+
      | BEGIN 'Acceptance'                |
      +===================================+
     */
    $acceptance = array();
    $empty_acceptance = true;
    $args = array(
        'post_type' => array($type),
        'post_status' => 'publish',
        'caller_get_posts' => 1,
        'tax_query' => array(
            array(
                'taxonomy' => 'categories',
                'field' => 'slug',
                'terms' => 'acceptance',
            ),
        ),
    );

    $acceptance_query = null;
    $acceptance_query = new WP_Query($args);

    if ($acceptance_query->have_posts()) {
        while ($acceptance_query->have_posts()) {
            $acceptance_query->the_post();
            $thumbnail = "";
            $video_thumbnail_url = get_field('video_thumbnail', $post_id = $post->ID);
            if (!empty($video_thumbnail_url)) {
                $thumbnail = '<img src="' . $video_thumbnail_url . '" alt="" class="img-responsive">';
            }


            $col = '<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">'
                    . '<a class="dashboard-stat acceptance dashboard-stat-light blue-soft" href="' . get_the_permalink($post_id = $post->ID) . '">'
                    . '<div class="visual">'
                    . '<div class="overlay"></div>'
                    . $thumbnail
                    . '</div>'
                    . '<div class="details">'
                    . '<div class="number">'
                    . the_title($before = '', $after = '', $echo = false)
                    . '</div>'
                    . '</div>'
                    . '<span class="caption-helper">'
                    . '<ul class="post-meta clr">'
                    . '<li class="meta-date">'
                    . 'Posted on <span class="meta-date-text">' . get_the_date() . '</span>'
                    . '</li>'
                    . '</ul><!-- .post-meta -->'
                    . '</span>'
                    . '</a>'
                    . '</div>';
            $hasaccess = pmpro_has_membership_access($post_id = $post->ID, $user_id = $current_user->ID, $return_membership_levels = false);
            if ($hasaccess) {
                $acceptance[] = $col;
            }
        }
    }
    $tmp = count($acceptance);
    if ($tmp > $max_count) {
        $max_count = $tmp;
    }
    wp_reset_query();
    ?>
    <!-- BEGIN VIDEOS MENU-->
    <div class="row top-category">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="easy-pie-chart">
                <div class="number bounce" data-percent="46">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/global/img/acceptance-color.png" alt="" class=""/>
                </div>
                <a class="title" href="#">
                    Acceptance
                </a>
            </div>
        </div>
    </div>
    <div class="clearfix">
    </div>
    <div class="page-bar" style="height: 16px; width: 80%; text-align: center; margin: auto auto 75px auto;padding-top: 7px;">
        <div class="line" style="width: 100%; color: #1977ba; border-top: 2px dotted #1977ba; margin: auto;"></div>

        <div class="line-left" style=" padding: 0px 0px 0px 7px; background-color: #ffffff; height: 45px;width: 16px; margin-top: -2px;  float: left;">
            <div class="line" style="color: #1977ba;  border-left: 2px dotted #1977ba;   margin: auto; height: 100%; position: relative; display: block;">
                <div class="arrow-down" style=" width: 0px;   height: 0px;   border-left: 20px solid transparent;   border-right: 20px solid transparent;  border-top: 20px solid #FFF; bottom: -18px;position: absolute; left: -21px;">
                </div>
            </div>
        </div>

        <div class="middle-container-left" style="display: block; position: relative; width: 47%; float: left; margin: auto; text-align: center;">
            <div class="line-middle" style="padding: 0px 0px 0px 7px;   background-color: #ffffff; height: 45px; width: 16px; margin-top: -2px; margin:-2px 29% auto auto; text-align: center;">
                <div class="line" style="color: #1977ba; border-left: 2px dotted #1977ba;  margin: auto; height: 100%; position: relative; display: block;">
                    <div class="arrow-down" style="width: 0px;   height: 0px;   border-left: 20px solid transparent; border-right: 20px solid transparent; border-top: 20px solid #FFF; bottom: -18px; position: absolute; left: -21px;">
                    </div>
                </div>
            </div>
        </div>          
        <div class="middle-container-right" style="display: block; position: relative; width: 48%; float: left; margin: auto; text-align: center;">
            <div class="line-middle-right" style="padding: 0px 0px 0px 7px; background-color: #ffffff; height: 45px; width: 16px; margin-top: -2px; margin: -2px auto auto 35%; text-align: center;">
                <div class="line" style="color: #1977ba; border-left: 2px dotted #1977ba; margin: auto;  height: 100%; position: relative; display: block;">
                    <div class="arrow-down" style="width: 0px; height: 0px;  border-left: 20px solid transparent; border-right: 20px solid transparent; border-top: 20px solid #FFF; bottom: -18px; position: absolute; left: -21px; ">
                    </div>
                </div>
            </div>
        </div>
        <div class="line-right" style="padding: 0px 0px 0px 7px;   background-color: #ffffff; height: 45px; width: 16px; margin-top: -2px; float: right; ">
            <div class="line" style="color: #1977ba; border-left: 2px dotted #1977ba; margin: auto; height: 100%; position: relative; display: block;">
                <div class="arrow-down" style="width: 0px;   height: 0px;   border-left: 20px solid transparent;   border-right: 20px solid transparent; border-top: 20px solid #FFF; bottom: -18px; position: absolute; left: -21px;">
                </div>   
            </div>
        </div>
    </div>
    <div class="clearfix">
    </div>
    <!-- END VIDEOS MENU-->
    <!-- BEGIN VIDEO LIST-->
    <div class="row init-row">
        <?php for ($i = 0; $i <= $max_count; $i++) : ?>

            <?php
            if (isset($acceptance[$i])) {
                echo $acceptance[$i];
            } else {
                echo '<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12"></div>';
            }
            ?>

        <?php endfor; ?>
    </div>
    <div class="clearfix">
    </div>
    <!-- END VIDEOS LIST-->
    <?php
}

add_shortcode('acceptance-videos', 'acceptance_videos_func');


/* +++ Billing +++ */

//-> [billing-content]
function billing_content_func($atts) {

    global $wpdb, $pmpro_msg, $pmpro_msgt, $pmpro_levels, $current_user, $levels;

    //-> If a member is logged in, show them some info here (1. past invoices. 2. billing information with button to update.)
    if ($current_user->membership_level->ID) {
        if ($pmpro_msg) {
            ?>
            <div class="pmpro_message <?php echo $pmpro_msgt ?>"><?php echo $pmpro_msg ?></div>
            <?php
        }
        ?>	
        <div class="row">
            <div class="col-md-8 col-sm-8 col-sm-offset-2 col-md-offset-2">
                <!-- BEGIN CONTENT-->
                <div id="pmpro_account">		
                    <div id="pmpro_account-membership" class="pmpro_box">
                        <p><?php _e("Your membership is <strong>active</strong>.", "pmpro"); ?></p>
                        <ul>
                            <li><strong><?php _e("Level", "pmpro"); ?>:</strong> <?php echo $current_user->membership_level->name ?></li>
                            <?php if ($current_user->membership_level->billing_amount > 0) { ?>
                                <li><strong><?php _e("Membership Fee", "pmpro"); ?>:</strong>
                                    <?php
                                    $level = $current_user->membership_level;
                                    if ($current_user->membership_level->cycle_number > 1) {
                                        printf(__('%s every %d %s.', 'pmpro'), pmpro_formatPrice($level->billing_amount), $level->cycle_number, pmpro_translate_billing_period($level->cycle_period, $level->cycle_number));
                                    } elseif ($current_user->membership_level->cycle_number == 1) {
                                        printf(__('%s per %s.', 'pmpro'), pmpro_formatPrice($level->billing_amount), pmpro_translate_billing_period($level->cycle_period));
                                    } else {
                                        echo pmpro_formatPrice($current_user->membership_level->billing_amount);
                                    }
                                    ?>
                                </li>
                            <?php } ?>						

                            <?php if ($current_user->membership_level->billing_limit) { ?>
                                <li><strong><?php _e("Duration", "pmpro"); ?>:</strong> <?php echo $current_user->membership_level->billing_limit . ' ' . sornot($current_user->membership_level->cycle_period, $current_user->membership_level->billing_limit) ?></li>
                            <?php } ?>

                            <?php if ($current_user->membership_level->enddate) { ?>
                                <li><strong><?php _e("Membership Expires", "pmpro"); ?>:</strong> <?php echo date_i18n(get_option('date_format'), $current_user->membership_level->enddate) ?></li>
                            <?php } ?>

                            <?php
                            if ($current_user->membership_level->trial_limit == 1) {
                                printf(__("Your first payment will cost %s.", "pmpro"), pmpro_formatPrice($current_user->membership_level->trial_amount));
                            } elseif (!empty($current_user->membership_level->trial_limit)) {
                                printf(__("Your first %d payments will cost %s.", "pmpro"), $current_user->membership_level->trial_limit, pmpro_formatPrice($current_user->membership_level->trial_amount));
                            }
                            ?>
                        </ul>

                    </div> <!-- end pmpro_account-membership -->

                    <div id="pmpro_account-profile" class="pmpro_box hide">	
                        <?php get_currentuserinfo(); ?> 
                        <h3><?php _e("My Account", "pmpro"); ?></h3>
                        <?php if ($current_user->user_firstname) { ?>
                            <p><?php echo $current_user->user_firstname ?> <?php echo $current_user->user_lastname ?></p>
                        <?php } ?>
                        <ul>
                            <li><strong><?php _e("Username", "pmpro"); ?>:</strong> <?php echo $current_user->user_login ?></li>
                            <li><strong><?php _e("Email", "pmpro"); ?>:</strong> <?php echo $current_user->user_email ?></li>
                        </ul>
                        <p>
                            <a href="<?php echo admin_url('profile.php') ?>"><?php _e("Edit Profile", "pmpro"); ?></a> |
                            <a href="<?php echo admin_url('profile.php') ?>"><?php _ex("Change Password", "As in 'change password'.", "pmpro"); ?></a>
                        </p>
                    </div> <!-- end pmpro_account-profile -->

                    <?php
                    //last invoice for current info
                    //$ssorder = $wpdb->get_row("SELECT *, UNIX_TIMESTAMP(timestamp) as timestamp FROM $wpdb->pmpro_membership_orders WHERE user_id = '$current_user->ID' AND membership_id = '" . $current_user->membership_level->ID . "' AND status = 'success' ORDER BY timestamp DESC LIMIT 1");				
                    $ssorder = new MemberOrder();
                    $ssorder->getLastMemberOrder();
                    $invoices = $wpdb->get_results("SELECT *, UNIX_TIMESTAMP(timestamp) as timestamp FROM $wpdb->pmpro_membership_orders WHERE user_id = '$current_user->ID' ORDER BY timestamp DESC LIMIT 6");
                    if (!empty($ssorder->id) && $ssorder->gateway != "check" && $ssorder->gateway != "paypalexpress" && $ssorder->gateway != "paypalstandard" && $ssorder->gateway != "twocheckout") {
                        //default values from DB (should be last order or last update)
                        $bfirstname = get_user_meta($current_user->ID, "pmpro_bfirstname", true);
                        $blastname = get_user_meta($current_user->ID, "pmpro_blastname", true);
                        $baddress1 = get_user_meta($current_user->ID, "pmpro_baddress1", true);
                        $baddress2 = get_user_meta($current_user->ID, "pmpro_baddress2", true);
                        $bcity = get_user_meta($current_user->ID, "pmpro_bcity", true);
                        $bstate = get_user_meta($current_user->ID, "pmpro_bstate", true);
                        $bzipcode = get_user_meta($current_user->ID, "pmpro_bzipcode", true);
                        $bcountry = get_user_meta($current_user->ID, "pmpro_bcountry", true);
                        $bphone = get_user_meta($current_user->ID, "pmpro_bphone", true);
                        $bemail = get_user_meta($current_user->ID, "pmpro_bemail", true);
                        $bconfirmemail = get_user_meta($current_user->ID, "pmpro_bconfirmemail", true);
                        $CardType = get_user_meta($current_user->ID, "pmpro_CardType", true);
                        $AccountNumber = hideCardNumber(get_user_meta($current_user->ID, "pmpro_AccountNumber", true), false);
                        $ExpirationMonth = get_user_meta($current_user->ID, "pmpro_ExpirationMonth", true);
                        $ExpirationYear = get_user_meta($current_user->ID, "pmpro_ExpirationYear", true);
                        ?>	

                        <div id="pmpro_account-billing" class="pmpro_box">
                            <h3><?php _e("Billing Information", "pmpro"); ?></h3>
                            <?php if (!empty($baddress1)) { ?>
                                <p>
                                    <strong><?php _e("Billing Address", "pmpro"); ?></strong><br />
                                    <?php echo $bfirstname . " " . $blastname ?>
                                    <br />		
                                    <?php echo $baddress1 ?><br />
                                    <?php if ($baddress2) echo $baddress2 . "<br />"; ?>
                                    <?php if ($bcity && $bstate) { ?>
                                        <?php echo $bcity ?>, <?php echo $bstate ?> <?php echo $bzipcode ?> <?php echo $bcountry ?>
                                    <?php } ?>                         
                                    <br />
                                    <?php echo formatPhone($bphone) ?>
                                </p>
                            <?php } ?>

                            <?php if (!empty($AccountNumber)) { ?>
                                <p>
                                    <strong><?php _e("Payment Method", "pmpro"); ?></strong><br />
                                    <?php echo $CardType ?>: <?php echo last4($AccountNumber) ?> (<?php echo $ExpirationMonth ?>/<?php echo $ExpirationYear ?>)
                                </p>
                            <?php } ?>

                            <?php
                            if ((isset($ssorder->status) && $ssorder->status == "success") && (isset($ssorder->gateway) && in_array($ssorder->gateway, array("authorizenet", "paypal", "stripe", "braintree", "payflow", "cybersource")))) {
                                ?>
                                <p><a href="<?php echo pmpro_url("billing", "") ?>"><?php _e("Edit Billing Information", "pmpro"); ?></a></p>
                                <?php
                            }
                            ?>
                        </div> <!-- end pmpro_account-billing -->				
                        <?php
                    }
                    ?>

                    <?php if (!empty($invoices)) { ?>
                        <div id="pmpro_account-invoices" class="pmpro_box">
                            <h3><?php _e("Past Invoices", "pmpro"); ?></h3>
                            <ul>
                                <?php
                                $count = 0;
                                foreach ($invoices as $invoice) {
                                    if ($count++ > 5)
                                        break;
                                    ?>
                                    <li><a href="<?php echo pmpro_url("invoice", "?invoice=" . $invoice->code) ?>"><?php echo date_i18n(get_option("date_format"), $invoice->timestamp) ?> (<?php echo pmpro_formatPrice($invoice->total) ?>)</a></li>
                                    <?php
                                }
                                ?>
                            </ul>
                            <?php if ($count == 6) { ?>
                                <p><a href="<?php echo pmpro_url("invoice"); ?>"><?php _e("View All Invoices", "pmpro"); ?></a></p>
                            <?php } ?>
                        </div> <!-- end pmpro_account-billing -->
                    <?php } ?>
                    <p class="help-block">We have the following subscriptions available for our site. To join, simply click on the <strong>Renew</strong> or <strong>Change Subscription</strong> button and then complete the registration details.</p>
                    <?php
                    getLevels();
                    ?>
                    <div id="pmpro_account-links" class="pmpro_box">
                        <h3><?php _e("Manage Membership", "pmpro"); ?></h3>
                        <ul>
                            <?php
                            do_action("pmpro_member_links_top");
                            ?>
                            <?php if ((isset($ssorder->status) && $ssorder->status == "success") && (isset($ssorder->gateway) && in_array($ssorder->gateway, array("authorizenet", "paypal", "stripe", "braintree", "payflow", "cybersource")))) { ?>
                                <li><a href="<?php echo pmpro_url("billing", "", "https") ?>"><?php _e("Update Billing Information", "pmpro"); ?></a></li>
                            <?php } ?>
                            <?php if (count($pmpro_levels) > 1 && !defined("PMPRO_DEFAULT_LEVEL")) { ?>
                                <li><a href="<?php echo pmpro_url("levels") ?>"> <?php _e("Change Membership Level", "pmpro"); ?></a></li>
                            <?php } ?>
                            <li><a href="<?php echo pmpro_url("cancel") ?>" class="red"><?php _e("Cancel Membership", "pmpro"); ?></a></li>
                            <?php
                            do_action("pmpro_member_links_bottom");
                            ?>
                        </ul>
                    </div> <!-- end pmpro_account-links -->		
                </div> <!-- end pmpro_account -->	

                <!-- END CONTENT-->
            </div>
        </div>
        <?php
    }
    ?>
    <?php
}

function getLevels() {

    global $current_user;

    if ($current_user->ID)
        $current_user->membership_level = pmpro_getMembershipLevelForUser($current_user->ID);

    //is there a default level to redirect to?
    if (defined("PMPRO_DEFAULT_LEVEL"))
        $default_level = intval(PMPRO_DEFAULT_LEVEL);
    else
        $default_level = false;

    if ($default_level) {
        wp_redirect(pmpro_url("checkout", "?level=" . $default_level));
        exit;
    }

    global $wpdb, $pmpro_msg, $pmpro_msgt;
    if (isset($_REQUEST['msg'])) {
        if ($_REQUEST['msg'] == 1) {
            $pmpro_msg = __('Your membership status has been updated - Thank you!', 'pmpro');
        } else {
            $pmpro_msg = __('Sorry, your request could not be completed - please try again in a few moments.', 'pmpro');
            $pmpro_msgt = "pmpro_error";
        }
    } else {
        $pmpro_msg = false;
    }

    global $pmpro_levels;
    $pmpro_levels = pmpro_getAllLevels(false, true);
    $pmpro_levels = apply_filters("pmpro_levels_array", $pmpro_levels);
    if ($pmpro_msg) {
        ?>
        <div class="pmpro_message <?php echo $pmpro_msgt ?>"><?php echo $pmpro_msg ?></div>
        <?php
    }
    ?>

    <div id="main" class="site-main clr">
        <table id="pmpro_levels_table" class="pmpro_checkout">
            <thead>
                <tr>
                    <th><?php _e('Level', 'pmpro'); ?></th>
                    <th><?php _e('Price', 'pmpro'); ?></th>	
                    <th>&nbsp;</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $count = 0;
                foreach ($pmpro_levels as $level) {
                    if (isset($current_user->membership_level->ID))
                        $current_level = ($current_user->membership_level->ID == $level->id);
                    else
                        $current_level = false;
                    ?>
                    <tr class="<?php if ($count++ % 2 == 0) { ?>odd<?php } ?><?php if ($current_level == $level) { ?> active<?php } ?>">
                        <td><?php echo $current_level ? "<strong>{$level->name}</strong>" : $level->name ?></td>
                        <td>
                            <?php
                            if (pmpro_isLevelFree($level))
                                $cost_text = "<strong>Free</strong>";
                            else
                                $cost_text = pmpro_getLevelCost($level, true, true);
                            $expiration_text = pmpro_getLevelExpiration($level);
                            if (!empty($cost_text) && !empty($expiration_text))
                                echo $cost_text . "<br />" . $expiration_text;
                            elseif (!empty($cost_text))
                                echo $cost_text;
                            elseif (!empty($expiration_text))
                                echo $expiration_text;
                            ?>
                        </td>
                        <td>
                            <?php if (empty($current_user->membership_level->ID)) { ?>
                                <a class="pmpro_btn pmpro_btn-select" href="<?php echo pmpro_url("checkout", "?level=" . $level->id, "https") ?>"><?php _e('Sign Up', 'pmpro'); ?></a>
                            <?php } elseif (!$current_level) { ?>     
                                <!--
                                <a class="pmpro_btn pmpro_btn-select" href="<?php //echo pmpro_url("checkout", "?level=" . $level->id, "https")                         ?>"><?php //_e('Change Subscription', 'pmpro');                         ?></a>
                                -->
                                <a class="pmpro_btn pmpro_btn-select" href="<?php echo "/billing/subscription-checkout?level=" . $level->id; ?>"><?php _e('Change Subscription', 'pmpro'); ?></a>

                            <?php } elseif ($current_level) { ?>      

                                <?php
                                //if it's a one-time-payment level, offer a link to renew				
                                if (!pmpro_isLevelRecurring($current_user->membership_level) && !empty($current_user->membership_level->enddate)) {
                                    ?>
                                    <a class="pmpro_btn pmpro_btn-select" href="<?php echo pmpro_url("checkout", "?level=" . $level->id, "https") ?>"><?php _e('Renew', 'pmpro'); ?></a>
                                    <?php
                                } else {
                                    ?>
                                    <a class="pmpro_btn disabled" href="<?php echo pmpro_url("account") ?>"><?php _e('Your&nbsp;Level', 'pmpro'); ?></a>
                                    <?php
                                }
                                ?>

                            <?php } ?>
                        </td>
                    </tr>
                    <?php
                }
                ?>
            </tbody>
        </table>
        <nav id="nav-below" class="navigation" role="navigation">
            <div class="nav-previous alignleft">
                <?php if (!empty($current_user->membership_level->ID)) { ?>
                    <!--
                        <a href="<?php echo pmpro_url("account") ?>"><?php _e('&larr; Return to Your Account', 'pmpro'); ?></a>
                    -->
                <?php } else { ?>
                    <a href="<?php echo home_url() ?>"><?php _e('&larr; Return to Home', 'pmpro'); ?></a>
                <?php } ?>
            </div>
        </nav>
    </div>    
    <?php
}

add_shortcode('billing-content', 'billing_content_func');
/*+++ End Billing +++*/