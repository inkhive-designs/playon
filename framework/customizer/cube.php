<?php
/**
 * Created by PhpStorm.
 * User: Gourav
 * Date: 4/18/2018
 * Time: 10:03 AM
 */
function playon_customize_register_featured_cube( $wp_customize )
{
//FEATURED Posts (inherited from featured-news in css)
    $wp_customize->add_section(
        'playon_a_fe_boxes',
        array(
            'title' => __('Featured Area 2', 'playon'),
            'priority' => 35,
        )
    );

    $wp_customize->add_setting(
        'playon_fe_enable',
        array( 'sanitize_callback' => 'playon_sanitize_checkbox' )
    );

    $wp_customize->add_control(
        'playon_fe_enable', array(
            'settings' => 'playon_fe_enable',
            'label'    => __( 'Enable this section', 'playon' ),
            'description'    => __( 'Show your Top 4 Posts from the selected category.', 'playon' ),
            'section'  => 'playon_a_fe_boxes',
            'type'     => 'checkbox',
        )
    );

    $wp_customize->add_setting(
        'playon_fe_title',
        array( 'sanitize_callback' => 'sanitize_text_field' )
    );

    $wp_customize->add_control(
        'playon_fe_title', array(
            'settings' => 'playon_fe_title',
            'label'    => __( 'Title','playon' ),
            'description'    => __( 'Leave Blank to disable','playon' ),
            'section'  => 'playon_a_fe_boxes',
            'type'     => 'text',
        )
    );
    //categary 1
    $wp_customize->add_setting(
        'playon_fe_cat1_enable',
        array( 'sanitize_callback' => 'playon_sanitize_checkbox' )
    );

    $wp_customize->add_control(
        'playon_fe_cat1_enable', array(
            'settings' => 'playon_fe_cat1_enable',
            'label'    => __( 'Enable Category Section 1', 'playon' ),
            'description'    => __( 'Here you can manage only first category', 'playon' ),
            'section'  => 'playon_a_fe_boxes',
            'type'     => 'checkbox',
        )
    );

    $wp_customize->add_setting(
        'playon_fe_cat1',
        array( 'sanitize_callback' => 'playon_sanitize_category' )
    );

    $wp_customize->add_control(
        new Playon_WP_Customize_Category_Control(
            $wp_customize,
            'playon_fe_cat1',
            array(
                'label'    => __('Posts Category.','playon'),
                'settings' => 'playon_fe_cat1',
                'section'  => 'playon_a_fe_boxes'
            )
        )
    );

    //categary 2
    $wp_customize->add_setting(
        'playon_fe_cat2_enable',
        array( 'sanitize_callback' => 'playon_sanitize_checkbox' )
    );

    $wp_customize->add_control(
        'playon_fe_cat2_enable', array(
            'settings' => 'playon_fe_cat2_enable',
            'label'    => __( 'Enable Category Section 2', 'playon' ),
            'description'    => __( 'Here you can manage only second category', 'playon' ),
            'section'  => 'playon_a_fe_boxes',
            'type'     => 'checkbox',
        )
    );
    $wp_customize->add_setting(
        'playon_fe_cat2',
        array( 'sanitize_callback' => 'playon_sanitize_category' )
    );

    $wp_customize->add_control(
        new Playon_WP_Customize_Category_Control(
            $wp_customize,
            'playon_fe_cat2',
            array(
                'label'    => __('Posts Category.','playon'),
                'settings' => 'playon_fe_cat2',
                'section'  => 'playon_a_fe_boxes'
            )
        )
    );

    //categary 3
    $wp_customize->add_setting(
        'playon_fe_cat3_enable',
        array( 'sanitize_callback' => 'playon_sanitize_checkbox' )
    );

    $wp_customize->add_control(
        'playon_fe_cat3_enable', array(
            'settings' => 'playon_fe_cat3_enable',
            'label'    => __( 'Enable Category Section 3', 'playon' ),
            'description'    => __( 'Here you can manage only third category', 'playon' ),
            'section'  => 'playon_a_fe_boxes',
            'type'     => 'checkbox',
        )
    );
    $wp_customize->add_setting(
        'playon_fe_cat3',
        array( 'sanitize_callback' => 'playon_sanitize_category' )
    );

    $wp_customize->add_control(
        new Playon_WP_Customize_Category_Control(
            $wp_customize,
            'playon_fe_cat3',
            array(
                'label'    => __('Posts Category.','playon'),
                'settings' => 'playon_fe_cat3',
                'section'  => 'playon_a_fe_boxes'
            )
        )
    );

}
add_action( 'customize_register', 'playon_customize_register_featured_cube' );