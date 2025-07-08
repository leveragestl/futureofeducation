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
    
    // Enqueue Quill.js CSS with high priority - try different CDN
    wp_enqueue_style('quill', 'https://cdnjs.cloudflare.com/ajax/libs/quill/1.3.6/quill.snow.min.css', array(), '1.3.6', false);

    // Scripts
    wp_enqueue_script( 'main', get_stylesheet_directory_uri() . '/dist/js/main.bundle.js', array('jquery'), $theme->get('Version'), true );	
    
    // Enqueue Quill.js for WYSIWYG editor - try different CDN
    wp_enqueue_script('quill', 'https://cdnjs.cloudflare.com/ajax/libs/quill/1.3.6/quill.min.js', array(), '1.3.6', true);
}
add_action( 'wp_enqueue_scripts', 'lev_enqueue_stylesheets' );

// Add inline Quill CSS as fallback
function future2025_add_quill_css() {
    ?>
    <style>
    /* Quill.js Snow Theme CSS */
    .ql-container.ql-snow {
        border: 1px solid #ccc;
        font-size: 14px;
        font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, sans-serif;
    }
    .ql-toolbar.ql-snow {
        border: 1px solid #ccc;
        box-sizing: border-box;
        font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, sans-serif;
        padding: 8px;
    }
    .ql-toolbar.ql-snow .ql-formats {
        margin-right: 15px;
    }
    .ql-toolbar.ql-snow button {
        background: none;
        border: none;
        cursor: pointer;
        display: inline-block;
        float: left;
        height: 24px;
        padding: 3px 5px;
        width: 28px;
    }
    .ql-toolbar.ql-snow button:hover {
        background-color: #f3f3f3;
    }
    .ql-toolbar.ql-snow button.ql-active {
        background-color: #e6e6e6;
    }
    .ql-editor {
        min-height: 150px;
        line-height: 1.6;
        padding: 12px 15px;
    }
    .ql-editor p {
        margin: 0 0 1rem 0;
    }
    .ql-editor p, .ql-editor li {
        font-size: 1.125rem;
    }
    .ql-editor ul, .ql-editor ol {
        padding-left: 0.5rem;
        margin-bottom: 1rem;
    }
    </style>
    <?php
}
add_action('wp_head', 'future2025_add_quill_css');

// Add TinyMCE settings for front-end use
function future2025_tinymce_settings($init) {
    $init['selector'] = '.wysiwyg-field textarea';
    $init['menubar'] = false;
    $init['toolbar'] = 'bold italic underline | bullist numlist | link';
    $init['branding'] = false;
    $init['height'] = 500;
    $init['skin'] = 'oxide';
    $init['content_css'] = 'default';
    $init['plugins'] = 'lists link';
    $init['relative_urls'] = false;
    $init['remove_script_host'] = false;
    $init['convert_urls'] = false;
    return $init;
}
add_filter('tiny_mce_before_init', 'future2025_tinymce_settings');

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
// add_filter( 'gform_pre_render_3', 'future2025_populate_gf_html_with_acf_letter' );
// add_filter( 'gform_pre_validation_3', 'future2025_populate_gf_html_with_acf_letter' );
// add_filter( 'gform_pre_submission_filter_3', 'future2025_populate_gf_html_with_acf_letter' );
// add_filter( 'gform_admin_pre_render_3', 'future2025_populate_gf_html_with_acf_letter' );
// add_filter( 'gform_pre_render_6', 'future2025_populate_gf_html_with_acf_letter' );
// add_filter( 'gform_pre_validation_6', 'future2025_populate_gf_html_with_acf_letter' );
// add_filter( 'gform_pre_submission_filter_6', 'future2025_populate_gf_html_with_acf_letter' );
// add_filter( 'gform_admin_pre_render_6', 'future2025_populate_gf_html_with_acf_letter' );

// function future2025_populate_gf_html_with_acf_letter($form) {
//   $post_id = get_queried_object_id();
//   if (!$post_id) {
//       $post_id = get_the_ID();
//   }
//   $letter = get_field('forms_group', $post_id)['forms'][0]['letter'];

//   // if (have_rows('forms_group')) : while (have_rows('forms_group')) : the_row();
//   //   if (have_rows('forms')) : while (have_rows('forms')) : the_row();
//   //     $letter = get_sub_field('letter');
//   //   endwhile; endif;
//   // endwhile; endif;

//   foreach ($form['fields'] as &$field) {
//     if ($field->id == 18) {
//       $field->value = $letter;
//     }
//   }
//   return $form;
// }