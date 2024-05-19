<?php

/* Plugin Name: Decotherapy Blocks */

add_action('init', 'decotherapy_register_acf_blocks', 5);

function decotherapy_register_acf_blocks()
{

	// Equipo
	register_block_type(__DIR__ . '/equipo');

	// Register Hero Home block
	register_block_type(__DIR__ . '/hero-home');

	// Register Intro block
	register_block_type(__DIR__ . '/intro');

	// Register Imagen + Texto block
	register_block_type(__DIR__ . '/texto-imagen');

	// Register Imagen + Texto block
	register_block_type(__DIR__ . '/texto');

	// Register Marcas block
	register_block_type(__DIR__ . '/marcas');

	// Register Publicaciones block
	register_block_type(__DIR__ . '/publications');

	// Register Banner destacado block
	register_block_type(__DIR__ . '/banner-destacado');

	// Register Spacer block
	register_block_type(__DIR__ . '/espaciador');

	// Register Spacer block
	register_block_type(__DIR__ . '/testimonios');

	// Register Acodeon
	register_block_type(__DIR__ . '/acordeon');

	// Register CTA
	register_block_type(__DIR__ . '/cta');

	// Register CTA Faq
	register_block_type(__DIR__ . '/cta-faqs');

	// Register Banner Imagen Texto
	register_block_type(__DIR__ . '/banner-imagen-texto');

	// Imagenes Proyectos
	register_block_type(__DIR__ . '/imagenes-proyectos');

	// Proceso
	register_block_type(__DIR__ . '/proceso');

	// Register Form
	register_block_type(__DIR__ . '/form');

	// Decopacks
	register_block_type(__DIR__ . '/decopacks');

	// Decopacks Pymes
	register_block_type(__DIR__ . '/decopacks-pymes');

	// Grid Banners
	register_block_type(__DIR__ . '/grid-banners');

	/* 
		// Grid Members
		register_block_type(__DIR__ . '/grid-members'); */

	// Maps
	register_block_type(__DIR__ . '/maps');

	// Maps Mad
	register_block_type(__DIR__ . '/maps-mad');
	
	   
	// Register CTA
	register_block_type(__DIR__ . '/cta');

	// Register Spacer block
	register_block_type(__DIR__ . '/spacer');
}

