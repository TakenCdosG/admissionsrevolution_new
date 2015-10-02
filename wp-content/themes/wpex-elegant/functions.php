<?php
/**
 * Theme functions and definitions.
 *
 * Sets up the theme and provides some helper functions
 *
 * When using a child theme (see http://codex.wordpress.org/Theme_Development
 * and http://codex.wordpress.org/Child_Themes), you can override certain
 * functions (those wrapped in a function_exists() call) by defining them first
 * in your child theme's functions.php file. The child theme's functions.php
 * file is included before the parent theme's file, so the child theme
 * functions would be used.
 *
 *
 * For more information on hooks, actions, and filters,
 * see http://codex.wordpress.org/Plugin_API
 *
 * @package WordPress
 * @subpackage Elegant WPExplorer Theme
 * @since Elegant 1.0
 */
/**
  Constants
 * */
define('WPEX_JS_DIR_URI', get_template_directory_uri() . '/js');
define('API_PASSWORD', '148ee404301b60906a1f8e45c27e1ec68fbcd05999ee52a2433dcd11a18e81e5');


/**
  Theme Setup
 * */
if (!isset($content_width))
    $content_width = 1000;

// Theme setup - menus, theme support, etc
require_once( get_template_directory() . '/functions/theme-setup.php' );

// Recommend plugins for use with this theme
require_once ( get_template_directory() . '/functions/recommend-plugins.php' );

// Adds a feed metaboxes
require_once ( get_template_directory() . '/functions/dashboard-feed.php' );

// Splash Page
require_once ( get_template_directory() . '/functions/welcome.php' );


/**
  Theme Customizer
 * */
// General Options
require_once ( get_template_directory() . '/functions/theme-customizer/header.php' );

// Portfolio Options
require_once ( get_template_directory() . '/functions/theme-customizer/portfolio.php' );

// Blog Options
require_once ( get_template_directory() . '/functions/theme-customizer/blog.php' );

// Copyright Options
require_once ( get_template_directory() . '/functions/theme-customizer/copyright.php' );


/*
  Add the PMPro meta box to a CPT
 */

function my_page_meta_wrapper() {
    //duplicate this row for each CPT
    add_meta_box('pmpro_page_meta', 'Require Membership', 'pmpro_page_meta', 'video', 'side');
}

function pmpro_cpt_init() {
    if (is_admin()) {
        add_action('admin_menu', 'my_page_meta_wrapper');
    }

    //-> add aditional field to checkout from
    //don't break if Register Helper is not loaded
    if (!function_exists("pmprorh_add_registration_field")) {
        return false;
    }

    //define the fields
    $fields = array();

    //radio
    $fields[] = new PMProRH_Field("type_suscription", "radio", array("options" => array("parent" => "I am a Parent", "student" => "I am a Student"), "class" => "suscription_field", "label" => "Are you a Parent or Student? *", "profile" => true, "required" => true));

    $fields[] = new PMProRH_Field(
            "students_year", // input name, will also be used as meta key
            "text", // type of field
            array(
        "size" => 40, // input size
        "label" => "Student's year of high school graduation *", // custom field label
        "class" => "students_year", // custom class
        "profile" => true, // show in user profile
        "required" => true, // make this field required
        "showrequired" => true,
        "showmainlabel" => true,
    ));

    //add the fields into a new checkout_boxes are of the checkout page
    foreach ($fields as $field)
        pmprorh_add_registration_field(
                "after_captcha", // location on checkout page
                $field            // PMProRH_Field object
        );

    //that's it. see the PMPro Register Helper readme for more information and examples.
}

add_action("init", "pmpro_cpt_init", 20);

/**
  Includes
 * */
// Define widget areas
require_once( get_template_directory() . '/functions/widget-areas.php' );

set_theme_mod('wpex_features', '0');
set_theme_mod('wpex_slides', '0');
set_theme_mod('wpex_portfolio', '0');
set_theme_mod('wpex_staff', '0');

