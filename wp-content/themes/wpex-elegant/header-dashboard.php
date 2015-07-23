<?php
/**
 * The Header for Admin Dashboard Template.
 *
 * @package WordPress
 * @subpackage Elegant WPExplorer Theme
 * @since Elegant 1.0
 */
$postid = get_the_ID();
$thumbnail = $src = wp_get_attachment_image_src(get_post_thumbnail_id($postid), "full");
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
        <?php wp_head(); ?>
    </head>
    <!-- BEGIN BODY -->
    <!-- <body <?php body_class("page-header-fixed page-sidebar-fixed page-sidebar-closed"); ?>>-->
    <body <?php body_class("page-boxed page-header-fixed page-sidebar-fixed page-sidebar-closed-hide-logo page-container-bg-solid page-sidebar-closed"); ?>>
        <?php $chinese_bundles = pmpro_hasMembershipLevel(array(11)); ?>
        <?php $chinese_premium = pmpro_hasMembershipLevel(array(14)); ?>
        <?php $pr_demo = pmpro_hasMembershipLevel(array(12)); ?>
        <!-- BEGIN HEADER -->
        <div class="page-header navbar navbar-fixed-top">
            <!-- BEGIN HEADER INNER -->
            <div class="page-header-inner">
                <!-- BEGIN LOGO -->
                <div class="page-logo">
                    <?php
                    $logo_img = get_theme_mod('wpex_logo');

                    $home_url = home_url();
                    ?>
                    <?php if ($logo_img || $logo_img_collapse): ?>
                        <a href="<?php echo $home_url; ?>" title="<?php echo $blog_name; ?>" rel="home">
                            <?php if ($logo_img): ?>
                                <img src="<?php echo $logo_img; ?>" alt="<?php echo $blog_name; ?>" class="logo-default hide logo-expanded"/>
                            <?php endif; ?> 
                            <?php if ($logo_img_collapse): ?>
                                <img src="<?php echo $logo_img_collapse; ?>" alt="<?php echo $blog_name; ?>" class="logo-default show logo-collapse"/>
                            <?php endif; ?> 
                        </a>
                    <?php endif; ?>

                    <div class="menu-toggler sidebar-toggler hide">
                        <!-- DOC: Remove the above "hide" to enable the sidebar toggler button on header -->

                    </div>
                </div>
                <!-- END LOGO -->
                <!-- BEGIN RESPONSIVE MENU TOGGLER -->
                <a href="javascript:;" class="menu-toggler responsive-toggler" id="menu-toggler-link">
                </a>
                <!-- END RESPONSIVE MENU TOGGLER -->
                <!-- BEGIN PAGE TOP -->
                <div class="page-top">
                    <!-- BEGIN HEADER SEARCH BOX -->
                    <!-- DOC: Apply "search-form-expanded" right after the "search-form" class to have half expanded search box -->
                    <form class="search-form search-form-expanded hide" action="extra_search.html" method="GET">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search..." name="query">
                            <span class="input-group-btn">
                                <a href="javascript:;" class="btn submit"><i class="icon-magnifier"></i></a>
                            </span>
                        </div>
                    </form>
                    <div id="sidr-close"><a href="#sidr-close" class="toggle-sidr-close"></a></div>
                    <!-- END HEADER SEARCH BOX -->
                    <!-- BEGIN TOP NAVIGATION MENU -->
                    <div class="page-actions col-sm-offset-2 col-md-offset-2">
                        <?php
                        // Display Dashboard Menu
                        $defaults = array(
                            'theme_location' => '',
                            'menu' => '',
                            'container' => 'div',
                            'container_class' => '',
                            'container_id' => 'menu-dashboard-container',
                            'menu_class' => 'menu_dashboard',
                            'menu_id' => '18',
                            'echo' => true,
                            'fallback_cb' => 'wp_page_menu',
                            'before' => '',
                            'after' => '',
                            'link_before' => '',
                            'link_after' => '',
                            'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                            'depth' => 0,
                            'walker' => ''
                        );
                        wp_nav_menu($defaults);
                        ?>
                        <!--
                        <div class="btn-logout">
                            <a class="singup" href="<?php echo wp_logout_url(); ?>">LOGOUT</a>
                        </div>
                        -->
                        <?php global $current_user; ?>
                        <?php get_currentuserinfo(); ?>
                        <div class="user_logged_in">
                            <ul id="login-singup-menu-top" class="login-singup-menu-top">
                                <li id="menu-item-120" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-120"><a class="user_login" href="<?php echo $site_url; ?>/my-profile/">Hello, <?php echo $current_user->user_login; ?></a></li>
                            </ul>
                            <ul id="login-singup-menu-bottom" class="login-singup-menu-bottom">
                                <li id="menu-item-133" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-133"><a class="Logout" href="<?php echo wp_logout_url(); ?>">Log Out</a></li>
                                <li id="menu-item-134" class="menu-separator"><span class="separator" style="line-height: 29px;"> | </span></li> 
                                <li id="menu-item-120" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-120"><a class="singup" href="<?php echo $site_url; ?>/my-profile/">My profile</a></li>
                                <li id="menu-item-134" class="menu-separator"><span class="separator" href="<?php echo wp_logout_url(); ?>"> | </span></li>
                                <li id="menu-item-120" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-120"><a class="singup" href="<?php echo $site_url; ?><?php echo ($chinese_bundles) ? "/mandarin/" : "/all-videos/"; ?>">My Videos</a></li>
                            </ul>
                        </div>
                    </div>
                    <!--
                    <div class="page-bar" style="height: 16px; width: 76%; text-align: center; margin: 65px auto 0px auto;padding-top: 7px;position: absolute;display: block;right: 0;box-shadow: 8px 4px 8px 0px rgba(50, 50, 50, 0.2);">
                        <div class="line" style="width: 100%; color: #1977ba; border-top: 2px dotted #1977ba; margin: auto;"></div>
                        <div class="line-left" style=" padding: 0px 0px 0px 7px; background-color: #ffffff; height: 45px;width: 16px; margin-top: -2px;  float: left; box-shadow: 0px 5px 8px 0px rgba(50, 50, 50, 0.2);">
                            <div class="line" style="color: #1977ba;  border-left: 2px dotted #1977ba;   margin: auto; height: 100%; position: relative; display: block;">
                                <div class="arrow-down" style=" width: 0px;   height: 0px;   border-left: 20px solid transparent;   border-right: 20px solid transparent;  border-top: 20px solid #FFF; bottom: -18px;position: absolute; left: -21px; /* box-shadow: 0px 5px 8px 0px rgba(50, 50, 50, 0.2); */">
                                </div>
                            </div>
                        </div>
                    </div>
                    -->
                    <div class="grey-bar" style="background: #ebedee; height: 50px; top: 68px; position: absolute;  width: 100%; z-index: 6;left: 201px;"></div>
                </div>
                <!-- END TOP NAVIGATION MENU -->
            </div>
            <!-- END PAGE TOP -->
        </div>
        <!-- END HEADER INNER -->
    </div>
    <!-- END HEADER -->
    <div class="clearfix">
    </div>
    <!-- BEGIN CONTAINER -->
    <div class="page-container">
        <!-- BEGIN SIDEBAR -->
        <div class="page-sidebar-wrapper">
            <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
            <!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->
            <div class="page-sidebar navbar-collapse collapse">
                <!-- BEGIN SIDEBAR MENU -->
                <!-- DOC: Apply "page-sidebar-menu-light" class right after "page-sidebar-menu" to enable light sidebar menu style(without borders) -->
                <!-- DOC: Apply "page-sidebar-menu-hover-submenu" class right after "page-sidebar-menu" to enable hoverable(hover vs accordion) sub menu mode -->
                <!-- DOC: Apply "page-sidebar-menu-closed" class right after "page-sidebar-menu" to collapse("page-sidebar-closed" class must be applied to the body element) the sidebar sub menu mode -->
                <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
                <!-- DOC: Set data-keep-expand="true" to keep the submenues expanded -->
                <!-- DOC: Set data-auto-speed="200" to adjust the sub menu slide up/down speed -->
                <ul class="page-sidebar-menu page-sidebar-menu-hover-submenu page-sidebar-menu-closed" data-keep-expanded="true" data-auto-scroll="true" data-slide-speed="200">
                    <?php $site_url = get_site_url(); ?>

                    <?php if (!$chinese_bundles): ?>
                        <li class="start init-icon-dashboard-li <?php if (is_page('all-videos')): ?>active icon-dashboard_li<?php endif; ?>">
                            <a href="<?php echo $site_url; ?>/all-videos/">
                                <i class="icon-dashboard"></i>
                                <span class="title single-line">Video Dashboard</span>
                                <!-- 
                                <span class="selected"></span>
                                -->
                            </a>
                        </li>
                        <li class="start <?php if (is_page('getting-into-gear')): ?>active<?php endif; ?> icon-getting_into_gear_black_li">
                            <a href="<?php echo $site_url; ?>/getting-into-gear/">
                                <i class="icon-getting_into_gear_black"></i>
                                <span class="title multiple-line">Getting Into Gear</span>
                            </a>
                        </li>
                        <li class="start <?php if (is_page('navigating-turns')): ?>active<?php endif; ?> icon-navigating_turns_black_li">
                            <a href="<?php echo $site_url; ?>/navigating-turns/">
                                <i class="icon-navigating_turns_black"></i>
                                <span class="title multiple-line">Navigating Turns</span>
                            </a>
                        </li>
                        <li class="start <?php if (is_page('heading-for-the-finish')): ?>active<?php endif; ?> icon-heading_for_the_finish_black_li">
                            <a href="<?php echo $site_url; ?>/heading-for-the-finish/">
                                <i class="icon-heading_for_the_finish_black"></i>
                                <span class="title multiple-line">Heading for the Finish</span>
                            </a>
                        </li>
                        <li class="start <?php if (is_page('acceptance')): ?>active<?php endif; ?> icon-acceptance_li">
                            <a href="<?php echo $site_url; ?>/acceptance/">
                                <i class="icon-acceptance"></i>
                                <span class="title single-line">Acceptance</span>
                            </a>
                        </li>
                    <?php endif; ?>

                    <?php if (pmpro_hasMembershipLevel(array(6, 7)) || $chinese_premium || $pr_demo): ?>
                        <li class="start <?php if (is_page('bundles-and-bonuses')): ?>active<?php endif; ?> icon-bundles-and-bonuses_li">
                            <a href="<?php echo $site_url; ?>/bundles-and-bonuses/">
                                <i class="icon-bundles-and-bonuses"></i>
                                <span class="title single-line">Dirty Little Secrets</span>
                            </a>
                        </li>
                    <?php endif; ?>

                    <?php //-> ONLY Chinese Bundles. ?>
                    <?php if ($chinese_bundles || $pr_demo || $chinese_premium): ?>
                        <li class="start <?php if (is_page('mandarin')): ?>active<?php endif; ?> icon-mandarin_li">
                            <a href="<?php echo $site_url; ?>/mandarin/">
                                <i class="icon-mandarin">视频</i>
                                <span class="title single-line">Mandarin</span>
                            </a>
                        </li>
                    <?php endif; ?>

                    <li class="config-link <?php if (is_page('my-profile')): ?>active<?php endif; ?> " >
                        <a href="javascript:;" class="menu-settings-ul-link">
                            <i class="icon-settings"></i>
                            <span class="title"></span>
                        </a>
                        <ul class="menu-settings-ul">
                            <!--
                           <li class="">
                               <a href="javascript:;">
                                   <span class="title">Account</span>
                               </a>
                           </li>
                            -->
                            <li class="start <?php if (is_page('my-profile')): ?>active<?php endif; ?>">
                                <a href="<?php echo $site_url; ?>/my-profile/">
                                    <span class="title">My Profile</span>
                                </a>
                            </li>
                            <li class="">
                                <a href="<?php echo $site_url; ?>/billing/">
                                    <span class="title">Billing</span>
                                </a>
                            </li>
                            <li class="">
                                <a href="<?php echo $site_url; ?>/manage-membership//">
                                    <span class="title">Manage <br/>Membership</span>
                                </a>
                            </li>
                            <li class="">
                                <a href="<?php echo $site_url; ?>/help/">
                                    <span class="title">Help</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <!-- END SIDEBAR MENU -->
            </div>
        </div>
        <!-- END SIDEBAR -->