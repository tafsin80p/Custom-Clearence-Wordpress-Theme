<?php
/**
 * Template Name: Contact Page
 */

get_header(); ?>

<div class="container mx-auto py-20 px-4 max-w-[1221px]">

    <section id="contact-header" class="text-center mb-16">
        <h1 class="text-5xl font-bold text-gray-900 mb-4" data-aos="fade-up">
            Contact Us
        </h1>
        <p class="text-xl text-gray-600 max-w-3xl mx-auto" data-aos="fade-up" data-aos-delay="100">
            We are here to help. Reach out to us with any questions or to start your project.
        </p>
    </section>

    <section id="contact-content">
        <div class="grid md:grid-cols-2 gap-12">

            <!-- Contact Form -->
            <div class="bg-white p-8 rounded-lg shadow-lg" data-aos="fade-right" data-aos-delay="200">
                <h2 class="text-3xl font-bold text-gray-800 mb-6">Send us a Message</h2>
                <?php 
                // Replace this shortcode with your actual contact form shortcode
                echo do_shortcode( '[contact-form-7 id="12345" title="Contact form 1"]' ); 
                ?>
            </div>

            <!-- Contact Details -->
            <div data-aos="fade-left" data-aos-delay="300">
                <h2 class="text-3xl font-bold text-gray-800 mb-6">Contact Information</h2>
                <div class="space-y-6">
                    <div class="flex items-start space-x-4">
                        <i class="fa-solid fa-phone text-2xl text-gray-600 mt-1"></i>
                        <div>
                            <h3 class="text-xl font-semibold text-gray-700">Phone</h3>
                            <p class="text-gray-600"><?php echo get_theme_mod( 'footer_phone', '+212 675 828 200' ); ?></p>
                        </div>
                    </div>
                    <div class="flex items-start space-x-4">
                        <i class="fa-solid fa-envelope text-2xl text-gray-600 mt-1"></i>
                        <div>
                            <h3 class="text-xl font-semibold text-gray-700">Email</h3>
                            <p class="text-gray-600"><a href="mailto:<?php echo get_theme_mod( 'footer_email', 'contact@customsclearance.ma' ); ?>" class="hover:text-blue-600"><?php echo get_theme_mod( 'footer_email', 'contact@customsclearance.ma' ); ?></a></p>
                        </div>
                    </div>
                    <div class="flex items-start space-x-4">
                        <i class="fa-solid fa-map-marker-alt text-2xl text-gray-600 mt-1"></i>
                        <div>
                            <h3 class="text-xl font-semibold text-gray-700">Main Office</h3>
                            <p class="text-gray-600"><?php echo get_theme_mod( 'footer_location_1', 'Casablanca – Bd Mohammed V' ); ?></p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

</div>

<?php get_footer(); ?>
