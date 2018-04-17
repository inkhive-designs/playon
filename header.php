<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package inkshades
 */

?>
<?php get_template_part('modules/header/head'); ?>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'inkshades' ); ?></a>

	<?php get_template_part('modules/header/top','bar'); ?>

	<?php get_template_part('modules/header/masthead'); ?>

	<?php get_template_part('framework/featured-components/sigma' ); ?>

	<div id="content" class="site-content container">
