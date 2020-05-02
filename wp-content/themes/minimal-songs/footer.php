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
<footer id="site-footer" role="contentinfo" class="header-footer-group ">

	<div class ='small-display'>
		<div class="row center-xs">
			<div class="col-xs-9">

				<div class="footer-menu">
					<nav class="primary-menu-wrapper-" aria-label="<?php esc_attr_e( 'Horizontal', 'twentytwenty' ); ?>" role="navigation">
						<ul class="primary-menu-">
						<?php
							if ( has_nav_menu( 'primary' ) ) {
								wp_nav_menu(
									array(
										'container'  => '|',
										'items_wrap' => '%3$s',
										'theme_location' => 'primary',
										'item_sep' => '&middot;'
									)
								);
							} ?>
						</ul>
					</nav><!-- .primary-menu-wrapper -->
				</div><!-- .footer-menu -->

				<div class="footer-credits">
					<p class="footer-copyright">&copy;
						<?php
						echo date_i18n(
							/* translators: Copyright date format, see https://www.php.net/date */
							_x( 'Y', 'copyright date format', 'twentytwenty' )
						); ?>
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php echo 'The Hangar interactive. All rights reserved.'; ?></a>
					</p><!-- .footer-copyright -->
				</div><!-- .footer-credits -->
			
			</div><!-- .col-xs-9 -->
		</div><!-- .row -->
	</div> <!-- .small-display -->

	<div class ='mid-display'>
		<div class="row around-xs">
			<div class="col-xs-4">
				<div class="footer-credits">
					<p class="footer-copyright">&copy;
						<?php
						echo date_i18n(
							/* translators: Copyright date format, see https://www.php.net/date */
							_x( 'Y', 'copyright date format', 'twentytwenty' )
						); ?>
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php echo 'The Hangar interactive. All rights reserved.'; ?></a>
					</p><!-- .footer-copyright -->
					</div><!-- .footer-credits -->
			</div>
			<div class="col-xs-4">
				<div class="footer-menu">
					<nav class="primary-menu-wrapper-" aria-label="<?php esc_attr_e( 'Horizontal', 'twentytwenty' ); ?>" role="navigation">
						<ul class="primary-menu-">
						<?php
							if ( has_nav_menu( 'primary' ) ) {
								wp_nav_menu(
									array(
										'container'  => '|',
										'items_wrap' => '%3$s',
										'theme_location' => 'primary',
										'item_sep' => '&middot;'
									)
								);
							} ?>
						</ul>
					</nav><!-- .primary-menu-wrapper -->
				</div><!-- .footer-menu -->
			</div>
		</div>
	</div> <!-- .mid-display -->

	

</footer><!-- #site-footer -->

		<?php wp_footer(); ?>

	</body>
</html>
