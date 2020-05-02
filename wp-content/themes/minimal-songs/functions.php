<?php
/**
 * Register and Enqueue Styles.
 */
function minimal_songs_styles_scripts() {
	wp_enqueue_style('flexboxgrid', get_stylesheet_directory_uri() . '/assets/css/flexboxgrid.min.css');
	wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
	wp_enqueue_script( 'minimaljs', get_stylesheet_directory_uri() . '/assets/js/minimaljs.js', array('jquery'), null, true );
}

add_action( 'wp_enqueue_scripts', 'minimal_songs_styles_scripts' );


/**
 * Displays the site logo, either text or image.
 *
 * @param array   $args Arguments for displaying the site logo either as an image or text.
 * @param boolean $echo Echo or return the HTML.
 *
 * @return string $html Compiled HTML based on our arguments.
 */
function minimalsongs_site_logo( $args = array(), $echo = true ) {
	$logo       = get_custom_logo();
	$site_title = get_bloginfo( 'name' );
	$contents   = '';
	$classname  = '';

	$defaults = array(
		'logo'        => '%1$s<span class="minimal-logo">%2$s</span>',
		'logo_class'  => 'minimal-site-logo',
		'title'       => '<a href="%1$s">%2$s</a>',
		'title_class' => 'site-title',
		'home_wrap'   => '<h1 class="%1$s">%2$s</h1>',
		'single_wrap' => '<div class="%1$s faux-heading">%2$s</div>'
	);

	$args = wp_parse_args( $args, $defaults );

	/**
	 * Filters the arguments for `twentytwenty_site_logo()`.
	 *
	 * @param array  $args     Parsed arguments.
	 * @param array  $defaults Function's default arguments.
	 */
	$args = apply_filters( 'twentytwenty_site_logo_args', $args, $defaults );

	if ( has_custom_logo() ) {
		$contents  = sprintf( $args['logo'], $logo, esc_html( $site_title ) );
		$classname = $args['logo_class'];
	} else {
		$contents  = sprintf( $args['title'], esc_url( get_home_url( null, '/' ) ), esc_html( $site_title ) );
		$classname = $args['title_class'];
	}

	$wrap = 'single_wrap';

	$html = sprintf( $args[ $wrap ], $classname, $contents );

	/**
	 * Filters the arguments for `twentytwenty_site_logo()`.
	 *
	 * @param string $html      Compiled html based on our arguments.
	 * @param array  $args      Parsed arguments.
	 * @param string $classname Class name based on current view, home or single.
	 * @param string $contents  HTML for site title or logo.
	 */
	$html = apply_filters( 'twentytwenty_site_logo', $html, $args, $classname, $contents );

	if ( ! $echo ) {
		return $html;
	}

	echo $html; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped

}


function minimalsongs_play_small_png(){
	echo '<img src="'.get_stylesheet_directory_uri() . '/assets/images/play.png'.'" height="20" width="20">';
}

function minimalsongs_play_mid_png(){
	echo '<img src="'.get_stylesheet_directory_uri() . '/assets/images/play.png'.'" height="30" width="30">';
}