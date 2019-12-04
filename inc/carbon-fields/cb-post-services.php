<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

use Carbon_Fields\Container;
use Carbon_Fields\Field;


add_action( 'carbon_fields_register_fields', 'crb_attach_post_services_options' );
function crb_attach_post_services_options() {
	Container::make( 'post_meta', __( 'Fields' ) )
	         ->where( 'post_term', '=', array(
		         'field'    => 'slug',
		         'value'    => 'services',
		         'taxonomy' => 'category',
	         ) )
	         ->add_fields( array(
		         Field::make( 'textarea', 'crb_post_services_text_ro', 'Text ro' )
		              ->set_width( 50 ),
		         Field::make( 'textarea', 'crb_post_services_text_ru', 'Text ru' )
		              ->set_width( 50 ),
	         ) );

}