function add_my_post_types_to_query($query) {
    if (is_home() && $query->is_main_query())
        $query->set('post_type', array('post', 'slides'));
    return $query;
}

// Register the features post type
if (get_theme_mod('wpex_features', '1') == '1') {
    require_once( get_template_directory() . '/functions/post-types/features.php' );
}

// Register the slides post type
if (get_theme_mod('wpex_slides', '1') == '1') {
    require_once( get_template_directory() . '/functions/post-types/slides.php' );
}

// Register the portfolio post type
if (get_theme_mod('wpex_portfolio', '1') == '1') {
    require_once( get_template_directory() . '/functions/post-types/portfolio.php' );
}

// Register the staff post type
if (get_theme_mod('wpex_staff', '1') == '1') {
    require_once( get_template_directory() . '/functions/post-types/staff.php' );
}

// Shortcodes
require_once ( get_template_directory() . '/functions/shortcode.php' );

// Admin only functions
if (is_admin()) {

    // Load the gallery metabox only if the portfolio post type is enabled
    if (get_theme_mod('wpex_portfolio', '1') == '1') {
        require_once( get_template_directory() . '/functions/meta/gallery-metabox/gmb-admin.php' );
    }

    // Default meta options usage
    require_once( get_template_directory() . '/functions/meta/usage.php' );

    // Post editor tweaks
    require_once( get_template_directory() . '/functions/mce.php' );

    // Save_post
    require_once( get_template_directory() . '/functions/save-post.php' );

// Non admin functions
} else {



    // Front-end Portfolio functions
    if (get_theme_mod('wpex_portfolio', '1') == '1') {

        // Displays portfolio gallery images
        require_once( get_template_directory() . '/functions/meta/gallery-metabox/gmb-display.php' );
    }

    // Outputs the main site logo
    require_once( get_template_directory() . '/functions/logo.php' );

    // Loads front end css and js
    require_once( get_template_directory() . '/functions/scripts.php' );

    // Custom Menu Walker
    require_once( get_template_directory() . '/functions/menu-walker.php' );

    // Image resizing script
    require_once( get_template_directory() . '/functions/aqua-resizer.php' );

    // Returns the correct image sizes for cropping
    require_once( get_template_directory() . '/functions/featured-image.php' );

    // Comments output
    require_once( get_template_directory() . '/functions/comments-callback.php' );

    // Pagination output
    require_once( get_template_directory() . '/functions/pagination.php' );

    // Custom excerpts
    require_once( get_template_directory() . '/functions/excerpts.php' );

    // Alter posts per page for various archives
    require_once( get_template_directory() . '/functions/posts-per-page.php' );

    // Outputs the footer copyright
    require_once( get_template_directory() . '/functions/copyright.php' );

    // Outputs post meta (date, cat, comment count)
    require_once( get_template_directory() . '/functions/post-meta.php' );

    // Used for next/previous links on single posts
    require_once( get_template_directory() . '/functions/next-prev.php' );

    // Outputs the post format video
    require_once( get_template_directory() . '/functions/post-video.php' );

    // Outputs post author bio
    require_once( get_template_directory() . '/functions/post-author.php' );

    // Outputs post slider
    require_once( get_template_directory() . '/functions/post-slider.php' );

    // Adds classes to entries
    require_once( get_template_directory() . '/functions/post-classes.php' );

    // Adds a mobile search to the sidr container
    require_once( get_template_directory() . '/functions/mobile-search.php' );

    // Displays the homepage slides
    require_once( get_template_directory() . '/functions/homepage-slider.php' );
}


/*
  +==========================================+
  | Redirect Users After Login In WordPress  |
  +==========================================+
 */

function redirect_user_on_role() {
    global $current_user;
    get_currentuserinfo();

    //If login user role is Subscriber
    if ($current_user->user_level == 0) {
        wp_redirect(home_url("/all-videos/"));
        if (is_home()) {
            if (is_user_logged_in()) {
                wp_redirect(home_url("/all-videos/"));
            }
        }
        exit;
    }
    /*
      //If login user role is Contributor
      if ($current_user->user_level > 1) {
      wp_redirect(home_url("/dashboard/"));
      exit;
      }

      //If login user role is Editor
      if ($current_user->user_level > 8) {
      wp_redirect(home_url("/dashboard/"));
      exit;
      }
     */
}

