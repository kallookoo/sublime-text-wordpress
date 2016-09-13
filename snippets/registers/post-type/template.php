<?php
/**
 * Template Custom Post Type
 * Complete List of arguments
 *
 * @see https://codex.wordpress.org/Function_Reference/register_post_type
 */
function function_prefix_register_post_type() {

	$args = array(
		// Because of the many possibilities use wp-post-type-args to display arguments snippets
		// 'label'                => _x( 'Plural Name', 'Post type general name', 'text_domain' ),
		// 'labels'               => array(
		// 	'name'                  => _x( 'Plural Name', 'Post type general name', 'text_domain' ),
		// 	'singular_name'         => _x( 'Singular Name', 'Post type singular name', 'text_domain' ),
		// 	'menu_name'             => _x( 'Plural Name', 'Admin Menu text', 'text_domain' ),
		// 	'name_admin_bar'        => _x( 'Singular Name', 'Add New on Toolbar', 'text_domain' ),
		// 	'add_new'               => __( 'Add New', 'text_domain' ),
		// 	'add_new_item'          => __( 'Add New Singular Name', 'text_domain' ),
		// 	'new_item'              => __( 'New Singular Name', 'text_domain' ),
		// 	'edit_item'             => __( 'Edit Singular Name', 'text_domain' ),
		// 	'view_item'             => __( 'View Singular Name', 'text_domain' ),
		// 	'all_items'             => __( 'All Plural Name', 'text_domain' ),
		// 	'search_items'          => __( 'Search Plural Name', 'text_domain' ),
		// 	'parent_item_colon'     => __( 'Parent Plural Name:', 'text_domain' ),
		// 	'not_found'             => __( 'No Plural Name found.', 'text_domain' ),
		// 	'not_found_in_trash'    => __( 'No Plural Name found in Trash.', 'text_domain' ),
		// 	'featured_image'        => _x( 'Singular Name Cover Image', 'Overrides the "Featured Image" phrase for this post type.', 'text_domain' ),
		// 	'set_featured_image'    => _x( 'Set cover image', 'Overrides the "Set featured image" phrase for this post type.', 'text_domain' ),
		// 	'remove_featured_image' => _x( 'Remove cover image', 'Overrides the "Remove featured image" phrase for this post type.', 'text_domain' ),
		// 	'use_featured_image'    => _x( 'Use as cover image', 'Overrides the "Use as featured image" phrase for this post type.', 'text_domain' ),
		// 	'archives'              => _x( 'Singular Name archives', 'The post type archive label used in nav menus. Default "Post Archives".', 'text_domain' ),
		// 	'insert_into_item'      => _x( 'Insert into Singular Name', 'Overrides the "Insert into post" or "Insert into page" phrase (used when inserting media into a post).', 'text_domain' ),
		// 	'uploaded_to_this_item' => _x( 'Uploaded to this Singular Name', 'Overrides the "Uploaded to this post"/"Uploaded to this page" phrase (used when viewing media attached to a post).', 'text_domain' ),
		// 	'filter_items_list'     => _x( 'Filter Plural Name list', 'Screen reader text for the filter links heading on the post type listing screen. Default "Filter posts list"/"Filter pages list".', 'text_domain' ),
		// 	'items_list_navigation' => _x( 'Plural Name list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default "Posts list navigation"/"Pages list navigation".', 'text_domain' ),
		// 	'items_list'            => _x( 'Plural Name list', 'Screen reader text for the items list heading on the post type listing screen. Default "Posts list"/"Pages list".', 'text_domain' ),
		// ),
		// 'description'          => __( 'Post Type Description', 'text_domain' ),
		// 'public'               => true,
		// 'exclude_from_search'  => false,
		// 'publicly_queryable'   => true,
		// 'show_ui'              => true,
		// 'show_in_nav_menus'    => true,
		// 'show_in_menu'         => true,
		// 'show_in_admin_bar'    => true,
		// 'menu_position'        => null,
		// 'menu_icon'            => null,
		// 'capability_type'      => 'post',
		// 'capabilities'         => array(),
		// 'map_meta_cap'         => null,
		// 'hierarchical'         => false,
		// 'supports'             => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'trackbacks', 'revisions', 'custom-fields', 'page-attributes', 'post-formats' ),
		// 'register_meta_box_cb' => '',
		// 'taxonomies'           => array( 'category', 'post_tag' ),
		// 'has_archive'          => true,
		// 'permalink_epmask'     => EP_PERMALINK,
		// 'rewrite'              => array(
		// 	'slug'       => 'post_type',
		// 	'with_front' => true,
		// 	'feeds'      => true,
		// 	'pages'      => true,
		// 	'ep_mask'    => EP_PERMALINK
		// ),
		// 'query_var'            => true,
		// 'can_export'           => true,
	);

	if ( ! post_type_exists( 'post_type' ) ) {
		register_post_type( 'post_type', $args );
	}
}
add_action( 'init', 'function_prefix_register_post_type', 0 );
