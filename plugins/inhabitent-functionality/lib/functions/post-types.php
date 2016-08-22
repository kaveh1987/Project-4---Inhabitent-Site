<?php
/**
 * POST TYPES
 *
 * @link  http://codex.wordpress.org/Function_Reference/register_post_type
 */

// Add your custom post types here...
// Register Custom Post Type
function inhabitent_register_product_cpt() {

	$labels = array(
		'name'                  => 'products',
		'singular_name'         => 'product',
		'menu_name'             => 'Products',
		'name_admin_bar'        => 'Post Typeproduct',
		'archives'              => 'product Archives',
		'parent_item_colon'     => 'Parent product:',
		'all_items'             => 'All product',
		'add_new_item'          => 'Add New product',
		'add_new'               => 'Add New',
		'new_item'              => 'New product',
		'edit_item'             => 'Edit product',
		'update_item'           => 'Update product',
		'view_item'             => 'View product',
		'search_items'          => 'Search product',
		'not_found'             => 'Not found',
		'not_found_in_trash'    => 'Not found in Trash',
		'featured_image'        => 'product Image',
		'set_featured_image'    => 'Set product image',
		'remove_featured_image' => 'Remove product image',
		'use_featured_image'    => 'Use as product image',
		'insert_into_item'      => 'Insert into product',
		'uploaded_to_this_item' => 'Uploaded to this product',
		'items_list'            => 'products list',
		'items_list_navigation' => 'products list navigation',
		'filter_items_list'     => 'Filter products list',
	);
	$args = array(
		'label'                 => 'product',
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'author', 'thumbnail', 'revisions', ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-cart',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => 'products',
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'post',
	);
	register_post_type( 'product', $args );

}
add_action( 'init', 'inhabitent_register_product_cpt', 0 );
