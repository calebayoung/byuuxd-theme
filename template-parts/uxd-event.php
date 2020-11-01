<?php
/**
 * A calendar-themed block containing event information
 *
 * @var array $args
 * @author Caleb Young <caleb.a.young@gmail.com>
 * @package byu-uxd-theme
 */

?>
<a class="uxd-event__link" href="<?php echo esc_url( $args['event_link'] ); ?>">
	<div class="uxd-event">
		<div class="uxd-event__date">
			<div class="uxd-event__date-constraint">
				<p class="uxd-event__month"><?php echo esc_html( $args['event_month'] ); ?></p>
				<p class="uxd-event__day-number"><?php echo esc_html( $args['event_day'] ); ?></p>
				<p class="uxd-event__day"><?php echo esc_html( $args['event_weekday'] ); ?></p>
			</div>
		</div>
		<div class="uxd-event__info">
			<h2 class="uxd-event__title"><?php echo esc_html( $args['event_title'] ); ?></h2>
			<p class="uxd-event__text"><?php echo esc_html( $args['event_host'] ); ?></p>
			<p class="uxd-event__time">
				<?php
				echo esc_html( $args['event_time'] );
				if ( ! empty( $args['event_location'] ) ) {
					echo esc_html( sprintf( ' - %s', $args['event_location'] ) );
				}
				?>
			</p>
			<?php
			if ( ! empty( $args['event_calendar_link'] ) ) {
				?>
				<button class="uxd-event__calendar-link" data-calendar-link="<?php echo esc_url( $args['event_calendar_link'] ); ?>">+ Add to Calendar</button>
				<?php
			}
			?>
		</div>
	</div>
</a>