//add_action('admin_init', 'redirect_user_on_role');

/**
 * Redirect user after successful login.
 *
 * @param string $redirect_to URL to redirect to.
 * @param string $request URL the user is coming from.
 * @param object $user Logged user's data.
 * @return string
 */
function login_area_redirect($redirect_to, $request, $user) {
    //is there a user to check?
    //retrieve current user info 
    //global $wp_roles, $user, $current_user;
    //$current_user = wp_get_current_user();
    if (isset($user->roles)) {
        if (is_array($user->roles)) {
            if (in_array('subscriber', $user->roles)) {
                $chinese_bundles = pmpro_hasMembershipLevel(array(11), $user->ID);
                //die(var_dump($chinese_bundles));
                if ($chinese_bundles) {
                    return home_url("/mandarin/");
                } else {
                    return home_url("/all-videos/");
                }
            } else {
                return home_url("/wp-admin/");
                //return $redirect_to;
            }
        }
    }


    /*
      die(var_dump($current_user));
      if (isset($user->roles) && is_array($user->roles)) {
      //check for admins
      if (in_array('administrator', $user->roles)) {
      // redirect them to the default place
      return $redirect_to;
      } else {
      die(var_dump($user));
      return home_url("/all-videos/");
      }
      } else {
      return $redirect_to;
      }
     * 
     */
}

add_filter('login_redirect', 'login_area_redirect', 10, 3);

function tml_title_filter($attr1, $attr2) {
    if ($attr1 == "Lost Password") {
        $attr1 = "Forgot Username or Password";
    }
    return $attr1;
}

add_filter($tag = "tml_title", $function_to_add = "tml_title_filter", $priority = 100, $accepted_args = 2);


//add_action('wp_footer', 'wpse33008');

function wpse33008() {
    ?>
    <!-- Wistia Cod -->
    <script src="//fast.wistia.com/static/integrations-hubspot-v1.js" async xmlns="http://www.w3.org/1999/html"></script>
    <?php
}

//update the user after checkout
function my_update_first_and_last_name_after_checkout($user_id) {
    if (isset($_REQUEST['termsconditions'])) {
        $termsconditions = $_REQUEST['termsconditions'];
    } elseif (isset($_SESSION['termsconditions'])) {
        //maybe in sessions?
        $termsconditions = $_SESSION['termsconditions'];

        //unset
        unset($_SESSION['termsconditions']);
    }

    if (isset($termsconditions))
        update_user_meta($user_id, "termsconditions", $termsconditions);
}

add_action('pmpro_after_checkout', 'my_update_first_and_last_name_after_checkout');

//require the fields
function my_pmpro_registration_checks() {
    global $pmpro_msg, $pmpro_msgt, $current_user;
    $termsconditions = $_REQUEST['termsconditions'];

    if (!empty($termsconditions) || $current_user->ID) {
        //all good
        return true;
    } else {
        $pmpro_msg = "Please complete all required fields.";
        $pmpro_msgt = "pmpro_error";
        return false;
    }
}

add_filter("pmpro_registration_checks", "my_pmpro_registration_checks");

function my_pmpro_paypalexpress_session_vars() {
    //save our added fields in session while the user goes off to PayPal
    $_SESSION['termsconditions'] = $_REQUEST['termsconditions'];
}

add_action("pmpro_paypalexpress_session_vars", "my_pmpro_paypalexpress_session_vars");

function go_home() {
    wp_redirect(home_url());
    exit();
}

