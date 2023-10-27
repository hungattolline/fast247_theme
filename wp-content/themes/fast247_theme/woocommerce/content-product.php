<?php
/**
 * The template for displaying product content within loops
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.6.0
 */

defined( 'ABSPATH' ) || exit;

global $product;
	
// Ensure visibility.
if ( empty( $product ) || ! $product->is_visible() ) {
	return;
}
?>
<article <?php post_class(); ?>>
	<?php
	/**
	 * Hook: woocommerce_before_shop_loop_item.
	 *
	 * @hooked woocommerce_template_loop_product_link_open - 10
	 */
	// do_action( 'woocommerce_before_shop_loop_item' );
	
	/**
	 * Hook: woocommerce_before_shop_loop_item_title.
	 *
	 * @hooked woocommerce_show_product_loop_sale_flash - 10
	 * @hooked woocommerce_template_loop_product_thumbnail - 10
	 */
	// do_action( 'woocommerce_before_shop_loop_item_title' );
	
	/**
	 * Hook: woocommerce_shop_loop_item_title.
	 *
	 * @hooked woocommerce_template_loop_product_title - 10
	 */
	// do_action( 'woocommerce_shop_loop_item_title' );
	?>
	
	<div class="hentry-wrap">
		<div class="featured-image">
			<a href="<?php the_permalink(); ?>">
				<?php
					the_post_thumbnail(logistica_shop_grid__feat_img_size());
				?>
			</a>
			<?php
				if ($product->is_on_sale())
				{
					echo apply_filters('woocommerce_sale_flash', '<span class="onsale">' . esc_html__('Sale', 'logistica') . '</span>', $post, $product);
				}
			?>
			<div class="cart-button">
				<?php
					/**
					 * Hook: woocommerce_after_shop_loop_item.
					 *
					 * @hooked woocommerce_template_loop_product_link_close - 5
					 * @hooked woocommerce_template_loop_add_to_cart - 10
					 */
					
					do_action( 'woocommerce_after_shop_loop_item' );
				?>
			</div> <!-- .cart-button -->
		</div> <!-- .featured-image -->
		
		<div class="hentry-middle">
			<header class="entry-header">
				<h2 class="entry-title">
					<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
				</h2> <!-- .entry-title -->
				<?php
					/**
					 * Hook: woocommerce_after_shop_loop_item_title.
					 *
					 * @hooked woocommerce_template_loop_rating - 5
					 * @hooked woocommerce_template_loop_price - 10
					 */
				?>
				<div class="entry-meta">
					<?php
						do_action( 'woocommerce_after_shop_loop_item_title' );
					?>
				</div> <!-- .entry-meta -->
			</header> <!-- .entry-header -->
		</div> <!-- .hentry-middle -->
	</div> <!-- .hentry-wrap -->
</article> <!-- .hentry -->