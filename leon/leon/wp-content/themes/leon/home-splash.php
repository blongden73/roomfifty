<div class="rf-splash">
    <div class="rf-fifty-artists rf-titles">
        <?php get_template_part('fiftyartists'); ?>
    </div>
    <div class="rf-fifty-pieces rf-titles">
        <?php get_template_part('fiftypeices'); ?>
    </div>
    <div class="rf-three-sizes rf-titles">
        <?php get_template_part('threesizes'); ?>
    </div>
    <?php if( have_rows('splash_images', 335) ): ?>
        <?php while( have_rows('splash_images', 335) ): the_row(); ?>
            <div class="rf-splash__wrapper">
                <div class="rf-splash__image" style="background-image: url(<?php the_sub_field('image'); ?>);"></div>
            </div>
        <?php endwhile; ?>
    <?php endif; ?>
    <div class="rf-promotion-banner rf-promotion-banner-<?php the_field('display', 999); ?>">
        <div class="rf-wrapper">
            <a href="<?php the_field('link', 999); ?>"><span class="rf-promotion-banner--text"><?php the_field('text', 999); ?></span>
            <span class="rf-promotion-banner--subtext"><?php the_field('sub_text', 999); ?></span></a>
        </div>
    </div>
</div>
