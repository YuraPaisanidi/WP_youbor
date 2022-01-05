<?php 
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

//---------------------------------Remove actions--------------------
remove_action( 'woocommerce_before_main_content', 'woocommerce_breadcrumb',  20 );
remove_action( 'woocommerce_before_shop_loop', 'woocommerce_result_count',  20 );
remove_action( 'woocommerce_before_shop_loop', 'woocommerce_output_all_notices',  10 );
remove_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart', 10);


//--------------------------------Archive item thumb-------
remove_action ('woocommerce_before_shop_loop_item_title', 'woocommerce_template_loop_product_thumbnail', 10);
add_action ( 'woocommerce_before_shop_loop_item_title', 'woocommerce_shop_item_image', 10);

function woocommerce_shop_item_image() {
	?>
	
	<div class="star__img">
		<?php the_post_thumbnail(); ?>
	</div>
	<?php
}

//--------------------------------Archive item title-------------------------------------
remove_action ('woocommerce_shop_loop_item_title', 'woocommerce_template_loop_product_title', 10);
add_action ('woocommerce_shop_loop_item_title', 'woocommerce_shop_item_title', 10);
function woocommerce_shop_item_title() {
	?>
		<h3 class="h3 star__name"><?php the_title(); ?></h3>
	<?php
}

//------------------------------------Archive item exerpt------------
add_action( 'woocommerce_shop_loop_item_title', 'woocommerce_item_exerpt', 20);
function woocommerce_item_exerpt() {
	?>
		<p class="star__desc"><?php the_field('role'); ?></p>
	<?php
}

//-------------------------------------Archive item info wrap start--------------
add_action ('woocommerce_shop_loop_item_title', 'woocommerce_info_wrap_start', 5);
function woocommerce_info_wrap_start() {
	?>
		<div class="star__info">
	<?php
}

//-------------------------------------Archive item info wrap end--------------
add_action('woocommerce_after_shop_loop_item_title', 'woocommerce_info_wrap_end', 15);
function woocommerce_info_wrap_end() {
	?>
		</div>
	<?php
}
