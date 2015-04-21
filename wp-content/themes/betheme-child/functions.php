<?php

/* ---------------------------------------------------------------------------
 * Child Theme URI | DO NOT CHANGE
 * --------------------------------------------------------------------------- */
define( 'CHILD_THEME_URI', get_stylesheet_directory_uri() );


/* ---------------------------------------------------------------------------
 * Define | YOU CAN CHANGE THESE
 * --------------------------------------------------------------------------- */

// White Label --------------------------------------------
define( 'WHITE_LABEL', false );

// Static CSS is placed in Child Theme directory ----------
define( 'STATIC_IN_CHILD', false );


/* ---------------------------------------------------------------------------
 * Enqueue Style
 * --------------------------------------------------------------------------- */
add_action( 'wp_enqueue_scripts', 'enqueue_parent_theme_style', 101 );
function enqueue_parent_theme_style() {
	
	// Enqueue the parent stylesheet
	wp_enqueue_style( 'style', get_template_directory_uri() .'/style.css' );
	
	// Enqueue the parent rtl stylesheet
	if ( is_rtl() ) {
		wp_enqueue_style( 'mfn-rtl', get_template_directory_uri() . '/rtl.css' );
	}
	
	// Enqueue the child stylesheet
	wp_enqueue_style( 'mfn-child-style', get_stylesheet_directory_uri() .'/style.css' );
}

?>