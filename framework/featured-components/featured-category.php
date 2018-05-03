<?php if(get_theme_mod('playon_featposts_cat_enable') && is_front_page()): ?>
    <div id="featured-cat" class="featured-section-area ">
        <div class="featured-cat-container container">
            <?php if(get_theme_mod('playon_featcat_title') != '' ): ?>
                <div class="section-title">
                        <span>
                            <?php echo esc_html(get_theme_mod('playon_featposts_title', __('Featured Category Area','playon'))); ?>
                        </span>
                </div>
            <?php endif; ?>
        <div class="cat-1">
            <?php for( $i=1; $i<=3; $i++ ) : ?>
                <div class="f-cat-wrapper">
                    <a href="<?php the_permalink() ?>" title="<?php the_title_attribute() ?>"></a>
                    <div class="f-cat col-md-4 col-sm-4">
                        <?php $catname = get_cat_name(get_theme_mod('playon_featposts_category_'.$i));
                        if ($catname !='' ) :
                            $catname = get_cat_name(get_theme_mod('playon_featposts_category_'.$i));
                            $catid = array(get_theme_mod('playon_featposts_category_'.$i));
                            $catdesc = category_description(get_theme_mod('playon_featposts_category_'.$i));
                            $category_link = get_category_link(get_theme_mod('playon_featposts_category_'.$i));
                            $showposts = 1;
                            $args=array(
                                'category__in' => $catid,
                                'showposts' => $showposts,
                                'orderby' => 'post_date',
                                'post_status' => 'publish',
//                                'post_type' => 'attachment',

                            );
                            $the_query = new WP_Query ( $args );
                            if($the_query->have_posts()) :
                                while ($the_query -> have_posts()) :
                                    $the_query -> the_post(); ?>
                                    <div class="out-thumb">
                                        <div class="folder">
                                            <a class="a" href="<?php echo esc_url( $category_link ); ?>"><i class="far fa-folder"></i></a>
                                            <a class="b" href="<?php echo esc_url( $category_link ); ?>"><i class="far fa-folder-open"></i></a>
                                        </div>
                                        <a href="<?php echo esc_url( $category_link ); ?>"><?php echo $catname; ?></a>
                                        <div class="cat-desc">
                                            <p> <?php  echo substr($catdesc,0,150).($catdesc ? "..." : "" ); ?></p>
                                        </div>
                                    </div>
                                <?php endwhile;
                            endif;
                            /* Restore original Post Data */
                            wp_reset_postdata();
                        endif; ?>
                    </div>
                </div>
            <?php endfor; ?>
        </div>

         <div class="cat-2">
            <?php for( $i=4; $i<=6; $i++ ) : ?>
                <div class="f-cat-wrapper">
                    <a href="<?php the_permalink() ?>" title="<?php the_title_attribute() ?>"></a>
                    <div class="f-cat col-md-4 col-sm-4">
                        <?php $catname = get_cat_name(get_theme_mod('playon_featposts_category_'.$i));
                        if ($catname !='' ) :
                            $catname = get_cat_name(get_theme_mod('playon_featposts_category_'.$i));
                            $catid = array(get_theme_mod('playon_featposts_category_'.$i));
                            $catdesc = category_description(get_theme_mod('playon_featposts_category_'.$i));
                            $category_link = get_category_link(get_theme_mod('playon_featposts_category_'.$i));
                            $showposts = 1;
                            $args=array(
                                'category__in' => $catid,
                                'showposts' => $showposts,
                                'orderby' => 'post_date',
                                'post_status' => 'publish',
//                                'post_type' => 'attachment',

                            );
                            $the_query = new WP_Query ( $args );
                            if($the_query->have_posts()) :
                                while ($the_query -> have_posts()) :
                                    $the_query -> the_post(); ?>
                                    <div class="out-thumb">
                                        <div class="folder">
                                        <a class="a" href="<?php echo esc_url( $category_link ); ?>"><i class="far fa-folder"></i></a>
                                        <a class="b" href="<?php echo esc_url( $category_link ); ?>"><i class="far fa-folder-open"></i></a>
                                        </div>

                                        <a href="<?php echo esc_url( $category_link ); ?>"><?php echo $catname; ?></a>
                                        <div class="cat-desc">
                                            <p> <?php  echo substr($catdesc,0,150).($catdesc ? "..." : "" ); ?></p>

                                        </div>
                                    </div>
                                <?php endwhile;
                            endif;
                            /* Restore original Post Data */
                            wp_reset_postdata();
                        endif; ?>
                    </div>
                </div>
            <?php endfor; ?>
          </div>

        </div>
    </div>
<?php endif; ?>