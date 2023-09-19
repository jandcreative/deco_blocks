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

	// Register Result
	register_block_type( __DIR__ . '/alpha' );

	// Register Result
	register_block_type( __DIR__ . '/alpha-process' );

	// Register Result
	register_block_type( __DIR__ . '/banner-contact' );

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

}

