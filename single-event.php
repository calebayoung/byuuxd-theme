<?php
/**
 * The automatically-generated single event template
 *
 * @author Caleb Young <caleb.a.young@gmail.com>
 * @package byu-uxd-theme
 */

$event_date     = get_field( 'date_time' );
$event_host     = get_field( 'event_host' );
$event_location = get_field( 'location' );
$event_flyer    = get_field( 'flyer' );
get_header();
?>
<main class="uxd-single-event uxd-page uxd-main">
	<h1><?php the_title(); ?></h1>
	<p>Date: <?php echo esc_html( $event_date ); ?></p>
	<p>Host: <?php echo esc_html( $event_host ); ?></p>
	<?php
	if ( ! empty( $event_location ) ) {
		?>
		<p>Location: <?php echo esc_html( $event_location ); ?></p>
		<?php
	}
	if ( ! empty( $event_flyer ) ) {
		?>
		<img class="uxd-event-flyer" src="<?php echo esc_url( $event_flyer ); ?>">
		<?php
	} else {
		?>
		<hr>
		<?php
	}
	if ( ! empty( get_the_content() ) ) {
		the_content();
	}
	?>
</main>
<?php
get_footer();
