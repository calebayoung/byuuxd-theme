<?php
/**
 * The site footer template
 *
 * @author Caleb Young <caleb.a.young@gmail.com>
 * @package byu-uxd-theme
 */

$home_url = get_home_url();
?>
		<footer class="uxd-footer">
			<div class="uxd-footer__constraint">
				<a href="<?php echo esc_url( $home_url ); ?>"><img class="uxd-footer__logo" src="<?php echo esc_url( sprintf( '%s/images/logo.png', get_template_directory_uri() ) ); ?>"></a>
				<div class="uxd-footer__grid uxd-footer__grid--borders">
					<div class="uxd-footer__grid-column">
						<a class="uxd-footer__link" href="<?php echo esc_url( sprintf( '%s/join', $home_url ) ); ?>">Join</a>
						<a class="uxd-footer__link" href="<?php echo esc_url( sprintf( '%s/events', $home_url ) ); ?>">Events</a>
						<a class="uxd-footer__link" href="<?php echo esc_url( sprintf( '%s/what-is-uxd', $home_url ) ); ?>">What is UXD?</a>
					</div>
					<div class="uxd-footer__grid-column">
						<a class="uxd-footer__link" href="<?php echo esc_url( sprintf( '%s/resources', $home_url ) ); ?>">Resources</a>
						<a class="uxd-footer__link" href="<?php echo esc_url( sprintf( '%s/internships', $home_url ) ); ?>">Internships</a>
						<a class="uxd-footer__link" href="<?php echo esc_url( sprintf( '%s/contact-us', $home_url ) ); ?>">Contact Us</a>
					</div>
					<div class="uxd-footer__grid-column">
						<div class="uxd-footer__social-icons">
							<a href="https://www.facebook.com/BYUUXD/" target="_blank"><img class="uxd-footer__social-link" src="<?php echo esc_url( sprintf( '%s/icons/social-media/facebook-brands-white.svg', get_template_directory_uri() ) ); ?>"></a>
							<a href="https://byuuxdclub.slack.com/" target="_blank"><img class="uxd-footer__social-link" src="<?php echo esc_url( sprintf( '%s/icons/social-media/slack-brands-white.svg', get_template_directory_uri() ) ); ?>"></a>
							<a href="https://www.linkedin.com/company/byu-uxd-association/" target="_blank"><img class="uxd-footer__social-link" src="<?php echo esc_url( sprintf( '%s/icons/social-media/linkedin-brands-white.svg', get_template_directory_uri() ) ); ?>"></a>
							<!-- <img class="uxd-footer__social-link" src="<?php echo esc_url( sprintf( '%s/icons/social-media/twitter-brands-white.svg', get_template_directory_uri() ) ); ?>"> -->
							<!-- <img class="uxd-footer__social-link" src="<?php echo esc_url( sprintf( '%s/icons/social-media/instagram-brands-white.svg', get_template_directory_uri() ) ); ?>"> -->
							<a href="mailto:byu.uxd@gmail.com" target="_blank"><img class="uxd-footer__social-link" src="<?php echo esc_url( sprintf( '%s/icons/social-media/envelope-solid-white.svg', get_template_directory_uri() ) ); ?>"></a>
						</div>
						<a class="uxd-footer__link" href="https://byu.us10.list-manage.com/subscribe?u=c7b89a067a3b921928fdfe62f&id=0f1edc5f72" target="_blank">Subscribe to Newsletter</a>
					</div>
				</div>
				<div class="uxd-footer__grid">
					<div class="uxd-footer__grid-column uxd-footer__grid-column--span-two">
						<p class="uxd-footer__text">Icons provided by <a class="uxd-footer__link" href="https://fontawesome.com/license" target="_blank">FontAwesome</a> (no changes made)</p>
					</div>
					<div class="uxd-footer__grid-column">
						<p class="uxd-footer__text">This site is proudly powered by <a class="uxd-footer__link" href="https://wordpress.org/" target="_blank">WordPress</a></p>
					</div>
				</div>
			</div>
		</footer>
	</body>
</html>
