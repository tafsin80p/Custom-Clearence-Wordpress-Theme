<?php
/**
 * Template Name: Service Archive
 * The template for displaying the services archive page.
 */

get_header();
?>

<?php
// Fetch the options from the theme options page
$options = get_option('custom_clearance_theme_options');

// Hero Section dynamic values
$hero_image = isset($options['services_hero_image']) ? $options['services_hero_image'] : 'https://customsclearance.ma/wp-content/uploads/2015/11/header_bg_6.jpg';
$hero_title = isset($options['services_hero_title']) ? $options['services_hero_title'] : 'Nos Services';
$breadcrumb_home = isset($options['services_breadcrumb_home']) ? $options['services_breadcrumb_home'] : 'Accueil';
$breadcrumb_current = isset($options['services_breadcrumb_current']) ? $options['services_breadcrumb_current'] : 'Services';
$hero_subtitle = isset($options['services_hero_subtitle']) ? $options['services_hero_subtitle'] : 'Découvrez notre gamme complète de services de dédouanement et de transit. Des solutions personnalisées pour tous vos besoins d\'import/export.';

// Stats dynamic fields (with check to prevent undefined index warnings)
$service_count = isset($options['services_service_count']) ? $options['services_service_count'] : '15+';
$response_time = isset($options['services_response_time']) ? $options['services_response_time'] : '24h';
$satisfaction = isset($options['services_satisfaction']) ? $options['services_satisfaction'] : '100%';

// Icon URLs (example for dynamic icons)
$home_icon = isset($options['breadcrumb_home_icon']) ? $options['breadcrumb_home_icon'] : 'https://example.com/icons/home-icon.svg';
$right_arrow_icon = isset($options['breadcrumb_right_arrow_icon']) ? $options['breadcrumb_right_arrow_icon'] : 'https://example.com/icons/arrow-right.svg';

// CTA Section dynamic values
$cta_small_title_icon = isset($options['services_cta_small_title_icon']) ? $options['services_cta_small_title_icon'] : 'fas fa-star';
$cta_small_title = isset($options['services_cta_small_title']) ? $options['services_cta_small_title'] : 'Consultation gratuite';
$cta_main_title = isset($options['services_cta_main_title']) ? $options['services_cta_main_title'] : 'Prêt à simplifier votre dédouanement ?';
$cta_subtitle = isset($options['services_cta_subtitle']) ? $options['services_cta_subtitle'] : 'Contactez-nous dès aujourd\'hui pour une consultation gratuite et découvrez comment nous pouvons vous aider à optimiser vos opérations douanières avec nos solutions expertes.';
$cta_contact_button_text = isset($options['services_cta_contact_button_text']) ? $options['services_cta_contact_button_text'] : 'Contactez-nous';
$cta_contact_button_icon = isset($options['services_cta_contact_button_icon']) ? $options['services_cta_contact_button_icon'] : 'fas fa-phone';
$cta_quote_button_text = isset($options['services_cta_quote_button_text']) ? $options['services_cta_quote_button_text'] : 'Demander un devis';
$cta_quote_button_icon = isset($options['services_cta_quote_button_icon']) ? $options['services_cta_quote_button_icon'] : 'fas fa-calculator';

// Trust Indicators dynamic values
$trust_indicator_1_icon = isset($options['services_trust_indicator_1_icon']) ? $options['services_trust_indicator_1_icon'] : 'fas fa-clock';
$trust_indicator_1_title = isset($options['services_trust_indicator_1_title']) ? $options['services_trust_indicator_1_title'] : 'Réponse 24h';
$trust_indicator_1_text = isset($options['services_trust_indicator_1_text']) ? $options['services_trust_indicator_1_text'] : 'Réponse garantie sous 24h';
$trust_indicator_2_icon = isset($options['services_trust_indicator_2_icon']) ? $options['services_trust_indicator_2_icon'] : 'fas fa-shield-alt';
$trust_indicator_2_title = isset($options['services_trust_indicator_2_title']) ? $options['services_trust_indicator_2_title'] : '100% Sécurisé';
$trust_indicator_2_text = isset($options['services_trust_indicator_2_text']) ? $options['services_trust_indicator_2_text'] : 'Protection totale de vos données';
$trust_indicator_3_icon = isset($options['services_trust_indicator_3_icon']) ? $options['services_trust_indicator_3_icon'] : 'fas fa-users';
$trust_indicator_3_title = isset($options['services_trust_indicator_3_title']) ? $options['services_trust_indicator_3_title'] : 'Expert dédié';
$trust_indicator_3_text = isset($options['services_trust_indicator_3_text']) ? $options['services_trust_indicator_3_text'] : 'Accompagnement personnalisé';
?>

