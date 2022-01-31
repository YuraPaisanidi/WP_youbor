<?php
/**
 * Related Products
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/related.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see         https://docs.woocommerce.com/document/template-structure/
 * @package     WooCommerce\Templates
 * @version     3.9.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( $related_products ) : ?>


	<?php if( have_rows('video_galery') ): ?>
		<section class="video">
			<h3 class="h3 video__title">Лучшие видео</h3>
			<div class="video__wrap">
				<?php while( have_rows('video_galery') ): the_row(); 
				$video = get_sub_field('video');
				?>
					<div class="video__item">
						<iframe width="640" height="360" src="<?php echo $video; ?>" frameborder="0" scrolling="no" allowfullscreen></iframe>
					</div>
				<?php endwhile; ?>
			</div>
		</section>
	<?php endif; ?>


	<section class="other">
		<div class="other__container container">

		<?php
		$heading = apply_filters( 'woocommerce_product_related_products_heading', __( 'Вас также заитересуют', 'woocommerce' ) );

		if ( $heading ) :
			?>
			<h3 class="h3 other__title"><?php echo esc_html( $heading ); ?></h3>
		<?php endif; ?>

				<?php woocommerce_product_loop_start(); ?>

					<?php foreach ( $related_products as $related_product ) : ?>

							<?php
							$post_object = get_post( $related_product->get_id() );

							setup_postdata( $GLOBALS['post'] =& $post_object ); // phpcs:ignore WordPress.WP.GlobalVariablesOverride.Prohibited, Squiz.PHP.DisallowMultipleAssignments.Found

							wc_get_template_part( 'content', 'product' );
							?>

					<?php endforeach; ?>

				<?php woocommerce_product_loop_end(); ?>

		</div>
	</section>
	<?php
endif;

wp_reset_postdata();
