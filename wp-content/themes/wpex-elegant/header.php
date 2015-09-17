<?php
/**
 * The Header for our theme.
 *
 * @package WordPress
 * @subpackage Elegant WPExplorer Theme
 * @since Elegant 1.0
 */
$logo_img_collapse = get_theme_mod('wpex_logo_collapse');
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
        <?php if ($logo_img_collapse): ?>
            <link rel="icon" href="<?php echo $logo_img_collapse; ?>" type="image/x-png">
            <link rel="shortcut icon" href="<?php echo $logo_img_collapse; ?>" type="image/x-png">
        <?php endif; ?> 
        <script src="//use.typekit.net/khy2liq.js"></script>
        <script>try {
                Typekit.load();
            } catch (e) {
            }</script>
        <!-- Hotjar Tracking Code for admissionsrevolution.com -->
        <script>
            (function(h,o,t,j,a,r){
                h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
                h._hjSettings={hjid:76969,hjsv:5};
                a=o.getElementsByTagName('head')[0];
                r=o.createElement('script');r.async=1;
                r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
                a.appendChild(r);
            })(window,document,'//static.hotjar.com/c/hotjar-','.js?sv=');
        </script>
        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>

        <div id="wrap">
            <div id="header-wrap" class="clr fixed-header">
                <header id="header" class="site-header clr container" role="banner">
                    <?php
                    // Outputs the site logo
                    // See functions/logo.php
                    wpex_logo();
                    ?>
                    <div id="sidr-close"><a href="#sidr-close" class="toggle-sidr-close"></a></div>
                    <div id="site-navigation-wrap">
                        <a href="#sidr-main" id="navigation-toggle"><span class="fa fa-bars"></span></a>
                        <nav id="site-navigation" class="navigation main-navigation clr" role="navigation">
                            <?php
                            // Display main menu
                            wp_nav_menu(array(
                                'theme_location' => 'main_menu',
                                'sort_column' => 'menu_order',
                                'menu_class' => 'dropdown-menu sf-menu',
                                'fallback_cb' => false,
                                'walker' => new WPEX_Dropdown_Walker_Nav_Menu()
                            ));
                            ?>
                        </nav><!-- #site-navigation -->
                    </div><!-- #site-navigation-wrap -->
                    <?php $site_url = get_site_url(); ?>
                    <?php if (!is_user_logged_in()): ?>
                        <div class="login-singup-logout">
                            <ul id="login-singup-menu" class="">
                                <?php if (!is_page('login')): ?>
                                    <li id="menu-item-133" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-133"><a class="login" href="<?php echo $site_url; ?>/login">Log In</a></li>
                                <?php endif; ?>
                                <?php $link_url = $site_url . "/plans/"; ?>
                                <li id="menu-item-120" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-120"><a class="singup" href="<?php echo $link_url; ?>">SIGN UP</a></li>
                            </ul>
                        </div>
                    <?php else: ?>
                        <?php global $current_user; ?>
                        <?php get_currentuserinfo(); ?>
                        <div class="login-singup">
                            <ul id="login-singup-menu-top" class="login-singup-menu-top">
                                <li id="menu-item-120" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-120"><a class="user_login" href="<?php echo $site_url; ?>/my-profile/">Hello, <?php echo $current_user->user_login; ?></a></li>
                            </ul>
                            <ul id="login-singup-menu-bottom" class="login-singup-menu-bottom">
                                <li id="menu-item-133" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-133"><a class="Logout" href="<?php echo wp_logout_url(); ?>">Log Out</a></li>
                                <li id="menu-item-134" class="menu-separator"><span class="separator" href="<?php echo wp_logout_url(); ?>"> | </span></li> 
                                <li id="menu-item-120" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-120"><a class="singup" href="<?php echo $site_url; ?>/my-profile/">My Profile</a></li>
                                <li id="menu-item-134" class="menu-separator"><span class="separator" href="<?php echo wp_logout_url(); ?>"> | </span></li> 
                                <li id="menu-item-120" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-120"><a class="singup" href="<?php echo $site_url; ?>/all-videos/">My Videos</a></li>
                            </ul>
                        </div>
                    <?php endif; ?>
                </header><!-- #header -->
            </div><!-- #header-wrap -->
            <div id="main" class="site-main clr">