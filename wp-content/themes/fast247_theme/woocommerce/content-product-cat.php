<?php
/**
 * The template for displaying product category thumbnails within loops.
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-product_cat.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 4.7.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<article <?php wc_product_cat_class( 'hentry', $category ); ?>>
	<div class="hentry-wrap">
		<div class="featured-image">
			<?php
				/**
				 * The woocommerce_before_subcategory hook.
				 *
				 * @hooked woocommerce_template_loop_category_link_open - 10
				 */
				do_action( 'woocommerce_before_subcategory', $category );
			?>
			
			<?php
				$cat_name 	   = $category->name;
				$cat_id 	   = $category->term_id;
				$cat_image_id  = get_woocommerce_term_meta($cat_id, 'thumbnail_id', true);
				$cat_image_url = wp_get_attachment_image_src($cat_image_id, 'logistica_image_size_2');
			?>
			<img alt="<?php echo esc_attr($cat_name); ?>" src="<?php echo esc_url($cat_image_url[0]); ?>">
			
			<?php
				/**
				 * The woocommerce_after_subcategory hook.
				 *
				 * @hooked woocommerce_template_loop_category_link_close - 10
				 */
				do_action('woocommerce_after_subcategory', $category);
			?>
		</div> <!-- .featured-image -->
		
		<div class="hentry-middle">
			<header class="entry-header">
				<h2 class="entry-title">
					<?php
						/**
						 * The woocommerce_before_subcategory hook.
						 *
						 * @hooked woocommerce_template_loop_category_link_open - 10
						 */
						do_action( 'woocommerce_before_subcategory', $category );
					?>
					
					<?php
						echo esc_html($category->name);
					?>
					
					<mark class="count"><?php echo esc_html($category->count); ?></mark>
					
					<?php
						/**
						 * The woocommerce_after_subcategory hook.
						 *
						 * @hooked woocommerce_template_loop_category_link_close - 10
						 */
						do_action( 'woocommerce_after_subcategory', $category );
					?>
				</h2> <!-- .entry-title -->
			</header> <!-- .entry-header -->
		</div> <!-- .hentry-middle -->
		
		<?php
			/**
			 * The woocommerce_after_subcategory_title hook.
			 */
			do_action( 'woocommerce_after_subcategory_title', $category );
		?>
	</div> <!-- .hentry-wrap -->
</article>