<?php

function my_theme_assets()
{
    wp_enqueue_style('my_theme-stylesheet', get_template_directory_uri() . '/dist.assets/css/bundle.css', array(), '1.0.0', 'all');
    wp_enqueue_script('my_theme-scripts', get_template_directory_uri() . '/dist/assets/js/bundle.js', array('jquery'), '1.0.0', true);
}

add_action('wp_enqueue_scripts', 'my_theme_assets');

function my_theme_admin_assets()
{
    wp_enqueue_style('my_theme-admin-stylesheet', get_template_directory_uri() . '/dist.assets/css/admin.css', array(), '1.0.0', 'all');
    wp_enqueue_script('my_theme-admin-scripts', get_template_directory_uri() . '/dist/assets/js/admin.js', array(), '1.0.0', true);
}

add_action('admin_wp_enqueue_scripts', 'my_theme_assets');
