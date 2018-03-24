<div class="rf-footer">
    <div class="rf-wrapper">
        <div class="rf-footer__col">
            <ul>
                <a href="http://roomfifty.com/contact/"><li>Contact</li></a>
                <!-- <li>FAQ's</li> -->
                <a href="http://roomfifty.com/returns/"><li>Returns</li></a>
                <a href="http://roomfifty.com/deliveries/"><li>Deliveries</li></a>
                <a href="http://roomfifty.com/framing/"><li>Framing</li></a>
                <a href="http://roomfifty.com/about/"><li>About us</li></a>
            </ul>
            <ul>
                <?php if( have_rows('social_media', 345) ): ?>
                    <?php while( have_rows('social_media', 345) ): the_row(); ?>
                        <a href="<?php the_sub_field('link'); ?>"><?php the_sub_field('image'); ?></a>
                    <?php endwhile; ?>
                <?php endif; ?>
            </ul>
        </div>
        <div class="rf-footer__col rf-newsletter">
            <?php get_template_part('newsletter') ?>
        </div>
        <div class="rf-footer__logo">
            <div class="rf-footer__logo-wrapper">
                <?php get_template_part('edler-logo') ?>
            </div>
        </div>
    </div>
</div>
<?php get_template_part('shopify-script') ?>
<?php wp_footer(); ?>
</body>

</html>
