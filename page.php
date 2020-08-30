<?php
/**
 * The default page theme
 *
 * @author Caleb Young <caleb.a.young@gmail.com>
 * @package byu-uxd-theme
 */

get_header();
?>
<main class="uxd-page uxd-main">
	<h1><?php the_title(); ?></h1>
	<?php the_content(); ?>
</main>
<?php
get_footer();
