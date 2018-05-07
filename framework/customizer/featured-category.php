<?php
function playon_customize_register_fp_cat( $wp_customize ) {
    //FEATURED POSTS
    $wp_customize->add_section(
        'playon_featposts_cat',
        array(
            'title'     => __('Featured Posts Categories','playon'),
            'priority'  => 5,
        )
    );

    $wp_customize->add_setting(
        'playon_featposts_cat_enable',
        array( 'sanitize_callback' => 'playon_sanitize_checkbox' )
    );

    $wp_customize->add_control(
        'playon_featposts_cat_enable', array(
            'settings' => 'playon_featposts_cat_enable',
            'label'    => __( 'Enable the Post Categories on Front Page', 'playon' ),
            'section'  => 'playon_featposts_cat',
            'type'     => 'checkbox',
        )
    );

    $wp_customize->add_setting(
        'playon_featcat_title',
        array( 'sanitize_callback' => 'sanitize_text_field' )
    );

    $wp_customize->add_control(
        'playon_featcat_title', array(
            'settings' => 'playon_featcat_title',
            'label'    => __( 'Title', 'playon' ),
            'section'  => 'playon_featposts_cat',
            'type'     => 'text',
        )
    );

    for( $x = 1; $x <= 6; $x++ ):

        $wp_customize->add_setting(
            'playon_featposts_category_'.$x,
            array( 'sanitize_callback' => 'playon_sanitize_category' )
        );

        $wp_customize->add_control(
            new playon_WP_Customize_Category_Control(
                $wp_customize,
                'playon_featposts_category_'.$x,
                array(
                    'label'    => __('Select Featured Category ','playon').$x,
                    'settings' => 'playon_featposts_category_'.$x,
                    'section'  => 'playon_featposts_cat'
                )
            )
        );

    endfor;
}
add_action( 'customize_register', 'playon_customize_register_fp_cat' );