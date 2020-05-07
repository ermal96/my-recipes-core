<?php
/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       www.ermal.dev
 * @since      1.0.0
 *
 * @package    My_Recipes_Core
 * @subpackage My_Recipes_Core/includes
 */

namespace mr\my_recipes_core_includes;

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    My_Recipes_Core
 * @subpackage My_Recipes_Core/includes
 * @author     Ermal Vrapi <ermalvrapi18@gmail.com>
 */
class I18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'my-recipes-core',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
