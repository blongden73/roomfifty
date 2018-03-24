<?php
/**
 * Template Name: Season 1
 *
 */
 ?>
<?php get_header('season1'); ?>
<div class="rf-overlay-season-one rf-temporary">
    <h1>Coming soon</h1>
</div>
<div class="rf-season-one-top">
    <div class="rf-wrapper">
        <div class="rf-single__artists-name products rf-season-one">
            <h1>Still 3 sizes</h1>
            <h1>Still 3 prices</h1>
            <h2>Roomfifty</h2>
            <h2>Past seasons</h2>
        </div>
    </div>
</div>
<div class="rf-wrapper">
    <div class="rf-home__product-container">
        <?php query_posts('cat=4'); ?>
          <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
              <?php $image = get_field('artist_main_image'); ?>
              <?php $id = get_field('artist_print_id'); ?>
              <div class="rf-home__product-wrapper products-overview rf-season-one-product">
                  <div class="rf-home__product-image">
                      <img src="<?php echo $image ?>">
                  </div>
                  <div class="rf-home__product-details">
                      <div class="rf-home__product-title">
                          <h1><?php the_title(); ?></h1>
                      </div>
                  </div>
                  <a class="product-link" href="<?php the_permalink(); ?>"></a>
              </div>
          <?php endwhile; else: ?>
        	<p>Sorry, there are no posts to display</p>
        <?php endif; ?>
    </div>
    <?php rewind_posts(); ?>
</div>
<?php get_footer(); ?>
