<?php
	// Define paths
	define('ASSETS_PATH', get_stylesheet_directory_uri() . '/assets');
	define('CSS_PATH', ASSETS_PATH . '/css');
	define('JS_PATH', ASSETS_PATH . '/js');
	define('IMG_PATH', ASSETS_PATH . '/images');
	define('ICON_PATH', ASSETS_PATH . '/icons');

	// Require theme functions
	//require_once('functions/acf.php');
	require_once('functions/enqueue-styles.php');
	require_once('functions/enqueue-scripts.php');
	require_once('functions/cpt-solutions.php');


	//require_once('functions/menus.php');
	require_once('functions/images.php');
	//require_once('functions/admin.php');

	// Include Layout functions
	//require_once('functions/components/filters.php');
	//require_once('functions/components/heading.php');

?>
