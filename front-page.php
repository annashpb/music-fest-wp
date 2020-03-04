<?php get_header(); ?>

<?php
// Show the selected front page content.
if (have_posts()) :
    while (have_posts()) :
        the_post();
        get_template_part('template-parts/page/content', 'first-screen');
    endwhile;
else :
    get_template_part('template-parts/post/content', 'none');
endif;
?>


<?php get_footer(); ?>
