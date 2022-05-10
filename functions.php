<?php
//Theme Functions Go Here

// function myFunction() {
//
// }
//
// myFunction();

function enqueue_my_styles_and_scripts(){
  //Enqueueing our custom Portfolio styles
  wp_enqueue_style('my-styles', get_stylesheet_directory_uri() . '/myassets/externalcss.css', array(), '1.0.0', 'all');


  wp_enqueue_script('my-scripts', get_theme_file_uri() . '/myassets/externaljava.js', array('jquery'), '1.0.0', true);


}

add_action('wp_enqueue_scripts', 'enqueue_my_styles_and_scripts');
