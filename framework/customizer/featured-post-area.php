<?php
function inkshades_customize_register_featured_angle( $wp_customize ) {
    //FEATURED AREA 2
    $wp_customize->add_section(
        'inkshades_fc_fa2',
        array(
            'title'     => __('Featured Area','inkshades'),
            'priority'  => 10,
        )
    );

    $wp_customize->add_setting(
        'inkshades_fa2_enable',
        array( 'sanitize_callback' => 'inkshades_sanitize_checkbox' )
    );

    $wp_customize->add_control(
        'inkshades_fa2_enable', array(
            'settings' => 'inkshades_fa2_enable',
            'label'    => __( 'Enable Featured Area 1.', 'inkshades' ),
            'section'  => 'inkshades_fc_fa2',
            'type'     => 'checkbox',
        )
    );


    $wp_customize->add_setting(
        'inkshades_fa2_title',
        array( 'sanitize_callback' => 'sanitize_text_field' )
    );

    $wp_customize->add_control(
        'inkshades_fa2_title', array(
            'settings' => 'inkshades_fa2_title',
            'label'    => __( 'Title for the Featured Post Area','inkshades' ),
            'section'  => 'inkshades_fc_fa2',
            'type'     => 'text',
        )
    );

    $wp_customize->add_setting(
        'inkshades_fa2_cat',
        array( 'sanitize_callback' => 'inkshades_sanitize_category' )
    );

    $wp_customize->add_control(
        new Inkshades_WP_Customize_Category_Control(
            $wp_customize,
            'inkshades_fa2_cat',
            array(
                'label'    => __('Choose Category.','inkshades'),
                'settings' => 'inkshades_fa2_cat',
                'section'  => 'inkshades_fc_fa2'
            )
        )
    );
}
add_action( 'customize_register', 'inkshades_customize_register_featured_angle' );