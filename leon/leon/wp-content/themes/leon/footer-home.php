<div class="rf-footer">
    <div class="rf-wrapper">
        <div class="rf-footer__col">
            <ul>
                <?php if( have_rows('social_media_links', 41) ): ?>
                    <?php while( have_rows('social_media_links', 41) ): the_row(); ?>
                        <a href="<?php the_sub_field('social_link'); ?>"><li><?php the_sub_field('social_name'); ?></li></a>
                    <?php endwhile; ?>
                <?php endif; ?>
            </ul>
        </div>
        <div class="rf-footer__col">
            <ul>
                <a href="https://soda.shop/about/"><li>About Soda</li></a>
                <!-- <li>FAQ's</li> -->
                <a href="https://soda.shop/terms-and-conditions/"><li>Terms and conditions</li></a>
                <a href="https://soda.shop/privacy-policy/"><li>Privacy policy</li></a>
            </ul>
        </div>
        <div class="rf-footer__col">
            <p>Want to speak to a real person?  Contact us at <a href="mailto:hello@soda.shop">hello@soda.shop</a> and we’ll get back to you ASAP</p>
        </div>
        <div class="rf-footer__col rf-pop">
                <?php get_template_part('rf-pop'); ?>
        </div>
    </div>
</div>
<div class="rf-footer-shopify__basket">
    <div data-id="11669659028" class="rf-product-buy-button"></div>
</div>
<?php get_template_part('shopify-script') ?>
<?php wp_footer(); ?>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-89870982-2', 'auto');
  ga('send', 'pageview');

</script>
</body>

</html>
