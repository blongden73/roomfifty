<?php get_header(); ?>
    <?php
       if(in_category('home')){
           get_template_part('c-home');
       }else if(in_category('wellness')){
           get_template_part('c-wellness');
       }else if(in_category('accessories')){
           get_template_part('c-accessories');
       }else if(in_category('low-tech-no-tech')){
           get_template_part('c-low-tech');
       }else if(in_category('play')){
           get_template_part('c-play');
       }else if(in_category('ask-tamar')){
           get_template_part('c-ask-tamar');
       }else if(in_category('meet-our-makers')){
           get_template_part('c-meet-our-makers');
       }else if(in_category('just-say-no')){
           get_template_part('c-just-say-no');
       }else if(in_category('boombox-challenge')){
           get_template_part('c-boombox-challenge');
       }else if(in_category('rf-news')){
           get_template_part('c-rf-news');
       }else if(in_category('cha-cha-reviews')){
           get_template_part('c-cha-cha-reviews');
       }else {
           get_template_part('products');
       }
    ?>
<?php get_footer(); ?>
