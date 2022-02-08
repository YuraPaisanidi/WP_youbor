<?php
/**
 * The Template for displaying wishlist if a current user is owner.
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/ti-wishlist.php.
 *
 * @version             1.24.5
 * @package           TInvWishlist\Template
 */

if (!defined('ABSPATH')) {
	exit; // Exit if accessed directly.
}
wp_enqueue_script('tinvwl');
?>

<div class="favorite__wrap">
	<div class="sidebar"> 
		<?php 
		wp_nav_menu( array(
		'menu'=>'user_menu',
		'menu_class'=>'sidebar',
		'theme_location'=>'menu',
		) );
		?>
	</div>
	
	<div class="tinv-wishlist woocommerce tinv-wishlist-clear">
		<!-- <?php do_action('tinvwl_before_wishlist', $wishlist); ?> -->
		<?php if (function_exists('wc_print_notices') && isset(WC()->session)) {
			wc_print_notices();
		} ?>
		<?php
		$wl_paged = absint(get_query_var('wl_paged'));
		$form_url = tinv_url_wishlist($wishlist['share_key'], $wl_paged, true);
		?>
		<form action="<?php echo esc_url($form_url); ?>" method="post" autocomplete="off">
			<?php do_action('tinvwl_before_wishlist_table', $wishlist); ?>
	
			<div class="stars__container favorite__content">
				<?php do_action('tinvwl_wishlist_contents_before'); ?>
	
				<?php
	
				global $product, $post;
				// store global product data.
				$_product_tmp = $product;
				// store global post data.
				$_post_tmp = $post;
	
				foreach ($products as $wl_product) {
	
					if (empty($wl_product['data'])) {
						continue;
					}
	
					// override global product data.
					$product = apply_filters('tinvwl_wishlist_item', $wl_product['data']);
					// override global post data.
					$post = get_post($product->get_id());
	
					unset($wl_product['data']);
					if ($wl_product['quantity'] > 0 && apply_filters('tinvwl_wishlist_item_visible', true, $wl_product, $product)) {
						$product_url = apply_filters('tinvwl_wishlist_item_url', $product->get_permalink(), $wl_product, $product);
						do_action('tinvwl_wishlist_row_before', $wl_product, $product);
						?>
						<div class="star__item">
							<?php if (isset($wishlist_table['colm_checkbox']) && $wishlist_table['colm_checkbox']) { ?>
							<?php } ?>
							<div class="star__img">
								<?php
								$thumbnail = apply_filters('tinvwl_wishlist_item_thumbnail', $product->get_image(), $wl_product, $product);
	
								if (!$product->is_visible()) {
									echo $thumbnail; // WPCS: xss ok.
								} else {
									printf('<a href="%s">%s</a>', esc_url($product_url), $thumbnail); // WPCS: xss ok.
								}
								?>
							</div>
	
							<div class="star__info">
	
								<div class="h3 star__name">
									<?php
									if (!$product->is_visible()) {
										echo apply_filters('tinvwl_wishlist_item_name', is_callable(array(
														$product,
														'get_name'
												)) ? $product->get_name() : $product->get_title(), $wl_product, $product) . '&nbsp;'; // WPCS: xss ok.
									} else {
										echo apply_filters('tinvwl_wishlist_item_name', sprintf('<a href="%s">%s</a>', esc_url($product_url), is_callable(array(
												$product,
												'get_name'
										)) ? $product->get_name() : $product->get_title()), $wl_product, $product); // WPCS: xss ok.
									}
		
									echo apply_filters('tinvwl_wishlist_item_meta_data', tinv_wishlist_get_item_data($product, $wl_product), $wl_product, $product); // WPCS: xss ok.
									?>
								</div>
								<?php if (isset($wishlist_table_row['colm_price']) && $wishlist_table_row['colm_price']) { ?>
									<div class="star__price">
										<?php
										echo apply_filters('tinvwl_wishlist_item_price', $product->get_price_html(), $wl_product, $product); // WPCS: xss ok.
										?>
									</div>
								<?php } ?>
								<?php if (isset($wishlist_table_row['colm_date']) && $wishlist_table_row['colm_date']) { ?>
								<?php } ?>
								<?php if (isset($wishlist_table_row['colm_stock']) && $wishlist_table_row['colm_stock']) { ?>
								<?php } ?>
								<?php if (isset($wishlist_table_row['add_to_cart']) && $wishlist_table_row['add_to_cart']) { ?>
								<?php } ?>
							</div>
						</div>
						<?php
						do_action('tinvwl_wishlist_row_after', $wl_product, $product);
					} // End if().
				} // End foreach().
				// restore global product data.
				$product = $_product_tmp;
				// restore global post data.
				$post = $_post_tmp;
				?>
				<?php do_action('tinvwl_wishlist_contents_after'); ?>
				<!-- <tfoot>
				<tr>
					<td colspan="100">
						<?php do_action('tinvwl_after_wishlist_table', $wishlist); ?>
						<?php wp_nonce_field('tinvwl_wishlist_owner', 'wishlist_nonce'); ?>
					</td>
				</tr>
				</tfoot> -->
			</div>
		</form>
		<?php do_action('tinvwl_after_wishlist', $wishlist); ?>
		<div class="tinv-lists-nav tinv-wishlist-clear">
			<?php do_action('tinvwl_pagenation_wishlist', $wishlist); ?>
		</div>
	</div>
</div>
