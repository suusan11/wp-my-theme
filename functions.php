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
