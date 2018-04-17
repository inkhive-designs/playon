<?php
/**
 * @package playon
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('col-md-6 col-sm-6 col-xs-12 grid playon'); ?>>
        <div class="featured-thumb hvr-shadow-radial">
            <?php if (has_post_thumbnail()) : ?>
                <a href="<?php the_permalink() ?>" title="<?php the_title() ?>"><?php the_post_thumbnail('playon-thumb',array(  'alt' => trim(strip_tags( $post->post_title )))); ?></a>
            <?php else: ?>
                <a href="<?php the_permalink() ?>" title="<?php the_title() ?>"><img alt="<?php the_title() ?>" src="<?php echo get_template_directory_uri()."/assets/images/placeholder2.jpg"; ?>"></a>
            <?php endif; ?>

        </div><!--.featured-thumb-->

        <div class="out-thumb">
            <header class="entry-header">
                <h3 class="entry-title body-font"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h3>
            </header><!-- .entry-header -->
        </div><!--.out-thumb-->


</article><!-- #post-## -->