<?php
/**
 * Created by PhpStorm.
 * User: miiiiiiiiiiie
 * Date: 2019-02-23
 * Time: 23:14
 */

function my_theme_post_meta()
{
    // tranlators %s: Post Data
    printf(
        esc_html__('Posted on %s', 'mytheme'),
        '<a href="'.esc_url(get_permalink()).'"><time datetime="'.esc_attr(get_the_date('c')).'">' .esc_html(get_the_date()).'</time></a>'
    );
    // tranlators %s: Post Author
    printf(
        esc_html__(' By %s', 'mytheme'),
        '<a href="'.esc_url(get_author_posts_url(get_the_author_meta('ID'))).'">' .esc_html(get_the_author()). '</a>'
    );
}

function my_theme_readmore_link()
{
    echo '<a href="'.esc_url(get_the_permalink()).'" title="'.the_title_attribute(['echo' => false]).'">';
    // tranlators %s: Post Title
    printf(
        wp_kses(
            __('Read More <span class="u-screen-reader-text">About %s</span>', 'mytheme'),
            [
                'span' => [
                    'class' => []
                ]
            ]
        ),
        get_the_title()
    );
    echo '</a>';
}
