<?php
/**
 * The template for displaying product content in the single-product.php template.
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-single-product.php.
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

/**
 * Hook: woocommerce_before_single_product.
 *
 * @hooked wc_print_notices - 10
 */
do_action( 'woocommerce_before_single_product' );

if ( post_password_required() ) {
	echo get_the_password_form(); // WPCS: XSS ok.
	return;
}
?>
<article class="hentry">
	<div class="post-header post-header-classic shop-header">
		<header class="entry-header">
			<?php
				the_title('<h1 class="entry-title">', '</h1>');
			?>
			<p>
				<?php
					$logistica_shop_page_url = wc_get_page_permalink('shop');
				?>
				<a class="button back" href="<?php echo esc_url($logistica_shop_page_url); ?>"><?php esc_html_e('Back To Shop', 'logistica'); ?></a>
			</p>
		</header> <!-- .entry-header -->
	</div> <!-- .post-header .post-header-classic .shop-header -->
	
	<div class="hentry-wrap">
		<div class="entry-content">
			<div itemscope itemtype="<?php echo woocommerce_get_product_schema(); ?>" id="product-<?php the_ID(); ?>" <?php post_class(); ?>>
				<?php
					/**
					 * Hook: woocommerce_before_single_product_summary.
					 *
					 * @hooked woocommerce_show_product_sale_flash - 10
					 * @hooked woocommerce_show_product_images - 20
					 */
					do_action( 'woocommerce_before_single_product_summary' );
				?>
				
				<div class="summary entry-summary">
					<?php
						/**
						 * Hook: woocommerce_single_product_summary.
						 *
						 * @hooked woocommerce_template_single_title - 5
						 * @hooked woocommerce_template_single_rating - 10
						 * @hooked woocommerce_template_single_price - 10
						 * @hooked woocommerce_template_single_excerpt - 20
						 * @hooked woocommerce_template_single_add_to_cart - 30
						 * @hooked woocommerce_template_single_meta - 40
						 * @hooked woocommerce_template_single_sharing - 50
						 */
						do_action( 'woocommerce_single_product_summary' );
					?>
				</div> <!-- .summary .entry-summary -->
				
				<?php
					/**
					 * Hook: woocommerce_after_single_product_summary.
					 *
					 * @hooked woocommerce_output_product_data_tabs - 10
					 * @hooked woocommerce_upsell_display - 15
					 * @hooked woocommerce_output_related_products - 20
					 */
					do_action( 'woocommerce_after_single_product_summary' );
				?>
				
				<meta itemprop="url" content="<?php the_permalink(); ?>" />
			
			</div> <!-- #product-<?php the_ID(); ?> -->
		</div> <!-- .entry-content -->
	</div> <!-- .hentry-wrap -->
	
	<?php
		woocommerce_output_related_products();
	?>
</article> <!-- .hentry -->

<?php
	do_action( 'woocommerce_after_single_product' );
?>