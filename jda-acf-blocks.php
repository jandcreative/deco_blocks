<?php

/* 
  Plugin Name: ACF Blocks 
  Description:  The developer tools panel for WordPress.
  Version:      1.0
*/

add_action( 'init', 'jda_register_acf_blocks', 5 );

function jda_register_acf_blocks() {

	// Register Cabecera  block
	register_block_type( __DIR__ . '/hero' );

	// Register Cabecera  block
	register_block_type( __DIR__ . '/cabecera' );

	// Register Spacers block
	register_block_type( __DIR__ . '/spacer' );

	// Register Brands block
	register_block_type( __DIR__ . '/brands' );

	// Register Process block
	register_block_type( __DIR__ . '/process' );

	// Register Result
	register_block_type( __DIR__ . '/alpha-process' );

	// Register Header Resources
	register_block_type( __DIR__ . '/header-resources' );

	// Register Result
	register_block_type( __DIR__ . '/results' );

	// Register Banner banner
	register_block_type( __DIR__ . '/video' );

	// Register Banner banner
	register_block_type( __DIR__ . '/cta' );

	// Register Header  block
	register_block_type( __DIR__ . '/header' );

	// Register Cabecera  block
	register_block_type( __DIR__ . '/case-study' );

	// Register FAQ block
	register_block_type( __DIR__ . '/faq' );

	// Register Goals block
	register_block_type( __DIR__ . '/goals' );

	// Register Grid Cases
	register_block_type( __DIR__ . '/grid-cases' );

	// Register Values
	register_block_type( __DIR__ . '/values' );
	
	// Register Team
	register_block_type( __DIR__ . '/team-slider' );
		
	// Register Testimonials
	register_block_type( __DIR__ . '/testimonials' );
	
	// Register Header Result	
	register_block_type( __DIR__ . '/header' );

	// Register Header About us
	register_block_type( __DIR__ . '/header-about' );

	// Register  Header Contact
	register_block_type( __DIR__ . '/header-contact' );


	// Register First Phase
	register_block_type( __DIR__ . '/phase' );

	// Register Second Phase
	register_block_type( __DIR__ . '/second_phase' );

	// Register Third Phase
	register_block_type( __DIR__ . '/third_phase' );

	// Register Fourth Phase
	register_block_type( __DIR__ . '/fourth_phase' );

}

