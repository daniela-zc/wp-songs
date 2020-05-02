<tr id="post-<?php the_ID();?>" class="<?php echo $class ?> " >
    <td class='td-play-wrap'> 
        <a href="<?php the_permalink(); ?>"> 
            <?php minimalsongs_play_png()?>
        </a>
    </td>
    
    <td class='td-song-wrap'>
        <p class='dim-text song-title'> <?php the_title();?> </p>
        <p class='song-title'> <?php echo get_post_meta($post->ID, 'artistname', true); ?> </p>
    </td>

    <td class='td-choose-wrap'>
        <div class="row end-xs">
            <div class="choose-wrap col-xs-10">
                <div class='choose-box box'>
                    <div class='choose-box-item box'>
                        <input type="radio" id="today-<?php the_ID();?>" name="choose" value="today">
                        <label for="today-<?php the_ID();?>">Today</label>
                    </div>
                    <div class='choose-box-item box'>
                        <input type="radio" id="friday-<?php the_ID();?>" name="choose" value="friday">
                        <label for="friday-<?php the_ID();?>">Friday</label>
                    </div>
                </div>
            </div>
        </div>
    </td>

</tr>