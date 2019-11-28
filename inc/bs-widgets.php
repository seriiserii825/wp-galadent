<?php
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

function bs_galadent_widgets_init() {
	register_sidebar( array(
		'name'          => 'Language',
		'id'            => 'language',
		'description'   => 'wp-globus',
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '',
		'after_title'   => '',
	) );
}
add_action( 'widgets_init', 'bs_galadent_widgets_init' );

?>