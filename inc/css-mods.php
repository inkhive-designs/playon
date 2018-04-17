<?php
/**
 * Created by PhpStorm.
 * User: Gourav
 * Date: 2/23/2018
 * Time: 12:01 PM
 */

function playon_custom_css_mods(){
    $custom_css = "";
    if ( get_theme_mod('playon_title_font','Cinzel Decorative') ) :
        $custom_css .= ".title-font, h1, h2, .section-title, .woocommerce ul.products li.product h3 { font-family: ".esc_html( get_theme_mod('playon_title_font','Cinzel Decorative') )."; }";
    endif;


    if ( get_theme_mod('playon_body_font','Karla') ) :
        $custom_css .= "body, h2.site-description { font-family: ".esc_html( get_theme_mod('playon_body_font','Karla') )."; }";
    endif;

    wp_add_inline_style( 'playon-main-theme-style', strip_tags($custom_css) );

}

add_action('wp_enqueue_scripts', 'playon_custom_css_mods');