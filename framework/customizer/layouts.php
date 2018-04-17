<?php
/**
 * Created by PhpStorm.
 * User: Gourav
 * Date: 2/23/2018
 * Time: 11:49 AM
 */
function inkshades_customize_register_layouts( $wp_customize )
{
    // Layout and Design
    $wp_customize->add_panel( 'inkshades_design_panel', array(
        'priority'       => 3,
        'capability'     => 'edit_theme_options',
        'theme_supports' => '',
        'title'          => __('Design & Layout','inkshades'),
    ) );

    $wp_customize->add_section(
        'inkshades_design_options',
        array(
            'title'     => __('Blog Layout','inkshades'),
            'priority'  => 1,
            'panel'     => 'inkshades_design_panel'
        )
    );


    $wp_customize->add_setting(
        'inkshades_blog_layout',
        array( 'sanitize_callback' => 'inkshades_sanitize_blog_layout' )
    );

    function inkshades_sanitize_blog_layout( $input ) {
        if ( in_array($input, array('inkshades') ) )
            return $input;
        else
            return '';
    }

    $wp_customize->add_control(
        'inkshades_blog_layout',array(
            'label' => __('Select Layout','inkshades'),
            'settings' => 'inkshades_blog_layout',
            'section'  => 'inkshades_design_options',
            'type' => 'select',
            'choices' => array(
                'inkshades' => __('inkshades Layout','inkshades')
            )
        )
    );
    //Sidebar Settings
    $wp_customize->add_section(
        'inkshades_sidebar_options',
        array(
            'title'     => __('Sidebar Layout','inkshades'),
            'priority'  => 2,
            'panel'     => 'inkshades_design_panel'
        )
    );

    $wp_customize->add_setting(
        'inkshades_disable_sidebar',
        array( 'sanitize_callback' => 'inkshades_sanitize_checkbox' )
    );

    $wp_customize->add_control(
        'inkshades_disable_sidebar', array(
            'settings' => 'inkshades_disable_sidebar',
            'label'    => __( 'Disable Sidebar Everywhere.','inkshades' ),
            'section'  => 'inkshades_sidebar_options',
            'type'     => 'checkbox',
            'default'  => false
        )
    );

    $wp_customize->add_setting(
        'inkshades_disable_sidebar_home',
        array( 'sanitize_callback' => 'inkshades_sanitize_checkbox' )
    );

    $wp_customize->add_control(
        'inkshades_disable_sidebar_home', array(
            'settings' => 'inkshades_disable_sidebar_home',
            'label'    => __( 'Disable Sidebar on Blog & Archives.','inkshades' ),
            'section'  => 'inkshades_sidebar_options',
            'type'     => 'checkbox',
            'active_callback' => 'inkshades_show_sidebar_options',
            'default'  => false
        )
    );

    $wp_customize->add_setting(
        'inkshades_disable_sidebar_front',
        array( 'sanitize_callback' => 'inkshades_sanitize_checkbox' )
    );

    $wp_customize->add_control(
        'inkshades_disable_sidebar_front', array(
            'settings' => 'inkshades_disable_sidebar_front',
            'label'    => __( 'Disable Sidebar on Front Page.','inkshades' ),
            'section'  => 'inkshades_sidebar_options',
            'type'     => 'checkbox',
            'active_callback' => 'inkshades_show_sidebar_options',
            'default'  => false
        )
    );


    $wp_customize->add_setting(
        'inkshades_sidebar_width',
        array(
            'default' => 4,
            'sanitize_callback' => 'inkshades_sanitize_positive_number' )
    );

    $wp_customize->add_control(
        'inkshades_sidebar_width', array(
            'settings' => 'inkshades_sidebar_width',
            'label'    => __( 'Sidebar Width','inkshades' ),
            'description' => __('Min: 25%, Default: 33%, Max: 40%','inkshades'),
            'section'  => 'inkshades_sidebar_options',
            'type'     => 'range',
            'active_callback' => 'inkshades_show_sidebar_options',
            'input_attrs' => array(
                'min'   => 3,
                'max'   => 5,
                'step'  => 1,
                'class' => 'sidebar-width-range',
                'style' => 'color: #0a0',
            ),
        )
    );

    /* Active Callback Function */
    function inkshades_show_sidebar_options($control) {

        $option = $control->manager->get_setting('inkshades_disable_sidebar');
        return $option->value() == false ;

    }
    //custom footer text
    $wp_customize-> add_section(
        'inkshades_custom_footer',
        array(
            'title'			=> __('Custom Footer Text','inkshades'),
            'description'	=> __('Enter your Own Copyright Text.','inkshades'),
            'priority'		=> 30,
            'panel'			=> 'inkshades_design_panel'
        )
    );

    $wp_customize->add_setting(
        'inkshades_footer_text',
        array(
            'default'		=> '',
            'sanitize_callback'	=> 'sanitize_text_field'
        )
    );

    $wp_customize->add_control(
        'inkshades_footer_text',
        array(
            'section' => 'inkshades_custom_footer',
            'settings' => 'inkshades_footer_text',
            'type' => 'text'
        )
    );
    
}
add_action( 'customize_register', 'inkshades_customize_register_layouts' );