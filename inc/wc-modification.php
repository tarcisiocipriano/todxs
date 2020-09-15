<?php
/**
 * Template Overrides for WooCommerce pages
 * 
 * @link https://docs.woocommerce.com/document/woocommerce-theme-developer-handbook/#section-3
 * 
 * @package Todxs
 */
function todxs_wc_modify() {

  // remove sidebar
  remove_action( 'woocommerce_sidebar', 'woocommerce_get_sidebar' );

  // reposition rating in product
  remove_action( 'woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_rating', 5 );
  add_action( 'woocommerce_shop_loop_item_title', 'woocommerce_template_loop_rating', 11 );

  if ( is_shop() || is_product_category() ) {
    add_action( 'woocommerce_after_shop_loop_item_title', 'todxs_excerpt', 1 );
    function todxs_excerpt() {
      echo '<p>' . wp_trim_words(get_the_excerpt(), 10) . '</p>';
    }
  }

  /* -------------------- before main content -------------------- */
  // open the container and row
  add_action( 'woocommerce_before_main_content', 'todxs_open_container_row', 5 );
  function todxs_open_container_row() {
    echo '<div class="shop-content pt-3 pt-md-4"><div class="container">';
  }
  
  // open the col for the sidebar
  add_action( 'woocommerce_before_main_content', 'todxs_open_sidebar_tags', 6 );
  function todxs_open_sidebar_tags() {
    echo '<div class="sidebar-shop">';
  }

  add_action( 'woocommerce_before_main_content', 'woocommerce_get_sidebar', 7 );
  
  // close the col for the sidebar
  add_action( 'woocommerce_before_main_content', 'todxs_close_sidebar_tags', 8 );
  function todxs_close_sidebar_tags() {
    echo '</div>';
  }
  
  // the shop is automatically added on priority 10
  
  /* -------------------- after main content -------------------- */
  
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

  // remove privacy policy text from checkout page
  remove_action( 'woocommerce_checkout_terms_and_conditions', 'wc_checkout_privacy_policy_text', 20 );
  remove_action( 'woocommerce_checkout_terms_and_conditions', 'wc_terms_and_conditions_page_content', 30 );

}
add_action( 'wp', 'todxs_wc_modify' );