<?php
/**
 * Template Name: Cities Page
 *
 * This template is used for displaying the Cities page.
 */

get_header(); ?>

<!-- Main Content Section -->
<section id="cities" class="cities-section py-20 bg-gray-50">
    <div class="container mx-auto max-w-[1221px] px-4">
        <!-- Section Header -->
        <div class="text-start mb-16">
            <h2 class="text-4xl font-bold text-[#384050] mb-4" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                <?php echo get_theme_mod( 'cities_section_title', 'Our Cities' ); ?>
            </h2>
            <p class="text-lg text-gray-600" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">
                <?php echo get_theme_mod( 'cities_section_description', 'Explore our available cities for services.' ); ?>
            </p>
        </div>

        <!-- Cities List -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <?php
                // Fetch the cities from WordPress (you can use custom post type or page builder).
                // Here we use simple example with custom fields for cities.
                $cities = get_posts(array(
                    'post_type' => 'city', // Assuming 'city' is a custom post type
                    'posts_per_page' => -1,
                ));

                if ($cities) :
                    foreach ($cities as $city) :
                        $city_name = get_the_title($city->ID);
                        $city_description = get_the_excerpt($city->ID);
                        $city_url = get_permalink($city->ID);
            ?>
                <!-- City Card -->
                <div class="city-card bg-white rounded-xl p-6 shadow-lg hover:shadow-xl transition-shadow duration-300 flex flex-col" data-aos="fade-up" data-aos-duration="1000">
                    <div class="flex items-start mb-4">
                        <div class="w-12 h-12 bg-gray-100 rounded-lg flex items-center justify-center mr-4 flex-shrink-0">
                            <i class="fa-solid fa-city text-gray-700"></i> <!-- Icon for city -->
                        </div>
                        <div>
                            <h3 class="text-xl font-bold text-gray-900"><?php echo $city_name; ?></h3>
                            <p class="text-gray-600 leading-relaxed">
                                <?php echo $city_description; ?>
                            </p>
                        </div>
                    </div>
                    <a href="<?php echo $city_url; ?>" class="w-full bg-gray-100 text-gray-800 py-3 px-4 rounded-lg font-semibold hover:bg-gray-200 transition-colors duration-200 mt-auto">
                        View Details
                    </a>
                </div>
            <?php
                    endforeach;
                else :
                    echo '<p class="text-gray-600">No cities found.</p>';
                endif;
            ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>
