<?php get_header();

if (have_posts()) :
    while (have_posts()) :
        the_post();
        get_template_part('template-parts/page/content', 'first-screen');
        get_template_part('template-parts/page/content', 'propositions');
        get_template_part('template-parts/page/content', 'trajectory');
        get_template_part('template-parts/page/content', 'gallery');
        get_template_part('template-parts/page/content', 'map');
    endwhile;
else :
    get_template_part('template-parts/page/content', 'none');
endif;

get_footer();
