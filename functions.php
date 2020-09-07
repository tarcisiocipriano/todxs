<?php
/**
 * Todxs functions and definitions
 * 
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 * 
 * @package Todxs
 */

// register custom navigation walker
require_once get_template_directory() . '/inc/class-wp-bootstrap-navwalker.php';

function todxs_scripts() {
  // after finish, change the filemtime() function to '1.0'
  wp_enqueue_style( 'todxs-style', get_template_directory_uri() . '/stylesheets/main.css', array(), filemtime( get_template_directory() . '/stylesheets/main.css' ), 'all' );
  wp_enqueue_script( 'todxs_script_vendors', get_template_directory_uri() . '/scripts/vendors.js', array(), '1.0', true );
  wp_enqueue_script( 'todxs_script_main', get_template_directory_uri() . '/scripts/main.js', array(), '1.0', true );

  wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css2?family=Rajdhani:wght@400;500;600;700&display=swap|https://fonts.googleapis.com/css2?family=Seaweed+Script&display=swap' );
}
add_action( 'wp_enqueue_scripts', 'todxs_scripts' );

function todxs_config() {
  
  // add support to browser tab's title
  add_theme_support('title-tag');
  
  // add support to logo customization
  add_theme_support( 'custom-logo', array(
    'width'       => 160,
    'height'      => 85,
    'flex_width'  => true,
    'flex_height' => true
  ));

  // register menus
  register_nav_menus(
    array(
      'todxs_main_menu'   => 'Todxs Main Menu',
      'todxs_footer_menu' => 'Todxs Footer Menu'
    )
  );

  // add supoort to woocommerce
  add_theme_support( 'woocommerce', array(
    'thumbnail_image_width' => 255,
    'single_image_width'    => 255,
    'product_grid'          => array(
      'default_rows'       => 10,
      'min_rows'           => 5,
      'max_rows'           => 10,
      'default_columns'    => 1,
      'min_columns'        => 1,
      'max_columns'        => 1
    )
  ));
  add_theme_support( 'wc-product-gallery-zoom' );
  add_theme_support( 'wc-product-gallery-lightbox' );
  add_theme_support( 'wc-product-gallery-slider' );

  if ( ! isset( $content_width ) ) {
    $content_width = 600;
  }
}
add_action( 'after_setup_theme', 'todxs_config', 0 );

/**
 * only modify wc files if woocommerce is activated
 */ 
if ( class_exists( 'WooCommerce' ) ) {
  require get_template_directory() . '/inc/wc-modification.php';
}

/**
 * Show cart contents / total Ajax
 */
add_filter( 'woocommerce_add_to_cart_fragments', 'todxs_woocommerce_header_add_to_cart_fragment' );

function todxs_woocommerce_header_add_to_cart_fragment( $fragments ) {
	global $woocommerce;

	ob_start();

  ?>
  <span class="cart__quantity"><?php echo WC()->cart->get_cart_contents_count(); ?></span>
	<?php
	$fragments['span.cart__quantity'] = ob_get_clean();
	return $fragments;
}