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
<div class="o-container u-margin-bottom-40">
    <div class="o-row">
        <div class="o-row_column o-row_column--span-12 o-row_column--span-8@medium">
            <main role='main'>
                <?php if (have_posts()) { ?>

                <?php while (have_posts()) { ?>

                <?php the_post(); ?>
                <article>
                    <h2>
                        <a href="<?php the_permalink(); ?>"
                            title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
                    </h2>

                    <div>
                        <?php _themename_post_meta(); ?>
                    </div>
                    <div>
                        <?php the_excerpt(); ?>
                    </div>
                    <?php _themename_readmore_link(); ?>
                </article>
                <?php } ?>

                <?php the_posts_pagination(); ?>
                <?php do_action('_themename_after_pagination'); ?>
                <?php } else { ?>

                <p><?php echo apply_filters('_themename_no_post_text', esc_html('no posts yet', '_themename')); ?>
                </p>

                <?php } ?>
            </main>
        </div>

        <div class="o-row_column o-row_column--span-12 o-row_column--span-4@medium">
            <?php get_sidebar(); ?>
        </div>
    </div>
</div>
<?php get_footer();
