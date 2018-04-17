<?php
/**
 * Created by PhpStorm.
 * User: Gourav
 * Date: 2/28/2018
 * Time: 12:27 PM
 */
/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function inkshades_widgets_init() {
    register_sidebar( array(
        'name'          => esc_html__( 'Sidebar', 'inkshades' ),
        'id'            => 'sidebar-1',
        'description'   => esc_html__( 'Add widgets here.', 'inkshades' ),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<div class="line-effect"><h3 class="widget-title">',
        'after_title'   => '</h3></div>',
    ) );
    register_sidebar( array(
        'name'          => __( 'Footer 1', 'inkshades' ),
        'id'            => 'footer-1',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h3 class="widget-title title-font">',
        'after_title'   => '</h3>',
    ) );

    register_sidebar( array(
        'name'          => __( 'Footer 2', 'inkshades' ),
        'id'            => 'footer-2',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h3 class="widget-title title-font">',
        'after_title'   => '</h3>',
    ) );

    register_sidebar( array(
        'name'          => __( 'Footer 3', 'inkshades' ),
        'id'            => 'footer-3',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h3 class="widget-title title-font">',
        'after_title'   => '</h3>',
    ) );
    register_sidebar( array(
        'name'          => __( 'Footer 4', 'inkshades' ),
        'id'            => 'footer-4',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h3 class="widget-title title-font">',
        'after_title'   => '</h3>',
    ) );
}
add_action( 'widgets_init', 'inkshades_widgets_init' );