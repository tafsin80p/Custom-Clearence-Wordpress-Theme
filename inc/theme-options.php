<?php
/**
 * Theme Options page and settings
 */

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

// Enqueue scripts and styles
function custom_clearance_admin_enqueue_scripts( $hook_suffix ) {
    if ( 'toplevel_page_custom-clearance-theme-options' !== $hook_suffix ) {
        return;
    }
    wp_enqueue_media();
    wp_enqueue_style( 'custom-clearance-theme-options-css', get_template_directory_uri() . '/assets/css/admin/theme-options.css' );
    wp_enqueue_script( 'custom-clearance-theme-options-js', get_template_directory_uri() . '/assets/js/admin/theme-options.js', array( 'jquery' ), null, true );
    wp_enqueue_script( 'custom-clearance-faq-repeater-js', get_template_directory_uri() . '/assets/js/admin/faq-repeater.js', array( 'jquery', 'jquery-ui-sortable' ), null, true );
}
add_action( 'admin_enqueue_scripts', 'custom_clearance_admin_enqueue_scripts' );

// Render Theme Options Page
function custom_clearance_theme_options_page() {
    $active_tab = isset( $_GET['tab'] ) ? sanitize_text_field( wp_unslash( $_GET['tab'] ) ) : 'about_us';
    $options = wp_parse_args( get_option( 'custom_clearance_theme_options', array() ), custom_clearance_get_default_theme_options() );
    ?>
<div class="wrap theme-options-wrap">
    <h1>Theme Options</h1>

    <h2 class="nav-tab-wrapper">
        <a href="?page=custom-clearance-theme-options&tab=about_us"
            class="nav-tab <?php echo $active_tab === 'about_us' ? 'nav-tab-active' : ''; ?>">About Us</a>
        <a href="?page=custom-clearance-theme-options&tab=blog"
            class="nav-tab <?php echo $active_tab === 'blog' ? 'nav-tab-active' : ''; ?>">Blog</a>
        <a href="?page=custom-clearance-theme-options&tab=cities"
            class="nav-tab <?php echo $active_tab === 'cities' ? 'nav-tab-active' : ''; ?>">Cities</a>
        <a href="?page=custom-clearance-theme-options&tab=contact"
            class="nav-tab <?php echo $active_tab === 'contact' ? 'nav-tab-active' : ''; ?>">Contact</a>
        <a href="?page=custom-clearance-theme-options&tab=quote"
            class="nav-tab <?php echo $active_tab === 'quote' ? 'nav-tab-active' : ''; ?>">Quote</a>
        <a href="?page=custom-clearance-theme-options&tab=services"
            class="nav-tab <?php echo $active_tab === 'services' ? 'nav-tab-active' : ''; ?>">Services</a>

    </h2>

    <form method="post" action="options.php">
        <?php settings_fields( 'custom_clearance_theme_options_group' ); ?>

        <div class="theme-options-content">
            <?php if ( 'about_us' === $active_tab ) : ?>
            <h1>About Us Page Options</h1>
            <div class="theme-options-section">
                <h2>Hero Section Settings</h2>
                <div class="theme-options-grid">
                    <?php 
                                custom_clearance_render_field('about_us_hero_title', 'Hero Title', $options, 'text', 'The title of the hero section for the about us page.');
                                custom_clearance_render_field('about_us_breadcrumb_home', 'Breadcrumb Home', $options, 'text', 'Breadcrumb text for the home link.');
                                custom_clearance_render_field('about_us_breadcrumb_current', 'Breadcrumb Current', $options, 'text', 'Breadcrumb text for the current page.');
                                custom_clearance_render_field('about_us_hero_image', 'Hero Image', $options, 'image', 'Upload the background image for the hero section on the about us page.');
                            ?>
                </div>
            </div>
            <?php endif; ?>

            <?php if ( 'blog' === $active_tab ) : ?>
            <h1>Blog Page Options</h1>
            <div class="theme-options-section">
                <h2>Hero Section Settings</h2>
                <div class="theme-options-grid">
                    <?php 
                                custom_clearance_render_field('blog_hero_title', 'Hero Title', $options, 'text', 'The title of the hero section for the blog page.');
                                custom_clearance_render_field('blog_breadcrumb_home', 'Breadcrumb Home', $options, 'text', 'Breadcrumb text for the home link.');
                                custom_clearance_render_field('blog_breadcrumb_current', 'Breadcrumb Current', $options, 'text', 'Breadcrumb text for the current page.');
                                custom_clearance_render_field('blog_hero_image', 'Hero Image', $options, 'image', 'Upload the background image for the hero section on the blog page.');
                            ?>
                </div>
            </div>
            <?php endif; ?>

            <?php if ( 'cities' === $active_tab ) : ?>
            <h1>Cities Page Options</h1>
            <div class="theme-options-section">
                <h2>Hero Section Settings</h2>
                <div class="theme-options-grid">
                    <?php 
                                custom_clearance_render_field('cities_hero_title', 'Hero Title', $options, 'text', 'The title of the hero section for cities page.');
                                custom_clearance_render_field('cities_breadcrumb_home', 'Breadcrumb Home', $options, 'text', 'Breadcrumb text for the home link.');
                                custom_clearance_render_field('cities_breadcrumb_current', 'Breadcrumb Current', $options, 'text', 'Breadcrumb text for the current page.');
                                custom_clearance_render_field('cities_hero_image', 'Hero Image', $options, 'image', 'Upload the background image for the hero section on the cities page.');
                            ?>
                </div>
            </div>
            <?php endif; ?>

            <?php if ( 'contact' === $active_tab ) : ?>
            <h1>Contact Page Options</h1>
            <div class="theme-options-section">
                <h2>Hero Section Settings</h2>
                <div class="theme-options-grid">
                    <?php 
                                custom_clearance_render_field('contact_hero_title', 'Hero Title', $options, 'text', 'The title of the hero section for the contact page.');
                                custom_clearance_render_field('contact_breadcrumb_home', 'Breadcrumb Home', $options, 'text', 'Breadcrumb text for the home link.');
                                custom_clearance_render_field('contact_breadcrumb_current', 'Breadcrumb Current', $options, 'text', 'Breadcrumb text for the current page.');
                                custom_clearance_render_field('contact_hero_image', 'Hero Image', $options, 'image', 'Upload the background image for the hero section on the contact page.');
                            ?>
                </div>
            </div>
            <?php endif; ?>

            <?php if ( 'quote' === $active_tab ) : ?>
            <h1>Quote Page Options</h1>
            <div class="theme-options-section">
                <h2>Hero Section Settings</h2>
                <div class="theme-options-grid">
                    <?php 
                                custom_clearance_render_field('quote_hero_title', 'Hero Title', $options, 'text', 'The title of the hero section for the quote page.');
                                custom_clearance_render_field('quote_breadcrumb_home', 'Breadcrumb Home', $options, 'text', 'Breadcrumb text for the home link.');
                                custom_clearance_render_field('quote_breadcrumb_current', 'Breadcrumb Current', $options, 'text', 'Breadcrumb text for the current page.');
                                custom_clearance_render_field('quote_hero_image', 'Hero Image', $options, 'image', 'Upload the background image for the hero section on the quote page.');
                            ?>
                </div>
            </div>
            <?php endif; ?>
            <?php if ( 'services' === $active_tab ) : ?>
            <h1>Services Page Options</h1>
            <div class="theme-options-section">
                <h2>Hero Section Settings</h2>
                <div class="theme-options-grid">
                    <?php 
                // Fetch the current options from the theme options
                $options = get_option('custom_clearance_theme_options');

                // Render dynamic fields for Hero Section
                custom_clearance_render_field('services_hero_title', 'Hero Title', $options, 'text', 'The title of the hero section for the services page.');
                custom_clearance_render_field('services_breadcrumb_home', 'Breadcrumb Home', $options, 'text', 'Breadcrumb text for the home link.');
                custom_clearance_render_field('services_breadcrumb_current', 'Breadcrumb Current', $options, 'text', 'Breadcrumb text for the current page.');
                custom_clearance_render_field('services_hero_image', 'Hero Image', $options, 'image', 'Upload the background image for the hero section on the services page.');
                custom_clearance_render_field('services_hero_subtitle', 'Hero Subtitle', $options, 'text', 'Découvrez notre gamme complète de services de dédouanement et de transit. Des solutions personnalisées pour tous vos besoins d\'import/export.');

                // Add dynamic stats fields
                custom_clearance_render_field('services_service_count', 'Services Available', $options, 'text', 'Enter the number of available services.');
                custom_clearance_render_field('services_response_time', 'Response Time', $options, 'text', 'Enter the average response time (e.g., 24h).');
                custom_clearance_render_field('services_satisfaction', 'Customer Satisfaction', $options, 'text', 'Enter the customer satisfaction percentage (e.g., 100%).');
            ?>
                </div>
            </div>

            <div class="theme-options-section">
                <h2>CTA Section Settings</h2>
                <div class="theme-options-grid">
                    <?php
                    custom_clearance_render_field('services_cta_small_title_icon', 'CTA Small Title Icon', $options, 'text', 'Font Awesome icon for the small title (e.g., fas fa-star).');
                    custom_clearance_render_field('services_cta_small_title', 'CTA Small Title', $options, 'text', 'The small title for the CTA section.');
                    custom_clearance_render_field('services_cta_main_title', 'CTA Main Title', $options, 'text', 'The main title for the CTA section.');
                    custom_clearance_render_field('services_cta_subtitle', 'CTA Subtitle', $options, 'textarea', 'The subtitle for the CTA section.');
                    custom_clearance_render_field('services_cta_contact_button_text', 'Contact Button Text', $options, 'text', 'Text for the contact button.');
                    custom_clearance_render_field('services_cta_contact_button_icon', 'Contact Button Icon', $options, 'text', 'Font Awesome icon for the contact button.');
                    custom_clearance_render_field('services_cta_quote_button_text', 'Quote Button Text', $options, 'text', 'Text for the quote button.');
                    custom_clearance_render_field('services_cta_quote_button_icon', 'Quote Button Icon', $options, 'text', 'Font Awesome icon for the quote button.');
                    ?>
                </div>
            </div>

            <div class="theme-options-section">
                <h2>Trust Indicators Settings</h2>
                <div class="theme-options-grid">
                    <?php
                    custom_clearance_render_field('services_trust_indicator_1_icon', 'Trust Indicator 1 Icon', $options, 'text', 'Font Awesome icon for the first trust indicator.');
                    custom_clearance_render_field('services_trust_indicator_1_title', 'Trust Indicator 1 Title', $options, 'text', 'Title for the first trust indicator.');
                    custom_clearance_render_field('services_trust_indicator_1_text', 'Trust Indicator 1 Text', $options, 'text', 'Text for the first trust indicator.');
                    
                    custom_clearance_render_field('services_trust_indicator_2_icon', 'Trust Indicator 2 Icon', $options, 'text', 'Font Awesome icon for the second trust indicator.');
                    custom_clearance_render_field('services_trust_indicator_2_title', 'Trust Indicator 2 Title', $options, 'text', 'Title for the second trust indicator.');
                    custom_clearance_render_field('services_trust_indicator_2_text', 'Trust Indicator 2 Text', $options, 'text', 'Text for the second trust indicator.');

                    custom_clearance_render_field('services_trust_indicator_3_icon', 'Trust Indicator 3 Icon', $options, 'text', 'Font Awesome icon for the third trust indicator.');
                    custom_clearance_render_field('services_trust_indicator_3_title', 'Trust Indicator 3 Title', $options, 'text', 'Title for the third trust indicator.');
                    custom_clearance_render_field('services_trust_indicator_3_text', 'Trust Indicator 3 Text', $options, 'text', 'Text for the third trust indicator.');
                    ?>
                </div>
            </div>
            <?php endif; ?>
        </div>
        <?php submit_button(); ?>
    </form>
</div>
<?php
}

