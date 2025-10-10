<?php
/**
 * Template Name: Contact Page
 */

get_header(); ?>

<!-- Hero Section -->

<section class="bg-gradient-to-r from-[#0F2033] to-[#1A2B3C] text-white py-20 px-4 text-center relative overflow-hidden"
    style="background-image: url('https://customsclearance.ma/wp-content/uploads/2015/11/header_bg_5.jpg');  background-position: center; background-repeat: no-repeat; background-size: cover; height: 300px;">
    <div class="absolute inset-0 bg-black opacity-50"></div>
    <div class="container mx-auto max-w-[1221px] px-4 relative z-10">
        <div class="text-center">
            <h1 class="text-4xl lg:text-5xl font-bold text-white leading-tight">
                 <?php echo isset($options['about_us_hero_title']) ? esc_html($options['about_us_hero_title']) : 'Contactez-Nous'; ?>
                 
            </h1>
            <div class="text-lg text-white mt-4">
                <a href="<?php echo home_url(); ?>" class="hover:underline">Accueil</a> &raquo; <span>Contact</span>
            </div>
        </div>
    </div>
</section>
<!-- Main Content -->
<main class="py-20 px-4 bg-gray-50" id="main-content">
    <div class="container mx-auto max-w-[1221px] px-4">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <!-- Left Section -->
            <div class="text-gray-800">
                <h2 class="text-3xl font-bold text-[#384050] mb-4">Parlons de votre dossier</h2>
                <p class="text-lg text-gray-600 mb-8">Devis détaillé en 24h. Upload de proforma/facture et liste de colisage.</p>

                <div class="space-y-4">
                    <a href="/quote" class="w-full text-center bg-[#17476a] text-white py-3 px-4 rounded-lg font-semibold hover:bg-[#0c283b] transition-colors duration-200 inline-block">Obtenir un devis</a>
                    <button onclick="openWhatsApp()" class="w-full bg-white border-2 border-gray-300 text-gray-800 px-6 py-4 rounded-lg text-lg font-medium hover:bg-gray-100 transition-transform flex items-center justify-center gap-2">
                        <i class="fab fa-whatsapp text-green-500 text-xl"></i> WhatsApp Pro
                    </button>
                </div>
            </div>

            <!-- Right Section - Form -->
            <div class="bg-white p-8 rounded-xl shadow-lg">
                <div class="newform">
                    <?php echo do_shortcode( '[contact-form-7 id="cc564fa" title="Contact form page"]');?>
                </div>               
            </div>
    </div>
    </div>
</main>

<?php get_footer(); ?>