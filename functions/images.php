<?php

  add_theme_support( 'post-thumbnails' ); 
  add_filter('upload_mimes', 'cc_mime_types');

  // Allow svg upload
  function cc_mime_types($mimes) {
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
  }

  // Renders image as img or svg tag depending on file extension
  function render_image($img_path, $output = true) {
    $img_info = pathinfo($img_path);
    if ($img_info['extension'] == 'svg') {
      if ($output) {
        echo wp_remote_fopen($img_path);
      }
      else {
        return wp_remote_fopen($img_path);
      }
    } 
    else {
      if ($output) {
        echo '<img src="'. $img_path .'">';
      }
      else {
        return '<img src="'. $img_path .'">';
      }
    }
  }

?>