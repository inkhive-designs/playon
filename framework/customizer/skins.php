<?php
function inkshades_customize_register_skins($wp_customize){
    $wp_customize->get_section('colors')->title = __('Theme Skins & Colors','inkshades');
    $wp_customize->get_section('colors')->panel = 'inkshades_design_panel';
    
    //inkshades Skins

    $wp_customize -> add_setting('inkshades_skin',array(
        'default' => 'default',
        'sanitize_callback' => 'inkshades_sanitize_skin',
    ));

    $skins = array(
        'default' => __('Default(inkshades)','inkshades'),
        'yellow' => __('Yellow','inkshades'),
    );

    $wp_customize -> add_control('inkshades_skin',array(
        'settings' => 'inkshades_skin',
        'section' => 'colors',
        'label' => __('Choose Skins','inkshades'),
        'type' => 'select',
        'choices' => $skins,
    ));

    function inkshades_sanitize_skin($input){
        if( in_array($input, array('default','yellow') )):
            return $input;
        else:
            return '';
        endif;
    }
}
add_action('customize_register','inkshades_customize_register_skins');