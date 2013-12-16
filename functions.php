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

?>
