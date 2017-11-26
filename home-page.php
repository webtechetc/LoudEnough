<?php

/**

 * Template Name: Home Page

 *

 * @package WordPress

 * @subpackage Twenty_Fourteen

 * @since Twenty Fourteen 1.0

 */



get_header(); ?>



<div class="category_section">

    <div class="left">

        <article>

            <figure>

            <?php 

				$idcat = 10;

				$thumbnail_id = get_woocommerce_term_meta( $idcat, 'thumbnail_id', true );

				$image = wp_get_attachment_url( $thumbnail_id );

				echo '<img src="'.$image.'" alt="" />';

			?>

                <figcaption>

                    <?php 	

						$terms = get_term( 10, 'product_cat' );

						$cateMen = $terms->name;	

						$catDesc = $terms->description;

						$term_link = get_term_link( $terms );

					?>

                    <div class="upper">

                        <h3><a href="<?php echo esc_url( $term_link ); ?>"><?=$cateMen?>'s Wear</a></h3>

                        <p><?=$catDesc?></p>

                    </div>

                    <div class="downer"></div>

                </figcaption>

            </figure>

        </article>

        <div class="search-section">

            <form action="">

                <input type="text" name="s" placeholder="Search your product here ( e.g.: Silver diamond ring )">

                <input type="submit" value="go">

            </form>

        </div>

        <article>

            <figure>

                <?php 

			   $term = get_term( 8, 'product_cat' );

			   $args = array( 'post_type' => 'product', 'posts_per_page' => 1, 'product_cat' => $term->slug, 				'orderby' => 'date', 'order' => 'DESC' );

				$loop = new WP_Query( $args );

				while ( $loop->have_posts() ) : $loop->the_post(); global $product; ?>

                <?php the_post_thumbnail( 'home_left' ); ?>

                <figcaption>

                    <div class="caption">

                        <ul>

                            <li>

                             <?php $product_cats = wp_get_post_terms( get_the_ID(), 'product_cat' );

							// print_r($product_cats);

							 $term_link = get_term_link( $product_cats[0] );?>

                             <a href="<?php echo esc_url( $term_link ); ?>"><?=$product_cats[0]->name?></a>

                            </li>

                            <li>

                               <?php echo do_shortcode('[yith_wcwl_add_to_wishlist label="" link_classes="addToWishList" product_added_text="WL" already_in_wishslist_text="" browse_wishlist_text=""]');?>

                            </li>

                            <li>

                                <?php woocommerce_template_loop_add_to_cart(); //ouptput the woocommerce loop add to cart button ?>

                            </li>

                            <li class="price"><?php echo $product->get_price_html(); ?></li>

                        </ul>

                    </div>

                </figcaption>

                

                <?php endwhile; 

                             

   				wp_reset_query();?>

            </figure>

        </article>

    </div>

    <div class="right">

        <article>

            <figure>

                <?php 

				$idcat = 9;

				$thumbnail_id = get_woocommerce_term_meta( $idcat, 'thumbnail_id', true );

				$image = wp_get_attachment_url( $thumbnail_id );

				echo '<img src="'.$image.'" alt="" />';

				?>

                <figcaption>

                 <?php 	

						$terms = get_term( 9, 'product_cat' );

						$catewoMen = $terms->name;	

						$catwoDesc = $terms->description;

						$term_link = get_term_link( $terms );

					?>

                    <div class="upper">

                        <h3><a href="<?php echo esc_url( $term_link ); ?>"><?=$catewoMen?>'s Wear</a></h3>

                        <p><?=$catwoDesc?></p>

                    </div>

                </figcaption>

            </figure>

        </article>

        <article>

            <figure>

               <?php 

			   $term = get_term( 9, 'product_cat' );

			   $args = array( 'post_type' => 'product', 'posts_per_page' => 1, 'product_cat' => $term->slug, 				'orderby' => 'date', 'order' => 'DESC' );

				$loop = new WP_Query( $args );

				while ( $loop->have_posts() ) : $loop->the_post(); global $product; ?>

                <?php the_post_thumbnail( 'home_top' ); ?>

                <!--<img src="<?php echo get_template_directory_uri(); ?>/images/cat-img2.jpg" alt="">-->

                <figcaption>

                    <div class="caption">

                        <ul>

                            <li>

                             <?php $product_cats = wp_get_post_terms( get_the_ID(), 'product_cat' );

							// print_r($product_cats);

							 $term_link = get_term_link( $product_cats[0] );?>

                             <a href="<?php echo esc_url( $term_link ); ?>"><?=$product_cats[0]->name?></a>

                            </li>

                            <li>

                               <?php echo do_shortcode('[yith_wcwl_add_to_wishlist label="" link_classes="addToWishList" product_added_text="WL" already_in_wishslist_text="" browse_wishlist_text=""]');?>

                            </li>

                            <li>

                                <?php woocommerce_template_loop_add_to_cart(); //ouptput the woocommerce loop add to cart button ?>

                            </li>

                            <li class="price"><?php echo $product->get_price_html(); ?></li>

                        </ul>

                    </div>

                </figcaption>

                

                <?php endwhile; 

                             

   				wp_reset_query();?>

            </figure>

        </article>

        <article>

            <figure>

                <?php 

				$idcat = 8;

				$thumbnail_id = get_woocommerce_term_meta( $idcat, 'thumbnail_id', true );

				$image = wp_get_attachment_url( $thumbnail_id );

				echo '<img src="'.$image.'" alt="" />';

				?>

                <!--<img src="<?php echo get_template_directory_uri(); ?>/images/product-img1.jpg" alt="">-->

                <figcaption>

                <?php 	

						$terms = get_term( 8, 'product_cat' );

						$catewoMen = $terms->name;	

						$catwoDesc = $terms->description;

						$term_link = get_term_link( $terms );

					?>

                    <div class="upper">

                        <h3><a href="<?php echo esc_url( $term_link ); ?>">Jewelry</a> <img src="<?php echo get_template_directory_uri(); ?>/images/clock.jpg" alt=""></h3>

                    </div>

                </figcaption>

            </figure>

        </article>

    </div>

