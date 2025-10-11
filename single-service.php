<?php get_header(); ?>

<?php

if ( have_posts() ) :
    while ( have_posts() ) : the_post();
?>

    <div class="relative w-full h-64 sm:h-80 md:h-96 lg:h-[500px] overflow-hidden">
        <?php

        if ( has_post_thumbnail() ) {
            the_post_thumbnail( 'full', array(
                'alt'   => get_the_title(), 
                'class' => 'w-full h-full object-cover',
            ) );
        } else {
            echo '<img src="' . get_stylesheet_directory_uri() . '/assets/images/default-truck-sunset.svg" alt="Default Image" class="w-full h-full object-cover" />';
        }
        ?>
        <div class="absolute inset-0 bg-black/20"></div>
    </div>

    <div class="relative -mt-16 sm:-mt-20 md:-mt-24 lg:-mt-32 px-4 sm:px-6 lg:px-8 pb-12 md:pb-16 lg:pb-20">
      <div class="max-w-5xl mx-auto">
        <div class="bg-white shadow-xl p-6 sm:p-8 md:p-10 lg:p-12">
          <h1 class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-black text-black text-center mb-6 md:mb-8 leading-tight uppercase tracking-tight">
            <?php the_title(); ?>
          </h1>
          <p class="text-sm sm:text-base md:text-lg text-gray-700 leading-relaxed text-center max-w-4xl mx-auto">
            <?php
            the_content();
            ?>
          </p>
        </div>
      </div>
    </div>

<?php
    endwhile;
endif;
?>

<?php get_footer(); ?>
