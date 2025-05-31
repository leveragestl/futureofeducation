<?php

// =============================================================================
// Imports
// =============================================================================
include_once( get_stylesheet_directory() . '/lib/underscores-settings.php' );
include_once( get_stylesheet_directory() . '/lib/wordpress-settings.php' );

// =============================================================================
// Enqueue front-end scripts
// =============================================================================
function lev_enqueue_stylesheets() {
    $theme = wp_get_theme();

    // Stylesheets
    wp_enqueue_style( 'main', get_stylesheet_directory_uri() . '/dist/css/global.css', array(), $theme->get('Version') );
    wp_enqueue_style( 'adobe-fonts', 'https://use.typekit.net/pdl4lnk.css' );

    // Scripts
    wp_enqueue_script( 'main', get_stylesheet_directory_uri() . '/dist/js/main.bundle.js', array('jquery'), $theme->get('Version'), true );	
}
add_action( 'wp_enqueue_scripts', 'lev_enqueue_stylesheets' );

// =============================================================================
// Register Menus
// =============================================================================
register_nav_menus(
	array(
		'nav-primary' 		=> esc_html__( 'Primary Nav', 'future2025' ),
		'nav-footer' 	=> esc_html__( 'Footer Nav', 'future2025' ),
	)
);