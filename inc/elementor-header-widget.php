<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

/**
 * Elementor Header Widget.
 *
 * Elementor widget that displays the site header.
 *
 * @since 1.0.0
 */
class Elementor_Header_Widget extends \Elementor\Widget_Base {

    /**
     * Get widget name.
     *
     * Retrieve header widget name.
     *
     * @since 1.0.0
     * @access public
     * @return string Widget name.
     */
    public function get_name() {
        return 'site-header';
    }

    /**
     * Get widget title.
     *
     * Retrieve header widget title.
     *
     * @since 1.0.0
     * @access public
     * @return string Widget title.
     */
    public function get_title() {
        return esc_html__( 'Site Header', 'customtheme' );
    }

    /**
     * Get widget icon.
     *
     * Retrieve header widget icon.
     *
     * @since 1.0.0
     * @access public
     * @return string Widget icon.
     */
    public function get_icon() {
        return 'eicon-header';
    }

    /**
     * Get widget categories.
     *
     * Retrieve the list of categories the header widget belongs to.
     *
     * @since 1.0.0
     * @access public
     * @return array Widget categories.
     */
    public function get_categories() {
        return [ 'general' ];
    }

    /**
     * Render header widget output on the frontend.
     *
     * Written in PHP and used to generate the final HTML.
     *
     * @since 1.0.0
     * @access protected
     */
    protected function render() {
        get_template_part( 'template-parts/header-main' );
    }
}
