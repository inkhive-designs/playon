<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package playon
 */

?>

	</div><!-- #content -->

	<?php get_sidebar('footer'); ?>
	<footer id="colophon" class="site-footer">
		<div class="footer-menu-wrapper">
			<?php get_template_part('modules/navigation/footer','navigation'); ?>
		</div>

		<div class="footer-social-icons">
			<?php get_template_part('modules/social/social-fa-footer'); ?>
		</div>
		<div class="site-info">
			<a target="_blank" href="<?php echo esc_url( __( 'https://inkhive.com/', 'playon' ) ); ?>"><?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by %s', 'playon' ), 'Inkhive Designs' );
			?></a>
			<span class="sep"> | </span>
			<?php echo ( esc_html(get_theme_mod('playon_footer_text')) == '' ) ? ('&copy; '.date('Y').' '.get_bloginfo('name').__('. All Rights Reserved. ','playon')) : esc_html( get_theme_mod('playon_footer_text') ); ?>

		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
