<?php
/*
* Rise - Blog
* Template Name: Blog
*/
?>

<?php get_header(); ?>

<div id="body-content" class="blog content-area">

    <div class="banner">
        <h2 class="banner-title"><?php echo the_title(); ?></h2>
    </div>

    <?php get_sidebar(); ?>
    
    <div class="posts-container">

        <?php $blogArgs = array(
            'posts_per_page'    => -1
            ); ?>
            <?php $posts_query = new WP_Query( $blogArgs ); ?>
            <?php if ( $posts_query->have_posts() ) : ?>
                <?php while ( $posts_query->have_posts() ) : ?>
                    <?php $posts_query->the_post(); ?>
                    <div class="post">
                        <?php if (has_post_thumbnail()) : ?>
                            <a class="post-image" href="<?php the_permalink(); ?>">
                                <img src="<?php the_post_thumbnail_url() ?>" alt="<?php the_title(); ?>" />
                            </a>
                        <?php endif; ?>
                        <div class="post-text">
                            <h3 class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                            <h4 class="meta"><span><?php the_date(); ?><span class="divider">|</span><?php the_category(); ?></span></h4>
                            <div class="content"><p><?php echo wp_trim_words( get_the_content(), 60, '...' ); ?></p></div>
                            <a class="button-blue" href="<?php the_permalink(); ?>">Read More</a>
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>

    <?php get_footer(); ?>