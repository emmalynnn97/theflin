<?php
/**
 * The template for displaying the footer
 *
 * Contains the opening of the #site-footer div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

?>

			<footer id="site-footer" role="contentinfo" class="header-footer-group">
			<div class="flin-footer-img-container">
			<a class="flin-footer-logo" href="/"><img src="/wp-content/uploads/2021/05/Asset-1.png" alt="Flin footer logo"/></a>
				<a href="/"><img src="/wp-content/uploads/2021/05/HSL_logo-01-1.png" alt="HSL logo"/></a>
				<a href="/"><img style="width:150px;" src="/wp-content/uploads/2021/05/Equal_housing-01-1.png" alt="equal housing opportunity logo"/></a>
			</div>	
				<div class="flin-footer-links">
					<div class="col icon-col">
					<a href="tel:520.000.000"><img class="phone" src="/wp-content/uploads/2021/05/Asset-1-1.png" alt="phone icon"/></a>
		<a href="mailto:theflin@myhslhome.com"><img class="email" src="/wp-content/uploads/2021/05/Asset-3.png" alt="email icon"/></a>
		<a href="https://www.google.com/maps?ll=32.220595,-110.972961&z=14&t=m&hl=en&gl=US&mapclient=embed&daddr=110+S+Church+Ave+Tucson,+AZ+85701@32.220595,-110.9729611"><img class="location" src="/wp-content/uploads/2021/05/Asset-2.png" alt="Location icon"/></a>
		<a href="https://www.facebook.com/The-Flin-112809383913900"><img class="facebook" src="/wp-content/uploads/2021/05/Asset-7.png" alt="facebook icon"/></a>
		<a href="https://www.instagram.com/theflin_tucson/"><img class="instagram" src="/wp-content/uploads/2021/05/Asset-6.png" alt="instagram icon"/></a>
		<a href="https://twitter.com/TheFlin8"><img class="twitter" src="/wp-content/uploads/2021/05/Asset-5.png" alt="twitter icon"/></a>
					</div>
					<!--<div class="col">
							<a href="/">Home</a>
							<a href="/neighborhood">Neighborhood</a>
							<a href="/amenities">Amenities</a>
							<a href="/floorplans">Floor plans</a>
							<a href="/gallery">Gallery</a>
					</div>
					<div class="col">
							<a href="/apply">Live Here</a>
							<a href="/residents">Residents</a>
							<a href="/contact">Contact Us</a>
							<a href="/faqs">FAQs</a>
							<a href="/history">History</a>
					</div>
					
						<?php echo do_shortcode('[gravityform id="2" title="false" description="true"]'); ?>-->
					
				</div>
				<div>
					
				</div>
				<div class="section-inner">

					<div class="footer-credits">

						<p class="footer-copyright">&copy;
							<?php
							echo date_i18n(
								/* translators: Copyright date format, see https://www.php.net/manual/datetime.format.php */
								_x( 'Y', 'copyright date format', 'twentytwenty' )
							);
							?>
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a>
						</p><!-- .footer-copyright -->

						<p class="powered-by-wordpress">
							<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'twentytwenty' ) ); ?>">
								<?php _e( 'Powered by WordPress', 'twentytwenty' ); ?>
							</a>
						</p><!-- .powered-by-wordpress -->

					</div><!-- .footer-credits -->

					<a class="to-the-top" href="#site-header">
						<span class="to-the-top-long">
							<?php
							/* translators: %s: HTML character for up arrow. */
							printf( __( 'To the top %s', 'twentytwenty' ), '<span class="arrow" aria-hidden="true">&uarr;</span>' );
							?>
						</span><!-- .to-the-top-long -->
						<span class="to-the-top-short">
							<?php
							/* translators: %s: HTML character for up arrow. */
							printf( __( 'Up %s', 'twentytwenty' ), '<span class="arrow" aria-hidden="true">&uarr;</span>' );
							?>
						</span><!-- .to-the-top-short -->
					</a><!-- .to-the-top -->

				</div><!-- .section-inner -->

			</footer><!-- #site-footer -->
			<div class="flin-footer-insert">© 2021 HSL Asset Management LLC. All Rights Reserved</div>
		<?php wp_footer(); ?>

<script src="/wp-content/themes/theflin/js/slideable.js" type="text/javascript"></script>
	</body>
	<script type="text/javascript">
		document.querySelector('.skip-link').remove();
	</script>
</html>
