<?php
/**
 * Template Name: Service Archive
 * The template for displaying the services archive page.
 */

get_header();
?>

<!-- Enhanced Hero Section -->
<section class="relative bg-gradient-to-br from-[#0F2033] via-[#1A2B3C] to-[#17476a] text-white py-24 px-4 overflow-hidden">
    <!-- Background Pattern -->
    <div class="absolute inset-0 opacity-10">
        <div class="absolute inset-0" style="background-image: url('https://customsclearance.ma/wp-content/uploads/2015/11/header_bg_6.jpg'); background-position: center; background-repeat: no-repeat; background-size: cover;"></div>
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
                            Accueil
                        </a>
                    </li>
                    <li>
                        <div class="flex items-center">
                            <i class="fas fa-chevron-right text-white/60 w-4 h-4 mx-2"></i>
                            <span class="text-white font-medium">Services</span>
                        </div>
                    </li>
                </ol>
            </nav>
            
            <!-- Main Title -->
            <h1 class="text-5xl lg:text-7xl font-bold text-white leading-tight mb-6" data-aos="fade-up" data-aos-duration="1000">
                <span class="block">Nos</span>
                <span class="block text-[#D9A428]">Services</span>
            </h1>
            
            <!-- Subtitle -->
            <p class="text-xl lg:text-2xl text-white/90 max-w-4xl mx-auto leading-relaxed mb-8" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
                Découvrez notre gamme complète de services de dédouanement et de transit. 
                Des solutions personnalisées pour tous vos besoins d'import/export.
            </p>
            
            <!-- Stats -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 max-w-4xl mx-auto" data-aos="fade-up" data-aos-delay="400" data-aos-duration="1000">
                <div class="bg-white/10 backdrop-blur-sm rounded-xl p-6 border border-white/20">
                    <div class="text-3xl font-bold text-[#D9A428] mb-2">15+</div>
                    <div class="text-white/80">Services disponibles</div>
                </div>
                <div class="bg-white/10 backdrop-blur-sm rounded-xl p-6 border border-white/20">
                    <div class="text-3xl font-bold text-[#D9A428] mb-2">24h</div>
                    <div class="text-white/80">Temps de réponse</div>
                </div>
                <div class="bg-white/10 backdrop-blur-sm rounded-xl p-6 border border-white/20">
                    <div class="text-3xl font-bold text-[#D9A428] mb-2">100%</div>
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
                        <i class="fas fa-star mr-2"></i>
                        Consultation gratuite
                    </div>
                    
                    <h2 class="text-4xl lg:text-5xl font-bold mb-6">Prêt à simplifier votre dédouanement ?</h2>
                    <p class="text-xl text-white/90 max-w-4xl mx-auto mb-10 leading-relaxed">
                        Contactez-nous dès aujourd'hui pour une consultation gratuite et découvrez comment nous pouvons vous aider à optimiser vos opérations douanières avec nos solutions expertes.
                    </p>
                    
                    <div class="flex flex-col sm:flex-row gap-6 justify-center items-center">
                        <a href="<?php echo esc_url(get_permalink(get_page_by_path('contact'))); ?>" class="group bg-[#D9A428] text-white font-bold py-4 px-10 rounded-xl hover:bg-[#C7901A] transition-all duration-300 transform hover:scale-105 flex items-center">
                            <i class="fas fa-phone mr-3 group-hover:rotate-12 transition-transform duration-300"></i>
                            <span>Contactez-nous</span>
                            <i class="fas fa-arrow-right ml-3 group-hover:translate-x-1 transition-transform duration-300"></i>
                        </a>
                        <a href="<?php echo esc_url(get_permalink(get_page_by_path('quote'))); ?>" class="group bg-white text-[#17476a] font-bold py-4 px-10 rounded-xl hover:bg-gray-100 transition-all duration-300 transform hover:scale-105 flex items-center">
                            <i class="fas fa-calculator mr-3 group-hover:scale-110 transition-transform duration-300"></i>
                            <span>Demander un devis</span>
                            <i class="fas fa-arrow-right ml-3 group-hover:translate-x-1 transition-transform duration-300"></i>
                        </a>
                    </div>
                    
                    <!-- Trust Indicators -->
                    <div class="mt-12 grid grid-cols-1 md:grid-cols-3 gap-8 max-w-4xl mx-auto">
                        <div class="text-center">
                            <div class="w-16 h-16 bg-white/20 rounded-full flex items-center justify-center mx-auto mb-4">
                                <i class="fas fa-clock text-[#D9A428] text-2xl"></i>
                            </div>
                            <h3 class="font-semibold mb-2">Réponse 24h</h3>
                            <p class="text-white/80 text-sm">Réponse garantie sous 24h</p>
                        </div>
                        <div class="text-center">
                            <div class="w-16 h-16 bg-white/20 rounded-full flex items-center justify-center mx-auto mb-4">
                                <i class="fas fa-shield-alt text-[#D9A428] text-2xl"></i>
                            </div>
                            <h3 class="font-semibold mb-2">100% Sécurisé</h3>
                            <p class="text-white/80 text-sm">Protection totale de vos données</p>
                        </div>
                        <div class="text-center">
                            <div class="w-16 h-16 bg-white/20 rounded-full flex items-center justify-center mx-auto mb-4">
                                <i class="fas fa-users text-[#D9A428] text-2xl"></i>
                            </div>
                            <h3 class="font-semibold mb-2">Expert dédié</h3>
                            <p class="text-white/80 text-sm">Accompagnement personnalisé</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</main>

<?php get_footer(); ?>
