<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

/**
 * Register Custom Elementor Widgets
 *
 * @param \Elementor\Widgets_Manager $widgets_manager Elementor widgets manager.
 * @return void
 */
function register_custom_elementor_widgets( $widgets_manager ) {

    // Check if Elementor is loaded
    if ( did_action( 'elementor/loaded' ) ) {
        require_once( __DIR__ . '/elementor-header-widget.php' );
        $widgets_manager->register( new \Elementor_Header_Widget() );
    }
}
add_action( 'elementor/widgets/register', 'register_custom_elementor_widgets' );
