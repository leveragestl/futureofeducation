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

// =============================================================================
// Gravity Forms - Autopopulate HTML field with ACF sub field 'letter' for Get Involved page
// =============================================================================
add_filter( 'gform_pre_render_3', 'future2025_populate_gf_html_with_acf_letter' );
add_filter( 'gform_pre_validation_3', 'future2025_populate_gf_html_with_acf_letter' );
add_filter( 'gform_pre_submission_filter_3', 'future2025_populate_gf_html_with_acf_letter' );
add_filter( 'gform_admin_pre_render_3', 'future2025_populate_gf_html_with_acf_letter' );
add_filter( 'gform_pre_render_6', 'future2025_populate_gf_html_with_acf_letter' );
add_filter( 'gform_pre_validation_6', 'future2025_populate_gf_html_with_acf_letter' );
add_filter( 'gform_pre_submission_filter_6', 'future2025_populate_gf_html_with_acf_letter' );
add_filter( 'gform_admin_pre_render_6', 'future2025_populate_gf_html_with_acf_letter' );

function future2025_populate_gf_html_with_acf_letter($form) {
  $post_id = get_queried_object_id();
  if (!$post_id) {
      $post_id = get_the_ID();
  }
  $letter = get_field('forms_group', $post_id)['forms'][0]['letter'];

  // if (have_rows('forms_group')) : while (have_rows('forms_group')) : the_row();
  //   if (have_rows('forms')) : while (have_rows('forms')) : the_row();
  //     $letter = get_sub_field('letter');
  //   endwhile; endif;
  // endwhile; endif;

  foreach ($form['fields'] as &$field) {
    if ($field->type == 'html' && $field->id == 16) {
      $field->content = $letter;
    }
  }
  return $form;
}

// add_action('wp_head', 'test');
// function test() {
//   echo '<pre>';
//   var_dump(get_field('forms_group', 12)['forms'][0]['letter']);
//   echo '</pre>';
// }