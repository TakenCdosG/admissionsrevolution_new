<?php
/**
 * Outputs the footer copyright info
 * @package WordPress
 * @subpackage Elegant WPExplorer Theme
 * @since Elegant 1.0
 */
if (!function_exists('wpex_copyright')) {

    function wpex_copyright() {

        $copy = get_theme_mod('wpex_copyright', 'Powered by <a href=\"http://www.wordpress.org\" title="WordPress" target="_blank">WordPress</a> and <a href=\"http://themeforest.net/user/WPExplorer?ref=WPExplorer" target="_blank" title="WPExplorer" rel="nofollow">WPExplorer Themes</a>');
        $year = the_date('Y', $before = '', $after = '', $echo = FALSE);
        $year = intval($year) + 1;
        $patron = '[year]';
        $copy  = str_replace($patron, $year, $copy);
        ?>

        <?php
        // Display custom copyright
        if ($copy) {
            echo do_shortcode($copy);
            ?>
            <?php
            // Copyright fallback
        } else {
            ?>
            &copy; <?php _e('Copyright', 'wpex'); ?> <?php the_date('Y'); ?> &middot; <a href="<?php echo home_url(); ?>" title="<?php bloginfo('name'); ?>"><?php bloginfo('name'); ?></a>
        <?php } ?>

        <?php
    }

// end wpex_copyright
} // end function_exists 

if (!function_exists('wpex_copyright_dashboard')) {

    function wpex_copyright_dashboard() {
        $home_url = get_home_url();
        $copy = get_theme_mod('wpex_copyrightdashboard', 'Notice: All content on this website is Copyrighted by Admissions Revolution<sup>TM</sup>, LLC and intended for the private use of our members.  Any other use of our content without our express written consent is prohibited.  <a href="' . $home_url . '/wp-content/uploads/2015/04/Terms-of-Service-and-App-Use-Admissions-Revolution.pdf" target="_blank">Terms & Conditions</a> | <a href="' . $home_url . '/wp-content/uploads/2015/04/Website-Privacy-Policy-AR.pdf" target="_blank">Privacy Policy</a>.');
        ?>

        <?php
        // Display custom copyright
        if ($copy) {
            echo do_shortcode($copy);
            ?>
            <?php
            // Copyright fallback
        }
    }

// end wpex_copyright
} // end function_exists 