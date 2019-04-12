<div class="rf-splash rf-new-splash <?php if( get_field('big_red_button_sale', 1477) ): ?>rf-sale-hide<?php endif; ?>">
    <div class="rf-fifty-artists rf-titles">
    </div>
    <div class="rf-fifty-pieces rf-titles">
    </div>
    <div class="rf-three-sizes rf-titles">
    </div>
    <?php if( have_rows('splash_images', 1591) ): ?>
        <?php while( have_rows('splash_images', 1591) ): the_row(); ?>
            <div class="rf-splash__wrapper">
                <div class="rf-splash__image" style="background-image: url(<?php the_sub_field('image'); ?>);"></div>
            </div>
        <?php endwhile; ?>
    <?php endif; ?>
    <div class="rf-splash-intro">
        <div class="rf-wrapper">
            <div class="rf-splash-intro-inner">
                <h1><?php the_field('home_intro', 1589)?></h1>
                <p><?php the_field('home_description', 1589)?></p>
                <div class="rf-intro-cta">
                    <a href="https://roomfifty.com/shop/?season-4"><span class="button">Shop for art</span></a>
                </div>
                <div class="rf-intro-cta secondary">
                    <a href="https://roomfifty.com/about"><span class="button">How it works</span></a>
                </div>
            </div>
        </div>
    </div>
</div>
