<?php

$post_object = get_sub_field('product');

if( $post_object ):

	// override $post
	$post = $post_object;
	setup_postdata( $post );

	?>

    <div class="rf-single__additional-products-wrapper">
		<a href="<?php the_permalink(); ?>"></a>
        <div class="rf-single__additional-products-image">
            <img src="<?php the_field('product_image'); ?>">
        </div>
		<div class="rf-single__additional-products-title">
	    	<h1><?php the_title(); ?></h1>
	        <p>£ <?php the_field('price'); ?></p>
		</div>
    </div>

    <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
<?php endif; ?>
