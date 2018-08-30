<div class="temporaray-artists-test">
    <div class="rf-artists__breadcrumb-wrapper">
        <div class="rf-wrapper">
            <div class="rf-single__artists-description-wrapper">
                <div class="rf-single__artists-name">
                    <h2>Shop > Artist ></h2>
                    <h1><?php the_title(); ?></h1>
                </div>
            </div>
        </div>
    </div>
    <div class="rf-wrapper js-set-height">
        <div class="rf-artsist__wrapper">
            <div class="rf-artsist__wrapper-print">
                <?php get_template_part('new-artist-loop') ?>
            </div>
        </div>
    </div>
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
</div>
<?php get_template_part('artists_script') ?>
