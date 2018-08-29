<div class="rf-editorial__image-wrapper rf-<?php the_field('colour_class_picker')?> rf-<?php the_field('position_class_picker')?>">
    <img src="<?php the_field('blog_main_image')?>">
    <?php if( get_field('position_class_picker') == 'custom' ): ?>
        <div class="rf-editorial__custom-html">
            <div class="rf-wrapper">
                <?php the_field('custom_html')?>
            </div>
        </div>
    <?php endif; ?>

    <div class="rf-editorial__custom-headline">
        <!-- if the template is top or bottom-->
        <?php if( get_field('position_class_picker') != 'custom' ): ?>
            <div class="rf-wrapper">
                <h2><?php the_field('custom_headline')?></h2>

                <div class="rf-editorial__headline">
                    <?php $section = get_field('blog_section'); ?>
                    <h3><?php echo $section ?></h3>
                    <h1><?php the_title(); ?></h1>
                </div>
            </div>
        <?php endif; ?>
    </div>
    <div class="rf-trail__wrapper">
        <div class="rf-wrapper">
            <div class="rf-editorial__trail">

                <div class="rf-editorial__standfirst">
                    <p><?php the_field('standfirst')?></p>
                    <div class="rf-editorial__date">
                        <p><span>First published </span><?php the_time('j.n.y', '<span>', '</span>'); ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="rf-wrapper">
    <div class="rf-editorial__content rf-<?php the_field('colour_class_picker')?> rf-<?php the_field('position_class_picker')?>">
        <!-- if the template is center -->
        <?php if( get_field('position_class_picker') == 'custom' ): ?>
            <div class="rf-editorial__headline">
                <?php $section = get_field('blog_section'); ?>
                <h3><?php echo $section ?></h3>
                <h1><?php the_title(); ?></h1>
            </div>
        <?php endif; ?>
        <?php get_template_part('editorial-loop')?>
    </div>
</div>
