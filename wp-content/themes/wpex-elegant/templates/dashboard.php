<?php
/**
 * Template Name: Dashboard
 *
 * @package WordPress
 * @subpackage Elegant WPExplorer Theme
 * @since Elegant 1.0
 */
get_header("dashboard");
?>
<!-- BEGIN CONTENT -->
<div class="page-content-wrapper">
    <div class="page-content">
        <div class="page-content-margin">
            <!-- BEGIN PAGE HEADER-->
            <!-- 
                <h3 class="page-title">Dashboard</h3>
                <div class="page-bar">
                    <ul class="page-breadcrumb">
                        <li>
                            <i class="fa fa-home"></i>
                            <a href="index.html">Home</a>
                            <i class="fa fa-angle-right"></i>
                        </li>
                        <li>
                            <a href="#">Dashboard</a>
                        </li>
                    </ul>
                   <div class="page-toolbar">
                       <div id="dashboard-report-range" class="tooltips btn btn-fit-height btn-sm green-haze btn-dashboard-daterange" data-container="body" data-placement="left" data-original-title="Change dashboard date range">
                           <i class="icon-calendar"></i>&nbsp;&nbsp; 
                           <i class="fa fa-angle-down"></i>
                         uncomment this to display selected daterange in the button 
                           &nbsp; <span class="thin uppercase visible-lg-inline-block"></span>&nbsp;
                           <i class="fa fa-angle-down"></i>
                       </div>
                   </div>
                </div>
            -->
            <!-- END PAGE HEADER-->
            <!-- BEGIN DASHBOARD CONTENT -->
            <?php while (have_posts()) : the_post(); ?>
                <?php if (has_post_thumbnail()) { ?>
                    <div class="page-thumbnail">
                        <img src="<?php echo wpex_get_featured_img_url(); ?>" alt="<?php echo esc_attr(the_title_attribute('echo=0')); ?>" />
                    </div><!-- .page-thumbnail -->
                <?php } ?>
                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <div class="entry clr">
                        <?php the_content(); ?>
                        <?php wp_link_pages(array('before' => '<div class="page-links clr">', 'after' => '</div>', 'link_before' => '<span>', 'link_after' => '</span>')); ?>
                    </div><!-- .entry-content -->
                    <footer class="entry-footer">
                        <?php edit_post_link(__('Edit Page', 'wpex'), '<span class="edit-link clr">', '</span>'); ?>
                    </footer><!-- .entry-footer -->
                </article><!-- #post -->
                <?php comments_template(); ?>
            <?php endwhile; ?>
            <!-- END DASHBOARD CONTENT -->
        </div>
    </div>
</div>
<!-- END CONTENT -->

<?php
get_footer('dashboard');
?>