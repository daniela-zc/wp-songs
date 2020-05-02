<?php
/**
 * The template for displaying single songs.
 */
get_header(); 
?>

<?php $url = get_post_meta($post->ID, 'url', true); ?>

<div class ='small-display'>
    <div class="row center-xs song-display">
        <div class="col-xs-8">
            <div class="box">
            <iframe src="https://embed.spotify.com/?uri=<?php echo $url ?>" width="300" height="380" frameborder="0" allowtransparency="true"></iframe>
            </div>
        </div><!-- .col-xs-8 -->
    </div><!-- .row -->
</div><!-- .small-display -->

<div class ='mid-display'>
    <div class="row center-xs song-display">
        <div class="col-xs-6">
            <div class="box">
            <iframe src="https://embed.spotify.com/?uri=<?php echo $url ?>" width="300" height="380" frameborder="0" allowtransparency="true"></iframe>
            </div>
        </div><!-- .col-xs-6 -->
    </div><!-- .row -->
</div><!-- .mid-display -->

<?php get_footer(); ?>