<div class="rf-people">
    <div class="rf-wrapper">
        <div class="rf-columns">
            <?php if( have_rows('people', 314) ): ?>
            	<?php while( have_rows('people', 314) ): the_row();
            		// vars
            		$name = get_sub_field('name');
            		$image = get_sub_field('image');
            		$description = get_sub_field('description');
            		?>
                    <div class="rf-col">
                        <?php if( $image ): ?>
                            <img src="<?php echo $image ?>">
                        <?php endif; ?>
                        <?php if( $name ): ?>
                            <h2><?php echo $name ?></h2>
                        <?php endif; ?>
                        <?php if( $description ): ?>
                            <p><?php echo $description ?></p>
                        <?php endif; ?>
                    </div>
            	<?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>
</div>
