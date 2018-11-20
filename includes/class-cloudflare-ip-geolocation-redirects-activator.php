<?php

/**
 * Fired during plugin activation
 *
 * @link       https://codebychris.co.uk/about
 * @since      1.0.0
 *
 * @package    Cloudflare_Ip_Geolocation_Redirects
 * @subpackage Cloudflare_Ip_Geolocation_Redirects/includes
 */

/**
 * Fired during plugin activation.
 *
 * This class defines all code necessary to run during the plugin's activation.
 *
 * @since      1.0.0
 * @package    Cloudflare_Ip_Geolocation_Redirects
 * @subpackage Cloudflare_Ip_Geolocation_Redirects/includes
 * @author     Christopher Leah <chrisjohnleah@gmail.com>
 */
class Cloudflare_Ip_Geolocation_Redirects_Activator {

	/**
	 * Short Description. (use period)
	 *
	 * Long Description.
	 *
	 * @since    1.0.0
	 */
	public static function activate() {
		// Check if CF IP location headers are present
//		if ( !$_SERVER['HTTP_CF_IPCOUNTRY'] ) {
//
//			deactivate_plugins( plugin_basename( __FILE__ ) );
//			//error 01 is for when the header HTTP_CF_IPCOUNTRY is not detected.
//            //How to enable the feature on CF - https://support.cloudflare.com/hc/en-us/articles/200168236-What-does-Cloudflare-IP-Geolocation-do-
//            //TODO: Create error code documentation and finish my own damn site.
//            wp_die(__( '<h1>Oh no! We decided not to activate!</h1><p><em>But why?</em> We were unable to detect Cloudflare\'s IP Geolocation feature was enabled.</strong></p>
//                <p>Error: <a href="https://codebychris.co.uk/work/plugins/cloudflare-ip-geolocation-redirects/error-codes">#001</a></p>', 'cl-cf-ip-gl-r' ));
//
//		}

	}

}