<!-- Enhanced Hero Section -->
<section class="relative bg-gradient-to-br from-[#0F2033] via-[#1A2B3C] to-[#17476a] text-white py-24 px-4 overflow-hidden">
    <!-- Background Pattern -->
    <div class="absolute inset-0 opacity-10">
        <div class="absolute inset-0" style="background-image: url('<?php echo esc_url($hero_image); ?>'); background-position: center; background-repeat: no-repeat; background-size: cover;"></div>
        <div class="absolute inset-0 bg-gradient-to-br from-[#0F2033] to-[#1A2B3C] opacity-70"></div>
    </div>
    
    <!-- Floating Elements -->
    <div class="absolute top-10 left-10 w-20 h-20 bg-white/10 rounded-full blur-xl"></div>
    <div class="absolute bottom-10 right-10 w-32 h-32 bg-[#D9A428]/20 rounded-full blur-2xl"></div>
    <div class="absolute top-1/2 left-1/4 w-16 h-16 bg-white/5 rounded-full blur-lg"></div>
    
    <div class="container mx-auto max-w-6xl px-4 relative z-10">
        <div class="text-center">
            <!-- Breadcrumb -->
            <nav class="flex justify-center mb-8" aria-label="Breadcrumb">
                <ol class="inline-flex items-center space-x-1 md:space-x-3">
                    <li class="inline-flex items-center">
                        <a href="<?php echo home_url(); ?>" class="text-white/80 hover:text-white transition-colors duration-300 inline-flex items-center">
                            <i class="fas fa-home w-4 h-4 mr-2"></i>
                            <?php echo esc_html($breadcrumb_home); ?>
                        </a>
                    </li>
                    <li>
                        <div class="flex items-center">
                            <i class="fas fa-chevron-right text-white/60 w-4 h-4 mx-2"></i>
                            <span class="text-white font-medium"><?php echo esc_html($breadcrumb_current); ?></span>
                        </div>
                    </li>
                </ol>
            </nav>
            
            <!-- Main Title -->
            <h1 class="text-4xl lg:text-5xl font-bold text-white leading-tight mb-6" data-aos="fade-up" data-aos-duration="1000">
                <span class="block"><?php echo esc_html($hero_title); ?></span>
            </h1>
            
            <!-- Subtitle -->
            <p class="text-xl lg:text-2xl text-white/90 max-w-4xl mx-auto leading-relaxed mb-8" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
                <?php echo esc_html($hero_subtitle); ?>
            </p>
            
            <!-- Stats -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 max-w-4xl mx-auto" data-aos="fade-up" data-aos-delay="400" data-aos-duration="1000">
                <div class="bg-white/10 backdrop-blur-sm rounded-xl p-6 border border-white/20">
                    <div class="text-3xl font-bold text-[#D9A428] mb-2"><?php echo esc_html($service_count); ?></div>
                    <div class="text-white/80">Services disponibles</div>
                </div>
                <div class="bg-white/10 backdrop-blur-sm rounded-xl p-6 border border-white/20">
                    <div class="text-3xl font-bold text-[#D9A428] mb-2"><?php echo esc_html($response_time); ?></div>
                    <div class="text-white/80">Temps de réponse</div>
                </div>
                <div class="bg-white/10 backdrop-blur-sm rounded-xl p-6 border border-white/20">
                    <div class="text-3xl font-bold text-[#D9A428] mb-2"><?php echo esc_html($satisfaction); ?></div>
                    <div class="text-white/80">Satisfaction client</div>
                </div>
            </div>
        </div>
    </div>
</section>

