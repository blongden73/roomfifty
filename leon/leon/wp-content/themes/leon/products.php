<?php
    $season = get_field('season', 312);
    $archive = get_field('archive', 312);
?>

<div class="rf-wrapper">
    <div class="rf-single__artists-name products">
        <h1><?php the_title(); ?></h1>
        <h2>Roomfifty Season 2</h2>
    </div>
</div>
<div class="rf-wrapper">
    <div class="rf-home__product-container">
        <?php query_posts("cat={$season}"); ?>
          <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
              <?php $image = get_field('artist_main_image'); ?>
              <?php $id = get_field('artist_print_id'); ?>
              <div class="rf-home__product-wrapper products-overview">
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
<div class="rf-products__overview-divide">
    <div class="rf-wrapper">
        <div class="rf-single__artists-name products rf-old-seasons">
            <h2>Roomfifty Season 1</h2>
        </div>
    </div>
</div>
<div class="rf-wrapper">
    <div class="rf-home__product-container">
        <?php query_posts("cat={$archive}"); ?>
          <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
              <?php $image = get_field('artist_main_image'); ?>
              <?php $id = get_field('artist_print_id'); ?>
              <div class="rf-home__product-wrapper products-overview">
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
