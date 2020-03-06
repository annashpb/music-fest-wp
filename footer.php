<footer id="colophon" class="site-footer">
    <div class="site-footer-container container">
        <div class="site-footer__contact">
            <p class="site-footer__contact-logo"><?php _e('Music'); ?><br /><?php _e('festival'); ?></p>
            <p class="site-footer__contact-text">
                <?php the_field('copyright', 'option'); ?>
            </p>
        </div>
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
    </div>
</footer>
<?php wp_footer(); ?>

</body>

</html>