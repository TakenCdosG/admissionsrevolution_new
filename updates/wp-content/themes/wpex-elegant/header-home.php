<?php
/**
 * The Header for our theme.
 *
 * @package WordPress
 * @subpackage Elegant WPExplorer Theme
 * @since Elegant 1.0
 */
$postid = get_the_ID();
$thumbnail = $src = wp_get_attachment_image_src(get_post_thumbnail_id($postid), "full");
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta name="viewport" content="width=device-width">
        <title><?php wp_title('|', true, 'right'); ?><?php bloginfo('name'); ?></title>
        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
        <?php if (get_theme_mod('wpex_custom_favicon')) { ?>
            <link rel="shortcut icon" href="<?php echo get_theme_mod('wpex_custom_favicon'); ?>" />
        <?php } ?>
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/splash.css" type="text/css" media="screen">
        <script src="//use.typekit.net/khy2liq.js"></script>
        <script>try {
                Typekit.load();
            } catch (e) {
            }</script>
        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?> background-image="url(<?php echo $thumbnail[0]; ?>)" style="background-image:''; background-repeat: no-repeat; background-position: right top; background-size: cover;">
        <div id="wrap">
            <div id="main-home" class="site-main">