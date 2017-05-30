<?php
/*
* Rise - Single Post
*/

get_header(); ?>

<div id="body-content" class="single-post content-area">

    <?php get_sidebar(); ?>
    <article id="post-<?php the_ID(); ?>" class="post">
        <?php if (have_posts()): ?>
            <?php while (have_posts()): ?>
                <?php the_post(); ?>
                <?php the_post_thumbnail(); ?>
                <h2 class="title"><?php the_title(); ?></h2>
                <span class="meta"><?php echo the_date();?> | <?php echo the_category(); ?></span>
                <div class="post-content"><p><?php the_content(); ?></div>
            <?php endwhile; ?>
        <?php endif; ?>
    </article><!-- #post-## -->

    <!-- <div class="blog-more-wrapper">
        <div class="blog-more">
            <h2>Recent Posts</h2>
            <div class="flexslider">
                <?php $blogArgs = array(
                    'posts_per_page'    => 4
                    ); ?>
                    <?php $posts_query = new WP_Query( $blogArgs ); ?>
                    <?php if ( $posts_query->have_posts() ) : ?>
                        <ul class="slides">
                        <?php while ( $posts_query->have_posts() ) : ?>
                            <?php $posts_query->the_post(); ?>
                            <li class="flexslider-post">
                                <a href="<?php the_permalink(); ?>">
                                    <?php if (has_post_thumbnail()) : ?>
                                        <img src="<?php the_post_thumbnail_url() ?>" alt="<?php the_title(); ?>" />
                                    <?php endif; ?>
                                    <h3 class="title"><?php the_title(); ?></h3>
                                </a>
                            </li>
                        <?php endwhile; ?>
                        </ul>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div><!-- .content-area -->
    <?php get_footer(); ?>
    <script>
        $(document).ready(function() {
            $('.flexslider').flexslider({
                animation: "slide"
            });
        });
    </script> -->