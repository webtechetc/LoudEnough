<?php

/**

 * The template for displaying the footer

 *

 * Contains the closing of the "site-content" div and all content after.

 *

 * @package WordPress

 * @subpackage Twenty_Fifteen

 * @since Twenty Fifteen 1.0

 */

?>



</div><!-- .content -->

<div class="footer">

		<?php if ( is_active_sidebar( 'sidebar-2' ) ) : ?>

				<?php dynamic_sidebar( 'sidebar-2' ); ?>

		<?php endif; ?>

        

        <?php if ( is_active_sidebar( 'sidebar-3' ) ) : ?>

				<?php dynamic_sidebar( 'sidebar-3' ); ?>

		<?php endif; ?>

        

        <?php if ( is_active_sidebar( 'sidebar-4' ) ) : ?>

				<?php dynamic_sidebar( 'sidebar-4' ); ?>

		<?php endif; ?>



    <!--<div class="column_widget">

        <div class="widget">

            <h3 class="widget-title">shopping with us</h3>

            <div class="widget_nav_menu">

                <ul>

                    <li><a href="#">why shop with us?</a></li>

                    <li><a href="#">how it works</a></li>

                    <li><a href="#">delivery</a></li>

                    <li><a href="#">returns</a></li>

                    <li><a href="#">where's my order</a></li>

                    <li><a href="#">contact &amp; help</a></li>

                    <!--<li><a href="#">wedding list</a></li>

                    <li><a href="#">wish lists</a></li>

                    <li><a href="#">gift vouchers</a></li>

                </ul>

            </div>

        </div>

    </div>

    <div class="column_widget">

        <div class="widget">

            <h3 class="widget-title">about us</h3>

            <div class="widget_nav_menu">

                <ul>

                    <li><a href="#">our story</a></li>

                    <li><a href="#">customer contact</a></li>

                    <li><a href="#">awards</a></li>

                    <li><a href="#">press centre</a></li>

                    <li><a href="#">work with us</a></li>

                    <li><a href="#">terms &amp; conditions</a></li>

                    <li><a href="#">privacy &amp; cookies</a></li>

                </ul>

            </div>

        </div>

    </div>

    <div class="column_widget">

        <div class="widget">

            <h3 class="widget-title">selling with us</h3>

            <div class="widget_nav_menu">

                <ul>

                    <li><a href="#">why join?</a></li>

                    <li><a href="#">faqs</a></li>

                    <li><a href="#">apply to sell with us</a></li>

                    <!--/*<li><a href="#">affiliates</a></li>

                </ul>

            </div>

        </div>

    </div>-->

    <div class="column_widget">

        <div class="widget">

            <h3 class="widget-title">Signup newsletter</h3>

            <div class="newsletter">

                <form action="">

                    <input type="text" name="" id="" placeholder="e.g.: abc@domain.com">

                    <input type="submit" value="Subscribe now">

                </form>

            </div>

        </div>

        <div class="widget">

            <h3 class="widget-title">Keep in touch</h3>

            <div class="social-network">

                <ul>

                    <li><a href="#" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/rss.png" alt=""></a></li>

                    <li><a href="#" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/facebook.png" alt=""></a></li>

                    <li><a href="#" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/twitter.png" alt=""></a></li>

                    <li><a href="#" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/flickr.png" alt=""></a></li>

                    <li><a href="#" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/google.png" alt=""></a></li>

                </ul>

            </div>

        </div>

    </div>

</div>

<div class="copyrights">

    <p>Copyright © 2014 Gift Shop,  All right reserved</p>

    <p class="designed_by">Designed by <a href="http://urban-fuel.net/">Urban Fuel</a></p>

</div>

	<!--<footer id="colophon" class="site-footer" role="contentinfo">

		<div class="site-info">

			<?php

				/**

				 * Fires before the Twenty Fifteen footer text for footer customization.

				 *

				 * @since Twenty Fifteen 1.0

				 */

				do_action( 'twentyfifteen_credits' );

			?>

			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'twentyfifteen' ) ); ?>"><?php printf( __( 'Proudly powered by %s', 'twentyfifteen' ), 'WordPress' ); ?></a>

		</div><!-- .site-info -->

	<!--</footer>--><!-- .site-footer -->



</div><!-- .site -->



<?php wp_footer(); ?>

</div>

</body>

</html>

