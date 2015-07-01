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
        'posts_per_page' => '-1',
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

            $video_custom_thumbnail = get_field('video_custom_thumbnail', $post_id = $post->ID);
            if (!empty($video_custom_thumbnail)) {
                $video_thumbnail_url = $video_custom_thumbnail;
            } else {
                $video_thumbnail_url = get_field('video_thumbnail', $post_id = $post->ID);
            }

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

            $return_membership_levels = pmpro_has_membership_access($post_id = $post->ID, $user_id = $current_user->ID, $return_membership_levels = true);
            if (empty($return_membership_levels[2]) && $return_membership_levels[0]) {
                $hasaccess = FALSE;
            } else {
                $hasaccess = $return_membership_levels[0];
            }
            //hasaccess = pmpro_has_membership_access($post_id = $post->ID, $user_id = $current_user->ID, $return_membership_levels = true);
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
        'posts_per_page' => '-1',
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

            $video_custom_thumbnail = get_field('video_custom_thumbnail', $post_id = $post->ID);
            if (!empty($video_custom_thumbnail)) {
                $video_thumbnail_url = $video_custom_thumbnail;
            } else {
                $video_thumbnail_url = get_field('video_thumbnail', $post_id = $post->ID);
            }

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
            $return_membership_levels = pmpro_has_membership_access($post_id = $post->ID, $user_id = $current_user->ID, $return_membership_levels = true);
            if (empty($return_membership_levels[2]) && $return_membership_levels[0]) {
                $hasaccess = FALSE;
            } else {
                $hasaccess = $return_membership_levels[0];
            }
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
        'posts_per_page' => '-1',
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

            $video_custom_thumbnail = get_field('video_custom_thumbnail', $post_id = $post->ID);
            if (!empty($video_custom_thumbnail)) {
                $video_thumbnail_url = $video_custom_thumbnail;
            } else {
                $video_thumbnail_url = get_field('video_thumbnail', $post_id = $post->ID);
            }

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
            $return_membership_levels = pmpro_has_membership_access($post_id = $post->ID, $user_id = $current_user->ID, $return_membership_levels = true);
            if (empty($return_membership_levels[2]) && $return_membership_levels[0]) {
                $hasaccess = FALSE;
            } else {
                $hasaccess = $return_membership_levels[0];
            }
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
        'posts_per_page' => '-1',
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

            $video_custom_thumbnail = get_field('video_custom_thumbnail', $post_id = $post->ID);
            if (!empty($video_custom_thumbnail)) {
                $video_thumbnail_url = $video_custom_thumbnail;
            } else {
                $video_thumbnail_url = get_field('video_thumbnail', $post_id = $post->ID);
            }

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
            $return_membership_levels = pmpro_has_membership_access($post_id = $post->ID, $user_id = $current_user->ID, $return_membership_levels = true);
            if (empty($return_membership_levels[2]) && $return_membership_levels[0]) {
                $hasaccess = FALSE;
            } else {
                $hasaccess = $return_membership_levels[0];
            }
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
        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
            <div class="easy-pie-chart">
                <div class="number transactions" data-percent="55">
                    <a href="/getting-into-gear/">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/global/img/getting_into_gear_color.png" alt="" class=""/>
                    </a>
                </div>
                <a class="title" href="#">
                    Getting Into Gear
                </a>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
            <div class="easy-pie-chart">
                <div class="number visits" data-percent="85">
                    <a href="/navigating-turns/">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/global/img/navigating_turns_color.png" alt="" class=""/>
                    </a>
                </div>
                <a class="title" href="#">
                    Navigating Turns 
                </a>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
            <div class="easy-pie-chart">
                <div class="number bounce" data-percent="46">
                    <a href="/heading-for-the-finish/">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/global/img/heading_for_finish_color.png" alt="" class=""/>
                    </a>
                </div>
                <a class="title" href="#">
                    Heading for the Finish
                </a>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
            <div class="easy-pie-chart">
                <div class="number bounce" data-percent="46">
                    <a href="/acceptance/">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/global/img/acceptance-color.png" alt="" class=""/>
                    </a>
                </div>
                <a class="title" href="#">
                    Acceptance
                </a>
            </div>
        </div>
    </div>
    <div class="clearfix">
    </div>
    <div class="dashboard-page-bar" >
        <div class="line-full-width" ></div>

        <div class="line-container-left" >
            <div class="line" >
                <div class="arrow-down" >
                </div>
            </div>
        </div>

        <div class="middle-container-left" >
            <div class="line-middle" >
                <div class="line" >
                    <div class="arrow-down" >
                    </div>
                </div>
            </div>
        </div>          
        <div class="middle-container-right" >
            <div class="line-middle-right" >
                <div class="line" >
                    <div class="arrow-down" >
                    </div>
                </div>
            </div>
        </div>
        <div class="line-container-right" >
            <div class="line" >
                <div class="arrow-down" >
                </div>   
            </div>
        </div>
    </div>
    <div class="clearfix">
    </div>
    <!-- END VIDEOS MENU-->
    <!-- BEGIN VIDEO LIST-->
    <?php if ($max_count > 0): ?>

        <?php $print_empty_gig = FALSE; ?>
        <?php $print_empty_nt = FALSE; ?>
        <?php $print_empty_hf = FALSE; ?>
        <?php $print_empty_a = FALSE; ?>

        <?php $count_gig = count($getting_into_gear); ?>
        <?php $count_nt = count($navigating_turns); ?>
        <?php $count_hf = count($heading_finish); ?>
        <?php $count_a = count($acceptance); ?>

        <?php for ($i = 0; $i <= $max_count; $i++) : ?>
            <div class="row <?php if ($i == 0): ?> init-row <?php else: ?>normal-row <?php endif; ?>">
                <?php
                if ($count_gig > 0) {

                    if (isset($getting_into_gear[$i])) {
                        echo $getting_into_gear[$i];
                    } else {
                        echo '<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12"></div>';
                    }
                } else {

                    if (!$print_empty_gig) {
                        echo '<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12"><a class="dashboard-stat getting-into-gear dashboard-stat-light blue-soft" href="javascript:void(0);"><p>There are no videos yet for this Subscription plan on this category. <span class="meta-date-text">Check back soon!</span> </p> </a> </div>';
                        $print_empty_gig = TRUE;
                    } else {
                        echo '<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12"></div>';
                    }
                }
                ?>

                <?php
                if ($count_nt > 0) {
                    if (isset($navigating_turns[$i])) {
                        echo $navigating_turns[$i];
                    } else {
                        echo '<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12"></div>';
                    }
                } else {

                    if (!$print_empty_nt) {
                        echo '<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12"> <a class="dashboard-stat navigating-turns dashboard-stat-light blue-soft" href="javascript:void(0);"><p>There are no videos yet for this Subscription plan on this category. <span class="meta-date-text">Check back soon!</span> </p></a> </div>';
                        $print_empty_nt = TRUE;
                    } else {
                        echo '<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12"></div>';
                    }
                }
                ?>

                <?php
                if ($count_hf > 0) {
                    if (isset($heading_finish[$i])) {
                        echo $heading_finish[$i];
                    } else {
                        echo '<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12"></div>';
                    }
                } else {

                    if (!$print_empty_hf) {
                        echo '<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12"><a class="dashboard-stat heading-for-the-finish dashboard-stat-light blue-soft" href="javascript:void(0);"> <p>There are no videos yet for this Subscription plan on this category. <span class="meta-date-text">Check back soon!</span>  </p> </a> </div>';
                        $print_empty_hf = TRUE;
                    } else {
                        echo '<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12"></div>';
                    }
                }
                ?>

                <?php
                if ($count_a > 0) {
                    if (isset($acceptance[$i])) {
                        echo $acceptance[$i];
                    } else {
                        echo '<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12"></div>';
                    }
                } else {

                    if (!$print_empty_a) {
                        echo '<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12"> <a class="dashboard-stat acceptance dashboard-stat-light blue-soft" href="javascript:void(0);"><p>There are no videos yet for this Subscription plan on this category. <span class="meta-date-text">Check back soon!</span> </p> </a> </div>';
                        $print_empty_a = TRUE;
                    } else {
                        echo '<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12"></div>';
                    }
                }
                ?>

            </div>

            <div class="clearfix">
            </div>

        <?php endfor; ?>

    <?php else: ?>

        <div class="row init-row">
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <a class="dashboard-stat getting-into-gear dashboard-stat-light blue-soft" href="javascript:void(0);">
                    <p> 
                        There are no videos yet for this Subscription plan on this category. <span class="meta-date-text">Check back soon!</span> 
                    </p>
                </a>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <a class="dashboard-stat navigating-turns dashboard-stat-light blue-soft" href="javascript:void(0);">
                    <p> 
                        There are no videos yet for this Subscription plan on this category. <span class="meta-date-text">Check back soon!</span> 
                    </p>
                </a>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <a class="dashboard-stat heading-for-the-finish dashboard-stat-light blue-soft" href="javascript:void(0);">
                    <p> 
                        There are no videos yet for this Subscription plan on this category. <span class="meta-date-text">Check back soon!</span> 
                    </p>
                </a>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <a class="dashboard-stat acceptance dashboard-stat-light blue-soft" href="javascript:void(0);">
                    <p> 
                        There are no videos yet for this Subscription plan on this category. <span class="meta-date-text">Check back soon!</span> 
                    </p>
                </a>
            </div>
        </div>

        <div class="clearfix">
        </div>

    <?php endif; ?>

    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <p class="notice">
                <?php wpex_copyright_dashboard(); ?>
            </p>
        </div>
    </div>

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
        'posts_per_page' => '-1',
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

            $video_custom_thumbnail = get_field('video_custom_thumbnail', $post_id = $post->ID);
            if (!empty($video_custom_thumbnail)) {
                $video_thumbnail_url = $video_custom_thumbnail;
            } else {
                $video_thumbnail_url = get_field('video_thumbnail', $post_id = $post->ID);
            }

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
            $return_membership_levels = pmpro_has_membership_access($post_id = $post->ID, $user_id = $current_user->ID, $return_membership_levels = true);
            if (empty($return_membership_levels[2]) && $return_membership_levels[0]) {
                $hasaccess = FALSE;
            } else {
                $hasaccess = $return_membership_levels[0];
            }
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
        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
            <div class="easy-pie-chart">
                <div class="number transactions" data-percent="55">
                    <a href="<?php get_home_url(); ?>/getting-into-gear/">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/global/img/getting_into_gear_color.png" alt="" class=""/>
                    </a>
                </div>
                <a class="title" href="#">
                    Getting Into Gear
                </a>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
            <div class="easy-pie-chart opacity">
                <div class="number visits" data-percent="85">
                    <a href="<?php get_home_url(); ?>/navigating-turns/">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/global/img/navigating_turns_color.png" alt="" class=""/>
                    </a>
                </div>
                <a class="title" href="#">
                    Navigating Turns 
                </a>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
            <div class="easy-pie-chart opacity">
                <div class="number bounce" data-percent="46">
                    <a href="<?php get_home_url(); ?>/heading-for-the-finish/">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/global/img/heading_for_finish_color.png" alt="" class=""/>
                    </a>
                </div>
                <a class="title" href="#">
                    Heading for the Finish
                </a>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
            <div class="easy-pie-chart opacity">
                <div class="number bounce" data-percent="46">
                    <a href="<?php get_home_url(); ?>/acceptance/">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/global/img/acceptance-color.png" alt="" class=""/>
                    </a>
                </div>
                <a class="title" href="#">
                    Acceptance
                </a>
            </div>
        </div>
    </div>
    <div class="clearfix">
    </div>
    <div class="dashboard-page-bar" >
        <div class="line-full-width" ></div>

        <div class="line-container-left" >
            <div class="line" >
                <div class="arrow-down" >
                </div>
            </div>
        </div>

        <div class="middle-container-left" >
            <div class="line-middle" >
                <div class="line" >
                    <div class="arrow-down" >
                    </div>
                </div>
            </div>
        </div>          
        <div class="middle-container-right" >
            <div class="line-middle-right" >
                <div class="line" >
                    <div class="arrow-down" >
                    </div>
                </div>
            </div>
        </div>
        <div class="line-container-right" >
            <div class="line" >
                <div class="arrow-down" >
                </div>   
            </div>
        </div>
    </div>
    <div class="clearfix">
    </div>
    <!-- END VIDEOS MENU-->
    <!-- BEGIN VIDEO LIST--> 
    <div class="row init-row">
        <?php if ($max_count > 0): ?>
            <?php $row = 1; ?>
            <?php for ($i = 0; $i <= $max_count; $i++) : ?>
                <?php
                if (isset($getting_into_gear[$i])) {
                    if ($row == 1) {
                        echo '<div class="row">';
                    }
                    echo $getting_into_gear[$i];
                    if ($row >= 4 || $i == $max_count) {
                        echo '</div>';
                        $row = 0;
                    }
                    $row = $row + 1;
                }
                ?>
            <?php endfor; ?> 
        <?php else: ?>
            <div class="col-lg-12 col-md-12 col-sm-6 col-xs-12">
                <a class="dashboard-stat getting-into-gear dashboard-stat-light blue-soft" href="javascript:void(0);">
                    <p> 
                        There are no videos yet for this Subscription plan on this category. <span class="meta-date-text">Check back soon!</span> 
                    </p>
                </a>
            </div>
        <?php endif; ?>
    </div>
    <div class="clearfix">
    </div>
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <p class="notice">
                <?php wpex_copyright_dashboard(); ?>
            </p>
        </div>
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
        'posts_per_page' => '-1',
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

            $video_custom_thumbnail = get_field('video_custom_thumbnail', $post_id = $post->ID);
            if (!empty($video_custom_thumbnail)) {
                $video_thumbnail_url = $video_custom_thumbnail;
            } else {
                $video_thumbnail_url = get_field('video_thumbnail', $post_id = $post->ID);
            }

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
            $return_membership_levels = pmpro_has_membership_access($post_id = $post->ID, $user_id = $current_user->ID, $return_membership_levels = true);
            if (empty($return_membership_levels[2]) && $return_membership_levels[0]) {
                $hasaccess = FALSE;
            } else {
                $hasaccess = $return_membership_levels[0];
            }
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
        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
            <div class="easy-pie-chart opacity">
                <div class="number transactions" data-percent="55">
                    <a href="<?php get_home_url(); ?>/getting-into-gear/">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/global/img/getting_into_gear_color.png" alt="" class=""/>
                    </a>
                </div>
                <a class="title" href="#">
                    Getting Into Gear
                </a>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
            <div class="easy-pie-chart">
                <div class="number visits" data-percent="85">
                    <a href="<?php get_home_url(); ?>/navigating-turns/">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/global/img/navigating_turns_color.png" alt="" class=""/>
                    </a>
                </div>
                <a class="title" href="#">
                    Navigating Turns 
                </a>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
            <div class="easy-pie-chart opacity">
                <div class="number bounce" data-percent="46">
                    <a href="<?php get_home_url(); ?>/heading-for-the-finish/">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/global/img/heading_for_finish_color.png" alt="" class=""/>
                    </a>
                </div>
                <a class="title" href="#">
                    Heading for the Finish
                </a>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
            <div class="easy-pie-chart opacity">
                <div class="number bounce" data-percent="46">
                    <a href="<?php get_home_url(); ?>/acceptance/">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/global/img/acceptance-color.png" alt="" class=""/>
                    </a>
                </div>
                <a class="title" href="#">
                    Acceptance
                </a>
            </div>
        </div>
    </div>
    <div class="clearfix">
    </div>
    <div class="dashboard-page-bar" >
        <div class="line-full-width" ></div>

        <div class="line-container-left" >
            <div class="line" >
                <div class="arrow-down" >
                </div>
            </div>
        </div>

        <div class="middle-container-left" >
            <div class="line-middle" >
                <div class="line" >
                    <div class="arrow-down" >
                    </div>
                </div>
            </div>
        </div>          
        <div class="middle-container-right" >
            <div class="line-middle-right" >
                <div class="line" >
                    <div class="arrow-down" >
                    </div>
                </div>
            </div>
        </div>
        <div class="line-container-right" >
            <div class="line" >
                <div class="arrow-down" >
                </div>   
            </div>
        </div>
    </div>
    <div class="clearfix">
    </div>
    <!-- END VIDEOS MENU-->
    <!-- BEGIN VIDEO LIST-->
    <div class="row init-row">
        <?php if ($max_count > 0): ?>
            <?php $row = 1; ?>
            <?php for ($i = 0; $i <= $max_count; $i++) : ?>
                <?php
                if (isset($navigating_turns[$i])) {
                    if ($row == 1) {
                        echo '<div class="row">';
                    }
                    echo $navigating_turns[$i];
                    if ($row >= 4 || $i == $max_count) {
                        echo '</div>';
                        $row = 0;
                    }
                    $row = $row + 1;
                }
                ?>
            <?php endfor; ?> 
        <?php else: ?>
            <div class="col-lg-12 col-md-12 col-sm-6 col-xs-12">
                <a class="dashboard-stat navigating-turns dashboard-stat-light blue-soft" href="javascript:void(0);">
                    <p> 
                        There are no videos yet for this Subscription plan on this category. <span class="meta-date-text">Check back soon!</span> 
                    </p>
                </a>
            </div>
        <?php endif; ?>
    </div>
    <div class="clearfix">
    </div>
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <p class="notice">
                <?php wpex_copyright_dashboard(); ?>
            </p>
        </div>
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
        'posts_per_page' => '-1',
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

            $video_custom_thumbnail = get_field('video_custom_thumbnail', $post_id = $post->ID);
            if (!empty($video_custom_thumbnail)) {
                $video_thumbnail_url = $video_custom_thumbnail;
            } else {
                $video_thumbnail_url = get_field('video_thumbnail', $post_id = $post->ID);
            }

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
            $return_membership_levels = pmpro_has_membership_access($post_id = $post->ID, $user_id = $current_user->ID, $return_membership_levels = true);
            if (empty($return_membership_levels[2]) && $return_membership_levels[0]) {
                $hasaccess = FALSE;
            } else {
                $hasaccess = $return_membership_levels[0];
            }
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
        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
            <div class="easy-pie-chart opacity">
                <div class="number transactions" data-percent="55">
                    <a href="<?php get_home_url(); ?>/getting-into-gear/">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/global/img/getting_into_gear_color.png" alt="" class=""/>
                    </a>
                </div>
                <a class="title" href="#">
                    Getting Into Gear
                </a>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
            <div class="easy-pie-chart opacity">
                <div class="number visits" data-percent="85">
                    <a href="<?php get_home_url(); ?>/navigating-turns/">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/global/img/navigating_turns_color.png" alt="" class=""/>
                    </a>
                </div>
                <a class="title" href="#">
                    Navigating Turns 
                </a>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
            <div class="easy-pie-chart">
                <div class="number bounce" data-percent="46">
                    <a href="<?php get_home_url(); ?>/heading-for-the-finish/">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/global/img/heading_for_finish_color.png" alt="" class=""/>
                    </a>
                </div>
                <a class="title" href="#">
                    Heading for the Finish
                </a>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
            <div class="easy-pie-chart opacity">
                <div class="number bounce" data-percent="46">
                    <a href="<?php get_home_url(); ?>/acceptance/">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/global/img/acceptance-color.png" alt="" class=""/>
                    </a>
                </div>
                <a class="title" href="#">
                    Acceptance
                </a>
            </div>
        </div>
    </div>
    <div class="clearfix">
    </div>
    <div class="dashboard-page-bar" >
        <div class="line-full-width" ></div>

        <div class="line-container-left" >
            <div class="line" >
                <div class="arrow-down" >
                </div>
            </div>
        </div>

        <div class="middle-container-left" >
            <div class="line-middle" >
                <div class="line" >
                    <div class="arrow-down" >
                    </div>
                </div>
            </div>
        </div>          
        <div class="middle-container-right" >
            <div class="line-middle-right" >
                <div class="line" >
                    <div class="arrow-down" >
                    </div>
                </div>
            </div>
        </div>
        <div class="line-container-right" >
            <div class="line" >
                <div class="arrow-down" >
                </div>   
            </div>
        </div>
    </div>
    <div class="clearfix">
    </div>
    <!-- END VIDEOS MENU-->
    <!-- BEGIN VIDEO LIST-->
    <div class="row init-row">
        <?php if ($max_count > 0): ?>
            <?php $row = 1; ?>
            <?php for ($i = 0; $i <= $max_count; $i++) : ?>
                <?php
                if (isset($heading_finish[$i])) {
                    if ($row == 1) {
                        echo '<div class="row">';
                    }
                    echo $heading_finish[$i];
                    if ($row >= 4 || $i == $max_count) {
                        echo '</div>';
                        $row = 0;
                    }
                    $row = $row + 1;
                }
                ?>
            <?php endfor; ?> 
        <?php else: ?>
            <div class="col-lg-12 col-md-12 col-sm-6 col-xs-12">
                <a class="dashboard-stat heading-for-the-finish dashboard-stat-light blue-soft" href="javascript:void(0);">
                    <p> 
                        There are no videos yet for this Subscription plan on this category. <span class="meta-date-text">Check back soon!</span> 
                    </p>
                </a>
            </div>
        <?php endif; ?>
    </div>
    <div class="clearfix">
    </div>
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <p class="notice">
                <?php wpex_copyright_dashboard(); ?>
            </p>
        </div>
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
        'posts_per_page' => '-1',
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

            $video_custom_thumbnail = get_field('video_custom_thumbnail', $post_id = $post->ID);
            if (!empty($video_custom_thumbnail)) {
                $video_thumbnail_url = $video_custom_thumbnail;
            } else {
                $video_thumbnail_url = get_field('video_thumbnail', $post_id = $post->ID);
            }

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
            $return_membership_levels = pmpro_has_membership_access($post_id = $post->ID, $user_id = $current_user->ID, $return_membership_levels = true);
            if (empty($return_membership_levels[2]) && $return_membership_levels[0]) {
                $hasaccess = FALSE;
            } else {
                $hasaccess = $return_membership_levels[0];
            }
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
        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
            <div class="easy-pie-chart opacity">
                <div class="number transactions" data-percent="55">
                    <a href="<?php get_home_url(); ?>/getting-into-gear/">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/global/img/getting_into_gear_color.png" alt="" class=""/>
                    </a>
                </div>
                <a class="title" href="#">
                    Getting Into Gear
                </a>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
            <div class="easy-pie-chart opacity">
                <div class="number visits" data-percent="85">
                    <a href="<?php get_home_url(); ?>/navigating-turns/">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/global/img/navigating_turns_color.png" alt="" class=""/>
                    </a>
                </div>
                <a class="title" href="#">
                    Navigating Turns 
                </a>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
            <div class="easy-pie-chart opacity">
                <div class="number bounce" data-percent="46">
                    <a href="<?php get_home_url(); ?>/heading-for-the-finish/">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/global/img/heading_for_finish_color.png" alt="" class=""/>
                    </a>
                </div>
                <a class="title" href="#">
                    Heading for the Finish
                </a>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
            <div class="easy-pie-chart">
                <div class="number bounce" data-percent="46">
                    <a href="<?php get_home_url(); ?>/acceptance/">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/global/img/acceptance-color.png" alt="" class=""/>
                    </a>
                </div>
                <a class="title" href="#">
                    Acceptance
                </a>
            </div>
        </div>
    </div>
    <div class="clearfix">
    </div>
    <div class="dashboard-page-bar" >
        <div class="line-full-width" ></div>

        <div class="line-container-left" >
            <div class="line" >
                <div class="arrow-down" >
                </div>
            </div>
        </div>

        <div class="middle-container-left" >
            <div class="line-middle" >
                <div class="line" >
                    <div class="arrow-down" >
                    </div>
                </div>
            </div>
        </div>          
        <div class="middle-container-right" >
            <div class="line-middle-right" >
                <div class="line" >
                    <div class="arrow-down" >
                    </div>
                </div>
            </div>
        </div>
        <div class="line-container-right" >
            <div class="line" >
                <div class="arrow-down" >
                </div>   
            </div>
        </div>
    </div>
    <div class="clearfix">
    </div>
    <!-- END VIDEOS MENU-->
    <!-- BEGIN VIDEO LIST-->
    <div class="row init-row">
        <?php if ($max_count > 0): ?>
            <?php $row = 1; ?>
            <?php for ($i = 0; $i <= $max_count; $i++) : ?>
                <?php
                if (isset($acceptance[$i])) {
                    if ($row == 1) {
                        echo '<div class="row">';
                    }
                    echo $acceptance[$i];
                    if ($row >= 4 || $i == $max_count) {
                        echo '</div>';
                        $row = 0;
                    }
                    $row = $row + 1;
                }
                ?>
            <?php endfor; ?> 
        <?php else: ?>
            <div class="col-lg-12 col-md-12 col-sm-6 col-xs-12">
                <a class="dashboard-stat acceptance dashboard-stat-light blue-soft" href="javascript:void(0);">
                    <p> 
                        There are no videos yet for this Subscription plan on this category. <span class="meta-date-text">Check back soon!</span> 
                    </p>
                </a>
            </div>
        <?php endif; ?>
    </div>
    <div class="clearfix">
    </div>
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <p class="notice">
                <?php wpex_copyright_dashboard(); ?>
            </p>
        </div>
    </div>
    <!-- END VIDEOS LIST-->
    <?php
}

