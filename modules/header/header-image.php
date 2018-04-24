<?php  if(has_header_image()): ?>
    <div class="header-image-wrapper">
        <!--hhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhh -->

        <?php if(is_single()):?>

        <div class="post-header col-md-12 col-sm-12">
            <div class="col-md-6 col-sm-6 post-title">
                <header class="entry-header single-header">
                    <?php the_title( '<h1 class="entry-title title-font">', '</h1>' ); ?>
                    <div class="entry-meta">
                        <?php playon_posted_on(); ?>
                    </div><!-- .entry-meta -->
                </header><!-- .entry-header -->
            </div>
            <div class="col-md-6 col-sm-6 post-img">
                    <div id="featured-image">
                        <?php if (has_post_thumbnail()) : ?>
                            <a href="<?php the_permalink() ?>" title="<?php the_title_attribute() ?>"><?php the_post_thumbnail('playon-pop-thumb'); ?></a>
                        <?php endif; ?>
                    </div>
            </div>

        </div>
       <?php endif;?>

        <!--hhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhh -->
        <div class="linear-grad"></div>
        <div class="header-image">
            <div id="mobile-header-image">
                <img src="<?php header_image(); ?>">
            </div>
        </div>
    </div>
<?php  endif; ?>

