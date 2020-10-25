<?php
/**
 * The automatically-generated front page template
 *
 * @author Caleb Young <caleb.a.young@gmail.com>
 * @package byu-uxd-theme
 */

$home_url                    = get_home_url();
$theme_directory             = get_template_directory_uri();
$icons_directory             = "$theme_directory/icons";
$social_icons_directory      = "$icons_directory/social-media";
$leadership_images_directory = "$theme_directory/images/leadership";
$events_query_args           = array(
	'post_type'   => 'event',
	'post_status' => 'publish',
);
$events_query                = new WP_Query( $events_query_args );
get_header();
?>
<div class="uxd-hero">
	<h1 class="uxd-hero__header">BYU User Experience Design Association</h1>
	<a class="uxd-button-link" href="https://clubs.byu.edu/clubs#/byuxd" target="_blank">Join Through BYUSA</a>
	<a class="uxd-button-link" href="https://byu.us10.list-manage.com/subscribe?u=c7b89a067a3b921928fdfe62f&id=0f1edc5f72" target="_blank">Subscribe to Newsletter</a>
	<div class="uxd-hero__social-icons">
		<a href="https://www.facebook.com/BYUUXD/" target="_blank"><img class="uxd-hero__social-icon" src="<?php echo esc_url( sprintf( '%s/facebook-brands-red.svg', $social_icons_directory ) ); ?>"></a>
		<a href="https://join.slack.com/t/byuuxdclub/shared_invite/zt-i92sb6yv-Pd_W_HeRnMg8KJJscVX6Yg" target="_blank"><img class="uxd-hero__social-icon" src="<?php echo esc_url( sprintf( '%s/slack-brands-red.svg', $social_icons_directory ) ); ?>"></a>
		<a href="https://www.linkedin.com/company/byu-uxd-association/" target="_blank"><img class="uxd-hero__social-icon" src="<?php echo esc_url( sprintf( '%s/linkedin-brands-red.svg', $social_icons_directory ) ); ?>"></a>
		<!-- <img class="uxd-hero__social-icon" src="<?php echo esc_url( sprintf( '%s/twitter-brands-red.svg', $social_icons_directory ) ); ?>"> -->
		<a href="https://www.instagram.com/byu.uxd/" target="_blank"><img class="uxd-hero__social-icon" src="<?php echo esc_url( sprintf( '%s/instagram-brands-red.svg', $social_icons_directory ) ); ?>"></a>
		<a href="mailto:byu.uxd@gmail.com" target="_blank"><img class="uxd-hero__social-icon" src="<?php echo esc_url( sprintf( '%s/envelope-solid-red.svg', $social_icons_directory ) ); ?>"></a>
	</div>
	<img class="uxd-hero__background-icon uxd-hero__background-icon--mobile" src="<?php echo esc_url( sprintf( '%s/mobile-alt-solid.svg', $icons_directory ) ); ?>">
	<img class="uxd-hero__background-icon uxd-hero__background-icon--laptop" src="<?php echo esc_url( sprintf( '%s/laptop-solid.svg', $icons_directory ) ); ?>">
	<img class="uxd-hero__background-icon uxd-hero__background-icon--desktop" src="<?php echo esc_url( sprintf( '%s/desktop-solid.svg', $icons_directory ) ); ?>">
</div>
<main class="uxd-main" style="padding-bottom: 0;">
	<h2 class="uxd-title">Zoom Meeting Link</h2>
	<hr class="uxd-title-border">
	<p><a href="https://byu.zoom.us/j/92805468405?pwd=bzVNaHlOQllqTEp3a3FUbzdmUXZ5UT09" target="_blank">Click here</a> to join the club Zoom meeting.</p>
	<p>Association meetings are held each Wednesday at 7pm (Mountain Time).</p>
