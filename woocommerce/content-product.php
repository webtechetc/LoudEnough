<?php

/**

 * The template for displaying product content within loops.

 *

 * Override this template by copying it to yourtheme/woocommerce/content-product.php

 *

 * @author 		WooThemes

 * @package 	WooCommerce/Templates

 * @version     1.6.4

 */



if ( ! defined( 'ABSPATH' ) ) {

	exit; // Exit if accessed directly

}



global $product, $woocommerce_loop;



// Store loop count we're currently on

if ( empty( $woocommerce_loop['loop'] ) )

	$woocommerce_loop['loop'] = 0;



// Store column count for displaying the grid

if ( empty( $woocommerce_loop['columns'] ) )

	$woocommerce_loop['columns'] = apply_filters( 'loop_shop_columns', 4 );



// Ensure visibility

if ( ! $product || ! $product->is_visible() )

	return;



// Increase loop count

$woocommerce_loop['loop']++;



// Extra post classes

$classes = array();

if ( 0 == ( $woocommerce_loop['loop'] - 1 ) % $woocommerce_loop['columns'] || 1 == $woocommerce_loop['columns'] )

	$classes[] = 'first';

if ( 0 == $woocommerce_loop['loop'] % $woocommerce_loop['columns'] )

	$classes[] = 'last';

?>

<li <?php post_class( $classes ); ?>>

<div class="thumb listing_page">

	<?php //do_action( 'woocommerce_before_shop_loop_item' ); ?>

 

 <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'product_list' ); ?></a>

 <?php 
/*
	$postdate = get_the_time ( 'Y-m-d' );

	$postdatestamp = strtotime ( $postdate );

	if((time () - (60 * 60 * 24 * 7)) < $postdatestamp)

	{?>

		<div class="new_product">New</div>

	<?php }

 	else if(get_post_meta(get_the_ID(),'_sale_price',true)) {?><div class="offer">Sale</div> <?php }

 	
*/
 ?>  

</div>



                   

   <div class="details">

	

	

		<?php

			/**

			 * woocommerce_before_shop_loop_item_title hook

			 *

			 * @hooked woocommerce_show_product_loop_sale_flash - 10

			 * @hooked woocommerce_template_loop_product_thumbnail - 10

			 */

			//do_action( 'woocommerce_before_shop_loop_item_title' );

		?>



		<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>

		<p><?php echo  substr(get_the_content(),0,30);?></p>

		<?php

			/**

			 * woocommerce_after_shop_loop_item_title hook

			 *

			 * @hooked woocommerce_template_loop_rating - 5

			 * @hooked woocommerce_template_loop_price - 10

			 */

			//do_action( 'woocommerce_after_shop_loop_item_title' );

		?>

        

        <ul>

            <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/arrows.png" alt=""></a></li>

            <li><?php echo do_shortcode('[yith_wcwl_add_to_wishlist label="" link_classes="addToWishList1" product_added_text="WL" already_in_wishslist_text="WL" browse_wishlist_text=""]');?></li>

            <li><?php



		/**

		 * woocommerce_after_shop_loop_item hook

		 *

		 * @hooked woocommerce_template_loop_add_to_cart - 10

		 */

		do_action( 'woocommerce_after_shop_loop_item' ); 



	?></li>

            <li class="price"><?php echo $product->get_price_html(); ?></li>

        </ul>

                        



	



	

</div>

</li>

