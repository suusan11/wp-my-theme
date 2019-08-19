<?php
/**
 * Created by PhpStorm.
 * User: miiiiiiiiiiie
 * Date: 2019-02-23
 * Time: 22:57
 */

require_once('library/helpers.php');
require_once('library/enqueue-assets.php');

function after_pagination()
{
    echo 'test';
}
add_action('_themename_after_pagination', 'after_pagination');


function no_posta_text($text)
{
    return $text . 'filter test';
}
add_filter('_themename_no_post_text', 'no_posta_text');