<main class="py-20 px-4 bg-gradient-to-br from-gray-50 to-white" id="main-content">
    <div class="container mx-auto max-w-[1221px] px-4">

        <!-- Services Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mb-16" id="services-grid">
            <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?>
                    <article class="group bg-white rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-500 overflow-hidden border border-gray-100 hover:border-[#17476a]/20 transform hover:-translate-y-2" data-aos="fade-up" data-aos-duration="1000">
                        <!-- Image Container -->
                        <div class="relative overflow-hidden">
                            <?php if (has_post_thumbnail()) : ?>
                                <a href="<?php the_permalink(); ?>">
                                    <?php the_post_thumbnail('large', array(
                                        'class' => 'w-full h-56 object-cover group-hover:scale-110 transition-transform duration-700'
                                    )); ?>
                                </a>
                            <?php else : ?>
                                <!-- Enhanced Fallback -->
                                <div class="w-full h-56 bg-gradient-to-br from-[#17476a] via-[#1A2B3C] to-[#0F2033] flex items-center justify-center relative overflow-hidden">
                                    <div class="absolute inset-0 bg-gradient-to-br from-[#D9A428]/20 to-transparent"></div>
                                    <i class="fas fa-cogs text-white text-5xl relative z-10 group-hover:rotate-180 transition-transform duration-700"></i>
                                    <div class="absolute inset-0 bg-[url('data:image/svg+xml,%3Csvg width="60" height="60" viewBox="0 0 60 60" xmlns="http://www.w3.org/2000/svg"%3E%3Cg fill="none" fill-rule="evenodd"%3E%3Cg fill="%23ffffff" fill-opacity="0.05"%3E%3Ccircle cx="30" cy="30" r="4"/%3E%3C/g%3E%3C/g%3E%3C/svg%3E')] opacity-20"></div>
                                </div>
                            <?php endif; ?>
                            
                            <!-- Overlay on hover -->
                            <div class="absolute inset-0 bg-[#17476a]/80 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center">
                                <a href="<?php the_permalink(); ?>" class="bg-white text-[#17476a] px-6 py-3 rounded-full font-semibold hover:bg-[#D9A428] hover:text-white transition-colors duration-300 transform scale-0 group-hover:scale-100 transition-transform duration-300">
                                    Voir les détails
                                </a>
                            </div>
                        </div>
                        
                        <!-- Content -->
                        <div class="p-8">
                            <!-- Service Icon -->
                            <div class="w-12 h-12 bg-gradient-to-br from-[#17476a] to-[#1A2B3C] rounded-xl flex items-center justify-center mb-4 group-hover:from-[#D9A428] group-hover:to-[#C7901A] transition-all duration-300">
                                <i class="fas fa-cogs text-white text-lg"></i>
                            </div>
                            
                            <!-- Title -->
                            <h2 class="text-2xl font-bold text-gray-900 mb-4 group-hover:text-[#17476a] transition-colors duration-300">
                                <a href="<?php the_permalink(); ?>">
                                    <?php the_title(); ?>
                                </a>
                            </h2>
                            
                            <!-- Description -->
                            <?php if (has_excerpt()) : ?>
                                <div class="text-gray-600 mb-6 leading-relaxed line-clamp-3">
                                    <?php the_excerpt(); ?>
                                </div>
                            <?php elseif (get_the_content()) : ?>
                                <div class="text-gray-600 mb-6 leading-relaxed line-clamp-3">
                                    <?php echo wp_trim_words(get_the_content(), 20, '...'); ?>
                                </div>
                            <?php endif; ?>
                            
                            <!-- Features -->
                            <div class="flex flex-wrap gap-2 mb-6">
                                <span class="bg-gray-100 text-gray-700 px-3 py-1 rounded-full text-sm">Rapide</span>
                                <span class="bg-gray-100 text-gray-700 px-3 py-1 rounded-full text-sm">Sécurisé</span>
                                <span class="bg-gray-100 text-gray-700 px-3 py-1 rounded-full text-sm">Expert</span>
                            </div>
                            
                            <!-- CTA Button -->
                            <a href="<?php the_permalink(); ?>" class="inline-flex items-center justify-center w-full bg-gradient-to-r from-[#17476a] to-[#1A2B3C] text-white font-semibold py-4 px-6 rounded-xl hover:from-[#D9A428] hover:to-[#C7901A] transition-all duration-300 transform group-hover:scale-105">
                                <span>En savoir plus</span>
                                <i class="fas fa-arrow-right ml-2 group-hover:translate-x-1 transition-transform duration-300"></i>
                            </a>
                        </div>
                    </article>
                <?php endwhile; ?>
            <?php else : ?>
                <div class="col-span-full text-center py-12">
                    <div class="max-w-md mx-auto">
                        <i class="fas fa-search text-gray-400 text-6xl mb-4"></i>
                        <h3 class="text-xl font-semibold text-gray-900 mb-2">Aucun service trouvé</h3>
                        <p class="text-gray-600">Il n'y a actuellement aucun service disponible. Veuillez revenir plus tard.</p>
                    </div>
                </div>
            <?php endif; ?>
        </div>

        <!-- Pagination -->
        <?php if (function_exists('wp_pagenavi')) : ?>
            <?php wp_pagenavi(); ?>
        <?php else : ?>
            <div class="flex justify-center">
                <?php
                the_posts_pagination(array(
                    'mid_size' => 2,
                    'prev_text' => __('← Précédent', 'customsclearance'),
                    'next_text' => __('Suivant →', 'customsclearance'),
                    'class' => 'pagination'
                ));
                ?>
            </div>
        <?php endif; ?>

        <!-- Enhanced CTA Section -->
        <div class="mt-20 relative">
            <div class="bg-gradient-to-br from-[#0F2033] via-[#1A2B3C] to-[#17476a] rounded-3xl p-12 lg:p-16 text-center text-white relative overflow-hidden" data-aos="fade-up" data-aos-duration="1000">
                <!-- Background Pattern -->
                <div class="absolute inset-0 opacity-10">
                    <div class="absolute inset-0 bg-[url('data:image/svg+xml,%3Csvg width="60" height="60" viewBox="0 0 60 60" xmlns="http://www.w3.org/2000/svg"%3E%3Cg fill="none" fill-rule="evenodd"%3E%3Cg fill="%23ffffff" fill-opacity="0.1"%3E%3Ccircle cx="30" cy="30" r="4"/%3E%3C/g%3E%3C/g%3E%3C/svg%3E')]"></div>
                </div>
                
                <!-- Floating Elements -->
                <div class="absolute top-6 right-6 w-24 h-24 bg-[#D9A428]/20 rounded-full blur-xl"></div>
                <div class="absolute bottom-6 left-6 w-32 h-32 bg-white/10 rounded-full blur-2xl"></div>
                
                <div class="relative z-10">
                    <div class="inline-flex items-center bg-[#D9A428] text-white px-6 py-3 rounded-full text-sm font-semibold mb-6">
                        <i class="<?php echo esc_attr($cta_small_title_icon); ?> mr-2"></i>
                        <?php echo esc_html($cta_small_title); ?>
                    </div>
                    
                    <h2 class="text-2xl lg:text-5xl font-bold mb-6"><?php echo esc_html($cta_main_title); ?></h2>
                    <p class="text-xl text-white/90 max-w-4xl mx-auto mb-10 leading-relaxed">
                        <?php echo esc_html($cta_subtitle); ?>
                    </p>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 max-w-xl mx-auto gap-6 justify-center items-center">
                        <a href="<?php echo esc_url(get_permalink(get_page_by_path('contact'))); ?>" class="group bg-[#D9A428] text-white font-bold py-4 px-10 rounded-xl hover:bg-[#C7901A] transition-all duration-300 transform hover:scale-105 flex items-center">
                            <i class="<?php echo esc_attr($cta_contact_button_icon); ?> mr-3 group-hover:rotate-12 transition-transform duration-300"></i>
                            <span><?php echo esc_html($cta_contact_button_text); ?></span>
                            <i class="fas fa-arrow-right ml-3 group-hover:translate-x-1 transition-transform duration-300"></i>
                        </a>
                        <a href="<?php echo esc_url(get_permalink(get_page_by_path('quote'))); ?>" class="group bg-white text-[#17476a] font-bold py-4 px-6 md:px-10 rounded-xl hover:bg-gray-100 transition-all duration-300 transform hover:scale-105 flex items-center">
                            <i class="<?php echo esc_attr($cta_quote_button_icon); ?> mr-3 group-hover:scale-110 transition-transform duration-300"></i>
                            <span><?php echo esc_html($cta_quote_button_text); ?></span>
                            <i class="fas fa-arrow-right ml-3 group-hover:translate-x-1 transition-transform duration-300"></i>
                        </a>
                    </div>
                    
                    <!-- Trust Indicators -->
                    <div class="mt-12 grid grid-cols-1 md:grid-cols-3 gap-8 max-w-4xl mx-auto">
                        <div class="text-center">
                            <div class="w-16 h-16 bg-white/20 rounded-full flex items-center justify-center mx-auto mb-4">
                                <i class="<?php echo esc_attr($trust_indicator_1_icon); ?> text-[#D9A428] text-2xl"></i>
                            </div>
                            <h3 class="font-semibold mb-2"><?php echo esc_html($trust_indicator_1_title); ?></h3>
                            <p class="text-white/80 text-sm"><?php echo esc_html($trust_indicator_1_text); ?></p>
                        </div>
                        <div class="text-center">
                            <div class="w-16 h-16 bg-white/20 rounded-full flex items-center justify-center mx-auto mb-4">
                                <i class="<?php echo esc_attr($trust_indicator_2_icon); ?> text-[#D9A428] text-2xl"></i>
                            </div>
                            <h3 class="font-semibold mb-2"><?php echo esc_html($trust_indicator_2_title); ?></h3>
                            <p class="text-white/80 text-sm"><?php echo esc_html($trust_indicator_2_text); ?></p>
                        </div>
                        <div class="text-center">
                            <div class="w-16 h-16 bg-white/20 rounded-full flex items-center justify-center mx-auto mb-4">
                                <i class="<?php echo esc_attr($trust_indicator_3_icon); ?> text-[#D9A428] text-2xl"></i>
                            </div>
                            <h3 class="font-semibold mb-2"><?php echo esc_html($trust_indicator_3_title); ?></h3>
                            <p class="text-white/80 text-sm"><?php echo esc_html($trust_indicator_3_text); ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</main>

<?php get_footer(); ?>
