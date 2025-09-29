<?php
// Enqueue stylesheets and scripts
function custom_clearance_enqueue_assets() {
    // TailwindCSS styles
    wp_enqueue_style( 'tailwind-output', get_template_directory_uri() . '/src/output.css' );

    // Enqueue the main JavaScript file
    wp_enqueue_script( 'main-js', get_template_directory_uri() . '/JS/main.js', array('jquery'), null, true );

    // Enqueue custom JavaScript for 404 page (conditionally)
    if ( is_404() ) {
        wp_enqueue_script( '404-js', get_template_directory_uri() . '/assets/js/ui/404.js', array('jquery'), null, true );
    }
}

add_action( 'wp_enqueue_scripts', 'custom_clearance_enqueue_assets' );

// Theme setup (supports)
function custom_clearance_setup() {
    add_theme_support( 'post-thumbnails' ); // Featured images
    add_theme_support( 'menus' ); // Menus support
    add_theme_support( 'custom-logo' ); // Custom Logo
    register_nav_menus( array(
        'primary' => __( 'Primary Menu', 'customsclearance' ),
    ) );
}

add_action( 'after_setup_theme', 'custom_clearance_setup' );
?>
<?php