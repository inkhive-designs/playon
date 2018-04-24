<?php
function playon_customize_register_featured_angle( $wp_customize ) {
    //FEATURED AREA 2
    $wp_customize->add_section(
        'playon_fc_fa2',
        array(
            'title'     => __('Featured Area 1','playon'),
            'priority'  => 10,
        )
    );

    $wp_customize->add_setting(
        'playon_fa2_enable',
        array( 'sanitize_callback' => 'playon_sanitize_checkbox' )
    );

    $wp_customize->add_control(
        'playon_fa2_enable', array(
            'settings' => 'playon_fa2_enable',
            'label'    => __( 'Enable Featured Area 1.', 'playon' ),
            'section'  => 'playon_fc_fa2',
            'type'     => 'checkbox',
        )
    );


    $wp_customize->add_setting(
        'playon_fa2_title',
        array( 'sanitize_callback' => 'sanitize_text_field' )
    );

    $wp_customize->add_control(
        'playon_fa2_title', array(
            'settings' => 'playon_fa2_title',
            'label'    => __( 'Title for the Featured Post Area','playon' ),
            'section'  => 'playon_fc_fa2',
            'type'     => 'text',
        )
    );

    $wp_customize->add_setting(
        'playon_fa2_cat',
        array( 'sanitize_callback' => 'playon_sanitize_category' )
    );

    $wp_customize->add_control(
        new Playon_WP_Customize_Category_Control(
            $wp_customize,
            'playon_fa2_cat',
            array(
                'label'    => __('Choose Category.','playon'),
                'settings' => 'playon_fa2_cat',
                'section'  => 'playon_fc_fa2'
            )
        )
    );
}
add_action( 'customize_register', 'playon_customize_register_featured_angle' );