<?php get_header(); ?>
<section class="index h-screen bg-[#17476a] text-white p-8">
    <h1 class="text-5xl  font-bold  p-4">Transitaire au Maroc</h1>
    <?php if (have_posts()) : ?>
        <div class="posts">
            <?php while (have_posts()) : the_post(); ?>
                <div class="post">
                    <h2 class="text-2xl font-semibold mb-2"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                    <p class="text-base"><?php the_excerpt(); ?></p>
                </div>
            <?php endwhile; ?>
        </div>
    <?php else : ?>
        <p>No posts available.</p>
    <?php endif; ?>
</section>

<?php get_footer(); ?>
