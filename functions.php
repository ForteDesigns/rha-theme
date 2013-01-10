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
 * Menu control
 */
register_nav_menus( array(
	'primary' => __('Primary Menu', 'rha-theme'),
	'secondary' => __('Secondary Menu', 'rha-theme')
));