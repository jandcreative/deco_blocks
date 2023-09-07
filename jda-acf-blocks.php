<?php

/* Plugin Name: ACF Blocks */

add_action( 'init', 'jda_register_acf_blocks', 5 );

function jda_register_acf_blocks() {



	// Register Notification block

	register_block_type( __DIR__ . '/hero' );
	
	// Register Banner block
	
	register_block_type( __DIR__ . '/banner' );





}