add_shortcode('acceptance-videos', 'acceptance_videos_func');

//-> [mandarin-videos]
function mandarin_videos_func($atts) {

    //-> ONLY Chinese Bundles. 
    if (pmpro_hasMembershipLevel(array(11, 12, 14))) {
        global $wpdb, $pmpro_msg, $pmpro_msgt, $pmpro_levels, $current_user, $levels;
        $type = 'video';
        $max_count = 0;

        /*
          +===================================+
          | BEGIN 'Mandarin'                  |
          +===================================+
         */
        $mandarin = array();
        $empty_mandarin = true;
        $args = array(
            'post_type' => array($type),
            'post_status' => 'publish',
            'posts_per_page' => '-1',
            'caller_get_posts' => 1,
            'tax_query' => array(
                array(
                    'taxonomy' => 'categories',
                    'field' => 'id',
                    'terms' => 19,
                ),
            ),
        );

        $mandarin_query = null;
        $mandarin_query = new WP_Query($args);

        if ($mandarin_query->have_posts()) {
            while ($mandarin_query->have_posts()) {
                $mandarin_query->the_post();
                $thumbnail = "";

                $video_custom_thumbnail = get_field('video_custom_thumbnail', $post_id = $post->ID);
                if (!empty($video_custom_thumbnail)) {
                    $video_thumbnail_url = $video_custom_thumbnail;
                } else {
                    $video_thumbnail_url = get_field('video_thumbnail', $post_id = $post->ID);
                }

                if (!empty($video_thumbnail_url)) {
                    $thumbnail = '<img src="' . $video_thumbnail_url . '" alt="" class="img-responsive">';
                }


                $col = '<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">'
                        . '<a class="dashboard-stat mandarin dashboard-stat-light blue-soft" href="' . get_the_permalink($post_id = $post->ID) . '">'
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
                $return_membership_levels = pmpro_has_membership_access($post_id = $post->ID, $user_id = $current_user->ID, $return_membership_levels = true);
                if (empty($return_membership_levels[2]) && $return_membership_levels[0]) {
                    $hasaccess = FALSE;
                } else {
                    $hasaccess = $return_membership_levels[0];
                }
                if ($hasaccess) {
                    $mandarin[] = $col;
                }
            }
        }
        $tmp = count($mandarin);
        if ($tmp > $max_count) {
            $max_count = $tmp;
        }
        wp_reset_query();
        ?>
        <!-- BEGIN VIDEOS MENU-->
        <div class="row top-category">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="easy-pie-chart">
                    <div class="number transactions" data-percent="55">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/global/img/AR_Mandarin_icon.png" alt="" class=""/>
                    </div>
                    <a class="title" href="#">
                        视频
                    </a>
                </div>
            </div>
        </div>
        <div class="clearfix">
        </div>
        <div class="dashboard-page-bar" >
            <div class="line-full-width" ></div>

            <div class="line-container-left" >
                <div class="line" >
                    <div class="arrow-down" >
                    </div>
                </div>
            </div>

            <div class="middle-container-left" >
                <div class="line-middle" >
                    <div class="line" >
                        <div class="arrow-down" >
                        </div>
                    </div>
                </div>
            </div>          
            <div class="middle-container-right" >
                <div class="line-middle-right" >
                    <div class="line" >
                        <div class="arrow-down" >
                        </div>
                    </div>
                </div>
            </div>
            <div class="line-container-right" >
                <div class="line" >
                    <div class="arrow-down" >
                    </div>   
                </div>
            </div>
        </div>
        <div class="clearfix">
        </div>
        <!-- END VIDEOS MENU-->
        <!-- BEGIN VIDEO LIST-->
        <div class="row init-row">
            <?php if ($max_count > 0): ?>
                <?php $row = 1; ?>
                <?php for ($i = 0; $i <= $max_count; $i++) : ?>
                    <?php
                    if (isset($mandarin[$i])) {
                        if ($row == 1) {
                            echo '<div class="row">';
                        }
                        echo $mandarin[$i];
                        if ($row >= 4 || $i == $max_count) {
                            echo '</div>';
                            $row = 0;
                        }
                        $row = $row + 1;
                    }
                    ?>
                <?php endfor; ?> 
            <?php else: ?>
                <div class="col-lg-12 col-md-12 col-sm-6 col-xs-12">
                    <a class="dashboard-stat mandarin dashboard-stat-light blue-soft" href="javascript:void(0);">
                        <p> 
                            There are no videos yet for this Subscription plan on this category. <span class="meta-date-text">Check back soon!</span> 
                        </p>
                    </a>
                </div>
            <?php endif; ?>
        </div>
    <?php }else { ?>
        <br>
        <div class="row top-category no-allow">
            <div class="col-lg-12 col-md-12 col-sm-6 col-xs-12">
                <p> 
                    This content is for <span class="meta-date-text">Premium</span> members only. Visit the site and log in/register.
                </p>
            </div>
        </div>
    <?php }; ?>
    <div class="clearfix">
    </div>
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <p class="notice">
                <?php wpex_copyright_dashboard(); ?>
            </p>
        </div>
    </div>
    <!-- END VIDEOS LIST-->
    <?php
}