</div>
<!--
<div class="new_products">

    <div class="section-title">

        <h3>New Products</h3>

    </div>

    <div class="jcarousel-wrapper">

        <a href="javascript:void(0)" class="jcarousel-control-next"><img src="<?php echo get_template_directory_uri(); ?>/images/arrow-right.png" alt=""></a>

        <a href="javascript:void(0)" class="jcarousel-control-prev"><img src="<?php echo get_template_directory_uri(); ?>/images/arrow-left.png" alt=""></a>

        <div class="jcarousel">

            <ul class="new_products_caro">

			<?php 

			

			$args = array( 'post_type' => 'product', 'posts_per_page' => 12, 'orderby' => 'date', 'order' => 'DESC','tax_query' =>  array (

        array(

            'taxonomy' => 'product_cat', // My Custom Taxonomy

            'terms' => 'featured', // My Taxonomy Term that I wanted to exclude

            'field' => 'slug', // Whether I am passing term Slug or term ID

            'operator' => 'NOT IN', // Selection operator - use IN to include, NOT IN to exclude

        ),

    ), );

			$loop = new WP_Query( $args );

			while ( $loop->have_posts() ) : $loop->the_post(); global $product; ?>

			

            <li>

                    <div class="thumb">

                        <a href="<?php the_permalink()?>"><?php the_post_thumbnail( 'product_new' ); ?></a>

                        <div class="caption">

                            <ul>

                                <li>

                                    <?php 

									 $product_cats = wp_get_post_terms( get_the_ID(), 'product_cat' );

									 $term_link = get_term_link( $product_cats[0] );

									?>

                                    <a href="<?php echo esc_url( $term_link ); ?>"><?=$product_cats[0]->name?></a>

                                </li>

                                <li>

                                   <?php echo do_shortcode('[yith_wcwl_add_to_wishlist label="" link_classes="addToWishList" product_added_text="WL" already_in_wishslist_text="WL" browse_wishlist_text="WL"]');?>

                                </li>

                                <li>

                                  <?php woocommerce_template_loop_add_to_cart(); ?>

                                </li>

                                <li class="price"><?php echo $product->get_price_html(); ?></li>

                            </ul>

                        </div>

                    </div>

                </li>

                

             <?php endwhile; 

                            

   			 wp_reset_query(); 

					

			?>

             

            </ul>

        </div>

    </div>

</div>

