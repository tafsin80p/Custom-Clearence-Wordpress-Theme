<?php
/**
 * Registers the custom post type for Services.
 */
function custom_clearance_create_service_post_type() {
    $labels = array(
        'name'                  => _x( 'Services', 'Post type general name', 'customsclearance' ),
        'singular_name'         => _x( 'Service', 'Post type singular name', 'customsclearance' ),
        'menu_name'             => _x( 'Services', 'Admin Menu text', 'customsclearance' ),
        'name_admin_bar'        => _x( 'Service', 'Add New on Toolbar', 'customsclearance' ),
        'add_new'               => __( 'Add New', 'customsclearance' ),
        'add_new_item'          => __( 'Add New Service', 'customsclearance' ),
        'new_item'              => __( 'New Service', 'customsclearance' ),
        'edit_item'             => __( 'Edit Service', 'customsclearance' ),
        'view_item'             => __( 'View Service', 'customsclearance' ),
        'all_items'             => __( 'All Services', 'customsclearance' ),
        'search_items'          => __( 'Search Services', 'customsclearance' ),
        'parent_item_colon'     => __( 'Parent Services:', 'customsclearance' ),
        'not_found'             => __( 'No services found.', 'customsclearance' ),
        'not_found_in_trash'    => __( 'No services found in Trash.', 'customsclearance' ),
        'featured_image'        => _x( 'Service Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'customsclearance' ),
        'set_featured_image'    => _x( 'Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'customsclearance' ),
        'remove_featured_image' => _x( 'Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'customsclearance' ),
        'use_featured_image'    => _x( 'Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'customsclearance' ),
        'archives'              => _x( 'Service archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'customsclearance' ),
        'insert_into_item'      => _x( 'Insert into service', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'customsclearance' ),
        'uploaded_to_this_item' => _x( 'Uploaded to this service', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'customsclearance' ),
        'filter_items_list'     => _x( 'Filter services list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'customsclearance' ),
        'items_list_navigation' => _x( 'Services list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'customsclearance' ),
        'items_list'            => _x( 'Services list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'customsclearance' ),
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'services' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 20,
        'supports'           => array( 'title', 'editor', 'thumbnail', 'excerpt', 'custom-fields' ),
        'menu_icon'          => 'dashicons-admin-tools',
    );

    register_post_type( 'service', $args );
}
add_action( 'init', 'custom_clearance_create_service_post_type' );