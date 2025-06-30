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

// =============================================================================
// Gravity Forms - filters the next, previous and submit buttons.
// Replaces the form's <input> buttons with <button> while maintaining attributes from original <input>.
// =============================================================================
add_filter( 'gform_submit_button', 'replace_submit_input', 10, 2 );
function replace_submit_input( $button, $form ) {
  $button_text = $form['button']['text'] ? $form['button']['text'] : 'Submit';
  return "<button class='button button--gradient' id='gform_submit_button_{$form['id']}' type='submit'><span class='label'>{$button_text}</span></button>";
}
