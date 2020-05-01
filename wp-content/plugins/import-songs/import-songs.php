<?php
/*
Plugin Name: Import Songs Plugin
description: import songs for Custom Post type "Song"
Version: 1.0
Author: Daniela Zeledón
*/


/**
 * Import songs form Json data
 */
function importsongs_activate() {
  $data = json_decode(file_get_contents( 'https://raw.githubusercontent.com/hangarcr/recruitment/master/db/songs.json'));
  foreach ($data->songs as $data_song) {
     _process_data($data_song);
  }
}

register_activation_hook( __FILE__, 'importsongs_activate' );


/**
 * Process data to create songs
 */
function _process_data($data_song){

  $song_post = array(
    'ID'            => 0,
    'post_title'    => $data_song->songname,
    'post_type'     => 'song',
    'post_status'   => 'publish'
  );
  
  $song_id = wp_insert_post( $song_post );
  if ( $song_id ) {
    foreach ($data_song as $key => $value) {
      update_post_meta( $song_id, $key, $value);           
    }
  }

}
