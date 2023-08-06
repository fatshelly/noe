<?php
add_action('init', function () {
    add_theme_support('post-thumbnails');
});

add_theme_support('title-tag');

// add_theme_support('menus');

// function my_enqueue_styles() {
//     wp_enqueue_style('ress', '//unpkg.com/ress/dist/ress.min.css', array(), false, 'all');
//     wp_enqueue_style('style', get_template_directory_uri().'/style.css');
// }
// add_action('wp_enqueue_scripts', 'my_enqueue_styles');