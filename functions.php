<?php
/**
 * @package WordPress
 * @subpackage Tersus
 */

// Define Child Theme Constants

define('CHILD_THEME_URI', wp_get_theme()->get('ThemeURI'));
define('CHILD_THEME_NAME', wp_get_theme()->get('Name'));
define('CHILD_THEME_VERSION', trim(wp_get_theme()->get('Version')));
define('CHILD_THEME_DESCRIPTION', trim(wp_get_theme()->get('Description')));

// Theme feature support

if ( ! function_exists('theme_support_features') ) {
	function theme_support_features() {

		// Add theme support for automatic feed links
		// https://codex.wordpress.org/Automatic_Feed_Links
		add_theme_support( 'automatic-feed-links' );

		// Add theme support for featured images
		// https://codex.wordpress.org/Post_Thumbnails
		add_theme_support( 'post-thumbnails' );

		// Add theme support for document title tag
		// https://codex.wordpress.org/Title_Tag
		add_theme_support( 'title-tag' );

		}
	add_action( 'after_setup_theme', 'theme_support_features' );
}

// Add sidebar support
// https://developer.wordpress.org/reference/functions/register_sidebar/

if ( ! function_exists('tersus_register_sidebar') ) {
	function tersus_register_sidebar() {
		register_sidebar( array (
			'name'			=> 'Sidebar 1',
			'id'			=> 'sidebar-1',
			'before_widget'	=> '<li id="%1$s" class="widget %2$s">',
			'after_widget'	=> '</li>',
			'before_title'	=> '<h2 class="widgettitle">',
			'after_title'	=> '</h2>',
		) );

		register_sidebar( array (
			'name'			=> 'Sidebar 2',
			'id'			=> 'sidebar-2',
			'before_widget'	=> '<li id="%1$s" class="widget %2$s">',
			'after_widget'	=> '</li>',
			'before_title'	=> '<h2 class="widgettitle">',
			'after_title'	=> '</h2>',
		) );
	}
	add_action( 'widgets_init', 'tersus_register_sidebar' );
}


// Page menu support
// http://codex.wordpress.org/Function_Reference/register_nav_menus

if ( ! function_exists('register_my_menus') ) {
	function register_my_menus() {
		register_nav_menus(
			array( 'header-menu' => __('Header Menu', 'tersus-splorp') )
		);
	}
	add_action( 'init', 'register_my_menus' );
}

// Child Theme Navigation Link Delimiters

if ( ! function_exists( 'tersus_splorp_delim' ) ) {
	function tersus_splorp_delim($d) {
		return '&nbsp;';
		}

	add_filter( 'post_link_delim', 'tersus_splorp_delim' );
	add_filter( 'posts_link_delim', 'tersus_splorp_delim' );
	add_filter( 'image_link_delim', 'tersus_splorp_delim' );
	add_filter( 'comment_link_delim', 'tersus_splorp_delim' );

	}
?>
