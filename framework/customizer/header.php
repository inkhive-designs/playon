<?php
/**
 * Created by PhpStorm.
 * User: Gourav
 * Date: 2/23/2018
 * Time: 11:28 AM
 */
function playon_customize_register_header( $wp_customize ) {

    $wp_customize->get_section( 'title_tagline')->title = __( 'Title, Tagline & Logo', 'playon' );
    $wp_customize->get_section( 'title_tagline')->panel = 'playon_header_panel';
   // $wp_customize->remove_section('header_image');


//Logo Settings
    $wp_customize->add_panel('playon_header_panel', array(
        'priority' => 2,
        'capability' => 'edit_theme_options',
        'theme_supports' => '',
        'title' => __('Header Settings', 'playon'),


    ));

}
add_action( 'customize_register', 'playon_customize_register_header' );