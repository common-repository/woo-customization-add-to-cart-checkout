<?php
/**
 * Clase principal
 *
 * @link 			http://wpaccuracy.com
 * @since 			1.0
 * @package 		Add to cart  and other custom option save using carbon fields
 *
 */
 
if ( ! defined( 'ABSPATH' ) ):
	exit;
endif;

use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action( 'carbon_fields_register_fields', 'wpwc_attach_theme_options' );
function wpwc_attach_theme_options() {
    //$icon_url =  plugins_url( 'img/icon.png', dirname(__FILE__) );
    Container::make( 'theme_options', 'WC Customization' )
       ->set_icon( 'dashicons-admin-customizer' )
        ->add_tab(__('Add to cart','wp-admin'), array(
            Field::make("checkbox", "add_to_cart_simple_enable",__( "Enable To Change Add to Cart botton Text"))
           ->set_option_value('on'),
			Field::make( 'separator', 'genral_text_change', __('Globel setting For any product type' )),
			 Field::make("checkbox", "add_to_cart_simple_every_type",__( "Enable if you To Change Add to Cart botton Text for any product type use below fields"))
           ->set_option_value('on'),
		   Field::make('text', 'add_to_cart_globel', __("add to cart change for any product type")),
		   Field::make( 'separator', 'shop_separator', __('Shop Page Customization' )),
            Field::make('text', 'add_to_cart_simple_shop', __("Add to cart simple product type in shop page")),
			Field::make('text', 'add_to_cart_variable_shop', __("add to cart variable product type shop page")),
			Field::make('text', 'add_to_cart_external_shop', __("add to cart external product type shop page")),
			Field::make('text', 'add_to_cart_booking_shop', __("add to cart booking product type shop page")),
			Field::make('text', 'add_to_cart_grouped_shop', __("add to cart grouped product type shop page")),
			Field::make( 'separator', 'single_separator', __('Single Product Page Customization' )),
			 
             Field::make('text', 'add_to_cart_simple_single', __("add to cart simple product in single page")),
			 Field::make('text', 'add_to_cart_variable_single', __("add to cart variable product in single page")),
			 Field::make('text', 'add_to_cart_external_single', __("add to cart external product in single page")),
			 Field::make('text', 'add_to_cart_booking_single', __("add to cart booking product in single page")),
			 Field::make('text', 'add_to_cart_grouped_single', __("add to cart grouped product in single page")),
        ))
		->add_tab(__('Checkout','wp-admin'), array(
                Field::make("checkbox", "checkout_enable",__( "Enable To Change checkbox Text"))
                ->set_option_value('on'),
				Field::make( 'separator', 'checkout_separator', __('Checkbox button Tex Change' )),
                Field::make('text', 'checkout_text', __("Checkbox Text Change")),
				Field::make("checkbox", "checkout_url_enable",__( "Enable To Change checkbox URL"))
                ->set_option_value('on'),
				Field::make('text', 'checkout_url', __("Checkbox URL Change")),
			
        ));
}