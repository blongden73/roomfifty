<div class="rf-season-container">
    <div class="rf-wrapper">
        <div class="rf-columns">
            <div class="rf-col">
                <h1>Latest season</h1>
            </div>
            <?php if( have_rows('season', 1589) ): ?>
            	<?php while( have_rows('season', 1589) ): the_row();
            		// vars
            		$image = get_sub_field('print_image');
            		$title = get_sub_field('print_title');
            		$artist = get_sub_field('print_artist');
                    $link = get_sub_field('print_link');
            		?>
                    <div class="rf-col">
                        <a href="<?php echo $link ?>"></a>
                        <div class="rf-home-image-wrapper">
                            <img class="rf-image-flat" src="<?php echo $image ?>">
                            <!-- <img class="rf-image-hover" src="https://roomfifty.com/wp-content/uploads/2018/08/image_background_context.jpg"> -->
                            <img class="rf-image-framed" src="https://roomfifty.com/wp-content/uploads/2018/08/blank_frame.jpg">
                        </div>
                		<p><?php echo $title ?></p>
                        <p><?php echo $artist ?></p>
                    </div>
            	<?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>
</div>
