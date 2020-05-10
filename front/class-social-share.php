<?php
/**
 * The public-facing functionality of the plugin.
 *
 * @link       www.ermal.dev
 * @since      1.0.0
 *
 * @package    My_Recipes_Core
 * @subpackage My_Recipes_Core/front
 */

namespace mr\my_recipes_core_front;

use const mr\my_recipes_core\PLUGIN_NAME;

/**
 * The public-facing functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the public-facing stylesheet and JavaScript.
 *
 * @package    My_Recipes_Core
 * @subpackage My_Recipes_Core/front
 * @author     Ermal Vrapi <ermalvrapi18@gmail.com>
 */
class Social_Share {

	/**
	 * Singleton instance
	 *
	 * @var Front $instance This instance.
	 */
	private static $instance = null;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 */
	private function __construct() {

	}

	/**
	 * Get class instance
	 *
	 * @return Front
	 */
	public static function get_instance() {
		if ( is_null( self::$instance ) ) {
			$c              = __CLASS__;
			self::$instance = new $c();
		}

		return self::$instance;
	}


		/**
		 * Register the JavaScript for the public-facing side of the site.
		 *
		 * @since    1.0.0
		 */

	public function enqueue_scripts() {

		wp_enqueue_script(
			'mr-social-share',
			plugin_dir_url( __FILE__ ) . 'js/social-share.js',
			array(
				'jquery',
			),
			filemtime( plugin_dir_path( __FILE__ ) . 'js/social-share.js' ),
			true
		);

		wp_localize_script(
			'mr-social-share',
			'mrSocialShare',
			array(
				'languageDomain'    => 'my-recipes-core',
				'messageLinkCopied' => __( 'Link added to the clipboard!', 'my-recipes-core' ),
			)
		);

	}

	/**
	 * Hook to add the buttons of social sharing
	 */
	public function add_social_sharing() {
		include plugin_dir_path( __FILE__ ) . 'partials/social-share-display.php';
	}




}
