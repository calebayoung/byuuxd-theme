<?php
/**
 * The automatically-generated event archive template
 *
 * @author Caleb Young <caleb.a.young@gmail.com>
 * @package byu-uxd-theme
 */

get_header();
?>
<main class="uxd-page uxd-main">
	<h1>Events</h1>
</main>
<div class="uxd-events-archive">
	<?php
	$current_time = strtotime( '-1 day' );
	if ( have_posts() ) {
		while ( have_posts() ) {
			the_post();
			$event_time   = strtotime( get_field( 'date_time' ) );
			if ( $current_time < $event_time ) {
				$event_args = array(
					'event_title'    => get_the_title(),
					'event_link'     => get_permalink( get_the_ID() ),
					'event_month'    => gmdate( 'F', $event_time ),
					'event_day'      => gmdate( 'j', $event_time ),
					'event_weekday'  => gmdate( 'l', $event_time ),
					'event_host'     => get_field( 'event_host' ),
					'event_time'     => gmdate( 'g:ia', $event_time ),
					'event_location' => get_field( 'location' ),
				);
				get_template_part( 'template-parts/uxd-event', null, $event_args );
			}
		}
	}
	?>
</div>
<?php
get_footer();
