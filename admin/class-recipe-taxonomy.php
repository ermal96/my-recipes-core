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
class Recipes_Taxonomy {

	/**
	 * Singleton instance
	 *
	 * @var Recipes_Taxonomy $instance This instance.
	 */
	private static $instance = null;

	/**
	 * Tax collection.
	 */
	const TAX_KEY = 'collection';

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
	 * @return Recipes_Taxonomy
	 */
	public static function get_instance() {
		if ( is_null( self::$instance ) ) {
			$c              = __CLASS__;
			self::$instance = new $c();
		}

		return self::$instance;
	}


	/**
	 * Create Taxonomy.
	 */
	public function create_taxonomy() {

		$taxonomy = self::TAX_KEY;
		$args     = array(
			'labels'            => array(
				'name'                       => __( 'Collections', 'my-recipes-core' ),
				'singular_name'              => __( 'Collection', 'my-recipes-core' ),
				'menu_name'                  => __( 'Collections', 'my-recipes-core' ),
				'all_items'                  => __( 'Collections', 'my-recipes-core' ),
				'parent_item'                => __( 'Parent Item', 'my-recipes-core' ),
				'parent_item_colon'          => __( 'Parent Item:', 'my-recipes-core' ),
				'new_item_name'              => __( 'New Collection Name', 'my-recipes-core' ),
				'add_new_item'               => __( 'Add Collection Item', 'my-recipes-core' ),
				'edit_item'                  => __( 'Edit Collection', 'my-recipes-core' ),
				'update_item'                => __( 'Update Collection', 'my-recipes-core' ),
				'view_item'                  => __( 'View Collection', 'my-recipes-core' ),
				'separate_items_with_commas' => __( 'Separate items with commas', 'my-recipes-core' ),
				'add_or_remove_items'        => __( 'Add or remove Collections', 'my-recipes-core' ),
				'choose_from_most_used'      => __( 'Choose from the most used', 'my-recipes-core' ),
				'popular_items'              => __( 'Collections', 'my-recipes-core' ),
				'search_items'               => __( 'Search Collections', 'my-recipes-core' ),
				'not_found'                  => __( 'Not Found', 'my-recipes-core' ),
				'no_terms'                   => __( 'No Collections', 'my-recipes-core' ),
				'items_list'                 => __( 'Items list', 'my-recipes-core' ),
				'items_list_navigation'      => __( 'Items list navigation', 'my-recipes-core' ),
				'back_to_items'              => __( 'Back to Collections', 'my-recipes-core' ),
			),
			'public'            => true,
			'hierarchical'      => true,
			'show_ui'           => true,
			'show_admin_column' => true,
			'show_in_nav_menus' => true,
			'show_in_rest'      => true,
			'with_front'        => true,
			'rewrite'             => array(
				'slug' => __( 'collections', 'my-recipes-core' ),
			),
		);
		register_taxonomy( $taxonomy, 'recipe', $args );
	}

}
