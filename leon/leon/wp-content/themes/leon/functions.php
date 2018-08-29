<?php
    function adds_styles_scripts_to_head() {
    wp_register_script( 'cookie', get_template_directory_uri() . '/js/js.cookie.js?&nocache=1', '', null, 'true');
    wp_register_script( 'main', get_template_directory_uri() . '/js/main.js?&nocache=1', '', null, 'true');
    wp_register_style( 'style', get_template_directory_uri() . '/style.css?&nocache=1','','', 'all' );
    wp_enqueue_script( 'cookie' );
    wp_enqueue_script( 'main' );
    wp_enqueue_style( 'style' );
    }
    add_action( 'wp_enqueue_scripts', 'adds_styles_scripts_to_head' );
?>
<?php
    function register_my_menus() {
      register_nav_menus(
        array(
          'site-menu' => __( 'Site Menu' ),
          'product-menu' => __( 'Product Menu' ),
          'secondary-menu' => __( 'Secondary Menu' )
        )
      );
    }
    add_action( 'init', 'register_my_menus' );
?>
<?php
    function wpdocs_custom_excerpt_length( $length ) {
        return 20;
    }
    add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );
?>
<?php
function exclude_post_categories($excl='', $spacer=' ') {
  $categories = get_the_category($post->ID);
  if (!empty($categories)) {
    $exclude = $excl;
    $exclude = explode(",", $exclude);
    $thecount = count(get_the_category()) - count($exclude);
    foreach ($categories as $cat) {
      $html = '';
      if (!in_array($cat->cat_ID, $exclude)) {
        $html .= '<a href="' . get_category_link($cat->cat_ID) . '" ';
        $html .= 'title="' . $cat->cat_name . '">' . $cat->cat_name . '</a>';
        if ($thecount > 0) {
          $html .= $spacer;
        }
        $thecount--;
        echo $html;
      }
    }
  }
}
?>
