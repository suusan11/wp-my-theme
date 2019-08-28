<?php
 function _themename_customize_register($wp_customize)
 {
     $wp_customize -> add_setting('_themename_site_info', array(
      'default' => '',
      'sanitize_callback' => 'sanitize_text_field'
    ));

     $wp_customize -> add_control('_themename_site_info', array(
      'type' => 'text',
      'label' => esc_html__('Site Info', '_themaname'),
      'section' => 'title_tagline'
    ));
 }
add_action('customize_register', '_themename_customize_register');
