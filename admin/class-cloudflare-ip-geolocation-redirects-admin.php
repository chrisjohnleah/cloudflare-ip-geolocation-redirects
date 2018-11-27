<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       https://codebychris.co.uk/about
 * @since      1.0.0
 *
 * @package    Cloudflare_Ip_Geolocation_Redirects
 * @subpackage Cloudflare_Ip_Geolocation_Redirects/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Cloudflare_Ip_Geolocation_Redirects
 * @subpackage Cloudflare_Ip_Geolocation_Redirects/admin
 * @author     Christopher Leah <chrisjohnleah@gmail.com>
 */
class Cloudflare_Ip_Geolocation_Redirects_Admin {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $plugin_name    The ID of this plugin.
	 */
	private $plugin_name;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $plugin_name       The name of this plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;

	}

	/**
	 * Register the stylesheets for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Cloudflare_Ip_Geolocation_Redirects_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Cloudflare_Ip_Geolocation_Redirects_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

//		wp_enqueue_style( 'v-animate-css', 'https://unpkg.com/vue2-animate/dist/vue2-animate.min.css', array(), '2', 'all' );
		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/cloudflare-ip-geolocation-redirects-admin.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Cloudflare_Ip_Geolocation_Redirects_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Cloudflare_Ip_Geolocation_Redirects_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */
		//TODO: Change Vue CDN URL from dev script to producton script: https://cdn.jsdelivr.net/npm/vue
  		//wp_enqueue_script( $this->plugin_name.'-vuejs', 'https://cdnjs.cloudflare.com/ajax/libs/vue/2.5.17/vue.min.js', array(), '2.5.17', false );
		wp_enqueue_script( $this->plugin_name.'-vuejs', 'https://cdnjs.cloudflare.com/ajax/libs/vue/2.5.17/vue.js', array(), '2.5.17', false );
		//https://jofftiquez.github.io/v-animate-css/
		wp_enqueue_script( 'v-animate-css', 'https://unpkg.com/v-animate-css/dist/v-animate-css.js', array($this->plugin_name.'-vuejs'), '1', false );
		//https://github.com/sagalbot/vue-select
        //wp_enqueue_script( 'vue-select', 'https://unpkg.com/vue-select@latest', array($this->plugin_name.'-vuejs'), '2.5.3', false );
		wp_enqueue_script( 'vee-validate', 'https://cdn.jsdelivr.net/npm/vee-validate@latest/dist/vee-validate.js', array($this->plugin_name.'-vuejs'), '2.1.3', false );
		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/cloudflare-ip-geolocation-redirects-admin.js', array(), $this->version, true );
	}

	/**
	 * Add an options page under the Tools submenu
	 *
	 * @since  1.0.0
	 */
	public function add_options_page() {

		$this->plugin_screen_hook_suffix = add_options_page(
			__( 'Cloudflare IP Geolocation Redirects Settings', 'cl-cf-ip-gl-r' ),
			__( 'Cloudflare IP Geolocation Redirects', 'cl-cf-ip-gl-r' ),
			'manage_options',
			$this->plugin_name,
			array( $this, 'display_options_page' )
		);

	}

	/**
	 * Render the options page for plugin
	 *
	 * @since  1.0.0
	 */
	public function display_options_page() {
		include_once 'partials/cloudflare-ip-geolocation-redirects-admin-display.php';
	}

	/**
	 * Save new and update previous option settings
	 *
	 * @since  1.0.0
	 */
	public function save_changes($redirects) {

		// array of options
		$data_r = ['title' => 'hello world!', 1, false];
		// add a new option
		add_option('wporg_custom_option', $data_r);
		// get an option
		$options_r = get_option('wporg_custom_option');
		// output the title
		//echo esc_html($options_r['title']);

		wp_send_json($options_r['title']);
		die();
	}



}