<div class="new_products">

    <div class="section-title">

        <h3>Featured Products</h3>

    </div>

    <div class="jcarousel-wrapper">

        <a href="javascript:void(0)" class="jcarousel-control-next"><img src="<?php echo get_template_directory_uri(); ?>/images/arrow-right.png" alt=""></a>

        <a href="javascript:void(0)" class="jcarousel-control-prev"><img src="<?php echo get_template_directory_uri(); ?>/images/arrow-left.png" alt=""></a>

        <div class="featured">

            <ul>

            <?php 

			

			$args = array( 'post_type' => 'product', 'posts_per_page' => 12,'product_cat' => 'featured', 'orderby' => 'date', 'order' => 'DESC');

			$loop = new WP_Query( $args );

			while ( $loop->have_posts() ) : $loop->the_post(); global $product; ?>

                <li>

                    <div class="thumb">

                        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'product_list' ); ?></a>

                        <?php 

							$postdate = get_the_time ( 'Y-m-d' );

							$postdatestamp = strtotime ( $postdate );

							if((time () - (60 * 60 * 24 * 7)) < $postdatestamp)

							{?>

								<div class="new_product">New</div>

							<?php }

							else if(get_post_meta(get_the_ID(),'_sale_price',true)) {?><div class="offer">Sale</div> <?php }

							

						 ?> 

                    </div>

                    <div class="details">

                        <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>

                        <p><?php echo  substr(get_the_content(),0,30);?></p>

                        <ul>

                            <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/arrows.png" alt=""></a></li>

                            <li> <?php echo do_shortcode('[yith_wcwl_add_to_wishlist label="" link_classes="addToWishList1" product_added_text="WL" already_in_wishslist_text="WL" browse_wishlist_text="WL"]');?></li>

                             <li>

                                  <?php woocommerce_template_loop_add_to_cart(); ?>

                                </li>

                                <li class="price"><?php echo $product->get_price_html(); ?></li>

                        </ul>

                    </div>

                </li>

            

            <?php endwhile; 

                            

   			 wp_reset_query(); 

					

			?>

                <!--<li>

                    <div class="thumb">

                        <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/featured-product1.jpg" alt="Product"></a>

                    </div>

                    <div class="details">

                        <h3><a href="#">Product Title here</a></h3>

                        <p>Product Description here</p>

                        <ul>

                            <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/arrows.png" alt=""></a></li>

                            <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/wishlist.png" alt=""></a></li>

                            <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/cart-icon.png" alt=""></a></li>

                            <li class="price">$<span>99.</span><sup>00</sup></li>

                        </ul>

                    </div>

                </li>

                <li>

                    <div class="thumb">

                        <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/featured-product2.jpg" alt="Product"></a>

                        <div class="new_product">New</div>

                    </div>

                    <div class="details">

                        <h3><a href="#">Product Title here</a></h3>

                        <p>Product Description here</p>

                        <ul>

                            <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/arrows.png" alt=""></a></li>

                            <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/wishlist.png" alt=""></a></li>

                            <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/cart-icon.png" alt=""></a></li>

                            <li class="price">$<span>99.</span><sup>00</sup></li>

                        </ul>

                    </div>

                </li>

                <li>

                    <div class="thumb">

                        <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/featured-product3.jpg" alt="Product"></a>

                    </div>

                    <div class="details">

                        <h3><a href="#">Product Title here</a></h3>

                        <p>Product Description here</p>

                        <ul>

                            <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/arrows.png" alt=""></a></li>

                            <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/wishlist.png" alt=""></a></li>

                            <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/cart-icon.png" alt=""></a></li>

                            <li class="price">$<span>99.</span><sup>00</sup></li>

                        </ul>

                    </div>

                </li>

                <li>

                    <div class="thumb">

                        <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/featured-product.jpg" alt="Product"></a>

                    </div>

                    <div class="details">

                        <h3><a href="#">Product Title here</a></h3>

                        <p>Product Description here</p>

                        <ul>

                            <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/arrows.png" alt=""></a></li>

                            <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/wishlist.png" alt=""></a></li>

                            <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/cart-icon.png" alt=""></a></li>

                            <li class="price">$<span>99.</span><sup>00</sup></li>

                        </ul>

                    </div>

                </li>

                <li>

                    <div class="thumb">

                        <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/featured-product1.jpg" alt="Product"></a>

                    </div>

                    <div class="details">

                        <h3><a href="#">Product Title here</a></h3>

                        <p>Product Description here</p>

                        <ul>

                            <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/arrows.png" alt=""></a></li>

                            <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/wishlist.png" alt=""></a></li>

                            <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/cart-icon.png" alt=""></a></li>

                            <li class="price">$<span>99.</span><sup>00</sup></li>

                        </ul>

                    </div>

                </li>

                <li>

                    <div class="thumb">

                        <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/featured-product2.jpg" alt="Product"></a>

                    </div>

                    <div class="details">

                        <h3><a href="#">Product Title here</a></h3>

                        <p>Product Description here</p>

                        <ul>

                            <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/arrows.png" alt=""></a></li>

                            <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/wishlist.png" alt=""></a></li>

                            <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/cart-icon.png" alt=""></a></li>

                            <li class="price">$<span>99.</span><sup>00</sup></li>

                        </ul>

                    </div>

                </li>

                <li>

                    <div class="thumb">

                        <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/featured-product3.jpg" alt="Product"></a>

                    </div>

                    <div class="details">

                        <h3><a href="#">Product Title here</a></h3>

                        <p>Product Description here</p>

                        <ul>

                            <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/arrows.png" alt=""></a></li>

                            <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/wishlist.png" alt=""></a></li>

                            <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/cart-icon.png" alt=""></a></li>

                            <li class="price">$<span>99.</span><sup>00</sup></li>

                        </ul>

                    </div>

                </li>

                <li>

                    <div class="thumb">

                        <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/featured-product.jpg" alt="Product"></a>

                    </div>

                    <div class="details">

                        <h3><a href="#">Product Title here</a></h3>

                        <p>Product Description here</p>

                        <ul>

                            <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/arrows.png" alt=""></a></li>

                            <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/wishlist.png" alt=""></a></li>

                            <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/cart-icon.png" alt=""></a></li>

                            <li class="price">$<span>99.</span><sup>00</sup></li>

                        </ul>

                    </div>

                </li>

                <li>

                    <div class="thumb">

                        <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/featured-product1.jpg" alt="Product"></a>

                    </div>

                    <div class="details">

                        <h3><a href="#">Product Title here</a></h3>

                        <p>Product Description here</p>

                        <ul>

                            <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/arrows.png" alt=""></a></li>

                            <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/wishlist.png" alt=""></a></li>

                            <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/cart-icon.png" alt=""></a></li>

                            <li class="price">$<span>99.</span><sup>00</sup></li>

                        </ul>

                    </div>

                </li>

                <li>

                    <div class="thumb">

                        <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/featured-product2.jpg" alt="Product"></a>

                    </div>

                    <div class="details">

                        <h3><a href="#">Product Title here</a></h3>

                        <p>Product Description here</p>

                        <ul>

                            <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/arrows.png" alt=""></a></li>

                            <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/wishlist.png" alt=""></a></li>

                            <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/cart-icon.png" alt=""></a></li>

                            <li class="price">$<span>99.</span><sup>00</sup></li>

                        </ul>

                    </div>

                </li>

                <li>

                    <div class="thumb">

                        <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/featured-product3.jpg" alt="Product"></a>

                    </div>

                    <div class="details">

                        <h3><a href="#">Product Title here</a></h3>

                        <p>Product Description here</p>

                        <ul>

                            <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/arrows.png" alt=""></a></li>

                            <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/wishlist.png" alt=""></a></li>

                            <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/cart-icon.png" alt=""></a></li>

                            <li class="price">$<span>99.</span><sup>00</sup></li>

                        </ul>

                    </div>

                </li>

            </ul>

        </div>

    </div>

</div>
-->
<div class="who_we_are">

    <div class="section-title">

        <h3>Who We Are</h3>

    </div>

    <div class="about-text">

    <?php $page_data = get_page( 45 );

		echo apply_filters('the_content', $page_data->post_content);

	?>

    </div>

    <!--<div class="choose_section">

        <ul>

            <li><a href="<?php echo site_url();?>/shop"><img src="<?php echo get_template_directory_uri(); ?>/images/vector.png" alt=""> <h3>Choose Products</h3></a></li>

            <li><a href="<?php echo site_url();?>/my-account"><img src="<?php echo get_template_directory_uri(); ?>/images/vector1.png" alt=""> <h3>Register/ Login</h3></a></li>

            <li><a href="<?php echo site_url();?>/checkout"><img src="<?php echo get_template_directory_uri(); ?>/images/vector3.png" alt=""> <h3>Checkout</h3></a></li>

        </ul>

        <a href="<?php echo site_url();?>/my-account" class="register">Register Now</a>

    </div>-->

</div>



<?php



get_footer();

