<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

get_header();




?>



<?php get_template_part( 'template-parts/search-songs' ); ?>

<main id="site-content" role="main">

<?php
if ( !is_search() ) {

$args = array('post_type'=>array('song'));
query_posts($args);

}
?>

<div class="contentarea">
    <div id="content" class="content_right container">    
		<div class="row">
  			<div class="col-md-6 offset-md-3">
			  	<?php if ( have_posts() ) { 
					$i = 0; ?>
					<table class='songs-result'>
					<?php while ( have_posts() ) {
						$i++;
						$class = $i % 2 == 0 ? 'even' : 'odd';
						the_post();
						set_query_var( 'class', $class );
						get_template_part( 'template-parts/song-preview');
					} ?>
					</table>
			  	<?php } ?>
			</div>
		</div>	  
		
		
    </div><!-- content -->    
</div><!-- contentarea -->  

</main><!-- #site-content -->

<?php
get_footer();
?>