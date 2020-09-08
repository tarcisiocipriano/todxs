<?php
/**
 * The template for the sidebar containing the main widget area
 * 
 * @package Todxs
 */
?>

<?php if( is_active_sidebar( 'todxs-sidebar-1' ) ): ?>
  <aside class="col-12 col-md-4 col-lg-3 h-100">
    <?php dynamic_sidebar( 'todxs-sidebar-1' ); ?>
  </aside>
<?php endif;