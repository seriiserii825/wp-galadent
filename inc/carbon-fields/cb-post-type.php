<?php

	if ( ! defined( 'ABSPATH' ) ) {
		exit;
	}

	use Carbon_Fields\Container;
	use Carbon_Fields\Field;


	add_action( 'carbon_fields_register_fields', 'crb_attach_finance_post_type_options' );
	function crb_attach_finance_post_type_options() {
		Container::make( 'post_meta', __( 'Slider' ) )
		         ->where( 'post_type', '=', 'slider' )
		         ->add_fields( array(
			         Field::make('text', 'crb_slider_text_ro', 'Text ro')
				         ->set_width(50),
			         Field::make('text', 'crb_slider_text_ru', 'Text ru')
				         ->set_width(50),
		         ) );

	}
