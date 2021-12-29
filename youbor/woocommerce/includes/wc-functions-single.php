<?php 
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

// ---------------------------------------------remove actions---------------------------------------
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_meta',  40 );
remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_product_data_tabs',  10 );

//--------------------------------------------	description product-----------------------------------------------
remove_action( 'woocommerce_single_product_summary', 'woocommerce_output_product_data_tabs',  10 );
add_action( 'woocommerce_single_product_summary', 'description', 10 );

function description() {
	?>
	<div class="person__desc">
		<?php the_content(); ?>
	</div>
	<?php
}

	//---------------------------------------------title product-----------------------------------------------
  remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_title',  5 );
  add_action( 'woocommerce_single_product_summary', 'single_title', 5 );
    
  function single_title() {
    if ( ! is_archive() ) {
  ?>
    <h4 class="person__name">
      <?php the_title(); ?>
    </h4>

  <?php
    }
  }

	//-----------------------------------Product price--------------
	remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_price',  10 );
	add_action( 'woocommerce_after_add_to_cart_quantity', 'woocommerce_template_single_price', 30 );