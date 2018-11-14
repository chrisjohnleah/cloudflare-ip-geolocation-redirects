<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://codebychris.co.uk/about
 * @since             1.0.0
 * @package           Cloudflare_Ip_Geolocation_Redirects
 *
 * @wordpress-plugin
 * Plugin Name:       Cloudflare IP Geolocation Redirects
 * Plugin URI:        https://codebychris.co.uk/work/plugins/cloudflare-ip-geolocation-redirects
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.0
 * Author:            Christopher Leah
 * Author URI:        https://codebychris.co.uk/about
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       cloudflare-ip-geolocation-redirects
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
define( 'PLUGIN_NAME_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-cloudflare-ip-geolocation-redirects-activator.php
 */
function activate_cloudflare_ip_geolocation_redirects() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-cloudflare-ip-geolocation-redirects-activator.php';
	Cloudflare_Ip_Geolocation_Redirects_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-cloudflare-ip-geolocation-redirects-deactivator.php
 */
function deactivate_cloudflare_ip_geolocation_redirects() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-cloudflare-ip-geolocation-redirects-deactivator.php';
	Cloudflare_Ip_Geolocation_Redirects_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_cloudflare_ip_geolocation_redirects' );
register_deactivation_hook( __FILE__, 'deactivate_cloudflare_ip_geolocation_redirects' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-cloudflare-ip-geolocation-redirects.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_cloudflare_ip_geolocation_redirects() {

	$plugin = new Cloudflare_Ip_Geolocation_Redirects();
	$plugin->run();

}
run_cloudflare_ip_geolocation_redirects();
