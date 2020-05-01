<?php
/**
 * Register and Enqueue Styles.
 */
function minimal_songs_styles() {
	wp_enqueue_style('bootstrap', get_stylesheet_directory_uri() . '/assets/css/bootstrap.min.css');
	wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
}

add_action( 'wp_enqueue_scripts', 'minimal_songs_styles' );


function template_chooser($template)   
{    
  global $wp_query;   
  $post_type = get_query_var('post_type');   
  if( $wp_query->is_search && $post_type == 'products' )   
  {
    return locate_template('archive-search.php');  //  redirect to archive-search.php
  }   
  return $template;   
}
add_filter('template_include', 'template_chooser'); 