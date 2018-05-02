<?php
/**
 * @package playon
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('col-md-12 col-sm-12 playon-try'); ?>>

    <?php if( has_post_thumbnail() ) : ?>
        <div class="featured-dthumb col-md-4">
            <div class="img-meta">
                <div class="img-meta-link meta-icon"><a class='meta-link' href="<?php the_permalink() ?>"><i class="fa fw-link fa-link"></i></a></div>
                <?php    $thumb_id = get_post_thumbnail_id();
                $thumb_url = wp_get_attachment_image_src($thumb_id,'playon-pop-thumb', true);
                ?>
                <div class="img-meta-img meta-icon"><a class='meta-link meta-link-img' title="<?php the_title(); ?>" href="<?php echo $thumb_url[0] ?>"><i class="fa fa-image fa-image"></i></a></div>
            </div>
            <a href="<?php the_permalink() ?>" class="meta-link-img" title="<?php the_title_attribute() ?>"><?php the_post_thumbnail('playon-pop-thumb'); ?></a>
        </div><!--.featured-thumb-->
    <?php endif; ?>

    <?php $class = has_post_thumbnail() ? 'col-md-8' : 'col-md-12 resize';  ?>

    <div class="out-thumb <?php echo $class; ?>">
        <h1 class="entry-title title-font"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h1>
<!--        <div class="postedon">--><?php //playon_posted_on_icon('both'); ?><!--</div>-->
        <span class="entry-excerpt"><?php echo substr(get_the_excerpt(),0,400); ?></span>
        <span class="readmore"><a href="<?php the_permalink() ?>"><?php esc_html_e('Continue Reading','playon'); ?> &rarr;</a></span>
    </div>

</article><!-- #post-## -->