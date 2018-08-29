<?php
    if(in_category('artist')){ //checks if is artists
        get_header();
        get_template_part('single-artist');
   }elseif(in_category('blog')) { //checks if its a blog
       get_header();
       get_template_part('single-feature');
   }else{ //if its not it uses the basic page template
       get_header();
       get_template_part('single-blog');
    }
    ?>
<?php get_footer(); ?>
