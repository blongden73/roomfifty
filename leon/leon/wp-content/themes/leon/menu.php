<div class="rf-wrapper">
    <div class="rf-pop-menu">
        <?php wp_nav_menu( array( 'theme_location' => 'site-menu' ) ); ?>
        <ul>
            <li>Artists</li>
            <?php query_posts('cat=4'); ?>
              <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                  <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
              <?php endwhile; else: ?>
                <p>Sorry, there are no posts to display</p>
            <?php endif; ?>
            <?php rewind_posts(); ?>
            <?php wp_reset_query(); ?>
        </ul>
    </div>
</div>
