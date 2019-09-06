<?php
/**
 * Custom hooks.
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

if ( ! function_exists( 'understrap_site_info' ) ) {
	/**
	 * Add site info hook to WP hook library.
	 */
	function understrap_site_info() {
		do_action( 'understrap_site_info' );
	}
}

if ( ! function_exists( 'understrap_add_site_info' ) ) {
	add_action( 'understrap_site_info', 'understrap_add_site_info' );

	/**
	 * Add site info content.
	 */
	function understrap_add_site_info() {
		$the_theme = wp_get_theme();

		$site_info = sprintf(
			'© Natural Option. All Rights Reserved.',
			esc_url( __( 'https://naturaloption.com', 'natural-option' ) ),
			sprintf( // WPCS: XSS ok.
				/* translators:*/
				esc_html__( '© Natural Option. All Rights Reserved.', 'natural' )			)
		);

		echo apply_filters( 'understrap_site_info_content', $site_info ); // WPCS: XSS ok.
	}
}