</main>
<?php
$events_counter = 0;
$current_time   = strtotime( '-1 day' ); // We set current_time to yesterday so there's one day of overlap to display the upcoming event.
foreach ( $events_query->posts as $event ) {
	$event_time = strtotime( get_field( 'date_time', $event->ID ) );
	if ( $events_counter < 1 && $current_time < $event_time ) {
		$events_counter++;
		$event_flyer = get_field( 'flyer', $event->ID );
		if ( ! empty( $event_flyer ) ) {
			?>
			<main class="uxd-main" style="padding-bottom: 0;">
				<h2 class="uxd-title">Next Event</h2>
				<hr class="uxd-title-border">
				<a href="<?php echo esc_url( get_permalink( $event->ID ) ); ?>"><img class="uxd-event-flyer" src="<?php echo esc_url( $event_flyer ); ?>"></a>
			</main>
			<?php
		}
	}
}
?>
<div class="uxd-upcoming-events">
	<h2 class="uxd-title">Upcoming Events</h2>
	<hr class="uxd-title-border">
	<div class="uxd-upcoming-events__wrapper">
	<?php
	$events_counter = 0;
	foreach ( $events_query->posts as $event ) {
		$event_time = strtotime( get_field( 'date_time', $event->ID ) );
		if ( $events_counter < 4 && $current_time < $event_time ) {
			$events_counter++;
			$event_args = array(
				'event_title'    => $event->post_title,
				'event_link'     => get_permalink( $event->ID ),
				'event_month'    => gmdate( 'F', $event_time ),
				'event_day'      => gmdate( 'j', $event_time ),
				'event_weekday'  => gmdate( 'l', $event_time ),
				'event_host'     => get_field( 'event_host', $event->ID ),
				'event_time'     => gmdate( 'g:ia', $event_time ),
				'event_location' => get_field( 'location', $event->ID ),
			);
			get_template_part( 'template-parts/uxd-event', null, $event_args );
		}
	}
	if ( 0 === $events_counter ) {
		?>
		<p class="uxd-no-events-text">Stay tuned! Events will be posted here soon.</p>
		<?php
	} else {
		?>
		<div class="uxd-all-events-wrapper">
			<a class="uxd-button-link" href="<?php echo esc_url( sprintf( '%s/events', $home_url ) ); ?>">See All Events</a>
		</div>
		<?php
	}
	?>
	</div>
</div>
<main class="uxd-main">
	<h2 class="uxd-title">What is UXD?</h2>
	<hr class="uxd-title-border">
	<p>User Experience Design (UXD) is the process of designing digital or physical products that are useful, easy to use, and delightful to interact with.</p>
	<a class="uxd-button-link" href="<?php echo esc_url( sprintf( '%s/what-is-uxd', $home_url ) ); ?>">Learn More</a>
	<h2 class="uxd-title">Association Intro</h2>
	<hr class="uxd-title-border">
	<p>Our goal is to provide BYU students with:</p>
	<div class="uxd-goals">
		<p class="uxd-goal">
			<img class="uxd-goal__icon" src="<?php echo esc_url( sprintf( '%s/star-solid.svg', $icons_directory ) ); ?>">
			<strong class="uxd-goal__title">Opportunities</strong>to learn from professionals about industry practices and career paths
		</p>
		<p class="uxd-goal">
			<img class="uxd-goal__icon" src="<?php echo esc_url( sprintf( '%s/list-solid.svg', $icons_directory ) ); ?>">
			<strong>Resources</strong> to learn and practice new skills and build a portfolio
		</p>
		<p class="uxd-goal">
			<img class="uxd-goal__icon" src="<?php echo esc_url( sprintf( '%s/handshake-regular.svg', $icons_directory ) ); ?>">
			<strong>Networking</strong> to start bridging the gap between students and employers
		</p>
	</div>
