<?php
/**
 * Widows Sons Europe — child theme of Twenty Twenty-Five.
 */

defined( 'ABSPATH' ) || exit;

add_action( 'wp_enqueue_scripts', function () {
	$dir = get_stylesheet_directory();
	$uri = get_stylesheet_directory_uri();

	// Same fonts as the current site. TODO before launch: self-host (EU courts have fined sites for loading Google Fonts without consent).
	wp_enqueue_style( 'ws-europe-fonts', 'https://fonts.googleapis.com/css2?family=Oswald:wght@300;400;500;600;700&family=IBM+Plex+Serif:ital,wght@0,400;1,400&family=IBM+Plex+Sans:wght@400;500;600&display=swap', array(), null );
	wp_enqueue_style( 'ws-europe-kit', $uri . '/assets/ws-kit.css', array(), filemtime( $dir . '/assets/ws-kit.css' ) );
	wp_enqueue_style( 'ws-europe', get_stylesheet_uri(), array( 'ws-europe-kit' ), filemtime( $dir . '/style.css' ) );
} );

add_action( 'admin_notices', function () {
	if ( ! function_exists( 'ws_chapter_card' ) && current_user_can( 'activate_plugins' ) ) {
		echo '<div class="notice notice-warning"><p>' . esc_html__( 'The Widows Sons Europe theme needs the "Widows Sons Chapters" plugin for chapter pages, the directory and the map.', 'ws-europe' ) . '</p></div>';
	}
} );
