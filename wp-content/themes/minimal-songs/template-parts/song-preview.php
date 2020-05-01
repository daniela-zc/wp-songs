<tr id="post-<?php the_ID();?>" class="<?php echo $class ?> row" >
    <td class='col-md-2'> 
        <a href="<?php the_permalink(); ?>"> <div class ='play-icon'> </div> </a>
        
    </td>
    
    <td class='col-md-6'>
        <p class='dim-text song-title'> <?php the_title();?> </p>
        <p class='song-title'> <?php echo get_post_meta($post->ID, 'artistname', true); ?> </p>
    </td>

    <td class='choose-wrap col-md-4'>
        <div class='row '>
            <div class='choose-box col-sm-5'>
                <input type="radio" id="today-<?php the_ID();?>" name="choose" value="today">
                <label for="today-<?php the_ID();?>">Today</label>
            </div>
            <div class='choose-box col-sm-5'>
                <input type="radio" id="friday-<?php the_ID();?>" name="choose" value="friday">
                <label for="friday-<?php the_ID();?>">Friday</label>
            </div>
        </div>
    </td>

</tr>