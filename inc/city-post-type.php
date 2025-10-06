<?php
// Register Custom Post Type
function custom_post_type_city() {

    $labels = array(
        'name'                  => _x( 'Cities', 'Post Type General Name', 'customsclearance' ),
        'singular_name'         => _x( 'City', 'Post Type Singular Name', 'customsclearance' ),
        'menu_name'             => __( 'Cities', 'customsclearance' ),
        'name_admin_bar'        => __( 'City', 'customsclearance' ),
        'archives'              => __( 'City Archives', 'customsclearance' ),
        'attributes'            => __( 'City Attributes', 'customsclearance' ),
        'parent_item_colon'     => __( 'Parent City:', 'customsclearance' ),
        'all_items'             => __( 'All Cities', 'customsclearance' ),
        'add_new_item'          => __( 'Add New City', 'customsclearance' ),
        'add_new'               => __( 'Add New', 'customsclearance' ),
        'new_item'              => __( 'New City', 'customsclearance' ),
        'edit_item'             => __( 'Edit City', 'customsclearance' ),
        'update_item'           => __( 'Update City', 'customsclearance' ),
        'view_item'             => __( 'View City', 'customsclearance' ),
        'view_items'            => __( 'View Cities', 'customsclearance' ),
        'search_items'          => __( 'Search City', 'customsclearance' ),
        'not_found'             => __( 'Not found', 'customsclearance' ),
        'not_found_in_trash'    => __( 'Not found in Trash', 'customsclearance' ),
        'featured_image'        => __( 'Featured Image', 'customsclearance' ),
        'set_featured_image'    => __( 'Set featured image', 'customsclearance' ),
        'remove_featured_image' => __( 'Remove featured image', 'customsclearance' ),
        'use_featured_image'    => __( 'Use as featured image', 'customsclearance' ),
        'insert_into_item'      => __( 'Insert into city', 'customsclearance' ),
        'uploaded_to_this_item' => __( 'Uploaded to this city', 'customsclearance' ),
        'items_list'            => __( 'Cities list', 'customsclearance' ),
        'items_list_navigation' => __( 'Cities list navigation', 'customsclearance' ),
        'filter_items_list'     => __( 'Filter cities list', 'customsclearance' ),
    );
    $args = array(
        'label'                 => __( 'City', 'customsclearance' ),
        'description'           => __( 'Post Type for cities', 'customsclearance' ),
        'labels'                => $labels,
        'supports'              => array( 'title', 'editor', 'excerpt', 'thumbnail' ),
        'taxonomies'            => array( 'category', 'post_tag' ),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 5,
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'page',
    );
    register_post_type( 'city', $args );

    // Add meta box for phone number
    add_action( 'add_meta_boxes', 'city_add_phone_number_meta_box' );
    add_action( 'save_post', 'city_save_phone_number_meta_box_data' );

}
add_action( 'init', 'custom_post_type_city', 0 );

// Meta box display callback
function city_add_phone_number_meta_box() {
    add_meta_box(
        'city_phone_number',
        __( 'Phone Number', 'customsclearance' ),
        'city_phone_number_meta_box_callback',
        'city',
        'normal',
        'high'
    );
}

function city_phone_number_meta_box_callback( $post ) {
    wp_nonce_field( 'city_phone_number_nonce', 'city_phone_number_nonce' );
    $phone_number = get_post_meta( $post->ID, 'phone_number', true );
    ?>
    <p>
        <label for="phone_number"><?php _e( 'Phone Number:', 'customsclearance' ); ?></label>
        <br>
        <input type="text" id="phone_number" name="phone_number" value="<?php echo esc_attr( $phone_number ); ?>" size="25" />
    </p>
    <?php
}

// Save meta box data
function city_save_phone_number_meta_box_data( $post_id ) {
    if ( ! isset( $_POST['city_phone_number_nonce'] ) ) {
        return;
    }
    if ( ! wp_verify_nonce( $_POST['city_phone_number_nonce'], 'city_phone_number_nonce' ) ) {
        return;
    }
    if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
        return;
    }
    if ( ! current_user_can( 'edit_post', $post_id ) ) {
        return;
    }

    if ( isset( $_POST['phone_number'] ) ) {
        update_post_meta( $post_id, 'phone_number', sanitize_text_field( $_POST['phone_number'] ) );
    }
}