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
function inkshades_scripts() {
    wp_enqueue_style( 'inkshades-style', get_stylesheet_uri() );

    //inkshades main styles
    wp_enqueue_style('inkshades-title-font', '//fonts.googleapis.com/css?family='.str_replace(" ", "+", get_theme_mod('inkshades_title_font', 'Khula') ) );

    wp_enqueue_style('inkshades-body-font', '//fonts.googleapis.com/css?family='.str_replace(" ", "+", get_theme_mod('inkshades_body_font', 'Bitter') ) );


    //enqueue bootstrap and fontawesome css//
    wp_enqueue_style('inkshades-bootstrap',get_template_directory_uri().'/assets/bootstrap/css/bootstrap.min.css',true);

    wp_enqueue_style('inkshades-fa',get_template_directory_uri().'/assets/font-awesome/css/font-awesome.css');

    //hover min.css
    wp_enqueue_style( 'inkshades-hover-style', get_template_directory_uri() . '/assets/css/hover.min.css' );

    //inkshades main styles
    wp_enqueue_style( 'inkshades-main-theme-style', get_template_directory_uri() . '/assets/theme-styles/css/'.get_theme_mod('inkshades_skin', 'default').'.css' );

    //custom js
    wp_enqueue_script( 'inkshades-custom-js', get_template_directory_uri() . '/js/custom.js', array('jquery-masonry'), false, true );

    wp_enqueue_script( 'bigslide-js', get_template_directory_uri() . '/js/jquery.big-slide.js');

    //external js
    wp_enqueue_script( 'inkshades-externaljs', get_template_directory_uri() . '/js/external.js', array('jquery'), '20120206', true );



    wp_enqueue_script( 'inkshades-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

    wp_enqueue_script( 'inkshades-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}
add_action( 'wp_enqueue_scripts', 'inkshades_scripts' );