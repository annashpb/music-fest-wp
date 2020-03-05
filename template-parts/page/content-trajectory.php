<section class="tajectory" id="tajectory">
    <div class="trajectory-wrapper" style="background: url('<?php echo get_field('trajectory-bg'); ?>') top center no-repeat">
        <div class="container tajectory-container">
            <div class="tajectory-container__content">
                <h2 class="trajectory__headline section-headline">trajetória</h2>
                <p class="trajectory__description">
                    Lorem ipsum dolor sit amet consectetur, adipiscing elit phasellus
                    posuere placerat, conubia dictum metus.
                </p>
                <?php if (have_rows('trajectory')) : ?>
                    <ul class="trajectory__list">
                        <?php while (have_rows('trajectory')) : the_row(); ?>
                            <li class="trajectory__item">
                                <p class="trajectory__year"><?php echo get_sub_field('trajectory-year'); ?></p>
                                <p class="trajectory__descr">
                                    <?php echo get_sub_field('trajectory-descr'); ?>
                                </p>
                            </li>
                        <?php endwhile; ?>
                    </ul>
                <?php endif; ?>

            </div>
        </div>
    </div>
</section>