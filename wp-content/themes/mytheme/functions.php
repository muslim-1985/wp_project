<?php
add_action('wp_enqueue_scripts', 'mytheme_scripts');
function mytheme_scripts() {
  wp_enqueue_style('style-css', get_stylesheet_uri());
  wp_enqueue_style('grid', get_template_directory_uri() . '/css/grid.css');
  wp_enqueue_style('grid', get_template_directory_uri() . '/css/reset.css');
  wp_enqueue_script('html5', get_template_directory_uri() . '/js/html5.js');
  wp_enqueue_script('jquery');
  wp_enqueue_script('roundabout_shapes', get_template_directory_uri() . '/js/roundabout_shapes.js');
  wp_enqueue_script('roundabout', get_template_directory_uri() . '/js/roundabout.js');
}
 ?>
