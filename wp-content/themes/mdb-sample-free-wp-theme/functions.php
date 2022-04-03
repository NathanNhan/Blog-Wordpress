<?php

require_once 'inc/assets.php';


function add_theme_supports() {
  add_theme_support('post-thumbnails');
  register_nav_menus(array(
    'primary' => __('Primary Menu'),
    'footer' => __('Footer Menu'),
  ));

}
add_action('after_setup_theme','add_theme_supports');