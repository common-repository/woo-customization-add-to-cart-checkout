<?php

/**
 * Clase principal
 * copyright Enrique J. Ros - enrique@enriquejros.com
 *
 * @link 			http://wpaccuracy.com
 * @since 			1.0
 * @package 		Add to cart customization
 *
 */
 
defined ('ABSPATH') or exit;

if (class_exists ('wpwc_wpwcss_cart')):


class wpwc_wpwcss_cart {
    public function __construct()
    {
	  add_filter('woocommerce_product_single_add_to_cart_text', array($this,'wpwc_single_page_customiz')); 
	  add_filter('woocommerce_product_add_to_cart_text', array($this,'wpwc_shop_page_customiz'));  
    }
	/*
	 * @since 			1.0
    * @package 		Add to cart customization get option value and filter wtih custom text to default shop page
       *
    */
 function wpwc_shop_page_customiz() {
	       if(get_option('_add_to_cart_simple_every_type') =='on' && get_option('_add_to_cart_globel') !=='' ){
			   $add_to_cart_shope = esc_attr (get_option ('_add_to_cart_globel'));
			   return __($add_to_cart_shope, 'woocommerce');
			   }
	         global $product;
			$product_type = $product->get_type();
			$texto_single = __('Add to cart', 'woocommerce');
			$_add_to_cart_simple_shop = esc_attr (get_option ('_add_to_cart_simple_shop', __('Buy product', 'woocommerce')));
			$_add_to_cart_variable_shop = esc_attr (get_option ('_add_to_cart_variable_shop', __('View products', 'woocommerce')));
			$_add_to_cart_external_shop = esc_attr (get_option ('_add_to_cart_external_shop', __('Add to cart', 'woocommerce')));
			$_add_to_cart_booking_shop = esc_attr (get_option ('_add_to_cart_booking_shop', __('Select options', 'woocommerce')));
			$_add_to_cart_grouped_shop = esc_attr (get_option ('_add_to_cart_grouped_shop', __('Book now', 'woocommerce')));
			switch ($product_type) {
					case 'external':
				 $add_to_cart_shope = $_add_to_cart_external_shop;
						return $add_to_cart_shope;
						break;
					case 'grouped':
					 $add_to_cart_shope = $_add_to_cart_grouped_shop;
						return $add_to_cart_shope;
						break;
					case 'simple':
						 $add_to_cart_shope = $_add_to_cart_simple_shop;
						return $add_to_cart_shope;
						break;
					case 'variable':
					 $add_to_cart_shope = $_add_to_cart_variable_shop;
						return $add_to_cart_shope;
						break;
					case 'booking':
					$add_to_cart_shope = $_add_to_cart_booking_shop;
						return $add_to_cart_shope;
						break;
					default:
					$add_to_cart_shope = $texto_single;
						return $add_to_cart_shope;
					}
			 
    return __($add_to_cart_shope, 'woocommerce');
}
/*
	 * @since 			1.0
    * @package 		Add to cart customization get option value and filter wtih custom text to default on the signle product page
       *
    */
 function wpwc_single_page_customiz(){
	 if(get_option('_add_to_cart_simple_every_type') =='on' && get_option('_add_to_cart_globel') !=='' ){
			   $add_to_cart_shope = esc_attr (get_option ('_add_to_cart_globel'));
			   return __($add_to_cart_shope, 'woocommerce');
			   }
  global $product;
			$product_type = $product->get_type();
			$texto_single = __('Add to cart', 'woocommerce');
			$_add_to_cart_simple_shop = esc_attr (get_option ('_add_to_cart_simple_shop', __('Buy product', 'woocommerce')));
			$_add_to_cart_variable_shop = esc_attr (get_option ('_add_to_cart_variable_shop', __('View products', 'woocommerce')));
			$_add_to_cart_external_shop = esc_attr (get_option ('_add_to_cart_external_shop', __('Add to cart', 'woocommerce')));
			$_add_to_cart_booking_shop = esc_attr (get_option ('_add_to_cart_booking_shop', __('Select options', 'woocommerce')));
			$_add_to_cart_grouped_shop = esc_attr (get_option ('_add_to_cart_grouped_shop', __('Book now', 'woocommerce')));
			$_add_to_cart_simple_single = esc_attr (get_option ('_add_to_cart_simple_single', $texto_externo));
			$_add_to_cart_variable_single = esc_attr (get_option ('_add_to_cart_variable_single', $texto_single));
			$_add_to_cart_external_single = esc_attr (get_option ('_add_to_cart_external_single', $texto_single));
			$_add_to_cart_booking_single = esc_attr (get_option ('_add_to_cart_booking_single', $texto_single));
			$_add_to_cart_grouped_single = esc_attr (get_option ('_add_to_cart_grouped_single', $texto_bookable));
				switch ($product_type) {
					case 'external':
				 $add_to_cart_single = $_add_to_cart_external_single;
						return $add_to_cart_single;
						break;
					case 'grouped':
					  $add_to_cart_single = $_add_to_cart_grouped_shop;
						return $add_to_cart_single;
						break;
					case 'simple':
						 $add_to_cart_single = $_add_to_cart_simple_single;
						return $add_to_cart_single;
						break;
					case 'variable':
					 $add_to_cart_single = $_add_to_cart_variable_single;
						return $add_to_cart_single;
						break;
					case 'booking':
					$add_to_cart_single = $_add_to_cart_booking_single;
						return $add_to_cart_single;
						break;
					default:
					$add_to_cart_single = $texto_single;
						return $add_to_cart_single;
					}
  return __($add_to_cart_single, 'woocommerce');
    }
  }

 if (get_option('_add_to_cart_simple_enable') != 'on') {
	 return false;
 }
 $wpDribbble = new wpwc_wpwcss_cart();
endif;

