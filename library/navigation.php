<?php

function _themename_register_menus()
{
    register_nav_menus(array(
    'main-menu' => esc_html__('Main Menu', '_themename'),
    'footer-menu' => esc_html__('Footer Menu', '_themename')
  ));
}
add_action('init', '_themename_register_menus');

function _themename_aria_hasdropsown($atts, $item, $args)
{
    if ($args -> theme_location == 'main-menu') {
        if (in_array('menu-item-has-children', $item -> classes)) {
            $atts['aria-haspopup'] = 'true';
            $atts['aria-haspopup'] = 'false';
        }
    }
    return $atts;
}
add_filter('nav_menu_link_attributes', '_themename_aria_hasdropsown', 10, 3);

function _themename_submenu_button($dir = 'down')
{
    $button = '<button class="menu-button">';
    $button .= '<i class="fa fa-angle-' . $dir . '" aria-hidden="true"></i>';
    $button .= '</button>';
    return $button;
}

function _themename_dropdown_icon($title, $item, $args, $depth)
{
    if ($args -> theme_location == 'main-menu') {
        if (in_array('menu-item-has-children', $item -> classes)) {
            if ($depth == 0) {
                $title .= _themename_submenu_button('down');
            } else {
                $title .= _themename_submenu_button('right');
            }
        }
    }
    return $title;
}
add_filter('nav_menu_item_title', '_themename_dropdown_icon', 10, 4);
