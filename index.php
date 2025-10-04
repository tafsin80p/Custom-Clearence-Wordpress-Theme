<?php get_header(); ?>


<!-- Hero Section -->
<section id="hero" class="hero-section bg-[#17476a] py-20"
    style="background-image: url('<?php echo esc_url( get_theme_mod( 'hero_bg_image', 'default_image_url' ) ); ?>'); background-size: cover; background-position: center;">
    <div class="container mx-auto max-w-[1221px] px-4">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 items-center">

            <!-- Left Column - Main Content -->
            <div class="text-white">
                <!-- Logo and URL -->
                <div class="flex items-center space-x-2 mb-8" data-aos="fade-up" data-aos-delay="100"
                    data-aos-duration="1200">
                    <!-- Dynamically display the logo from Customizer -->
                    <img class="w-64"
                        src="<?php echo esc_url( get_theme_mod( 'hero_logo', 'https://your-default-logo-url.com' ) ); ?>"
                        alt="Hero Logo">
                </div>


                <!-- Main Title -->
                <div class="mb-6" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1200">
                    <h1 class="text-4xl lg:text-5xl font-bold text-white leading-tight">
                        <div><?php echo get_theme_mod( 'hero_title_1', 'Transitaire au Maroc' ); ?></div>
                        <div class="text-[#a2b7d6]"><?php echo get_theme_mod( 'hero_title_2', 'Dédouanement' ); ?></div>
                        <div class="text-[#a2b7d6]">
                            <?php echo get_theme_mod( 'hero_title_3', 'PortNet/BADR • Maritime • Aérien • Routier' ); ?>
                        </div>
                    </h1>
                </div>

                <!-- Description -->
                <p class="text-lg text-[#a2b7d6] mb-8 leading-relaxed max-w-lg" data-aos="fade-up" data-aos-delay="300"
                    data-aos-duration="1200">
                    <?php echo get_theme_mod( 'hero_description', 'Nous sécurisons et accélérons vos opérations d\'import/export...' ); ?>
                </p>

                <!-- Call to Action -->
                <div class="flex items-center space-x-4 mb-12" data-aos="fade-up" data-aos-delay="400"
                    data-aos-duration="1200">
                    <button
                        class="cta-button btn rounded-full text-[#0A3D62] bg-white flex items-center space-x-2 justify-center">
                        <a class="text-[#0A3D62]"
                            href="<?php echo get_theme_mod( 'hero_button_1_url', '#' ); ?>"><?php echo get_theme_mod( 'hero_button_1_text', 'Demander un devis' ); ?></a>
                        <i class="fa-solid fa-arrow-right text-[#0A3D62]"></i>
                    </button>
                    <button class="bg-white text-[#0A3D62] flex items-center justify-center btn rounded-full space-x-2">
                        <a class="text-[#0A3D62]"
                            href="<?php echo get_theme_mod( 'hero_button_2_url', '#' ); ?>"><?php echo get_theme_mod( 'hero_button_2_text', 'Parler à un expert' ); ?>
                            <i class="fa-solid fa-arrow-right text-[#0A3D62] ml-2"></i></a>
                    </button>
                </div>

                <!-- Statistics Cards -->
                <div class="grid grid-cols-3 gap-4 stats-grid">
                    <div class="stats-card rounded-3xl border border-white/15 p-4 shadow-sm bg-white/10 backdrop-blur"
                        data-aos="fade-up" data-aos-delay="500" data-aos-duration="1200">
                        <div class="text-2xl font-bold text-white mb-1">
                            <?php echo get_theme_mod( 'hero_stat_1_value', '48h' ); ?></div>
                        <div class="text-sm text-[#a2b7d6]">
                            <?php echo get_theme_mod( 'hero_stat_1_label', 'Déblocage moyen' ); ?></div>
                    </div>
                    <div class="stats-card rounded-3xl border border-white/15 p-4 shadow-sm bg-white/10 backdrop-blur"
                        data-aos="fade-up" data-aos-delay="600" data-aos-duration="1200">
                        <div class="text-2xl font-bold text-white mb-1">
                            <?php echo get_theme_mod( 'hero_stat_2_value', '96%' ); ?></div>
                        <div class="text-sm text-[#a2b7d6]">
                            <?php echo get_theme_mod( 'hero_stat_2_label', 'Dossiers sans litiges' ); ?></div>
                    </div>
                    <div class="stats-card rounded-3xl border border-white/15 p-4 shadow-sm bg-white/10 backdrop-blur"
                        data-aos="fade-up" data-aos-delay="700" data-aos-duration="1200">
                        <div class="text-2xl font-bold text-white mb-1">
                            <?php echo get_theme_mod( 'hero_stat_3_value', '#1' ); ?></div>
                        <div class="text-sm text-[#a2b7d6]">
                            <?php echo get_theme_mod( 'hero_stat_3_label', 'Support WhatsApp pro' ); ?></div>
                    </div>
                </div>
            </div>

            <!-- Right Column - Service Cards -->
            <div
                class="service-container relative rounded-3xl border border-white/15 p-6 shadow-sm bg-white/10 backdrop-blur">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 service-grid">
                    <!-- Service Card 1 -->
                    <div class="service-card bg-gray-100 p-5 rounded-lg shadow-md" data-aos="fade-up"
                        data-aos-delay="800" data-aos-duration="1200">
                        <div class="flex items-center space-x-3 mb-2">
                            <div class="service-icon">
                                <i
                                    class="<?php echo get_theme_mod( 'service_card_1_icon', 'fa-solid fa-car-side' ); ?> text-[#394a80]"></i>
                            </div>
                            <div>
                                <h3 class="font-medium text-lg text-[#484b54]">
                                    <?php echo get_theme_mod( 'service_card_1_title', 'Fret maritime' ); ?></h3>
                                <p class="text-sm text-[#3e526e]">
                                    <?php echo get_theme_mod( 'service_card_1_description', 'FCL • LCL • Ro-Ro' ); ?>
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Service Card 2 -->
                    <div class="service-card bg-gray-100 p-5 rounded-lg shadow-md" data-aos="fade-up"
                        data-aos-delay="900" data-aos-duration="1200">
                        <div class="flex items-center space-x-3 mb-2">
                            <div class="service-icon">
                                <i
                                    class="<?php echo get_theme_mod( 'service_card_2_icon', 'fa-solid fa-plane' ); ?> text-[#394a80]"></i>
                            </div>
                            <div>
                                <h3 class="font-medium text-lg text-[#484b54]">
                                    <?php echo get_theme_mod( 'service_card_2_title', 'Fret aérien' ); ?></h3>
                                <p class="text-sm text-[#3e526e]">
                                    <?php echo get_theme_mod( 'service_card_2_description', 'Express & cargo' ); ?></p>
                            </div>
                        </div>
                    </div>

                    <!-- Service Card 3 -->
                    <div class="service-card bg-gray-100 p-5 rounded-lg shadow-md" data-aos="fade-up"
                        data-aos-delay="1000" data-aos-duration="1200">
                        <div class="flex items-center space-x-3 mb-2">
                            <div class="service-icon">
                                <i
                                    class="<?php echo get_theme_mod( 'service_card_3_icon', 'fa-solid fa-car-side' ); ?> text-[#394a80]"></i>
                            </div>
                            <div>
                                <h3 class="font-medium text-lg text-[#484b54]">
                                    <?php echo get_theme_mod( 'service_card_3_title', 'Transit routier' ); ?></h3>
                                <p class="text-sm text-[#3e526e]">
                                    <?php echo get_theme_mod( 'service_card_3_description', 'Pré/post-acheminement' ); ?>
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Service Card 4 -->
                    <div class="service-card bg-gray-100 p-5 rounded-lg shadow-md md:col-span-3" data-aos="fade-up"
                        data-aos-delay="1100" data-aos-duration="1200">
                        <div class="flex items-center space-x-3 mb-2">
                            <div class="service-icon">
                                <i
                                    class="<?php echo get_theme_mod( 'service_card_4_icon', 'fa-solid fa-check-circle' ); ?> text-[#394a80]"></i>
                            </div>
                            <div>
                                <h3 class="font-medium text-lg text-[#484b54]">
                                    <?php echo get_theme_mod( 'service_card_4_title', 'Dédouanement & conformité' ); ?>
                                </h3>
                                <p class="text-sm text-[#3e526e]">
                                    <?php echo get_theme_mod( 'service_card_4_description', 'PortNet/BADR, HS 10 chiffres, DFD, ATPA, COC, ONSSA/ANRT' ); ?>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>


