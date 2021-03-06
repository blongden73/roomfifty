<?php
/**
 * Template Name: Sale
 *
 */
 ?>
<?php get_header('sale'); ?>
<div class="rf-wrapper rf-new-shop__container rf-sale__container">
    <div class="rf-new-shop__filter">
        <div class="rf-season-picker">
            <h1>Season</h1>
            <ul>
                <li class="selector season-picker-list" data-click="season 1">1</li>
                <li class="selector season-picker-list" data-click="season 2">2</li>
                <li class="selector season-picker-list" data-click="season 3">3</li>
            </ul>
        </div>
        <div class="rf-color-picker">
            <h1>Colour</h1>
            <ul>
                <li class="selector colour-picker-list" data-click="Red">Red</li>
                <li class="selector colour-picker-list" data-click="Blue">Blue</li>
                <li class="selector colour-picker-list" data-click="Green">Green</li>
                <li class="selector colour-picker-list" data-click="Yellow">Yellow</li>
                <li class="selector colour-picker-list" data-click="Orange">Orange</li>
                <li class="selector colour-picker-list" data-click="Pink">Pink</li>
                <li class="selector colour-picker-list" data-click="Purple">Purple</li>
                <li class="selector colour-picker-list" data-click="Black">Black</li>
                <li class="selector colour-picker-list" data-click="White">White</li>
            </ul>
        </div>
        <div class="rf-size-picker">
            <h1>Space</h1>
            <ul>
                <li class="selector" data-click="Living Room">Living Room</li>
                <li class="selector" data-click="Office">Office</li>
                <li class="selector" data-click="Studio">Studio</li>
                <li class="selector" data-click="Bathroom">Bathroom</li>
                <li class="selector" data-click="Bedroom">Bedroom</li>
                <li class="selector" data-click="Kids room">Kids room</li>
                <!-- <li class="selector size-picker-list" data-click="A5">A5</li>
                <li class="selector size-picker-list" data-click="A3">A3</li>
                <li class="selector size-picker-list" data-click="A2">A2</li>
                <li class="selector size-picker-list" data-click="A1">A1</li> -->
            </ul>
        </div>
        <div class="rf-reset">
            <div class="rf-reset-button">Reset filters</div>
        </div>
    </div>
    <div class="rf-new-shop">
      <div class="rf-sale-banner">
        <div class="rf-sale-strap">
          <?php get_template_part('sale_svg') ?>
        </div>
      </div>
        <h1 class="rf-shop-title-update">All products</h1>
        <p>Showing <span class="rf-shop-amount-update"></span></p>
        <ul class="rf-shop-container">
        </ul>
    </div>
</div>
<div class="rf-wrapper">
    <div class="rf-new-shop__loader">
        <span class="rf-load-more">Load More</span> <span class="rf-pagination-update"></span>
    </div>
</div>
<?php get_template_part('themes') ?>
<?php get_footer(); ?>
