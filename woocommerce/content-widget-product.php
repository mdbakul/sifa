<?php
/**
 * The template for displaying product widget entries.
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-widget-product.php.
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.5.5
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

global $product;

if ( ! is_a( $product, 'WC_Product' ) ) {
	return;
}

?>
<div class="blogsingle__popularpost">	
	<div class="postitem">
		<ul>
			<li class="d-flex">
				<?php do_action( 'woocommerce_widget_product_item_start', $args ); ?>
					<div class="thum imghover">			
						<a href="<?php echo esc_url( $product->get_permalink() ); ?>">
							<!-- <img src="assets/img/blog-details/img1.jpg" alt="bakul"> -->
							<?php echo $product->get_image(); // PHPCS:Ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
						</a>
					</div>
					<div class="content">
					    <h5><a href="<?php echo esc_url( $product->get_permalink() ); ?>"><?php echo wp_kses_post( $product->get_name() ); ?></a></h5>
						<span><?php echo get_the_date() ?></span>
					</div>
				<?php do_action( 'woocommerce_widget_product_item_end', $args ); ?>
			</li>
		</ul>
	</div>
</div>