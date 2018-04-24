<?php
//static_page 1
function playon_customize_register_static_page( $wp_customize ) {
    // Layout and Design
    $wp_customize->add_panel( 'playon_static_page_panel', array(
        'priority'       => 5,
        'capability'     => 'edit_theme_options',
        'theme_supports' => '',
        'title'          => __('Static Page','playon'),
    ) );

    $wp_customize->add_section('playon_static_page_section1',
        array(
            'title' => __('Static Page 1', 'playon'),
            'priority' => 1,
            'panel'   => 'playon_static_page_panel'
        )
    );

    $wp_customize->add_setting('playon_static_page_enable1',
        array(
            'sanitize_callback' => 'playon_sanitize_checkbox'
        ));
    $wp_customize->add_control('playon_static_page_enable1',
        array(
            'setting' => 'playon_static_page_enable1',
            'section' => 'playon_static_page_section1',
            'label' => __('Enable Static Page 1', 'playon'),
            'type' => 'checkbox',
            'default' => false,
        )
    );

    $wp_customize->add_setting('playon_static_page_selectpage1',
        array(
            'sanitize_callback' => 'absint'
        )
    );

    $wp_customize->add_control('playon_static_page_selectpage1',
        array(
            'setting' => 'playon_static_page_selectpage1',
            'section' => 'playon_static_page_section1',
            'label' => __('Title', 'playon'),
            'description' => __('Select a Page to display Title. Make sure page should contain feature image.', 'playon'),
            'type' => 'dropdown-pages',
            'active_callback' => 'playon_static_page_active_callback1'
        )
    );


    $wp_customize->add_setting('playon_static_page_full_content1',
        array(
            'sanitize_callback' => 'playon_sanitize_checkbox'
        )
    );

    $wp_customize->add_control('playon_static_page_full_content1',
        array(
            'setting' => 'playon_static_page_full_content1',
            'section' => 'playon_static_page_section1',
            'label' => __('Show Full Content insted of excerpt', 'playon'),
            'type' => 'checkbox',
            'default' => false,
            'active_callback' => 'playon_static_page_active_callback1'
        )
    );

    $wp_customize->add_setting('playon_static_page_button1',
        array(
            'sanitize_callback' => 'sanitize_text_field'
        )
    );

    $wp_customize->add_control('playon_static_page_button1',
        array(
            'setting' => 'playon_static_page_button1',
            'section' => 'playon_static_page_section1',
            'label' => __('Button Name', 'playon'),
            'description' => __('Leave blank to disable Button.', 'playon'),
            'type' => 'text',
            'active_callback' => 'playon_static_page_active_callback1'
        )
    );

    function playon_static_page_active_callback1( $control ) {
        $option = $control->manager->get_setting('playon_static_page_enable1');
        return $option->value() == true;
    }

//static_page 1 section end

    //Static page 2 start
    $wp_customize->add_section('playon_static_page_section2',
        array(
            'title' => __('Static Page 2', 'playon'),
            'priority' => 2,
            'panel'   => 'playon_static_page_panel'
        )
    );

    $wp_customize->add_setting('playon_static_page_enable2',
        array(
            'sanitize_callback' => 'playon_sanitize_checkbox'
        ));
    $wp_customize->add_control('playon_static_page_enable2',
        array(
            'setting' => 'playon_static_page_enable2',
            'section' => 'playon_static_page_section2',
            'label' => __('Enable Static Page 2', 'playon'),
            'type' => 'checkbox',
            'default' => false,
        )
    );

    $wp_customize->add_setting('playon_static_page_selectpage2',
        array(
            'sanitize_callback' => 'absint'
        )
    );

    $wp_customize->add_control('playon_static_page_selectpage2',
        array(
            'setting' => 'playon_static_page_selectpage2',
            'section' => 'playon_static_page_section2',
            'label' => __('Title', 'playon'),
            'description' => __('Select a Page to display Title. Make sure page should contain feature image.', 'playon'),
            'type' => 'dropdown-pages',
            'active_callback' => 'playon_static_page_active_callback2'
        )
    );


    $wp_customize->add_setting('playon_static_page_full_content2',
        array(
            'sanitize_callback' => 'playon_sanitize_checkbox'
        )
    );

    $wp_customize->add_control('playon_static_page_full_content2',
        array(
            'setting' => 'playon_static_page_full_content2',
            'section' => 'playon_static_page_section2',
            'label' => __('Show Full Content insted of excerpt', 'playon'),
            'type' => 'checkbox',
            'default' => false,
            'active_callback' => 'playon_static_page_active_callback2'
        )
    );

    $wp_customize->add_setting('playon_static_page_button2',
        array(
            'sanitize_callback' => 'sanitize_text_field'
        )
    );

    $wp_customize->add_control('playon_static_page_button2',
        array(
            'setting' => 'playon_static_page_button2',
            'section' => 'playon_static_page_section2',
            'label' => __('Button Name', 'playon'),
            'description' => __('Leave blank to disable Button.', 'playon'),
            'type' => 'text',
            'active_callback' => 'playon_static_page_active_callback2'
        )
    );

    function playon_static_page_active_callback2( $control ) {
        $option = $control->manager->get_setting('playon_static_page_enable2');
        return $option->value() == true;
    }

//static_page 2 section end
    //static page 3 start start

    $wp_customize->add_section('playon_static_page_section3',
        array(
            'title' => __('Static Page 3', 'playon'),
            'priority' => 3,
            'panel'   => 'playon_static_page_panel'
        )
    );

    $wp_customize->add_setting('playon_static_page_enable3',
        array(
            'sanitize_callback' => 'playon_sanitize_checkbox'
        ));
    $wp_customize->add_control('playon_static_page_enable3',
        array(
            'setting' => 'playon_static_page_enable3',
            'section' => 'playon_static_page_section3',
            'label' => __('Enable Static Page 3', 'playon'),
            'type' => 'checkbox',
            'default' => false,
        )
    );

    $wp_customize->add_setting('playon_static_page_selectpage3',
        array(
            'sanitize_callback' => 'absint'
        )
    );

    $wp_customize->add_control('playon_static_page_selectpage3',
        array(
            'setting' => 'playon_static_page_selectpage3',
            'section' => 'playon_static_page_section3',
            'label' => __('Title', 'playon'),
            'description' => __('Select a Page to display Title. Make sure page should contain feature image.', 'playon'),
            'type' => 'dropdown-pages',
            'active_callback' => 'playon_static_page_active_callback3'
        )
    );


    $wp_customize->add_setting('playon_static_page_full_content3',
        array(
            'sanitize_callback' => 'playon_sanitize_checkbox'
        )
    );

    $wp_customize->add_control('playon_static_page_full_content3',
        array(
            'setting' => 'playon_static_page_full_content3',
            'section' => 'playon_static_page_section3',
            'label' => __('Show Full Content insted of excerpt', 'playon'),
            'type' => 'checkbox',
            'default' => false,
            'active_callback' => 'playon_static_page_active_callback3'
        )
    );

    $wp_customize->add_setting('playon_static_page_button3',
        array(
            'sanitize_callback' => 'sanitize_text_field'
        )
    );

    $wp_customize->add_control('playon_static_page_button3',
        array(
            'setting' => 'playon_static_page_button3',
            'section' => 'playon_static_page_section3',
            'label' => __('Button Name', 'playon'),
            'description' => __('Leave blank to disable Button.', 'playon'),
            'type' => 'text',
            'active_callback' => 'playon_static_page_active_callback3'
        )
    );

    function playon_static_page_active_callback3( $control ) {
        $option = $control->manager->get_setting('playon_static_page_enable3');
        return $option->value() == true;
    }

//static_page 1 section end
    //static page 3 end end
}
add_action( 'customize_register', 'playon_customize_register_static_page' );