<?php
/**
 * Custom Gutenberg Blocks
 */

// Enqueue block editor assets
function custom_clearance_block_editor_assets() {
    wp_enqueue_script(
        'custom-clearance-blocks',
        get_template_directory_uri() . '/assets/js/admin/gutenberg-blocks.js',
        array('wp-blocks', 'wp-element', 'wp-editor', 'wp-components', 'wp-i18n'),
        '1.0.0',
        true
    );
    
    wp_enqueue_style(
        'custom-clearance-block-editor',
        get_template_directory_uri() . '/assets/css/admin/block-editor.css',
        array('wp-edit-blocks'),
        '1.0.0'
    );
}
add_action('enqueue_block_editor_assets', 'custom_clearance_block_editor_assets');

// Add custom block category
function custom_clearance_block_categories($categories, $post) {
    return array_merge(
        $categories,
        array(
            array(
                'slug' => 'customsclearance',
                'title' => __('Custom Clearance', 'customsclearance'),
                'icon' => 'admin-tools',
            ),
        )
    );
}
add_filter('block_categories_all', 'custom_clearance_block_categories', 10, 2);

// Register custom blocks
function custom_clearance_register_blocks() {
    // Services Block
    register_block_type('customsclearance/services-block', array(
        'editor_script' => 'custom-clearance-blocks',
        'editor_style' => 'custom-clearance-block-editor',
        'render_callback' => 'custom_clearance_render_services_block',
        'attributes' => array(
            'title' => array(
                'type' => 'string',
                'default' => 'Découvrez nos services'
            ),
            'subtitle' => array(
                'type' => 'string',
                'default' => ''
            ),
            'postsPerPage' => array(
                'type' => 'number',
                'default' => 6
            ),
            'showViewAll' => array(
                'type' => 'boolean',
                'default' => true
            ),
            'backgroundColor' => array(
                'type' => 'string',
                'default' => 'bg-gray-50'
            ),
            'textColor' => array(
                'type' => 'string',
                'default' => 'text-gray-900'
            )
        )
    ));
}
add_action('init', 'custom_clearance_register_blocks');

// Render callback for Services Block
function custom_clearance_render_services_block($attributes) {
    $title = $attributes['title'] ?? 'Découvrez nos services';
    $subtitle = $attributes['subtitle'] ?? '';
    $posts_per_page = $attributes['postsPerPage'] ?? 6;
    $show_view_all = $attributes['showViewAll'] ?? true;
    $bg_color = $attributes['backgroundColor'] ?? 'bg-gray-50';
    $text_color = $attributes['textColor'] ?? 'text-gray-900';
    
    ob_start();
    ?>
    <div class="services-block-wrapper py-20 px-4 <?php echo esc_attr($bg_color); ?>">
        <div class="container mx-auto max-w-[1221px] px-4">
            <!-- Section Header -->
            <div class="text-center mb-16">
                <h2 class="text-3xl font-bold <?php echo esc_attr($text_color); ?> mb-4">
                    <?php echo esc_html($title); ?>
                </h2>
                <?php if (!empty($subtitle)): ?>
                    <p class="text-lg text-gray-600 max-w-3xl mx-auto">
                        <?php echo esc_html($subtitle); ?>
                    </p>
                <?php endif; ?>
            </div>

            <!-- Services Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <?php
                $services_query_args = array(
                    'post_type'      => 'service',
                    'posts_per_page' => intval($posts_per_page),
                    'post_status'    => 'publish',
                    'orderby'        => 'menu_order',
                    'order'          => 'ASC'
                );

                $services_query = new WP_Query($services_query_args);

                if ($services_query->have_posts()) :
                    while ($services_query->have_posts()) : $services_query->the_post();
                ?>
                        <article class="bg-white rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300 overflow-hidden">
                            <?php if (has_post_thumbnail()) : ?>
                                <div class="aspect-w-16 aspect-h-9">
                                    <a href="<?php the_permalink(); ?>">
                                        <?php the_post_thumbnail('medium', array(
                                            'class' => 'w-full h-48 object-cover hover:scale-105 transition-transform duration-300'
                                        )); ?>
                                    </a>
                                </div>
                            <?php else : ?>
                                <!-- Fallback image if no featured image -->
                                <div class="w-full h-48 bg-gradient-to-br from-[#17476a] to-[#1A2B3C] flex items-center justify-center">
                                    <i class="fas fa-cogs text-white text-4xl"></i>
                                </div>
                            <?php endif; ?>
                            
                            <div class="p-6">
                                <h3 class="text-xl font-bold text-gray-900 mb-3">
                                    <a href="<?php the_permalink(); ?>" class="hover:text-[#17476a] transition-colors duration-300">
                                        <?php the_title(); ?>
                                    </a>
                                </h3>
                                
                                <?php if (has_excerpt()) : ?>
                                    <div class="text-gray-600 mb-4 leading-relaxed">
                                        <?php the_excerpt(); ?>
                                    </div>
                                <?php elseif (get_the_content()) : ?>
                                    <div class="text-gray-600 mb-4 leading-relaxed">
                                        <?php echo wp_trim_words(get_the_content(), 15, '...'); ?>
                                    </div>
                                <?php endif; ?>
                                
                                <a href="<?php the_permalink(); ?>" class="inline-flex items-center text-[#17476a] font-semibold hover:text-[#0F2033] transition-colors duration-300">
                                    En savoir plus 
                                    <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                    </svg>
                                </a>
                            </div>
                        </article>
                <?php
                    endwhile;
                    wp_reset_postdata();
                else :
                ?>
                    <div class="col-span-full text-center py-12">
                        <div class="max-w-md mx-auto">
                            <i class="fas fa-search text-gray-400 text-6xl mb-4"></i>
                            <h3 class="text-xl font-semibold text-gray-900 mb-2">Aucun service trouvé</h3>
                            <p class="text-gray-600">Il n'y a actuellement aucun service disponible. Veuillez revenir plus tard.</p>
                        </div>
                    </div>
                <?php
                endif;
                ?>
            </div>
            
            <!-- View All Services Link -->
            <?php if ($show_view_all && $services_query->found_posts > intval($posts_per_page)) : ?>
                <div class="mt-8 text-center">
                    <a href="<?php echo get_post_type_archive_link('service'); ?>" class="inline-flex items-center bg-[#17476a] text-white font-bold py-3 px-8 rounded-lg hover:bg-[#0F2033] transition-colors duration-300">
                        Voir tous nos services
                        <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                        </svg>
                    </a>
                </div>
            <?php endif; ?>
        </div>
    </div>
    <?php
    return ob_get_clean();
}

// Shortcode for Services Block (fallback)
function custom_clearance_services_shortcode($atts) {
    $atts = shortcode_atts(array(
        'title' => 'Découvrez nos services',
        'subtitle' => '',
        'posts_per_page' => 6,
        'show_view_all' => 'true',
        'background_color' => 'bg-gray-50',
        'text_color' => 'text-gray-900'
    ), $atts);

    $attributes = array(
        'title' => $atts['title'],
        'subtitle' => $atts['subtitle'],
        'postsPerPage' => intval($atts['posts_per_page']),
        'showViewAll' => $atts['show_view_all'] === 'true',
        'backgroundColor' => $atts['background_color'],
        'textColor' => $atts['text_color']
    );

    return custom_clearance_render_services_block($attributes);
}
add_shortcode('services_block', 'custom_clearance_services_shortcode');
