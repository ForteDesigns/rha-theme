<?php

/**
 * Control the 'read more' message on front page post
 * summaries
 */
 function new_excerpt_more( $more ) {
 	return '...';
 }
 add_filter('excerpt_more', 'new_excerpt_more');
 
 /**
  * Add social badge section as additional nav menu item
  */
function add_social_menu($items, $args) {
	return $items . '<li>Be Social</li';
}
add_filter('wp_nav_menu_items', 'add_social_menu');
