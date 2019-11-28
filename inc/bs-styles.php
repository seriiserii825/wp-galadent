<?php
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

function bs_galadent_scripts() {
	wp_enqueue_style( 'bs-galadent-style', get_stylesheet_uri() );
	wp_enqueue_style( 'bs-galadent-animate-style', get_stylesheet_directory_uri().'/assets/libs/wow/animate.min.css' );
	wp_enqueue_style( 'bs-galadent-my-style', get_stylesheet_directory_uri().'/assets/css/my.css' );

	// Регистрация jQuery
	add_action( 'wp_enqueue_scripts', 'jquery_script_method' );
	function jquery_script_method() {
		wp_deregister_script( 'jquery' );
		wp_register_script( 'jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js');
		wp_enqueue_script( 'jquery' );
	}

	wp_enqueue_script( 'bs-galadent-wow.min', get_template_directory_uri() . '/assets/libs/wow/wow.min.js', array('jquery'), null, true );
	wp_enqueue_script( 'bs-galadent-slick-js', get_template_directory_uri() . '/assets/libs/slick/slick/slick.min.js', array('jquery'), null, true );
	wp_enqueue_script( 'bs-galadent-main-js', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), null, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'bs_galadent_scripts' );
