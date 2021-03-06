<?php
/**
 * Template for displaying search forms in Todxs
 *
 * @package WordPress
 */
?>

<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
  <!-- <div id="pride" style="transform: scale(2); height: 40px; width: 50px; margin-left: 17px; margin-right: -6px"></div> -->
  <input type="search" class="search-field" placeholder="<?php echo esc_attr_x( 'Pesquisar &hellip;', 'placeholder', 'todxs' ); ?>" value="<?php echo get_search_query(); ?>" name="s" />
  <button type="submit" class="search-submit"><span class="screen-reader-text"><?php echo _x( 'Search', 'submit button', 'todxs' ); ?></span></button>
  
  <!-- search for products if woocommerce is activated -->
  <?php if ( class_exists( 'WooCommerce' ) ): ?>
    <input type="hidden" value="product" name="post_type" id="post_type" />
  <?php endif; ?>
</form>
