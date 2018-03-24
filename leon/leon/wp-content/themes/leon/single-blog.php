<div class="rf-single-blog">
    <div class="rf-wrapper">
        <div class="rf-single-blog__image">
            <img src="<?php the_field('image'); ?>" >
        </div>
    </div>
</div>
<div class="rf-wrapper">
    <div class="rf-single-blog__article">
        <h1><?php the_title(); ?></h1>
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <div class="rf-single__content-wrapper">
                <?php the_content(); ?>
            </div>
        <?php endwhile; else : ?>
            <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
        <?php endif; ?>
    </div>
</div>
