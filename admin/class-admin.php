<?php
/**
 * The admin-specific functionality of the plugin.
 *
 * @link       www.ermal.dev
 * @since      1.0.0
 *
 * @package    My_Recipes_Core
 * @subpackage My_Recipes_Core/admin
 */

namespace mr\my_recipes_core_admin;

use const mr\my_recipes_core\PLUGIN_NAME;

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    My_Recipes_Core
 * @subpackage My_Recipes_Core/admin
 * @author     Ermal Vrapi <ermalvrapi18@gmail.com>
 */
class Admin {

	/**
	 * Singleton instance
	 *
	 * @var Admin $instance This instance.
	 */
	private static $instance = null;

	/**
	 * Administration page title
	 *
	 * @var string
	 */
	private $page_title;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 */
	private function __construct() {
		$this->page_title  = 'My Recipes Core';
	}

	/**
	 * Get class instance
	 *
	 * @return Admin
	 */
	public static function get_instance() {
		if ( is_null( self::$instance ) ) {
			$c              = __CLASS__;
			self::$instance = new $c();
		}

		return self::$instance;
	}

	/**
	 * Register the stylesheets for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {
		wp_enqueue_style(
			PLUGIN_NAME,
			plugin_dir_url( __FILE__ ) . 'css/admin.css',
			array(),
			filemtime( plugin_dir_path( __FILE__ ) . 'css/admin.css' ),
			'all'
		);

	}

	/**
	 * Register the JavaScript for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {
		wp_enqueue_script(
			PLUGIN_NAME,
			plugin_dir_url( __FILE__ ) . 'js/admin.js',
			array( 'jquery' ),
			filemtime( plugin_dir_path( __FILE__ ) . 'js/admin.js' ),
			true
		);

	}


}
