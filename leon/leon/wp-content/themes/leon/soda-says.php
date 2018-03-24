<div class="rf-single__header-background blog-overview">
</div>
<div class="rf-wrapper">
    <?php $the_query = new WP_Query( 'page_id=38' ); ?>
      <?php while ($the_query -> have_posts()) : $the_query -> the_post();  ?>
          <div class="rf-single__product-title">
              <?php the_content(); ?>
          </div>
          <div class="rf-single__product-menu">
              <?php wp_nav_menu( array( 'theme_location' => 'rf-says-menu' ) ); ?>
          </div>
      <?php endwhile;?>
    <?php rewind_posts(); ?>

    <div class="rf-home__product-container">
        <?php query_posts('cat=4,7,13,54,53,52'); ?>
          <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
              <?php $image = get_field('image'); ?>
              <div <?php post_class(); ?>>
              <div class="rf-home__product-wrapper products-overview rf-says__overview">
                  <div class="rf-home__product-image">
                      <img src="<?php echo $image ?>">
                  </div>
                  <div class="rf-home__product-details">
                      <div class="rf-says__category">
                          <?php the_category(); ?>
                      </div>
                      <div class="rf-home__product-title">
                          <h1><?php the_title(); ?></h1>
                          <?php the_excerpt();?>
                      </div>
                  </div>
                  <a class="product-link" href="<?php the_permalink(); ?>"></a>
              </div>
              </div>
          <?php endwhile; else: ?>
        	<p>Sorry, there are no posts to display</p>
        <?php endif; ?>
    </div>
    <?php rewind_posts(); ?>
</div>
