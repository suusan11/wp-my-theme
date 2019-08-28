<?php
/**
 * Created by PhpStorm.
 * User: miiiiiiiiiiie
 * Date: 2019-02-21
 * Time: 16:34
 */
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta
        charset="<?php bloginfo("charset"); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <a class="u-skip-link" href="#content"><?php esc_attr_e('Skip to content', '_themename')?></a>
    <header rolw="banner" class="u-margin-bottom-40">
        <div class="c-header">
            <div class="o-container u-flex u-align-justify u-align-middle">
                <div class="c-haeder__logo">
                    <a class="c-header__blogname"
                        href="<?php echo esc_url(home_url('/'))?>"><?php esc_html(bloginfo('name')); ?></a>
                </div>
                <?php get_search_form(true); ?>
            </div>
        </div>
        <div class="c-navigation">
            <div class="o-container">
                <nav class="header-nav" role="navigation"
                    aria-label="<?php esc_html_e('Main Navigation', '_themename')?>">
                    <?php wp_nav_menu((array('theme_location' => 'main-menu')))?>
                </nav>
            </div>
        </div>
    </header>

    <div id="content">