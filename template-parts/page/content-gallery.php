<section class="gallery" id="gallery">
    <div class="container">
        <h2 class="gallery__headline section-headline"><?php _e('Galeria'); ?></h2>
        <?php
        $images = get_field('gallery');
        if ($images) : ?>
            <ul class="gallery__list">
                <?php foreach ($images as $image) : ?>
                    <?php if (is_array($image)) : ?>
                        <li class="gallery__item">
                            <a href="<?php echo esc_url($image['url']); ?>" target="_blank">
                                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                            </a>
                        </li>
                    <?php endif; ?>
                <?php endforeach; ?>
            </ul>
        <?php endif; ?>
        <button type="button" class="gallery__btn default-btn">
            <?php _e('Lorem ipsum'); ?>
        </button>
    </div>
</section>