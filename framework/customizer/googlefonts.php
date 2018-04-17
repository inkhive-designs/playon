<?php
/**
 * Created by PhpStorm.
 * User: Gourav
 * Date: 2/7/2018
 * Time: 3:04 PM
 */
function inkshades_customize_register_fonts( $wp_customize )
{
    $wp_customize->add_section(
        'inkshades_typo_options',
        array(
            'title'     => __('Google Web Fonts','inkshades'),
            'priority'  => 41,
            'description' => __('Defaults: Khula, Bitter.','inkshades'),
            'panel'     => 'inkshades_design_panel'

        )
    );

    $font_array = array('Roboto Slab','Open Sans','Bitter','Raleway','Khula','Droid Sans','Droid Serif','Roboto','Roboto Condensed','Lato','Bree Serif','Oswald','Slabo','Lora','Source Sans Pro','Ubuntu','Lobster','Arimo','Bitter','Noto Sans');
    $fonts = array_combine($font_array, $font_array);

    $wp_customize->add_setting(
        'inkshades_title_font',
        array(
            'default'=> 'Khula',
            'sanitize_callback' => 'inkshades_sanitize_gfont'
        )
    );

    function inkshades_sanitize_gfont( $input ) {
        if ( in_array($input, array('Roboto Slab','Open Sans','Bitter','Raleway','Khula','Droid Sans','Droid Serif','Roboto','Roboto Condensed','Lato','Bree Serif','Oswald','Slabo','Lora','Source Sans Pro','PT Sans','Ubuntu','Lobster','Arimo','Bitter','Noto Sans') ) )
            return $input;
        else
            return '';
    }

    $wp_customize->add_control(
        'inkshades_title_font',array(
            'label' => __('Title','inkshades'),
            'settings' => 'inkshades_title_font',
            'section'  => 'inkshades_typo_options',
            'type' => 'select',
            'choices' => $fonts,
        )
    );

    $wp_customize->add_setting(
        'inkshades_body_font',
        array(	'default'=> 'Bitter',
            'sanitize_callback' => 'inkshades_sanitize_gfont' )
    );

    $wp_customize->add_control(
        'inkshades_body_font',array(
            'label' => __('Body','inkshades'),
            'settings' => 'inkshades_body_font',
            'section'  => 'inkshades_typo_options',
            'type' => 'select',
            'choices' => $fonts
        )
    );
}
add_action( 'customize_register', 'inkshades_customize_register_fonts' );