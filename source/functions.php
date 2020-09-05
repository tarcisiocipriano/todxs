<?php
/**
 * Todxs functions and definitions
 * 
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 * 
 * @package Todxs
 */

function todxs_scripts() {
  // after finish, change the filemtime() function to '1.0'
  wp_enqueue_style( 'todxs-style', get_template_directory_uri() . '/stylesheets/main.css', array(), filemtime( get_template_directory() . '/stylesheets/main.css' ), 'all' );
  wp_enqueue_script( 'todxs_script_vendors', get_template_directory_uri() . '/scripts/vendors.js', array(), '1.0', true );
  wp_enqueue_script( 'todxs_script_main', get_template_directory_uri() . '/scripts/main.js', array(), '1.0', true );
}
add_action( 'wp_enqueue_scripts', 'todxs_scripts' );

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