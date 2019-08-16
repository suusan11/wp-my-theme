<?php
/**
 * Created by PhpStorm.
 * User: miiiiiiiiiiie
 * Date: 2019-02-21
 * Time: 15:23
 *
 */
?>

<?php get_header(); ?>

<?php if (have_posts()) { ?>

<?php while (have_posts()) { ?>

<?php the_post(); ?>

<h2>
    <a href="<?php the_permalink(); ?>"
        title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
</h2>

<div>
    <?php my_theme_post_meta(); ?>
</div>
<div>
    <?php the_excerpt(); ?>
</div>
<?php my_theme_readmore_link(); ?>
<?php } ?>

<?php the_posts_pagination(); ?>
<?php } else { ?>

<p><?php __('no posts yet', 'mytheme'); ?>
</p>

<?php } ?>


<?php get_footer();
