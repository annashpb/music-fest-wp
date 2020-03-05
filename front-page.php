<?php get_header(); ?>

<?php
if (have_posts()) :
    while (have_posts()) :
        the_post();
        get_template_part('template-parts/page/content', 'first-screen');
    endwhile;
else :
    get_template_part('template-parts/page/content', 'none');
endif;
?>

<?php
if (have_posts()) :
    while (have_posts()) :
        the_post();
        get_template_part('template-parts/page/content', 'propositions');
    endwhile;
else :
    get_template_part('template-parts/page/content', 'none');
endif;
?>

<?php
if (have_posts()) :
    while (have_posts()) :
        the_post();
        get_template_part('template-parts/page/content', 'trajectory');
    endwhile;
else :
    get_template_part('template-parts/page/content', 'none');
endif;
?>

<?php
if (have_posts()) :
    while (have_posts()) :
        the_post();
        get_template_part('template-parts/page/content', 'gallery');
    endwhile;
else :
    get_template_part('template-parts/page/content', 'none');
endif;
?>

<?php
if (have_posts()) :
    while (have_posts()) :
        the_post();
        get_template_part('template-parts/page/content', 'map');
    endwhile;
else :
    get_template_part('template-parts/page/content', 'none');
endif;
?>

<?php get_footer(); ?>
