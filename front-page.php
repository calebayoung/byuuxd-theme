<?php
/**
 * The automatically-generated front page template
 *
 * @author Caleb Young <caleb.a.young@gmail.com>
 * @package byu-uxd-theme
 */

$theme_directory        = get_template_directory_uri();
$icons_directory        = "$theme_directory/icons";
$social_icons_directory = "$icons_directory/social-media";
get_header();
?>
<div class="uxd-hero">
	<h1 class="uxd-hero__header">BYU User Experience Design Club</h1>
	<a class="uxd-button-link" href="#">Join Club</a>
	<a class="uxd-button-link" href="#">Subscribe to Newsletter</a>
	<div class="uxd-hero__social-icons">
		<img class="uxd-hero__social-icon" src="<?php echo esc_url( sprintf( '%s/facebook-brands-red.svg', $social_icons_directory ) ); ?>">
		<img class="uxd-hero__social-icon" src="<?php echo esc_url( sprintf( '%s/slack-brands-red.svg', $social_icons_directory ) ); ?>">
		<img class="uxd-hero__social-icon" src="<?php echo esc_url( sprintf( '%s/twitter-brands-red.svg', $social_icons_directory ) ); ?>">
		<img class="uxd-hero__social-icon" src="<?php echo esc_url( sprintf( '%s/instagram-brands-red.svg', $social_icons_directory ) ); ?>">
		<img class="uxd-hero__social-icon" src="<?php echo esc_url( sprintf( '%s/envelope-solid-red.svg', $social_icons_directory ) ); ?>">
	</div>
	<img class="uxd-hero__background-icon uxd-hero__background-icon--mobile" src="<?php echo esc_url( sprintf( '%s/mobile-alt-solid.svg', $icons_directory ) ); ?>">
	<img class="uxd-hero__background-icon uxd-hero__background-icon--laptop" src="<?php echo esc_url( sprintf( '%s/laptop-solid.svg', $icons_directory ) ); ?>">
	<img class="uxd-hero__background-icon uxd-hero__background-icon--desktop" src="<?php echo esc_url( sprintf( '%s/desktop-solid.svg', $icons_directory ) ); ?>">
</div>
<?php
get_footer();
