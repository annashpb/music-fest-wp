<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900&display=swap&subset=latin-ext" rel="stylesheet" />

    <?php wp_head(); ?>
</head>

<body style="background-color: #<?php background_color(); ?>">
    <div class="slider-screen" style="background-image: url('<?php background_image(); ?>');">
        <header class="site-header container"">            
                <?php if (has_nav_menu('main-menu')) : ?>                    
                    <nav class=" site-navigation">
            <?php wp_nav_menu(array('theme_location' => 'main-menu')); ?>
            </nav>
        <?php endif; ?>

        <?php if (has_nav_menu('socials-menu')) : ?>
            <nav class="socials-navigation">
                <ul class="socials">
                    <?php
                    if ($menu_items = wp_get_nav_menu_items('Socials Menu')) : ?>
                        <?php foreach ((array) $menu_items as $key => $menu_item) : ?>
                            <li class="socials__item">
                                <a href='<?php echo $menu_item->url; ?>' title="<?php echo $menu_item->title; ?>" style="background: url('<?php the_field('bg-icon', $menu_item) ?>') center no-repeat;"></a>
                            </li>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </ul>
            </nav>
        <?php endif; ?>
        </header><!-- #masthead -->