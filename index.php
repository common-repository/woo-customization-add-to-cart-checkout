<?php
/**
 *
 * @link              		https://www.enriquejros.com
 * @since             		1.0.0
 * @package           		AddToCart
 *
 * @wordpress-plugin
 * Plugin Name: 			Woo customization , Add to cart, Checkout
 * Description: 			Customization woocommerce Defulat text like Add to cart customize and every kind of product Indvadually add to cart button text change and you can customize checkout text lable
 * Plugin URI: 				https://www.sialstore.com/plugins/
 * Author: 					Mahar Ishaq
 * Version: 				1.0
 * Requires at least:		3.7
 * Tested up to:			5.0
 * WC requires at least:	2.3.0
 * WC tested up to: 		3.2.0
 *
 */
 add_action( 'admin_init', 'setup_scripts_styles' , 20);
 add_action( 'admin_init', 'setup_scripts_script' , 20);
 function setup_scripts_styles() {
				wp_register_style( 'style_css', plugins_url( '/inc/css/style.css', __FILE__ ) );
				wp_enqueue_style( 'style_css' );
			}
			
 		function setup_scripts_script() {
				wp_enqueue_script( 'script_js', plugins_url( '/inc/js/script.js', __FILE__ ), array( 'jquery' ) );
			}
			
defined ('ABSPATH') or exit;
if(!defined('Carbon_Fields_Plugin\PLUGIN_FILE')){ // CHECK IF CARBON ALREADY EXIST OR NOT
    include 'inc/option_fields/carbon-fields-plugin.php';
}
if(!function_exists('carbon_fields_add_settings')){ // CHECK IF CARBON ALREADY EXIST OR NOT
    include 'inc/option_fields/carbon-fields-plugin.php';
}
require_once( 'inc/wc_add_option.php' );
require_once( 'inc/wc_cart_class.php' );
require_once( 'inc/wc_checkout_class.php' );


 