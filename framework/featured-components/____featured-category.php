<div class="featured-category">
    <div class="container">
        <div class="col-md-12 col-sm-12">

            <?php if (get_theme_mod('playon_cat_title')) : ?>
                <div class="section-title">
                    <span><?php echo get_theme_mod('playon_cat_title',__('Featured Category','playon')); ?></span>
                </div>
            <?php endif; ?>

            <?php
            $categories = get_categories( array(
                'orderby' => 'name',
                'parent'  => 0,
                'category' => get_theme_mod('playon_featured_cat')

            ) );
            foreach ( $categories as $category ) {
                printf( '<a href="%1$s">%2$s</a><br />',
                    esc_url( get_category_link( $category->term_id ) ),
                    esc_html( $category->name )
                );
            }
            ?>
        </div>
    </div>
</div>