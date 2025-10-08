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
    $active_tab = isset( $_GET['tab'] ) ? sanitize_text_field( wp_unslash( $_GET['tab'] ) ) : 'hero';
    $options = get_option( 'custom_clearance_theme_options', array() );
    ?>
    <div class="wrap theme-options-wrap">
        <h1>About Us Page Options</h1>

        <h2 class="nav-tab-wrapper">
            <a href="?page=custom-clearance-theme-options&tab=hero" class="nav-tab <?php echo $active_tab === 'hero' ? 'nav-tab-active' : ''; ?>">Hero</a>
            <a href="?page=custom-clearance-theme-options&tab=introduction" class="nav-tab <?php echo $active_tab === 'introduction' ? 'nav-tab-active' : ''; ?>">Introduction</a>
            <a href="?page=custom-clearance-theme-options&tab=mission" class="nav-tab <?php echo $active_tab === 'mission' ? 'nav-tab-active' : ''; ?>">Mission</a>
            <a href="?page=custom-clearance-theme-options&tab=values" class="nav-tab <?php echo $active_tab === 'values' ? 'nav-tab-active' : ''; ?>">Values</a>
            <a href="?page=custom-clearance-theme-options&tab=faq" class="nav-tab <?php echo $active_tab === 'faq' ? 'nav-tab-active' : ''; ?>">FAQ</a>
        </h2>

        <form method="post" action="options.php">
            <?php settings_fields( 'custom_clearance_theme_options_group' ); ?>

            <div class="theme-options-content">
                <?php if ( 'hero' === $active_tab ) : ?>
                    <div class="theme-options-section">
                        <div class="theme-options-grid">
                            <?php 
                            custom_clearance_render_field('about_us_hero_title', 'Hero Title', $options, 'text', 'The title of the hero section.');
                            custom_clearance_render_field('about_us_breadcrumb_home', 'Breadcrumb Home', $options, 'text', 'The text for the home link in the breadcrumb.');
                            custom_clearance_render_field('about_us_breadcrumb_current', 'Breadcrumb Current', $options, 'text', 'The text for the current page in the breadcrumb.');
                            custom_clearance_render_field('about_us_hero_image', 'Hero Image', $options, 'image', 'The background image for the hero section.');
                            ?>
                        </div>
                    </div>
                <?php elseif ( 'introduction' === $active_tab ) : ?>
                    <div class="theme-options-section">
                        <div class="theme-options-grid">
                            <?php 
                            custom_clearance_render_field('about_us_intro_title', 'Intro Title', $options, 'text', 'The title of the introduction section.');
                            custom_clearance_render_field('about_us_intro_text_1', 'Intro Paragraph 1', $options, 'textarea', 'The first paragraph of the introduction.');
                            custom_clearance_render_field('about_us_intro_text_2', 'Intro Paragraph 2', $options, 'textarea', 'The second paragraph of the introduction.');
                            custom_clearance_render_field('about_us_intro_image', 'Intro Image', $options, 'image', 'The image for the introduction section.');
                            ?>
                        </div>
                    </div>
                <?php elseif ( 'mission' === $active_tab ) : ?>
                    <div class="theme-options-section">
                        <div class="theme-options-grid">
                            <?php 
                            custom_clearance_render_field('about_us_mission_title', 'Mission Title', $options, 'text', 'The title of the mission section.');
                            custom_clearance_render_field('about_us_mission_text', 'Mission Text', $options, 'textarea', 'The text of the mission section.');
                            ?>
                        </div>
                    </div>
                <?php elseif ( 'values' === $active_tab ) : ?>
                    <div class="theme-options-section">
                        <div class="theme-options-grid">
                            <?php 
                            custom_clearance_render_field('about_us_values_title', 'Values Title', $options, 'text', 'The title of the values section.');
                            custom_clearance_render_field('about_us_value_1_title', 'Value 1 Title', $options, 'text', 'The title of the first value.');
                            custom_clearance_render_field('about_us_value_1_text', 'Value 1 Text', $options, 'textarea', 'The text of the first value.');
                            custom_clearance_render_field('about_us_value_2_title', 'Value 2 Title', $options, 'text', 'The title of the second value.');
                            custom_clearance_render_field('about_us_value_2_text', 'Value 2 Text', $options, 'textarea', 'The text of the second value.');
                            custom_clearance_render_field('about_us_value_3_title', 'Value 3 Title', $options, 'text', 'The title of the third value.');
                            custom_clearance_render_field('about_us_value_3_text', 'Value 3 Text', $options, 'textarea', 'The text of the third value.');
                            ?>
                        </div>
                    </div>
                <?php elseif ( 'faq' === $active_tab ) : ?>
                    <div class="theme-options-section">
                        <div class="theme-options-grid">
                            <?php 
                            custom_clearance_render_field('about_us_faq_title', 'FAQ Title', $options, 'text', 'The title of the FAQ section.');
                            ?>
                            <div class="theme-option-card repeater-card">
                                <div class="theme-option-card-header">
                                    <h3>FAQ Items</h3>
                                </div>
                                <div class="theme-option-card-body">
                                    <div class="repeater">
                                        <div class="repeater-items">
                                            <?php
                                            $faq_items = isset( $options['about_us_faq_items'] ) ? json_decode( $options['about_us_faq_items'], true ) : array();
                                            if ( ! empty( $faq_items ) ) {
                                                foreach ( $faq_items as $item ) {
                                                    ?>
                                                    <div class="repeater-item">
                                                        <label>Question</label>
                                                        <input type="text" data-field="q" value="<?php echo esc_attr( $item['q'] ); ?>" class="widefat" />
                                                        <label>Answer</label>
                                                        <textarea data-field="a" class="widefat"><?php echo esc_textarea( $item['a'] ); ?></textarea>
                                                        <a href="#" class="remove-repeater-item">Remove</a>
                                                    </div>
                                                    <?php
                                                }
                                            }
                                            ?>
                                        </div>
                                        <div class="repeater-item-template" style="display:none;">
                                            <div class="repeater-item">
                                                <label>Question</label>
                                                <input type="text" data-field="q" value="" class="widefat" />
                                                <label>Answer</label>
                                                <textarea data-field="a" class="widefat"></textarea>
                                                <a href="#" class="remove-repeater-item">Remove</a>
                                            </div>
                                        </div>
                                        <a href="#" class="button-secondary add-repeater-item">Add FAQ</a>
                                        <input type="hidden" name="custom_clearance_theme_options[about_us_faq_items]" class="repeater-val" value="<?php echo esc_attr( isset( $options['about_us_faq_items'] ) ? $options['about_us_faq_items'] : '' ); ?>" />
                                    </div>
                                </div>
                            </div>
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
        'about_us_hero_image' => 'https://customsclearance.ma/wp-content/uploads/2015/11/header_bg_6.jpg',
        'about_us_intro_title' => 'CustomsClearance.ma',
        'about_us_intro_text_1' => 'CustomsClearance.ma accompagne les importateurs et exportateurs au Maroc : classement tarifaire HS, PortNet/BADR, autorisations (ONSSA/ANRT/IMANOR), ATPA/AT, et optimisation fiscale. Notre engagement : fiabilité, transparence et rapidité.',
        'about_us_intro_text_2' => 'Nous sommes dédiés à simplifier vos opérations douanières et à garantir la conformité de vos marchandises, vous permettant ainsi de vous concentrer sur le développement de votre activité.',
        'about_us_intro_image' => 'https://hamzaelbouihi.svaomega.com/wp-content/uploads/2025/10/ChatGPT-Image-Oct-6-2025-02_23_15-PM.png',
        'about_us_mission_title' => 'Notre Mission',
        'about_us_mission_text' => 'Notre mission est de fournir des solutions de dédouanement innovantes et efficaces, adaptées aux besoins spécifiques de chaque client. Nous nous engageons à offrir un service exceptionnel, basé sur l\'expertise, l\'intégrité et une compréhension approfondie des réglementations douanières marocaines et internationales.',
        'about_us_values_title' => 'Nos Valeurs',
        'about_us_value_1_title' => 'Fiabilité',
        'about_us_value_1_text' => 'Nous assurons des services douaniers précis et conformes, minimisant les risques et les retards.',
        'about_us_value_2_title' => 'Transparence',
        'about_us_value_2_text' => 'Une communication claire et des processus ouverts pour une confiance mutuelle.',
        'about_us_value_3_title' => 'Rapidité',
        'about_us_value_3_text' => 'Des procédures optimisées pour un dédouanement efficace et rapide de vos marchandises.',
        'about_us_faq_title' => 'Questions Fréquentes',
    );
}