function custom_clearance_get_default_theme_options() {
    return array(
        'about_us_hero_title' => 'À propos de nous',
        'about_us_breadcrumb_home' => 'Accueil',
        'about_us_breadcrumb_current' => 'À propos',
        'about_us_hero_image' => '',

        'blog_hero_title' => 'Blog',
        'blog_breadcrumb_home' => 'Accueil',
        'blog_breadcrumb_current' => 'Blog',
        'blog_hero_image' => '',

        'cities_hero_title' => 'Villes',
        'cities_breadcrumb_home' => 'Accueil',
        'cities_breadcrumb_current' => 'Villes',
        'cities_hero_image' => '',

        'contact_hero_title' => 'Contactez-Nous',
        'contact_breadcrumb_home' => 'Accueil',
        'contact_breadcrumb_current' => 'Contact',
        'contact_hero_image' => '',

        'quote_hero_title' => 'Demander un devis',
        'quote_breadcrumb_home' => 'Accueil',
        'quote_breadcrumb_current' => 'Devis',
        'quote_hero_image' => '',

        'services_hero_title' => 'Nos Services',
        'services_breadcrumb_home' => 'Accueil',
        'services_breadcrumb_current' => 'Services',
        'services_hero_image' => '',
        'services_hero_subtitle' => 'Découvrez notre gamme complète de services de dédouanement et de transit. Des solutions personnalisées pour tous vos besoins d\'import/export.',
        'services_service_count' => '15+',
        'services_response_time' => '24h',
        'services_satisfaction' => '100%',

        'services_cta_small_title_icon' => 'fas fa-star',
        'services_cta_small_title' => 'Consultation gratuite',
        'services_cta_main_title' => 'Prêt à simplifier votre dédouanement ?',
        'services_cta_subtitle' => 'Contactez-nous dès aujourd\'hui pour une consultation gratuite et découvrez comment nous pouvons vous aider à optimiser vos opérations douanières avec nos solutions expertes.',
        'services_cta_contact_button_text' => 'Contactez-nous',
        'services_cta_contact_button_icon' => 'fas fa-phone',
        'services_cta_quote_button_text' => 'Demander un devis',
        'services_cta_quote_button_icon' => 'fas fa-calculator',

        'services_trust_indicator_1_icon' => 'fas fa-clock',
        'services_trust_indicator_1_title' => 'Réponse 24h',
        'services_trust_indicator_1_text' => 'Réponse garantie sous 24h',
        'services_trust_indicator_2_icon' => 'fas fa-shield-alt',
        'services_trust_indicator_2_title' => '100% Sécurisé',
        'services_trust_indicator_2_text' => 'Protection totale de vos données',
        'services_trust_indicator_3_icon' => 'fas fa-users',
        'services_trust_indicator_3_title' => 'Expert dédié',
        'services_trust_indicator_3_text' => 'Accompagnement personnalisé',
    );
}

