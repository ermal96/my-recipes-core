<?php
/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              www.ermal.dev
 * @since             1.0.0
 * @package           My_Recipes_Core
 *
 * @wordpress-plugin
 * Plugin Name:       My Recipes Core
 * Plugin URI:        www.ermal.dev
 * Description:       My Recipes core plugin
 * Version:           1.0.0
 * Author:            Ermal Vrapi
 * Author URI:        www.ermal.dev/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       my-recipes-core
 * Domain Path:       /languages
 */

namespace mr\my_recipes_core;

use mr\my_recipes_core_includes\My_Recipes_Core;
use mr\my_recipes_core_includes\Activator;
use mr\my_recipes_core_includes\Deactivator;

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

const PLUGIN_NAME = 'my_recipes_core';

/**
 * Include classes with Composer.
 */
require_once plugin_dir_path( __FILE__ ) . '/vendor/autoload.php';

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'MY_RECIPES_CORE_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-activator.php
 */
function activate_my_recipes_core() {
	Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-deactivator.php
 */
function deactivate_my_recipes_core() {
	Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'mr\my_recipes_core\activate_my_recipes_core' );
register_deactivation_hook( __FILE__, 'mr\my_recipes_core\deactivate_my_recipes_core' );

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_my_recipes_core() {

	$plugin = new My_Recipes_Core();
	$plugin->run();

}
run_my_recipes_core();
