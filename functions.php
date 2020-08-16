<?php

function byu_uxd_enqueue_scripts() {
	$theme_directory_url  = get_template_directory_uri();
	$theme_directory_path = get_template_directory();
	// CSS Enqueues
	wp_enqueue_style( 'byu-uxd-style', "$theme_directory_url/style.css", array(), filemtime( "$theme_directory_path/style.css" ) );
}
add_action( 'wp_enqueue_scripts', 'byu_uxd_enqueue_scripts' );