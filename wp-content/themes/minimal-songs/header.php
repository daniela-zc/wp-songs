<?php
/**
 * Header file for the Twenty Twenty WordPress default theme.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

?><!DOCTYPE html>

<html class="no-js" <?php language_attributes(); ?>>

	<head>

		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1.0" >

		<link rel="profile" href="https://gmpg.org/xfn/11">

		<?php wp_head(); ?>

	</head>

	<body <?php body_class(); ?>>

		<?php
		wp_body_open();
		?>

		<header id="minimal-site-header"  role="banner">

			<div class="row center-xs">
					<div class="col-xs-8">
						<div class="minimal-header-inner ">
							<?php
								// Site logo.
								minimalsongs_site_logo();
							?>
						</div><!-- .minimal-header-inner -->
					</div><!-- .col-xs-8 -->
				
				
			</div>

		</header><!-- #minimal-site-header -->


