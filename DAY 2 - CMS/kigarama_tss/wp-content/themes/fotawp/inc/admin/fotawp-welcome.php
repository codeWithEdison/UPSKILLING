<?php

/**
 * Adding Admin Notice for recommended plugins
 */

if (!function_exists('fotawp_is_recommended_plugin_installed')) {
    function fotawp_is_recommended_plugin_installed($plugin_slug)
    {
        $plugin_path = WP_PLUGIN_DIR . '/' . $plugin_slug;
        return file_exists($plugin_path);
    }
}
if (!function_exists('fotawp_is_fr_plugin_activated')) {
    function fotawp_is_fr_plugin_activated($plugin_slug)
    {
        return is_plugin_active($plugin_slug);
    }
}

if (!function_exists('fotawp_welcome_notice')) :
    function fotawp_welcome_notice()
    {
        if (get_option('fotawp_dismissed_custom_notice')) {
            return;
        }
        global $pagenow;
        // $theme_args      = wp_get_theme();
        // $name            = $theme_args->__get( 'Name' );
        $current_screen  = get_current_screen();

        if (is_admin()) {

            if ($current_screen->id !== 'dashboard' && $current_screen->id !== 'themes') {
                return;
            }

            if (is_network_admin()) {
                return;
            }

            if (!current_user_can('manage_options')) {
                return;
            }


?>
            <div class="fotawp-admin-notice notice notice-info updated is-dismissible content-install-plugin theme-info-notice" id="fotawp-dismiss-notice">

                <div class="info-content">
                    <h6><span class="theme-name"><span><?php echo __('Thank You For Using FotaWP', 'fotawp') ?></span> </h6>
                    <h2><?php echo __('Optimize workflow effortlessly with Cozy Blocks, ideal for our 30+ Advanced Blocks—install for full benefits!', 'fotawp'); ?></h2>

                    <h3><?php echo __('Enhance your experience with our feature-rich 30+ Advanced Blocks! Unlock the full potential by integrating Cozy Addons today. Explore a multitude of powerful tools and functionalities designed to elevate your user experience. Unlock the full potential of advanced blocks and seamless demo importing with a single click by installing and activating all recommended plugins. ', 'fotawp'); ?>
                    </h3>

                    <a href="#" id="install-activate-button" class="button admin-button info-button"><?php echo __('Getting start with one click', 'fotawp') ?></a>
                    <a href="<?php echo admin_url(); ?>themes.php?page=about-fotawp" class="admin-button info-button"><?php echo __('Explore FotaWP', 'fotawp'); ?></a>
                </div>
                <div class="theme-screen">
                    <img src="<?php echo esc_url(get_template_directory_uri() . '/inc/admin/images/dashboard_theme_screen.png'); ?>" />
                </div>

            </div>
    <?php

        }
    }
endif;
add_action('admin_notices', 'fotawp_welcome_notice');

function fotawp_dismissble_notice()
{
    update_option('fotawp_dismissed_custom_notice', 1);
}
add_action('wp_ajax_fotawp_dismissble_notice', 'fotawp_dismissble_notice');

// Hook into a custom action when the button is clicked
add_action('wp_ajax_fotawp_install_and_activate_plugins', 'fotawp_install_and_activate_plugins');
add_action('wp_ajax_nopriv_fotawp_install_and_activate_plugins', 'fotawp_install_and_activate_plugins');
add_action('wp_ajax_fotawp_rplugin_activation', 'fotawp_rplugin_activation');
add_action('wp_ajax_nopriv_fotawp_rplugin_activation', 'fotawp_rplugin_activation');

// Function to install and activate the plugins



function fotawp_check_plugin_installed_status($pugin_slug, $plugin_file)
{
    return file_exists(ABSPATH . 'wp-content/plugins/' . $pugin_slug . '/' . $plugin_file) ? true : false;
}

/* Check if plugin is activated */


function fotawp_check_plugin_active_status($pugin_slug, $plugin_file)
{
    return is_plugin_active($pugin_slug . '/' . $plugin_file) ? true : false;
}

require_once(ABSPATH . 'wp-admin/includes/plugin-install.php');
require_once(ABSPATH . 'wp-admin/includes/file.php');
require_once(ABSPATH . 'wp-admin/includes/misc.php');
require_once(ABSPATH . 'wp-admin/includes/class-wp-upgrader.php');
function fotawp_install_and_activate_plugins()
{
    // Define the plugins to be installed and activated
    $recommended_plugins = array(
        array(
            'slug' => 'cozy-addons',
            'file' => 'cozy-addons.php',
            'name' => __('Cozy Blocks', 'fotawp')
        ),
        array(
            'slug' => 'advanced-import',
            'file' => 'advanced-import.php',
            'name' => __('Advanced Imporrt', 'fotawp')
        ),
        array(
            'slug' => 'cozy-essential-addons',
            'file' => 'cozy-essential-addons.php',
            'name' => __('Cozy Essential Addons', 'fotawp')
        ),
        // Add more plugins here as needed
    );

    // Include the necessary WordPress functions


    // Set up a transient to store the installation progress
    set_transient('install_and_activate_progress', array(), MINUTE_IN_SECONDS * 10);

    // Loop through each plugin
    foreach ($recommended_plugins as $plugin) {
        $plugin_slug = $plugin['slug'];
        $plugin_file = $plugin['file'];
        $plugin_name = $plugin['name'];

        // Check if the plugin is active
        if (is_plugin_active($plugin_slug . '/' . $plugin_file)) {
            fotawp_update_install_and_activate_progress($plugin_name, 'Already Active');
            continue; // Skip to the next plugin
        }

        // Check if the plugin is installed but not active
        if (fotawp_is_plugin_installed($plugin_slug . '/' . $plugin_file)) {
            $activate = activate_plugin($plugin_slug . '/' . $plugin_file);
            if (is_wp_error($activate)) {
                fotawp_update_install_and_activate_progress($plugin_name, 'Error');
                continue; // Skip to the next plugin
            }
            fotawp_update_install_and_activate_progress($plugin_name, 'Activated');
            continue; // Skip to the next plugin
        }

        // Plugin is not installed or activated, proceed with installation
        fotawp_update_install_and_activate_progress($plugin_name, 'Installing');

        // Fetch plugin information
        $api = plugins_api('plugin_information', array(
            'slug' => $plugin_slug,
            'fields' => array('sections' => false),
        ));

        // Check if plugin information is fetched successfully
        if (is_wp_error($api)) {
            fotawp_update_install_and_activate_progress($plugin_name, 'Error');
            continue; // Skip to the next plugin
        }

        // Set up the plugin upgrader
        $upgrader = new Plugin_Upgrader();
        $install = $upgrader->install($api->download_link);

        // Check if installation is successful
        if ($install) {
            // Activate the plugin
            $activate = activate_plugin($plugin_slug . '/' . $plugin_file);

            // Check if activation is successful
            if (is_wp_error($activate)) {
                fotawp_update_install_and_activate_progress($plugin_name, 'Error');
                continue; // Skip to the next plugin
            }
            fotawp_update_install_and_activate_progress($plugin_name, 'Activated');
        } else {
            fotawp_update_install_and_activate_progress($plugin_name, 'Error');
        }
    }

    // Delete the progress transient
    $redirect_url = admin_url('themes.php?page=advanced-import');

    // Delete the progress transient
    delete_transient('install_and_activate_progress');
    // Return JSON response
    wp_send_json_success(array('redirect_url' => $redirect_url));
}

