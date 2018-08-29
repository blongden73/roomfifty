<div class="rf-artsist__wrapper">
    <div class="rf-artsist__wrapper-print">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <?php
            // check for rows (parent repeater)
            if( have_rows('prints') ): ?>
                <div class="rf-artist__print">
                <?php
                // loop through rows (parent repeater)
                while( have_rows('prints') ): the_row(); ?>
                        <div class="rf-home__buy-button">
                            <?php $BuyId = get_sub_field('print_shopify_id'); ?>
                            <?php if( $BuyId ): ?>
                                <div id="<?php echo $BuyId ?>" data-id="<?php echo $BuyId ?>" class="rf-product-buy-button"></div>
                            <?php endif; ?>
                        </div>
                <?php endwhile; // while( has_sub_field('to-do_lists') ): ?>
                </div>
            <?php endif; // if( get_field('to-do_lists') ): ?>
            <?php endwhile; else: ?>
            <p>Sorry, there are no posts to display</p>
            <?php endif; ?>
        <?php rewind_posts(); ?>
    </div>
</div>
