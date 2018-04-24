<!--front page builder start-->
<?php if ( get_theme_mod('playon_static_page_enable1') && is_home()) : ?>
    <div id="static_page" class="static_page-content1">
        <div class="container static_page-container">
            <?php $class = wp_get_attachment_url( get_post_thumbnail_id(get_theme_mod('playon_static_page_selectpage1')) ) ? 'col-md-6 col-sm-6' : 'col-md-12 centered'?>
            <div class ="<?php echo $class;?> h-content">
                <h1 class="title">
                    <?php echo get_the_title(esc_html(get_theme_mod('playon_static_page_selectpage1'))); ?>
                </h1>
                <?php if(get_theme_mod('playon_static_page_full_content1', true)) : ?>
                    <div class="excerpt">
                        <?php $my_postid = get_theme_mod('playon_static_page_selectpage1');
                        $content_post = get_post($my_postid);
                        $content = $content_post->post_content;
                        $content = apply_filters('the_content', $content);
                        echo $content; ?>
                    </div>
                <?php else : ?>
                    <div class="excerpt">
                        <?php $my_postid = get_theme_mod('playon_static_page_selectpage1');
                        $content_post = get_post($my_postid);
                        $content = $content_post->post_content;
                        $content = apply_filters('the_content', $content);
                        echo substr($content, 0, 200)."..."; ?>
                    </div>
                <?php endif; ?>
                <?php if ( get_theme_mod('playon_static_page_button1') != '') : ?>
                    <a href="<?php the_permalink(get_theme_mod('playon_static_page_selectpage1')); ?>" class="more-button">
                        <?php echo esc_html(get_theme_mod('playon_static_page_button1')); ?>
                    </a>
                <?php endif; ?>
            </div>

            <?php if(wp_get_attachment_url( get_post_thumbnail_id(get_theme_mod('playon_static_page_selectpage1')) )):?>
                <div class="f-image col-md-6 col-sm-6">
                    <?php $a =  wp_get_attachment_url( get_post_thumbnail_id(get_theme_mod('playon_static_page_selectpage1')) ); ?>
                    <a href="<?php the_permalink(get_theme_mod('playon_static_page_selectpage1')); ?>"><img alt="<?php the_title()?>" src="<?php echo $a; ?>"></a>
                </div>
            <?php endif;?>
        </div>
    </div>
<?php endif; ?>
<!--front page builder end-->


<!-- Static page 2 start -->
<!--front page builder start-->
<?php if ( get_theme_mod('playon_static_page_enable2') && is_home()) : ?>
    <div id="static_page2" class="static_page-content2">
        <div class="container static_page-container">
            <?php if(wp_get_attachment_url( get_post_thumbnail_id(get_theme_mod('playon_static_page_selectpage2')) )):?>
                <div class="f-image col-md-6 col-sm-6">
                    <?php $a =  wp_get_attachment_url( get_post_thumbnail_id(get_theme_mod('playon_static_page_selectpage2')) ); ?>
                    <a href="<?php the_permalink(get_theme_mod('playon_static_page_selectpage2')); ?>"><img alt="<?php the_title()?>" src="<?php echo $a; ?>"></a>
                </div>
            <?php endif;?>

            <?php $class = wp_get_attachment_url( get_post_thumbnail_id(get_theme_mod('playon_static_page_selectpage2')) ) ? 'col-md-6 col-sm-6' : 'col-md-12 centered'?>
            <div class ="<?php echo $class;?> h-content">
                <h1 class="title">
                    <?php echo get_the_title(esc_html(get_theme_mod('playon_static_page_selectpage2'))); ?>
                </h1>
                <?php if(get_theme_mod('playon_static_page_full_content2', true)) : ?>
                    <div class="excerpt">
                        <?php $my_postid = get_theme_mod('playon_static_page_selectpage2');
                        $content_post = get_post($my_postid);
                        $content = $content_post->post_content;
                        $content = apply_filters('the_content', $content);
                        echo $content; ?>
                    </div>
                <?php else : ?>
                    <div class="excerpt">
                        <?php $my_postid = get_theme_mod('playon_static_page_selectpage2');
                        $content_post = get_post($my_postid);
                        $content = $content_post->post_content;
                        $content = apply_filters('the_content', $content);
                        echo substr($content, 0, 200)."..."; ?>
                    </div>
                <?php endif; ?>
                <?php if ( get_theme_mod('playon_static_page_button2') != '') : ?>
                    <a href="<?php the_permalink(get_theme_mod('playon_static_page_selectpage2')); ?>" class="more-button">
                        <?php echo esc_html(get_theme_mod('playon_static_page_button2')); ?>
                    </a>
                <?php endif; ?>
            </div>

        </div>
    </div>
<?php endif; ?>
<!-- Static page 2 end -->

<!-- Static page 3 start -->
<?php if ( get_theme_mod('playon_static_page_enable3') && is_home()) : ?>
    <div id="static_page" class="static_page-content3">
        <div class="container static_page-container">
            <?php $class = wp_get_attachment_url( get_post_thumbnail_id(get_theme_mod('playon_static_page_selectpage3')) ) ? 'col-md-6 col-sm-6' : 'col-md-12 centered'?>
            <div class ="<?php echo $class;?> h-content">
                <h1 class="title">
                    <?php echo get_the_title(esc_html(get_theme_mod('playon_static_page_selectpage3'))); ?>
                </h1>
                <?php if(get_theme_mod('playon_static_page_full_content3', true)) : ?>
                    <div class="excerpt">
                        <?php $my_postid = get_theme_mod('playon_static_page_selectpage3');
                        $content_post = get_post($my_postid);
                        $content = $content_post->post_content;
                        $content = apply_filters('the_content', $content);
                        echo $content; ?>
                    </div>
                <?php else : ?>
                    <div class="excerpt">
                        <?php $my_postid = get_theme_mod('playon_static_page_selectpage3');
                        $content_post = get_post($my_postid);
                        $content = $content_post->post_content;
                        $content = apply_filters('the_content', $content);
                        echo substr($content, 0, 200)."..."; ?>
                    </div>
                <?php endif; ?>
                <?php if ( get_theme_mod('playon_static_page_button3') != '') : ?>
                    <a href="<?php the_permalink(get_theme_mod('playon_static_page_selectpage3')); ?>" class="more-button">
                        <?php echo esc_html(get_theme_mod('playon_static_page_button3')); ?>
                    </a>
                <?php endif; ?>
            </div>

            <?php if(wp_get_attachment_url( get_post_thumbnail_id(get_theme_mod('playon_static_page_selectpage3')) )):?>
                <div class="f-image col-md-6 col-sm-6">
                    <?php $a =  wp_get_attachment_url( get_post_thumbnail_id(get_theme_mod('playon_static_page_selectpage3')) ); ?>
                    <a href="<?php the_permalink(get_theme_mod('playon_static_page_selectpage3')); ?>"><img alt="<?php the_title()?>" src="<?php echo $a; ?>"></a>
                </div>
            <?php endif;?>
        </div>
    </div>
<?php endif; ?>
<!--front page builder end-->