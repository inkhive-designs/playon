<?php
/**
 * Created by PhpStorm.
 * User: Gourav
 * Date: 2/28/2018
 * Time: 12:28 PM
 */
/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function playon_content_width() {
    $GLOBALS['content_width'] = apply_filters( 'playon_content_width', 640 );
}
add_action( 'after_setup_theme', 'playon_content_width', 0 );
