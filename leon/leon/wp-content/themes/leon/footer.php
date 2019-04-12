<?php get_template_part('testimonials'); ?>
<div class="rf-footer">
    <div class="rf-wrapper">
        <div class="rf-footer__col">
          <p class="roomfifty-strap">RoomFifty sells affordable art by some of the best artists in the world, curated for everybody</p>
          <ul>
              <?php if( have_rows('social_media', 345) ): ?>
                  <?php while( have_rows('social_media', 345) ): the_row(); ?>
                      <a href="<?php the_sub_field('link'); ?>"><?php the_sub_field('image'); ?></a>
                  <?php endwhile; ?>
              <?php endif; ?>
          </ul>
        </div>
        <div class="rf-footer__col">
            <ul class="rf-page-list">
                <!-- <a href="http://roomfifty.com/contact/"><li>Contact</li></a> -->
                <!-- <li>FAQ's</li> -->
                <!-- <a href="http://roomfifty.com/returns/"><li>Returns</li></a>
                <a href="http://roomfifty.com/deliveries/"><li>Deliveries</li></a>
                <a href="http://roomfifty.com/framing/"><li>Framing</li></a>
                <a href="http://roomfifty.com/printing/"><li>Printing</li></a>
                <a href="http://roomfifty.com/about/"><li>About us</li></a>
                <a href="http://roomfifty.com/privacy-policy/"><li>Privacy</li></a> -->
                <?php wp_nav_menu( array( 'theme_location' => 'secondary-menu' ) ); ?>
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
<?php get_template_part('shopify-script-tests') ?>
<?php wp_footer(); ?>
</body>

</html>
