<?php
/*
* Rise - Single Post
*/

get_header(); ?>

<div id="body-content" class="single-post content-area">
        <article id="post-<?php the_ID(); ?>">
            <?php if (have_posts()): ?>
                <?php while (have_posts()): ?>
                    <?php the_post(); ?>
                    <div class="post-container">
                        <?php the_post_thumbnail(); ?>
                        <div class="post-text">
                            <h1><?php the_title(); ?></h1>
                            <h4><?php the_author(); echo " / "; echo get_the_date($post->post_id); ?></h4>
                            <div class="post-content"><p><?php the_content(); ?></div>
                        </div>
                    </div><!-- .entry-content -->
                <?php endwhile; ?>
            <?php endif; ?>
        </article><!-- #post-## -->
</div><!-- .content-area -->
<?php get_footer(); ?>