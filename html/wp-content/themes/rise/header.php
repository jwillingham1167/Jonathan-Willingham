<?php
/*
* Rise - Header
*/
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Jonathan Willingham - Development Blog &amp; Code Snippets</title>
    <meta name="description" content="Jonathan Willingham - Development Blog &amp; Code Snippets">
    <meta name="author" content="Jonathan Willingham" />
    <link rel="canonical" href="http://www.jonathanwillingham.com/">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <?php wp_enqueue_script( 'waypoints', get_template_directory_uri() . '/assets/js/vendor/jquery.waypoints.min.js');
          wp_enqueue_script( 'flexslider-js', get_template_directory_uri() . '/assets/js/vendor/jquery.flexslider-min.js');
          wp_enqueue_script( 'main_script', get_template_directory_uri() . '/assets/js/scripts.js');
          wp_enqueue_style( 'flexslider-css', get_template_directory_uri() . '/assets/css/vendor/flexslider.css');
          wp_enqueue_style( 'styles', get_stylesheet_uri() ); ?>
    <?php wp_head(); ?>
</head>
<body <?php //body_class(); ?>>

        <header id="header" <?php if (is_home()) : ?>class="animate"<?php endif; ?>>
            <div class="header-container">
                <h1 class="title<?php if (!is_home()) : ?> resized<?php endif; ?>"><a href="<?php echo get_home_url(); ?>">Jonathan<br/>Willingham</a></h1>
                <?php wp_nav_menu( array( 'theme_location' => 'header-menu', 'menu_class' => 'desktop-menu menu') ); ?>
                <i class="fa fa-bars mobile-toggle" aria-hidden="true"></i>
            </div>
            <aside id="mobile-nav">
                <?php wp_nav_menu( array( 'theme_location' => 'header-menu','menu_class' => 'mobile-menu menu') ); ?>
            </aside>
        </header>

        <main id="maincontent">
