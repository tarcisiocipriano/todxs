<?php

function todxs_sidebars() {
  register_sidebar(array(
    'name'          => 'Todxs Main Sidebar',
    'id'            => 'todxs-sidebar-1',
    'description'   => 'Drag and drop your widgets here',
    'before_widget' => '<div id="%1$s" class="widget %2$s widget-wrapper">',
    'after_widget'  => '</div>',
    'before_title'  => '<h4 class="widget-title">',
    'after_title'   => '</h4>'
  ));
  register_sidebar(array(
    'name'          => 'Shop Sidebar',
    'id'            => 'todxs-sidebar-shop',
    'description'   => 'Drag and drop your WooCommerce widgets here',
    'before_widget' => '<div id="%1$s" class="widget %2$s widget-wrapper">',
    'after_widget'  => '</div>',
    'before_title'  => '<h4 class="widget-title">',
    'after_title'   => '</h4>'
  ));
  register_sidebar(array(
    'name'          => 'Footer Sidebar 1',
    'id'            => 'todxs-sidebar-footer-1',
    'description'   => 'Drag and drop your widgets here',
    'before_widget' => '<div id="%1$s" class="widget %2$s widget-wrapper">',
    'after_widget'  => '</div>',
    'before_title'  => '<h4 class="widget-title">',
    'after_title'   => '</h4>'
  ));
  register_sidebar(array(
    'name'          => 'Footer Sidebar 2',
    'id'            => 'todxs-sidebar-footer-2',
    'description'   => 'Drag and drop your widgets here',
    'before_widget' => '<div id="%1$s" class="widget %2$s widget-wrapper">',
    'after_widget'  => '</div>',
    'before_title'  => '<h4 class="widget-title">',
    'after_title'   => '</h4>'
  ));
  register_sidebar(array(
    'name'          => 'Footer Sidebar 3',
    'id'            => 'todxs-sidebar-footer-3',
    'description'   => 'Drag and drop your widgets here',
    'before_widget' => '<div id="%1$s" class="widget %2$s widget-wrapper">',
    'after_widget'  => '</div>',
    'before_title'  => '<h4 class="widget-title">',
    'after_title'   => '</h4>'
  ));
}
add_action( 'widgets_init', 'todxs_sidebars' );