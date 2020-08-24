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
		<title>BYU UXD Club</title>
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
		<header class="uxd-header" role="banner">
			<div class="uxd-header__constraint">
				<a class="uxd-header__logo-link" href="<?php echo esc_url( $home_url ); ?>">
					<img class="uxd-header__logo" src="<?php echo esc_url( sprintf( '%s/images/logo.png', $template_directory_url ) ); ?>">
				</a>
				<nav class="uxd-header__desktop-nav">
					<a class="uxd-header__desktop-link" href="<?php echo esc_url( sprintf( '%s/join', $home_url ) ); ?>">Join</a>
					<a class="uxd-header__desktop-link" href="<?php echo esc_url( sprintf( '%s/club-events', $home_url ) ); ?>">Club Events</a>
					<a class="uxd-header__desktop-link" href="<?php echo esc_url( sprintf( '%s/what-is-uxd', $home_url ) ); ?>">What is UXD?</a>
					<a class="uxd-header__desktop-link" href="<?php echo esc_url( sprintf( '%s/resources', $home_url ) ); ?>">Resources</a>
					<a class="uxd-header__desktop-link" href="<?php echo esc_url( sprintf( '%s/internships', $home_url ) ); ?>">Internships</a>
					<a class="uxd-header__desktop-link" href="<?php echo esc_url( sprintf( '%s/contact-us', $home_url ) ); ?>">Contact Us</a>
				</nav>
				<img class="uxd-header__menu-icon" src="<?php echo esc_url( sprintf( '%s/icons/bars-solid.svg', $template_directory_url ) ); ?>">
				<form class="uxd-header__search-form">
					<!-- TODO: create desktop and mobile search form -->
				</form>
			</div>
		</header>
