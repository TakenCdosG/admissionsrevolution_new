<?php

/**
 * This file loads custom css and js for our theme
 *
 * @package WordPress
 * @subpackage Elegant WPExplorer Theme
 * @since Elegant 1.0
 */
add_action('wp_enqueue_scripts', 'wpex_load_scripts');

function wpex_load_scripts() {

    /**
      CSS
     * */
    wp_enqueue_style('style', get_stylesheet_uri());
    wp_enqueue_style('wpex-custom', get_template_directory_uri() . '/custom.css');
    wp_enqueue_style('wpex-responsive', get_template_directory_uri() . '/responsive.css');
    wp_enqueue_style('google-font-open-sans', 'http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&subset=latin,cyrillic-ext,greek-ext,greek,vietnamese,latin-ext,cyrillic');
    wp_enqueue_style('morphext', get_template_directory_uri() . '/assets/global/plugins/morphext/dist/morphext.css');
    if (function_exists('wpcf7_enqueue_styles')) {
        wp_dequeue_style('contact-form-7');
    }


    /**
      jQuery
     * */
    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }

    //-> wp_enqueue_script('wistia-api', 'http://fast.wistia.com/assets/external/E-v1.js', 'jquery', false);
    wp_enqueue_script('wistia-api-assets', 'http://fast.wistia.com/assets/external/E-v1.js', array('jquery'), false);
    wp_enqueue_script('wistia-api-labs', 'https://fast.wistia.com/labs/crop-fill/plugin.js', array('jquery'), false);

    wp_enqueue_script('wpex-plugins', WPEX_JS_DIR_URI . '/plugins.js', array('jquery'), '1.7.5', true);
    wp_enqueue_script('wpex-global', WPEX_JS_DIR_URI . '/global.js', array('jquery', 'wpex-plugins'), '1.7.5', true);

    wp_localize_script('wpex-global', 'WPURLS', array('siteurl' => get_option('siteurl')));
  
    
    //-> Homepage Script
    if (is_front_page()) {
        wp_enqueue_script('wistia-api-popover', 'http://fast.wistia.net/static/popover-v1.js', array(), false);
        wp_enqueue_script('wpex-home', WPEX_JS_DIR_URI . '/home.js', array('jquery', 'wistia-api'), '1.7.5', true);
    }

    //-> Morphext
    wp_enqueue_script('morphext', get_template_directory_uri() . "/assets/global/plugins/morphext/dist/morphext.js", array('jquery'), '1.7.5', true);

    //-> Page template Script.
    if (is_page_template('templates/dashboard.php') || is_singular('video')) {

        /* +++++++ STYLES +++++++++ */
        /*
          +===================================+
          | BEGIN GLOBAL MANDATORY STYLES     |
          +===================================+
         */
        wp_enqueue_style('font-awesome', get_template_directory_uri() . '/assets/global/plugins/font-awesome/css/font-awesome.min.css');
        wp_enqueue_style('simple-line-icons', get_template_directory_uri() . '/assets/global/plugins/simple-line-icons/simple-line-icons.min.css');
        wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/global/plugins/bootstrap/css/bootstrap.min.css');
        wp_enqueue_style('uniform.default', get_template_directory_uri() . '/assets/global/plugins/uniform/css/uniform.default.css');
        wp_enqueue_style('bootstrap-switch', get_template_directory_uri() . '/assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css');
        /*
          +===================================+
          | END GLOBAL MANDATORY STYLES     |
          +===================================+
         */

        /*
          +===================================+
          |  BEGIN THEME STYLES               |
          +===================================+
         */
        wp_enqueue_style('components', get_template_directory_uri() . '/assets/global/css/components.css');
        wp_enqueue_style('plugins', get_template_directory_uri() . '/assets/global/css/plugins.css');
        wp_enqueue_style('layout', get_template_directory_uri() . '/assets/global/css/layout.css');
        wp_enqueue_style('grey', get_template_directory_uri() . '/assets/global/css/grey.css');
        wp_enqueue_style('custom', get_template_directory_uri() . '/assets/global/css/custom.css');
        /*
          +===================================+
          | END THEME STYLES                  |
          +===================================+
         */
        /* +++++++ END STYLES +++++++++ */
        /* +++++++ SCRIPT +++++++++ */
        /*
          +===================================+
          | BEGIN GLOBAL MANDATORY STYLES     |
          +===================================+
         */

        wp_enqueue_script('jquery-migrate', get_template_directory_uri() . "/assets/global/plugins/jquery-migrate.min.js", array('jquery'), '1.7.5', true);
        wp_enqueue_script('jquery-ui', get_template_directory_uri() . "/assets/global/plugins/jquery-ui/jquery-ui-1.10.3.custom.min.js", array('jquery'), '1.7.5', true);
        wp_enqueue_script('bootstrap', get_template_directory_uri() . "/assets/global/plugins/bootstrap/js/bootstrap.min.js", array('jquery'), '1.7.5', true);
        wp_enqueue_script('bootstrap-hover-dropdown', get_template_directory_uri() . "/assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js", array('jquery'), '1.7.5', true);
        wp_enqueue_script('jquery-slimscroll', get_template_directory_uri() . "/assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js", array('jquery'), '1.7.5', true);
        wp_enqueue_script('jquery-blockui', get_template_directory_uri() . "/assets/global/plugins/jquery.blockui.min.js", array('jquery'), '1.7.5', true);
        wp_enqueue_script('jquery-cokie', get_template_directory_uri() . "/assets/global/plugins/uniform/jquery.uniform.min.js", array('jquery'), '1.7.5', true);
        wp_enqueue_script('bootstrap-switch', get_template_directory_uri() . "/assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js", array('jquery'), '1.7.5', true);

        /*
          +===================================+
          |  BEGIN PAGE LEVEL SCRIPTS         |
          +===================================+
         */

        /*
          +===================================+
          |  END PAGE LEVEL SCRIPTS           |
          +===================================+
         */
        wp_enqueue_script('metronic', get_template_directory_uri() . '/assets/global/scripts/metronic.js', array('jquery'), '1.7.5', true);
        wp_enqueue_script('layout', get_template_directory_uri() . '/assets/global/scripts/layout.js', array('jquery'), '1.7.5', true);
        wp_enqueue_script('demo', get_template_directory_uri() . '/assets/global/scripts/demo.js', array(), '1.7.5', true);
        wp_enqueue_script('demo', get_template_directory_uri() . '/assets/global/scripts/index.js', array(), '1.7.5', true);
        /*
          +===================================+
          | END GLOBAL MANDATORY STYLES     |
          +===================================+
         */
        /* +++++++ END SCRIPT +++++++++ */
    }

    //-> BootstrapValidator
    //wp_enqueue_style('bootstrapValidator', get_template_directory_uri() . '/assets/global/plugins/bootstrapvalidator/src/css/bootstrapValidator.css');
    //wp_enqueue_script('bootstrapValidator', get_template_directory_uri() . "/assets/global/plugins/bootstrapvalidator/dist/js/bootstrapValidator.min.js", array('jquery'), '1.7.5', FALSE);
}
