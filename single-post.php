<?php get_header(); ?>


<?php
// Determine hero background: prefer post featured image, fall back to Customizer setting or default.
$hero_bg = '';
if ( have_posts() ) {
    // peek the post thumbnail without advancing the loop
    global $post;
    if ( has_post_thumbnail( $post ) ) {
        $hero_bg = get_the_post_thumbnail_url( $post, 'large' );
    }
}
if ( empty( $hero_bg ) ) {
    $hero_bg = get_theme_mod( 'hero_bg_image', 'https://customsclearance.ma/wp-content/uploads/revslider/slider_3.jpg' );
}
?>

<section class="bg-gradient-to-r from-[#0F2033] to-[#1A2B3C] text-white py-20 px-4 text-center align-middle relative overflow-hidden"
    style="background-image: url('<?php echo esc_url( $hero_bg ); ?>');  background-position: center; background-repeat: no-repeat; background-size: cover; height: 450px;">
    <div class="absolute inset-0 bg-black opacity-50" aria-hidden="true"></div>
    <div class="container mx-auto max-w-[1221px] px-4 relative z-10">
        <div class="text-center">
            <h2 class="text-4xl font-bold text-[#ffffff] mb-4" data-aos="fade-up" data-aos-duration="1000"
                data-aos-delay="200">
                <?php
                    /* Use the post title as the hero heading when on a single post, otherwise fall back to a section title */
                    if ( is_singular( 'post' ) ) {
                        echo esc_html( get_the_title() );
                    } else {
                        echo esc_html( get_theme_mod( 'cities_section_title', 'Réseau national' ) );
                    }
                ?>
            </h2>
            <nav class="text-sm" aria-label="Breadcrumb">
                <a href="<?php echo esc_url( home_url() ); ?>" class="hover:underline">Accueil</a>
                &nbsp;&raquo;&nbsp;
                <?php $blog_page = get_page_by_path( 'blog' ); ?>
                <?php if ( $blog_page ) : ?>
                    <a href="<?php echo esc_url( get_permalink( $blog_page ) ); ?>" class="hover:underline">Blog</a>
                    &nbsp;&raquo;&nbsp;
                <?php else : ?>
                    <span>Blog</span>
                    &nbsp;&raquo;&nbsp;
                <?php endif; ?>
                <span aria-current="page"><?php echo esc_html( get_the_title() ); ?></span>
            </nav>
        </div>
    </div>
</section>

