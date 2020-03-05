<section class="gallery" id="gallery">
    <div class="container">
        <h2 class="gallery__headline section-headline">Galeria</h2>
        <?php
        $images = get_field('gallery');
        if ($images) : ?>
            <ul class="gallery__list">
                <?php foreach ($images as $image) : ?>
                    <li class="gallery__item">
                        <a href="<?php echo esc_url($image['url']); ?>" target="_blank">
                            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                        </a>
                    </li>
                <?php endforeach; ?>
            </ul>
        <?php endif; ?>
        <button type="button" class="gallery__btn default-btn">
            Lorem ipsum
        </button>
    </div>
</section>