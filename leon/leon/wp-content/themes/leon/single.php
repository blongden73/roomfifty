<?php get_header(); ?>
    <?php
       if(in_category('artist')){
           get_template_part('single-artist');
       }else{
           get_template_part('single-blog');
       }
    ?>
<?php get_footer(); ?>
