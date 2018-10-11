<div class="rf-featured">
    <div class="rf-wrapper">
        <div class="rf-columns">
            <div class="rf-col rf-featured-title">Featured in</div>
            <?php if( have_rows('featured_images', 1453) ): ?>
                <?php while( have_rows('featured_images', 1453) ): the_row(); ?>
                    <?php $link = get_sub_field('link'); ?>
                    <div class="rf-featured-images">
                        <?php if($link): ?><a href="<?php the_sub_field('link'); ?>"><?php endif; ?>
                            <img src="<?php the_sub_field('image'); ?>">
                        <?php if($link): ?></a><?php endif; ?>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>
</div>