/*
  Delete the WordPress User When a Paid Memberships Pro Member Cancels His Account
  Requires PMPro v1.4+
  Code to delete WP user accounts when a member cancels their PMPro account.
  Users are not deleted if:
  (1) They are not cancelling their membership (i.e. $level_id != 0)
  (2) They are an admin.
  (3) The level change was initiated from the WP Admin Dashboard
  (e.g. when an admin changes a user's level via the edit user's page)
 */

function my_pmpro_after_change_membership_level($level_id, $user_id) {
    //are they cancelling? and don't do this from admin (e.g. when admin's are changing levels)
    if (empty($level_id) && !is_admin()) {
        //only delete non-admins
        if (!user_can($user_id, "manage_options")) {
            //remove the delete hooks so we don't try to cancel the membership again
            remove_action('delete_user', 'pmpro_delete_user');
            remove_action('wpmu_delete_user', 'pmpro_delete_user');

            //delete the user
            require_once(ABSPATH . "/wp-admin/includes/user.php");
            wp_delete_user($user_id);

            //add the delete hooks back in
            add_action('delete_user', 'pmpro_delete_user');
            add_action('wpmu_delete_user', 'pmpro_delete_user');
            go_home();
        }
    }
}

add_action("pmpro_after_change_membership_level", "my_pmpro_after_change_membership_level", 10, 2);

function rocket_loader_attributes($url) {
    if (strpos($url, '.js') !== false) {
        // this will be optimized
        return "$url' defer";
    }
    return $url;
}

add_filter('clean_url', 'rocket_loader_attributes', 11, 1);


/*
  Only let level 1 members sign up if they use a discount code.
  Place this code in your active theme's functions.php or a custom plugin.
 */

function my_pmpro_registration_checks_require_code_to_register($pmpro_continue_registration) {
    //only bother if things are okay so far
    if (!$pmpro_continue_registration)
        return $pmpro_continue_registration;

    //level = 1 and there is no discount code, then show an error message
    global $pmpro_level, $discount_code;

    //if($pmpro_level->id == 1 && (empty($discount_code) || $discount_code != "REQUIRED_CODE")) //use this conditional to check for a specific code.
    if ($pmpro_level->id == 12 && empty($discount_code)) {
        pmpro_setMessage("You must use a valid discount code to register for this level.", "pmpro_error");
        return false;
    }

    return $pmpro_continue_registration;
}

add_filter("pmpro_registration_checks", "my_pmpro_registration_checks_require_code_to_register");

//update the user after checkout
function create_new_hubspot_contact_from_user_register_form($user_id) {


    $user = get_userdata($user_id);


    $arr = array(
        'properties' => array(
            array(
                'property' => 'email',
                'value' => $user->user_email
            ),
            array(
                'property' => 'firstname',
                'value' => $user->first_name
            ),
            array(
                'property' => 'lastname',
                'value' => $user->last_name
            ),
            array(
                'property' => 'phone',
                'value' => '555-1212'
            )
        )
    );
    $post_json = json_encode($arr);
    $hapikey = '173f8289-baef-43bb-b2a1-224544d62cf4';
    $endpoint = 'https://api.hubapi.com/contacts/v1/contact?hapikey=' . $hapikey;
    $ch = @curl_init();
    @curl_setopt($ch, CURLOPT_POST, true);
    @curl_setopt($ch, CURLOPT_POSTFIELDS, $post_json);
    @curl_setopt($ch, CURLOPT_URL, $endpoint);
    @curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
    @curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $response = @curl_exec($ch);
    @curl_close($ch);
    //echo $response;
    //var_dump($user);
}

add_action('pmpro_after_checkout', 'create_new_hubspot_contact_from_user_register_form');


function show_price_on_pmpro_applydiscountcode_return_js($discount_code, $discount_code_id, $level_id, $code_level){
    ?>
    jQuery('#pmpro_message').append('<span><strong style="color: #00a0f0;">New Total: $'+code_level.initial_payment+'</strong></span>');
    console.log("code_level: "+code_level);
    <?php
}

add_action('pmpro_applydiscountcode_return_js', 'show_price_on_pmpro_applydiscountcode_return_js');