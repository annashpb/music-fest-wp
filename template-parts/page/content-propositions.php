<main>
    <section class="propositions" id="propositions">
        <div class="container">
            <h2 class="propositions__headline section-headline">Ingressos</h2>
            <?php
            $args = array(
                'post_type' => 'propositions',
            );
            $the_query = new WP_Query($args); ?>
            <?php if ($the_query->have_posts()) : ?>
                <ul class="propositions__list">
                    <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                        <li class="propositions__item proposition" style="background: url(<?php echo get_field('bg-prop-photo'); ?>) center no-repeat;">
                            <h3 class="proposition__headline"><?php echo get_field('prop-headline'); ?></h3>
                            <div class="proposition__price">
                                <span class="proposition__price-small">$</span><span class="proposition__price-big"><?php echo get_field('prop-price'); ?></span><span class="proposition__price-small">,00</span>
                            </div>
                            <button type="button" class="proposition__btn default-btn">
                                Lorem ipsum
                            </button>
                            <p class="proposition__description">
                            <?php echo get_field('prop-description'); ?>
                            </p>
                            <p class="proposition__text">
                            <?php echo get_field('prop-text'); ?>
                            </p>
                        </li>
                    <?php endwhile; ?>
                </ul>
            <?php endif; ?>
            <p class="propositions__descr">
                Lorem ipsum dolor sit amet consectetur adipiscing elit, tempus
                primis tortor taciti viverra magna habitasse conubia, aenean laoreet
                tellus aliquam sollicitudin mollis. Neque mattis mauris himenaeos
                vestibulum.
            </p>
        </div>
    </section>