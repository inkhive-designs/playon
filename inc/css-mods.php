<?php
/**
 * Created by PhpStorm.
 * User: Gourav
 * Date: 2/23/2018
 * Time: 12:01 PM
 */

function playon_custom_css_mods(){
    $custom_css = "";
    if ( get_theme_mod('playon_title_font','Sriracha') ) :
        $custom_css .= ".title-font, h1,h3, h2, .section-title,.readmore, .woocommerce ul.products li.product h3 { letter-spacing:1.5px; font-family: ".esc_html( get_theme_mod('playon_title_font','Sriracha') )."; }";
    endif;


    if ( get_theme_mod('playon_body_font','Karla') ) :
        $custom_css .= "body, h2.site-description { font-size:17px; font-family: ".esc_html( get_theme_mod('playon_body_font','Karla') )."; }";
    endif;

    $check_page_image1 = get_the_post_thumbnail_url(get_theme_mod('playon_static_page_selectpage1'));
    if($check_page_image1 == false):
        $custom_css .= ".static_page-content1 .h-content h1.title:before{
                            display: block;
                            content: '';
                            width: 35px;
                            height: 3px;
                            background: #FE4A49;
                            position: absolute;
                            left: 45%;
                            bottom: 0;
                            top: 100px;
                        }
                        .static_page-content1 .h-content h1.title:after{
                            display: block;
                            content: '';
                            width: 44px;
                            height: 3px;
                            background: #444;
                            position: absolute;
                            left: 48%;
                            bottom: 0;
                            top: 100px;
                        }";

    endif;
    $check_page_image2 = get_the_post_thumbnail_url(get_theme_mod('playon_static_page_selectpage2'));
    if($check_page_image2 == false):
        $custom_css .= ".static_page-content2 .h-content h1.title:before{
                            display: block;
                            content: '';
                            width: 35px;
                            height: 3px;
                            background: #FE4A49;
                            position: absolute;
                            left: 45%;
                            bottom: 0;
                            top: 100px;
                        }
                        .static_page-content2 .h-content h1.title:after{
                            display: block;
                            content: '';
                            width: 44px;
                            height: 3px;
                            background: #444;
                            position: absolute;
                            left: 48%;
                            bottom: 0;
                            top: 100px;
                        }";

    endif;
    $check_page_image3 = get_the_post_thumbnail_url(get_theme_mod('playon_static_page_selectpage3'));
    if($check_page_image3 == false):
        $custom_css .= ".static_page-content3 .h-content h1.title:before{
                            display: block;
                            content: '';
                            width: 35px;
                            height: 3px;
                            background: #FE4A49;
                            position: absolute;
                            left: 45%;
                            bottom: 0;
                            top: 100px;
                        }
                        .static_page-content3 .h-content h1.title:after{
                            display: block;
                            content: '';
                            width: 44px;
                            height: 3px;
                            background: #444;
                            position: absolute;
                            left: 48%;
                            bottom: 0;
                            top: 100px;
                        }";

    endif;

    if((is_home() && get_theme_mod('playon_blog_layout') == 'gallery') ||
        (is_home() && get_theme_mod('playon_blog_layout')== 'gallery-with-title')):
        $custom_css .= ".home #content{ padding: 0px !important;}
                        .home #content #primary{ padding: 0px !important;}
                        .home #content #primary article{ padding: 0px !important;}";
        endif;

     if(is_single() && !has_post_thumbnail()):
         $custom_css .= ".single-post .header-image-wrapper .post-header .post-title .single-header{
                            transform:none !important;
                            }
                            .single-post .header-image-wrapper .post-header .post-title{
                            width: 100% !important;
                            padding: 80px 0px;
                            }";
         endif;

    wp_add_inline_style( 'playon-main-theme-style', strip_tags($custom_css) );

}

add_action('wp_enqueue_scripts', 'playon_custom_css_mods');