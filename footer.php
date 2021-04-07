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
				<a href="/"><img src="http://theflin2020.wpengine.com/wp-content/uploads/2021/01/logo_footer.png" alt="Flin footer logo"/></a>
				<div class="flin-footer-links">
					<div class="col">
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
					
						<?php echo do_shortcode('[gravityform id="2" title="false" description="true"]'); ?>
					
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

		<?php wp_footer(); ?>

<script src="/wp-content/themes/theflin/js/slideable.js" type="text/javascript"></script>
	</body>
</html>
