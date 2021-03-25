<?php
/**
 * Registering custom post types
 */

function bag_init() {
    $labels = array(
        'name'                  => _x( 'Bags', 'Post type general name', 'bag' ),
        'singular_name'         => _x( 'Bag', 'Post type singular name', 'bag' ),
        'menu_name'             => _x( 'Bags', 'Admin Menu text', 'bag' ),
        'name_admin_bar'        => _x( 'Bag', 'Add New on Toolbar', 'bag' ),
        'add_new'               => __( 'Add New', 'bag' ),
        'add_new_item'          => __( 'Add New bag', 'bag' ),
        'new_item'              => __( 'New bag', 'bag' ),
        'edit_item'             => __( 'Edit bag', 'bag' ),
        'view_item'             => __( 'View bag', 'bag' ),
        'all_items'             => __( 'All bags', 'bag' ),
        'search_items'          => __( 'Search bags', 'bag' ),
        'parent_item_colon'     => __( 'Parent bags:', 'bag' ),
        'not_found'             => __( 'No bags found.', 'bag' ),
        'not_found_in_trash'    => __( 'No bags found in Trash.', 'bag' ),
        'featured_image'        => _x( 'Bag Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'bag' ),
        'set_featured_image'    => _x( 'Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'bag' ),
        'remove_featured_image' => _x( 'Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'bag' ),
        'use_featured_image'    => _x( 'Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'bag' ),
        'archives'              => _x( 'Bag archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'bag' ),
        'insert_into_item'      => _x( 'Insert into bag', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'bag' ),
        'uploaded_to_this_item' => _x( 'Uploaded to this bag', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'bag' ),
        'filter_items_list'     => _x( 'Filter bags list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'bag' ),
        'items_list_navigation' => _x( 'Bags list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'bag' ),
        'items_list'            => _x( 'Bags list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'bag' ),
    );     
    $args = array(
        'labels'             => $labels,
        'description'        => 'Bag custom post type.',
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'bags' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'menu_icon'          => 'dashicons-products',
        'supports'           => array( 'title', 'editor', 'author', 'thumbnail' ),
        'show_in_rest'       => true
    );
    
    register_post_type( 'sampletheme_bag', $args );
}
add_action( 'init', 'bag_init' );

