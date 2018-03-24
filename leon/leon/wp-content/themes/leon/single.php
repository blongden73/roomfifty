<?php
    if(in_category('artist')){
       if(in_category( array('archive'))) {
           get_header('season1');
           get_template_part('single-archive');
       }else {
           get_header();
           get_template_part('single-artist');
       }
       }else{
           get_header();
           get_template_part('single-blog');
       }
    ?>
<?php get_footer(); ?>