add_shortcode('mandarin-videos', 'mandarin_videos_func');

//-> [bundles-and-bonuses-videos]
function bundlesandbonuses_videos_func($atts) {

    //-> ONLY premium. 
    if (pmpro_hasMembershipLevel(array(6, 7, 12, 14))) {
        global $wpdb, $pmpro_msg, $pmpro_msgt, $pmpro_levels, $current_user, $levels;
        $type = 'video';
        $max_count = 0;

        /*
          +===================================+
          | BEGIN 'Mandarin'                  |
          +===================================+
         */
        $bundlesandbonuses = array();
        $empty_bundlesandbonuses = true;
        $args = array(
            'post_type' => array($type),
            'post_status' => 'publish',
            'posts_per_page' => '-1',
            'caller_get_posts' => 1,
            'tax_query' => array(
                array(
                    'taxonomy' => 'categories',
                    'field' => 'id',
                    'terms' => 20,
                ),
            ),
        );

        $bundlesandbonuses_query = null;
        $bundlesandbonuses_query = new WP_Query($args);

        if ($bundlesandbonuses_query->have_posts()) {
            while ($bundlesandbonuses_query->have_posts()) {
                $bundlesandbonuses_query->the_post();
                $thumbnail = "";

                $video_custom_thumbnail = get_field('video_custom_thumbnail', $post_id = $post->ID);
                if (!empty($video_custom_thumbnail)) {
                    $video_thumbnail_url = $video_custom_thumbnail;
                } else {
                    $video_thumbnail_url = get_field('video_thumbnail', $post_id = $post->ID);
                }

                if (!empty($video_thumbnail_url)) {
                    $thumbnail = '<img src="' . $video_thumbnail_url . '" alt="" class="img-responsive">';
                }


                $col = '<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">'
                        . '<a class="dashboard-stat bundlesandbonuses dashboard-stat-light blue-soft" href="' . get_the_permalink($post_id = $post->ID) . '">'
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
                $return_membership_levels = pmpro_has_membership_access($post_id = $post->ID, $user_id = $current_user->ID, $return_membership_levels = true);
                if (empty($return_membership_levels[2]) && $return_membership_levels[0]) {
                    $hasaccess = FALSE;
                } else {
                    $hasaccess = $return_membership_levels[0];
                }
                if ($hasaccess) {
                    $bundlesandbonuses[] = $col;
                }
            }
        }
        $tmp = count($bundlesandbonuses);
        if ($tmp > $max_count) {
            $max_count = $tmp;
        }
        wp_reset_query();
        ?>
        <!-- BEGIN VIDEOS MENU-->
        <div class="row top-category">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="easy-pie-chart">
                    <div class="number transactions" data-percent="55">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/global/img/AR_bundles_icon.png" alt="" class=""/>
                    </div>
                    <a class="title" href="#">
                        Bundles & Bonuses
                    </a>
                </div>
            </div>
        </div>
        <div class="clearfix">
        </div>
        <div class="dashboard-page-bar" >
            <div class="line-full-width" ></div>

            <div class="line-container-left" >
                <div class="line" >
                    <div class="arrow-down" >
                    </div>
                </div>
            </div>

            <div class="middle-container-left" >
                <div class="line-middle" >
                    <div class="line" >
                        <div class="arrow-down" >
                        </div>
                    </div>
                </div>
            </div>          
            <div class="middle-container-right" >
                <div class="line-middle-right" >
                    <div class="line" >
                        <div class="arrow-down" >
                        </div>
                    </div>
                </div>
            </div>
            <div class="line-container-right" >
                <div class="line" >
                    <div class="arrow-down" >
                    </div>   
                </div>
            </div>
        </div>
        <div class="clearfix">
        </div>
        <!-- END VIDEOS MENU-->
        <!-- BEGIN VIDEO LIST-->
        <div class="row init-row">
            <?php if ($max_count > 0): ?>
                <?php $row = 1; ?>
                <?php for ($i = 0; $i <= $max_count; $i++) : ?>
                    <?php
                    if (isset($bundlesandbonuses[$i])) {
                        if ($row == 1) {
                            echo '<div class="row">';
                        }
                        echo $bundlesandbonuses[$i];
                        if ($row >= 4 || $i == $max_count) {
                            echo '</div>';
                            $row = 0;
                        }
                        $row = $row + 1;
                    }
                    ?>
                <?php endfor; ?> 
            <?php else: ?>
                <div class="col-lg-12 col-md-12 col-sm-6 col-xs-12">
                    <a class="dashboard-stat bundlesandbonuses dashboard-stat-light blue-soft" href="javascript:void(0);">
                        <p> 
                            There are no videos yet for this Subscription plan on this category. <span class="meta-date-text">Check back soon!</span> 
                        </p>
                    </a>
                </div>
            <?php endif; ?>
        </div>
    <?php }else { ?>
        <br>
        <div class="row top-category no-allow">
            <div class="col-lg-12 col-md-12 col-sm-6 col-xs-12">
                <p> 
                    This content is for <span class="meta-date-text">Premium</span> members only. Visit the site and log in/register.
                </p>
            </div>
        </div>
    <?php }; ?>
    <div class="clearfix">
    </div>
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <p class="notice">
                <?php wpex_copyright_dashboard(); ?>
            </p>
        </div>
    </div>
    <!-- END VIDEOS LIST-->
    <?php
}

