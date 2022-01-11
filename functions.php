<?php

function rjs_styles() {
  wp_enqueue_style( 'tailwindcss', get_template_directory_uri() . '/assets/css/tailwind.prod.css', array(), filemtime(get_template_directory() .'/assets/css/tailwind.prod.css'), 'all');
}

add_action('wp_enqueue_scripts', 'rjs_styles');