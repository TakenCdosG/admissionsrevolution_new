<?php
/**
 * Template Name: Homepage
 *
 * @package WordPress
 * @subpackage Elegant WPExplorer Theme
 * @since Elegant 1.0
 */
get_header('home');
$postid = get_the_ID();
$thumbnail = $src = wp_get_attachment_image_src(get_post_thumbnail_id($postid), "full");
?>

<div id="page-wrap">
    <table id="home-content" background-image="url(<?php echo $thumbnail[0]; ?>)" style="background-image:url(); background-repeat: no-repeat; background-position: right top; background-size: cover;">
        <tr>
            <td class="td-content-left">
                <div class="content-left">
                    <div id="header-wrap" class="fixed-header">
                        <header id="header" class="site-header clr" role="banner">
                            <?php
                            // Outputs the site logo
                            // See functions/logo.php
                            wpex_logo();
                            ?>
                        </header><!-- #header -->
                    </div><!-- #header-wrap -->
                    <?php while (have_posts()) : the_post(); ?>
                        <article class="homepage-wrap clr">
                            <?php /**
                              Post Content
                             * */ ?>
                            <?php if (get_the_content() !== '') { ?>
                                <div id="homepage-content" class="entry clr">
                                    <?php the_content(); ?>
                                </div><!-- .entry-content -->
                            <?php } ?>
                            <?php
                            /**
                              Features
                             * */
                            $wpex_query = new WP_Query(
                                    array(
                                'order' => 'ASC',
                                'orderby' => 'menu_order',
                                'post_type' => 'features',
                                'posts_per_page' => '-1',
                                'no_found_rows' => true,
                                    )
                            );
                            if ($wpex_query->posts) {
                                ?>
                                <div id="homepage-features" class="clr">
                                    <?php $wpex_count = 0; ?>
                                    <?php foreach ($wpex_query->posts as $post) : setup_postdata($post); ?>
                                        <?php $wpex_count++; ?>
                                        <?php get_template_part('content-features', get_post_format()); ?>
                                        <?php if ($wpex_count == '4') { ?>
                                            <?php $wpex_count = 0; ?>
                                        <?php } ?>
                                    <?php endforeach; ?>
                                </div><!-- #homepage-features -->
                            <?php } ?>
                            <?php wp_reset_postdata(); ?>
                        </article><!-- #post -->
                    <?php endwhile; ?>
                    <div id="copyright" role="contentinfo" class="clr">
                        <?php
                        // Displays copyright info
                        // See functions/copyright.php
                        wpex_copyright();
                        ?>
                    </div><!-- #copyright -->
                </div>
            </td>
            <td class="td-content-right" background-image="url(<?php echo $thumbnail[0]; ?>)" style="background-image:url(<?php echo $thumbnail[0]; ?>); background-repeat: no-repeat; background-position: right top; background-size: cover;">
                <div class="content-right">
                    <?php //echo get_the_post_thumbnail($postid, 'full'); ?>
                </div>
            </td>
        </tr>
    </table>
</div>



<?php get_footer('home'); ?>