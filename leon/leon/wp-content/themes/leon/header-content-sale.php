<div class="rf-header">
    <div class="rf-wrapper">
        <div class="rf-logo"><a href="http://roomfifty.com/"><?php get_template_part('sale-logo'); ?></a></div>
        <div class="rf-menu desktop-only">
            <?php wp_nav_menu( array( 'theme_location' => 'site-menu' ) ); ?>
        </div>
        <div class="rf-burger mobile-only">
            <div class="rf-burger-bar top"></div>
            <div class="rf-burger-bar middle"></div>
            <div class="rf-burger-bar bottom"></div>
        </div>
    </div>
</div>

<div class="rf-mobile__menu mobile-only">
    <?php get_template_part('menu') ?>
</div>

<div class="rf-tracker"></div>
