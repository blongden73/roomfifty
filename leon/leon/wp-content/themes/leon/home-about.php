<div class="rf-wrapper">
    <div class="rf-about">
        <?php
            $id = 30; // The Page or post ID
            $page_data = get_post( $id );
            $title = $page_data->post_title;
            $content = $page_data->post_content;
            $excerpt = substr($content, 0, 155);
        ?>
        <div class="rf-about__image">
            <?php get_template_part('about-svg') ?>
        </div>
        <div class="rf-about__headline"><?php echo $title ?></div>
        <div class="rf-about__excerpt">We’re the School of the Digital Age, a destination for new ideas and innovative technology products. </div>
        <div class="rf-about__link"><a href="<?php bloginfo('url'); ?>/about/">Read more about Soda</a></div>
    </div>
</div>
