<div class="rf-artists__wrapper">
    <div class="rf-wrapper">
            <h1>
                Make room for fifty of the finest image makers in the world
            </h1>
            <ul>
            <?php query_posts('cat=7'); ?>
              <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                  <li>
                      <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                  </li>
              <?php endwhile; else: ?>
                <p>Sorry, there are no posts to display</p>
            <?php endif; ?>
            <?php rewind_posts(); ?>
            <?php wp_reset_query(); ?>
        </ul>
    </div>
</div>
