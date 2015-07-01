<?php
/**
 * Template Name: Account
 *
 * @package WordPress
 * @subpackage Elegant WPExplorer Theme
 * @since Elegant 1.0
 */
get_header();
?>

<div id="primary" class="content-area clr">
    <div id="content" class="site-content left-content clr" role="main">
        <header class="page-header clr">
            <h1 class="page-header-title"><?php the_title(); ?></h1>
        </header><!-- #page-header -->
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
        <?php endwhile; ?>
        <h1 class="page-header-title">My Videos</h1>
        <?php
        global $wpdb, $pmpro_msg, $pmpro_msgt, $pmpro_levels, $current_user, $levels;
        $type = 'video';
        $args = array(
            'post_type' => array($type, "post"),
            'post_status' => 'publish',
            'caller_get_posts' => 1
        );
        $my_query = null;
        $my_query = new WP_Query($args);

        //die(var_dump($return_membership_levels));

        if ($my_query->have_posts()) {
            while ($my_query->have_posts()) : $my_query->the_post();
                ?>
                <?php //die(var_dump($my_query)); ?>
                <?php $hasaccess = pmpro_has_membership_access($post_id = $post->ID, $user_id = $current_user->ID, $return_membership_levels = false); ?>
                <?php if ($hasaccess): ?>
                    <p><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></p>
                    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                        <div class="entry clr">
                            <?php the_content(); ?>
                            <?php wp_link_pages(array('before' => '<div class="page-links clr">', 'after' => '</div>', 'link_before' => '<span>', 'link_after' => '</span>')); ?>
                        </div><!-- .entry-content -->
                    </article><!-- #post -->
                <?php endif; ?>
                <?php
            endwhile;
        }
        wp_reset_query();  // Restore global post data stomped by the_post().
        ?>

    </div><!-- #content -->
    <?php get_sidebar("account"); ?>
</div><!-- #primary -->

<?php get_footer(); ?>