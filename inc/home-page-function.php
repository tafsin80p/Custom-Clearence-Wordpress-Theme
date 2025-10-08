<?php

// Add Homepage Settings Panel to the Customizer
function custom_clearance_customize_register( $wp_customize ) {
    // Add "Home Settings" Panel
    $wp_customize->add_panel( 'homepage_settings', array(
        'title'       => __( 'Home Settings', 'customsclearance' ),
        'priority'    => 10,
    ) );

    // Add Hero Section under Home Settings Panel
    $wp_customize->add_section( 'hero_section', array(
        'title'       => __( 'Hero Section', 'customsclearance' ),
        'panel'       => 'homepage_settings',  // Add it under "Home Settings" panel
    ) );
        
    // Hero Logo
    $wp_customize->add_setting( 'hero_logo', array(
        'default'   => 'https://your-default-logo-url.com',
        'sanitize_callback' => 'esc_url_raw',
    ) );
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'hero_logo', array(
        'label'     => __( 'Hero Logo', 'customsclearance' ),
        'section'   => 'hero_section',
    ) ) );

    // Hero Background Image
$wp_customize->add_setting( 'hero_bg_image', array(
    'default'   => 'https://customsclearance.ma/wp-content/uploads/revslider/slider_1.jpg',
    'sanitize_callback' => 'esc_url_raw',
) );
$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'hero_bg_image', array(
    'label'     => __( 'Hero Background Image', 'customsclearance' ),
    'section'   => 'hero_section',
    'settings'  => 'hero_bg_image',
) ) );

    // Hero Title 1
    $wp_customize->add_setting( 'hero_title_1', array(
        'default'   => 'Transitaire au Maroc',
        'sanitize_callback' => 'sanitize_text_field',
    ) );
    $wp_customize->add_control( 'hero_title_1', array(
        'label'     => __( 'Title Line 1', 'customsclearance' ),
        'section'   => 'hero_section',
        'type'      => 'text',
    ) );

    // Hero Title 2
    $wp_customize->add_setting( 'hero_title_2', array(
        'default'   => 'Dédouanement',
        'sanitize_callback' => 'sanitize_text_field',
    ) );
    $wp_customize->add_control( 'hero_title_2', array(
        'label'     => __( 'Title Line 2', 'customsclearance' ),
        'section'   => 'hero_section',
        'type'      => 'text',
    ) );

    // Hero Title 3
    $wp_customize->add_setting( 'hero_title_3', array(
        'default'   => 'PortNet/BADR • Maritime • Aérien • Routier',
        'sanitize_callback' => 'sanitize_text_field',
    ) );
    $wp_customize->add_control( 'hero_title_3', array(
        'label'     => __( 'Title Line 3', 'customsclearance' ),
        'section'   => 'hero_section',
        'type'      => 'text',
    ) );

    // Hero Description
    $wp_customize->add_setting( 'hero_description', array(
        'default'   => 'Nous sécurisons et accélérons vos opérations d\'import/export...', // Corrected escaping for apostrophe
        'sanitize_callback' => 'wp_kses_post',
    ) );
    $wp_customize->add_control( 'hero_description', array(
        'label'     => __( 'Description', 'customsclearance' ),
        'section'   => 'hero_section',
        'type'      => 'textarea',
    ) );

    // Button 1 Text
    $wp_customize->add_setting( 'hero_button_1_text', array(
        'default'   => 'Demander un devis',
        'sanitize_callback' => 'sanitize_text_field',
    ) );
    $wp_customize->add_control( 'hero_button_1_text', array(
        'label'     => __( 'Button 1 Text', 'customsclearance' ),
        'section'   => 'hero_section',
        'type'      => 'text',
    ) );

    // Button 1 URL
    $wp_customize->add_setting( 'hero_button_1_url', array(
        'default'   => '#',
        'sanitize_callback' => 'esc_url_raw',
    ) );
    $wp_customize->add_control( 'hero_button_1_url', array(
        'label'     => __( 'Button 1 URL', 'customsclearance' ),
        'section'   => 'hero_section',
        'type'      => 'url',
    ) );

    // Button 2 Text
    $wp_customize->add_setting( 'hero_button_2_text', array(
        'default'   => 'Parler à un expert',
        'sanitize_callback' => 'sanitize_text_field',
    ) );
    $wp_customize->add_control( 'hero_button_2_text', array(
        'label'     => __( 'Button 2 Text', 'customsclearance' ),
        'section'   => 'hero_section',
        'type'      => 'text',
    ) );

    // Button 2 URL
    $wp_customize->add_setting( 'hero_button_2_url', array(
        'default'   => '#',
        'sanitize_callback' => 'esc_url_raw',
    ) );
    $wp_customize->add_control( 'hero_button_2_url', array(
        'label'     => __( 'Button 2 URL', 'customsclearance' ),
        'section'   => 'hero_section',
        'type'      => 'url',
    ) );

    // Stat 1
    $wp_customize->add_setting( 'hero_stat_1_value', array('default' => '48h', 'sanitize_callback' => 'sanitize_text_field'));
    $wp_customize->add_control( 'hero_stat_1_value', array('label' => 'Stat 1 Value', 'section' => 'hero_section', 'type' => 'text'));
    $wp_customize->add_setting( 'hero_stat_1_label', array('default' => 'Déblocage moyen', 'sanitize_callback' => 'sanitize_text_field'));
    $wp_customize->add_control( 'hero_stat_1_label', array('label' => 'Stat 1 Label', 'section' => 'hero_section', 'type' => 'text'));

    // Stat 2
    $wp_customize->add_setting( 'hero_stat_2_value', array('default' => '96%', 'sanitize_callback' => 'sanitize_text_field'));
    $wp_customize->add_control( 'hero_stat_2_value', array('label' => 'Stat 2 Value', 'section' => 'hero_section', 'type' => 'text'));
    $wp_customize->add_setting( 'hero_stat_2_label', array('default' => 'Dossiers sans litiges', 'sanitize_callback' => 'sanitize_text_field'));
    $wp_customize->add_control( 'hero_stat_2_label', array('label' => 'Stat 2 Label', 'section' => 'hero_section', 'type' => 'text'));

    // Stat 3
    $wp_customize->add_setting( 'hero_stat_3_value', array('default' => '#1', 'sanitize_callback' => 'sanitize_text_field'));
    $wp_customize->add_control( 'hero_stat_3_value', array('label' => 'Stat 3 Value', 'section' => 'hero_section', 'type' => 'text'));
    $wp_customize->add_setting( 'hero_stat_3_label', array('default' => 'Support WhatsApp pro', 'sanitize_callback' => 'sanitize_text_field'));
    $wp_customize->add_control( 'hero_stat_3_label', array('label' => 'Stat 3 Label', 'section' => 'hero_section', 'type' => 'text'));

     // Add Service Cards inside Hero Section
    // Service Card 1 Title
    $wp_customize->add_setting( 'service_card_1_title', array(
        'default'   => 'Fret maritime',
        'sanitize_callback' => 'sanitize_text_field',
    ) );
    $wp_customize->add_control( 'service_card_1_title', array(
        'label'     => __( 'Service Card 1 Title', 'customsclearance' ),
        'section'   => 'hero_section', // Add it under 'hero_section'
        'type'      => 'text',
    ) );

    // Service Card 1 Description
    $wp_customize->add_setting( 'service_card_1_description', array(
        'default'   => 'FCL • LCL • Ro-Ro',
        'sanitize_callback' => 'sanitize_text_field',
    ) );
    $wp_customize->add_control( 'service_card_1_description', array(
        'label'     => __( 'Service Card 1 Description', 'customsclearance' ),
        'section'   => 'hero_section', // Add it under 'hero_section'
        'type'      => 'text',
    ) );

    // Service Card 1 Icon
    $wp_customize->add_setting( 'service_card_1_icon', array(
        'default'   => 'fa-solid fa-car-side',
        'sanitize_callback' => 'sanitize_text_field',
    ) );
    $wp_customize->add_control( 'service_card_1_icon', array(
        'label'     => __( 'Service Card 1 Icon (Font Awesome)', 'customsclearance' ),
        'section'   => 'hero_section', // Add it under 'hero_section'
        'type'      => 'text',
    ) );

    // Repeat for Service Card 2, 3, and 4...
    // Service Card 2 Title
    $wp_customize->add_setting( 'service_card_2_title', array(
        'default'   => 'Fret aérien',
        'sanitize_callback' => 'sanitize_text_field',
    ) );
    $wp_customize->add_control( 'service_card_2_title', array(
        'label'     => __( 'Service Card 2 Title', 'customsclearance' ),
        'section'   => 'hero_section', // Add it under 'hero_section'
        'type'      => 'text',
    ) );

    // Service Card 2 Description
    $wp_customize->add_setting( 'service_card_2_description', array(
        'default'   => 'Express & cargo',
        'sanitize_callback' => 'sanitize_text_field',
    ) );
    $wp_customize->add_control( 'service_card_2_description', array(
        'label'     => __( 'Service Card 2 Description', 'customsclearance' ),
        'section'   => 'hero_section', // Add it under 'hero_section'
        'type'      => 'text',
    ) );

    // Service Card 2 Icon
    $wp_customize->add_setting( 'service_card_2_icon', array(
        'default'   => 'fa-solid fa-plane',
        'sanitize_callback' => 'sanitize_text_field',
    ) );
    $wp_customize->add_control( 'service_card_2_icon', array(
        'label'     => __( 'Service Card 2 Icon (Font Awesome)', 'customsclearance' ),
        'section'   => 'hero_section', // Add it under 'hero_section'
        'type'      => 'text',
    ) );

    // Repeat for Service Card 3...
    // Service Card 3 Title
    $wp_customize->add_setting( 'service_card_3_title', array(
        'default'   => 'Transit routier',
        'sanitize_callback' => 'sanitize_text_field',
    ) );
    $wp_customize->add_control( 'service_card_3_title', array(
        'label'     => __( 'Service Card 3 Title', 'customsclearance' ),
        'section'   => 'hero_section', // Add it under 'hero_section'
        'type'      => 'text',
    ) );

    // Service Card 3 Description
    $wp_customize->add_setting( 'service_card_3_description', array(
        'default'   => 'Pré/post-acheminement',
        'sanitize_callback' => 'sanitize_text_field',
    ) );
    $wp_customize->add_control( 'service_card_3_description', array(
        'label'     => __( 'Service Card 3 Description', 'customsclearance' ),
        'section'   => 'hero_section', // Add it under 'hero_section'
        'type'      => 'text',
    ) );

    // Service Card 3 Icon
    $wp_customize->add_setting( 'service_card_3_icon', array(
        'default'   => 'fa-solid fa-truck',
        'sanitize_callback' => 'sanitize_text_field',
    ) );
    $wp_customize->add_control( 'service_card_3_icon', array(
        'label'     => __( 'Service Card 3 Icon (Font Awesome)', 'customsclearance' ),
        'section'   => 'hero_section', // Add it under 'hero_section'
        'type'      => 'text',
    ) );

    // Repeat for Service Card 4...
    // Service Card 4 Title
    $wp_customize->add_setting( 'service_card_4_title', array(
        'default'   => 'Dédouanement & conformité',
        'sanitize_callback' => 'sanitize_text_field',
    ) );
    $wp_customize->add_control( 'service_card_4_title', array(
        'label'     => __( 'Service Card 4 Title', 'customsclearance' ),
        'section'   => 'hero_section', // Add it under 'hero_section'
        'type'      => 'text',
    ) );

    // Service Card 4 Description
    $wp_customize->add_setting( 'service_card_4_description', array(
        'default'   => 'PortNet/BADR, HS 10 chiffres, DFD, ATPA, COC, ONSSA/ANRT',
        'sanitize_callback' => 'sanitize_text_field',
    ) );
    $wp_customize->add_control( 'service_card_4_description', array(
        'label'     => __( 'Service Card 4 Description', 'customsclearance' ),
        'section'   => 'hero_section', // Add it under 'hero_section'
        'type'      => 'text',
    ) );

    // Service Card 4 Icon
    $wp_customize->add_setting( 'service_card_4_icon', array(
        'default'   => 'fa-solid fa-check-circle',
        'sanitize_callback' => 'sanitize_text_field',
    ) );
    $wp_customize->add_control( 'service_card_4_icon', array(
        'label'     => __( 'Service Card 4 Icon (Font Awesome)', 'customsclearance' ),
        'section'   => 'hero_section', // Add it under 'hero_section'
        'type'      => 'text',
    ) );

    // Service Card 4 URL
    $wp_customize->add_setting( 'service_card_4_url', array(
        'default'   => '#',
        'sanitize_callback' => 'esc_url_raw',
    ) );
    $wp_customize->add_control( 'service_card_4_url', array(
        'label'     => __( 'Service Card 4 URL', 'customsclearance' ),
        'section'   => 'hero_section', // Add it under 'hero_section'
        'type'      => 'url',
    ) );

    // Add Service Section under Home Settings Panel for 6 service cards
    $wp_customize->add_section( 'service_section', array(
        'title'       => __( 'Service Section', 'customsclearance' ),
        'panel'       => 'homepage_settings',  // Add it under "Home Settings" panel
    ) );




