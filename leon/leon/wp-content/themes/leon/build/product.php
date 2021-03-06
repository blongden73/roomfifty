<?php
/**
 * Template Name: New Product Page
 *
 */
 ?>
<?php get_header(); ?>
<div class="rf-artists__breadcrumb-wrapper">
    <div class="rf-wrapper">
        <div class="rf-single__artists-description-wrapper">
            <div class="rf-single__artists-name">
                <h2>Shop > Artist ></h2>
                <h1 class="rf-new-product-page artists-name"></h1><h1 class="rf-new-product-page print-name"></h1>
            </div>
        </div>
    </div>
</div>
<div class="rf-wrapper">
  <div class="rf-new-product-page-wrapper">
    <div class="rf-new-product-page--name">
      <div class="rf-new-product-page--buy">
        <div class="rf-product-buy-button"></div>
      </div>
      <div class="rf-new-product-page--description">
        <p class="rf-new-product-page--description-bold">The perfect print for your walls</p>
        <p>All our prints are unique to Roomfifty, created by 50 of the best artists in the world. We want your print to look great in your space so we print on heavyweight art paper using a museum quality giclée printer. </p>
        <p>All products are shipped worldwide.</p>
      </div>
    </div>
    <div class="rf-new-product-page--image">
      <img class="print-image">
    </div>
  </div>
</div>
<div class="rf-wrapper">
  <div class="rf-new-product-page--product-images">
    <div class="rf-products__images rf-black-container">
        <img class="rf-product__image--background rf-product__image-black-background landscape" data-src="https://roomfifty.com/wp-content/uploads/2018/10/landscape_artists_black.jpg">
        <img class="rf-product__image--background rf-product__image-black-background portrait" data-src="https://roomfifty.com/wp-content/uploads/2018/10/A2black.jpg">
        <img class="rf-product--artwork rf-product__image-black" src="">
    </div>
    <div class="rf-framing-description">
      <p class="rf-new-product-page--description-bold">Two colours for you to choose</p>
      <p>We have a wide variety of prints to choose from, which we know will look great in any space you like, to accompany your print you can choose to frame in black or white because we know it will work wherever you house it.</p>
    </div>
    <div class="rf-products__images rf-white-container">
        <img class="rf-product__image--background rf-product__image-white-background landscape" data-src="https://roomfifty.com/wp-content/uploads/2018/10/landscape_artists_white.jpg">
        <img class="rf-product__image--background rf-product__image-white-background portrait" data-src="https://roomfifty.com/wp-content/uploads/2018/10/A2White.jpg">
        <img class="rf-product--artwork rf-product__image-white" src="">
    </div>
  </div>
</div>
<?php get_template_part('special_promotion') ?>
<?php get_template_part('home-popular'); ?>
<?php get_template_part('new-product-script') ?>
<?php get_footer(); ?>
