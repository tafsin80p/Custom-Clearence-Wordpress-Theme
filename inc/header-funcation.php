<?php
// Add Customizer Options for Header Background Color, Menu Text Color, and Button Styling
function custom_theme_customize_register( $wp_customize ) {
    // Move controls to the 'Site Identity' section
    $wp_customize->get_section('title_tagline')->title = __('Site Identity & Header', 'customtheme');

    // Button Text
    $wp_customize->add_setting('custom_logo_text', array(
        'default'   => 'Request a Quote',
        'transport' => 'refresh',
    ));

    $wp_customize->add_control('custom_logo_text_control', array(
        'label'    => __('Button Text', 'customtheme'),
        'section'  => 'title_tagline',
        'settings' => 'custom_logo_text',
        'type'     => 'text',
        'priority' => 20,
    ));

    // Button URL
    $wp_customize->add_setting('custom_logo_url', array(
        'default'   => home_url('/quote'),
        'transport' => 'refresh',
    ));

    $wp_customize->add_control('custom_logo_url_control', array(
        'label'    => __('Button URL', 'customtheme'),
        'section'  => 'title_tagline',
        'settings' => 'custom_logo_url',
        'type'     => 'url',
        'priority' => 21,
    ));

    // Header Background Color
    $wp_customize->add_setting('header_bg_color', array(
        'default'   => '#17476a',
        'transport' => 'refresh',
    ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'header_bg_color_control', array(
        'label'    => __('Header Background Color', 'customtheme'),
        'section'  => 'title_tagline',
        'settings' => 'header_bg_color',
        'priority' => 22,
    )));

    // Menu Text Color
    $wp_customize->add_setting('menu_text_color', array(
        'default'   => '#ffffff',
        'transport' => 'refresh',
    ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'menu_text_color_control', array(
        'label'    => __('Menu Text Color', 'customtheme'),
        'section'  => 'title_tagline',
        'settings' => 'menu_text_color',
        'priority' => 23,
    )));

    // Header Font Size
    $wp_customize->add_setting('header_font_size', array(
        'default'   => '18px',
        'transport' => 'refresh',
    ));

    $wp_customize->add_control('header_font_size_control', array(
        'label'    => __('Header Font Size', 'customtheme'),
        'section'  => 'title_tagline',
        'settings' => 'header_font_size',
        'type'     => 'text',
        'priority' => 24,
    ));

    // Header Font Family
    $wp_customize->add_setting('header_font_family', array(
        'default'   => '-apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen-Sans, Ubuntu, Cantarell, "Helvetica Neue", sans-serif',
        'transport' => 'refresh',
    ));

    $wp_customize->add_control('header_font_family_control', array(
        'label'    => __('Header Font Family', 'customtheme'),
        'section'  => 'title_tagline',
        'settings' => 'header_font_family',
        'type'     => 'select',
        'choices'  => array(
            '-apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen-Sans, Ubuntu, Cantarell, "Helvetica Neue", sans-serif' => 'System UI',
            'Arial, Helvetica, sans-serif' => 'Arial',
            '"Times New Roman", Times, serif' => 'Times New Roman',
            '"Courier New", Courier, monospace' => 'Courier New',
        ),
        'priority' => 25,
    ));

    // Button Background Color
    $wp_customize->add_setting('button_bg_color', array(
        'default'   => '#ffffff',
        'transport' => 'refresh',
    ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'button_bg_color_control', array(
        'label'    => __('Button Background Color', 'customtheme'),
        'section'  => 'title_tagline',
        'settings' => 'button_bg_color',
        'priority' => 26,
    )));

    // Button Text Color
    $wp_customize->add_setting('button_text_color', array(
        'default'   => '#17476a',
        'transport' => 'refresh',
    ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'button_text_color_control', array(
        'label'    => __('Button Text Color', 'customtheme'),
        'section'  => 'title_tagline',
        'settings' => 'button_text_color',
        'priority' => 27,
    )));

    // Button Font Size
    $wp_customize->add_setting('button_font_size', array(
        'default'   => '16px',
        'transport' => 'refresh',
    ));

    $wp_customize->add_control('button_font_size_control', array(
        'label'    => __('Button Font Size', 'customtheme'),
        'section'  => 'title_tagline',
        'settings' => 'button_font_size',
        'type'     => 'text',
        'priority' => 28,
    ));
}
add_action('customize_register', 'custom_theme_customize_register');

