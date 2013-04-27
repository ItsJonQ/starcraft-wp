<?php
	require('functions/taxonomies.php');
	require('functions/terms.php');

	require('functions/templates.php');

	if ( ! isset( $content_width ) ) $content_width = 100;

	add_action( 'after_setup_theme', 'childtheme_formats', 11 );
	function childtheme_formats(){
	     remove_theme_support( 'post-formats');
	}

?>