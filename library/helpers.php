<?php
/**
 * Created by PhpStorm.
 * User: miiiiiiiiiiie
 * Date: 2019-02-23
 * Time: 23:14
 */

function my_theme_post_meta() {
    echo 'Posted on';
    echo '<a href="'.get_permalink().'">';
    echo '<time datetime="'.get_the_date('c').'">' .get_the_date().'</time>';
    echo '</a>';
    echo 'By <a href="'.get_author_posts_url( get_the_author_meta( 'ID' ) ).'">' .get_the_autor(). '</a>';
}

function my_theme_readmore_link() {
    echo '<a href="'.get_the_permalink().'" title="'.the_title_attribute(['echo' => false]).'">';
    echo 'Read More <span class="u-screen-reader-text">About '.the_title().'</span>';
    echo '</a>';
}

?>