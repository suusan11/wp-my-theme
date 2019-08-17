<?php

function my_theme_assets()
{
    wp_enqueue_style('my_theme-stylesheet', get_template_directory_uri() . '/dist.assets/css/bundle.css', array(), '1.0.0', 'all');
}

add_action('wp_enqueue_scripts', 'my_theme_assets');

function my_theme_admin_assets()
{
    wp_enqueue_style('my_theme-admin-stylesheet', get_template_directory_uri() . '/dist.assets/css/admin.css', array(), '1.0.0', 'all');
}

add_action('admin_wp_enqueue_scripts', 'my_theme_assets');
