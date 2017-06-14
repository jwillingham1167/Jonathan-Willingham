<?php
/*
* Rise - Single Post
*/

get_header(); ?>

<div id="body-content" class="single-post content-area">

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
        <?php get_sidebar(); ?>
    </article><!-- #post-## -->

    <div class="blog-more-wrapper">
        <div class="blog-more">
            <h2>Recent Posts</h2>
            <div class="flexslider">
                <?php $blogArgs = array(
                    'posts_per_page' => 5
                    ); ?>
                    <?php $posts_query = new WP_Query( $blogArgs ); ?>
                    <?php if ( $posts_query->have_posts() ) : ?>
                        <ul class="slides">
                        <?php while ( $posts_query->have_posts() ) : ?>
                            <?php $posts_query->the_post(); ?>
                            <li class="flexslider-post">
                                <div class="post-image" style="background-image: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url('<?php the_post_thumbnail_url() ?>');">
                                    <div class="post-text">
                                        <h3 class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                        <a class="button-white" href="<?php the_permalink(); ?>">Read More</a>
                                    </div>
                                </div>
                            </li>
                        <?php endwhile; ?>
                        </ul>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div><!--.content-area -->
    <?php get_footer(); ?>
    <script>
        $(document).ready(function() {
            $('.flexslider').flexslider({
                animation: "slide"
            });
        });
    </script>