<?php

function enqueue_custom_styles() {
    wp_enqueue_style('mainmincss', get_template_directory_uri() . '/assets/css/main.min.css');

    wp_enqueue_script('modal', get_template_directory_uri() . '/assets/js/modal.js', '', null, true);

    wp_enqueue_script('mobilemenu', get_template_directory_uri() . '/assets/js/mobile-menu.js', '', null, true);
} 


add_action('wp_enqueue_scripts', 'enqueue_custom_styles');

show_admin_bar(false);

add_theme_support('post-thumbnails');

add_theme_support('post-thumbnails', array('portfolio'));