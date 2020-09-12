<?php

function todxs_post_types() {
  register_post_type('carousel', array(
    'public'    => true,
    'labels'    => array(
      'name'          => 'Carrossel',
      'add_new_item'  => 'Adicionar novo carrossel',
      'edit_item'     => 'Editar carrossel',
      'all_items'     => 'Todos os carrosséis',
      'singular_name' => 'Carrossel'
    ),
    'menu_icon' => 'dashicons-slides'
  ));
}
add_action( 'init', 'todxs_post_types' );