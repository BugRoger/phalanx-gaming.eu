<?php

add_action( 'wp_enqueue_scripts', 'phalanx_gaming_eu_enqueue_scripts' );

if ( ! function_exists( 'phalanx_gaming_eu_enqueue_scripts' ) ) :

/**
* Add theme styles and scripts here
*/
function phalanx_gaming_eu_enqueue_scripts() {

	if ( ! is_admin() ) {
		wp_enqueue_style(
			'phalanx_gaming_eu-style',
			get_bloginfo( 'stylesheet_url' )
		);
	}

}

endif; // phalanx_gaming_eu_enqueue_scripts

add_action( 'after_setup_theme', 'phalanx_gaming_eu_setup' );

if ( ! function_exists( 'phalanx_gaming_eu_setup' ) ) :

/**
* Set up your theme here
*/
function phalanx_gaming_eu_setup() {
	add_theme_support( 'post-thumbnails' );
}

endif; // phalanx_gaming_eu_setup
