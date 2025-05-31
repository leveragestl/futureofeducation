<?php

// =============================================================================
// Excerpts
// =============================================================================

// Customize read more link
add_filter('excerpt_more', 'get_read_more_link');
function get_read_more_link() {
   return '...';
}

// Customize excerpt length
add_filter('excerpt_length', 'lev_custom_excerpt_length');
function lev_custom_excerpt_length($length) {
   global $post;
   if ($post->post_type == 'post')
      return 75;
   else if ($post->post_type == 'org')
      return 25;
   else
      return 25;
}

// =============================================================================
// Sanitize copy pasted into content editor
// =============================================================================
function configure_tinymce($in) {
	$in['paste_preprocess'] = "function(plugin, args){
		// Strip all HTML tags except those we have whitelisted
		var whitelist = 'p,b,strong,i,em,h1,h2,h3,h4,h5,h6,ul,li,ol,a,blockquote,br,table,tbody,th,tr,td';
		var stripped = jQuery('<div>' + args.content + '</div>');
		var els = stripped.find('*').not(whitelist);
		for (var i = els.length - 1; i >= 0; i--) {
			var e = els[i];
			jQuery(e).replaceWith(e.innerHTML);
		}
		// Strip all class and id attributes
		stripped.find('*').removeAttr('id').removeAttr('class').removeAttr('style');
		// Return the clean HTML
		args.content = stripped.html();
	}";
	return $in;
}
add_filter('tiny_mce_before_init','configure_tinymce');