<tr id="post-<?php the_ID();?>" class="<?php echo $class ?> " >
    <td class='td-play-wrap'> 
        <div class ='display'>
            <a href="<?php the_permalink(); ?>"> 
                <?php minimalsongs_play_mid_png()?>
            </a>
        </div>
        
    </td>
    
    <td class='td-song-wrap'>
        <p class='dim-text song-title'> <?php the_title();?> </p>
        <p class='song-title'> <?php echo get_post_meta($post->ID, 'artistname', true); ?> </p>
    </td>

    <td class='td-choose-wrap'>
        <div class="row ">
            <div class="choose-wrap end-xs">
                <div class='choose-box box'>
                    
                <div class='choose-box-item toggle left'>
                    <label>
                        <input type="radio" id="today-<?php the_ID();?>" name="choose-<?php the_ID();?>">
                        <span>Today</span>
                    </label>
                </div>
                <div class='choose-box-item toggle right'>
                    <label>
                        <input type="radio" id="friday-<?php the_ID();?>" name="choose-<?php the_ID();?>">
                        <span>Friday</span>
                    </label>
                </div>

                </div><!-- .choose-box -->
            </div>
        </div>
    </td>

</tr>