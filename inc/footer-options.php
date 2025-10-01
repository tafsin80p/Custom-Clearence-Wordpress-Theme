<?php
function custom_clearance_footer_customize_register( $wp_customize ) {
    // Footer Panel
    $wp_customize->add_panel( 'footer_panel', array(
        'title'       => __( 'Footer', 'customsclearance' ),
        'priority'    => 30,
    ) );

    // Logo Section
    $wp_customize->add_section( 'footer_logo_section', array(
        'title'       => __( 'Logo & Description', 'customsclearance' ),
        'panel'       => 'footer_panel',
    ) );

    // Logo Setting
    $wp_customize->add_setting( 'footer_logo', array(
        'default'     => '',
        'sanitize_callback' => 'esc_url_raw',
    ) );

    // Logo Control
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'footer_logo', array(
        'label'       => __( 'Footer Logo', 'customsclearance' ),
        'section'     => 'footer_logo_section',
        'settings'    => 'footer_logo',
    ) ) );

    // Description Setting
    $wp_customize->add_setting( 'footer_description', array(
        'default'     => '',
        'sanitize_callback' => 'sanitize_textarea_field',
    ) );

    // Description Control
    $wp_customize->add_control( 'footer_description', array(
        'label'       => __( 'Footer Description', 'customsclearance' ),
        'section'     => 'footer_logo_section',
        'type'        => 'textarea',
    ) );

    // Locations Section
    $wp_customize->add_section( 'footer_locations_section', array(
        'title'       => __( 'Locations', 'customsclearance' ),
        'panel'       => 'footer_panel',
    ) );

    // Location 1 Setting
    $wp_customize->add_setting( 'footer_location_1', array(
        'default'     => 'Casablanca – Bd Mohammed V',
        'sanitize_callback' => 'sanitize_text_field',
    ) );

    // Location 1 Control
    $wp_customize->add_control( 'footer_location_1', array(
        'label'       => __( 'Location 1', 'customsclearance' ),
        'section'     => 'footer_locations_section',
        'type'        => 'text',
    ) );

    // Location 2 Setting
    $wp_customize->add_setting( 'footer_location_2', array(
        'default'     => 'Tanger – Tanger Med',
        'sanitize_callback' => 'sanitize_text_field',
    ) );

    // Location 2 Control
    $wp_customize->add_control( 'footer_location_2', array(
        'label'       => __( 'Location 2', 'customsclearance' ),
        'section'     => 'footer_locations_section',
        'type'        => 'text',
    ) );

    // Location 3 Setting
    $wp_customize->add_setting( 'footer_location_3', array(
        'default'     => 'Agadir – Port d\'Agadir',
        'sanitize_callback' => 'sanitize_text_field',
    ) );

    // Location 3 Control
    $wp_customize->add_control( 'footer_location_3', array(
        'label'       => __( 'Location 3', 'customsclearance' ),
        'section'     => 'footer_locations_section',
        'type'        => 'text',
    ) );

    // Location 4 Setting
    $wp_customize->add_setting( 'footer_location_4', array(
        'default'     => 'Dakhla – Port de Dakhla',
        'sanitize_callback' => 'sanitize_text_field',
    ) );

    // Location 4 Control
    $wp_customize->add_control( 'footer_location_4', array(
        'label'       => __( 'Location 4', 'customsclearance' ),
        'section'     => 'footer_locations_section',
        'type'        => 'text',
    ) );

    // Contact Section
    $wp_customize->add_section( 'footer_contact_section', array(
        'title'       => __( 'Contact', 'customsclearance' ),
        'panel'       => 'footer_panel',
    ) );

    // Phone Setting
    $wp_customize->add_setting( 'footer_phone', array(
        'default'     => '+212 675 828 200',
        'sanitize_callback' => 'sanitize_text_field',
    ) );

    // Phone Control
    $wp_customize->add_control( 'footer_phone', array(
        'label'       => __( 'Phone Number', 'customsclearance' ),
        'section'     => 'footer_contact_section',
        'type'        => 'text',
    ) );

    // Email Setting
    $wp_customize->add_setting( 'footer_email', array(
        'default'     => 'contact@customsclearance.ma',
        'sanitize_callback' => 'sanitize_email',
    ) );

    // Email Control
    $wp_customize->add_control( 'footer_email', array(
        'label'       => __( 'Email Address', 'customsclearance' ),
        'section'     => 'footer_contact_section',
        'type'        => 'email',
    ) );

    // Languages Setting
    $wp_customize->add_setting( 'footer_languages', array(
        'default'     => 'FR • AR • EN',
        'sanitize_callback' => 'sanitize_text_field',
    ) );

    // Languages Control
    $wp_customize->add_control( 'footer_languages', array(
        'label'       => __( 'Languages', 'customsclearance' ),
        'section'     => 'footer_contact_section',
        'type'        => 'text',
    ) );

    // Copyright Section
    $wp_customize->add_section( 'footer_copyright_section', array(
        'title'       => __( 'Copyright', 'customsclearance' ),
        'panel'       => 'footer_panel',
    ) );

    // Copyright Setting
    $wp_customize->add_setting( 'footer_copyright', array(
        'default'     => '© 2025 CustomsClearance.ma — Tous droits réservés.',
        'sanitize_callback' => 'sanitize_text_field',
    ) );

    // Copyright Control
    $wp_customize->add_control( 'footer_copyright', array(
        'label'       => __( 'Copyright Text', 'customsclearance' ),
        'section'     => 'footer_copyright_section',
        'type'        => 'text',
    ) );
}
add_action( 'customize_register', 'custom_clearance_footer_customize_register' );

function custom_clearance_register_nav_menu(){
    register_nav_menus( array(
        'footer_useful_links' => __( 'Footer Useful Links', 'customsclearance' ),
    ) );
}
add_action( 'after_setup_theme', 'custom_clearance_register_nav_menu' );
?>