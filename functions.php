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
	if ( is_front_page() || is_post_type_archive( 'event' ) ) {
		wp_enqueue_style( 'uxd-event', "$theme_directory_url/css/uxd-event.css", array(), filemtime( "$theme_directory_path/css/uxd-event.css" ) );
	}
	if ( is_page_template( 'under-construction.php' ) ) {
		wp_enqueue_style( 'under-construction', "$theme_directory_url/css/under-construction.css", array(), filemtime( "$theme_directory_path/css/under-construction.css" ) );
	}
	// JS Enqueues.
	wp_enqueue_script( 'byu-uxd-functions', "$theme_directory_url/js/functions.js", array( 'jquery' ), filemtime( "$theme_directory_path/js/functions.js" ), false, true );
}
add_action( 'wp_enqueue_scripts', 'byu_uxd_enqueue_scripts' );

/**
 * Register the Event custom post type
 */
function byu_uxd_register_event_cpt() {
	$single_uppercase = 'Event';
	$plural_uppercase = 'Events';
	$plural_lowercase = 'events';

	$labels = array(
		'add_new_item'       => "Add New $single_uppercase",
		'new_item'           => "New $single_uppercase",
		'edit_item'          => "Edit $single_uppercase",
		'view_item'          => "View $single_uppercase",
		'all_items'          => "All $plural_uppercase",
		'search_items'       => "Search $plural_uppercase",
		'parent_item_colon'  => "Parent $plural_uppercase:",
		'not_found'          => "No $plural_lowercase found.",
		'not_found_in_trash' => "No $plural_lowercase found in Trash.",
	);

	$args = array(
		'label'         => $plural_uppercase,
		'labels'        => $labels,
		'public'        => true,
		'menu_position' => 5,
		'menu_icon'     => 'dashicons-calendar-alt',
		'hierarchical'  => false,
		'supports'      => array( 'title', 'editor', 'revisions' ),
		'taxonomies'    => array(),
		'has_archive'   => true,
		'rewrite'       => array( 'slug' => 'events' ),
		'show_in_rest'  => true,
	);
	register_post_type( 'event', $args );
}
add_action( 'init', 'byu_uxd_register_event_cpt' );

/**
 * Always order events by the specified event date
 *
 * @param array $query The query being run.
 */
function order_events_by_date( $query ) {
	if ( isset( $query->query_vars['post_type'] ) && 'event' === $query->query_vars['post_type'] ) {
		$query->set( 'orderby', 'meta_value' );
		$query->set( 'meta_key', 'date_time' );
		$query->set( 'order', 'ASC' );
		$query->set( 'nopaging', 1 );
	}
	return $query;
}
add_filter( 'pre_get_posts', 'order_events_by_date' );

/**
 * Add the event-date column in the back-end archive
 *
 * @param array $columns The existing columns to be displayed.
 */
function byu_uxd_event_add_date_column( $columns ) {
	$columns = array(
		'cb'         => $columns['cb'],
		'title'      => __( 'Title' ),
		'event-date' => __( 'Event Date' ),
	);
	return $columns;
}
add_filter( 'manage_event_posts_columns', 'byu_uxd_event_add_date_column' );

/**
 * Populate the event-date column in the back-end archive
 *
 * @param array $column The current column being rendered.
 * @param int   $post_id The current post being rendered.
 */
function byu_uxd_event_date_column( $column, $post_id ) {
	if ( 'event-date' === $column ) {
		echo esc_html( get_field( 'date_time', $post_id ) );
	}
}
add_filter( 'manage_event_posts_custom_column', 'byu_uxd_event_date_column', 10, 2 );

/**
 * Specify custom order of dashboard links on the left
 */
function byu_uxd_custom_dashboard_order() {
	return array(
		'index.php',
		'edit.php?post_type=page',
		'edit.php?post_type=event',
		'upload.php',
		'edit-comments.php',
		'edit.php',
		'separator1',
		'theme_settings',
		'themes.php',
		'plugins.php',
		'users.php',
		'options-general.php',
		'tools.php',
		'separator2',
		'edit.php?post_type=acf-field-group',
		'separator-last',
	);
}
add_filter( 'custom_menu_order', '__return_true' );
add_filter( 'menu_order', 'byu_uxd_custom_dashboard_order' );