// ================== service Section================================================================

     // Add Service Section under Home Settings Panel
    $wp_customize->add_section( 'service_section', array(
        'title'       => __( 'Service Section', 'customsclearance' ),
        'panel'       => 'homepage_settings',  // Add it under "Home Settings" panel
    ) );

    // Loop for Service Card 1 to 6
    for ( $i = 1; $i <= 6; $i++ ) {
        // Service Card Icon
        $wp_customize->add_setting( "service_cards_{$i}_icon", array(
            'default'   => 'fa-solid fa-car-side',
            'sanitize_callback' => 'sanitize_text_field',
        ) );
        $wp_customize->add_control( "service_cards_{$i}_icon", array(
            'label'     => __( "Service Card {$i} Icon (Font Awesome)", 'customsclearance' ),
            'section'   => 'service_section',
            'type'      => 'text',
        ) );

        // Service Card Title
        $wp_customize->add_setting( "service_cards_{$i}_title", array(
            'default'   => 'Service Title',
            'sanitize_callback' => 'sanitize_text_field',
        ) );
        $wp_customize->add_control( "service_cards_{$i}_title", array(
            'label'     => __( "Service Card {$i} Title", 'customsclearance' ),
            'section'   => 'service_section',
            'type'      => 'text',
        ) );

        // Service Card Description
        $wp_customize->add_setting( "service_cards_{$i}_description", array(
            'default'   => 'Service Description',
            'sanitize_callback' => 'sanitize_text_field',
        ) );
        $wp_customize->add_control( "service_cards_{$i}_description", array(
            'label'     => __( "Service Card {$i} Description", 'customsclearance' ),
            'section'   => 'service_section',
            'type'      => 'text',
        ) );

        // Service Card Button Text
        $wp_customize->add_setting( "service_cards_{$i}_btn_text", array(
            'default'   => 'En savoir plus',
            'sanitize_callback' => 'sanitize_text_field',
        ) );
        $wp_customize->add_control( "service_cards_{$i}_btn_text", array(
            'label'     => __( "Service Card {$i} Button Text", 'customsclearance' ),
            'section'   => 'service_section',
            'type'      => 'text',
        ) );

        // Service Card URL
        $wp_customize->add_setting( "service_cards_{$i}_url", array(
            'default'   => '#',
            'sanitize_callback' => 'esc_url_raw',
        ) );
         $wp_customize->add_control( "service_cards_{$i}_url", array(
            'label'     => __( "Service Card {$i} URL", 'customsclearance' ),
            'section'   => 'service_section',
            'type'      => 'url',
        ) );
    }