function custom_clearance_render_field($id, $label, $options, $type = 'text', $description = '') {
    $defaults = custom_clearance_get_default_theme_options();
    $value = isset( $options[ $id ] ) ? $options[ $id ] : $defaults[ $id ];
    ?>
    <div class="theme-option-card">
        <div class="theme-option-card-header">
            <h3><?php echo esc_html( $label ); ?></h3>
        </div>
        <div class="theme-option-card-body">
            <?php if ( $type === 'image' ) : ?>
                <input type="text" name="custom_clearance_theme_options[<?php echo esc_attr( $id ); ?>]" value="<?php echo esc_attr( $value ); ?>" class="regular-text" />
                <button class="button-secondary upload_image_button">Upload Image</button>
            <?php elseif ( $type === 'textarea' ) : ?>
                <textarea name="custom_clearance_theme_options[<?php echo esc_attr( $id ); ?>]" rows="6" class="large-text code"><?php echo esc_textarea( $value ); ?></textarea>
            <?php else : ?>
                <input type="text" name="custom_clearance_theme_options[<?php echo esc_attr( $id ); ?>]" value="<?php echo esc_attr( $value ); ?>" class="regular-text" />
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
    $output = array();
    if ( is_array( $input ) ) {
        foreach ( $input as $key => $value ) {
            if ( $key === 'about_us_faq_items' ) {
                $output[ $key ] = wp_kses_post( $value );
            } elseif ( strpos( $key, 'image' ) !== false || strpos( $key, 'url' ) !== false ) {
                $output[ $key ] = esc_url_raw( $value );
            } else {
                $output[ $key ] = wp_kses_post( $value );
            }
        }
    }
    return $output;
}