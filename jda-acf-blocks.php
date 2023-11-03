<?php

/* 
  Plugin Name: ACF Blocks 
  Description:  The developer tools panel for WordPress.
  Version:      1.0
*/

add_action('init', 'jda_register_acf_blocks', 5);

function jda_register_acf_blocks()
{

	// Register Header Template
	register_block_type(__DIR__ . '/header-template');

	// Register  Header Services
	register_block_type(__DIR__ . '/header-services');

	// Register Header Resources
	register_block_type(__DIR__ . '/header-resources');

	// Register Header About us
	register_block_type(__DIR__ . '/header-about');

	// Register  Header Contact
	register_block_type(__DIR__ . '/header-contact');

	// Register Spacer
	register_block_type(__DIR__ . '/spacer');

	// Register Brands
	register_block_type(__DIR__ . '/brands');

	// Register Process
	register_block_type(__DIR__ . '/process');

	// Register Results
	register_block_type(__DIR__ . '/results');

	// Register Video
	register_block_type(__DIR__ . '/video');

	// Register CTA
	register_block_type(__DIR__ . '/cta');

	// Register Cabecera  block
	register_block_type(__DIR__ . '/case-study');

	// Register FAQ
	register_block_type(__DIR__ . '/faq');

	// Register Goals
	register_block_type(__DIR__ . '/goals');

	// Register Grid Cases
	register_block_type(__DIR__ . '/grid-cases');

	// Register Values
	register_block_type(__DIR__ . '/values');

	// Register Team
	register_block_type(__DIR__ . '/team-slider');

	// Register Testimonials
	register_block_type(__DIR__ . '/testimonials');

	// Register First Phase
	register_block_type(__DIR__ . '/phase');

	// Register Second Phase
	register_block_type(__DIR__ . '/second_phase');

	// Register Third Phase
	register_block_type(__DIR__ . '/third_phase');

	// Register Fourth Phase
	register_block_type(__DIR__ . '/fourth_phase');

}


add_filter('block_categories_all', 'custom_block_category', 10, 2);
function custom_block_category($categories)
{

	array_unshift(
		$categories,
		array(
			'slug' => 'flyingcat_block_category',
			'title' => 'FlyingCat'
		)
	);

	return $categories;
}