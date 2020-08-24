<?php
/**
 * Template Name: Under Construction
 *
 * @author Caleb Young
 * @package byu-uxd-theme
 */

$theme_directory = get_template_directory_uri();
$icons_directory = "$theme_directory/icons";
get_header();
?>
<main class="uxd-main under-construction">
	<img class="under-construction__icon" src="<?php echo esc_url( sprintf( '%s/hard-hat-solid.svg', $icons_directory ) ); ?>">
	<h1 class="uxd-title">Under Construction</h1>
	<hr class="uxd-title-border">
	<p>Sorry, the page you're on is still being built. Check back soon!</p>
</main>
<?php
get_footer();
