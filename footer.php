<footer id="colophon" class="site-footer">
    <div class="site-footer-container container">
        <div class="site-footer__contact">
            <p class="site-footer__contact-logo">Music<br />festival</p>
            <p class="site-footer__contact-text">
                <?php echo get_field('copyright', 'option'); ?>
            </p>
        </div>
        <?php if (has_nav_menu('socials-menu')) : ?>
            <nav class="socials-navigation">
                <ul class="socials">
                    <?php
                    if ($menu_items = wp_get_nav_menu_items('Socials Menu')) {
                        $menu_list = '';
                        foreach ((array) $menu_items as $key => $menu_item) {
                            $title = $menu_item->title; // заголовок элемента меню (анкор ссылки)
                            $url = $menu_item->url; // URL ссылки
                            $bgIcon = get_field('bg-icon', $menu_item);
                            $menu_list .= '<li class="socials__item">' . '<a href="' . $url . '" title="' . $title . '" style="background: url(' . $bgIcon . ') center no-repeat;">' . '</a>' . '</li>';
                        }
                        echo $menu_list;
                    }
                    ?>
                </ul>
            </nav>
        <?php endif; ?>
    </div>
</footer>
<?php wp_footer(); ?>

</body>

</html>