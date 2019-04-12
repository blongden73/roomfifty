<div class="rf-editorial__overview">
    <div class="rf-wrapper">
        <div class="rf-single__artists-name products">
            <h1><?php the_title(); ?></h1>
            <h2>Stories from our artists</h2>
        </div>
    </div>
    <div class="rf-wrapper">
        <div class="rf-columns">
            <?php query_posts("cat=8"); ?>
              <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                  <?php $image = get_field('blog_main_image'); ?>
                  <?php $section = get_field('blog_section'); ?>
                  <div class="rf-col rf-home__product-wrapper products-overview journal-overview">
                      <div class="rf-home__product-details">
                          <div class="rf-home__product-title">
                              <h2><?php echo $section ?></h2>
                              <h1><?php the_title(); ?></h1>
                          </div>
                          <div class="rf-editorial__date">
                              <p><?php the_time('j.n.y', '<span>', '</span>'); ?></p>
                          </div>
                      </div>
                      <div class="rf-home__product-image">
                          <img src="<?php echo $image ?>">
                      </div>
                      <a class="product-link" href="<?php the_permalink(); ?>"></a>
                  </div>
              <?php endwhile; else: ?>
                <p>Sorry, there are no posts to display</p>
            <?php endif; ?>
            </div>
            <?php rewind_posts(); ?>
        </div>
    </div>
</div>
