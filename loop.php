<?php if (have_posts()) { ?>

<?php while (have_posts()) { ?>

<?php the_post(); ?>
<?php get_template_part('template-parts/post/content.php'); ?>
<?php } ?>

<?php the_posts_pagination(); ?>
<?php do_action('_themename_after_pagination'); ?>
<?php } else { ?>
<?php get_template_part('template-parts/post/content.php', 'none'); ?>
<?php }
