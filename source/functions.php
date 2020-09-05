<?php

function theme_styles() {
  wp_enqueue_style('theme_style', get_theme_file_uri('/stylesheets/main.css'));
  wp_enqueue_script('theme_script1', get_theme_file_uri("/scripts/vendors.js"));
  wp_enqueue_script('theme_script2', get_theme_file_uri("/scripts/main.js"));
}
add_action('wp_enqueue_scripts', 'theme_styles');

function theme_features() {
  add_theme_support('title-tag');
}
add_action('after_setup_theme', 'theme_features');


// add_theme_support('menus');
// register_nav_menus(
//   array(
//     'top-menu' => 'Main Menu'
//   )
// );

function mytheme_add_woocommerce_support() {
  add_theme_support( 'woocommerce' );
}

add_action( 'after_setup_theme', 'mytheme_add_woocommerce_support' );