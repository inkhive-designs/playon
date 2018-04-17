<?php
/**
 * Created by PhpStorm.
 * User: Gourav
 * Date: 2/7/2018
 * Time: 3:21 PM
 */
function inkshades_customize_register_topbtn( $wp_customize ) {


//TOP BUTTONS
    $wp_customize->add_section(
        'inkshades_btn_sec',
        array(
            'title'     => 'Top Buttons',
            'priority'  => 1,
            'description' => __('This is used to Display 2 Custom Buttons in Top Right Corner of the Site. In the Icon Field, Enter the <a href="http://fortawesome.github.io/Font-Awesome/icons/" target="_blank">Font Awesome</a> Icon Name.', 'inkshades'),
            'panel'      => 'inkshades_header_panel'

        )
    );

    for ( $i = 1 ; $i < 3; $i++ ) {
        $wp_customize->add_setting(
            'inkshades_btn_title'.$i,
            array( 'sanitize_callback' => 'sanitize_text_field' )
        );

        $wp_customize->add_control(
            'inkshades_btn_title'.$i, array(
                'settings' => 'inkshades_btn_title'.$i,
                'label'    => __( 'Button ','inkshades' ).$i,
                'section'  => 'inkshades_btn_sec',
                'type'     => 'text',
            )
        );

        $wp_customize->add_setting(
            'inkshades_btn_icon'.$i,
            array( 'sanitize_callback' => 'sanitize_text_field' )
        );

        $wp_customize->add_control(
            'inkshades_btn_icon'.$i, array(
                'settings' => 'inkshades_btn_icon'.$i,
                'label'    => __( 'Icon','inkshades' ),
                'section'  => 'inkshades_btn_sec',
                'type'     => 'text',
            )
        );


        $wp_customize->add_setting(
            'inkshades_btn_url'.$i,
            array( 'sanitize_callback' => 'esc_url_raw' )
        );

        $wp_customize->add_control(
            'inkshades_btn_url'.$i, array(
                'settings' => 'inkshades_btn_url'.$i,
                'label'    => __( 'Target URL','inkshades' ),
                'section'  => 'inkshades_btn_sec',
                'type'     => 'url',
            )
        );
    }
}
add_action( 'customize_register', 'inkshades_customize_register_topbtn' );