// Function to check if a plugin is installed but not active
function fotawp_is_plugin_installed($plugin_slug)
{
    $plugins = get_plugins();
    return isset($plugins[$plugin_slug]);
}

// Function to update the installation and activation progress
function fotawp_update_install_and_activate_progress($plugin_name, $status)
{
    $progress = get_transient('install_and_activate_progress');
    $progress[] = array(
        'plugin' => $plugin_name,
        'status' => $status,
    );
    set_transient('install_and_activate_progress', $progress, MINUTE_IN_SECONDS * 10);
}


function fotawp_rplugin_activation()
{
    $frp_plugins = '';
    if (isset($_POST['get_slug']) && isset($_POST['get_filename'])) {
        // Get the additional parameters
        $plugin_slug = $_POST['get_slug'];
        $plugin_filename = $_POST['get_filename'];
        $frp_plugins = $plugin_slug . '/' . $plugin_filename;

        if (fotawp_is_plugin_installed($frp_plugins)) {
            $activate = activate_plugin($frp_plugins);
            if (is_wp_error($activate)) {
                fotawp_update_install_and_activate_progress('Cozy Essential Addons', 'Error');
            }
            fotawp_update_install_and_activate_progress('Cozy Essential Addons', 'Activated');
        }
        wp_send_json_success();
    } else {
        wp_send_json_error('Error: Missing parameters.');
    }
}

/**
 * Add dashboard menu for theme page
 */
function fotawp_dashboard_menu()
{
    add_theme_page(esc_html__('FotaWP', 'fotawp'), esc_html__('FotaWP', 'fotawp'), 'edit_theme_options', 'about-fotawp', 'fotawp_theme_info_display');
}
add_action('admin_menu', 'fotawp_dashboard_menu');
/**
 * Display info page for fotawp
 */
