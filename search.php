<?php get_header(); ?>
<section class="search-results">
    <h1>Search Results</h1>
    <?php if (have_posts()) : ?>
        <div class="results">
            <?php while (have_posts()) : the_post(); ?>
                <div class="result">
                    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                    <p><?php the_excerpt(); ?></p>
                </div>
            <?php endwhile; ?>
        </div>
    <?php else : ?>
        <p>No results found.</p>
    <?php endif; ?>
</section>
<?php get_footer(); ?>
