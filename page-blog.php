<?php
/**
 * Template Name: Blog Index
 * Displays latest posts in a card grid
 */
get_header();
?>

<main class="py-16 bg-gray-50 text-black">
    <div class="container mx-auto max-w-[1221px] px-4">
        <header class="mb-8">
            <h1 class="text-4xl font-bold text-[#0F172A]">Ressources & Blog</h1>
            <p class="text-gray-600 mt-2">Guides pratiques sur l'import, l'export et la conformité au Maroc.</p>
        </header>

        <?php
        $paged = get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1;
        $blog_query = new WP_Query( array( 'post_type' => 'post', 'posts_per_page' => 9, 'paged' => $paged ) );
        ?>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <?php if ( $blog_query->have_posts() ) :
                $i = 0;
                while ( $blog_query->have_posts() ) : $blog_query->the_post();
                    $delay = ( $i % 3 ) * 100; // stagger delays 0/100/200
                    $i++; ?>

                    <article data-aos="fade-up" data-aos-delay="<?php echo esc_attr( $delay ); ?>" class="group bg-white rounded-2xl border border-gray-200 shadow-sm p-5 flex flex-col justify-between h-full transition-shadow duration-300 ease-in-out hover:shadow-lg">
                        <a href="<?php the_permalink(); ?>" class="block h-full focus:outline-none" aria-label="Read <?php echo esc_attr( get_the_title() ); ?>">
                            <div>
                                <?php if ( has_post_thumbnail() ) : ?>
                                    <div class="block mb-4 overflow-hidden rounded-lg">
                                        <?php the_post_thumbnail( 'medium', array( 'class' => 'w-full h-40 object-cover transform transition-transform duration-500 ease-in-out group-hover:scale-105 will-change-transform', 'loading' => 'lazy' ) ); ?>
                                    </div>
                                <?php else : ?>
                                    <div class="w-full h-40 bg-gray-100 rounded-lg mb-4 flex items-center justify-center text-gray-300">No image</div>
                                <?php endif; ?>

                                <h2 class="text-lg font-semibold text-[#0F172A] mb-2"><?php the_title(); ?></h2>
                                <p class="text-gray-500 text-md mb-4"><?php echo wp_trim_words( get_the_excerpt(), 18 ); ?></p>
                            </div>

                            <div>
                                <span class="inline-flex items-center justify-center bg-white hover:bg-[#0F2033] hover:text-white border border-gray-200 text-[#0F172A] px-12 py-2 rounded-full text-md shadow-sm transition-transform duration-300 ease-in-out">Lire</span>
                            </div>
                        </a>
                    </article>

                <?php endwhile;
                wp_reset_postdata();
            else : ?>
                <p>Aucun article trouvé.</p>
            <?php endif; ?>
        </div>

        <?php if ( $blog_query->max_num_pages > 1 ) : ?>
            <div class="mt-8 flex justify-center">
                <?php
                echo paginate_links( array(
                    'total'   => $blog_query->max_num_pages,
                    'current' => $paged,
                    'prev_text' => '&laquo; Préc',
                    'next_text' => 'Suiv &raquo;',
                    'type' => 'list',
                ) );
                ?>
            </div>
        <?php endif; ?>
    </div>
</main>

<?php get_footer(); ?>