// ================ National Coverage Section================================================================

   
    // Add National Coverage Section under Home Settings Panel
    $wp_customize->add_section( 'national_coverage_section', array(
        'title'       => __( 'National Coverage', 'customsclearance' ),
        'panel'       => 'homepage_settings',
    ) );

    // Coverage Title
    $wp_customize->add_setting( 'coverage_title', array(
        'default'   => 'Couverture Nationale',
        'sanitize_callback' => 'sanitize_text_field',
    ) );
    $wp_customize->add_control( 'coverage_title', array(
        'label'     => __( 'Coverage Title', 'customsclearance' ),
        'section'   => 'national_coverage_section',
        'type'      => 'text',
    ) );

    // Coverage Description
    $wp_customize->add_setting( 'coverage_description', array(
        'default'   => 'Des équipes locales au plus près de vos opérations portuaires et aéroportuaires.',
        'sanitize_callback' => 'wp_kses_post',
    ) );
    $wp_customize->add_control( 'coverage_description', array(
        'label'     => __( 'Coverage Description', 'customsclearance' ),
        'section'   => 'national_coverage_section',
        'type'      => 'textarea',
    ) );

    // Add Location Cards (1 to 5)
    for ( $i = 1; $i <= 5; $i++ ) {
        // Location Icon (Font Awesome Icon)
        $wp_customize->add_setting( "location_{$i}_icon", array(
            'default'   => 'fa-solid fa-location-dot', // Default icon
            'sanitize_callback' => 'sanitize_text_field',
        ) );
        $wp_customize->add_control( "location_{$i}_icon", array(
            'label'     => __( "Location Card {$i} Icon", 'customsclearance' ),
            'section'   => 'national_coverage_section',
            'type'      => 'text',
        ) );

        // Location Title
        $wp_customize->add_setting( "location_{$i}_title", array(
            'default'   => 'Location Title',
            'sanitize_callback' => 'sanitize_text_field',
        ) );
        $wp_customize->add_control( "location_{$i}_title", array(
            'label'     => __( "Location Card {$i} Title", 'customsclearance' ),
            'section'   => 'national_coverage_section',
            'type'      => 'text',
        ) );

        // Location Description
        $wp_customize->add_setting( "location_{$i}_description", array(
            'default'   => 'Location Description',
            'sanitize_callback' => 'sanitize_text_field',
        ) );
        $wp_customize->add_control( "location_{$i}_description", array(
            'label'     => __( "Location Card {$i} Description", 'customsclearance' ),
            'section'   => 'national_coverage_section',
            'type'      => 'text',
        ) );
        // "Découvrir" Button Text for each location
        $wp_customize->add_setting( "location_{$i}_discover_button_text", array(
            'default'   => 'Découvrir', // Default button text
            'sanitize_callback' => 'sanitize_text_field',
        ) );
        $wp_customize->add_control( "location_{$i}_discover_button_text", array(
            'label'     => __( "Location Card {$i} 'Découvrir' Button Text", 'customsclearance' ),
            'section'   => 'national_coverage_section',
            'type'      => 'text',
        ) );

        // Location URL
        $wp_customize->add_setting( "location_{$i}_url", array(
            'default'   => '#',
            'sanitize_callback' => 'esc_url_raw',
        ) );
        $wp_customize->add_control( "location_{$i}_url", array(
            'label'     => __( "Location Card {$i} URL", 'customsclearance' ),
            'section'   => 'national_coverage_section',
            'type'      => 'url',
        ) );

        // Location Phone Number
        $wp_customize->add_setting( "location_{$i}_phone", array(
            'default'   => '+212 675 828 200',
            'sanitize_callback' => 'sanitize_text_field',
        ) );
        $wp_customize->add_control( "location_{$i}_phone", array(
            'label'     => __( "Location Card {$i} Phone", 'customsclearance' ),
            'section'   => 'national_coverage_section',
            'type'      => 'text',
        ) );

        
    }


