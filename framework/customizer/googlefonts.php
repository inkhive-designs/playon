<?php
/**
 * Created by PhpStorm.
 * User: Gourav
 * Date: 2/7/2018
 * Time: 3:04 PM
 */
function playon_customize_register_fonts( $wp_customize )
{
    $wp_customize->add_section(
        'playon_typo_options',
        array(
            'title'     => __('Google Web Fonts','playon'),
            'priority'  => 41,
            'description' => __('Defaults: Khula, Bitter.','playon'),
            'panel'     => 'playon_design_panel'

        )
    );

    $font_array = array('Cinzel Decorative','Open Sans','Karla','Bitter','Raleway','Khula','Droid Sans','Droid Serif','Roboto','Roboto Condensed','Lato','Bree Serif','Oswald','Slabo','Lora','Source Sans Pro','Ubuntu','Lobster','Arimo','Bitter','Noto Sans');
    $fonts = array_combine($font_array, $font_array);

    $wp_customize->add_setting(
        'playon_title_font',
        array(
            'default'=> 'Cinzel Decorative',
            'sanitize_callback' => 'playon_sanitize_gfont'
        )
    );

    function playon_sanitize_gfont( $input ) {
        if ( in_array($input, array('Cinzel Decorative','Open Sans','Karla','Bitter','Raleway','Khula','Droid Sans','Droid Serif','Roboto','Roboto Condensed','Lato','Bree Serif','Oswald','Slabo','Lora','Source Sans Pro','PT Sans','Ubuntu','Lobster','Arimo','Bitter','Noto Sans') ) )
            return $input;
        else
            return '';
    }

    $wp_customize->add_control(
        'playon_title_font',array(
            'label' => __('Title','playon'),
            'settings' => 'playon_title_font',
            'section'  => 'playon_typo_options',
            'type' => 'select',
            'choices' => $fonts,
        )
    );

    $wp_customize->add_setting(
        'playon_body_font',
        array(	'default'=> 'Karla',
            'sanitize_callback' => 'playon_sanitize_gfont' )
    );

    $wp_customize->add_control(
        'playon_body_font',array(
            'label' => __('Body','playon'),
            'settings' => 'playon_body_font',
            'section'  => 'playon_typo_options',
            'type' => 'select',
            'choices' => $fonts
        )
    );
}
add_action( 'customize_register', 'playon_customize_register_fonts' );