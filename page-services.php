<?php
/**
 * Template Name: Services
 * The template for displaying the services page.
 */

get_header();
?>

<!-- Hero Section -->
<section class="bg-gradient-to-r from-[#0F2033] to-[#1A2B3C] text-white py-20 px-4 text-center relative overflow-hidden"
    style="background-image: url('https://customsclearance.ma/wp-content/uploads/2015/11/header_bg_6.jpg');  background-position: center; background-repeat: no-repeat; background-size: cover; height: 300px;">
    <div class="absolute inset-0 bg-black opacity-50"></div>
    <div class="container mx-auto max-w-[1221px] px-4 relative z-10">
        <div class="text-center">
            <h1 class="text-4xl lg:text-5xl font-bold text-white leading-tight"><?php the_title(); ?></h1>
            <div class="text-lg text-white mt-4">
                <a href="<?php echo home_url(); ?>" class="hover:underline">Accueil</a> &raquo; <span>Services</span>
            </div>
        </div>
    </div>
</section>

<section class="px-6 py-12 bg-white">
  <div class="max-w-7xl mx-auto text-center">
    <!-- Main Title -->
    <h2 class="text-4xl font-semibold text-gray-800 mb-12">Quality and Performance at the Right Price</h2>

    <!-- Grid Layout for 3 Cards -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
      <!-- Card 1: Road Freight -->
      <div class="bg-white p-6 rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300">
        <img src="road-freight.jpg" alt="Road Freight" class="w-full h-48 object-cover rounded-t-lg mb-6">
        <h3 class="text-2xl font-semibold text-gray-900 mb-2">ROAD FREIGHT</h3>
        <p class="text-gray-600 mb-4">🚚 To meet your ever-evolving logistics needs, our transportation services are constantly adapting and advancing — smarter, faster, and more reliable than ever.</p>
        <a href="#" class="text-blue-500 font-medium hover:underline">read more →</a>
      </div>

      <!-- Card 2: Sea Freight -->
      <div class="bg-white p-6 rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300">
        <img src="sea-freight.jpg" alt="Sea Freight" class="w-full h-48 object-cover rounded-t-lg mb-6">
        <h3 class="text-2xl font-semibold text-gray-900 mb-2">SEA FREIGHT</h3>
        <p class="text-gray-600 mb-4">🚢 Efficient Sea Freight – Fast Handling, Less Risk</p>
        <a href="#" class="text-blue-500 font-medium hover:underline">read more →</a>
      </div>

      <!-- Card 3: Air Freight -->
      <div class="bg-white p-6 rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300">
        <img src="air-freight.jpg" alt="Air Freight" class="w-full h-48 object-cover rounded-t-lg mb-6">
        <h3 class="text-2xl font-semibold text-gray-900 mb-2">AIR FREIGHT</h3>
        <p class="text-gray-600 mb-4">✈️ Our AIRFAST services have been designed for customers who need their goods delivered urgently.</p>
        <a href="#" class="text-blue-500 font-medium hover:underline">read more →</a>
      </div>
    </div>
  </div>
</section>


<main class="py-20 px-4 bg-gray-50" id="main-content">
    <div class="container mx-auto max-w-[1221px] px-4">

        <!-- Page Content -->
        <div class="text-center mb-16">
            <?php
            if (have_posts()) :
                while (have_posts()) : the_post();
                    the_content();
                endwhile;
            endif;
            ?>
        </div>

        <!-- Services Section (Sub-Pages) -->
        <div class="text-center">
            <h2 class="text-3xl font-bold text-[#384050] mb-12">Découvrez nos services</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <?php
                $child_pages_query_args = array(
                    'post_type'      => 'page',
                    'post_parent'    => get_the_ID(),
                    'orderby'        => 'menu_order',
                    'order'          => 'ASC'
                );

                $child_pages = new WP_Query($child_pages_query_args);

                if ($child_pages->have_posts()) :
                    while ($child_pages->have_posts()) : $child_pages->the_post();
                ?>
                        <a href="<?php the_permalink(); ?>" class="block p-8 bg-white rounded-lg shadow-md hover:shadow-xl transition-shadow duration-300">
                            <h3 class="text-xl font-semibold text-gray-900 mb-2"><?php the_title(); ?></h3>
                            <?php if(has_excerpt()): ?>
                                <p class="text-gray-600"><?php the_excerpt(); ?></p>
                            <?php endif; ?>
                        </a>
                <?php
                    endwhile;
                    wp_reset_postdata();
                else :
                ?>
                    <p class="text-center col-span-full">Aucun service trouvé. Veuillez ajouter des sous-pages à la page "Services".</p>
                <?php
                endif;
                ?>
            </div>
        </div>

        <!-- CTA Section -->
        <div class="mt-20 text-center bg-white p-12 rounded-lg shadow-lg" data-aos="fade-up" data-aos-duration="1000">
            <h2 class="text-3xl font-bold text-[#384050] mb-4">Prêt à simplifier votre dédouanement ?</h2>
            <p class="text-lg text-gray-600 max-w-3xl mx-auto mb-8">
                Contactez-nous dès aujourd'hui pour une consultation gratuite et découvrez comment nous pouvons vous aider à optimiser vos opérations douanières.
            </p>
            <a href="<?php echo esc_url(get_permalink(get_page_by_path('contact'))); ?>" class="bg-[#D9A428] text-white font-bold py-3 px-8 rounded-lg hover:bg-[#C7901A] transition-colors duration-300">
                Contactez-nous
            </a>
        </div>

    </div>
</main>

<?php
get_footer();
?>
