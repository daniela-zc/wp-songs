<?php
/**
 * The template for displaying single songs.
 */
get_header(); 
?>

<?php $url = get_post_meta($post->ID, 'url', true); ?>

<div id="content" class="content_right container">    
		<div class="row">
  			<div class="col-md-6 offset-md-3">
              <iframe src="https://embed.spotify.com/?uri=<?php echo $url ?>" width="300" height="380" frameborder="0" allowtransparency="true"></iframe>
            </div>
        </div>
</div>


<?php get_footer(); ?>