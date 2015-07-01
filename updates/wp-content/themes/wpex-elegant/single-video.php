<?php
/**
 * The Template for displaying all single posts.
 *
 * @package WordPress
 * @subpackage Elegant WPExplorer Theme
 * @since Elegant 1.0
 */
get_header("dashboard");
global $wpdb, $pmpro_msg, $pmpro_msgt, $pmpro_levels, $current_user, $levels;
$return_membership_levels = pmpro_has_membership_access($post_id = $post->ID, $user_id = $current_user->ID, $return_membership_levels = true);
if (empty($return_membership_levels[2]) && $return_membership_levels[0]) {
    $hasaccess = FALSE;
} else {
    $hasaccess = $return_membership_levels[0];
}
if ($hasaccess) {
    ?>
    <!-- BEGIN CONTENT -->
    <div class="page-content-wrapper">
        <div class="page-content">
            <div class="row">
                <div class="col-md-8 col-sm-8 col-sm-offset-2 col-md-offset-2">
                    <!-- BEGIN PORTLET-->
                    <?php while (have_posts()) : the_post(); ?>
                        <?php $term_list = wp_get_post_terms($post->ID, 'categories', array("fields" => "all")); ?>
                        <?php
                        $class = "no-color";
                        $icon = "";
                        $text = "";
                        $category_link = "javascript:void(0)";
                        if (isset($term_list[0]->term_id)) {
                            $term_id = $term_list[0]->term_id;
                            if ($term_id == 17) {
                                //-> Acceptance
                                $class = "acceptance";
                                $icon = get_template_directory_uri() . "/assets/global/img/acceptance-color.png";
                                $text = "Acceptance";
                                $category_link = "/acceptance/";
                            }

                            if ($term_id == 14) {
                                //-> Getting Into Gear
                                $class = "getting-into-gear";
                                $icon = get_template_directory_uri() . "/assets/global/img/getting_into_gear_color.png";
                                $text = "Getting Into Gear";
                                $category_link = "/getting-into-gear/";
                            }

                            if ($term_id == 16) {
                                //-> Heading for the Finish
                                $class = "heading-for-the-finish";
                                $icon = get_template_directory_uri() . "/assets/global/img/heading_for_finish_color.png";
                                $text = " Heading for the Finish";
                                $category_link = "/heading-for-the-finish/";
                            }

                            if ($term_id == 15) {
                                //-> Navigating Turns 
                                $class = "navigating-turns";
                                $icon = get_template_directory_uri() . "/assets/global/img/navigating_turns_color.png";
                                $text = "Navigating Turns";
                                $category_link = "/navigating-turns/";
                            }
                        }
                        ?>

                        <?php //die(var_dump($term_list)); ?>

                        <div class="portlet light <?php echo $class; ?>">

                            <div class="portlet-title">
                                <div class="caption">
                                    <i class="icon-bar-chart font-green-sharp hide"></i>
                                    <span class="caption-subject uppercase"> <?php the_title(); ?></span>
                                    <span class="caption-helper">
                                        <?php
                                        //// Display post meta
                                        // See functions/commons.php
                                        wpex_post_meta();
                                        ?>
                                    </span>
                                </div>
                                <?php if (!empty($icon)): ?>
                                    <div class="actions">
                                        <div class="btn-group">
                                            <a class="icon-text" href="<?php echo $category_link; ?>" data-original-title="" title="">
                                                <img src="<?php echo $icon; ?>" alt="Icon">
                                            </a>
                                            <a class="title" href="<?php echo $category_link; ?>">
                                                <?php echo $text; ?>
                                            </a>
                                        </div>
                                    </div>
                                <?php endif; ?>
                            </div>

                            <div class="portlet-body">
                                <div class="entry clr">
                                    <?php the_content(); ?>
                                </div><!-- .entry -->
                                <div class="clearfix">
                                </div>
                                <div class="row margin-bottom-15">
                                    <div class="col-lg-8 col-md-8 col-sm-7 col-xs-12">
                                        <?php $video_description = get_field('video_description', $post_id = $post->ID); ?>
                                        <div class="video_description">
                                            <?php echo $video_description; ?>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-5 col-xs-12">
                                        <a class="video_downloads" href="#">
                                            <h5>DOWNLOADS</h5>
                                        </a>

                                        <?php if (pmpro_hasMembershipLevel(array(6, 7, 12, 14))): ?>
                                            <?php $white_papers = get_field('white_papers', $post_id = $post->ID); ?>

                                            <?php if ($white_papers): ?>
                                                <div class="btn-group border_bottom">
                                                    <a class="icon-text" href="<?php echo $white_papers; ?>" target="_blank" data-original-title="" title="">
                                                        <img src="<?php echo get_template_directory_uri() . "/assets/global/img/white-papers.png"; ?>" alt="Icon">
                                                    </a>
                                                    <a class="title" target="_blank" href="<?php echo $white_papers; ?>">
                                                        Guides                                 
                                                    </a>
                                                </div>
                                            <?php endif; ?>
                                        <?php endif; ?>

                                        <div class="btn-group">
                                            <a class="icon-text" href="<?php echo $category_link; ?>" data-original-title="" title="">
                                                <img src="<?php echo get_template_directory_uri() . "/assets/global/img/wacth-more.png"; ?>" alt="Icon">
                                            </a>
                                            <a class="title" href="<?php echo $category_link; ?>">
                                                Watch More                                  
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    <?php endwhile; ?>
                    <!-- END PORTLET-->
                </div>
            </div>
            <div class="row">
                <div class="col-md-8 col-sm-8 col-sm-offset-2 col-md-offset-2">
                    <p class="notice">
                        <?php wpex_copyright_dashboard(); ?>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- END CONTENT -->
    <?php
}else {
    ?>
    <!-- BEGIN MESSAGE -->
    <div class="page-content-wrapper">
        <div class="page-content">
            <div class="row">
                <div class="col-md-8 col-sm-8 col-sm-offset-2 col-md-offset-2">

                    <div class="portlet light">
                        <div class="portlet-body">
                            <div class="entry clr">
                                <?php $site_url = get_site_url(); ?>
                                <p>This content is for members only.<br /><a href="<?php echo $site_url; ?>/wp-login.php">Log In</a> <a href="<?php echo $site_url; ?>/wp-login.php?action=register">Register</a></p>
                            </div><!-- .entry -->
                            <div class="clearfix">
                            </div>
                        </div>
                    </div>
                    <!-- END PORTLET-->
                </div>
            </div>
            <div class="row">
                <div class="col-md-8 col-sm-8 col-sm-offset-2 col-md-offset-2">
                    <p class="notice">
                        <?php wpex_copyright_dashboard(); ?>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- END MESSAGE -->

    <?php
}
get_footer('dashboard');
?>