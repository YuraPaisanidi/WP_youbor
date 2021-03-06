<?php

/**
 * WooCommerce Compatibility File
 *
 * @link https://woocommerce.com/
 *
 * @package project
 */

/**
 * WooCommerce setup function.
 *
 * @link https://docs.woocommerce.com/document/third-party-custom-theme-compatibility/
 * @link https://github.com/woocommerce/woocommerce/wiki/Enabling-product-gallery-features-(zoom,-swipe,-lightbox)-in-3.0.0
 *
 * @return void
 */
function project_woocommerce_setup()
{
	add_theme_support('woocommerce');
	add_theme_support('wc-product-gallery-zoom');
	// add_theme_support('wc-product-gallery-lightbox');
	add_theme_support('wc-product-gallery-slider');
}
add_action('after_setup_theme', 'project_woocommerce_setup');

/**
 * WooCommerce specific scripts & stylesheets.
 *
 * @return void
 */
// function project_woocommerce_scripts() {
// 	wp_enqueue_style( 'project-woocommerce-style', get_template_directory_uri() . '/woocommerce.css' );

// 	$font_path   = WC()->plugin_url() . '/assets/fonts/';
// 	$inline_font = '@font-face {
// 			font-family: "star";
// 			src: url("' . $font_path . 'star.eot");
// 			src: url("' . $font_path . 'star.eot?#iefix") format("embedded-opentype"),
// 				url("' . $font_path . 'star.woff") format("woff"),
// 				url("' . $font_path . 'star.ttf") format("truetype"),
// 				url("' . $font_path . 'star.svg#star") format("svg");
// 			font-weight: normal;
// 			font-style: normal;
// 		}';

// 	wp_add_inline_style( 'project-woocommerce-style', $inline_font );
// }
// add_action( 'wp_enqueue_scripts', 'project_woocommerce_scripts' );

/**
 * Disable the default WooCommerce stylesheet.
 *
 * Removing the default WooCommerce stylesheet and enqueing your own will
 * protect you during WooCommerce core updates.
 *
 * @link https://docs.woocommerce.com/document/disable-the-default-stylesheet/
 */

/**
 * Add 'woocommerce-active' class to the body tag.
 *
 * @param  array $classes CSS classes applied to the body tag.
 * @return array $classes modified to include 'woocommerce-active' class.
 */
function project_woocommerce_active_body_class($classes)
{
	$classes[] = 'woocommerce-active';

	return $classes;
}
add_filter('body_class', 'project_woocommerce_active_body_class');

/**
 * Products per page.
 *
 * @return integer number of products.
 */
function project_woocommerce_products_per_page()
{
	return 12;
}
add_filter('loop_shop_per_page', 'project_woocommerce_products_per_page');

/**
 * Product gallery thumnbail columns.
 *
 * @return integer number of columns.
 */
function project_woocommerce_thumbnail_columns()
{
	return 4;
}
add_filter('woocommerce_product_thumbnails_columns', 'project_woocommerce_thumbnail_columns');

/**
 * Default loop columns on product archives.
 *
 * @return integer products per row.
 */
function project_woocommerce_loop_columns()
{
	return 3;
}
add_filter('loop_shop_columns', 'project_woocommerce_loop_columns');

/**
 * Related Products Args.
 *
 * @param array $args related products args.
 * @return array $args related products args.
 */
function project_woocommerce_related_products_args($args)
{
	$defaults = array(
		'posts_per_page' => 4,
		'columns'        => 4,
	);

	$args = wp_parse_args($defaults, $args);

	return $args;
}
add_filter('woocommerce_output_related_products_args', 'project_woocommerce_related_products_args');

if (!function_exists('project_woocommerce_product_columns_wrapper')) {
	/**
	 * Product columns wrapper.
	 *
	 * @return  void
	 */
	function project_woocommerce_product_columns_wrapper()
	{
		$columns = project_woocommerce_loop_columns();
		echo '<div class="columns-' . absint($columns) . '">';
	}
}
add_action('woocommerce_before_shop_loop', 'project_woocommerce_product_columns_wrapper', 40);

