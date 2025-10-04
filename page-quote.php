<?php
/**
 * Template Name: Quote Page
 */

get_header(); ?>

<div class="container mx-auto py-20 px-4 max-w-[1221px]">

    <section id="quote-header" class="text-center mb-16">
        <h1 class="text-5xl font-bold text-gray-900 mb-4" data-aos="fade-up">
            Request a Quote
        </h1>
        <p class="text-xl text-gray-600 max-w-3xl mx-auto" data-aos="fade-up" data-aos-delay="100">
            Fill out the form below to get a personalized quote for our services.
        </p>
    </section>

    <section id="quote-form">
        <div class="max-w-4xl mx-auto bg-white p-8 rounded-lg shadow-lg" data-aos="fade-up" data-aos-delay="200">
            <h2 class="text-3xl font-bold text-gray-800 mb-6">Quote Details</h2>
            <?php 
            // Replace this shortcode with your actual quote form shortcode
            echo do_shortcode( '[contact-form-7 id="54321" title="Quote Form"]' ); 
            ?>
        </div>
    </section>

</div>

<?php get_footer(); ?>