function fotawp_theme_info_display()
{
    $theme = wp_get_theme();


    ?>
    <div class="fotawp-dashboard">
        <div class="fotawp-bradning-bar">
            <div class="cozythemes-logo"><img src="<?php echo esc_url(get_template_directory_uri() . '/inc/admin/images/cozythemes_logo.png'); ?>" /></div>
            <a class="sitelink" href="https://cozythemes.com/" target="_blank"><?php echo __('Visit Website', 'fotawp') ?> <span class="dashicons dashicons-external"></span></a>
        </div>
        <div class="container">
            <div class="fotawp-dashboard-header">

                <div class="theme-details">
                    <h4><span class="theme-name"><span><?php echo __('FOTAWP', 'fotawp') ?> - <?php echo __('FSE Theme', 'fotawp'); ?></span></h4>
                    <span class="new-features"><?php echo __('5 Additional Homepage Template as ready to import Patterns', 'fotawp'); ?> <small><?php echo __('New', 'fotawp'); ?></small></span>
                    <h1><?php echo __('Congratulations! FotaWP has been installed and ready to build your website!!', 'fotawp') ?></h1>
                    <p><?php echo __('Built to fully support full-site editing (FSE) and seamless integration with your favourite pagebuilder elementor, FOTAWP provides a cutting-edge platform for creating any kinds of website.', 'fotawp') ?></p>
                    <a href="https://cozythemes.com/fotawp/" target="_blank" class="fotawp-pro-btns"><?php echo __('Explore FotaWP', 'fotawp') ?> <span class="dashicons dashicons-external"></span></a>
                </div>
                <div class="theme-screen">
                    <img src="<?php echo esc_url(get_template_directory_uri() . '/inc/admin/images/dashboard_theme_screen.png'); ?>" />
                </div>
            </div>
            <div class="fotawp-dashboard-content">
                <div class="dashboard-content">
                    <ul id="fotawp-dashboard-tabs-nav">
                        <li><a href="#fotawp-welcome"><?php echo __('Get Started', 'fotawp') ?></a></li>
                        <li><a href="#fotawp-usefulplugins"><?php echo __('Useful Plugins', 'fotawp') ?></a></li>
                        <li><a href="#fotawp-importer"><?php echo __('Demo Importer', 'fotawp') ?></a></li>
                        <li><a href="#fotawp-comparision"><?php echo __('FREE VS PRO', 'fotawp') ?></a></li>
                    </ul> <!-- END tabs-nav -->
                    <div id="tabs-content">
                        <div id="fotawp-welcome" class="tab-content">


                            <div class="fotawp-basic-guide">
                                <h3><?php echo __('Basic Guide for Setup theme and Templates:', 'fotawp') ?></h3>
                                <div class="guidelist">
                                    <div class="guide-editor-card">
                                        <h4><?php echo __('Editing Header (Homepage Header)', 'fotawp') ?></h4>
                                        <p><?php echo __('Edit the header that only display on homepage with banner section.', 'fotawp') ?></p>
                                        <a href="<?php echo admin_url(); ?>site-editor.php?postType=wp_template_part&postId=fotawp%2F%2Fheader&canvas=edit"><?php echo __('Edit Now', 'fotawp') ?></a>
                                    </div>
                                    <div class="guide-editor-card">
                                        <h4><?php echo __('Editing interior page Header', 'fotawp') ?></h4>
                                        <p><?php echo __('Edit inner page header section of site throgh this link.', 'fotawp') ?></p>
                                        <a href="<?php echo admin_url(); ?>site-editor.php?postType=wp_template_part&postId=fotawp%2F%2Fheader-minimal-right-nav&canvas=edit"><?php echo __('Edit Now', 'fotawp') ?></a>
                                    </div>
                                    <div class="guide-editor-card">
                                        <h4><?php echo __('Editing Footer', 'fotawp') ?></h4>
                                        <p><?php echo __('Edit footer section of site throgh this link.', 'fotawp') ?></p>
                                        <a href="<?php echo admin_url(); ?>site-editor.php?postType=wp_template_part&postId=fotawp%2F%2Ffooter&canvas=edit"><?php echo __('Edit Now', 'fotawp') ?></a>
                                    </div>
                                    <div class="guide-editor-card">
                                        <h4><?php echo __('Editing Sidebar', 'fotawp') ?></h4>
                                        <p><?php echo __('Edit sidebar section of site throgh this link.', 'fotawp') ?></p>
                                        <a href="<?php echo admin_url(); ?>site-editor.php?postType=wp_template_part&postId=fotawp%2F%2Fsidebar&canvas=edit"><?php echo __('Edit Now', 'fotawp') ?></a>
                                    </div>
                                    <div class="guide-editor-card">
                                        <h4><?php echo __('Editing Home page Template', 'fotawp') ?></h4>
                                        <p><?php echo __('You can edit.modify homepage section as your requirement.', 'fotawp') ?></p>
                                        <a href="<?php echo admin_url(); ?>site-editor.php?postType=wp_template&postId=fotawp%2F%2Fhome&canvas=edit"><?php echo __('Edit Now', 'fotawp') ?></a>
                                    </div>
                                    <div class="guide-editor-card">
                                        <h4><?php echo __('Editing Page Template', 'fotawp') ?></h4>
                                        <p><?php echo __('You can edit layout of general page template of site with this link.', 'fotawp') ?></p>
                                        <a href="<?php echo admin_url(); ?>site-editor.php?postType=wp_template&postId=fotawp%2F%2Fpage"><?php echo __('Edit Now', 'fotawp') ?></a>
                                    </div>
                                    <div class="guide-editor-card">
                                        <h4><?php echo __('Editing Single Post Template', 'fotawp') ?></h4>
                                        <p><?php echo __('You can edit layout of general single post template of site with this link.', 'fotawp') ?></p>
                                        <a href="<?php echo admin_url(); ?>site-editor.php?postType=wp_template&postId=fotawp%2F%2Fsingle&canvas=edit"><?php echo __('Edit Now', 'fotawp') ?></a>
                                    </div>
                                    <div class="guide-editor-card">
                                        <h4><?php echo __('Editing Sidemap', 'fotawp') ?></h4>
                                        <p><?php echo __('You can edit layout of sitemap page template of site with this link.', 'fotawp') ?></p>
                                        <a href="<?php echo admin_url(); ?>site-editor.php?postType=wp_template&postId=fotawp%2F%2Fpage-sitemap&canvas=edit"><?php echo __('Edit Now', 'fotawp') ?></a>
                                    </div>
                                    <div class="guide-editor-card">
                                        <h4><?php echo __('Editing 404 Template', 'fotawp') ?></h4>
                                        <p><?php echo __('You can edit layout of 404 page template of site with this link..', 'fotawp') ?></p>
                                        <a href="<?php echo admin_url(); ?>site-editor.php?postType=wp_template&postId=fotawp%2F%2F404&canvas=edit"><?php echo __('Edit Now', 'fotawp') ?></a>
                                    </div>
                                    <div class="guide-editor-card">
                                        <h4><?php echo __('Editing Archive Template', 'fotawp') ?></h4>
                                        <p><?php echo __('You can edit layout of archive template of site with this link.', 'fotawp') ?></p>
                                        <a href="<?php echo admin_url(); ?>site-editor.php?postType=wp_template&postId=fotawp%2F%2Farchive&canvas=edit"><?php echo __('Edit Now', 'fotawp') ?></a>
                                    </div>
                                    <div class="guide-editor-card">
                                        <h4><?php echo __('Editing Search Result Template', 'fotawp') ?></h4>
                                        <p><?php echo __('You can edit layout of search result page template of site with this link.', 'fotawp') ?></p>
                                        <a href="<?php echo admin_url(); ?>site-editor.php?postType=wp_template&postId=fotawp%2F%2Fsearch&canvas=edit"><?php echo __('Edit Now', 'fotawp') ?></a>
                                    </div>
                                </div>
                                <div class="step-guideline">
                                    <div class="step-list">
                                        <h3><?php echo __('Follow the step below to edit all templates/templates-parts:', 'fotawp') ?></h3>
                                        <ul class="guideline-steps">
                                            <li> <?php echo __('- Go to > Dashboard > Appearance > Editor', 'fotawp') ?></li>
                                            <li><?php echo __('- Select Templates/Template Parts > click on Template/Template Part (That you want to Edit)', 'fotawp') ?></li>
                                            <li><?php echo __('- Click on Edit (Pen icon) or click on Main body', 'fotawp') ?></li>
                                            <li><?php echo __(' - Now Edit/Add/Remove content ', 'fotawp') ?></li>
                                            <li><?php echo __('- Now Click on "Save" button to update your content/layout.', 'fotawp') ?></li>
                                        </ul>
                                    </div>
                                    <div class="step-list">
                                        <h3><?php echo __('Follow the step below to reset template default layout:', 'fotawp') ?></h3>
                                        <ul class="guideline-steps">
                                            <li> <?php echo __('- Go to > Dashboard > Appearance > Editor', 'fotawp') ?></li>
                                            <li><?php echo __('- Select Templates/Template Parts > click on Template (That you want to Edit)', 'fotawp') ?></li>
                                            <li><?php echo __('- Click on Manage all Templates', 'fotawp') ?></li>
                                            <li><?php echo __(' - Click on 3 dots icon right side of template you want to restore to detault ', 'fotawp') ?></li>
                                            <li><?php echo __('- Click on Clear Customization, That\'s all !', 'fotawp') ?></li>
                                        </ul>
                                    </div>
                                    <div class="step-list">
                                        <h3><?php echo __('Follow the step below to reset template part default layout:', 'fotawp') ?></h3>
                                        <ul class="guideline-steps">
                                            <li> <?php echo __('- Go to > Dashboard > Appearance > Editor', 'fotawp') ?></li>
                                            <li><?php echo __('- Select Templates/Template Parts > click on Template Part(That you want to Edit)', 'fotawp') ?></li>
                                            <li><?php echo __('- Click on Manage all Template Parts', 'fotawp') ?></li>
                                            <li><?php echo __(' - Click on 3 dots icon right side of template parts you want to restore to detault ', 'fotawp') ?></li>
                                            <li><?php echo __('- Click on Clear Customization, That\'s all !', 'fotawp') ?></li>
                                        </ul>
                                    </div>
                                    <div class="step-list">
                                        <h3><?php echo __('Importing/inserting patterns:', 'fotawp') ?></h3>
                                        <p><?php ?></p>
                                        <ul class="guideline-steps">
                                            <li><?php echo __('In content edit mode:', 'fotawp') ?></li>
                                            <li><?php echo __('- Click on "+" icon at the left top side of the page.', 'fotawp') ?></li>
                                            <li><?php echo __('- Click on "Patterns" tab', 'fotawp') ?></li>
                                            <li><?php echo __('- Click on "FotaWP Patterns" ', 'fotawp') ?></li>
                                            <li><?php echo __('- Click on Patterns from lists to import in editor/section ', 'fotawp') ?></li>
                                            <li><?php echo __('- Now change the content as your requirement and click to "Publish/Update" to save your content. ', 'fotawp') ?></li>
                                        </ul>
                                    </div>
                                    <div class="step-list">
                                        <h3><?php echo __('Switching to yuour favourite Global Styles:', 'fotawp') ?></h3>
                                        <ul class="guideline-steps">
                                            <li> <?php echo __('- Go to > Dashboard > Appearance > Editor', 'fotawp') ?></li>
                                            <li><?php echo __('- Click on Main Body', 'fotawp') ?></li>
                                            <li><?php echo __('- Click on Style icon (Circle half dark/half white icon) at the top right side of the page', 'fotawp') ?></li>
                                            <li><?php echo __(' - Click on "Browse Style"', 'fotawp') ?></li>
                                            <li><?php echo __('- Select the Global Style that you want to switch', 'fotawp') ?></li>
                                            <li><?php echo __('- Click on "Save" to save your settings. That\'s all!', 'fotawp') ?></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="doc-footer">
                                <p><?php echo __('Find our complete step-by-step documentation to understand how our theme and its features work.', 'fotawp') ?></p>
                                <a href="https://cozythemes.com/docs-category/fotawp/" target="_blank" class="full-doc-btn"><span class="dashicons dashicons-open-folder"></span> <?php echo __('Full Documentation', 'fotawp') ?></a>
                            </div>




                        </div>
                        <div id="fotawp-usefulplugins" class="tab-content">
                            <h2><?php echo __('Recommended Plugins', 'fotawp') ?></h2>
                            <p><?php echo __('To get fully advantage of theme please install and activate recommended plugins listed below at recommended plugin section. These plugins are complementary that adds more features to the theme.', 'fotawp') ?></p>
                            <h4 class="highlight-text"><?php echo __('Install and activate all recommended plugins and getting start with starter templates demo with one click : ', 'fotawp'); ?></h4>
                            <div class="welcome-buttons">
                                <a href="#" id="install-activate-button" class="button admin-button info-button"><?php echo __('Install all Plugins', 'fotawp') ?></a>
                            </div>

                            <h4 class="highlight-text">
                                <?php echo __('Or you can install and activate mannually as your requirement one by one : ', 'fotawp') ?>
                            </h4>
                            <div class="plugin-list">

                                <div class="frp_holder">
                                    <img src="<?php echo esc_url(get_template_directory_uri() . '/inc/admin/images/frp_elementor.png'); ?>" />
                                    <div class="frp_holder_footer">
                                        <?php
                                        function fotawp_recommend_pluigns_activation_status($frp_slug, $frp_file)
                                        {
                                            $frp_button_activation_id = '';
                                            if (!fotawp_is_recommended_plugin_installed($frp_slug . '/' . $frp_file)) {
                                                $frp_activation_link = get_admin_url() . 'plugin-install.php?tab=plugin-information&plugin=' . $frp_slug . '&TB_iframe=true&width=600&height=550';
                                                $frp_activation_text = __('Install and Activate', 'fotawp');
                                            } elseif (fotawp_is_recommended_plugin_installed($frp_slug . '/' . $frp_file) && !fotawp_is_fr_plugin_activated($frp_slug . '/' . $frp_file)) {
                                                $frp_activation_link = get_admin_url() . 'plugins.php?action=active&plugin=' . $frp_slug;
                                                $frp_activation_text = __('Activate', 'fotawp');
                                                $frp_button_activation_id = $frp_slug;
                                            } else {
                                                if (fotawp_is_fr_plugin_activated($frp_slug . '/' . $frp_file)) {
                                                    $frp_activation_link = '#';
                                                    $frp_button_activation_id = 'activation-disabled';
                                                    $frp_activation_text = __('Installed', 'fotawp');
                                                }
                                            }
                                            if (!fotawp_is_recommended_plugin_installed($frp_slug . '/' . $frp_file)) {
                                                $output = '<a id="frp-activation-button" data-rpslug="' . $frp_slug . '" data-filename="' . $frp_file . '"  href="' . esc_url($frp_activation_link) . '" class="install-activate ' . esc_attr($frp_button_activation_id) . ' ">' . esc_html($frp_activation_text) . '</a>';
                                            } else {
                                                $output = '<a id="frp-activation-button" data-rpslug="' . $frp_slug . '" data-filename="' . $frp_file . '"  href="' . esc_url($frp_activation_link) . '" class="frp_plugin_action ' . esc_attr($frp_button_activation_id) . ' ">' . esc_html($frp_activation_text) . '</a>';
                                            }
                                            echo  $output;
                                        }

                                        fotawp_recommend_pluigns_activation_status('elementor', 'elementor.php');
                                        echo '<br />';
                                        echo '<div style="margin-top:20px">' . __('Install ellementor if you want to use for elementor widgets and layout', 'fotawp') . '</div>';
                                        ?>
                                    </div>
                                </div>
                                <div class="frp_holder">
                                    <img src="<?php echo esc_url(get_template_directory_uri() . '/inc/admin/images/frp_cozyaddons.png'); ?>" />
                                    <div class="frp_holder_footer">
                                        <?php fotawp_recommend_pluigns_activation_status('cozy-addons', 'cozy-addons.php');
                                        echo '<br />';
                                        echo '<div style="margin-top:20px">' . __('Advanced 15+ blocks for FSE and Gutenberg Editor', 'fotawp') . '</div>';
                                        ?>

                                    </div>
                                </div>
                                <div class="frp_holder">
                                    <img src="<?php echo esc_url(get_template_directory_uri() . '/inc/admin/images/frp_cea.png'); ?>" />
                                    <div class="frp_holder_footer">
                                        <?php
                                        fotawp_recommend_pluigns_activation_status('cozy-essential-addons', 'cozy-essential-addons.php');

                                        ?>
                                    </div>
                                </div>
                                <div class="frp_holder">
                                    <img src="<?php echo esc_url(get_template_directory_uri() . '/inc/admin/images/frp_ai.png'); ?>" />
                                    <div class="frp_holder_footer">
                                        <?php fotawp_recommend_pluigns_activation_status('advanced-import', 'advanced-import.php'); ?>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div id="fotawp-importer" class="tab-content">
                            <h2><?php echo __('One Click Demo Importer', 'fotawp') ?></h2>
                            <p><?php echo __('Get started with one click demo import, recently with 6 free and 28+ overall starter site(demos) are ready to import, before import demo please install and activate all recommended plugins!', 'fotawp') ?></p>
                            <?php
                            if (fotawp_is_fr_plugin_activated('advanced-import/advanced-import.php') && fotawp_is_fr_plugin_activated('cozy-essential-addons/cozy-essential-addons.php')) { ?>
                                <a class="import-redirect-button" href="<?php echo admin_url(); ?>themes.php?page=advanced-import"><?php echo __('Go to Demo Importer', 'fotawp') ?></a>
                            <?php } else {
                                echo '<h3>' . __('Required plugins does not activated, Please install and active recommended plugins.', 'fotawp') . '</h3>';
                            } ?>

                        </div>
                        <div id="fotawp-comparision" class="tab-content">
                            <h3><?php echo __('Checkout how premium version is booster powerpack for you.', 'fotawp') ?></h3>
                            <h4><?php echo __('How can you access premium features? here is the short guide for using premium features:', 'fotawp') ?></h4>
                            <p> <?php echo __(' - For elementor features, you have find widgets, header and footer buidler and all premium features with "Cozy Addons for Elementor" plugin while for premium patterns you must install and activate "Cozy Essential addons", where all premium patterns provided.', 'fotawp') ?></p>
                            <table class="dashboard-comparision-table">
                                <tr class="heading-row">
                                    <td width="50%"><?php echo __('Core Features', 'fotawp') ?></td>
                                    <td width="25%"><?php echo __('Free', 'fotawp') ?></td>
                                    <td><span class="pro-badge"><?php echo __('Pro', 'fotawp') ?></span></td>
                                </tr>
                                <tr>
                                    <td><?php echo __('Home page Template Patterns', 'fotawp') ?></td>
                                    <td><?php echo __('2', 'fotawp') ?></td>
                                    <td><?php echo __('5 (Including Free)', 'fotawp') ?></td>
                                </tr>
                                <tr>
                                    <td><?php echo __('Pre-build Starter Demos', 'fotawp') ?></td>
                                    <td><?php echo __('6', 'fotawp') ?></td>
                                    <td><?php echo __('28+', 'fotawp') ?></td>
                                </tr>
                                <tr>
                                    <td><?php echo __('Header Patterns', 'fotawp') ?></td>
                                    <td><?php echo __('5+', 'fotawp') ?></td>
                                    <td><?php echo __('10+', 'fotawp') ?></td>
                                </tr>
                                <tr>
                                    <td><?php echo __('Footer Patterns', 'fotawp') ?></td>
                                    <td><?php echo __('5+', 'fotawp') ?></td>
                                    <td><?php echo __('10+', 'fotawp') ?></td>
                                </tr>
                                <tr>
                                    <td><?php echo __('Pre-build Patterns', 'fotawp') ?></td>
                                    <td><?php echo __('50+', 'fotawp') ?></td>
                                    <td><?php echo __('80+ (Total with Free 130+)', 'fotawp') ?></td>
                                </tr>
                                <tr>
                                    <td><?php echo __('Magazine Patterns', 'fotawp') ?></td>
                                    <td><?php echo __('Basic Layouts', 'fotawp') ?></td>
                                    <td><?php echo __('5+ Advanced Layouts', 'fotawp') ?></td>
                                </tr>
                                <tr>
                                    <td><?php echo __('5+ Banner Layouts Patterns', 'fotawp') ?></td>
                                    <td><?php echo __('Basic Layouts', 'fotawp') ?></td>
                                    <td><?php echo __('10+ Advanced Layout with contact Form', 'fotawp') ?></td>
                                </tr>
                                <tr>
                                    <td><?php echo __('Pricing Tables Patterns', 'fotawp') ?></td>
                                    <td><?php echo __('3', 'fotawp') ?></td>
                                    <td><?php echo __('5+ Advanced Layouts', 'fotawp') ?></td>
                                </tr>
                                <tr>
                                    <td><?php echo __('One Click Demo Import Feature', 'fotawp') ?></td>
                                    <td><span class="dashicons dashicons-saved"></span></td>
                                    <td> <span class="dashicons dashicons-saved"></span></td>
                                </tr>
                                <tr>
                                    <td><?php echo __('FSE Template Layouts', 'fotawp') ?></td>
                                    <td><span class="dashicons dashicons-saved"></span></td>
                                    <td> <span class="dashicons dashicons-saved"></span></td>
                                </tr>
                                <tr>
                                    <td><?php echo __('Global Styles Variations', 'fotawp') ?></td>
                                    <td><span class="dashicons dashicons-saved"></span></td>
                                    <td> <span class="dashicons dashicons-saved"></span></td>
                                </tr>
                                <tr>
                                    <td><?php echo __('Additonal ready to use page template patterns - About, service and contact pages', 'fotawp') ?></td>
                                    <td><span class="dashicons dashicons-no-alt"></span></td>
                                    <td> <span class="dashicons dashicons-saved"></span></td>
                                </tr>


                                <tr>
                                    <td><?php echo __('WooCommerce Patterns', 'fotawp') ?></td>
                                    <td><span class="dashicons dashicons-no-alt"></span></td>
                                    <td> <span class="dashicons dashicons-saved"></span></td>
                                </tr>
                                <tr>
                                    <td><?php echo __('Newsletter Patterns', 'fotawp') ?></td>
                                    <td><span class="dashicons dashicons-no-alt"></span></td>
                                    <td> <span class="dashicons dashicons-saved"></span></td>
                                </tr>
                                <tr>
                                    <td><?php echo __('Post Masonry Layout Patterns', 'fotawp') ?></td>
                                    <td><span class="dashicons dashicons-no-alt"></span></td>
                                    <td> <span class="dashicons dashicons-saved"></span></td>
                                </tr>

                                <tr>
                                    <td><?php echo __('Dynamic Team Patterns', 'fotawp') ?></td>
                                    <td><span class="dashicons dashicons-no-alt"></span></td>
                                    <td> <span class="dashicons dashicons-saved"></span></td>
                                </tr>
                                <tr>
                                    <td><?php echo __('Dynamic Testimonial Patterns', 'fotawp') ?></td>
                                    <td><span class="dashicons dashicons-no-alt"></span></td>
                                    <td> <span class="dashicons dashicons-saved"></span></td>
                                </tr>
                                <tr>
                                    <td><?php echo __('Dynamic Portfolio Patterns', 'fotawp') ?></td>
                                    <td><span class="dashicons dashicons-no-alt"></span></td>
                                    <td> <span class="dashicons dashicons-saved"></span></td>
                                </tr>
                                <tr>
                                    <td><?php echo __('Dynamic Promotion Patterns', 'fotawp') ?></td>
                                    <td><span class="dashicons dashicons-no-alt"></span></td>
                                    <td> <span class="dashicons dashicons-saved"></span></td>
                                </tr>

                                <tr>
                                    <td><?php echo __('Masonry Gallery Patterns', 'fotawp') ?></td>
                                    <td><span class="dashicons dashicons-no-alt"></span></td>
                                    <td> <span class="dashicons dashicons-saved"></span></td>
                                </tr>
                                <tr>
                                    <td colspan="3">
                                        <span class="advanced-features"><?php echo __('WooCommerce Features', 'fotawp') ?></span>
                                    </td>
                                </tr>
                                <tr>
                                    <td><?php echo __('Product Layout Patterns', 'fotawp') ?></td>
                                    <td><span class="dashicons dashicons-saved"></span><?php echo __('1 Basic Layout', 'fotawp') ?></td>
                                    <td> <span class="dashicons dashicons-saved"></span> <?php echo __('4 Advanced Layouts', 'fotawp') ?></td>
                                </tr>
                                <tr>
                                    <td><?php echo __('Product List Elementor Widget', 'fotawp') ?></td>
                                    <td> <span class="dashicons dashicons-saved"></span> <?php echo __('Basic Layout', 'fotawp') ?></td>
                                    <td> <span class="dashicons dashicons-saved"></span> <?php echo __('Advanced Layout', 'fotawp') ?></td>
                                </tr>
                                <tr>
                                    <td><?php echo __('Product Slider Elementor Widget', 'fotawp') ?></td>
                                    <td><span class="dashicons dashicons-no-alt"></span></td>
                                    <td> <span class="dashicons dashicons-saved"></span></td>
                                </tr>
                                <tr>
                                    <td><?php echo __('Product Categories Layout Elementor Widget', 'fotawp') ?></td>
                                    <td><span class="dashicons dashicons-no-alt"></span></td>
                                    <td> <span class="dashicons dashicons-saved"></span></td>
                                </tr>
                                <tr>
                                    <td><?php echo __('WooCommerce Menu Cart Elementor Widget', 'fotawp') ?></td>
                                    <td><span class="dashicons dashicons-no-alt"></span></td>
                                    <td> <span class="dashicons dashicons-saved"></span></td>
                                </tr>

                                <tr>
                                    <td colspan="3">
                                        <span class="advanced-features"><?php echo __('Elementor Features', 'fotawp') ?></span>
                                    </td>
                                </tr>
                                <tr>
                                    <td><?php echo __('Total Elementor Widgets', 'fotawp') ?></td>
                                    <td><?php echo __('25+', 'fotawp') ?></td>
                                    <td><?php echo __('45+ (Including Free)', 'fotawp') ?></td>
                                </tr>
                                <tr>
                                    <td><?php echo __('Section Stikcy Option', 'fotawp') ?></td>
                                    <td><span class="dashicons dashicons-saved"></span></td>
                                    <td><span class="dashicons dashicons-saved"></span></td>
                                </tr>
                                <tr>
                                    <td><?php echo __('Header and Footer Builder', 'fotawp') ?></td>
                                    <td><span class="dashicons dashicons-no-alt"></span></td>
                                    <td> <span class="dashicons dashicons-saved"></span></td>
                                </tr>
                                <tr>
                                    <td><?php echo __('Custom CSS Dashboard Option', 'fotawp') ?></td>
                                    <td><span class="dashicons dashicons-no-alt"></span></td>
                                    <td> <span class="dashicons dashicons-saved"></span></td>
                                </tr>
                                <tr>
                                    <td><?php echo __('Custom Header and Footer Script Option', 'fotawp') ?></td>
                                    <td><span class="dashicons dashicons-no-alt"></span></td>
                                    <td> <span class="dashicons dashicons-saved"></span></td>
                                </tr>
                                <tr>
                                    <td><?php echo __('WooCommerce Widgets', 'fotawp') ?></td>
                                    <td><?php echo __('1 - Basic List Layout', 'fotawp') ?></td>
                                    <td><?php echo __('4 Widgets with Advanced Layout', 'fotawp') ?></td>
                                </tr>
                                <tr>
                                    <td><?php echo __('Site Logo', 'fotawp') ?></td>
                                    <td><span class="dashicons dashicons-saved"></span></td>
                                    <td><span class="dashicons dashicons-saved"></span></td>
                                </tr>
                                <tr>
                                    <td><?php echo __('Travel Package List Widget', 'fotawp') ?></td>
                                    <td><span class="dashicons dashicons-saved"></span> <?php echo __('Limited List', 'fotawp') ?></td>
                                    <td><span class="dashicons dashicons-saved"></span> <span class="feature-text"><?php echo __('Unlimited List with multiple layout', 'fotawp') ?></span></td>
                                </tr>
                                <tr>
                                    <td><?php echo __('Event List Widget', 'fotawp') ?></td>
                                    <td><span class="dashicons dashicons-saved"></span> <?php echo __('Limited List', 'fotawp') ?></td>
                                    <td><span class="dashicons dashicons-saved"></span> <span class="feature-text"><?php echo __('Unlimited List with multiple layout', 'fotawp') ?></span></td>
                                </tr>
                                <tr>
                                    <td><?php echo __('Properties List Widget', 'fotawp') ?></td>
                                    <td><span class="dashicons dashicons-saved"></span> <?php echo __('Limited List', 'fotawp') ?></td>
                                    <td><span class="dashicons dashicons-saved"></span><span class="feature-text"> <?php echo __('Unlimited List with multiple layout', 'fotawp') ?></span></td>
                                </tr>
                                <tr>
                                    <td><?php echo __('Courses List Widget', 'fotawp') ?></td>
                                    <td><span class="dashicons dashicons-saved"></span> <?php echo __('Limited List', 'fotawp') ?></td>
                                    <td><span class="dashicons dashicons-saved"></span><span class="feature-text"> <?php echo __('Unlimited List with multiple layout', 'fotawp') ?></span></td>
                                </tr>
                                <tr>
                                    <td><?php echo __('Post Slider Widget', 'fotawp') ?></td>
                                    <td><span class="dashicons dashicons-saved"></span> <?php echo __('Basic Layout', 'fotawp') ?></td>
                                    <td><span class="dashicons dashicons-saved"></span><span class="feature-text"> <?php echo __('Advanced Layout with multiple layout', 'fotawp') ?></span></td>
                                </tr>
                                <tr>
                                    <td><?php echo __('Navigation Menu Widget', 'fotawp') ?></td>
                                    <td><span class="dashicons dashicons-no-alt"></span></td>
                                    <td> <span class="dashicons dashicons-saved"></span></td>
                                </tr>
                                <tr>
                                    <td><?php echo __('Content Toggle Widget', 'fotawp') ?></td>
                                    <td><span class="dashicons dashicons-no-alt"></span></td>
                                    <td> <span class="dashicons dashicons-saved"></span></td>
                                </tr>
                                <tr>
                                    <td><?php echo __('Sidebar Panel Widget', 'fotawp') ?></td>
                                    <td><span class="dashicons dashicons-no-alt"></span></td>
                                    <td> <span class="dashicons dashicons-saved"></span></td>
                                </tr>
                                <tr>
                                    <td><?php echo __('Sitemao Widget', 'fotawp') ?></td>
                                    <td><span class="dashicons dashicons-no-alt"></span></td>
                                    <td> <span class="dashicons dashicons-saved"></span></td>
                                </tr>
                                <tr>
                                    <td><?php echo __('Magazine Block Widget', 'fotawp') ?></td>
                                    <td><span class="dashicons dashicons-no-alt"></span></td>
                                    <td> <span class="dashicons dashicons-saved"></span></td>
                                </tr>
                                <tr>
                                    <td><?php echo __('Basic Blog Post Widget', 'fotawp') ?></td>
                                    <td> <span class="dashicons dashicons-saved"></span></td>
                                    <td> <span class="dashicons dashicons-saved"></span></td>
                                </tr>
                                <tr>
                                    <td><?php echo __('Blog Post Widget', 'fotawp') ?></td>
                                    <td><span class="dashicons dashicons-no-alt"></span></td>
                                    <td> <span class="dashicons dashicons-saved"></span></td>
                                </tr>
                                <tr>
                                    <td><?php echo __('Contact Form 7 Styler Widget', 'fotawp') ?></td>
                                    <td><span class="dashicons dashicons-no-alt"></span></td>
                                    <td> <span class="dashicons dashicons-saved"></span></td>
                                </tr>
                                <tr>
                                    <td><?php echo __('Date and Time Widget', 'fotawp') ?></td>
                                    <td><span class="dashicons dashicons-no-alt"></span></td>
                                    <td> <span class="dashicons dashicons-saved"></span></td>
                                </tr>
                                <tr>
                                    <td><?php echo __('Footer Copyright Text', 'fotawp') ?></td>
                                    <td><span class="dashicons dashicons-no-alt"></span></td>
                                    <td> <span class="dashicons dashicons-saved"></span></td>
                                </tr>
                                <tr>
                                    <td><?php echo __('Typeout Text', 'fotawp') ?></td>
                                    <td><span class="dashicons dashicons-no-alt"></span></td>
                                    <td> <span class="dashicons dashicons-saved"></span></td>
                                </tr>
                                <tr>
                                    <td><?php echo __('Promotion Widget', 'fotawp') ?></td>
                                    <td><span class="dashicons dashicons-no-alt"></span></td>
                                    <td> <span class="dashicons dashicons-saved"></span></td>
                                </tr>
                                <tr>
                                    <td><?php echo __('Promotion Widget', 'fotawp') ?></td>
                                    <td><span class="dashicons dashicons-no-alt"></span></td>
                                    <td> <span class="dashicons dashicons-saved"></span></td>
                                </tr>
                                <tr>
                                    <td><?php echo __('My Account Widget', 'fotawp') ?></td>
                                    <td><span class="dashicons dashicons-no-alt"></span></td>
                                    <td> <span class="dashicons dashicons-saved"></span></td>
                                </tr>
                                <tr>
                                    <td colspan="2"><?php echo __('Please visit our site to explore 45+ more widgets and features', 'fotawp') ?> - <a href="https://cozythemes.com/cozy-addons/" target="_blank"> <?php echo __('Explore More Widgets', 'fotawp') ?></a></td>
                                    <td>
                                        <a href="https://cozythemes.com/pricing-and-plans/" target="_blank" class="more-button">
                                            <?php echo __('Upgrade to Pro', 'fotawp'); ?>
                                        </a>
                                    </td>
                                </tr>

                            </table>

                        </div>
                    </div> <!-- END tabs-content -->
                </div> <!-- END tabs -->

                <div class="fotawp-dashboard-sidebar">
                    <div class="sidebar-card">
                        <h3><?php echo __('Need Support', 'fotawp') ?></h3>
                        <p><?php echo __('Still, having problems after reading all the documentation? No Problem!! Please create a support ticket. Our dedicated support team will help you to solve your problem.', 'fotawp') ?></p>
                        <a class="sidebar-btn" href="https://cozythemes.com/support/" target="_blank"><?php echo __('Create Ticket', 'fotawp') ?></a>
                        <span class="support-note">
                            <p><?php echo __('Note: The support ticket has generally been responded to within 24 hours.', 'fotawp') ?></p>
                        </span>
                    </div>
                    <div class="sidebar-card">
                        <h3><?php echo __('Documentation', 'fotawp') ?></h3>
                        <p><?php echo __('Find our complete step-by-step documentation to understand how our theme and its features work.', 'fotawp') ?></p>
                        <a class="sidebar-btn" href="https://cozythemes.com/docs-category/fotawp/" target="_blank"><?php echo __('Documentation', 'fotawp') ?></a>
                    </div>
                    <div class="sidebar-card">
                        <h3><?php echo __('Leave a Review', 'fotawp') ?></h3>
                        <p><?php echo __('We kindly kindly request your review and feedback, to help us continue to enhance our product. Your feedback and review would be greatly appreciated!', 'fotawp') ?></p>
                        <a class="sidebar-btn" href="hhttps://wordpress.org/support/theme/fotawp/reviews/" target="_blank"><?php echo __('Submit Review', 'fotawp') ?></a>
                        <a class="sidebar-btn" href="https://cozythemes.com/feedback-form/" target="_blank"><?php echo __('Submit Feedback', 'fotawp') ?></a>
                    </div>
                </div>
            </div>
            <div class="dashboard-footer-cta">
                <div class="notice-content">
                    <h2><?php echo __('Upgrade Now', 'fotawp') ?></h2>
                    <p> <?php echo __('Access all 25+ demos, 80+ Premium Patterns, 40+ Elementor widgets, Header Footer Builder for Elementor, custom CSS, custom header & footer scripts option and all powerful premium features with just single license!', 'fotawp') ?></p>
                    <a href="https://cozythemes.com/pricing-and-plans/" target="_blank" class="upgrade-btn"><?php echo __('Get FotaWP Pro Now', 'fotawp') ?></a>
                </div>
            </div>
        </div>
    </div>
<?php }
