<?php
/**
 * Created by PhpStorm.
 * User: Gourav
 * Date: 2/23/2018
 * Time: 11:49 AM
 */
function playon_customize_register_layouts( $wp_customize )
{
    // Layout and Design
    $wp_customize->add_panel( 'playon_design_panel', array(
        'priority'       => 3,
        'capability'     => 'edit_theme_options',
        'theme_supports' => '',
        'title'          => __('Design & Layout','playon'),
    ) );

    $wp_customize->add_section(
        'playon_design_options',
        array(
            'title'     => __('Blog Layout','playon'),
            'priority'  => 1,
            'panel'     => 'playon_design_panel'
        )
    );


    $wp_customize->add_setting(
        'playon_blog_layout',
        array( 'sanitize_callback' => 'playon_sanitize_blog_layout' )
    );

    function playon_sanitize_blog_layout( $input ) {
        if ( in_array($input, array('playon','gallery','gallery-with-title','try') ) )
            return $input;
        else
            return '';
    }

    $wp_customize->add_control(
        'playon_blog_layout',array(
            'label' => __('Select Layout','playon'),
            'settings' => 'playon_blog_layout',
            'section'  => 'playon_design_options',
            'type' => 'select',
            'choices' => array(
                'playon' => __('Playon Layout','playon'),
                'gallery' => __('Gallery Layout','playon'),
                'gallery-with-title' => __('Gallery with Title Layout','playon'),
                'try'     => __('Try Layout','playon'),
            )
        )
    );
    //Sidebar Settings
    $wp_customize->add_section(
        'playon_sidebar_options',
        array(
            'title'     => __('Sidebar Layout','playon'),
            'priority'  => 2,
            'panel'     => 'playon_design_panel'
        )
    );

    $wp_customize->add_setting(
        'playon_disable_sidebar',
        array( 'sanitize_callback' => 'playon_sanitize_checkbox' )
    );

    $wp_customize->add_control(
        'playon_disable_sidebar', array(
            'settings' => 'playon_disable_sidebar',
            'label'    => __( 'Disable Sidebar Everywhere.','playon' ),
            'section'  => 'playon_sidebar_options',
            'type'     => 'checkbox',
            'default'  => false
        )
    );

    $wp_customize->add_setting(
        'playon_disable_sidebar_home',
        array( 'sanitize_callback' => 'playon_sanitize_checkbox' )
    );

    $wp_customize->add_control(
        'playon_disable_sidebar_home', array(
            'settings' => 'playon_disable_sidebar_home',
            'label'    => __( 'Disable Sidebar on Blog & Archives.','playon' ),
            'section'  => 'playon_sidebar_options',
            'type'     => 'checkbox',
            'active_callback' => 'playon_show_sidebar_options',
            'default'  => false
        )
    );

    $wp_customize->add_setting(
        'playon_disable_sidebar_front',
        array( 'sanitize_callback' => 'playon_sanitize_checkbox' )
    );

    $wp_customize->add_control(
        'playon_disable_sidebar_front', array(
            'settings' => 'playon_disable_sidebar_front',
            'label'    => __( 'Disable Sidebar on Front Page.','playon' ),
            'section'  => 'playon_sidebar_options',
            'type'     => 'checkbox',
            'active_callback' => 'playon_show_sidebar_options',
            'default'  => false
        )
    );


    $wp_customize->add_setting(
        'playon_sidebar_width',
        array(
            'default' => 4,
            'sanitize_callback' => 'playon_sanitize_positive_number' )
    );

    $wp_customize->add_control(
        'playon_sidebar_width', array(
            'settings' => 'playon_sidebar_width',
            'label'    => __( 'Sidebar Width','playon' ),
            'description' => __('Min: 25%, Default: 33%, Max: 40%','playon'),
            'section'  => 'playon_sidebar_options',
            'type'     => 'range',
            'active_callback' => 'playon_show_sidebar_options',
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
    function playon_show_sidebar_options($control) {

        $option = $control->manager->get_setting('playon_disable_sidebar');
        return $option->value() == false ;

    }
    //custom footer text
    $wp_customize-> add_section(
        'playon_custom_footer',
        array(
            'title'			=> __('Custom Footer Text','playon'),
            'description'	=> __('Enter your Own Copyright Text.','playon'),
            'priority'		=> 30,
            'panel'			=> 'playon_design_panel'
        )
    );

    $wp_customize->add_setting(
        'playon_footer_text',
        array(
            'default'		=> '',
            'sanitize_callback'	=> 'sanitize_text_field'
        )
    );

    $wp_customize->add_control(
        'playon_footer_text',
        array(
            'section' => 'playon_custom_footer',
            'settings' => 'playon_footer_text',
            'type' => 'text'
        )
    );
    
}
add_action( 'customize_register', 'playon_customize_register_layouts' );