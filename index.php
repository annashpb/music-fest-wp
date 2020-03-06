<?php

get_header(); ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main">
        <?php
        if (have_posts()) {
            while (have_posts()) {
                the_post();
                get_template_part('template-parts/page/content');
            }
        } else {
            get_template_part('template-parts/page/content', 'none');
        }
        ?>
    </main><!-- .site-main -->
</div><!-- .content-area -->


<?php get_footer();
