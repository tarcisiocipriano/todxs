<?php

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