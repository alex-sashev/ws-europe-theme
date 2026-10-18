<?php
/**
 * Widows Sons Europe — child theme of Twenty Twenty-Five.
 */

defined( 'ABSPATH' ) || exit;

add_action( 'wp_enqueue_scripts', function () {
	// TODO before launch: self-host these fonts (EU courts have fined sites for loading Google Fonts without consent).
	wp_enqueue_style( 'ws-europe-fonts', 'https://fonts.googleapis.com/css2?family=Cinzel:wght@500;600;700&family=Source+Sans+3:ital,wght@0,400;0,600;0,700;1,400&display=swap', array(), null );
	wp_enqueue_style( 'ws-europe', get_stylesheet_uri(), array(), filemtime( get_stylesheet_directory() . '/style.css' ) );
} );

add_action( 'admin_notices', function () {
	if ( ! function_exists( 'ws_chapter_card' ) && current_user_can( 'activate_plugins' ) ) {
		echo '<div class="notice notice-warning"><p>' . esc_html__( 'This theme requires the “Widows Sons Chapters” plugin to display chapter profiles, the directory and the map.', 'ws-europe' ) . '</p></div>';
	}
} );

/*
 * Link helpers for templates, so links work wherever the site lives (subfolder, staging, Playground).
 * [ws_news_url]               The posts page (News), or the home page if none is set.
 * [ws_page_url slug=about]    A page by its slug.
 */
add_action( 'init', function () {
	add_shortcode( 'ws_news_url', function () {
		$id = (int) get_option( 'page_for_posts' );
		return esc_url( $id ? get_permalink( $id ) : home_url( '/' ) );
	} );
	add_shortcode( 'ws_site_logo', 'ws_europe_site_logo' );
	add_shortcode( 'ws_site_mark', 'ws_europe_site_mark' );
	add_shortcode( 'ws_home_url', function () {
		return esc_url( home_url( '/' ) );
	} );
	add_shortcode( 'ws_stats_bar', 'ws_europe_stats_bar' );
	add_shortcode( 'ws_admin_url', function () {
		$members = get_page_by_path( 'members' );
		return esc_url( $members ? wp_login_url( get_permalink( $members ) ) : wp_login_url() );
	} );
	add_shortcode( 'ws_year', function () {
		return esc_html( wp_date( 'Y' ) );
	} );
	add_shortcode( 'ws_page_url', function ( $atts ) {
		$atts = shortcode_atts( array( 'slug' => '' ), (array) $atts );
		$page = $atts['slug'] ? get_page_by_path( sanitize_title( $atts['slug'] ) ) : null;
		return esc_url( $page ? get_permalink( $page ) : home_url( '/' ) );
	} );
} );

/** Home stats bar: chapters, countries, kilometres, one brotherhood, and the motto. */
function ws_europe_stats_bar() {
	$chapters  = (int) wp_count_posts( 'ws_chapter' )->publish;
	$countries = function_exists( 'ws_country_map_data' ) ? count( ws_country_map_data() ) : 0; // Countries that have chapters.
	$icons     = array(
		'people' => '<circle cx="24" cy="15" r="6"/><circle cx="11" cy="19" r="4.5"/><circle cx="37" cy="19" r="4.5"/><path d="M13 40c0-7 5-12 11-12s11 5 11 12M3 38c0-5 3.5-9 8-9M45 38c0-5-3.5-9-8-9"/>',
		'pin'    => '<path d="M24 44s-13-11.5-13-21a13 13 0 0 1 26 0c0 9.5-13 21-13 21z"/><circle cx="24" cy="22" r="5"/>',
		'road'   => '<path d="M18 6 8 42M30 6l10 36M24 8v6M24 20v6M24 32v6"/>',
		'hands'  => '<path d="M4 24l8-8 8 4 6-4 8 2 10 6M10 22l10 10a3 3 0 0 0 4-4M18 30l4 4a3 3 0 0 0 4-4M22 26l6 6a3 3 0 0 0 4-4l-8-8"/>',
	);
	$items = array(
		array( 'people', $chapters, __( 'Listed chapters', 'ws-europe' ) ),
		array( 'pin', $countries, __( 'Countries represented', 'ws-europe' ) ),
		array( 'road', __( 'Shared', 'ws-europe' ), __( 'Journeys and experiences', 'ws-europe' ) ),
		array( 'hands', __( 'One', 'ws-europe' ), __( 'Spirit of brotherhood', 'ws-europe' ) ),
	);
	$out = '<div class="ws-stats-bar__inner">';
	foreach ( $items as $item ) {
		$out .= sprintf(
			'<div class="ws-stat"><svg viewBox="0 0 48 48" aria-hidden="true">%s</svg><p><strong>%s</strong><span>%s</span></p></div>',
			$icons[ $item[0] ],
			esc_html( $item[1] ),
			esc_html( $item[2] )
		);
	}
	return $out . '<blockquote class="ws-stat-quote"><p>' . esc_html__( '“Different roads. Shared values. Brotherhood beyond borders.”', 'ws-europe' ) . '</p></blockquote></div>';
}

/**
 * Site logo: the one uploaded under Appearance → Editor (Site Logo) / Settings, otherwise the
 * Widows Sons emblem that ships with the theme.
 */
function ws_europe_site_logo() {
	$id = (int) get_theme_mod( 'custom_logo' ) ?: (int) get_option( 'site_logo' );
	if ( $id && wp_attachment_is_image( $id ) ) {
		return wp_get_attachment_image( $id, 'medium', false, array( 'class' => 'ws-logo', 'alt' => get_bloginfo( 'name' ) ) );
	}
	return sprintf(
		'<img class="ws-logo" src="%s" width="640" height="344" alt="%s">',
		esc_url( get_stylesheet_directory_uri() . '/assets/ws-logo.png' ),
		esc_attr__( 'Widows Sons emblem', 'ws-europe' )
	);
}

/** Header mark: the uploaded Site Logo if there is one, otherwise the winged-triangle mark. */
function ws_europe_site_mark() {
	$id = (int) get_theme_mod( 'custom_logo' ) ?: (int) get_option( 'site_logo' );
	if ( $id && wp_attachment_is_image( $id ) ) {
		return ws_europe_site_logo();
	}
	return sprintf(
		'<img class="ws-logo ws-logo--mark" src="%s" width="440" height="186" alt="%s">',
		esc_url( get_stylesheet_directory_uri() . '/assets/ws-mark.png' ),
		esc_attr__( 'Widows Sons emblem', 'ws-europe' )
	);
}

/* Browser-tab icon: the winged triangle and eye on black, unless a Site Icon has been set in the admin. */
add_action( 'wp_head', function () {
	if ( has_site_icon() ) {
		return;
	}
	$base = get_stylesheet_directory_uri() . '/assets/';
	echo '<link rel="icon" href="' . esc_url( $base . 'ws-icon-32.png' ) . '" sizes="32x32">' . "\n";
	echo '<link rel="icon" href="' . esc_url( $base . 'ws-icon.png' ) . '" sizes="512x512">' . "\n";
	echo '<link rel="apple-touch-icon" href="' . esc_url( $base . 'ws-icon-180.png' ) . '">' . "\n";
}, 1 );
