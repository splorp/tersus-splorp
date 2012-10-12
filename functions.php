<?php
/**
 * @package WordPress
 * @subpackage Tersus
 */
?>

<?php

// Define Child Theme Constants

	$theme_name = 'splorp';

	$theme_data = get_theme_data( get_theme_root() . '/' . $theme_name . '/style.css');

	define('CHILD_THEME_URI', $theme_data['URI']);
	define('CHILD_THEME_NAME', $theme_data['Name']);
	define('CHILD_THEME_AUTHOR', $theme_data['Author']);
	define('CHILD_THEME_VERSION', trim($theme_data['Version']));
	define('CHILD_THEME_DESCRIPTION', trim($theme_data['Description']));

?>
