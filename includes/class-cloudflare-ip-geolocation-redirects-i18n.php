<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://codebychris.co.uk/about
 * @since      1.0.0
 *
 * @package    Cloudflare_Ip_Geolocation_Redirects
 * @subpackage Cloudflare_Ip_Geolocation_Redirects/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Cloudflare_Ip_Geolocation_Redirects
 * @subpackage Cloudflare_Ip_Geolocation_Redirects/includes
 * @author     Christopher Leah <chrisjohnleah@gmail.com>
 */
class Cloudflare_Ip_Geolocation_Redirects_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'cloudflare-ip-geolocation-redirects',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
