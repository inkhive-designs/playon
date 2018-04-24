<?php
/**
 * @package playon
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('col-md-4 col-sm-4 col-xs-12 grid gallery'); ?>>
    <div class="featured-thumb">
        <?php if (has_post_thumbnail()) : ?>
            <a href="<?php the_permalink() ?>" title="<?php the_title() ?>"><?php the_post_thumbnail('playon-thumb',array(  'alt' => trim(strip_tags( $post->post_title )))); ?></a>
        <?php else: ?>
            <a href="<?php the_permalink() ?>" title="<?php the_title() ?>"><img alt="<?php the_title() ?>" src="<?php echo get_template_directory_uri()."/assets/images/placeholder2.jpg"; ?>"></a>
        <?php endif; ?>
        <div class="read-more">
            <span class="readmore"><a href="<?php the_permalink() ?>"><?php _e('View','playon'); ?></a></span>
        </div>
    </div><!--.featured-thumb-->


</article><!-- #post-## -->