<main id="main" class="py-16 bg-gray-100" role="main">
    <div class="container mx-auto max-w-[1221px] px-4">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">

            <!-- Left: Article (2/3) -->
            <div class="lg:col-span-2" data-aos="fade-up" data-aos-duration="900">
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

                    <?php
                    // Prepare featured image alt text
                    $thumb_id = get_post_thumbnail_id( get_the_ID() );
                    $thumb_alt = $thumb_id ? get_post_meta( $thumb_id, '_wp_attachment_image_alt', true ) : '';
                    if ( empty( $thumb_alt ) ) {
                        $thumb_alt = get_the_title();
                    }
                    ?>

                    <article <?php post_class( 'prose lg:prose-xl mx-auto bg-white rounded-xl p-6 shadow-sm' ); ?> itemscope itemtype="https://schema.org/Article">
                        <?php if ( has_post_thumbnail() ) : ?>
                            <div class="mb-6 overflow-hidden rounded-lg">
                                <?php echo wp_get_attachment_image( $thumb_id, 'large', false, array( 'class' => 'w-full h-64 object-cover', 'alt' => esc_attr( $thumb_alt ) ) ); ?>
                            </div>
                        <?php endif; ?>

                        <header class="entry-header mb-4">
                            <h1 itemprop="headline" class="text-3xl font-extrabold mb-2 text-gray-900"><?php echo esc_html( get_the_title() ); ?></h1>
                            <div class="text-sm text-gray-500 mb-4">
                                <time datetime="<?php echo esc_attr( get_the_date( 'c' ) ); ?>" itemprop="datePublished"><?php echo esc_html( get_the_date() ); ?></time>
                                &middot; <span itemprop="author"><?php echo esc_html( get_the_author_meta( 'display_name' ) ); ?></span>
                            </div>
                        </header>

                        <div class="post-content text-gray-700" itemprop="articleBody">
                            <?php the_content(); ?>
                        </div>

                        <footer class="mt-8 entry-footer text-[#17476a]">
                            <nav class="flex gap-4 text-sm" aria-label="Post navigation">
                                <div class="prev">
                                    <?php previous_post_link( '<span class="underline">&laquo; %link</span>' ); ?>
                                </div>
                                <div class="next">
                                    <?php next_post_link( '<span class="underline">%link &raquo;</span>' ); ?>
                                </div>
                            </nav>

                            <div class="mt-6">
                                <?php $blog_page = get_page_by_path( 'blog' ); ?>
                                <?php if ( $blog_page ) : ?>
                                    <a href="<?php echo esc_url( get_permalink( $blog_page ) ); ?>" class="text-sm underline">&laquo; Back to blog</a>
                                <?php endif; ?>
                            </div>
                        </footer>
                    </article>

                <?php endwhile; endif; ?>
            </div>

            <!-- Right: Sidebar (recent posts + subscribe) -->
            <aside class="lg:col-span-1 space-y-6" aria-label="Sidebar" data-aos="fade-left" data-aos-duration="900">
                <div class="bg-white text-[#17476a] rounded-xl p-6 border border-gray-100 shadow-sm">
                    <h4 class="text-lg font-semibold mb-4">Derniers articles</h4>
                    <?php
                        $recent = new WP_Query( array( 'post_type' => 'post', 'posts_per_page' => 3 ) );
                        if ( $recent->have_posts() ) :
                            while ( $recent->have_posts() ) : $recent->the_post(); ?>
                                <a href="<?php the_permalink(); ?>" class="flex items-center gap-3 py-3 border-b last:border-b-0 hover:bg-gray-50 transition-colors">
                                    <div class="w-14 h-14 bg-gray-100 rounded overflow-hidden">
                                        <?php if ( has_post_thumbnail() ) { the_post_thumbnail( 'thumbnail', array( 'class' => 'w-full h-full object-cover' ) ); } else { echo '<div class="w-full h-full bg-gray-200"></div>'; } ?>
                                    </div>
                                    <div class="flex-1">
                                        <div class="text-sm font-medium text-gray-900"><?php the_title(); ?></div>
                                        <div class="text-xs text-gray-500"><?php echo get_the_date(); ?></div>
                                    </div>
                                </a>
                            <?php endwhile;
                            wp_reset_postdata();
                        else :
                            echo '<p class="text-sm text-gray-500">Aucun article récent.</p>';
                        endif;
                    ?>
                </div>

                <div class="bg-white text-[#17476a] rounded-xl p-6 border border-gray-100 shadow-sm">
                    <h4 class="text-lg font-semibold mb-3">Inscrivez-vous</h4>
                    <p class="text-sm text-gray-600 mb-4">Recevez nos actualités et guides par e-mail.</p>
                    <form class="gap-12" method="post" action="#" onsubmit="return false;">
                        <input type="email" name="subscribe_email" placeholder="Votre email" required class="w-full mb-2 px-4 py-3 border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-[#17476a]" />
                        <button class="btn w-full text-white rounded-lg  hover:text-[#fff] border border-transparent hover:border-[#17476a] transition-colors duration-200 focus:outline-none focus:ring-2 focus:ring-[#17476a]" style="background-color: #17476a !important;">S'inscrire</button>
                    </form>
                    <p class="text-xs text-gray-500 mt-3">Nous n'envoyons pas de spam. Vous pouvez vous désinscrire à tout moment.</p>
                </div>
            </aside>

        </div>
    </div>
</main>

<?php get_footer(); ?>
