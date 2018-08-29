<?php get_header(); ?>
<?php get_template_part('home-lightbox'); ?>
<?php if( get_field('big_red_button_sale', 1477) ): ?>
    <?php get_template_part('home-sale'); ?>
<?php endif; ?>
<?php get_template_part('home-splash'); ?>
<?php get_template_part('home-process'); ?>
<?php get_template_part('home-artists'); ?>
<?php get_template_part('home-featured'); ?>
<?php get_footer(); ?>
