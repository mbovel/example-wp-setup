<?php

add_action( 'init', function() {
	wp_register_style( 'example', get_template_directory_uri() . '/style.css', [], '1.0', 'all' );
} );


add_action( 'wp_enqueue_scripts', function() {
	if ( ! is_admin() ) {
		wp_enqueue_style( 'example' );
	}
} );
