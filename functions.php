<?php
// Enqueue stylesheets and scripts
function custom_clearance_enqueue_assets() {
    // TailwindCSS styles
    wp_enqueue_style( 'tailwind-output', get_template_directory_uri() .'/src/output.css' );
    // Add header.css
    wp_enqueue_style( 'header-css', get_template_directory_uri() .'/src/header.css' );
    // Add footer.css
    wp_enqueue_style( 'footer-css', get_template_directory_uri() .'/src/footer.css' );
    // Enqueue the main JavaScript file
    wp_enqueue_script( 'main-js', get_template_directory_uri() .'/assets/js/ui/main.js', array('jquery'), null, true );

    // Conditional 404 page script
    if ( is_404() ) {
        wp_enqueue_script( '404-js', get_template_directory_uri() . '/assets/js/ui/404.js', array('jquery'), null, true );
    }

    // Conditional Contact page assets
    if ( is_page_template('page-contact.php') ) {
        wp_enqueue_style( 'page-contact-css', get_template_directory_uri() . '/assets/css/page-contact.css' );
        wp_enqueue_script( 'page-contact-js', get_template_directory_uri() . '/assets/js/page-contact.js', array(), null, true );
        wp_enqueue_script( 'whatsapp-js', get_template_directory_uri() . '/assets/js/ui/whatsapp.js', array(), null, true );
    }

    // Conditional Quote page assets
    if ( is_page_template('page-quote.php') ) {
        wp_enqueue_script( 'page-quote-js', get_template_directory_uri() . '/assets/js/page-quote.js', array(), null, true );
        wp_enqueue_script( 'whatsapp-js', get_template_directory_uri() . '/assets/js/ui/whatsapp.js', array(), null, true );
    }

    // Conditional Archive Service page assets
    if ( is_post_type_archive('service') ) {
        wp_enqueue_script( 'archive-services-js', get_template_directory_uri() . '/assets/js/ui/archive-services.js', array(), null, true );
    }

    // It is recommended to host fonts locally for better performance and reliability.
    // For example, you can download the font files and enqueue them like this:
    // wp_enqueue_style( 'google-fonts', get_template_directory_uri() . '/assets/fonts/google-fonts.css', false );
    // wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/assets/fonts/font-awesome/css/all.min.css', false );

    // Enqueue Font Awesome
    // wp_enqueue_script('font-awesome', 'https://kit.fontawesome.com/a076d05399.js', array(), null, true);

    // Enqueue Google Fonts
    // wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap', false );
}
add_action( 'wp_enqueue_scripts', 'custom_clearance_enqueue_assets' );


// Theme setup (supports)
function custom_clearance_setup() {
    add_theme_support( 'post-thumbnails' ); // Featured images
    add_theme_support( 'menus' ); // Menus support
    add_theme_support( 'custom-logo' ); // Custom Logo
    
    // Editor Support
    add_theme_support( 'editor-styles' ); // Enable editor styles
    add_theme_support( 'wp-block-styles' ); // Enable block styles
    add_theme_support( 'align-wide' ); // Enable wide and full alignments
    
    register_nav_menus( array(
        'primary' => __( 'Primary Menu', 'customsclearance' ),
    ) );
}

add_action( 'after_setup_theme', 'custom_clearance_setup' );

// Optional: Force Classic Editor for specific post types (uncomment if needed)
/*
function custom_clearance_use_classic_editor($use_block_editor, $post) {
    // Use classic editor for specific post types
    $classic_editor_types = array('service', 'faq');
    
    if (in_array($post->post_type, $classic_editor_types)) {
        return false; // Use classic editor
    }
    return $use_block_editor; // Use default (Gutenberg)
}
add_filter('use_block_editor_for_post', 'custom_clearance_use_classic_editor', 10, 2);
*/

// Theme options
require_once get_template_directory() . '/inc/header-function.php';

// Elementor Widgets
require_once get_template_directory() . '/inc/elementor-widgets.php';
// Home Page options
require_once get_template_directory() . '/inc/home-page-function.php';

// Footer options
// require_once get_template_directory() . '/inc/footer-options.php';

// City Post Type
require_once get_template_directory() . '/inc/city-post-type.php';

// Service Post Type
require_once get_template_directory() . '/inc/service-post-type.php';

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
    // Note: This method of changing the class is fragile and may break with future WordPress updates.
    // A more robust solution would be to use a DOM parser to add the class.
    $html = str_replace( 'class="custom-logo"', 'class="custom-logo h-16 w-64 object-contain"', $html );
    return $html;
}
add_filter( 'get_custom_logo', 'change_logo_class' );

/**
 * Add Tailwind flex classes to each <li> of the primary menu so items can layout with flexbox.
 * This makes it easy to align icons and text inside menu items.
 */
function custom_primary_menu_li_flex_classes( $classes, $item, $args, $depth ) {
    if ( isset( $args->theme_location ) && 'primary' === $args->theme_location ) {
        // Avoid duplicating classes if they're already present
        if ( ! in_array( 'flex', $classes, true ) ) {
            $classes[] = 'flex';
        }
        if ( ! in_array( 'items-center', $classes, true ) ) {
            $classes[] = 'items-center';
        }
    }
    return $classes;
}
add_filter( 'nav_menu_css_class', 'custom_primary_menu_li_flex_classes', 10, 4 );

/**
 * Add flex classes to the <a> inside primary menu items so icon+text align.
 */
function custom_primary_menu_link_attributes( $atts, $item, $args, $depth ) {
    if ( isset( $args->theme_location ) && 'primary' === $args->theme_location ) {
        $existing = isset( $atts['class'] ) ? $atts['class'] . ' ' : '';
        $atts['class'] = trim( $existing . 'flex items-center' );
    }
    return $atts;
}
add_filter( 'nav_menu_link_attributes', 'custom_primary_menu_link_attributes', 10, 4 );


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




// functions.php ফাইলে যোগ করুন
function load_cf7_assets_on_contact_page() {
    // নিশ্চিত করুন এটি Contact Page টেমপ্লেট ব্যবহার করা পেজ
    if ( is_page_template('contact-page.php') || is_page('আপনার_যোগাযোগ_পেজের_ID_বা_slug') ) { // 'আপনার_যোগাযোগ_পেজের_ID_বা_slug' এর জায়গায় সঠিক তথ্য দিন
        if ( function_exists( 'wpcf7_enqueue_scripts' ) ) {
            wpcf7_enqueue_scripts();
        }
        if ( function_exists( 'wpcf7_enqueue_styles' ) ) {
            wpcf7_enqueue_styles();
        }
    }
}
add_action( 'wp_enqueue_scripts', 'load_cf7_assets_on_contact_page' );



// Theme Options moved to a separate include for better organization
require_once get_template_directory() . '/inc/theme-options.php';

// Gutenberg Blocks
require_once get_template_directory() . '/inc/gutenberg-blocks.php';

// Form Handlers
require_once get_template_directory() . '/inc/form-handlers.php';