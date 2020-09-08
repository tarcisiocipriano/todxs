<?php
/**
 * The template for the sidebar containing the shop widget area
 * 
 * @package Todxs
 */
?>

<?php if( is_active_sidebar( 'todxs-sidebar-shop' ) ): ?>
  <?php dynamic_sidebar( 'todxs-sidebar-shop' ); ?>
<?php endif;