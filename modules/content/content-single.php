<?php
/**
 * @package hanne
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div id="featured-image">
        <?php if (has_post_thumbnail()) : ?>
            <a href="<?php the_permalink() ?>" title="<?php the_title_attribute() ?>"><?php the_post_thumbnail('playon-pop-thumb'); ?></a>
        <?php endif; ?>
    </div>

    <header class="entry-header single-header">
        <?php the_title( '<h1 class="entry-title title-font">', '</h1>' ); ?>
        <div class="entry-meta">
            <?php playon_posted_on(); ?>
        </div><!-- .entry-meta -->
    </header><!-- .entry-header -->

    <div class="entry-content">
        <?php the_content(); ?>
        <?php
        wp_link_pages( array(
            'before' => '<div class="page-links">' . __( 'Pages:', 'playon' ),
            'after'  => '</div>',
        ) );
        ?>
    </div><!-- .entry-content -->

    <footer class="entry-footer">
        <?php playon_entry_modified_footer(); ?>
    </footer><!-- .entry-footer -->
</article><!-- #post-## -->
