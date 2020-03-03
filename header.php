<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900&display=swap&subset=latin-ext" rel="stylesheet" />
    <?php wp_head(); ?>
</head>

<body>
    <div class="slider-screen">
        <header class="site-header container"">            
                <?php if (has_nav_menu('main-menu')) : ?>                    
                    <nav class=" site-navigation">
            <?php wp_nav_menu(array('theme_location' => 'main-menu')); ?>
            </nav>

        <?php endif; ?>

        </header><!-- #masthead -->

        <div class="site-content-contain">
            <div id="content" class="site-content">