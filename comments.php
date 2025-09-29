<?php if (have_comments()) : ?>
    <h3><?php comments_number('No Comments', 'One Comment', '% Comments'); ?></h3>
    <ul class="comment-list">
        <?php wp_list_comments(); ?>
    </ul>
<?php endif; ?>
<?php comment_form(); ?>
