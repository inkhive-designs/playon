<?php  if(has_header_image()): ?>
    <div class="header-image-wrapper">
        <div class="linear-grad"></div>
        <div class="header-image">
            <?php get_template_part('modules/header/top','bar'); ?>
            <div id="mobile-header-image">
                <img src="<?php header_image(); ?>">
            </div>
        </div>
    </div>
<?php  endif; ?>