<!-- 	<a class="uxd-button-link" href="<?php echo esc_url( sprintf( '%s/resources', $home_url ) ); ?>">Learn More</a> -->
	<!-- <h2 class="uxd-title">How to Get Started</h2>
	<hr class="uxd-title-border">
	<ol>
		<li>If you are new to the club and haven't officially signed up through <a href="#">BYU Clubs,</a> be sure to do that! It's quick, easy, and FREE.</li>
		<li>Sign up for our for <a href=#">weekly newsletter</a> for info about club events, job and internship opportunities, and links to tutorials and other learning content!</li>
		<li>Connect with us on these <a href="#">social media platforms</a> to receive by-the-minute updates about events and resources.</li>
		<li>Come to our club meetings every Thursday at 6 PM (check the <a href="#">event schedule</a> for room locations).</li>
		<li>Get your club t-shirt for only $10 by filling out <a href="#">this form.</a></li>
	</ol>
	<img style="margin-top: 2rem;" src="images/big_logo_tshirt-225x300.jpg"> -->
	<h2 class="uxd-title">Association Leadership</h2>
	<hr class="uxd-title-border">
	<div class="uxd-leadership">
		<div class="uxd-leadership__leader">
			<picture class="uxd-leadership__picture">
				<img class="uxd-leadership__image" src="<?php echo esc_url( sprintf( '%s/optimized/lily-stice.png', $leadership_images_directory ) ); ?>">
			</picture>
			<p class="uxd-leadership__name">Lily Stice</p>
			<p class="uxd-leadership__title">President</p>
		</div>
		<div class="uxd-leadership__leader">
			<picture class="uxd-leadership__picture">
				<img class="uxd-leadership__image" src="<?php echo esc_url( sprintf( '%s/optimized/rachel-goddard.png', $leadership_images_directory ) ); ?>">
			</picture>
			<p class="uxd-leadership__name">Rachel Goddard</p>
			<p class="uxd-leadership__title">Vice President</p>
		</div>
		<div class="uxd-leadership__leader">
			<picture class="uxd-leadership__picture">
				<img class="uxd-leadership__image" src="<?php echo esc_url( sprintf( '%s/optimized/derek-hansen.png', $leadership_images_directory ) ); ?>">
			</picture>
			<p class="uxd-leadership__name">Derek Hansen</p>
			<p class="uxd-leadership__title">Faculty Advisor</p>
		</div>
		<div class="uxd-leadership__leader">
			<picture class="uxd-leadership__picture">
				<img class="uxd-leadership__image" src="<?php echo esc_url( sprintf( '%s/optimized/clarissa-crosby.jpg', $leadership_images_directory ) ); ?>">
			</picture>
			<p class="uxd-leadership__name">Clarissa Crosby</p>
			<p class="uxd-leadership__title">Secretary</p>
		</div>
		<div class="uxd-leadership__leader">
			<picture class="uxd-leadership__picture">
				<img class="uxd-leadership__image" src="<?php echo esc_url( sprintf( '%s/optimized/keara-hutchinson.jpg', $leadership_images_directory ) ); ?>">
			</picture>
			<p class="uxd-leadership__name">Keara Hutchinson</p>
			<p class="uxd-leadership__title">Treasurer</p>
		</div>
		<div class="uxd-leadership__leader">
			<picture class="uxd-leadership__picture">
				<img class="uxd-leadership__image" src="<?php echo esc_url( sprintf( '%s/optimized/caleb-young.jpg', $leadership_images_directory ) ); ?>">
			</picture>
			<p class="uxd-leadership__name">Caleb Young</p>
			<p class="uxd-leadership__title">Marketing</p>
		</div>
		<div class="uxd-leadership__row-of-two">
			<div class="uxd-leadership__leader">
				<picture class="uxd-leadership__picture">
					<img class="uxd-leadership__image" src="<?php echo esc_url( sprintf( '%s/optimized/emily-wixom.jpg', $leadership_images_directory ) ); ?>">
				</picture>
				<p class="uxd-leadership__name">Emily Wixom</p>
				<p class="uxd-leadership__title">Graphic Design</p>
			</div>
			<div class="uxd-leadership__leader">
				<picture class="uxd-leadership__picture">
					<img class="uxd-leadership__image" src="<?php echo esc_url( sprintf( '%s/optimized/claire-manwaring.jpg', $leadership_images_directory ) ); ?>">
				</picture>
				<p class="uxd-leadership__name">Claire Manwaring</p>
				<p class="uxd-leadership__title">Communications</p>
			</div>
		</div>
	</div>
	<!-- <h2 class="uxd-title">Have a Question?</h2>
	<hr class="uxd-title-border">
	<p>Fill out the form below and we'll send an email right back!</p>
	<form class="uxd-contact-form">
		<label class="uxd-contact-form__label">Your Name</label>
		<input class="uxd-contact-form__text-input" type="text">
		<label class="uxd-contact-form__label">Your Email</label>
		<input class="uxd-contact-form__text-input" type="text">
		<label class="uxd-contact-form__label">Subject</label>
		<input class="uxd-contact-form__text-input" type="text">
		<label class="uxd-contact-form__label">Message</label>
		<textarea class="uxd-contact-form__textarea"></textarea>
		<input class="uxd-button-link" type="submit" value="Send Email">
	</form> -->
</main>
<?php
get_footer();
