<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="theme-color" content="#fa2617">
		<title>BYU UXD Club</title>
		<link rel="stylesheet" type="text/css" href="https://cdn.byu.edu/theme-fonts/1.x.x/ringside/fonts.css">
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
		<header class="uxd-header" role="banner">
			<div class="uxd-header__constraint">
				<a class="uxd-header__logo-link" href="#">
					<img class="uxd-header__logo" src="<?php echo esc_url( sprintf( '%s/images/logo.png', get_template_directory_uri() ) ); ?>">
				</a>
				<nav class="uxd-header__desktop-nav">
					<a class="uxd-header__desktop-link" href="#">Join</a>
					<a class="uxd-header__desktop-link" href="#">Club Events</a>
					<a class="uxd-header__desktop-link" href="#">What is UXD?</a>
					<a class="uxd-header__desktop-link" href="#">Resources</a>
					<a class="uxd-header__desktop-link" href="#">Internships</a>
					<a class="uxd-header__desktop-link" href="#">Contact Us</a>
				</nav>
				<img class="uxd-header__menu-icon" src="<?php echo esc_url( sprintf( '%s/icons/bars-solid.svg', get_template_directory_uri() ) ); ?>">
				<form class="uxd-header__search-form">
					<!-- TODO: create desktop and mobile search form -->
				</form>
			</div>
		</header>
		<main class="uxd-main">