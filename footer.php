<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>

<?php get_template_part( 'sidebar-templates/sidebar', 'footerfull' ); ?>

<div class="wrapper wrapper-footer" id="wrapper-footer">

	<div class="container">

		<div class="row">

			<div class="col-md-5">
				<?php the_custom_logo(); ?>
				<div class="newsletter-box">
					<p>Join our newsletter to stay up to date on features and relases</p>
					<form class="form-inline">
						<label class="sr-only" for="inlineFormInputName2">Name</label>
						<input type="text" class="form-control mb-2 mr-sm-2 newsletter-input" id="newsletter-email-input" placeholder="Your Email">
						<button type="submit" class="btn btn-secondary mb-2">Submit</button>
					</form>
				</div>
			</div>

			<div class="col-md-4 navbar-dark">
				<nav class="navbar navbar-dark">
				<?php wp_nav_menu(
					array(
						'theme_location'  => 'footer',
						'container_class' => 'footer-menu',
						'container_id'    => 'footerNavDropdown',
						'menu_class'      => 'navbar-nav',
						'fallback_cb'     => '',
						'menu_id'         => 'footer-menu',
						'depth'           => 2,
						'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
					)
				); ?>
				</nav>
			</div>

			<div class="col-md-3 social-box">
				<ul>
					<li><a href="#"><i class="fab fa-instagram"></i> Instagram</a></li>
					<li><a href="#"><i class="fab fa-facebook"></i> Facebook</a></li>
					<li><a href="#"><i class="fab fa-twitter"></i> Twitter</a></li>
				</ul>
			</div>

			<div class="col-md-12">

				<footer class="site-footer" id="colophon">

					<div class="site-info">

						<p>These statements have not been evaluated by the FDA. Natural Option products are not intended to diagnose, treat, cure, or prevent any disease. Information in this site is provided for informational purposes only. It is not meant to substitute for medical advice provided by your physician or other medical professional. You should not use the information contained herein for diagnosing or treating a health problem or disease, or prescribing any medication. You should read carefully product packaging and labels and consult your doctor before using our products. If you suspect that you have a medical problem, promptly contact your physician or health care provider.</p>

						<?php understrap_site_info(); ?>

					</div><!-- .site-info -->

				</footer><!-- #colophon -->

			</div><!--col end -->

		</div><!-- row end -->

	</div><!-- container end -->

</div><!-- wrapper end -->

</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

</body>

</html>

