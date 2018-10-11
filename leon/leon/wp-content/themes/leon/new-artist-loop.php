<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <?php
    // check for rows (parent repeater)
    if( have_rows('prints') ): ?>
        <div class="rf-artist__print">
        <?php
        // loop through rows (parent repeater)
        while( have_rows('prints') ): the_row(); ?>
            <div class="rf-artist_print__custom">
                <div class="rf-home__buy-button">
                    <?php $BuyId = get_sub_field('print_shopify_id'); ?>
                    <?php if( $BuyId ): ?>
                        <div id="<?php echo $BuyId ?>" data-id="<?php echo $BuyId ?>" class="rf-product-buy-button"></div>
                    <?php endif; ?>
                </div>
                <div class="rf-product__image--wrapper"></div>
                <script class="rf-product-images" type="text/x-handlebars-template">
                    <div class="rf-buttons-wrapper">
                        <div class="rf-intro-cta select-white">
                            <span class="button white">White frame</span>
                            <span class="button black">Black frame</span>
                        </div>
                    </div>
                    <div class="rf-products__images rf-black-container">
                        <img class="rf-product__image--background rf-product__image-black-background landscape" src="https://roomfifty.com/wp-content/uploads/2018/09/landscape_artists_black.jpg">
                        <img class="rf-product__image--background rf-product__image-black-background portrait" src="https://roomfifty.com/wp-content/uploads/2018/09/A2black.jpg">
                        <img class="rf-product--artwork rf-product__image-black" src="{{image <?php echo $BuyId ?>}}">
                    </div>
                    <div class="rf-products__images rf-white-container">
                        <img class="rf-product__image--background rf-product__image-white-background landscape" src="https://roomfifty.com/wp-content/uploads/2018/09/landscape_artists_white.jpg">
                        <img class="rf-product__image--background rf-product__image-white-background portrait" src="https://roomfifty.com/wp-content/uploads/2018/09/A2White.jpg">
                        <img class="rf-product--artwork rf-product__image-white" src="{{image <?php echo $BuyId ?>}}">
                    </div>
                </script>
            </div>
        <?php endwhile; // while( has_sub_field('to-do_lists') ): ?>
        </div>
    <?php endif; // if( get_field('to-do_lists') ): ?>
    <?php endwhile; else: ?>
    <p>Sorry, there are no posts to display</p>
    <?php endif; ?>
<?php rewind_posts(); ?>