<!-- Services Section -->
<section id="services" class="services-section py-20 bg-gray-50">
    <div class="container mx-auto max-w-[1221px] px-4">
        <!-- Section Header -->
        <div class="text-start mb-16">
            <h2 class="text-4xl font-bold text-[#384050] mb-4" data-aos="fade-up" data-aos-duration="1000"
                data-aos-delay="200">
                <?php echo get_theme_mod( 'services_title', 'Nos services' ); ?>
            </h2>
            <p class="text-lg text-gray-600" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">
                <?php echo get_theme_mod( 'services_description', 'Opérations complètes et modulaires selon votre flux international.' ); ?>
            </p>
        </div>

        <!-- Services Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Loop through Service Cards 1 to 6 -->
            <?php for ( $i = 1; $i <= 6; $i++ ): ?>
            <div class="service-card bg-white rounded-xl p-6 shadow-lg hover:shadow-xl transition-shadow duration-300 flex flex-col"
                data-aos="fade-up" data-aos-duration="1000" data-aos-delay="<?php echo $i * 100; ?>">
                <div class="flex items-start mb-4">
                    <div class="w-12 h-12 bg-gray-100 rounded-lg flex items-center justify-center mr-4 flex-shrink-0">
                        <i
                            class="<?php echo get_theme_mod( "service_cards_{$i}_icon", 'fa-solid fa-clipboard-list' ); ?> text-gray-700"></i>
                    </div>
                    <div>
                        <h3 class="text-xl font-bold text-gray-900">
                            <?php echo get_theme_mod( "service_cards_{$i}_title", 'Service Title' ); ?></h3>
                        <p class="text-gray-600 leading-relaxed">
                            <?php echo get_theme_mod( "service_cards_{$i}_description", 'Service Description' ); ?>
                        </p>
                    </div>
                </div>
                <a href="<?php echo get_theme_mod( "service_cards_{$i}_url", '#' ); ?>"
                    class="w-full text-center bg-gray-100 text-gray-800 py-3 px-4 rounded-lg font-semibold hover:bg-gray-200 transition-colors duration-200 mt-auto">
                    <?php echo get_theme_mod( "service_cards_{$i}_btn_text", 'En savoir plus' ); ?>
                </a>
            </div>
            <?php endfor; ?>
        </div>
    </div>
