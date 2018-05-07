<?php
/**
 * Created by PhpStorm.
 * User: Gourav
 * Date: 2/28/2018
 * Time: 12:26 PM
 */
/**
 * Enqueue scripts and styles.
 */
function playon_scripts() {
    wp_enqueue_style( 'playon-style', get_stylesheet_uri() );

    //playon main styles
    wp_enqueue_style('playon-title-font', '//fonts.googleapis.com/css?family='.str_replace(" ", "+", get_theme_mod('playon_title_font', 'Sriracha') ) );

    wp_enqueue_style('playon-body-font', '//fonts.googleapis.com/css?family='.str_replace(" ", "+", get_theme_mod('playon_body_font', 'Karla') ) );


    //enqueue bootstrap and fontawesome css//
    wp_enqueue_style('playon-bootstrap',get_template_directory_uri().'/assets/bootstrap/css/bootstrap.min.css',true);

    wp_enqueue_style('playon-fa',get_template_directory_uri().'/assets/font-awesome/css/fontawesome-all.min.css');

    //hover min.css
    wp_enqueue_style( 'playon-hover-style', get_template_directory_uri() . '/assets/css/hover.min.css' );

    //Slider Swiper
    wp_enqueue_style( 'swiper', get_template_directory_uri() . '/assets/css/swiper.min.css' );


    //lity
    wp_enqueue_style( 'lity-lightbox-css', get_template_directory_uri() . '/assets/css/lity.min.css' );


    //playon main styles
    wp_enqueue_style( 'playon-main-theme-style', get_template_directory_uri() . '/assets/theme-styles/css/'.get_theme_mod('playon_skin', 'default').'.css' );

    //custom js
    wp_enqueue_script( 'playon-custom-js', get_template_directory_uri() . '/js/custom.js', array('jquery-masonry'), false, true );



    //lity js
    wp_enqueue_script( 'lity-lightbox-js', get_template_directory_uri() . '/assets/js/lity.min.js');


    wp_enqueue_script( 'hoverIntent');
    wp_enqueue_script( 'jquery-effects-bounce');


    wp_enqueue_script( 'bigslide-js', get_template_directory_uri() . '/js/jquery.big-slide.js');

    //external js
    wp_enqueue_script( 'playon-externaljs', get_template_directory_uri() . '/js/external.js', array('jquery'), '20120206', true );



    wp_enqueue_script( 'playon-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

    wp_enqueue_script( 'playon-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}
add_action( 'wp_enqueue_scripts', 'playon_scripts' );