add_shortcode('bundles-and-bonuses-videos', 'bundlesandbonuses_videos_func');


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
        <div class="row billing-content">
            <div class="col-md-8 col-sm-8 col-sm-offset-3 col-md-offset-3">
                <!-- BEGIN CONTENT-->
                <div id="pmpro_account">		
                    <div id="pmpro_account-membership" class="pmpro_box-first">

                        <?php //wpex_logo();     ?>
                        <!--
                        <div class="clear clearfix"></div>
                        <br/>
                        -->
                        <?php $level = $current_user->membership_level->name; ?>
                        <p><?php _e("Membership status: <strong>" . $level . "</strong>", "pmpro"); ?></p>
                        <?php //die(var_dump($current_user));    ?>
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
                                <li><strong><?php _e("Next billing date", "pmpro"); ?>:</strong> <?php echo date_i18n(get_option('date_format'), $current_user->membership_level->enddate) ?></li>
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
                                    <?php echo $current_user->user_email; ?><br />
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
                            <?php //if ($count == 6) {   ?>
                            <p><a href="<?php echo pmpro_url("invoice"); ?>"><?php _e("View All Invoices", "pmpro"); ?></a></p>
                            <?php //}   ?>
                        </div> <!-- end pmpro_account-billing -->
                    <?php } ?>
                    <!--
                    <p class="help-block">We have the following subscriptions available for our site. To join, simply click on the <strong>Change Subscription</strong> button to Change Membership Level.</p>
                    -->                  
                    <?php
                    //getLevels();
                    ?>	
                </div> <!-- end pmpro_account -->	

                <!-- END CONTENT-->
            </div>
        </div>
        <?php
    }else {

        $user_id = $current_user->ID;

        //make sure we only run once a day
        $today = date("Y-m-d", current_time("timestamp"));

        //look for memberships that expired
        $sqlQuery = "SELECT mu.user_id, mu.membership_id, mu.startdate, mu.enddate FROM $wpdb->pmpro_memberships_users mu WHERE mu.status = 'expired' AND mu.enddate IS NOT NULL AND mu.enddate <> '' AND mu.enddate <> '0000-00-00 00:00:00' AND DATE(mu.enddate) <= '" . $today . "' AND mu.user_id = '" . $user_id . "' ORDER BY mu.enddate  LIMIT 1";

        $expired = $wpdb->get_results($sqlQuery);


        if (count($expired) > 0) {
            ?>
            <div class="row billing-content">
                <div class="col-md-8 col-sm-8 col-sm-offset-3 col-md-offset-3">
                    <!-- BEGIN CONTENT-->
                    <div id="pmpro_account">		
                        <div id="pmpro_account-membership" class="pmpro_box-first">
                            <?php
                            foreach ($expired as $e) {
                                $level_id = $e->membership_id;
                                $level = pmpro_getLevel($level_id);
                                ?>
                                <div class="pmpro_message">Your "<?php echo $level->name; ?>" Membership has expired, please renew now <a href="<?php echo pmpro_url("levels") ?>"><?php _e("here", "pmpro"); ?></a>.</div>
                                <div id="pmpro_account-membership" class="pmpro_box-first">
                                    <?php $level = $current_user->membership_level->name; ?>
                                    <p><?php _e("Membership status: <strong>" . $level->name . "(Expired)</strong>", "pmpro"); ?></p>
                                    <ul>
                                        <?php if ($e->enddate) { //die(var_dump($e->enddate));    ?>

                                            <li><strong><?php _e("Expiration billing date", "pmpro"); ?>:  </strong> <?php echo " " . date_i18n(get_option('date_format'), strtotime($e->enddate)) ?></li>
                                        <?php } ?>
                                    </ul>

                                </div> <!-- end pmpro_account-membership -->                               
                                <?php
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
            <?php
        }
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
        <div id="membership-wrapper"> 
            <?php
            $count = 0;
            $count_levels = count($pmpro_levels);
            $tmp = 0;
            foreach ($pmpro_levels as $level) {
                if (isset($current_user->membership_level->ID))
                    $current_level = ($current_user->membership_level->ID == $level->id);
                else
                    $current_level = false;
                ?>

                <?php $last = $count_levels - $tmp; ?>  
                <?php $tmp = $tmp + 1; ?>

                <div class="box-level <?php if ($count++ % 2 == 0) { ?>odd<?php } else { ?> even<?php } ?><?php if ($current_level == $level) { ?> active<?php } ?><?php if ($last == 2 || $last == 1) { ?> last-box<?php } ?>">
                    <h1><?php echo $current_level ? "<strong>{$level->name}</strong>" : $level->name ?></h1>
                    <div class="copy">
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
                    </div>
                    <div class="links">
                        <?php if (empty($current_user->membership_level->ID)) { ?>
                            <a class="pmpro_btn pmpro_btn-select sign-up" href="<?php echo pmpro_url("checkout", "?level=" . $level->id, "https") ?>"><?php _e('Sign Up', 'pmpro'); ?></a>
                        <?php } elseif (!$current_level) { ?>     
                            <!--
                            <a class="pmpro_btn pmpro_btn-select" href="<?php //echo pmpro_url("checkout", "?level=" . $level->id, "https")                                                                                                                                                                                                                                                                                   ?>"><?php //_e('Change Subscription', 'pmpro');                                                                                                                                                                                                                                                                                   ?></a>
                            -->
                            <a class="pmpro_btn pmpro_btn-select change-subscription" href="<?php echo "/billing/subscription-checkout?level=" . $level->id; ?>"><?php _e('Change Subscription', 'pmpro'); ?></a>
                        <?php } elseif ($current_level) { ?>      
                            <?php
                            //if it's a one-time-payment level, offer a link to renew				
                            if (!pmpro_isLevelRecurring($current_user->membership_level) && !empty($current_user->membership_level->enddate)) {
                                ?>
                                <a class="pmpro_btn pmpro_btn-select renew" href="<?php echo pmpro_url("checkout", "?level=" . $level->id, "https") ?>"><?php _e('Renew', 'pmpro'); ?></a>
                                <?php
                            } else {
                                ?>
                                <a class="pmpro_btn disabled your-current-level" href="<?php echo pmpro_url("account") ?>"><?php _e('Your&nbsp;Current&nbsp;Level', 'pmpro'); ?></a>
                                <?php
                            }
                            ?>
                        <?php } ?>
                    </div>
                </div>
                <?php
            }
            ?>
            <div class="clear clearfix"></div>
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
    </div>    

    <?php
}

add_shortcode('billing-content', 'billing_content_func');
/*+++ End Billing +++*/



