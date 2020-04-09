<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              ludwigbethnicer.me
 * @since             1.0.0
 * @package           User_role_redirect_page
 *
 * @wordpress-plugin
 * Plugin Name:       User Role Redirect Page
 * Plugin URI:        https://github.com/ludwigbethnicer/user_role_redirect_page
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.0
 * Author:            Ludwig Bethnicer C. Napigkit
 * Author URI:        ludwigbethnicer.me
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       user_role_redirect_page
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'USER_ROLE_REDIRECT_PAGE_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-user_role_redirect_page-activator.php
 */
function activate_user_role_redirect_page() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-user_role_redirect_page-activator.php';
	User_role_redirect_page_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-user_role_redirect_page-deactivator.php
 */
function deactivate_user_role_redirect_page() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-user_role_redirect_page-deactivator.php';
	User_role_redirect_page_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_user_role_redirect_page' );
register_deactivation_hook( __FILE__, 'deactivate_user_role_redirect_page' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-user_role_redirect_page.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_user_role_redirect_page() {

	$plugin = new User_role_redirect_page();
	$plugin->run();

}
run_user_role_redirect_page();
