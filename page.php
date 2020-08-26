<?php
/**
 * The default page theme
 *
 * @author Caleb Young <caleb.a.young@gmail.com>
 * @package byu-uxd-theme
 */

$theme_directory = get_template_directory_uri();
$icons_directory = "$theme_directory/icons";
get_header();
?>
<main class="uxd-page uxd-main">
	<h1><?php the_title(); ?></h1>
	<?php the_content(); ?>
</main>
<?php
get_footer();
