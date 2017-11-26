<?php

/**

 * The template for displaying the header

 *

 * Displays all of the head element and everything up until the "site-content" div.

 *

 * @package WordPress

 * @subpackage Twenty_Fifteen

 * @since Twenty Fifteen 1.0

 */

?><!DOCTYPE html>

<html <?php language_attributes(); ?> class="no-js">

<head>

	<meta charset="<?php bloginfo( 'charset' ); ?>">

	<meta name="viewport" content="width=device-width">

	<link rel="profile" href="http://gmpg.org/xfn/11">

	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<!--[if lt IE 9]>

	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>

	<![endif]-->

	<link type="text/css" rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css">

    

    <link type="text/css" rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/owl.carousel.css">

    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery-1.9.1.min.js"></script>

    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.jcarousel.min.js"></script>

    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/main.js"></script>

	<script>(function(){document.documentElement.className='js'})();</script>

    

    

	<?php wp_head(); ?>

</head>



<body <?php body_class(); ?>>

<div class="wrapper">

<div id="page" class="container">



		<header id="masthead" class="header" role="banner">

			<div class="logo">

				<a href="<?=site_url()?>">

						<img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="">

					</a>

				<!--<button class="secondary-toggle"><?php _e( 'Menu and widgets', 'twentyfifteen' ); ?></button>-->

			</div><!-- .site-branding -->

            <nav class="navigation">

                <?php wp_nav_menu( array('menu' => 'Primary' )); ?>

               <!-- <ul>

                    <li><a href="#">Home</a></li>

                    <li><a href="#">About Us</a></li>

                    <li><a href="#">Registry</a></li>

                    <li><a href="#">Contact Us</a></li>

                    <li><a href="#">Blogs</a></li>

                </ul>-->

            </nav>

            <div class="right-section">

                <ul>

                    <li><a href="<?php echo site_url();?>/my-account/">Register</a> / <a href="<?php echo site_url();?>/my-account/">Sign In</a></li>

                    <!--<li><a href="<?php echo site_url();?>/my-account/">Sign In</a></li>-->

                    <li><a href="<?php echo site_url();?>/cart">Cart <img src="<?php echo get_template_directory_uri(); ?>/images/cartb.png" alt=""></a></li>

                </ul>

            </div>

		</header><!-- .site-header -->

		<div class="menu">

				<nav class="categories">

					<?php

                    $args = array('taxonomy' =>'product_cat','hide_empty'=>false,'orderby' =>'id','order'=> 'ASC', 'exclude' => array('15'));

					$terms = get_terms('product_cat', $args);



					?>

                    <ul>

						<?php if (count($terms) > 0) {

							foreach ($terms as $term) {	

							$term_link = get_term_link( $term );

						?>

                        <li><a href="<?php echo esc_url( $term_link ); ?>"><?=$term->name?></a>

                        <?php

                        if($term->count > 0)

						{

							echo "<ul>";

							$args = array( 'post_type' => 'product', 'posts_per_page' => 3, 'product_cat' => $term->slug, 				'orderby' => 'rand' );

							$loop = new WP_Query( $args );

							while ( $loop->have_posts() ) : $loop->the_post(); global $product; ?>

                            <li>

                                <div class="thumb"><?php the_post_thumbnail( 'product_nav' ); ?></div>

                                <div class="right-side">

                                    <h3><a href="<?php the_permalink();?>"><?php the_title();?></a></h3>

                                    <div class="description">

                                        <p>

                                        <?php echo substr(get_the_content(),0,40).'...';?>

                                       </p>

                                    </div>

                                    <a href="<?php the_permalink();?>" class="more_detail">More Detail</a>

                                </div>

							</li>

                             <?php endwhile; 

                             if($term->count >= 3)

							 {?>

                             <li class="last"><a href="<?php echo esc_url( $term_link ); ?>">See All Items</a></li>

                             <?php }?>

                             </ul>

   							 <?php wp_reset_query(); 

						}

						?>

                        </li>

                        <?php }

						}

						?>



				</nav>

			</div>



	<div id="content" class="content">

