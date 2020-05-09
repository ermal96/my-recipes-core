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
class Recipes_Cpt {

	/**
	 * Singleton instance
	 *
	 * @var Recipes_Cpt $instance This instance.
	 */
	private static $instance = null;

	/**
	 * Page slug
	 *
	 * @var string
	 */
	private $menu_slug;

	/**
	 * Custom Post Type Name for banner.
	 */
	const CPT_KEY = 'recipe';

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 */
	private function __construct() {
		$this->menu_slug = self::CPT_KEY;
	}

	/**
	 * Get class instance
	 *
	 * @return Recipes_Cpt
	 */
	public static function get_instance() {
		if ( is_null( self::$instance ) ) {
			$c              = __CLASS__;
			self::$instance = new $c();
		}

		return self::$instance;
	}


		/**
		 * Creates custom post type Promotional banner.
		 */
	public function create_cpt_recipes() {
		register_post_type(
			self::CPT_KEY,
			array(
				'labels'              => array(
					'name'                  => __( 'Recipes', 'my-recipes-core' ),
					'singular_name'         => __( 'Recipe ', 'my-recipes-core' ),
					'edit_item'             => __( 'Edit Recipe ', 'my-recipes-core' ),
					'new_item'              => __( 'New Recipe ', 'my-recipes-core' ),
					'view_item'             => __( 'View Recipe ', 'my-recipes-core' ),
					'search_items'          => __( 'Search Recipe', 'my-recipes-core' ),
					'not_found'             => __( 'Recipes Not Found', 'my-recipes-core' ),
					'all_items'             => __( 'All Recipe', 'my-recipes-core' ),
					'archives'              => __( 'Recipe Archives', 'my-recipes-core' ),
					'attributes'            => __( 'Recipe Attributes', 'my-recipes-core' ),
					'insert_into_item'      => __( 'Insert Into Recipe ', 'my-recipes-core' ),
					'featured_image'        => __( 'Recipe Image', 'my-recipes-core' ),
					'set_featured_image'    => __( 'Set Recipe  Image', 'my-recipes-core' ),
					'remove_featured_image' => __( 'Remove Recipe  Image', 'my-recipes-core' ),
					'item_published'        => __( 'Recipe  Published', 'my-recipes-core' ),
					'item_updated'          => __( 'Recipe  Updated', 'my-recipes-core' ),
				),
				'menu_icon'           => 'dashicons-book-alt',
				'show_in_rest'        => true,
				'public'              => true,
				'with_front'          => true,
				'has_archive'         => false,
				'public'              => true,
				'exclude_from_search' => false,
				'taxonomies'          => array( 'collection' ),
				'supports'            => array(
					'title',
					'thumbnail',
					'revisions',
					'custom-fields',
					'post-formats',
				),
			)
		);
	}




}
