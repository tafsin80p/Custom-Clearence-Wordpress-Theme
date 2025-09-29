<?php get_header(); ?>
<section class="archive">
    <h1>Archive: <?php single_cat_title(); ?></h1>
    <?php if (have_posts()) : ?>
        <div class="posts">
            <?php while (have_posts()) : the_post(); ?>
                <div class="post">
                    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                    <p><?php the_excerpt(); ?></p>
                </div>
            <?php endwhile; ?>
        </div>
    <?php else : ?>
        <p>No posts found.</p>
    <?php endif; ?>
</section>
<?php get_footer(); ?>
