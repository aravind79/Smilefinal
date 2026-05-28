<?php
/**
 * Theme functions and definitions
 *
 * @package Smile_Final
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 */
function smile_final_setup() {
	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 */
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'primary' => esc_html__( 'Primary Menu', 'smile-final' ),
		)
	);

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);
}
add_action( 'after_setup_theme', 'smile_final_setup' );

/**
 * Enqueue scripts and styles.
 */
function smile_final_scripts() {
	// Cache busting using filemtime
	$css_file = get_theme_file_path( 'assets/css/main.css' );
	$js_file  = get_theme_file_path( 'assets/js/main.js' );

	$css_version = file_exists( $css_file ) ? filemtime( $css_file ) : '1.0.0';
	$js_version  = file_exists( $js_file ) ? filemtime( $js_file ) : '1.0.0';

	// Enqueue Google Fonts (Playfair Display & Poppins) for optimal rendering
	wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,600;1,400&family=Poppins:wght@400;500;600&display=swap', array(), null );

	// Enqueue main CSS
	wp_enqueue_style( 'smile-final-main', get_theme_file_uri( 'assets/css/main.css' ), array(), $css_version );

	// Enqueue main JS: no dependencies, load in footer
	wp_enqueue_script( 'smile-final-main', get_theme_file_uri( 'assets/js/main.js' ), array(), $js_version, true );
}
add_action( 'wp_enqueue_scripts', 'smile_final_scripts' );

/**
 * Production-safe performance optimizations.
 * Removes obsolete tags and extra emoji scripts to improve Lighthouse scores.
 */
function smile_final_cleanup_head() {
	// Remove obsolete header links safely
	remove_action( 'wp_head', 'wp_generator' ); // Removes WordPress version
	remove_action( 'wp_head', 'wlwmanifest_link' ); // Removes Windows Live Writer link
	remove_action( 'wp_head', 'rsd_link' ); // Removes RSD link
	remove_action( 'wp_head', 'wp_shortlink_wp_head', 10, 0 ); // Removes shortlink
	
	// Remove native emoji scripts/styles (modern OS/browsers handle emojis natively)
	remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
	remove_action( 'wp_print_styles', 'print_emoji_styles' );
}
add_action( 'init', 'smile_final_cleanup_head' );
