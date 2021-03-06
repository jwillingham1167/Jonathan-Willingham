<?php
/*
* Rise - Archive
*/
?>

<?php get_header(); ?>

<div id="body-content" class="archive content-area">

    <div class="banner">
        <h2 class="banner-title"><?php echo single_cat_title(); ?></h2>
    </div>

    <?php get_sidebar(); ?>
    
    <div class="posts-container">
            <?php if ( have_posts() ) : ?>
                <?php while ( have_posts() ) : ?>
                    <?php the_post(); ?>
                    <div class="post">
                        <div class="post-content">
                            <?php if (has_post_thumbnail()) : ?>
                                <a class="post-image" href="<?php the_permalink(); ?>">
                                    <img src="<?php the_post_thumbnail_url() ?>" alt="<?php the_title(); ?>" />
                                </a>
                            <?php endif; ?>
                            <div class="post-text">
                                <h3 class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                <h4 class="meta"><span><?php the_date(); ?><span class="divider">|</span><?php the_category(); ?></span></h4>
                                <div class="content"><p><?php echo wp_trim_words( get_the_content(), 60, '...' ); ?></p></div>
                            </div>
                            <a class="button-blue" href="<?php the_permalink(); ?>">Read More</a>
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>

    <?php get_footer(); ?>

    <script type="text/javascript">
        $(window).bind("load", alignPostText);
        $(window).bind("resize", alignPostText);

        function alignPostText() {

            if ($(window).width() > 768) {
                var maxImgHeight = 0;
                var maxTextHeight = 0;
                $('.archive .posts-container .post').each(function() {
                    $('.post-image', this).css("height","auto");
                    $('.post-text', this).css("height","auto");

                    if ($('.post-image', this).height() > maxImgHeight) {
                        maxImgHeight = $('.post-image', this).height();
                    }

                    if ($('.post-text', this).height() > maxTextHeight) {
                        maxTextHeight = $('.post-text', this).height();
                    }

                });

                $('.archive .posts-container .post').each(function() {
                    $('.post-image', this).height(maxImgHeight);
                    $('.post-text', this).height(maxTextHeight);
                });
            } else {
                $('.archive .posts-container .post').each(function() {
                    $('.post-image', this).css("height","auto");
                    $('.post-text', this).css("height","auto");
                });
            }
        }
    </script>