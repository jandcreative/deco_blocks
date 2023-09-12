<?php

/* Plugin Name: ACF Blocks */

add_action( 'init', 'jda_register_acf_blocks', 5 );

function jda_register_acf_blocks() {

	// Register Spacers block
	register_block_type( __DIR__ . '/spacer' );

	// Register Hero
	register_block_type( __DIR__ . '/hero' );

	// Register Brands block
	register_block_type( __DIR__ . '/brands' );

	// Register Result
	register_block_type( __DIR__ . '/results' );

	// Register Banner banner
	register_block_type( __DIR__ . '/cta' );

}
