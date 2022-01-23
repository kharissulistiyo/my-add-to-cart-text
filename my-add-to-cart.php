<?php
/**
 * My Add to Cart Text
 *
 * @package     My Add to Cart Text
 * @author      kharisblank
 * @copyright   2022 kharisblank
 * @license     GPL-2.0+
 *
 * @my-add-to-cart-text
 * Plugin Name: My Add to Cart Text
 * Plugin URI:  https://easyfixwp.com/
 * Description: Add my own text to WooCommerce add to cart button.
 * Version:     0.0.1
 * Author:      kharisblank
 * Author URI:  https://easyfixwp.com
 * Text Domain: my-add-to-cart-text
 * License:     GPL-2.0+
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 *
 */

// Disallow direct access to file
defined( 'ABSPATH' ) or die( __('Not Authorized!', 'my-add-to-cart-text') );

function kharis_my_add_to_cart_text( $default, $product ) {
  
  global $product;
  
  $button_text = $default;

  if( 'outofstock' === $product->get_stock_status() ) {
    $button_text = __('Out of stock', 'my-add-to-cart-text');
  }

	return $button_text;
  
}

add_filter( 'woocommerce_product_add_to_cart_text', 'kharis_my_add_to_cart_text', 9999, 2 );