function custom_clearance_render_field($id, $label, $options, $type = 'text', $description = '') {
    $value = $options[ $id ];
    ?>
<div class="theme-option-card">
    <div class="theme-option-card-header">
        <h3><?php echo esc_html( $label ); ?></h3>
    </div>
    <div class="theme-option-card-body">
        <?php if ( $type === 'image' ) : ?>
        <input type="text" name="custom_clearance_theme_options[<?php echo esc_attr( $id ); ?>]"
            value="<?php echo esc_attr( $value ); ?>" class="regular-text" />
        <button class="button-secondary upload_image_button">Upload Image</button>
        <?php elseif ( $type === 'textarea' ) : ?>
        <textarea name="custom_clearance_theme_options[<?php echo esc_attr( $id ); ?>]" rows="6"
            class="large-text code"><?php echo esc_textarea( $value ); ?></textarea>
        <?php else : ?>
        <input type="text" name="custom_clearance_theme_options[<?php echo esc_attr( $id ); ?>]"
            value="<?php echo esc_attr( $value ); ?>" class="regular-text" />
        <?php endif; ?>
        <?php if ( ! empty( $description ) ) : ?>
        <p class="description"><?php echo esc_html( $description ); ?></p>
        <?php endif; ?>
    </div>
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
}
add_action( 'admin_init', 'custom_clearance_register_theme_settings' );

// Sanitize callback for theme options
function custom_clearance_theme_options_sanitize( $input ) {
    // Start with the existing options
    $output = get_option( 'custom_clearance_theme_options', array() );

    // Loop through the new input and update the existing options
    if ( $input && is_array( $input ) ) {
        foreach ( $input as $key => $value ) {
            // Sanitize the value based on the key
            if ( strpos( $key, 'image' ) !== false ) {
                $output[ $key ] = esc_url_raw( $value );
            } elseif ( strpos( $key, '_title' ) !== false || strpos( $key, '_breadcrumb_' ) !== false ) {
                $output[ $key ] = sanitize_text_field( $value );
            } else {
                // For any other fields, you might want a default sanitization
                $output[ $key ] = wp_kses_post( $value );
            }
        }
    }

    return $output;
}