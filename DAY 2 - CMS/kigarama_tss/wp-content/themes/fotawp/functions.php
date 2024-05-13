<?php

/**
 * Define theme constants and functions.
 *
 */
if (!defined('FOTAWP_VERSION')) {
    define('FOTAWP_VERSION', wp_get_theme()->get('Version'));
}
define('FOTAWP_DEBUG', defined('WP_DEBUG') && WP_DEBUG === true);
define('FOTAWP_DIR', trailingslashit(get_template_directory()));
define('FOTAWP_URL', trailingslashit(get_template_directory_uri()));



if (!function_exists('fotawp_support')) :

    /**
     * Sets up theme defaults and registers support for various WordPress features.
     *
     * @since fotawp 1.0.0
     *
     * @return void
     */
    function fotawp_support()
    {
        load_theme_textdomain('fotawp', get_template_directory() . '/languages');
        // Add default posts and comments RSS feed links to head.
        add_theme_support('automatic-feed-links');

        // Add support for block styles.
        add_theme_support('wp-block-styles');
        add_theme_support('post-thumbnails');
        // Enqueue editor styles.
        add_editor_style('style.css');
    }

endif;
add_action('after_setup_theme', 'fotawp_support');



/*----------------------------------------------------------------------------------
Enqueue Styles
-----------------------------------------------------------------------------------*/
if (!function_exists('fotawp_styles')) :
    function fotawp_styles()
    {
        // registering style for theme
        wp_enqueue_style('fotawp-style', get_stylesheet_uri(), array(), FOTAWP_VERSION);
        wp_enqueue_style('fotawp-aos-style', get_template_directory_uri() . '/assets/css/aos.css');
        if (is_rtl()) {
            wp_enqueue_style('rtl-css', get_template_directory_uri() . '/assets/css/rtl.css', 'rtl_css');
        }
        // registering js for theme
        wp_enqueue_script('jquery');
        wp_enqueue_script('fotawp-aos-scripts', get_template_directory_uri() . '/assets/js/aos.js', array(), FOTAWP_VERSION, true);
        wp_enqueue_script('fotawp-scripts', get_template_directory_uri() . '/assets/js/fotawp-scripts.js', array(), FOTAWP_VERSION, true);
    }
endif;

add_action('wp_enqueue_scripts', 'fotawp_styles');

/**
 * Enqueue scripts for admin area
 */
function fotawp_admin_style()
{
    if (!is_user_logged_in()) {
        return;
    }
    $fotawp_notice_current_screen = get_current_screen();
    if (!empty($_GET['page']) && 'about-fotawp' === $_GET['page'] || $fotawp_notice_current_screen->id === 'themes' || $fotawp_notice_current_screen->id === 'dashboard') {

        wp_enqueue_style('fotawp-admin-style', get_template_directory_uri() . '/assets/css/admin-style.css', array(), FOTAWP_VERSION, 'all');
        wp_enqueue_script('fotawp-admin-scripts', get_template_directory_uri() . '/assets/js/admin-scripts.js', array(), FOTAWP_VERSION, true);
        wp_enqueue_script('fotawp-welcome-notice', get_template_directory_uri() . '/inc/admin/js/welcome-notice.js', array('jquery'), FOTAWP_VERSION, true);
        if (class_exists('Cozythemes_Demo_Importer')) {
            $activation_redirect_url = admin_url('themes.php?page=advanced-import');
        } else {
            $activation_redirect_url = admin_url('themes.php?page=about-fotawp');
        }
        wp_localize_script('fotawp-welcome-notice', 'fotawp_localize', array(
            'ajax_url' => admin_url('admin-ajax.php'),
            'redirect_url' => $activation_redirect_url
        ));
    }
}
add_action('admin_enqueue_scripts', 'fotawp_admin_style');

/**
 * Enqueue assets scripts for both backend and frontend
 */
function fotawp_block_assets()
{
    wp_enqueue_style('fotawp-blocks-style', get_template_directory_uri() . '/assets/css/blocks.css');
}
add_action('enqueue_block_assets', 'fotawp_block_assets');
/**
 * Load core file.
 */
require_once get_template_directory() . '/inc/core/init.php';

/**
 * Load welcome page file.
 */
require_once get_template_directory() . '/inc/admin/fotawp-welcome.php';
function fotawp_add_woocommerce_support()
{
    add_theme_support('woocommerce');
}
add_action('after_setup_theme', 'fotawp_add_woocommerce_support');