// ================= Testimonials Section================================================================

    // Testimonials Section
      // Add Testimonials Section
    $wp_customize->add_section( 'testimonials_section', array(
        'title'       => __( 'Testimonials Section', 'customsclearance' ),
        'panel'       => 'homepage_settings',
    ) );

    // Testimonials Title
    $wp_customize->add_setting( 'testimonials_title', array(
        'default'   => 'Ce que nos clients disent',
        'sanitize_callback' => 'sanitize_text_field',
    ) );
    $wp_customize->add_control( 'testimonials_title', array(
        'label'     => __( 'Testimonials Title', 'customsclearance' ),
        'section'   => 'testimonials_section',
        'type'      => 'text',
    ) );

    // Add Testimonial Cards (1 to 3 for now)
    for ( $i = 1; $i <= 3; $i++ ) {
        // Testimonial Text
        $wp_customize->add_setting( "testimonial_{$i}_text", array(
            'default'   => 'Déblocage rapide et accompagnement clair. On a gagné du temps et évité des surcoûts.',
            'sanitize_callback' => 'sanitize_textarea_field',
        ) );
        $wp_customize->add_control( "testimonial_{$i}_text", array(
            'label'     => __( "Testimonial {$i} Text", 'customsclearance' ),
            'section'   => 'testimonials_section',
            'type'      => 'textarea',
        ) );

        // Testimonial Name
        $wp_customize->add_setting( "testimonial_{$i}_name", array(
            'default'   => 'Directeur logistique - Agadir',
            'sanitize_callback' => 'sanitize_text_field',
        ) );
        $wp_customize->add_control( "testimonial_{$i}_name", array(
            'label'     => __( "Testimonial {$i} Name", 'customsclearance' ),
            'section'   => 'testimonials_section',
            'type'      => 'text',
        ) );

        // Testimonial Rating (Star rating or other)
        $wp_customize->add_setting( "testimonial_{$i}_rating", array(
            'default'   => 5,
            'sanitize_callback' => 'absint',
        ) );
        $wp_customize->add_control( "testimonial_{$i}_rating", array(
            'label'     => __( "Testimonial {$i} Rating (out of 5)", 'customsclearance' ),
            'section'   => 'testimonials_section',
            'type'      => 'number',
            'input_attrs' => array( 'min' => 1, 'max' => 5 ),
        ) );
    }
    

}
add_action( 'customize_register', 'custom_clearance_customize_register' );


?>