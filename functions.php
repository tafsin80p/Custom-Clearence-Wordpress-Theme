<?php
// Enqueue stylesheets and scripts
function custom_clearance_enqueue_assets() {
    // TailwindCSS styles
    wp_enqueue_style( 'tailwind-output', get_template_directory_uri() . '/src/output.css' );
    // Add header.css
    wp_enqueue_style( 'header-css', get_template_directory_uri() . '/src/header.css' );
    // Add footer.css
    wp_enqueue_style( 'footer-css', get_template_directory_uri() . '/src/footer.css' );
    // Enqueue the main JavaScript file
    wp_enqueue_script( 'main-js', get_template_directory_uri() . '/assets/js/ui/main.js', array('jquery'), null, true );

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

// Theme options
require_once get_template_directory() . '/inc/header-funcation.php';

// Elementor Widgets
require_once get_template_directory() . '/inc/elementor-widgets.php';

// Footer options
require_once get_template_directory() . '/inc/footer-options.php';

function change_logo_class( $html ) {
    $html = str_replace( 'class="custom-logo"', 'class="custom-logo h-16 w-64 object-contain"', $html );
    return $html;
}
add_filter( 'get_custom_logo', 'change_logo_class' );

function custom_clearance_widgets_init() {
    register_sidebar( array(
        'name'          => __( 'Footer Widgets', 'customsclearance' ),
        'id'            => 'footer-widgets',
        'description'   => __( 'Widgets in this area will be displayed in the footer.', 'customsclearance' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="footer-heading">',
        'after_title'   => '</h4>',
    ) );
}
add_action( 'widgets_init', 'custom_clearance_widgets_init' );
?>