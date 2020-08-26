<?php
/**
 * Theme functions
 *
 * @author Caleb Young <caleb.a.young@gmail.com>
 * @package byu-uxd-theme
 */

/**
 * Register and enqueue all necessary CSS and JS
 */
function byu_uxd_enqueue_scripts() {
	$theme_directory_url  = get_template_directory_uri();
	$theme_directory_path = get_template_directory();
	// CSS Enqueues.
	wp_enqueue_style( 'byu-uxd-style', "$theme_directory_url/style.css", array(), filemtime( "$theme_directory_path/style.css" ) );
	wp_enqueue_style( 'ringside', 'https://cdn.byu.edu/theme-fonts/1.x.x/ringside/fonts.css', array(), '1' );
	if ( is_front_page() ) {
		wp_enqueue_style( 'uxd-event', "$theme_directory_url/css/uxd-event.css", array(), filemtime( "$theme_directory_path/css/uxd-event.css" ) );
	}
	if ( is_page_template( 'under-construction.php' ) ) {
		wp_enqueue_style( 'under-construction', "$theme_directory_url/css/under-construction.css", array(), filemtime( "$theme_directory_path/css/under-construction.css" ) );
	}
	// JS Enqueues.
	wp_enqueue_script( 'byu-uxd-functions', "$theme_directory_url/js/functions.js", array( 'jquery' ), filemtime( "$theme_directory_path/js/functions.js" ), false, true );
}
add_action( 'wp_enqueue_scripts', 'byu_uxd_enqueue_scripts' );
