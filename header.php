<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package playon
 */

?>
<?php get_template_part('modules/header/head'); ?>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'playon' ); ?></a>
    <?php get_template_part('modules/header/top','bar'); ?>
    <?php get_template_part('modules/header/jumbosearch'); ?>
    <span id="searchicon" class="fas fa-search"></span>

    <?php
	
	
		if ( class_exists('rt_slider') ) {
			if ( is_home()) { 
				if ( get_theme_mod('rtslider_enable', true) ) {
					rt_slider::render('framework/featured-components/slider', 'swiper');
				} else {
					get_template_part('modules/header/header','image');
				}
			}
			if ( is_front_page() && !is_home() ) { 
				if ( get_theme_mod('rtslider_enable_front', true) ) {
					rt_slider::render('framework/featured-components/slider', 'swiper');	
				} else {
					get_template_part('modules/header/header','image');
				}
			}
			if ( is_page() && !is_front_page() ) { 
				if (get_theme_mod('rtslider_enable_pages', true) ) {
					rt_slider::render('framework/featured-components/slider', 'swiper');
				} else {
					get_template_part('modules/header/header','image');
				}
			}
			if ( is_single() || is_archive() || is_search()) {
				if( get_theme_mod('rtslider_enable_posts', true) ) {
					rt_slider::render('framework/featured-components/slider', 'swiper');
				} else {
					get_template_part('modules/header/header','image');
				}
			}
		}
		elseif ( !class_exists('rt_slider') && !is_singular() ) {
			get_template_part('modules/header/header','image');
		}
	    
	    if ( is_singular()|| is_archive() || is_search() ) :
	    	get_template_part('modules/header/header','single');
	    endif;


    ?>
    <?php  //get_template_part('framework/featured-components/featured','category' ); ?>

	<?php
    get_template_part('framework/featured-components/square' );
	      get_template_part('framework/featured-components/cube' );
	      get_template_part('framework/featured-components/fpage');
    get_template_part('framework/featured-components/featured-category' );
    ?>



    <div id="content" class="site-content container">
