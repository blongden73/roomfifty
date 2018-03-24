<div class="rf-artists__intro-wrapper">
    <div class="rf-wrapper">
        <div class="rf-single__arists-picture">
            <div class="rf-artist__picture">
                <?php if( get_field('artist_image') ): ?>
                    <img src="<?php the_field('artist_image')?>">
                <?php endif; ?>
            </div>
        </div>
        <div class="rf-single__artists-description-wrapper">
            <div class="rf-single__artists-name">
                <h1><?php the_title(); ?></h1>
            </div>
            <div class="rf-single__arists-description">
                <p><?php the_field('artist_description')?></p>
                <?php if ( function_exists( 'ADDTOANY_SHARE_SAVE_KIT' ) ) {
                    ADDTOANY_SHARE_SAVE_KIT( array( 'use_current_page' => true ) );
                } ?>
            </div>
        </div>
    </div>
</div>
<div class="rf-wrapper js-set-height">
    <?php get_template_part('artists-loop') ?>
</div>
