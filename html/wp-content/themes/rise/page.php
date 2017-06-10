<?php
/*
* Rise - Page
*/
?>

<?php get_header(); ?>

<div id="body-content" class="page content-area">

    <?php if(have_posts()): ?>
        <?php while ( have_posts() ) : ?>
            <?php the_post(); ?>
            <div class="page-content">
                <h2 class="page-title"><?php the_title(); ?></h2>
                <?php the_content(); ?>
            </div>
        <?php endwhile; ?>
    <?php endif; ?>

</div>

<?php get_footer(); ?>