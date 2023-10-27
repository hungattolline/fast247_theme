<?php
/**
 * Content wrappers
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/global/wrapper-end.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see 	    https://docs.woocommerce.com/document/template-structure/
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     3.3.0
 */

if ( ! defined( 'ABSPATH' ) )
{
	exit; // Exit if accessed directly
}


	$logistica_template = wc_get_theme_slug_for_templates();
	
	switch ( $logistica_template )
	{
		case 'twentyten' :
			echo '</div></div>';
			break;
		
		case 'twentyeleven' :
			echo '</div>';
			get_sidebar( 'shop' );
			echo '</div>';
			break;
		
		case 'twentytwelve' :
			echo '</div></div>';
			break;
		
		case 'twentythirteen' :
			echo '</div></div>';
			break;
		
		case 'twentyfourteen' :
			echo '</div></div></div>';
			get_sidebar( 'content' );
			break;
		
		case 'twentyfifteen' :
			echo '</div></div>';
			break;
		
		case 'twentysixteen' :
			echo '</main></div>';
			break;
		
		default :
			// echo '</main></div>';
			break;
	}
?>

			</div> <!-- #content .site-content -->
		</div> <!-- #primary .content-area -->
		<?php
			$logistica_sidebar_shop = 'No';
			
			$logistica_shop_page_id        = get_option('woocommerce_shop_page_id');
			$logistica_select_page_sidebar = get_option('logistica_select_page_sidebar' . '__' . $logistica_shop_page_id, 'No Sidebar');
			
			if (is_active_sidebar($logistica_select_page_sidebar))
			{
				$logistica_sidebar_shop = 'Yes';
			}
			
			$logistica_sidebar_product_category = get_theme_mod('logistica_setting_sidebar_product_category', 'No');
			$logistica_sidebar_single_product 	 = get_theme_mod('logistica_setting_sidebar_single_product', 'No');
			
			if ((is_post_type_archive('product') && ($logistica_sidebar_shop == 'Yes')) || 
				(is_tax('product_cat') && ($logistica_sidebar_shop == 'Yes') && ($logistica_sidebar_product_category == 'Yes')) || 
				(is_singular('product') && ($logistica_sidebar_shop == 'Yes') && ($logistica_sidebar_single_product == 'Yes')))
				{
					logistica_sidebar();
				}
		?>
	</div> <!-- .layout-medium -->
</div> <!-- #main .site-main -->
