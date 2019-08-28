<?php
 function _themename_customize_register($wp_customize)
 {
     $wp_customize -> add_section('_themename_footer_options', array(
        'title' => esc_html__('Footer Options', '_themaname'),
        'description' => esc_html__('You can change footer from here.', '_themaname')
     ));





     $wp_customize -> add_setting('_themename_site_info', array(
      'default' => '',
      'sanitize_callback' => 'sanitize_text_field'
    ));

     $wp_customize -> add_control('_themename_site_info', array(
      'type' => 'text',
      'label' => esc_html__('Site Info', '_themaname'),
      'section' => '_themename_footer_options'
    ));
 }
add_action('customize_register', '_themename_customize_register');
