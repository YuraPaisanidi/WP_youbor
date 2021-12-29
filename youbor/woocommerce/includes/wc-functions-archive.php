<?php 
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

//---------------------------------Remove actions--------------------
remove_action( 'woocommerce_before_main_content', 'woocommerce_breadcrumb',  20 );
remove_action( 'woocommerce_before_shop_loop', 'woocommerce_result_count',  20 );
remove_action( 'woocommerce_before_shop_loop', 'woocommerce_output_all_notices',  10 );