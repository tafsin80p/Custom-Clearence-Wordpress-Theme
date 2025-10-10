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
        'show_in_nav_menus'  => true,
        'show_in_rest'       => true, // Enable Gutenberg editor
        'query_var'          => true,
        'rewrite'            => array( 
            'slug' => 'services',  // Slug used for the custom post type
            'with_front' => false  // Don't prepend the front base (e.g. /blog/services/)
        ),
        'capability_type'    => 'post',
        'has_archive'        => 'services', // Archive page for the CPT
        'hierarchical'       => false,
        'menu_position'      => 20, // Position in the menu
        'supports'           => array( 'title', 'editor', 'thumbnail', 'excerpt', 'custom-fields', 'page-attributes' ), // Custom fields support
        'menu_icon'          => 'dashicons-admin-tools', // Icon for the admin menu
        'show_in_admin_bar'  => true,
    );

    register_post_type( 'service', $args ); // Register the custom post type 'service'
}
add_action( 'init', 'custom_clearance_create_service_post_type' );

// Remove the default editor for 'service' post type and add a custom WYSIWYG editor
function remove_service_editor() {
    remove_post_type_support( 'service', 'editor' );
}
add_action( 'init', 'remove_service_editor' );

// Add a custom WYSIWYG editor for 'service' post type
function add_service_meta_box() {
    add_meta_box(
        'service_details',
        'Service Content',
        'service_meta_box_callback',
        'service', // Post type
        'normal',
        'high'
    );
}
add_action( 'add_meta_boxes', 'add_service_meta_box' );

// Callback function to display the WYSIWYG editor
function service_meta_box_callback( $post ) {
    wp_nonce_field( 'save_service_details', 'service_details_nonce' );

    $content = get_post_meta( $post->ID, '_service_content', true );

    // Display the custom WYSIWYG editor
    wp_editor( $content, 'service_content', array(
        'textarea_name' => 'service_content',
        'editor_height' => 200,
        'editor_class'  => 'widefat',
    ) );
}

// Save the custom WYSIWYG editor data
function save_service_meta( $post_id ) {
    if ( ! isset( $_POST['service_details_nonce'] ) || ! wp_verify_nonce( $_POST['service_details_nonce'], 'save_service_details' ) ) {
        return;
    }

    if ( isset( $_POST['service_content'] ) ) {
        update_post_meta( $post_id, '_service_content', wp_kses_post( $_POST['service_content'] ) );
    }
}
add_action( 'save_post', 'save_service_meta' );

// Add a custom meta box for Service Details (price, description, etc.)
function custom_clearance_add_service_custom_fields() {
    add_meta_box(
        'service_custom_fields',
        'Service Custom Fields',
        'service_custom_fields_callback',
        'service', // The custom post type
        'normal',
        'high'
    );
}
add_action( 'add_meta_boxes', 'custom_clearance_add_service_custom_fields' );

// Callback function for custom fields meta box
function service_custom_fields_callback( $post ) {
    wp_nonce_field( 'save_service_custom_fields', 'service_custom_fields_nonce' );
    ?>
    <p><?php _e( 'No additional custom fields needed for services.', 'customsclearance' ); ?></p>
    <p class="description"><?php _e( 'Use the title, content, excerpt, and featured image fields above for service information.', 'customsclearance' ); ?></p>
    <?php
}



// Save custom fields (currently no fields to save)
function save_service_custom_fields( $post_id ) {
    if ( ! isset( $_POST['service_custom_fields_nonce'] ) || ! wp_verify_nonce( $_POST['service_custom_fields_nonce'], 'save_service_custom_fields' ) ) {
        return;
    }

    // No custom fields to save currently
    // Add fields here if needed in the future
}
add_action( 'save_post', 'save_service_custom_fields' );

/**
 * Flush rewrite rules on theme activation to ensure custom post type rewrites work.
 */
function custom_clearance_flush_rewrite_rules() {
    custom_clearance_create_service_post_type();  // Register the CPT
    flush_rewrite_rules();   // Flush rewrite rules
}
add_action( 'after_switch_theme', 'custom_clearance_flush_rewrite_rules' );