if (!function_exists('project_woocommerce_product_columns_wrapper_close')) {
	/**
	 * Product columns wrapper close.
	 *
	 * @return  void
	 */
	function project_woocommerce_product_columns_wrapper_close()
	{
		echo '</div>';
	}
}
add_action('woocommerce_after_shop_loop', 'project_woocommerce_product_columns_wrapper_close', 40);

/**
 * Remove default WooCommerce wrapper.
 */
remove_action('woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10);
remove_action('woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10);

if (!function_exists('project_woocommerce_wrapper_before')) {
	/**
	 * Before Content.
	 *
	 * Wraps all WooCommerce content in wrappers which match the theme markup.
	 *
	 * @return void
	 */
	function project_woocommerce_wrapper_before()
	{
?>
			<header class="header header--dark">
				<div class="header__container container">

					<div class="header__wrap">
						<a href="/" class="header__logo">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.svg" alt="">
						</a>
			
						<div class="header__search">
							<?php echo do_shortcode( '[aws_search_form]' ); ?>
						</div>
			
						<div class="header__lang">
							<div class="header__lang_item">
								<span>RU</span>
								<img src="<?php echo get_template_directory_uri(); ?>/assets/img/arrow.svg" alt="">
							</div>
							<ul class="header__lang_submenu">
								<li>
									<a href="#">UZ</a>
								</li>
							</ul>
						</div>
			
						<div class="header__auth">
							<a href="<?php echo get_home_url(); ?>/login" class="header__btn header__btn--auth btn">
								??????????????????????
							</a>
							<a href="<?php echo get_home_url(); ?>/my-account" class="header__btn header__btn--profile btn hidden">
								?????? ??????????????
							</a>
							<?php 
								wp_nav_menu( array(
									'menu'=>'user_menu',
									'menu_class'=>'header__auth_submenu',
										'theme_location'=>'menu',
								) );
							?>
						</div>

						<button class="hamburger" type="button">
							<span class="hamburger__item"></span>
						</button>
					</div>

					<div class="header__search header__search--mobile">
						<?php echo do_shortcode( '[aws_search_form]' ); ?>
					</div>
				</div>

			</header>
			<main id="main" class="site-main main">
				<div class="person__container container">

				
			<?php
		}
	}
	add_action('woocommerce_before_main_content', 'project_woocommerce_wrapper_before');

	if (!function_exists('project_woocommerce_wrapper_after')) {
		/**
		 * After Content.
		 *
		 * Closes the wrapping divs.
		 *
		 * @return void
		 */
		function project_woocommerce_wrapper_after()
		{
			?>
				</div>
			</main><!-- #main -->
	<?php
		}
	}
	add_action('woocommerce_after_main_content', 'project_woocommerce_wrapper_after');

	/**
	 * Sample implementation of the WooCommerce Mini Cart.
	 *
	 * You can add the WooCommerce Mini Cart to header.php like so ...
	 *
		<?php
		if ( function_exists( 'project_woocommerce_header_cart' ) ) {
			project_woocommerce_header_cart();
		}
		?>
	 */

	if (!function_exists('project_woocommerce_cart_link_fragment')) {
		/**
		 * Cart Fragments.
		 *
		 * Ensure cart contents update when products are added to the cart via AJAX.
		 *
		 * @param array $fragments Fragments to refresh via AJAX.
		 * @return array Fragments to refresh via AJAX.
		 */
		function project_woocommerce_cart_link_fragment($fragments)
		{
			ob_start();
			project_woocommerce_cart_link();
			$fragments['a.cart-contents'] = ob_get_clean();

			return $fragments;
		}
	}
	add_filter('woocommerce_add_to_cart_fragments', 'project_woocommerce_cart_link_fragment');

	if (!function_exists('project_woocommerce_cart_link')) {
		/**
		 * Cart Link.
		 *
		 * Displayed a link to the cart including the number of items present and the cart total.
		 *
		 * @return void
		 */
		function project_woocommerce_cart_link()
		{
	?>
		<a class="cart-contents" href="<?php echo esc_url(wc_get_cart_url()); ?>" title="<?php esc_attr_e('View your shopping cart', 'project'); ?>">
			<?php
			$item_count_text = sprintf(
				/* translators: number of items in the mini cart. */
				_n('%d item', '%d items', WC()->cart->get_cart_contents_count(), 'project'),
				WC()->cart->get_cart_contents_count()
			);
			?>
			<span class="amount"><?php echo wp_kses_data(WC()->cart->get_cart_subtotal()); ?></span> <span class="count"><?php echo esc_html($item_count_text); ?></span>
		</a>
	<?php
		}
	}

	if (!function_exists('project_woocommerce_header_cart')) {
		/**
		 * Display Header Cart.
		 *
		 * @return void
		 */
		function project_woocommerce_header_cart()
		{
			if (is_cart()) {
				$class = 'current-menu-item';
			} else {
				$class = '';
			}
	?>
		<ul id="site-header-cart" class="site-header-cart">
			<li class="<?php echo esc_attr($class); ?>">
				<?php project_woocommerce_cart_link(); ?>
			</li>
			<li>
				<?php
				$instance = array(
					'title' => '',
				);

				the_widget('WC_Widget_Cart', $instance);
				?>
			</li>
		</ul>
	<?php
		}
	}

	add_action('wp_ajax_ql_woocommerce_ajax_add_to_cart', 'ql_woocommerce_ajax_add_to_cart');

	add_action('wp_ajax_nopriv_ql_woocommerce_ajax_add_to_cart', 'ql_woocommerce_ajax_add_to_cart');

	function ql_woocommerce_ajax_add_to_cart()
	{

		$product_id = apply_filters('ql_woocommerce_add_to_cart_product_id', absint($_POST['product_id']));

		$quantity = empty($_POST['quantity']) ? 1 : wc_stock_amount($_POST['quantity']);

		$variation_id = absint($_POST['variation_id']);

		$passed_validation = apply_filters('ql_woocommerce_add_to_cart_validation', true, $product_id, $quantity);

		$product_status = get_post_status($product_id);

		if ($passed_validation && WC()->cart->add_to_cart($product_id, $quantity, $variation_id) && 'publish' === $product_status) {

			do_action('ql_woocommerce_ajax_added_to_cart', $product_id);

			if ('yes' === get_option('ql_woocommerce_cart_redirect_after_add')) {

				wc_add_to_cart_message(array($product_id => $quantity), true);
			}

			WC_AJAX::get_refreshed_fragments();
		} else {

			$data = array(

				'error' => true,

				'product_url' => apply_filters('ql_woocommerce_cart_redirect_after_error', get_permalink($product_id), $product_id)
			);

			echo wp_send_json($data);
		}

		wp_die();
	}


//-----------Redirect to checkout without cart page---------
add_filter('add_to_cart_redirect', 'tb_skip_cart_page');
function tb_skip_cart_page () {
 global $woocommerce;
 $redirect_checkout = $woocommerce->cart->get_checkout_url();
 return $redirect_checkout;
}

//-------------------Disable "Add to cart" notification
add_filter( 'wc_add_to_cart_message_html', '__return_false' );


//----------------------Limit 1 product-------------------
function custom_maybe_empty_cart( $valid, $product_id, $quantity ) {

	if( ! empty ( WC()->cart->get_cart() ) && $valid ){
			WC()->cart->empty_cart();
			// wc_add_notice( 'Only allowed 1 item in cart, please remove previous item.', 'error' );
	}

	return $valid;

}
add_filter( 'woocommerce_add_to_cart_validation', 'custom_maybe_empty_cart', 10, 3 );

add_filter( 'woocommerce_enable_order_notes_field', '__return_false', 9999 );

// Remove Order Notes Field

add_filter( 'woocommerce_checkout_fields' , 'njengah_order_notes' );

function njengah_order_notes( $fields ) {

unset($fields['order']['order_comments']);

return $fields;

}

