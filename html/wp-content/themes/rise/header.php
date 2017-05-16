<?php
/*
* Rise - Header
*/
?>

<!DOCTYPE html>
<html>
<head>
    <title><?php bloginfo( 'name' ); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <?php wp_enqueue_style( 'styles', get_stylesheet_uri() ); ?>
    <?php wp_head(); ?>
</head>



<script>
    $(document).ready(function() {
        $('#header .mobile-toggle').on("click", function() {
            $('#header i').toggleClass("fa-times fa-bars");
            $('#mobile-nav').toggleClass("show");
            $('.body-wrapper').toggleClass("slide");
        });
    });
</script>




<body <?php body_class(); ?>>

    <div class="body-wrapper">

        <header id="header">
            <div class="header-container">
                <h1 class="title">Jonathan<br/>Willingham</h1>
                <?php wp_nav_menu( array( 'theme_location' => 'header-menu', 'menu_class' => 'desktop-menu menu') ); ?>
                <i class="fa fa-bars mobile-toggle" aria-hidden="true"></i>
            </div>
        </header>
        <aside id="mobile-nav">
            <?php wp_nav_menu( array( 'theme_location' => 'header-menu','menu_class' => 'mobile-menu menu') ); ?>
        </aside>
