<?php
/**
 * The site header template
 *
 * @author Caleb Young <caleb.a.young@gmail.com>
 * @package byu-uxd-theme
 */

$home_url               = get_home_url();
$template_directory_url = get_template_directory_uri();
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="theme-color" content="#fa2617">
		<title>BYU UXD Association</title>
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
		<header class="uxd-header" role="banner">
			<div class="uxd-header__constraint">
				<a class="uxd-header__logo-link" href="<?php echo esc_url( $home_url ); ?>">
					<img class="uxd-header__logo" src="<?php echo esc_url( sprintf( '%s/images/logo.png', $template_directory_url ) ); ?>">
				</a>
				<nav class="uxd-header__desktop-nav">
					<a class="uxd-header__desktop-link<?php echo esc_attr( is_active_header_link( 'join' ) ); ?>" href="https://clubs.byu.edu/clubs#/byuxd" target="_blank">Join</a>
					<a class="uxd-header__desktop-link<?php echo esc_attr( is_active_header_link( 'events' ) ); ?>" href="<?php echo esc_url( sprintf( '%s/events', $home_url ) ); ?>">Events</a>
					<a class="uxd-header__desktop-link<?php echo esc_attr( is_active_header_link( 'what-is-uxd' ) ); ?>" href="<?php echo esc_url( sprintf( '%s/what-is-uxd', $home_url ) ); ?>">What is UXD?</a>
					<a class="uxd-header__desktop-link<?php echo esc_attr( is_active_header_link( 'resources' ) ); ?>" href="<?php echo esc_url( sprintf( '%s/resources', $home_url ) ); ?>">UXD Resources</a>
					<a class="uxd-header__desktop-link<?php echo esc_attr( is_active_header_link( 'classes' ) ); ?>" href="<?php echo esc_url( sprintf( '%s/classes', $home_url ) ); ?>">Classes</a>
					<a class="uxd-header__desktop-link<?php echo esc_attr( is_active_header_link( 'internships' ) ); ?>" href="<?php echo esc_url( sprintf( '%s/internships', $home_url ) ); ?>">Internships/Jobs</a>
					<a class="uxd-header__desktop-link<?php echo esc_attr( is_active_header_link( 'meeting-notes' ) ); ?>" href="<?php echo esc_url( sprintf( '%s/meeting-notes', $home_url ) ); ?>">Meeting Notes</a>
					<a class="uxd-header__desktop-link<?php echo esc_attr( is_active_header_link( 'contact-us' ) ); ?>" href="<?php echo esc_url( sprintf( '%s/contact-us', $home_url ) ); ?>">Contact Us</a>
				</nav>
				<img class="uxd-header__menu-icon uxd-header__menu-icon--open" src="<?php echo esc_url( sprintf( '%s/icons/bars-solid.svg', $template_directory_url ) ); ?>">
				<img class="uxd-header__menu-icon uxd-header__menu-icon--close hidden" src="<?php echo esc_url( sprintf( '%s/icons/times-solid.svg', $template_directory_url ) ); ?>">
				<form class="uxd-header__search-form">
					<!-- TODO: create desktop and mobile search form -->
				</form>
			</div>
			<div class="uxd-header__mobile-nav">
				<a class="uxd-header__mobile-link<?php echo esc_attr( is_active_header_link( 'join' ) ); ?>" href="<?php echo esc_url( sprintf( '%s/join', $home_url ) ); ?>">Join</a>
				<a class="uxd-header__mobile-link<?php echo esc_attr( is_active_header_link( 'events' ) ); ?>" href="<?php echo esc_url( sprintf( '%s/events', $home_url ) ); ?>">Events</a>
				<a class="uxd-header__mobile-link<?php echo esc_attr( is_active_header_link( 'what-is-uxd' ) ); ?>" href="<?php echo esc_url( sprintf( '%s/what-is-uxd', $home_url ) ); ?>">What is UXD?</a>
				<a class="uxd-header__mobile-link<?php echo esc_attr( is_active_header_link( 'resources' ) ); ?>" href="<?php echo esc_url( sprintf( '%s/resources', $home_url ) ); ?>">UXD Resources</a>
				<a class="uxd-header__mobile-link<?php echo esc_attr( is_active_header_link( 'classes' ) ); ?>" href="<?php echo esc_url( sprintf( '%s/classes', $home_url ) ); ?>">Classes</a>
				<a class="uxd-header__mobile-link<?php echo esc_attr( is_active_header_link( 'internships' ) ); ?>" href="<?php echo esc_url( sprintf( '%s/internships', $home_url ) ); ?>">Internships/Jobs</a>
				<a class="uxd-header__mobile-link<?php echo esc_attr( is_active_header_link( 'meeting-notes' ) ); ?>" href="<?php echo esc_url( sprintf( '%s/meeting-notes', $home_url ) ); ?>">Meeting Notes</a>
				<a class="uxd-header__mobile-link<?php echo esc_attr( is_active_header_link( 'contact-us' ) ); ?>" href="<?php echo esc_url( sprintf( '%s/contact-us', $home_url ) ); ?>">Contact Us</a>
			</div>
		</header>
<?php

/**
 * Returns an additional active class if the current page contains the provided slug.
 *
 * @param Slug $slug The page slug to check against.
 * @author Caleb Young
 * @package byu-uxd-theme
 */
function is_active_header_link( $slug ) {
	global $wp;
	$current_url = sprintf( '%s/', home_url( $wp->request ) );
	if ( strpos( $current_url, $slug ) ) {
		return ' uxd-header__nav-link--active';
	}
	return '';
}
