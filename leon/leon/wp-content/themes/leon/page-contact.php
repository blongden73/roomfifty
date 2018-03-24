<?php
/**
 * Template Name: Contact
 *
 */
 ?>
 <?php get_header(); ?>
<div class="rf-single__header-background simple-overview"></div>
<div class="rf-wrapper">
    <div class="rf-single-blog__article">
        <h1><?php the_title(); ?></h1>
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <div class="rf-single__content-wrapper">
                <?php the_content(); ?>
                <div class="rf-single-contact__form">
                    <?php the_field('zen_desk'); ?>
                </div>
            </div>
        <?php endwhile; else : ?>
            <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
        <?php endif; ?>
    </div>
</div>
<?php get_footer(); ?>
