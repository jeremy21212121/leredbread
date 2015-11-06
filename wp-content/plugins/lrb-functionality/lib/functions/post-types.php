<?php
/**
 * POST TYPES
 *
 * @link  http://codex.wordpress.org/Function_Reference/register_post_type
 */

 // Register Custom Post Type
 function lrb_product_post_type() {

 	$labels = array(
 		'name'                => 'Products',
 		'singular_name'       => 'Product',
 		'menu_name'           => 'Product',
 		'name_admin_bar'      => 'Product',
 		'parent_item_colon'   => 'Parent Product:',
 		'all_items'           => 'All Products',
 		'add_new_item'        => 'Add New Product',
 		'add_new'             => 'Add New',
 		'new_item'            => 'New Product',
 		'edit_item'           => 'Edit Product',
 		'update_item'         => 'Update Product',
 		'view_item'           => 'View Product',
 		'search_items'        => 'Search Product',
 		'not_found'           => 'Not found',
 		'not_found_in_trash'  => 'Not found in Trash',
 	);
 	$args = array(
 		'label'               => 'Product',
 		'labels'              => $labels,
 		'supports'            => array( 'title', 'editor', 'author', 'thumbnail', 'revisions', ),
 		'hierarchical'        => false,
 		'public'              => true,
 		'show_ui'             => true,
 		'show_in_menu'        => true,
 		'menu_position'       => 5,
 		'show_in_admin_bar'   => true,
 		'show_in_nav_menus'   => true,
 		'can_export'          => true,
 		'has_archive'         => 'products',
 		'exclude_from_search' => false,
 		'publicly_queryable'  => true,
 		'capability_type'     => 'post',
 	);
 	register_post_type( 'product', $args );

 }
 add_action( 'init', 'lrb_product_post_type', 0 );
