<?php

/**
 * Clase principal
 *
 * @link 			http://wpaccuracy.com
 * @since 			1.0
 * @package 		Checkout customization fuction select if enable to customiz checkout or not
 *
 */
 defined ('ABSPATH') or exit;
  add_action('woocommerce_proceed_to_checkout', 'wpwc_checkout_text_customiz', 20);
  function wpwc_checkout_text_customiz() {
		  $_checkout_text = 'Proceed to checkout';
            if (get_option('_checkout_enable') == 'on' && get_option('_checkout_text') !=='') {
			  $_checkout_text = esc_attr (get_option ('_checkout_text'));
			}
	    $checkout_url = WC()->cart->get_checkout_url();
	   if (get_option('_checkout_url_enable') == 'on' && get_option('_checkout_url') !=='') {
	  $checkout_url = esc_attr (get_option ('_checkout_url'));
 }
       ?>
       <a href="<?php echo $checkout_url; ?>" class="checkout-button button alt wc-forward mahar"><?php _e( $_checkout_text, 'woocommerce' ); ?></a>
       <?php
     }
?>