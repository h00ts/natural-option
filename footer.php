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

			<div class="col-md-4">
				<?php the_custom_logo(); ?>
				<div class="newsletter-box">
					<p>Join our newsletter to stay up to date on features and relases</p>
					<input type="text" class="form-control newsletter-input">
				</div>
			</div>

			<div class="col-md-4 navbar-dark">
				<nav class="navbar navbar-dark">
				<?php wp_nav_menu(
					array(
						'theme_location'  => 'footer',
						'container_class' => 'footer-menu',
						'container_id'    => 'footerNavDropdown',
						'menu_class'      => 'navbar-nav ml-auto',
						'fallback_cb'     => '',
						'menu_id'         => 'footer-menu',
						'depth'           => 2,
						'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
					)
				); ?>
				</nav>
			</div>

			<div class="col-md-4" class="social-box">
				<a href="#"><i class="fab fa-instagram"></i> Instagram</a>
				<a href="#"><i class="fab fa-facebook"></i> Facebook</a>
				<a href="#"><i class="fab fa-twitter"></i> Twitter</a>
			</div>

			<div class="col-md-12">

				<footer class="site-footer" id="colophon">

					<div class="site-info">

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

