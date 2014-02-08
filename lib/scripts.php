<?php
/**
 * Enqueue scripts and stylesheets
 */
function shoestrap_scripts() {

	wp_enqueue_style( 'shoestrap_css', apply_filters( 'shoestrap_main_stylesheet_url', SHOESTRAP_ASSETS_URL . '/css/style-default.css' ), false, null );

	wp_register_script( 'modernizr',         SHOESTRAP_ASSETS_URL . '/js/vendor/modernizr-2.7.0.min.js', false, null, false );
	wp_register_script( 'shoestrap_plugins', SHOESTRAP_ASSETS_URL . '/js/bootstrap.min.js',              false, null, true  );
	wp_register_script( 'shoestrap_main',    SHOESTRAP_ASSETS_URL . '/js/main.js',                       false, null, true  );
	wp_register_script( 'fitvids',           SHOESTRAP_ASSETS_URL . '/js/vendor/jquery.fitvids.js',      false, null, true  );

	wp_enqueue_script( 'jquery'            );

	wp_enqueue_script( 'modernizr'         );
	wp_enqueue_script( 'shoestrap_plugins' );
	wp_enqueue_script( 'shoestrap_main'    );
	wp_enqueue_script( 'fitvids' );

	if ( is_single() && comments_open() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );
}
add_action( 'wp_enqueue_scripts', 'shoestrap_scripts', 100 );