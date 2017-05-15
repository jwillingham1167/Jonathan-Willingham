<?php
/*
* Rise - Header
*/
?>

<!DOCTYPE html>
<html>
<head>
    <title><?php bloginfo( 'name' ); ?></title>
    <?php wp_enqueue_style( 'styles', get_stylesheet_uri() ); ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <header id="header" <?php if (!is_home()) :?>class="header-resize"<?php endif; ?>>
        <p>Header!</p>
    </header>
