<?php
/**
 * @package WordPress
 * @subpackage Tersus
 */

// Define Child Theme Constants

	$theme_name = 'splorp';
	$theme_data = wp_get_theme($theme_name);
	
	define('CHILD_THEME_URI', $theme_data->get('ThemeURI'));
	define('CHILD_THEME_NAME', $theme_data->get('Name'));
	define('CHILD_THEME_VERSION', trim($theme_data->get('Version')));
	define('CHILD_THEME_DESCRIPTION', trim($theme_data->get('Description')));

// Theme feature support
 
if ( ! function_exists('theme_support_features') ) {
	function theme_support_features() {

		// Add theme support for automatic feed links
		// http://codex.wordpress.org/Automatic_Feed_Links
		add_theme_support( 'automatic-feed-links' );

		// Add theme support for document title tag
		// https://codex.wordpress.org/Title_Tag
		add_theme_support( 'title-tag' );

		}
	add_action( 'after_setup_theme', 'theme_support_features' );
}


// Child Theme Navigation Link Delimiters

if ( ! function_exists( 'splorp_delim' ) ) {
	function splorp_delim($d) {
		return '&nbsp;';
		}
	
	add_filter( 'post_link_delim', 'splorp_delim' );
	add_filter( 'posts_link_delim', 'splorp_delim' );
	add_filter( 'image_link_delim', 'splorp_delim' );
	add_filter( 'comment_link_delim', 'splorp_delim' );
	
	}
?>
