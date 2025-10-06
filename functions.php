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

    // Conditional 404 page script
    if ( is_404() ) {
        wp_enqueue_script( '404-js', get_template_directory_uri() . '/assets/js/ui/404.js', array('jquery'), null, true );
    }

    // Conditional Contact page assets
    if ( is_page_template('page-contact.php') ) {
        wp_enqueue_style( 'page-contact-css', get_template_directory_uri() . '/assets/css/page-contact.css' );
        wp_enqueue_script( 'page-contact-js', get_template_directory_uri() . '/assets/js/page-contact.js', array(), null, true );
    }

    // Conditional Quote page assets
    if ( is_page_template('page-quote.php') ) {
        wp_enqueue_script( 'page-quote-js', get_template_directory_uri() . '/assets/js/page-quote.js', array(), null, true );
    }
}
add_action( 'wp_enqueue_scripts', 'custom_clearance_enqueue_assets' );
function custom_clearance_enqueue_fonts() {
    wp_enqueue_script('font-awesome', 'https://kit.fontawesome.com/a076d05399.js', array(), null, true);
}
add_action('wp_enqueue_scripts', 'custom_clearance_enqueue_fonts');
function custom_clearance_enqueue_google_fonts() {
    wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap', false );
}
add_action( 'wp_enqueue_scripts', 'custom_clearance_enqueue_google_fonts' );


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
// Home Page options
require_once get_template_directory() . '/inc/home-pagefuncation.php';

// Footer options
require_once get_template_directory() . '/inc/footer-options.php';

// City Post Type
require_once get_template_directory() . '/inc/city-post-type.php';

// Enqueue AOS assets
function enqueue_aos_assets() {
    // Enqueue AOS styles
    wp_enqueue_style( 'aos-styles', 'https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css' );
    
    // Enqueue AOS script
    wp_enqueue_script( 'aos-script', 'https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js', array(), null, true );
    
    // Initialize AOS with smoother settings
    wp_add_inline_script( 'aos-script', 'AOS.init({
        duration: 1000, // duration of the animation in milliseconds
        easing: "ease-out", // easing function for smoother transitions
        once: true, // animates only once
        delay: 100, // initial delay
    });' );
}
add_action( 'wp_enqueue_scripts', 'enqueue_aos_assets' );



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

// Add Theme Options Page
function custom_clearance_theme_menu() {
    add_menu_page(
        'Theme Options',
        'Theme Options',
        'manage_options',
        'custom-clearance-theme-options',
        'custom_clearance_theme_options_page',
        'dashicons-admin-generic',
        60
    );
}
add_action( 'admin_menu', 'custom_clearance_theme_menu' );

// Render Theme Options Page
function custom_clearance_theme_options_page() {
    ?>
    <div class="wrap">
        <h1>Custom Clearance Theme Options</h1>
        <form method="post" action="options.php">
            <?php
            settings_fields( 'custom_clearance_theme_options_group' );
            do_settings_sections( 'custom-clearance-theme-options' );
            submit_button();
            ?>
        </form>
    </div>
    <?php
}

// Register Theme Options
function custom_clearance_register_theme_settings() {
    register_setting(
        'custom_clearance_theme_options_group',
        'custom_clearance_theme_options',
        'custom_clearance_theme_options_sanitize'
    );

    add_settings_section(
        'custom_clearance_general_section',
        'General Settings',
        'custom_clearance_general_section_callback',
        'custom-clearance-theme-options'
    );

    add_settings_field(
        'custom_clearance_footer_text',
        'Footer Text',
        'custom_clearance_footer_text_callback',
        'custom-clearance-theme-options',
        'custom_clearance_general_section'
    );
}
add_action( 'admin_init', 'custom_clearance_register_theme_settings' );

// Section Callback
function custom_clearance_general_section_callback() {
    echo '<p>General theme settings.</p>';
}

// Field Callback
function custom_clearance_footer_text_callback() {
    $options = get_option( 'custom_clearance_theme_options' );
    $footer_text = isset( $options['footer_text'] ) ? $options['footer_text'] : '';
    echo '<input type="text" id="custom_clearance_footer_text" name="custom_clearance_theme_options[footer_text]" value="' . esc_attr( $footer_text ) . '" />';
}

// Sanitize Callback
function custom_clearance_theme_options_sanitize( $input ) {
    $new_input = array();
    if ( isset( $input['footer_text'] ) ) {
        $new_input['footer_text'] = sanitize_text_field( $input['footer_text'] );
    }
    return $new_input;
}

?>