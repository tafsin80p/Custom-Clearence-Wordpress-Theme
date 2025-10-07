<?php
/**
 * Template Name: Cities Page
 *
 * This template is used for displaying the Cities page.
 */

get_header(); ?>

<section class="bg-gradient-to-r from-[#0F2033] to-[#1A2B3C] text-white py-20 px-4 text-center relative overflow-hidden"
    style="background-image: url('https://customsclearance.ma/wp-content/uploads/revslider/slider_3.jpg');  background-position: center; background-repeat: no-repeat; background-size: cover; height: 300px;">
    <div class="absolute inset-0 bg-black opacity-50"></div>
    <div class="container mx-auto max-w-[1221px] px-4 relative z-10">
        <div class="text-center">
            <h2 class="text-4xl font-bold text-[#ffffff] mb-4" data-aos="fade-up" data-aos-duration="1000"
                data-aos-delay="200">
                <?php echo get_theme_mod( 'cities_section_title', 'Réseau national' ); ?>
            </h2>
            <a href="<?php echo home_url(); ?>" class="hover:underline">Accueil</a> &raquo;
            <span><?php echo get_theme_mod( 'cities_section_title', 'Réseau national' ); ?></span>
        </div>
    </div>
    </div>
</section>

<!-- Main Content Section -->
<section id="cities" class="cities-section py-20 bg-gray-50">
    <div class="container mx-auto max-w-[1221px] px-4">

        <!-- Cities List -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <?php
                $args = array(
                    'post_type' => 'city',
                    'posts_per_page' => -1,
                );
                $cities_query = new WP_Query( $args );

                if ( $cities_query->have_posts() ) :
                    while ( $cities_query->have_posts() ) : $cities_query->the_post();
                    $phone_number = get_post_meta( get_the_ID(), 'phone_number', true );
            ?>
            <!-- City Card -->
            <div class="city-card bg-white rounded-xl p-6 shadow-lg hover:shadow-xl transition-shadow duration-300 flex flex-col"
                data-aos="fade-up" data-aos-duration="1000">
                <div class="flex items-start mb-4">
                    <div class="w-12 h-12 bg-gray-100 rounded-lg flex items-center justify-center mr-4 flex-shrink-0">
                       <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'thumbnail'); ?>" alt="<?php the_title(); ?>" class="w-5 h-5 object-cover rounded-lg">
                    </div>
                    <div>
                        <h3 class="text-xl font-bold text-gray-900"><?php the_title(); ?></h3>
                        <div class="text-gray-600 leading-relaxed">
                            <?php the_excerpt(); ?>
                        </div>
                        <?php if ( ! empty( $phone_number ) ) : ?>
                            <p class="text-gray-600 leading-relaxed"><?php echo esc_html( $phone_number ); ?></p>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <?php
                    endwhile;
                    wp_reset_postdata();
                else :
                    echo '<p class="text-gray-600">No cities found.</p>';
                endif;
            ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>