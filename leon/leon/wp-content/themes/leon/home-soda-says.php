<div class="rf-wrapper full-width">
    <div class="rf-says">
        <div class="rf-says__background-image">
            <img src="<?php the_field('background_image', 9); ?>">
        </div>
        <?php global $query_string; // required
        $posts = query_posts($query_string.'&posts_per_page=1&cat=4,7'); ?>
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <div class="rf-says__content-wrapper">
                    <div class="rf-says__container">
                        <div class="rf-says__image"><img src="https://soda.shop/wp-content/uploads/2017/08/rf-about-tamar.jpg"></div>
                        <div class="rf-says__headline"><?php the_title(); ?></div>
                        <div class="rf-says__excerpt">
                            <p>You asked the questions we have the answers</p>
                        </div>
                        <div class="rf-says__link">
                            <a href="<?php bloginfo('url') ?>/category/ask-tamar/"><h1>Ask Tamar</h1></a>
                        </div>
                    </div>
                </div>
            <?php endwhile; else : ?>
                <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
            <?php endif; ?>
        <?php // DEFAULT LOOP GOES HERE ?>
        <?php wp_reset_query(); // reset the query ?>
    </div>
</div>
