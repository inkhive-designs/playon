<?php if ( get_theme_mod('playon_fe_enable') && is_front_page() ) : ?>
    <div id="cube" class="container-fluid featured-area container">
        <?php if (get_theme_mod('playon_fe_title')) : ?>
            <div class="section-title title-font container">
                <?php echo esc_html( get_theme_mod('playon_fe_title' ) ); ?>
            </div>
        <?php endif; ?>
        <div class="featured-posts-container container">
            <div class="fg-wrapper">
                <?php
                $count = 1;
                $args = array(
                    'post_type' => 'post',
                    'posts_per_page' => 3,
                    'cat'  => esc_html( get_theme_mod('playon_fe_cat1',0) ),
                    'ignore_sticky_posts' => 1,
                );
                $loop = new WP_Query( $args );
                while ( $loop->have_posts() ) :
                    $loop->the_post();
                    ?>
                    <div class="fg-item-container col-md-12 col-sm-12 col-xs-12">
                        <div class="fg-item">
                            <?php if (has_post_thumbnail()) : ?>
                                <a href="<?php the_permalink() ?>" title="<?php the_title() ?>"><?php the_post_thumbnail( 'playon-thumb' ); ?></a>
                            <?php else : ?>
                                <a href="<?php the_permalink() ?>" title="<?php the_title() ?>"><img src="<?php echo get_template_directory_uri()."/assets/images/placeholder2.jpg"; ?>"></a>
                            <?php endif; ?>
                            <div class="titledesc">
                                <h3><span class="title-font"><a href="<?php the_permalink() ?>"><?php echo the_title(); ?></a></span></h3>
                            </div>
                        </div>
                    </div>
                    <?php
                    $count++;
                endwhile; ?>
                <?php wp_reset_postdata(); ?>
                <div class="view-all">
                    <h3> <a href="<?php echo esc_url(get_category_link(get_theme_mod('playon_fe_cat1',0))); ?>">
                            <span class="title-font"><?php _e('View All','playon'); ?></span>
                        </a></h3>
                </div>
            </div>
            <!-- Ctaegory 2 -->
            <div class="fg-wrapper">
                <?php
                $count = 1;
                $args = array(
                    'post_type' => 'post',
                    'posts_per_page' => 3,
                    'cat'  => esc_html( get_theme_mod('playon_fe_cat2',0) ),
                    'ignore_sticky_posts' => 1,
                );
                $loop = new WP_Query( $args );
                while ( $loop->have_posts() ) :
                    $loop->the_post();
                    ?>
                    <div class="fg-item-container col-md-12 col-sm-12 col-xs-12">
                        <div class="fg-item">
                            <?php if (has_post_thumbnail()) : ?>
                                <a href="<?php the_permalink() ?>" title="<?php the_title() ?>"><?php the_post_thumbnail( 'playon-thumb' ); ?></a>
                            <?php else : ?>
                                <a href="<?php the_permalink() ?>" title="<?php the_title() ?>"><img src="<?php echo get_template_directory_uri()."/assets/images/placeholder2.jpg"; ?>"></a>
                            <?php endif; ?>
                            <div class="titledesc">
                                <h3><span class="title-font"><a href="<?php the_permalink() ?>"><?php echo the_title(); ?></a></span></h3>
                            </div>
                        </div>
                    </div>
                    <?php
                    $count++;
                endwhile; ?>
                <?php wp_reset_postdata(); ?>
                <div class="view-all">
                    <h3> <a href="<?php echo esc_url(get_category_link(get_theme_mod('playon_fe_cat2',0))); ?>">
                            <span class="title-font"><?php _e('View All','playon'); ?></span>
                        </a></h3>
                </div>
            </div>
        </div>
    </div>
<?php endif; ?>