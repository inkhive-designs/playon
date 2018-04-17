<?php
/**
 * Created by PhpStorm.
 * User: Gourav
 * Date: 2/23/2018
 * Time: 11:28 AM
 */
function inkshades_customize_register_header( $wp_customize ) {

    $wp_customize->get_section( 'title_tagline')->title = __( 'Title, Tagline & Logo', 'inkshades' );
    $wp_customize->get_section( 'title_tagline')->panel = 'inkshades_header_panel';
    $wp_customize->remove_section('header_image');


//Logo Settings
    $wp_customize->add_panel('inkshades_header_panel', array(
        'priority' => 2,
        'capability' => 'edit_theme_options',
        'theme_supports' => '',
        'title' => __('Header Settings', 'inkshades'),


    ));

}
add_action( 'customize_register', 'inkshades_customize_register_header' );