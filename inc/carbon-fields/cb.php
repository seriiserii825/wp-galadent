<?php

if (!defined('ABSPATH')) {
	exit;
}

use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action('carbon_fields_register_fields', 'crb_attach_theme_options');
function crb_attach_theme_options()
{
	$basic_options_container = Container::make('theme_options', __('Carbon Fields'))
		->add_tab(__('Contacts'), array(
			Field::make('text', 'crb_address_ro', __('address ro'))
				->set_width(50),
			Field::make('text', 'crb_address_ru', __('address ru'))
				->set_width(50),

			Field::make('text', 'crb_phone', __('Telefon')),
			Field::make('text', 'crb_mail', __('Mail')),
			Field::make('text', 'crb_facebook', __('Facebook')),
			Field::make('text', 'crb_twitter', __('Twitter')),
			Field::make('image', 'crb_logo_image', __('Logo image'))
			->set_value_type('url')
		));

	// Add second options page under 'Basic Options'
	Container::make('theme_options', 'Blocks')
		->set_page_parent($basic_options_container)// reference to a top level container
		->add_tab(__('Navigation'), array(
			Field::make('text', 'crb_navigation_title_ro', __('crb_navigation_title_ro'))
				->set_width(30),
			Field::make('text', 'crb_navigation_title_ru', __('crb_navigation_title_ru'))
				->set_width(30),
		));

	// Add second options page under 'Basic Options'
	Container::make('theme_options', 'Translate')
		->set_page_parent($basic_options_container)// reference to a top level container
		->add_fields( array(
			Field::make('text', 'crb_phone_translate_ro', __('Telefon'))
				->set_width(30),
			Field::make('text', 'crb_phone_translate_ru', __('Телефон'))
				->set_width(30),
		));

}

add_action('after_setup_theme', 'crb_load');
function crb_load()
{
	require_once(__DIR__ . '/../../vendor/autoload.php');
	\Carbon_Fields\Carbon_Fields::boot();
}