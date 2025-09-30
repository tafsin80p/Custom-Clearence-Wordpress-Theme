<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
    <?php
    $options = get_option('custom_clearance_theme_options');
    $primary_color = isset($options['primary_color']) ? $options['primary_color'] : '#000000';
    ?>
    <style>
        :root {
            --primary-color: <?php echo esc_attr($primary_color); ?>;
        }
    </style>
</head>
<body <?php body_class(); ?>>
<?php get_template_part('template-parts/header-main'); ?>

