<?php
function playon_customize_register_skins($wp_customize){
    $wp_customize->get_section('colors')->title = __('Theme Skins & Colors','playon');
    $wp_customize->get_section('colors')->panel = 'playon_design_panel';
    
    //playon Skins

    $wp_customize -> add_setting('playon_skin',array(
        'default' => 'default',
        'sanitize_callback' => 'playon_sanitize_skin',
    ));

    $skins = array(
        'default' => __('Default(playon)','playon'),
        'blue' => __('Blue','playon'),
    );

    $wp_customize -> add_control('playon_skin',array(
        'settings' => 'playon_skin',
        'section' => 'colors',
        'label' => __('Choose Skins','playon'),
        'type' => 'select',
        'choices' => $skins,
    ));

    function playon_sanitize_skin($input){
        if( in_array($input, array('default','blue') )):
            return $input;
        else:
            return '';
        endif;
    }
}
add_action('customize_register','playon_customize_register_skins');