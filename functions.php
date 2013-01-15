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

/**
 * Show links in excerpt
 */
function new_trim_excerpt($text) {
        global $post;
        if ( '' == $text ) {
                $text = get_the_content('');
                $text = apply_filters('the_content', $text);
                $text = str_replace('\]\]\>', ']]>', $text);
                $text = preg_replace('@<script[^>]*?>.*?</script>@si', '', $text);
                $text = strip_tags($text, '<a>');
                $excerpt_length = 80;
                $words = explode(' ', $text, $excerpt_length + 1);
                if (count($words)> $excerpt_length) {
                        array_pop($words);
                        array_push($words, '</a><a>ID)' . '">Read the Rest...</a>');
                        $text = implode(' ', $words);
                }
        }
        return $text;
}
remove_filter('get_the_excerpt', 'wp_trim_excerpt');
add_filter('get_the_excerpt', 'new_trim_excerpt');

/**
 * Exclude pages from search results
 */
function SearchFilter($query) {
	if ($query->is_search) {
		$query->set('post_type', 'post');
	}
	return $query;
}
add_filter('pre_get_posts','SearchFilter');