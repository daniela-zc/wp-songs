<?php
/**
 * The template for displaying single songs.
 */
get_header(); 
?>

<?php $url = get_post_meta($post->ID, 'url', true); ?>


<div class="row center-xs song-display">
    <div class="col-xs-6">
        <div class="box">
        <iframe src="https://embed.spotify.com/?uri=<?php echo $url ?>" width="300" height="380" frameborder="0" allowtransparency="true"></iframe>
        </div>
    </div>
</div>


<?php get_footer(); ?>