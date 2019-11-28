<?php
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

function bs_galadent_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'bs-galadent' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'bs-galadent' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'bs_galadent_widgets_init' );

?>