<div class="rf-season-container rf-artists-page-container">
    <div class="rf-wrapper">
        <div class="rf-columns">
            <div class="rf-col">
                <h1>Roomfifty artists</h1>
            </div>
            <div class="rf-col">
                <h1>Directory</h1>
                <p>We have a hand-picked roster of aritsts who produce artwork for our regular seasons and special editions.</p>
            </div>
        </div>
    </div>
</div>
<div class="rf-wrapper">
    <div class="rf-columns">
        <?php query_posts("cat=4&orderby=title&order=ASC"); ?>
          <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
              <div class="rf-col">
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
