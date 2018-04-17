<?php
/**
 * Created by PhpStorm.
 * User: Gourav
 * Date: 2/23/2018
 * Time: 12:01 PM
 */

function inkshades_custom_css_mods(){
    $custom_css = "";
    if ( get_theme_mod('inkshades_title_font') ) :
        $custom_css .= ".title-font, h1, h2, .section-title, .woocommerce ul.products li.product h3 { font-family: ".esc_html( get_theme_mod('inkshades_title_font','Khula') )."; }";
    endif;


    if ( get_theme_mod('inkshades_body_font') ) :
        $custom_css .= "body, h2.site-description { font-family: ".esc_html( get_theme_mod('inkshades_body_font','Bitter') )."; }";
    endif;

    wp_add_inline_style( 'inkshades-main-theme-style', strip_tags($custom_css) );

}

add_action('wp_enqueue_scripts', 'inkshades_custom_css_mods');