</section>



<!-- National Coverage & Testimonials Section -->
<section id="coverage" class="coverage-testimonials-section py-20 bg-white">
    <div class="container mx-auto max-w-[1221px] px-4">


        <!-- National Coverage Section -->
        <div class="mb-20">
            <div class="text-start mb-12">
                <h2 class="text-4xl font-bold text-gray-900 mb-4" data-aos="fade-up" data-aos-duration="1000"
                    data-aos-delay="200">
                    <?php echo get_theme_mod( 'coverage_title', 'Couverture Nationale' ); ?>
                </h2>
                <p class="text-lg text-gray-600" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">
                    <?php echo get_theme_mod( 'coverage_description', 'Des équipes locales au plus près de vos opérations portuaires et aéroportuaires.' ); ?>
                </p>
            </div>

            <!-- Location Cards Grid -->
            <div class="grid sm:grid-cols-1 lg:grid-cols-5 gap-4">
                <!-- Loop through Location Cards 1 to 5 -->
                <?php for ( $i = 1; $i <= 5; $i++ ): ?>
                <div class="location-card bg-white rounded-lg p-4 sm:p-12 shadow-md hover:shadow-xl transition-shadow duration-300 border border-gray-200 w-full"
                    data-aos="fade-up" data-aos-duration="1000" data-aos-delay="<?php echo $i * 100; ?>">
                    <div class="flex items-start mb-3">
                        <div class="w-10 h-10 rounded flex items-center justify-center mr-3 mt-1">
                            <i
                                class="<?php echo get_theme_mod( "location_{$i}_icon", 'fa-solid fa-location-dot' ); ?> text-[#0c283b]"></i>
                        </div>
                        <div>
                            <h3 class="text-base font-bold text-gray-800">
                                <?php echo get_theme_mod( "location_{$i}_title", 'Location Title' ); ?>
                            </h3>
                            <p class="text-sm text-gray-600">
                                <?php echo get_theme_mod( "location_{$i}_description", 'Location Description' ); ?>
                            </p>
                            <div class="mb-3">
                                <a href="<?php echo get_theme_mod( "location_{$i}_url", '#' ); ?>"
                                    class="text-[#17476a] hover:text-blue-800 text-sm font-medium flex items-center pt-2">
                                    <?php echo get_theme_mod( "location_{$i}_discover_button_text", 'Découvrir' ); ?>
                                    <svg class="w-3 h-3 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M9 5l7 7-7 7"></path>
                                    </svg>
                                </a>
                            </div>
                            <p class="text-sm text-gray-500">
                                <?php echo get_theme_mod( "location_{$i}_phone", '+212 675 828 200' ); ?>
                            </p>
                        </div>
                    </div>
                </div>
                <?php endfor; ?>
            </div>
        </div>



        <!-- Testimonials Section -->
        <div id="testimonials">
            <div class="text-start mb-12">
                <h2 class="text-4xl font-bold text-gray-900 mb-4" data-aos="fade-up" data-aos-duration="1000"
                    data-aos-delay="200">
                    <?php echo get_theme_mod( 'testimonials_title', 'Ce que nos clients disent' ); ?>
                </h2>
            </div>

            <!-- Testimonial Cards Grid -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Loop through Testimonial Cards 1 to 3 -->
                <?php for ( $i = 1; $i <= 3; $i++ ): ?>
                <div class="testimonial-card bg-white rounded-xl p-6 shadow-lg hover:shadow-xl transition-shadow duration-300 border border-gray-100"
                    data-aos="fade-up" data-aos-duration="1000" data-aos-delay="<?php echo $i * 100; ?>">
                    <div class="flex mb-4 gap-2 text-yellow-500">
                        <!-- Generate Rating stars dynamically -->
                        <?php 
                        $rating = get_theme_mod( "testimonial_{$i}_rating", 5 );
                        for ( $j = 1; $j <= $rating; $j++ ) {
                            echo '<i class="fa-solid fa-circle-check"></i>';
                        }
                    ?>
                    </div>
                    <blockquote class="text-gray-700 mb-4 leading-relaxed">
                        <?php echo get_theme_mod( "testimonial_{$i}_text", 'Déblocage rapide et accompagnement clair. On a gagné du temps et évité des surcoûts.' ); ?>
                    </blockquote>
                    <p class="text-sm text-gray-500">
                        <?php echo get_theme_mod( "testimonial_{$i}_name", 'Directeur logistique - Agadir' ); ?>
                    </p>
                </div>
                <?php endfor; ?>
            </div>
        </div>

    </div>
</section>

<?php get_footer(); ?>