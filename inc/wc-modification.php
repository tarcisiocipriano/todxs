<?php
/**
 * Template Overrides for WooCommerce pages
 * 
 * @link https://docs.woocommerce.com/document/woocommerce-theme-developer-handbook/#section-3
 * 
 * @package Todxs
 */
function todxs_wc_modify() {

  /* -------------------- before main content -------------------- */
  // open the container and row
  add_action( 'woocommerce_before_main_content', 'todxs_open_container_row', 5 );
  function todxs_open_container_row() {
    echo '<div class="container shop-content"><div class="row">';
  }
  
  // remove sidebar
  remove_action( 'woocommerce_sidebar', 'woocommerce_get_sidebar' );

  if ( is_shop() || is_product_category() ) {

    // open the col for the sidebar
    add_action( 'woocommerce_before_main_content', 'todxs_open_sidebar_tags', 6 );
    function todxs_open_sidebar_tags() {
      echo '<div class="sidebar-shop col-md-4 col-lg-3 order-2 order-md-1">';
    }

    // add sidebar
    add_action( 'woocommerce_before_main_content', 'woocommerce_get_sidebar', 7 );
    
    // close the col for the sidebar
    add_action( 'woocommerce_before_main_content', 'todxs_close_sidebar_tags', 8 );
    function todxs_close_sidebar_tags() {
      echo '</div>';
    }

    add_action( 'woocommerce_after_shop_loop_item_title', 'the_excerpt', 1 );
  }
  
  // open the col for the shop
  add_action( 'woocommerce_before_main_content', 'todxs_open_shop_tags', 9 );
  function todxs_open_shop_tags() {
    if ( is_shop() || is_product_category()) {
      echo '<div class="col-md-8 col-lg-9 order-1 order-md-2">';
    } else {
      echo '<div class="col">';
    }
  }
  
  // the shop is automatically added on priority 10
  
  /* -------------------- after main content -------------------- */
  // close the col for the shop
  add_action( 'woocomerce_after_main_content', 'todxs_close_shop_tags', 4 );
  function todxs_close_shop_tags() {
    echo '</div>';
  }
  
  // close the container and row
  add_action( 'woocommerce_after_main_content', 'todxs_close_container_row', 5 );
  function todxs_close_container_row() {
    echo '</div></div>';
  }
  
  /* -------------------- remove shop title -------------------- */
  /* add_filter( 'woocommerce_show_page_title', 'todxs_remove_shop_title' );
  function todxs_remove_shop_title() {
    return false;
  } */
  
}
add_action( 'wp', 'todxs_wc_modify' );